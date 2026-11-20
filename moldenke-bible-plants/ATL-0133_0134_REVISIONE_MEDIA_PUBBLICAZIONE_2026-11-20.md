# Atlante Biblico — chiusura ATL-0133 / ATL-0134 — 20 novembre 2026

## Metodo upload: conferma operativa
Metodo ripreso da `moldenke-bible-plants/PROCEDURA_DEFINITIVA_MEDIA_SENZA_UPDATE_PLUGIN.md`: WebP originale locale → SHA-256/peso/dimensioni → bridge ASCII temporaneo Base64 a righe da 24.000 byte raw (32.000 caratteri, ultima più corta) → `files__manage_library(upload)` → `files__read` riga per riga → `pdb/atlas-media-start` → `pdb/atlas-media-chunk` con offset cumulativo e `remaining_bytes` → `pdb/atlas-media-finish(set_featured:true,replace_featured:false)` → confronto SHA server/locale → `pdb_plate_media_id`, provenance, ALT, SEO, status publish → eliminazione del bridge temporaneo dalla Libreria. Nessuna modifica al plugin `pdb-atlante` e nessun caricamento manuale.

### ATL-0133 — Plicosepalus acaciae (sin. Loranthus acaciae)
- WP pianta **#1986**; pubblicata: https://piantedellabibbia.altervista.org/piante/vischio-acacia-plicosepalus-acaciae-roveto-ardente/
- Tavola `tavola-botanica_plicosepalus-acaciae-atl-0133.webp`, **1024×1536**, **333642 bytes**, SHA-256 `8d27b2034f51e84f519a91cd1d5bd84f726ee2fc7ecddb2612fcb8e3e9e6a96b`.
- Trasferimento confermato in **14/14 blocchi**; WordPress **attachment_id #1989**, featured #1989 e `pdb_plate_media_id=1989`; ALT presente; SEO audit 0 issues; bridge temporaneo spostato nel cestino.
- Revisione testo: Moldenke p. 23, Zohary pp. 140–141, Post p. 711, Tristram pp. 392/438, Duke p. 3; studi di flora/ecologia e Kew. L'identificazione con il roveto ardente resta **ipotesi storica a certezza molto bassa**, non evidenza del testo.

### ATL-0134 — Lycium europaeum L., spino del deserto
- WP pianta **#1990**; pubblicata: https://piantedellabibbia.altervista.org/piante/spino-deserto-lycium-europaeum-rovo-giudici-9/
- Tavola `tavola-botanica_lycium-europaeum-atl-0134.webp`, **1024×1536**, **262620 bytes**, SHA-256 `83b42c82124ad16ec483e4165ee94b53623556aeea4be275d9b08ff1bceb8c00`.
- Trasferimento confermato in **11/11 blocchi**; WordPress **attachment_id #1992**, featured #1992 e `pdb_plate_media_id=1992`; ALT presente; SEO audit **0 issues**; bridge temporaneo eliminato dalla Libreria.
- Fonti esaminate e integrato contenuto: Moldenke 1952 pp. 134–135; Post p. 568; Tristram p. 424; Zohary 1982 p. 167; Duke 2008 pp. 260–261; Kew; review Metabolites (2022) su Lycium; Dafni–Böck (2019) per metodologia generale, non come riscontro diretto su questa specie.
- Filologia: `ʾaṭād` in Giudici 9:14–15; `Goren ha-ʾAtad` in Gen 50:10–11; altri impieghi figurativi nei Salmi; Azeka in 1 Sam 17:1 è ipotesi toponimica di Zohary, non nome botanico menzionato nel passo. <em>Lycium europaeum</em> resta identificazione tradizionale **controversa**; distinguerla da <em>Ziziphus spina-christi</em>. Gli usi etnobotanici non sono cure documentate nel testo biblico.

## Controlli ancora separati
- QA visiva indipendente desktop/mobile della pagina pubblica non attestata: il browser pubblico non ha potuto caricare le pagine, mentre status, featured, ALT, hash e SEO sono verificati via MCP.
- Fonti non direttamente esaminate per queste voci: Balfour per eventuali riferimenti pertinenti; Grilli Caiola–Guarrera–Travaglini quando saranno consegnate le pagine corrispondenti. Non aggiungere citazioni ornamentali.
- Il ponte Base64 era esclusivamente transitorio; **non è stato salvato su GitHub**.

Prossima specie della sequenza dopo ATL-0134: verificare l'ordine effettivo della roadmap e l'assenza di duplicati prima della nuova bozza.
