# STATO CANONICO ATL-0156 — *Pinus brutia* Ten. (legacy ATL-0172) — 21/11/2026

## Esito operativo WordPress e divieto duplicati
- **ATL-0156 operativo / legacy ATL-0172**. Una specie botanica per la corsa. Pino calabro / pino turco, specie accettata Kew POWO `677009-1`, <https://powo.science.kew.org/taxon/677009-1>, famiglia **Pinaceae nuova taxonomy #20**.
- Verifica WP **prima** della creazione per Pinus, Pinus brutia, pino turco, pino calabro, pino brutio, Turkish pine: nessuna scheda botanica autonoma precedente. Menzioni di Pinus halepensis in altri taxa non sono schede duplicate.
- Pianta WP **#2260 `publish`**, verificata dopo pubblicazione, permalink <https://piantedellabibbia.altervista.org/piante/pino-calabro-pinus-brutia-capanne-bibbia/>. Bozza creata una volta, testo italiano originale completo (~14.018 caratteri HTML dopo relazioni), descrizione morfologica di aghi in coppia, strobili maschili e femminili, coni sessili, squame e semi alati, corteccia, distribuzione, identificazioni, lexicografia, resine e sicurezza.
- Campi nuovi `pdb_scientific_name`, `pdb_authorship`, `pdb_taxon_status`, `pdb_taxon_authority`, `pdb_scientific_synonyms`, `pdb_vernacular_names`, `pdb_morphology`, `pdb_habitat`, `pdb_distribution`, `pdb_uses_nonmedical`, `pdb_history`, `pdb_biblical_overview`, `pdb_parts`, `pdb_plate_media_id`, `pdb_image_provenance` TUTTI NON VUOTI nel getter. Campi legacy `plant.common_names`, `hebrew_name`, `greek_name`, `bible_references`, `bible_passages`, `identification_notes`, `historical_context`, `habitat`, `sources`, `moldenke_pages` compilati. `pdb_editorial_status=revisionata`.

## Immagine e prova tecnica
- Immagine botanica originale WordPress **media/featured #2261**, WebP **1086×1448**, **497284 byte**. URL https://piantedellabibbia.altervista.org/wp-content/uploads/2026/11/atl-0156-pinus-brutia-tavola-botanica.webp .
- **SHA-256 originale/server IDENTICO**: `74c51fd9bb31d1a356da899e2fbd7071c3cf3c85a3759b75c78e5de5195133df`, confermato da `pdb/atlas-media-finish`; ALT verificato in Media Library; featured WordPress e `pdb_plate_media_id=2261` persistono. La tavola è illustrativa a scale non omogenee, non fonte tassonomica primaria.
- Copia WebP conservata in Libreria privata `/PIANTE DELLA BIBBIA/atl-0156-pinus-brutia-tavola-botanica.webp`, file_id `file_000000000cf482109e20a9a7481fb445`, library_file_id `libfile_872dd7f24ee881919e221e629a92f367`.
- **Preflight same-runtime OK**: file temporaneo scritto in /mnt/data, upload Library, riscoperta `files__list`, lettura `files__read` prima della generazione.
- Ponte Base64 temporaneo 21 righe: 20 chunk da 24000 byte raw / 32000 caratteri e ultimo da 17284 byte, offsets controllati sequenzialmente fino a 497284; `remaining_bytes=0`, finish SHA coincidente. Ponte e preflight rimossi dalla Libreria con `files__manage_library` **success**; nessun Base64 su GitHub, nessun upload diretto, plugin e tema invariati.

## Collazione critica delle fonti
1. **Moldenke & Moldenke 1952**, voce **159 pp.173–175**, più **nota supplementare 159**: variabilità delle traduzioni «pino», «abete», «cipresso», «bosso» ecc.; in Neemia 8:15 `ʿēṣ šemen` tradotto spesso pino ma associato all'olivagno da alcuni; i «rami di alberi folti» possono riferirsi a *P. brutia* secondo gli autori, senza identificazione certa. Nota su Midrash/mirto e divergenze Evenari vs citazioni indirette Post/Dinsmore sulla presenza in Palestina. Fonte WP riusata **#135**.
2. **Duke 2008**, «Calabrian Pine», **pp.332–334** (PDF Libreria pp.358–360): nomi storici/varietà, versioni Neemia, attribuzioni alternative di Zohary/Tristram/Moldenke, resina, trementina, `burasu`, note etnomedicinali e dati di laboratorio; no uso clinico affermato. Fonte WP riusata **#136**.
3. **Zohary 1982**, **p.114** (PDF p.115), «Aleppo Pine»: esplicitamente *P. halepensis* candidato preferito per `ʿēṣ šemen`, *P. brutia* attestato nelle foreste del Kurdistan settentrionale come contesto linguistico, non prova diretta; **p.112** (PDF 113) propone *Viburnum tinus* per `tidhār`. Fonte WP **#1554**. NON citarlo come fautore certo di brutia.
4. **Tristram 1867**, **pp.353–354 e 386**, confronto `bĕrōš`, pino d'Aleppo e olivagno di Neemia, dubbi su `tidhār`. Fonte WP **#2042**.
5. **Balfour 1857**, **pp.11–12 e 69** (PDF pp.27–28 e p.85), `bĕrōš` spesso cipresso e `ʾōren` interpretazione non univoca. Fonte WP **#2043**.
6. **Post 1896**, ricerca nel PDF originale tentata per `brutia` senza locus in questa sessione, ma Moldenke lo cita per presenza storica. **Solo riferimento INDIRETTO**: non rivendicare controllo diretto di pagina.
7. **Dafni–Böck 2019**, pp.1–3, metodologia di revisione dei nomi e medicina biblica, non attestazione diretta di brutia, fonte WP **#2069**.
8. **Kew POWO 2026** taxon 677009-1: nome accettato, due sinonimi omotipici sotto *P. halepensis*, quattro varietà accolte, areale nativo Balcani S.–Iran NW e Libano, con «Palestine» classificata introdotta. Fonte WP nuova **#2262 `publish`**.
9. **European Commission JRC**, Mauri, Di Leo, de Rigo, Caudullo, <em>Pinus halepensis and Pinus brutia</em>, European Atlas of Forest Tree Species, **pp.122–123**, PDF https://forest.jrc.ec.europa.eu/media/atlas/Pinus_halepensis_brutia.pdf : aghi brutia 10–18 cm, coni sessili vs halepensis peduncolati, areale, fuoco, ecologia e usi; PDF esaminato con screenshot web page 1. Fonte WP nuova **#2263 `publish`**.
10. **Trees and Shrubs Online**, «Pinus brutia» https://www.treesandshrubsonline.org/articles/pinus/pinus-brutia/ : scheda aggiornata su coni, semi, variabilità, areale, fonte WP nuova **#2264 `publish`**.
11. **Grilli Caiola–Guarrera–Travaglini**: non dichiarata una consultazione diretta in questa corsa, nessuna citazione inventata.

