# ATL-0004 — *Vachellia tortilis* (Forssk.) Galasso & Banfi — dossier e QA

**Data:** 23 novembre 2026. **Stato finale:** scheda botanica e scheda etnobotanica **PUBBLICATE**, immagine WebP originale associata e verificata, SEO **0 segnalazioni** nel plugin. La voce di origine è **ATL-0004 — *Acacia tortilis* (Forssk.) Hayne**. Lavoro svolto tramite il plugin WordPress dedicato `pdb-atlante` (0.2.8) e ability EWPA; non serve aggiornamento software del plugin.

## Anti-duplicati e tassonomia

- Prima della creazione, ricercato `tortilis`, `Acacia tortilis`, `Vachellia tortilis`, `raddiana` fra le schede botaniche; nessuna specifica scheda autonoma di *V. tortilis* precedente, mentre *V. seyal* #4381 e *V. nilotica* #4353 sono due taxa distinti, già pubblicati.
- Royal Botanic Gardens, Kew, POWO: **nome accettato *Vachellia tortilis* (Forssk.) Galasso & Banfi**, IPNI **77087190-1**, combinazione 2008. Basionimo *Mimosa tortilis* Forssk. (1775); *Acacia tortilis* (Forssk.) Hayne è sinonimo omotipico.
- Kew accetta **cinque sottospecie** (campoptila, heteracantha, raddiana, spirocarpa e tortilis).
- ***Acacia raddiana* Savi**, taxon favorito da Zohary, corrisponde nell'impostazione Kew a ***Vachellia tortilis* subsp. *raddiana* (Savi) Kyal. & Boatwr.**, IPNI **77132778-1**. *Acacia tortilis* subsp. *raddiana* (Savi) Brenan nella nomenclatura Duke2008 è sinonimo della stessa sottospecie; **non** sinonimo dell'intera specie senza specificazione. Kew riporta questa sottospecie nativa anche in Sinai e Palestina.

## Collazione delle fonti

1. **Moldenke (1952)**, *Plants of the Bible*, voci 3–4, **pp. 24–25**, tavola 15 e nota appendice: candidati *A. seyal* e *A. tortilis* per `shiṭṭîm`; non attribuzione esclusiva, toponimi compresi **Michea 6:5**.
2. **Zohary (1982)**, *Plants of the Bible*, **p. 116**: «Common Acacia», nome *Acacia raddiana*, preferita per il legno di acacia biblico; oggi identificare la sottospecie secondo Kew senza cancellare la nomenclatura storica.
3. **Duke (2008)**, *Handbook of Medicinal Plants of the Bible*, **pp. 7–8**: «Biblical Acacia», *A. tortilis* subsp. *raddiana*, nomi, usi locali alimentari ed etnomedicinali e loro limiti; indicazioni tradizionali **non** prove cliniche.
4. **Kew POWO** specie e sottospecie, IPNI 77087190-1 e 77132778-1: nome, sinonimi, habitat, distribuzione e cinque sottospecie; priorità sulla nomenclatura storica.
5. **FAO**, *Manual on Taxonomy of Acacia Species*, sezione 5: spine lunghe diritte e brevi uncinate, fogliame bipennato, capolini e legumi spirali; raddiana non obbligatoriamente a chioma piatta. Quadro infraspecifico storico (quattro sottospecie) da non confondere con Kew (cinque).
6. **Taha D. e coll. (2022)**, «Traditional Knowledge, Phytochemistry, and Biological Properties of Vachellia tortilis», *Plants* **11(23):3348**, DOI **10.3390/plants11233348**, rassegna di studi fitochimici e preclinici; non raccomandazioni mediche.
7. **Brown–Driver–Briggs/Strong**: `shiṭṭāh / shiṭṭîm` **H7848**, distinto da `seneh` **H5572** del roveto di Esodo3.
- Post, Tristram, Balfour, Grilli Caiola/Guarrera/Travaglini non sono stati introdotti come prove positive su *V. tortilis* senza collazione specie-specifica: nessuna fonte puramente decorativa.

## WordPress pubblicato — dati backend

