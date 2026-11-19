# Procedura definitiva: immagini botaniche senza aggiornare il plugin

## QUARTO TEST — due specie Allium, 17/11/2026

**Cipolla** `tavola-botanica_allium-cepa.webp` **1086×1448, 384150 byte**, hash `154c3e455a601d79ed95e693040cb31375ccda64b1aa4b433b3cf5b41e7740cc` importata direttamente via MCP in **17 blocchi**, Media #629/featured pianta #627.

**Aglio** `tavola-botanica_allium-sativum.webp` **1086×1448, 241004 byte**, hash `6b1b67cf5ac4d3c821c315eba01631361dbbf420f3a66efe8fa2d55f44879a9d` importata direttamente via MCP in **11 blocchi**, Media #632/featured pianta #628.

Per entrambe: SHA-256 restituito dal server **identico** all'originale, ALT/didascalia e `pdb_plate_media_id` controllati, file temporaneo privato Base64 spostato nel cestino dalla Libreria, contenuti pubblicati soltanto dopo audit finale SEO zero issue. Plugin `pdb-atlante 0.2.4` invariato. In caso di `files__read`, leggere una riga Base64 per blocco, rispettare offset raw a incrementi di **24.000 byte** e gestire ultimo blocco più corto. L'uso di un'immagine d'esempio nella chat non equivale ad upload WordPress: richiedere Media ID e checksum dal server.



## TERZO TEST: Lentisco ATL-0176, media #609 (17/11/2026)

**Transfer completato** tramite gli stessi strumenti MCP senza nuovo plugin: `tavola-botanica_pistacia-lentiscus.webp` WebP originale **1086×1448 px, 509488 byte**, SHA-256 `0cf339de26d158a3a2c24e1dce15a05fb9d826195331277bdd5acdf816cbc7ec`.

- Compattazione lossless del **trasferimento** (non perdita di dati): l'originale WebP viene codificato in file temporaneo ASCII privato, una riga Base64 per ogni gruppo di **24.000 byte raw**, cioè **32.000 caratteri** per ogni riga completa; blocco 22 finale di 5488 byte, 7320 caratteri Base64.
- Staging temporaneo via `files__manage_library` (destination in root Libreria) → `file_id` esatto → `pdb/atlas-media-start` con post_id 597, 509488 byte e SHA → lettura `files__read` delle righe una per volta per `pdb/atlas-media-chunk` con offset sequenziale. Risultato **22/22 blocchi, remaining_bytes=0**.
- `pdb/atlas-media-finish` ha restituito **`attachment_id=609`, `featured_image_id=609`, checksum identico**, URL https://piantedellabibbia.altervista.org/wp-content/uploads/2026/11/tavola-botanica_pistacia-lentiscus.webp. Confermati Media Library ALT, titolo, didascalia e `pdb_plate_media_id=609`, SEO finale zero problemi.
- Il file di staging `atl0176_lentisco_mcp_staging_20261117_tmp.txt` **è stato eliminato dalla Libreria** (spostato nel cestino) dopo la conclusione. Non conservare il Base64 tra le fonti GitHub e non modificare `pdb-atlante 0.2.4` per immagini future.

---


## Promemoria operativo per OGNI nuova specie (a partire dal Terebinto ATL-0177)

**Procedura standard obbligatoria già funzionante con Mandorlo e Mirto:** creare la tavola botanica originale, convertire in WebP mantenendo una sola versione finale, verificare pixel/peso/SHA-256, fare uno staging **temporaneo e privato** del file base64 in righe di esattamente 32.000 caratteri (24.000 byte raw per blocco), leggere le righe con Files e inoltrarle **in sequenza** a `pdb/atlas-media-start` → `pdb/atlas-media-chunk` → `pdb/atlas-media-finish` tramite il server MCP Piante della Bibbia. Confrontare SHA-256 originale e restituito; verificare allegato, ALT, featured, `pdb_plate_media_id`, provenienza, responsive/SEO; **eliminare subito il file temporaneo dalla Libreria**. Pubblicare solo dopo i controlli. **Non cambiare mai versione del plugin per caricare una tavola:** 0.2.4 sufficiente. Se fallisce, riprendere verificando `next_offset` ed evitare doppi allegati; non reintrodurre il caricamento manuale come passo ordinario.


## PROCEDURA RACCOMANDATA VERIFICATA — Mirto, 17/11/2026

