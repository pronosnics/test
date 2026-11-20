# ATLANTE BIBLICO — Audit ATL-0140 e pubblicazione ATL-0141
Data: 20 novembre 2026

## ATL-0140 — Nardo, Nardostachys jatamansi (D.Don) DC.
- Scheda **WordPress #2022**, stato **publish**, permalink https://piantedellabibbia.altervista.org/piante/nardo-nardostachys-jatamansi-bibbia-profumo/
- Immagine evidenza #2024. Audit `pdb/seo-audit` dopo revisione: **issues=[]**.
- Confronto già documentato con **Moldenke pp. 148–149, Tristram pp. 484–485, Zohary p. 205, Duke pp. 285–289, Dafni–Böck 2019 tabella 1, Kew e documenti CITES**. Nessuna nuova omissione botanica o esegetica sostanziale trovata nell'ulteriore confronto.
- **Correzione reale fatta ora in produzione**: vocalizzazione ebraica del nardo sistemata in **נֵרְדְּ (nērd)**, sia nel corpo sia nel campo `hebrew_name`, seguendo l'uso testuale attestato e il lessico biblico (ad es. NETBible Cantico 1:12). La scheda mantiene la differenza tra l'unzione sul capo (Mc 14:3, donna anonima) e sui piedi (Gv 12:3, Maria di Betania), evitando di attribuire nardo al parallelo di Matteo 26 e Luca 7.
- Resta non certificato il controllo visivo pubblico desktop/mobile indipendente via browser; controlli WP/SEO e dell'immagine sono separatamente superati.

## ATL-0141 — Crescione d'acqua: identificazione e deduplicazione
- Nuovo WordPress **#2027**, stato **PUBLISH** https://piantedellabibbia.altervista.org/piante/crescione-acqua-nasturtium-officinale-erbe-amare-bibbia/
- Anti duplicati: ricerche `Nasturtium`, `Rorippa`, `crescione` in `pdb_plant`: nessuna voce dedicata al crescione d'acqua; risultati su chicoria/indivia/lattuga erano corrispondenze testuali. Non va duplicata questa voce in futuro.
- **Nome accettato Kew/IPNI**: **`Nasturtium officinale W.T.Aiton`**, Hortus Kew. 2 ed. 4:110 (1812). Il nome con **`R.Br.`**, frequentemente usato in Duke e altrove, è una storica attribuzione alternativa d'autore dello stesso binomio, non un'altra specie. GRIN spiega il trattamento nomenclaturale (attribuzione delle Brassicaceae del volume a Robert Brown non espressa nel libro stesso).
- **Sinonimi nomenclaturali**: `Rorippa nasturtium-aquaticum (L.) Hayek`, basionimo `Sisymbrium nasturtium-aquaticum L.`. Kew https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:287534-1 , GRIN https://npgsweb.ars-grin.gov/gringlobal/taxon/taxonomydetail?id=25072
- Brassicaceae, pianta perenne ripariale acquatica: fusti cavi radicanti ai nodi, foglie imparipennate a foliola terminale più grande, fiori bianchi a 4 petali/6 stami, **silique** con semi in due file per loggia. Distinguere `N. microphyllum`, `Rorippa amphibia`, `Lepidium sativum`, `Tropaeolum majus`.

## Audit fonte per fonte: Bibbia e floristica
1. **Moldenke, Plants of the Bible (1952), p.74**. Menziona `Nasturtium officinale` fra le molte possibili erbe verdi amare insieme a cicoria, indivia e lattuga; non prova il nome specifico nel testo di Esodo.
2. **Duke, Handbook of Medicinal Plants of the Bible (2008), «Watercress», pp.289–294**, file PDF pagine 315–320. Apre con **Numeri 9:11**, ma spiega che è candidato proposto da alcuni interpreti non israeliani. Riporta usi alimentari, effetti sperimentali e rischi di contaminazione; non riportare dosi o rivendicazioni cliniche come fatti biblici.
3. **Zohary, Plants of the Bible (1982), pp.95,100**, sezioni bitter herbs. Spiega **`mərōrîm` come denominazione collettiva** per piante amare, soprattutto Asteraceae e alcune Brassicaceae, con esempi cicorie e Reichardia. Non lo identifica esclusivamente con `N. officinale`. Questo è confronto metodologico pertinente, non voce tassonomica diretta.
4. **Post, Flora of Syria, Palestine and Sinai (1896), p.63**, PDF p.73, `N. officinale` «Common Water-Cress»: foglie, siliqua, semi, fioritura marzo-luglio, comune nei luoghi umidi. Formula di autoria storica non preferita oggi. Fonte di presenza floristico-ecologica, **non prova dell'identificazione pasquale**.
5. **Tristram** e **Balfour**: cercati nei PDF disponibili; non sono emersi contributi diretti pertinenti a questa specifica identificazione e non figurano in bibliografia decorativa della scheda.
6. **Dafni–Böck (2019)**: ricerca `Nasturtium` nel testo e tabella senza riscontro pertinente; non citati sul sito come prova. **Grilli Caiola–Guarrera–Travaglini**: da controllare quando saranno disponibili le pagine pertinenti.
7. **Mishnah, Pesahim 2:6**: elenca più nomi di erbe amare nella tradizione postbiblica, senza identificazione univoca di `Nasturtium officinale`; https://www.sefaria.org/Mishnah_Pesachim.2.6 .

