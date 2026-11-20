# ATL-0119 — *Juncus effusus* L. (giunco comune) | PUBBLICATA — 20 novembre 2026

## WordPress
- Verifica anti-duplicato: `pdb/atlas-list(type=pdb_plant,search=Juncus)` trovava solo la scheda *Butomus umbellatus* #831, non una scheda di *Juncus effusus*. Ricerca «giunco» riportava anche papiro, senza doppioni tassonomici.
- **pdb_plant #1906**, `publish`, URL https://piantedellabibbia.altervista.org/piante/giunco-comune-juncus-effusus-l-i-giunchi-di-giobbe-e-isaia/
- Compilati campi nome, taxon status, famiglia, morfologia, habitat, areale, bibliografia, termini biblici, incertezza identificativa, tradizioni, usi, sicurezza e data revisione; SEO title/meta/focus/OG.
- **Correzione bibliografica fondamentale**: Duke intitola la voce `Juncus effusus L. ++ CYPERACEAE`, ma **la famiglia è Juncaceae**, confermata da Kew e WFO.
- **Audit** `pdb/seo-audit(limit=100)` per #1906 prima di publish: `issues=[]`. Stato `publish` confermato via `pdb/update-content`; **QA grafica indipendente desktop/mobile e Lighthouse non eseguita**.

## Fonti effettivamente confrontate
1. **Moldenke & Moldenke, *Plants of the Bible* (1952), pp.120–121**, voci congiunte 115–119: *Juncus effusus*, *J. maritimus* e tre Scirpus come possibilità per giunchi e vegetazione palustre. Discussione di Genesi 41:2, Giobbe 8:11, Isaia 9:14 e 19:6,15. Nomi ebraici `achú` e `agmon` e distinzione fra canna alta e giunco basso. Post è citato come testimone regionale per *J. effusus* in siti umidi fino al Sinai; nessuna pagina primaria Post inventata.
2. **Duke (2008), *Handbook of Medicinal Plants of the Bible*, pp.221–224**, PDF Libreria pp.247–250, «Soft Rush», fig. 1.56 p.223. Tratta Isaia 19:6 e 35:7; differenza con *Juncus acutus* citato da Zohary, usi del midollo come stoppini, intrecci, medicinali etnobotanici, fenantreni dehydroeffusol e juncusol in saggi in vitro. Avviso `Cyperaceae` errato.
3. **Zohary, *Plants of the Bible* (1982), p.33**, PDF Libreria p.34, descrive vegetazione di sponda e **cita *Juncus acutus*, non *Juncus effusus***, in compagnia di *Cyperus papyrus* e *Phragmites australis*. Questo è confronto differenziale, non identificazione positiva del taxon 0119.
4. **Post, *Flora of Syria, Palestine and Sinai* (1896)**: segnalazione indiretta tramite Moldenke pp120–121; una ricerca testuale per `J. effusus` nel PDF non ha restituito voce confermata direttamente, quindi nessuna pagina attribuita arbitrariamente.
5. **Kew POWO** https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:442917-1 — nome accettato *Juncus effusus* L., famiglia Juncaceae, ampia distribuzione e unità botanica Lebanon–Syria.
6. **World Flora Online** https://www.worldfloraonline.org/taxon/wfo-0000776350 e **PlantNET NSW** https://plantnet.rbgsyd.nsw.gov.au/cgi-bin/NSWfl.pl?lvl=sp&name=Juncus~effusus&page=nswfl — fusti cilindrici, midollo biancastro continuo, infiorescenza pseudolaterale: lunga brattea che simula prolungamento del fusto, fiori minuti a sei tepali e capsule.
7. **PROSEA/Pl@ntUse** https://plantuse.plantnet.org/en/Juncus_effusus_(PROSEA) — impieghi storici per stuoie, legacci, stoppini.
8. **Dizionari** H260 <https://biblehub.com/hebrew/260.htm>, H1573 <https://www.blueletterbible.org/lexicon/h1573/csb/wlc/>; `achú` è vegetazione erbacea acquatica, `gōmeʾ` è giunco/papiro e `agmon` nome generico d'acqua.
9. Tristram, Balfour, Dafni–Böck, Grilli Caiola–Guarrera–Travaglini e altre opere archiviate **non dichiarate collazionate integralmente** su questa voce. Non dedurre assenza esaustiva da ricerca testuale.

## Bibbia, grado dell'identificazione
- **Genesi 41:2**: `achú` = erba di riva/prato, non *Juncus effusus* determinato.
- **Giobbe 8:11**: `gōmeʾ` e `achú`, acqua/fango necessari; papiro e altre erbe acquatiche probabilmente più pertinenti.
- **Isaia 9:14 e 19:15**: `agmon` in contrasto con la palma (alto/basso); nessuna diagnosi di specie.
- **Isaia 19:6 e 35:7**: disseccamento e ritorno acqua; vari gruppi di vegetazione palustre, non identificazione di una sola specie.
- **Decisione editoriale**: candidato botanico etnobotanico e regionale, non confermare alcuna relazione `identifications` positiva specie-versetto sulla base di nomi comuni. Distinguere `J. acutus` di Zohary, `J. maritimus` prossimo taxon, `Cyperus papyrus`, `Butomus umbellatus`, `Phragmites australis`.

## Tavola botanica e trasporto Base64
- Tavola digitale originale, stile XIX secolo, cespo palustre, culmi cilindrici, infiorescenze rese laterali, dettagli schematici fiori a sei tepali, capsule, guaine e radici. **Ricostruzione artistica non erbario; alcuni dettagli ingranditi e stilizzati**, caratteri principali confrontati con WFO/PlantNET.
- WebP 1024×1536, **396442 byte**, SHA-256 `c238b2c1da96d7c89b5f1e2449bfa088247f6c7994d5467dcb90557f1b604d75`.
- Ponte Base64 generato come file testo con **17 righe** (blocchi da 24000 byte, ultimo 12442 byte) e caricato nella Libreria come `/PIANTE DELLA BIBBIA/atl0119_base64_bridge_temp.txt`; Files.read per riga e WordPress `pdb/atlas-media-start`, `pdb/atlas-media-chunk` sequenziali con verifica `next_offset` da 0 a 396442, `pdb/atlas-media-finish(set_featured:true)`.
- Risposta WordPress: **attachment #1908**, **featured #1908**, SHA server combacia; media https://piantedellabibbia.altervista.org/wp-content/uploads/2026/11/tavola-botanica_juncus-effusus-atl-0119.webp
- Meta `pdb_plate_media_id=1908`, provenienza dell'immagine, ALT e didascalia salvati.

## Relazioni bibliografiche
- `source_citations #1042`: Moldenke #135, pp120–121.
- `source_citations #1043`: Duke #136, pp221–224.
- `source_citations #1044`: Zohary #1554, p33 (solo confronto con *J. acutus*).

## Stato, limiti e roadmap
- ATL-0119 **pubblicata**, ma test grafici esterni non certificati.
- Prossima specie da verificare: **ATL-0120 — *Juncus maritimus* Lam.**, indicata dalla roadmap (Moldenke voce 116, p120; Duke nessuna voce autonoma). Evitare confusione con J. effusus e J. acutus. **Non creare in questo ciclo**.
- Automazione oraria Atlante **SOSPESA, non modificata**.
