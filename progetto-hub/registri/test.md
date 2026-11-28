# Verifiche

## Lotto 2 — 28 novembre 2026, ripresa da Work

- `pdb/atlas-health`: plugin 0.2.14 attivo, cinque CPT pubblicati dal modello. `pdb/list-templates`: Erbario Biblico, slug piante-della-bibbia-theme, template default/editorial/fullwidth/landing.
- `pdb/get-settings`: titolo hero "Le piante della Bibbia", descrizione breve, CTA "Esplora le piante", accenti #42634a e #ae8650.
- `ewpa/get-menu` #3: sette voci, sei radici e Metodo e fonti (#2036) figlio di Fonti (#257). Nessun menu footer assegnato.
- `ewpa/get-page`: #131, #778, #2035 tutte pubblicate; contenuto, permalink e metadati letti. Audit specializzato atlas-public-audit non accetta queste pagine standard (Scheda pubblica non disponibile).
- HTTP anonimo: homepage e sitemap non accessibili al browser di ricerca; sitemap via MCP fallisce con cURL 56 CONNECT tunnel 403. Non equivale a indisponibilità universale del sito.
- Campione #8677 Salvia palaestina: atlas-public-audit auto ripiega sul main locale autenticato. H1 1, immagini 4 tutte con ALT e srcset, 22 link di cui 15 interni, sei sezioni con ancore, zero marcatori editoriali rilevati e zero warning. Non certifica head pubblico, CSS, JS, link remoti o rendering mobile; nessuna verifica scientifica aggiuntiva.
- Ancora aperti: sorgenti tema attivo vs pacchetto, ricerca per query e filtri, visualizzazione reale su desktop/mobile, sitemap/canonical pubblici, benchmark, misure prestazionali. Nessuna scrittura WordPress.

Prossimo test: confronto sorgenti, verifica degli URL di ricerca da browser e degli archivi, quindi prototipo isolato con rollback.

## Lotto 3 — verifiche prototipo e sito
WPVibe get_page_html: homepage bozza .pdbh renderizzata con H1, form atlas_q, atlas_area=all, tre tavole, sei contatori (243 botaniche, 363 citazioni, 189 nomi, 198 medicinali, 2057 fonti, 70 famiglie con schede), sei ingressi, due percorsi esistenti, quattro piante dinamiche. Head bozza contiene assets/home-atlas.css?ver=1.1.0-draft1 e canonical homepage. Query HTTP del sito tramite WPVibe /atlante/?atlas_q=Olea%20europaea&atlas_area=pdb_plant, selettore #contenuto: campo valorizzato, risultati per Olea europaea, scheda #129 presente. Sito live H1 invariato. La lettura anonima tramite web e sitemap ancora bloccata; WPVibe DOM accessibile, non equivale a screenshot o misure performance. Non testati invio form da preview (token può perdersi su GET), altri filtri, tastiera, viewport o asset HTTP. PHP accettato da write_file. Nessun contenuto WP modificato.

## Lotto 4 — 28 novembre 2026
DOM anteprima: header e footer presenti, menu #3 e collegamenti alle cinque aree, form atlas_q, collegamenti #percorsi, #approfondimenti, #il-progetto, pagine #778/#2035; foglio editorial-shell.css presente nel head. Non verificati screenshot, tastiera, invio form, viewport o regressione su tutti i CPT.

## Lotto 5 — 28 novembre 2026
Rendering WPVibe della bozza: .pdbh-library 6 link (quattro fonti, bibliografia, metodo), .pdbh-stats 6 link, .pdbh-grid 6 SVG/6 link, .pdbh-featured 4 link. PHP e CSS scritti senza errore. I link sono presenti nel DOM, non tutti testati singolarmente. Screenshot precedente è verifica desktop della revisione precedente, non di questa. Mobile e contrasto effettivo ancora da controllare. Quota WPVibe segnalata 82/100 prima del salvataggio dei sorgenti.

## Lotto 6 — 28 novembre 2026
Rilettura MCP #8767: draft e slug corretti; Yoast aggiornato con esito positivo (titolo, description, CollectionPage). Tentativo anteprima anonima della pagina draft restituisce 404: rendering effettivo del template hub non verificato. Modulo PHP: php -l OK; otto test con stub WordPress OK (normalizzazione/deduplica, cap, tipi/stati, esclusione protetti e duplicati, registrazione shortcode, nonce, rifiuto ID non pubblicato, salvataggio). ZIP test integrità OK, git blob locale bbf287329f6cc71a130189bce7fa4baafcfa36ff uguale al sorgente GitHub. Test integrazione WP, UI metabox, input malformato, errori salvataggio e associazioni inverse restano aperti.