- **Botanica** `pdb_plant` **#4409**: https://piantedellabibbia.altervista.org/piante/vachellia-tortilis-acacia-ombrello-shittim-bibbia/ ; `post_status=publish`; famiglia **Fabaceae #25**; 21 sezioni `h2` dopo integrazione della sezione di crosslink; HTML `h2 21/21`, `p 20/20`, `ul 1/1`; nessuna stringa operativa `TODO`, `MCP`, `Media #`, `SHA-256` visibile nel corpo.
- **Etnobotanica/medicina** `pdb_medicine` **#4418**: https://piantedellabibbia.altervista.org/usi-medicinali/vachellia-tortilis-etnobotanica-fitochimica-e-limiti-terapeutici/ ; `post_status=publish`; referenziata con `pdb_plant_id=4409`; 9 titoli `h2`, 8 paragrafi bilanciati, bibliografia e collegamento reciproco.
- **Tavola originale senza scritte**: Media WordPress **#4419**, file `tavola-botanica_vachellia-tortilis_ATL-0004.webp`, **1086×1448 pixel**, **336784 byte**, SHA-256 locale **3d1d6f84892a621387342b79e37e8fe0075456e2b394447fb9421b038ee6f983**. `pdb/atlas-media-start` + **15/15 blocchi** (14×24000 e ultimo 784 byte) + `finish`; restituiti **attachment_id 4419**, **featured_image_id 4419** e SHA server **identico**. ALT descrittivo, breve didascalia divulgativa, `pdb_plate_media_id=4419` e provenienza concisa; copia WebP conservata nella Libreria privata `/PIANTE DELLA BIBBIA/tavola-botanica_vachellia-tortilis_ATL-0004.webp`. Staging ASCII temporaneo da eliminare dopo importazione.
- **Bibliografia collegata** botanica 8 fonti distinte, link ID **3525–3532**, fonti #4410 Kew specie, #4389 Kew raddiana, #4412 FAO, #4384 Moldenke, #4387 Zohary, #4411 Duke, #4413 Taha, #4362 BDB. Fonti nuove **#4410–4413** tutte `publish`.
- **Bibliografia medicina** 4 fonti collegate, ID **3533–3536**: #4411 Duke, #4413 Taha, #4410 Kew specie, #4389 Kew raddiana.
- **Identificazioni** #485 Esodo25:10, #486 Esodo26:15 e #487 Isaia41:19, tutte `status=controversa`; nessuna identificazione certa o esclusiva a livello di specie.
- **SEO** RankMath title, description e focus keyword compilati; robots `index,follow` per botanica e medicina. Metadati legacy `pdb_seo_title`, `pdb_meta_description`, `pdb_bible_references`, `pdb_sources` compilati perché l'audit custom legge anche questi campi. **`pdb/seo-audit issues=[]`** su #4409; stesso esito sulle due precedenti #4381/#4353. Link reciproci botanica–medicina corretti.
- **QA strutturale backend confermata**, insieme a `publish`, media, ALT, tassonomia, fonti e SEO. **Non** dichiarare verifica pixel/viewport mobile/desktop: il browser esterno non ha potuto accedere alla pagina, anche se l'API WordPress la conferma pubblicata.

## Revisione retroattiva ATL-0003

- *Vachellia seyal* pianta **#4381**: correggendo la sezione toponimi Shittim è stato aggiunto **Michea 6:5** (fonte Moldenke pp. 24–25), e il metadato bibliografico `pdb_biblical_overview` aggiornato. Le altre identificazioni sono rimaste controverse e le fonti collegate non sono state cancellate.
- Backlog separato: *Zygophyllum dumosum* **#3937** e *Thymelaea hirsuta* **#3940** risultano in realtà **publish**, ma senza fonti collegate nel database; non chiamarle «bozze». La vecchia nota sulle 3 relazioni sovrapposte della pagina condivisa Isaia41:19 **#3513–3515** rimane da valutare con una funzione unlink sicura: non elimina alcuna pianta né fonte.

## Roadmap

- **ATL-0004** da `[ ] DA_CREARE` a **`[x] PUBBLICATA / MEDIA_OK / SEO_0`**: WordPress #4409, medicina #4418, tavola #4419.
- **Prossima candidata legacy ATL-0005 — *Acanthus syriacus***: prima di creare, verifica anti-duplicati WordPress, nome accettato Kew, eventuale sinonimia e Moldenke voce 5 p. 26; non attribuire automaticamente a una precisa specie l'`akantha` o i motivi ornamentali.
- La numerazione storica e le caselle non spuntate della roadmap non corrispondono direttamente a specie uniche mancanti: il conteggio delle schede effettive richiede riconciliazione con WordPress.
