# ATL-0122 — *Juniperus oxycedrus* L. (ginepro pungente, ossicedro)
**Data:** 20 novembre 2026. **Esito:** PUBBLICATA su WordPress. **Automazione oraria Atlante:** SOSPESA (nessuna modifica).

## Pubblicazione e identificazione
- **pdb_plant #1922** — https://piantedellabibbia.altervista.org/piante/ginepro-pungente-juniperus-oxycedrus-l-l%ca%bfar%ca%bfar-di-geremia-e-la-tassonomia-moderna/
- Anti-duplicati prima del lavoro: `pdb/atlas-list(search=oxycedrus)` e `search=ginepro`; presenti solo menzioni in *Cedrus libani* #266, *Juniperus excelsa* #1915, cipresso #1551 ecc.; nessuna scheda botanica specifica precedente.
- 19 sezioni HTML, ~23.579 caratteri, campi botanici e biblici, SEO title/meta/keyword/OG, capitoli filologici, tabelle e 4 internal links.
- **Fonte supplementare WP `pdb_source #1930` PUBBLICATA**: https://piantedellabibbia.altervista.org/fonti-bibliografiche/ginepro-pungente-post-p-749-balfour-tristram-dafni-bock-lamonaca-2024-e-kew/
- Relazioni source_citations #1052 Moldenke #135 pp121–122, #1053 Duke #136 pp226–228, #1054 Zohary #1554 p117, #1055 dossier #1930 (Post e altra bibliografia).
- Audit interno WordPress pre-pubblicazione `pdb/seo-audit(limit=100)` -> `issues=[]`. `pdb/update-content(status=publish)` conferma pubblicazione e featured media #1927. Audit post-pubblicazione ancora da verificare in chiusura.

## Correzione tassonomica decisiva: Kew 2026
**Juniperus oxycedrus L.** accettato, Cupressaceae, Linneo `Species Plantarum` 1038 (1753), ma **sensu stricto** Kew limita il suo areale nativo al **Mediterraneo occidentale / centro-occidentale**: Algeria, Baleari, Corsica, Francia, Italia, Marocco, Portogallo, Sardegna, Spagna e Tunisia.
<https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:262299-1>
- **Juniperus deltoides R.P.Adams**: SPECIE DISTINTA accettata da Kew, nativa anche in **Libano–Siria e Palestina**; nome `Juniperus oxycedrus subsp. deltoides` oggi sinonimo di *J. deltoides*. <https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:60436244-2>
- **Juniperus macrocarpa Sm.**: SPECIE DISTINTA accettata, dune costiere mediterranee; nome `J. oxycedrus subsp. macrocarpa` oggi sinonimo di *J. macrocarpa*. Il `J. macrocarpa fide CJE` di Duke p226 non va copiato come sinonimo valido. <https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:262270-1>
- **Juniperus turbinata Guss.**: SPECIE DISTINTA, inclusa Palestina/Sinai, appartenente al complesso storicamente chiamato `J. phoenicea` sensu lato, candidato rilevante del deserto e della scheda futura ATL-0123. <https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:262382-1>.
- **Juniperus communis** differisce per una banda stomatica chiara larga invece delle **due** distinte di *J. oxycedrus*. Gli adulti di *J. oxycedrus* conservano aghi pungenti in verticilli di **tre**, diversamente dalle foglie mature squamiformi di *J. excelsa* e *J. turbinata*.
- **Keren Kayemeth LeIsrael** studio Mt Shfanim: popolazione rara di Alta Galilea prima descritta come *J. oxycedrus*, revisionata come **J. deltoides**. Abstract inglese <https://www.kkl.org.il/files/Accessible-1/afforestation_and_environment/afforestation_and_environment_publications/forest_online_journal/yaar_17/Yaar_17_English_Abstracts.pdf>. Non leggere le citazioni floreali storiche del Levante come certificazione della specie occidentale attuale.