## Lotto 7 — 28 novembre 2026
Rilettura API #778 pubblicata, identità e URL invariati, contenuto uguale alla revisione GitHub, 7 righe e 6 H2 bilanciati, indicazione obsoleta eliminata, SEO preesistente conservata. Tutte le 12 destinazioni indicate nel registro collegamenti sono pubblicate e URL confrontati; nessun controllo HTTP indipendente in questa sessione.

## Lotto 8 — 28 novembre 2026
Rilettura #8770: draft, slug confermato, HTML identico al sorgente GitHub (8852 caratteri), 8 H2 aperti/chiusi, 4 righe tabella, 24 URL distinti. Yoast get-post-seo-data conferma titolo e descrizione; get-content manager non li espone. Nessuna tavola in evidenza (0), nessun rendering pubblico o mobile verificato.

## Lotto 9 — 28 novembre 2026
Rilettura #8771 draft, HTML identico GitHub 9637 caratteri, 8 H2 bilanciati, 7 righe tabella, 33 URL distinti, Yoast dedicato conferma titolo e descrizione. Featured media 0; rendering non verificato.

## Lotto 10 — 28 novembre 2026
Rilettura #8772 draft, HTML identico GitHub 10867 caratteri, 9 H2 aperti/chiusi, 3 tabelle con 8/7/11 righe, 36 URL distinti, Yoast dedicato conferma title/description. Featured media 0; rendering non verificato.

## Lotto 11 — 28 novembre 2026
Rilettura #8773 draft, HTML identico GitHub 10762 caratteri, 9 H2 aperti/chiusi, 3 tabelle 5/6/4 righe, 32 URL interni, Yoast dedicato conferma title/description. Featured media 0; rendering non verificato.

## Lotto 12 — 28 novembre 2026
Rilettura #8774 draft, HTML identico GitHub 12343 caratteri, 7 H2 bilanciati, quattro tabelle 6/7/8/5 righe, 35 URL distinti; Yoast dedicato conferma title/description. Featured media 0, rendering non verificato.

## Lotto 13 — 28 novembre 2026
Rilettura #8775 draft, HTML identico GitHub 11522 caratteri, 7 H2 bilanciati, quattro tabelle 11/9/7/5 righe, 40 URL distinti; 18 lang=he e dir=rtl, 14 lang=grc; Yoast dedicato conferma title/description. Featured media 0, rendering e ricerca effettiva non verificati in questo lotto.

## Lotto 14 — 28 novembre 2026
Rilettura #8776 draft, HTML identico GitHub 9789 caratteri, 8 H2 bilanciati, 3 tabelle 4/5/7 righe, 28 URL distinti; Yoast dedicato conferma title/description. Featured media 0, rendering non verificato.

## Lotto 15A — 28 novembre 2026
DOM homepage bozza 32239 caratteri: sezione percorsi, sette specie, nessun link a Sukkot/cereali draft, sezione famiglie e contatore 70; URL famiglie presenti, non test HTTP. PHP 8.4.24 lint OK su copia con hash Git identico 62c3b556; 15 test simulati OK. Indice rilettura API identica; 10 destinazioni campionate corrispondenti. Footer modificato dopo verifica DOM. Plugin non installato, diagnostica reale e risoluzione completa non effettuate.

## Lotto 15B — 28 novembre 2026
ZIP pdb-hub-0.2.0.zip, 7640 byte, SHA256 09bd326b019888340cbcca3082586e49794b7a7fca30f468dc37cb290a9f46f3, 3 file byte-identici ai blob GitHub (PHP 62c3b556, JSON 1f5bed2f, CSS e8a3e652). Lint PHP e 15 test fixture superati. Test simulazione matrice completa: stati attuali soltanto #778 visibile, 167 membri verificati senza esposizione draft; stati simulati pubblicati 8 card, 189 forward/189 reverse, 8 template. Primo tentativo test completo aveva stub get_post_status mancante, corretto stub, nessuna modifica al modulo. Audit HTTP #5750 ancora cURL 56 CONNECT 403; main locale autenticato verificato, H1 unico, 2 immagini con alt, nessuna nota rilevata. Non installato su WP.