## Apparati e relazioni strutturate
- **Fonte nuove** WP #2262, #2263, #2264, tutte `publish`; **pagina medicina nuova #2265 `publish`** (resina/trementina, effetti di laboratorio vs prova clinica, rischi e nessuna posologia).
- **Riusate** citazioni bibliche già pubblicate: Neemia 8:15 **#319**, Levitico 23:40 **#316**, Isaia 41:19 **#531**, Isaia 60:13 **#1563**. Nessuna nuova pagina dello stesso versetto e nessun duplicato.
- **Riusato lemma ʿēṣ šemen #1726**, che comprende già alternative Elaeagnus/Pinus halepensis, senza duplicarlo. `passage_terms` esistenti **#211** Neemia–ʿēṣ šemen e **#212** Isaia–ʿēṣ šemen; non duplicati. Raccordo con pianta alternativa Elaeagnus angustifolia **#1723**.
- **4 identifications nuove #300–303**, TUTTE **`controversa`**: Neemia #319 con term #1726, Isaia 41 #531 con term #1726, Isaia 60 #1563, Levitico #316. Tutte con fonte/motivazione: nessun versetto dimostra *Pinus brutia* come specie unica.
- **18 `source_citations` nuove #1291–1308**: 12 alla pianta (Moldenke, Duke, Zohary due loci, Tristram due, Balfour due, Dafni–Böck, Kew, JRC e Trees), 2 alla medicina, 4 ai passi preesistenti. Pagina, claim e locator separati.
- Link interni nella scheda principale a 4 passi, lemma, olivagno e ai 4 apparati nuovi.

## SEO e limiti
- `ewpa/yoast-update-seo` seguito da `ewpa/yoast-get-seo` su **tutti** gli ID **#2260, #2262, #2263, #2264, #2265**, con title/description/focus/noindex=false, OG e image sul principale. Getter verificato positivo.
- `pdb/seo-audit` mostra falsamente «Titolo SEO mancante» e «Meta descrizione mancante» su #2260 nonostante il getter Yoast restituisca entrambi: **BUG_AUDIT_SEO_LEGACY**. Non resettare metadata Yoast.
- QA finale backend dopo publish WP #2260 conferma **publish**, permalink, family #20, media #2261, 14.018 caratteri HTML, relazioni, campi legacy e meta completi. `QA_VISIVA_FRONTEND_NON_CERTIFICATA` poiché il browser esterno potrebbe non accedere ad Altervista; non equiparare a errore di pubblicazione.

## Roadmap obbligatoria della prossima corsa
- **ATL-0156 operativo / legacy ATL-0172 PUBBLICATA. NON RICREARE Pinus brutia**.
- **PROSSIMO CANDIDATO BOTANICO: legacy ATL-0173 *Pinus halepensis* Mill., operativo proposto ATL-0157** soltanto dopo QA finale della #2260 e ricerca anti-duplicati (per nome/sinonimi/pino d'Aleppo/Aleppo pine, draft/publish). La ricerca preliminare del 21/11/2026 con `Pinus halepensis` WP ha restituito soltanto menzioni in altri taxa, inclusa la nuova #2260, e non una scheda autonoma; RIPETERE prima di creare.
- Kew POWO <https://powo.science.kew.org/taxon/262982-1> riconosce *Pinus halepensis* Mill. specie accettata distinta da *P. brutia*. Fonti obbligatorie: **Moldenke 1952 voce 160 pp.175 ss. e nota**, **Duke 2008 «Aleppo Pine» pp.334–335**, **Zohary 1982 p.114**, Post, Tristram, Balfour, Dafni–Böck, fonti contemporanee JRC/Flora e studi botanici. Collegare il lemma ʿēṣ šemen già #1726 e i passi preesistenti, evitare doppi, continuare i confronti lessicali.
- Automazione **UNICA** ID `6b00cb7b5a988191877878d9f84bebad`, oraria, **ATTIVA senza modificarne schedule**, una sola specie per run, nessun nuovo task; dopo aver letto roadmap e dossier nuovo verificare che l'automazione non stia già lavorando contemporaneamente sul candidato.