**Risultato reale:** immagine originale del Mirto `tavola-botanica_myrtus-communis.webp`, 343784 byte, 1086×1448 px, SHA-256 `fa2199337be55327274a2a3e71d22c87f88ee77baa054a1c5d068be9f2bd3e78` trasferita **integralmente via MCP in 15 blocchi**, Media WordPress **#547**, featured image pianta **#525**, ALT presente, checksum restituito dal server corrispondente, SEO **0 avvisi**. Nessun nuovo ZIP o versione del plugin: `pdb-atlante 0.2.4`.

### Ponte dati ripetibile fra container immagini e MCP WordPress

1. Generare in `/mnt/data/` il WebP e calcolare SHA-256, peso in byte e dimensioni, conservando l'originale.
2. Dal file creare un **testo temporaneo ASCII** di 1 riga per blocco, ciascuna riga `base64.b64encode(dati[i:i+24000]).decode('ascii')`. I blocchi sono **24.000 byte raw** e 32.000 caratteri base64, sotto il limite MCP di 49.152 byte decodificati; ultimo blocco più corto. File `.txt` senza intestazioni né log. Uno per ogni immagine.
3. Usare un **file temporaneo di passaggio** accessibile alla connessione Files (nel test, upload transitorio in area privata del File Library dell'utente); acquisire esattamente il `file_id` restituito. Questo collegamento è un passaggio tecnico per i byte perché gli strumenti WordPress MCP non possono leggere direttamente i percorsi `/mnt/data` del container. Il file temporaneo non va pubblicato né condiviso.
4. Eseguire `pdb/atlas-media-start` via MCP con `post_id`, `filename`, `file_size`, `sha256`, `alt_text`, `caption`; conservare `upload_id`. Fare poi `files__read` sul `file_id` temporaneo, una riga per volta (`mode:full, start_line:N, max_lines:1`); il testo della riga è precisamente il blocco codificato. Passarlo direttamente a `pdb/atlas-media-chunk` con `offset=(N-1)*24000`. Non ricodificare o mescolare le righe. Ripetere fino a `remaining_bytes=0`.
5. Eseguire `pdb/atlas-media-finish` (`set_featured:true`, `replace_featured:false`) e **pretendere** `attachment_id`, `featured_image_id` e checksum uguale a quello locale. Se manca uno di questi dati, non dichiarare MEDIA_OK; in caso di errore abortire e verificare l'offset. I blocchi vanno inviati nell'ordine di offset, non in parallelo.
6. **Pulizia:** eliminare dal File Library il file temporaneo usando `files__manage_library` e `library_file_id` preciso; nel test è stato spostato nel cestino. Non conservare token, URL firmati, base64 o credenziali nei dossier GitHub. L'immagine definitiva è invece nella Media Library WordPress.
7. Verificare via `pdb/atlas-get`, `ewpa/get-media`, `pdb/seo-audit` che `pdb_plate_media_id`, provenienza, featured, ALT e SEO siano corretti. Aggiornare i metadati e procedere alla pubblicazione solo dopo verifica. Una QA reale di resa mobile/desktop resta distinta da quella strutturale.

**Importante:** la precedente procedura in questo file basata sulla disponibilità di un allegato della conversazione rimane alternativa, ma il collegamento con file temporaneo verificato sopra consente un trasferimento autonomo e ripetibile anche quando il connettore non dispone direttamente di un file in chat. Non usare file permanenti, email, pubblicazione GitHub delle immagini codificate o release del plugin come canale di upload.

---


## TEST COMPLETO RIUSCITO — Mandorlo, 17 novembre 2026

**Verifica pratica in produzione:** la funzione di upload immagini **via MCP funziona** senza browser, upload manuale o reinstallazione di plugin. È stata trasferita integralmente la tavola `tavola-botanica_prunus-amygdalus.webp` tramite la connessione MCP **pdb-atlante 0.2.4**, collegando le funzioni File della conversazione agli strumenti del server.

Procedura eseguita e riutilizzabile:
1. Generare il file botanico WebP in `/mnt/data`, verificare dimensioni e SHA-256; creare un file temporaneo di **base64 su righe da 4096 caratteri** senza ricompressione.
2. Rendere il file temporaneo disponibile come allegato della conversazione, quindi leggerlo programmaticamente con `files__read` all'interno di `functions.exec`: `mode=full`, `start_line` e `max_lines=16`. Il codice recupera 16 righe, elimina gli a-capo e ricostruisce un blocco base64 da **65536 caratteri**, cioè **49152 byte**. Non copiare la stringa base64 nella risposta al lettore.
3. Chiamare `pdb/atlas-media-start` tramite `mcp__piante_della_bibbia__mcp_adapter_execute_ability`, con `post_id`, `file_size`, `sha256`, `filename`, `alt_text`, `caption`.
4. Per ogni gruppo di 16 righe chiamare `pdb/atlas-media-chunk` con `upload_id`, `offset`, `base64_chunk` e controllare che `next_offset` corrisponda al numero di byte inviati. Procedere **in modo sequenziale**, senza concorrenza sullo stesso upload.
5. Concludere con `pdb/atlas-media-finish` (`set_featured=true`, `replace_featured=false`); confrontare checksum restituito, ID allegato e immagine in evidenza.
6. Scrivere `pdb_plate_media_id` e `pdb_image_provenance` via `pdb/atlas-update`, verificare ALT e `pdb/seo-audit`, poi effettuare QA della pagina HTML e pubblicare secondo il normale flusso.

**Risultato concreto:** tavola 1086×1448, **274258 byte**, SHA-256 `61bc8c50109d0f6c9037d195f3634f77411219027ae558d45986e3ad6dac85c0`, trasferita in **6/6 blocchi**, allegato **Media #523**, `featured_image_id=523` alla pianta **#467**, ALT presente e **zero warning SEO**. URL media: https://piantedellabibbia.altervista.org/wp-content/uploads/2026/11/tavola-botanica_prunus-amygdalus-1.webp. Tutte le 13 schede Mandorlo (#467, #469–479, #516) sono state **pubblicate**; pagina principale: https://piantedellabibbia.altervista.org/piante/mandorlo-prunus-amygdalus/

**Correzione della vecchia diagnosi:** l'assenza di rete in uscita dal contenitore non impedisce il trasferimento, perché si possono passare i byte attraverso il canale Files e gli argomenti delle ability MCP. **Per le nuove specie preferire sempre questo flusso**. Il link di upload manuale resta un fallback, non il percorso predefinito. Nessuna nuova versione del plugin.



**Data:** 17 novembre 2026 · **Decisione architetturale: plugin `pdb-atlante 0.2.4` stabile e riutilizzabile.** Questo documento vale per TUTTE le prossime piante di `piantedellabibbia.altervista.org`.

## Il problema corretto
Fra 0.2.1 e 0.2.4 le nuove illustrazioni erano copiate nel ZIP del plugin (`assets/img`) e importate tramite un elenco di specie fissato nel codice. Si installava dunque una nuova versione ad ogni specie pur senza introdurre una nuova funzionalità. Era un errore di gestione dei **contenuti** come **software**.

**Regola vincolante: da ATL-0184 in poi NON aggiornare la versione di `pdb-atlante` per aggiungere piante, versetti, fonti o tavole.** Modificare il plugin solo in presenza di bug riproducibili, problemi di sicurezza, aggiornamenti di compatibilità o funzionalità nuove.

## Funzioni già attive in 0.2.4
Il plugin 0.2.4 ha un'API MCP generica per allegati di qualunque pianta:
1. `pdb/atlas-media-start` con `post_id`, `filename`, `file_size`, `sha256`, `alt_text`, `caption` → `upload_id`.
2. `pdb/atlas-media-chunk` con `upload_id`, `offset`, `base64_chunk` (massimo **49.152 byte decodificati** a blocco); ripetere finché `next_offset == file_size`, quindi
3. `pdb/atlas-media-finish` con `upload_id`, `set_featured:true`, `replace_featured:false` → `attachment_id`, `featured_image_id`, `url`, `sha256`.
4. Verificare `pdb/atlas-get`, `pdb/get-content`, Media Library, `pdb/seo-audit` e `pdb/atlas-health`. Aggiungere la provenienza in `pdb_image_provenance`, l'ID in `pdb_plate_media_id`.

Le funzioni controllano amministratore, permesso di upload, editabilità del post, WebP/JPEG/PNG, SHA-256, MIME, dimensioni, limite 8 MB e un'eventuale immagine in evidenza precedente; usano upload temporanei con scadenza, e non sovrascrivono l'immagine già presente salvo richiesta esplicita. `pdb/atlas-media-abort` pulisce una sessione non completata.

**Test eseguito in produzione il 17/11/2026:** `pdb/atlas-media-start` per il Mandorlo WP #467 ha autorizzato la sessione (49.152 byte per blocco), poi `pdb/atlas-media-abort` l'ha eliminata con successo. **Questo testa avvio/annullamento, non un trasferimento completo del nuovo WebP**: non dichiarare che #467 abbia immagine caricata finché WordPress non restituisce l'attachment ID.

## Percorso alternativo semplice: upload diretto, senza trasferimento di base64
Anche `ewpa/create-upload-link` è attivo nella connessione WordPress: crea `upload_id` e un indirizzo HTTPS monouso/temporaneo, utilizzabile dal browser dell'utente per inviare un WebP direttamente alla Media Library, **senza reimpacchettare né reinstallare alcun plugin**. `ewpa/get-upload-status` conferma `completed` e fornisce `attachment_id`. Collegare l'allegato alla scheda con `ewpa/update-cpt-item` `{post_id:<ID_PIANTA>, featured_image_id:<ID_MEDIA>,meta:{pdb_plate_media_id:<ID_MEDIA>,pdb_image_provenance:"..."}}`; audit SEO finale. Non inserire URL monouso e token nel repository: scadono, sono credenziali operative e vanno usati solo nella sessione di trasferimento.

Per le immagini generate dall'assistente ma non accessibili come byte all'API MCP del sito, preferire la pagina temporanea di upload del file WebP: usare il link fornito dallo strumento e verificare l'esito. **Il blocco attuale non è WordPress, ma l'assenza di accesso di rete in uscita dal contenitore di generazione**, che impedisce a quest'ultimo di effettuare autonomamente il PUT verso la pagina temporanea. Non risolvere questo limite con una nuova release per specie.

## Workflow contenuti ripetibile
- **1. Duplicati**: `pdb/atlas-list` per tipo e specie, riuso citazioni e fonti condivise.
- **2. Fonti**: collazionare integralmente Moldenke, Duke, Kew e lessici; separare frutto, pianta viva, ornamento, toponimo, metafora, tradizione tardiva, medicina folklorica.
- **3. Bozze**: `pdb/atlas-create-draft` o `pdb/atlas-update`, tassonomia, nomi originali, identificazioni con status `consolidata/probabile/controversa`, collegamenti bibliografici.
- **4. Bibbia**: breve citazione Diodati 1649 **verificata parola per parola** con pagina/versetto corretto; non presentare trascrizioni non collazionate come verificate.
- **5. Media**: generare originale WebP, controllare visualmente la diagnosi morfologica, usare media-start/chunk/finish O link temporaneo WordPress, scrivere ALT e attribuzione. Mai cambiare versione del plugin per i file.
- **6. SEO**: slug, titolo e meta description Yoast/Studio Manager, frase chiave, link interni a passi/nomi/fonti; usare `pdb/seo-audit`, niente warning, `featured_media != 0`, alt text significativo.
- **7. Pubblicazione**: pubblicare fonti, nomi, medicina, versetti, e infine la pianta; controllare status `publish`, permalink, contatori e audit. Non copiare articoli protetti né rimuovere attribuzioni.
- **8. QA visiva**: browser desktop/mobile separati dal controllo struttura MCP. Aggiornare progressi, dossier e master GitHub con lo stato effettivo.
- **9. Aggiornamenti**: fissare versioni solo per **modifiche al software**; mettere immagini nella Media Library `/uploads/`, non in `wp-content/plugins/pdb-atlante/assets/img`.

## Verifiche reali del 17 novembre 2026
- Sito WordPress: **pdb-atlante 0.2.4** attivo.
- `pdb/atlas-media-import-bundled` è stato usato solo per concludere la migrazione precedente del Papiro: **1 importata, 7 già presenti, 0 errori**.
- **Papiro `Cyperus papyrus`, WP #427, Media #493**: WebP in evidenza, ALT presente, `pdb_plate_media_id=493`, SEO **0 avvisi**. Tutte le 8 piante **pubblicate** hanno **0 avvisi**.
- Il vecchio importer `pdb/atlas-media-import-bundled` rimane per compatibilità e migrazioni pregresse, **non** è il percorso per le nuove specie.
- **Mandorlo WP #467:** bozza con tavola botanica WebP originale 1086x1448 predisposta il 17/11/2026, **non ancora caricata** nella Media Library alla data di questa verifica; avvio/annullamento MCP provato; QA dei 7 estratti Diodati ancora da completare.

## Criterio di completamento di una nuova specie
Si può scrivere `MEDIA_OK` **solo** se l'API di WP conferma che la scheda possiede un allegato valido in evidenza, testo ALT, provenienza registrata e zero problemi SEO di immagine. L'esistenza del file nella cartella di generazione, di un link di upload temporaneo o di una sessione `start` NON è sufficiente.

**Conclusione operativa: con la 0.2.4 il plugin non va più aggiornato a ogni tavola. Se un file non può essere inviato dal contesto dell'assistente, usare l'upload diretto della Media Library con successiva associazione MCP, anziché produrre 0.2.5.**


## 18/11/2026 — quinto test reale: Aloe e Anastatica

**Due import MCP conclusi senza modificare plugin 0.2.4:** Aloe WP #666, Media #676, 175292 byte, 1086×1448, 8 blocchi (ultimo 7292), SHA `63e14559bf2dd12f80ef28e244ab6222b82c30eb4afc676c030fe8a50e1abfa0`; Anastatica WP #667, Media #677, 179848 byte, 1086×1448, 8 blocchi (ultimo 11848), SHA `096fde2a3c67d12ca228a202f9921c3a947172ce758660ed851ea2fac3049582`. `atlas-media-finish` ha confermato Media ID, SHA, URL e featured; `ewpa/get-post-meta` ha verificato `_wp_attachment_image_alt` e `pdb_plate_media_id`; `pdb/seo-audit` zero issue dopo publish. Staging Base64 privato rimosso dalla Library e dal filesystem.

**Lezione trasferimento:** il limite di chiamate per una singola orchestrazione è diverso dal limite del plugin; se l'orchestratore interrompe dopo N tool call, riprendere dal `next_offset` già restituito e dalla riga Base64 successiva, **non** riavviare upload né duplicare chunk; chiamare finish solo quando offset==file_size. Le API MCP restano operative. **Controllo arte:** non caricare un'immagine che contiene riferimenti biblici o descrizioni scientifiche sbagliate; usare tavola ripulita e rileggere didascalie, soprattutto risurrezione apparente delle piante igroscopiche.


### Regola della presentazione pubblica (18/11/2026)

La validazione tecnica di upload WebP (Media ID, SHA-256, byte, Base64, offset, chunk, file di staging) appartiene ESCLUSIVAMENTE ai file di progresso, alle procedure interne e ai metadati di sistema necessari. **Non inserirla nelle didascalie pubbliche, nelle descrizioni dell'immagine, nel testo della pianta o in `pdb_image_provenance`** se questo campo può essere reso dal tema. Didascalia e provenienza pubbliche concise e divulgative; esempio: «Illustrazione botanica originale realizzata per l’Atlante Piante della Bibbia». Preservare l'ALT descrittivo e il meta `pdb_plate_media_id` per il collegamento della tavola. Revisionare anche i campi `plant.sources`, `bible_passages`, `greek_name`, `hebrew_name` e i corpi delle entità correlate: eliminare «WP #», «Media #», «MCP», «SHA-256» e note redazionali di lavorazione. Eseguito 18/11/2026 su Aloe e Anastatica, relativi medicamenti e passo Giovanni 19:39-40; salvare dati tecnici su GitHub, non sulle pagine del sito.

---

## SESTO TEST VERIFICATO — ATL-0083 e ATL-0084, 19/11/2026 (workflow ufficiale fra chat)

**Esito verificato e riproducibile senza alcuna modifica al plugin:** trasferimento di due WebP tramite cartella privata transitoria in ChatGPT Library + MCP `pdb/atlas-media-start` → `pdb/atlas-media-chunk` → `pdb/atlas-media-finish`.

### Risultati reali
| Scheda | WP Post | WebP | Bytes | Blocchi | SHA-256 | Media/featured |
|---|---:|---|---:|---:|---|---:|
| ATL-0083 *Crocus vitellinus* | 1449 | `atl-0083-crocus-vitellinus.webp` | 87578 | 4 | `3667d15b5839e5b05e320bb32d9aa8e12b56392042f622a4f46e6a64a33091ef` | 1454 |
| ATL-0084 *Crocus kotschyanus* (= *C. zonatus*) | 1452 | `atl-0084-crocus-kotschyanus-zonatus.webp` | 114662 | 5 | `9c4445ece27753b8cdd1c148957f545ecab899539b7d43519964814bb7fd5872` | 1455 |

L'API `atlas-media-finish` ha restituito per entrambe `success=true`, `attachment_id`, `featured_image_id`, URL WordPress e il SHA corrispondente. Conferma indipendente con `pdb/get-content`: `featured_media=1454` e `featured_media=1455`. La cartella temporanea `/Atlante-MCP-Bridge-20261119/`, contenente nove blocchi base64 .txt, è stata eliminata dalla Libreria dopo verifica.

### SOP in una nuova chat (NON richiede password, ZIP o autorizzazioni nuove)
1. Consultare **questo** file e il master `PIANTE_DELLA_BIBBIA_MASTER_SPECIFICHE_E_ROADMAP.md`. Dal server `mcp__piante_della_bibbia__mcp_adapter_discover_abilities` ricavare le ability già operative; **non** aggiornare il plugin per caricare immagini.
2. Generare la tavola originale nello stile ottocentesco, diagnostica botanica controllata, senza scritte o note tecniche; convertirla in WebP in `/mnt/data`. Calcolare *sul WebP finale* byte effettivi, SHA-256 e dimensioni; NON passare numeri stimati o tratti da un'immagine preliminare.
3. In Python dividere i **byte grezzi** del WebP in blocchi contigui da **24.000 byte**. Codificare ciascun blocco separatamente in Base64 con `base64.b64encode(raw[i:i+24000]).decode("ascii")`, ottenendo 32.000 caratteri per blocco completo e uno più breve alla fine. Creare uno staging temporaneo testuale privato. **IMPORTANTE**: se si spezza a livello di file ASCII, non spezzare mai nel mezzo di una sequenza non correttamente allineata; più sicuro un file `.txt` per blocco, come nel test 0083/0084.
4. Usare `files__manage_library` con `{"operations":[{"operation":"create_folder","path":"/Atlante-MCP-Bridge-<DATA>"}, {"operation":"upload","container_path":".../b00.txt","destination_path":"/Atlante-MCP-Bridge-<DATA>/b00.txt"}, ...]}`. Conservare solo i `file_id` esatti restituiti. La cartella **non** contiene immagini pubbliche, ma Base64 provvisorio.
5. Avviare `pdb/atlas-media-start` con `post_id`, `filename`, `file_size`, `sha256`, `alt_text`, `caption`. Utilizzare i campi dello schema ricavato da `mcp_adapter_get_ability_info`; conservare `upload_id` e `next_offset=0`.
6. Per ciascun `file_id` in ordine, fare `files__read` (`mode=full`) e ricostruire il Base64 **senza** newline/whitespace (trim; non mostrare in chat). Chiamare `pdb/atlas-media-chunk` con `upload_id`, `offset=i*24000`, `base64_chunk`; confrontare `accepted_bytes`, `next_offset`, `remaining_bytes`. **Mai parallelizzare** chiamate `chunk` dello stesso upload. In caso di interruzione ripartire da `next_offset`, mai duplicare blocchi.
7. Quando `remaining_bytes=0`, chiamare `pdb/atlas-media-finish` con `set_featured:true` e `replace_featured:false` (usare `true` soltanto per una sostituzione esplicitamente richiesta). Controllare `success`, `attachment_id`, `featured_image_id`, SHA/URL restituiti. Solo allora dichiarare MEDIA_OK.
8. Verificare `pdb/get-content` o `pdb/atlas-get`: status, `featured_media` e metadati botanici/SEO; verificare ALT e, se previsti, `pdb_plate_media_id` e provenienza. Eseguire audit SEO e QA grafica come operazioni distinte. Non inserire SHA, offset, media ID o riferimenti MCP nei testi pubblici.
9. Eliminarne **subito** lo staging privato tramite `files__manage_library` (elimina cartella con `recursive:true`), dopo `finish` e verifica. Non pubblicare il Base64 su GitHub e non conservarlo in materiali editoriali. In caso di upload fallito, usare `pdb/atlas-media-abort` quando necessario.

**Causa del precedente falso blocco:** l'ambiente Python non poteva fare HTTP PUT al dominio, ma il canale **Files Library → read testo → MCP chunk** non richiede alcun HTTP dalla sandbox. Il tentativo `pdb/atlas-media-import-bundled` non importa le nuove tavole generate e NON è la soluzione ordinaria. Questo procedimento va riutilizzato nelle future chat senza ripetere la discussione.

**Regola finale:** aggiornare la roadmap/master e il dossier in GitHub, ma lasciare SOLO contenuti botanici e riferimenti bibliografici nella scheda pubblica.