## Consultazione dell'archivio della Libreria: censimento PDF
Il comando `files__list(surface=library, recursive=true, filters=pdf)` ha rilevato **13 PDF**:
- Duplicati dell'opera di **Post**: `Flora of Syria, Palestine and Sinai.pdf` e `Post_1896_Flora_of_Syria_Palestine_and_Sinai.pdf`.
- Duplicati dell'opera di **Tristram**: `The_Natural_History_of_the_Bible...pdf` e `Tristram_1867_The_Natural_History_of_the_Bible.pdf`.
- Duplicati dell'opera di **Balfour**: `Balfour_1857_Plants_of_the_Bible_Trees_and_Shrubs.pdf` e `The_plants_of_the_Bible_-_trees_and_shrubs...pdf`.
- Duplicati dell'articolo di **Dafni & Böck (2019)**: `Dafni_Bock_2019_Medicinal_plants_Bible_revisited.pdf` e `Medicinal plants of the Bible—revisited_pubblicazione.pdf`.
- **Zohary** `Plants-of-the-Bible-Michael-Zohary.pdf`.
- **Duke** `(ebook) Duke's Handbook of Medicinal Plants of the Bible by James A. Duke.pdf`.
- **Moldenke** `Moldenke.pdf` + PDF traduzione parziale: `Moldenke_Bible_Plants_traduzione_IT_pagine_01-10.pdf`.
- Un PDF nominativo non botanico `ALIOTTA GIOVANNI.pdf` è **non pertinente e non consultato**.
- Inoltre disponibili testi editabili **Moldenke_Bible_Plants_Traduzione_Italiana.md** e altri DOCX di confronto.
TUTTE le opere bibliografiche pertinenti sono state cercate per varianti del nome, parole bibliche e voci affini, poi letti i passaggi effettivamente rilevanti; la lettura di pagine pertinenti **NON è una lettura integrale certificata di ogni pagina degli interi volumi**. Queste due categorie di verifica vanno mantenute separate. L'utente fornirà **Grilli Caiola–Guarrera–Travaglini in un secondo momento**: non includere come fonte letta.