### Esito biblico
- **Esodo 12:8, Numeri 9:11**: effettiva menzione di **erbe amare in generale** (ebraico `מְרֹרִים` / `mərōrîm`), non prova diretta del crescione. L'associazione specifica è **possibile ma non dimostrata**, grado di certezza basso.
- Le piante effettivamente discusse nelle schede correlate (link interni) sono `Cichorium intybus` WP #1084, `Cichorium endivia` WP #1057, `Lactuca sativa` WP #1941. La specie in esame non viene spacciata per «erba del rituale» certa.

### Letteratura moderna e sicurezza
- Ricerca metabolomica: Kyriakou et al., *Frontiers in Plant Science* (2022), DOI 10.3389/fpls.2022.998755, https://pmc.ncbi.nlm.nih.gov/articles/PMC9706002/ ; analisi di gluconasturtiina, fenetil-isotiocianato (PEITC) e flavonoidi secondo organo. **Non asserire efficacia clinica anticancro**.
- Review *Life* (2025) 15(7):1104 https://www.mdpi.com/2075-1729/15/7/1104 , benefici nutrizionali potenziali senza tradurli in cure.
- **CDC Fasciola**: https://www.cdc.gov/liver-flukes/fasciola/ segnala rischio parassitario da piante d'acqua dolce crude contaminate, incluso crescione. Raccolta spontanea in acque ignote e consumo crudo sconsigliati; scegliere prodotti controllati. Questo rischio è moderno e non inferenza sul testo biblico.

## Tavola botanica e trasferimento Media WP verificati
- Immagine originale illustrativa, non fotografia: file locale `/mnt/data/ATL-0141_Nasturtium_officinale_tavola_botanica.webp`, **1024×1536**, **353298 byte**, checksum SHA-256 `6c1ec49696543387a2822a9bc83353e506a68343a93a32c04fdd454edd825e67`.
- Ponte Base64 ASCII in Libreria su righe di 24.000 byte raw. Plugin `pdb/atlas-media-start` → `pdb/atlas-media-chunk` con offset sequenziali per **15 blocchi** (14×24000 +17298 byte), `next_offset=353298`, `remaining_bytes=0` → `pdb/atlas-media-finish(set_featured=true)`.
- **SHA256 ricevuto dal server identico all'originale**. Media WordPress **#2030**, featured **#2030**, `pdb_plate_media_id=2030`, ALT e provenance verificati. URL: https://piantedellabibbia.altervista.org/wp-content/uploads/2026/11/tavola-botanica_nasturtium-officinale-atl-0141.webp
- Ponte temporaneo `atl0141_nasturtium_officinale_base64_ponte_TEMP.txt` **spostato nel cestino della Libreria dopo la verifica**; non salvato in GitHub.
- Pubblicazione via `ewpa/update-cpt-item(status=publish)` confermata; `pdb/get-content` successivo `status=publish`, contenuto **17522 caratteri**, featured #2030, 3 link interni, SEO title/meta/keyword/OG, audit **issues=[]** per #2027 e #2022 post-revisione.
- Il controllo visivo indipendente desktop/mobile via browser pubblico **non è attestato**; non confonderlo con la verifica tecnica del media e del SEO.

## Sequenza
- **ATL-0140** Nardostachys jatamansi (incl. sinonimo N. grandiflora) WP #2022.
- **ATL-0141** Nasturtium officinale W.T.Aiton (R.Br. come autoria storica) WP #2027.
- Per le nuove voci cercare sempre il nome accettato, i sinonimi e il volgare prima di creare. Il vecchio indice GitHub contiene una numerazione diversa, da riconciliare evitando duplicati.
