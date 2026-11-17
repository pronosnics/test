# Procedura definitiva: immagini botaniche senza aggiornare il plugin

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