## Passaggi direttamente controllati
1. **Moldenke & Moldenke, *Plants of the Bible* (1952)**, voce 120 **pp121–122**: termini ar-âr (Geremia 17:6) e aro-er (Geremia 48:6), Celtics/Celsius/Smith/Post, vecchia ipotesi *J. sabina*, e caratteri del ginepro aghiforme; rifiuto della certezza della vera erica. Annotato che le floristiche storiche usavano il nome *J. oxycedrus* in senso oggi ampio.
2. **Post, *Flora of Syria, Palestine and Sinai* (1896), p749, PDF p759**, LECTURA PRIMARIA: voce `3. J. Oxycedrus L.`, nome arabo `'ar'ar`, cespo emi-sferico o prostrato, aghi ternati, bisulcati 10–15 mm, galbuli rossi 6–8mm, semi 1–3, zone montane medio-alte; confronto con `J. drupacea` e `J. excelsa`. NON attribuire questa pagina a *J. oxycedrus s.s.* nel Levante di Kew.
3. **Duke, *Handbook of Medicinal Plants of the Bible* (2008), pp226–228 (PDF pp252–254)**, «Cade Juniper», Geremia 17:6, *J. macrocarpa* erroneo sinonimo contemporaneo, confronto con *J. phoenicea*, usi etnobotanici e **downside del catrame grezzo: genotossicità, rischio allergie/irritazioni, non sicurezza farmacologica**. Non riportare dosaggi e ricette.
4. **Zohary, *Plants of the Bible* (1982), p117 (PDF p118)**: «Phoenician Juniper», ammette che *J. phoenicea* s.l. non si trova nell'ideale deserto del testo; ipotizza una distribuzione antica differente, nota che il ginepro aghiforme di Alta Galilea non è candidato all'ambiente desertico; l'argomento *ar'ar*=Juniperus è quasi solo nome arabo.
5. **Tristram, *The Natural History of the Bible* (1867), p358 (PDF p370)**: «Heath», lettura come **Juniperus sabina** di Petra e affermazione categorica sul termine, oggi da storicizzare. Voce «Cedar» del PDF p353 parla di possibile legno di ginepro rituale, senza diagnosi.
6. **Balfour, *Plants of the Bible: Trees and Shrubs* (1857), pp50–51 (PDF pp84–85)**: «Juniper-Bush — A kind of broom», 1 Re 19:4–5, Giobbe 30:4, Salmo 120:4, `rotem` con una ginestra storicamente `Genista monosperma`, oggi confronto con **Retama raetam**, NON *J. oxycedrus*. Inoltre Balfour PDF p22 riferisce possibile cedro rituale come qualche ginepro del Sinai, senza specie certa.
7. **Dafni & Böck (2019), «Medicinal plants of the Bible—revisited»**, PDF pp2,5,7,11: possibili resine e oli in scavi, `ar'ar` = **Juniperus sp.** (con confronto J. phoenicea / communis), `berosh` = **Cupressus / Juniperus** e analisi filologica dei nomi collettivi; non identificazione diretta di J. oxycedrus.
8. **Andrea Lamonaca (2024), «Unveiling the Plant Living in the Desert (Jer 17:6): A Multidisciplinary Approach», *Verbum Vitae* 42/2 pp453–469**: nuovo studio direttamente letto via browser e screenshot del PDF. Si basa su Moldenke, Post, Tristram, Balfour, Zohary, Dafni–Böck e studi ecologici. Conclude che *J. oxycedrus* è meno adatto al deserto salino; preferisce la resa **«arbusto»** e, fra i taxa possibili, **Tamarix aphylla** come migliore e *J. phoenicea* sensu lato (possibilmente *J. turbinata* moderno) come alternativa. PDF <https://jbc.bj.uj.edu.pl/Content/955596/NDIGOC102295_2024_042_002.pdf>; editore <https://czasopisma.kul.pl/index.php/vv/article/view/16842>.
9. Lessico **BDB / Strong H6176**, forma `aroer` in Geremia 48:6, confronto critico con `arar` in Geremia 17:6. Non trattare automaticamente un toponimo Aroer in altri testi come la stessa pianta.
10. **Trees and Shrubs Online** <https://www.treesandshrubsonline.org/articles/juniperus/juniperus-oxycedrus/> e **Gymnosperm Database** <https://www.conifers.org/~conifers/cu/Juniperus_oxycedrus.php> per morfologia, 2 bande stomatiche vs singola di J. communis.

## Distinzioni bibliche e limiti
- Geremia 17:6: `ar'ar` non identifica sicuramente il ginepro pungente. Questo è un nome generico discusso in contesto desertico.
- Geremia 48:6: `aroer` simile ma con criticità testuali; nessuna identificazione positiva.
- **1 Re 19:4–5, Salmo 120:4, Giobbe 30:4**: `rotem` è una ginestra (*Retama*), «juniper» delle traduzioni non è il genere *Juniperus*.
- Levitico 14 e Numeri 19: "cedar wood" talvolta discusso come legno aromatico di ginepro del Sinai, NON assegnato a *J. oxycedrus* per assenza di prova.
- Distinguere `berosh` conifere collettive dalla discussione `ar'ar`, e le schede precedenti di Cedro, Cipresso, Ginepro greco.

## Tavola e trasferimento
- Tavola DIGITALE ORIGINALE del 20-11-2026, stile vittoriano ottocentesco: aghi in triadi, doppie bande stomatiche, galbuli rossi e verdi, microstrobili e corteccia, ingrandimenti dei dettagli riproduttivi. **Illustrazione artistica non erbario e NON prova del Levante**.
- WebP `tavola-botanica_juniperus-oxycedrus-atl-0122.webp`, 1024×1536, **462472 byte**.
- SHA256 **`37f041ad4c72586359bb48b8e7ffdc780d5d69850a88d151b9270cb777277582`**.
- Ponte Base64 `/PIANTE DELLA BIBBIA/atl0122_base64_bridge_temp.txt` (temporaneo); **20 blocchi** (19×24000 byte grezzi + 6472 byte finale), letti via Files e inoltrati con `pdb/atlas-media-start` / `atlas-media-chunk` sequenziale (ogni `next_offset` verificato fino a 462472) / `atlas-media-finish(set_featured:true)`. WordPress conferma checksum lato server e **attachment #1927, featured #1927**.
- URL media https://piantedellabibbia.altervista.org/wp-content/uploads/2026/11/tavola-botanica_juniperus-oxycedrus-atl-0122.webp
- `pdb_plate_media_id`, ALT e caption, provenance scritti. Da spostare bridge temporaneo nel cestino dopo verifica QA.

