<?php
// Local fixture; no WordPress runtime or production database.
define('ABSPATH',__DIR__.'/stub-wp/');
class WP_Error { public $message; function __construct($code,$msg){$this->message=$msg;} }
function is_wp_error($x){return $x instanceof WP_Error;}
function add_action(...$a){}
function wp_salt($x){return 'fixture-only-'.getmypid();}
function get_post_type($id){return $id===129?'pdb_plant':'page';}
function get_post_status($id){return 'draft';}
function is_user_logged_in(){return $GLOBALS['user']>0;}
function current_user_can($cap,...$args){return $GLOBALS['admin'];}
function get_current_user_id(){return $GLOBALS['user'];}
function sanitize_text_field($s){return strip_tags($s);}
function sanitize_textarea_field($s){return strip_tags($s);}
function wp_json_encode($v){return json_encode($v);}
function get_post_thumbnail_id($id){return $GLOBALS['featured'];}
function wp_check_filetype_and_ext($f,$n){return ['type'=>'image/webp'];}
function wp_tempnam($n){return tempnam(sys_get_temp_dir(),'hub-test');}
function media_handle_sideload($a,$id,$desc,$meta){$GLOBALS['imported']++;$GLOBALS['file']=$a['tmp_name'];$GLOBALS['caption']=$meta['post_excerpt'];return 9001;}
function update_post_meta($id,$key,$v){$GLOBALS['alt']=$v;}
function wp_get_original_image_path($id){return $GLOBALS['file'];}
function wp_get_attachment_url($id){return 'https://example.test/cover.webp';}
function get_post_meta($id,$key,$single){return $GLOBALS['alt'];}
function wp_get_attachment_caption($id){return $GLOBALS['caption'];}
function set_post_thumbnail($id,$media){$GLOBALS['featured']=$media;}
function wp_register_ability($name,$args){$GLOBALS['abilities'][$name]=$args;}
require dirname(__DIR__).'/pdb-hub-media/pdb-hub-media.php';
$user=1;$admin=true;$featured=0;$imported=0;$count=0;
function ok($x,$label){global $count;if(!$x){fwrite(STDERR,"FAIL $label\n");exit(1);}echo 'PASS '.(++$count).' '.$label."\n";}
$bytes=file_get_contents($argv[1]);$a=['post_id'=>8771,'filename'=>'test.webp','file_size'=>strlen($bytes),'sha256'=>hash('sha256',$bytes),'alt_text'=>'ALT','caption'=>'Didascalia'];
PDB_Hub_Media::register();ok(count($abilities)===4,'4 abilities registered');
$admin=false;ok(is_wp_error(PDB_Hub_Media::start($a)),'non-admin denied');$admin=true;
ok(is_wp_error(PDB_Hub_Media::start(array_replace($a,['post_id'=>129]))),'plant rejected');
ok(is_wp_error(PDB_Hub_Media::start(array_replace($a,['post_id'=>8767]))),'non-allowlisted page rejected');
ok(is_wp_error(PDB_Hub_Media::start(array_replace($a,['filename'=>'../bad.webp']))),'path traversal rejected');
$s=PDB_Hub_Media::start($a);ok(is_array($s)&&$s['expected_featured_id']===0,'session opened');$t=$s['upload_id'];
$c=['upload_id'=>$t,'offset'=>0,'base64_chunk'=>base64_encode(substr($bytes,0,24000))];
$user=2;ok(is_wp_error(PDB_Hub_Media::chunk($c)),'foreign session denied');$user=1;
ok(is_wp_error(PDB_Hub_Media::chunk(array_replace($c,['offset'=>1]))),'gap rejected');
ok(is_wp_error(PDB_Hub_Media::chunk(array_replace($c,['base64_chunk'=>'****']))),'invalid base64 rejected');
ok(PDB_Hub_Media::chunk($c)['next_offset']===24000,'first chunk');ok(PDB_Hub_Media::chunk($c)['next_offset']===24000,'identical retry safe');
ok(is_wp_error(PDB_Hub_Media::chunk(array_replace($c,['base64_chunk'=>base64_encode(str_repeat('x',24000))]))),'different retry denied');
ok(is_wp_error(PDB_Hub_Media::finish(['upload_id'=>$t])),'incomplete finish rejected');
for($i=24000;$i<strlen($bytes);$i+=24000){$r=PDB_Hub_Media::chunk(['upload_id'=>$t,'offset'=>$i,'base64_chunk'=>base64_encode(substr($bytes,$i,24000))]);if(is_wp_error($r))die($r->message);}
ok($r['remaining_bytes']===0,'all chunks transferred');
$featured=99;ok(is_wp_error(PDB_Hub_Media::finish(['upload_id'=>$t])),'concurrent featured change rejected');$featured=0;
$f=PDB_Hub_Media::finish(['upload_id'=>$t]);ok(is_array($f)&&$f['status']==='assigned'&&$f['sha256']===$a['sha256']&&$f['featured_image_id']===9001,'finish verifies checksum and assigns');
ok($f['alt_text']==='ALT'&&$f['caption']==='Didascalia','metadata readback');ok(is_wp_error(PDB_Hub_Media::finish(['upload_id'=>$t]))&&$imported===1,'duplicate finish denied');@unlink($file);
$s=PDB_Hub_Media::start($a);ok(is_wp_error(PDB_Hub_Media::finish(['upload_id'=>$s['upload_id']])),'empty session finish denied');ok(PDB_Hub_Media::abort(['upload_id'=>$s['upload_id']])['aborted'],'abort cleans session');
$s=PDB_Hub_Media::start(array_replace($a,['file_size'=>3,'sha256'=>str_repeat('0',64)]));$t=$s['upload_id'];PDB_Hub_Media::chunk(['upload_id'=>$t,'offset'=>0,'base64_chunk'=>base64_encode('abc')]);ok(is_wp_error(PDB_Hub_Media::finish(['upload_id'=>$t])),'bad checksum rejected');PDB_Hub_Media::abort(['upload_id'=>$t]);
$s=PDB_Hub_Media::start(array_replace($a,['file_size'=>3,'sha256'=>hash('sha256','abc')]));$t=$s['upload_id'];PDB_Hub_Media::chunk(['upload_id'=>$t,'offset'=>0,'base64_chunk'=>base64_encode('abc')]);ok(is_wp_error(PDB_Hub_Media::finish(['upload_id'=>$t,'replace_featured'=>true])),'non-image rejected');PDB_Hub_Media::abort(['upload_id'=>$t]);
@rmdir(PDB_Hub_Media::root());echo "$count tests passed (fixture only)\n";