## QA e roadmap
- `pdb/seo-audit(limit=100)` bozza #1922: `issues=[]`; `pdb/update-content(status=publish)` stato publish e featured #1927 confermati.
- Browser esterno: visualizzazione WordPress pubblico potrebbe essere bloccata, quindi audit strutturale NON certifica desktop/mobile o Lighthouse.
- Fonte **Grilli Caiola–Guarrera–Travaglini** da ricevere più tardi e **non consultata** in questo ciclo; non attribuirle informazioni.
- **Prossima specie ATL-0123 — *Juniperus phoenicea* L. in nomenclatura storica e *J. turbinata* Guss. per popolazioni levantine attuali**, da trattare dopo esplicita richiesta e verifica anti-duplicati. Automazione oraria SOSPESA.


## CHECK FINALE POST-PUBBLICAZIONE
- `pdb/get-content` **#1922**: `status=publish`, featured `#1927`, URL e title SEO corretti, HTML **23579 caratteri**, 19 sezioni + link interni e dossier.
- `ewpa/get-cpt-item` **#1930**: fonte bibliografica separata in stato **publish**.
- `pdb/seo-audit(limit=100)` DOPO publish: `issues=[]` per **#1922** e anche per **#1915**.
- Revisione precedente **ATL-0121 WP #1915** confermata `publish`, con nuova sezione Dafni–Böck 2019 e tassonomia *oxycedrus/deltoides*, oltre a verifica primaria Post p749 (aggiornato anche dossier ATL-0121).
- File ponte Base64 `atl0122_base64_bridge_temp.txt` **spostato nel cestino** della Libreria con successo; media WebP definitiva sul sito non modificata.
- Il browser esterno non ha verificato indipendentemente il rendering mobile/desktop; audit SEO interno non equivale a Lighthouse o test UX.
- Come richiesto, Grilli Caiola sarà fornito in seguito e NON è trattato come fonte esaminata.
- Automazione oraria **sospesa**. Prossima ATL-0123 solo dietro richiesta.


## Riconciliazione anti-duplicati (20 novembre 2026)
- Nel controllo finale risultavano temporaneamente DUE schede pubblicate dello stesso taxon per esecuzioni sovrapposte: #1922 (19 sezioni, 23579 caratteri, featured #1927, fonte #1930 e relazioni #1052–1055) e #1924 (15 sezioni, 18531 caratteri, featured #1934, fonte #1928 e relazioni #1056–1059).
- **CANONICA DEFINITIVA**: #1922, verificata migliore per completezza, con citazioni a Post, Tristram, Balfour, Dafni–Böck, Lamonaca 2024 e Kew; tutti i link e la roadmap si riferiscono a questa versione.
- **Duplicata #1924 spostata nel cestino WordPress**, così come **fonte duplicata #1928**, mediante `ewpa/delete-cpt-item(force_delete:false)`. Non permanenti, recuperabili dal cestino WP. Il ponte Base64 duplicato `atl0122_base64_bridge_temp(1).txt` della Libreria è stato spostato nel cestino. La featured canonica **#1927** non è stata toccata.
- Il media secondario non canonico **#1934** è stato creato durante il tentativo parallelo e potrebbe permanere in Media Library come asset non pubblicato/associato alla scheda cestinata; per coerenza non usarlo come featured. Le relazioni #1056–1059 appartengono alla bozza cestinata, non alla scheda canonica; mantenere solo #1052–1055 nella pubblicazione e nei report.
- Conclusione del controllo `pdb/atlas-list(search=oxycedrus,status=publish)`: una sola scheda autonoma pubblicata, #1922. La fonte canonica #1930 resta pubblicata.
