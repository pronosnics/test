# ATL-0121 — *Juniperus excelsa* M.Bieb. (ginepro greco)
**Stato verificato:** PUBBLICATA su WordPress, 20 novembre 2026. **Automazione oraria Atlante: SOSPESA, non modificata.**

## Identificazione e WordPress
- Roadmap: ATL-0121, *Juniperus excelsa* M.Bieb., Cupressaceae. In Moldenke il taxon corrisponde alla **voce 185, *Sabina excelsa* (M.Bieb.) Antoine, p. 209**.
- Anti-duplicati `pdb/atlas-list(type=pdb_plant,search=Juniperus)` e `search=ginepro` prima della creazione: nessuna scheda autonoma `J. excelsa`; menzioni di conifere in Cedro/Cipresso e altri testi non sono duplicati.
- **pdb_plant #1915**, URL https://piantedellabibbia.altervista.org/piante/ginepro-greco-juniperus-excelsa-m-bieb-legno-di-algum-e-berosh-nella-bibbia/ .
- Scheda con 16+ sezioni editoriali e ~20.000 caratteri HTML; nome, autore, sinonimi, tassonomia, habitat, areale, morfologia, fonti, impieghi, sicurezza, dubbi biblici e confronto con altri taxa. Metadati SEO title, description, focus keyword, OpenGraph e riferimenti bibliografici compilati, più link interni a Cedro del Libano e Cipresso mediterraneo.
- **Dossier bibliografico separato WP #1918**, post type `pdb_source`, pubblicato mediante `ewpa/update-cpt-item` perché `pdb/update-content` rifiuta quel CPT: https://piantedellabibbia.altervista.org/fonti-bibliografiche/ginepro-greco-confronto-moldenke-duke-zohary-tristram-musselman-e-kew/ .
- `source_citations`: **#1048 Moldenke #135**, p.209–210; **#1049 Duke #136**, pp.224–226; **#1050 Zohary #1554**, pp.106–107; **#1051 dossier #1918**, che collaziona Tristram, Musselman, Kew, UBS, EUFORGEN e altri.
- `pdb/seo-audit(limit=100)` dopo completamento SEO e featured prima di pubblicazione: **issues=[]**. `pdb/update-content(status=publish)` risposta: `status=publish`, `featured_media=1917`, permalink sopra. Verifica finale rilettura da eseguire a fine ciclo.
- Limiti: audit SEO MCP strutturale, non certificazione di rendering desktop/mobile né test Lighthouse.

## Confronto primario delle nostre fonti
1. **Moldenke & Moldenke, *Plants of the Bible* (1952), p. 209**, voce 185 **<em>Sabina excelsa</em>**. Propongono l'«**algum**» importato **dal Libano** di **2 Cronache 2:8** come ginepro greco, distinguendolo dal legname di «almug/algum» importato **da Ofir** in **1 Re 10:11–12 e 2 Cronache 9:10–11**; trattano diverse proposte (sandalo rosso *Pterocarpus santalinus*, cipresso e anche noce come ipotesi antiche), senza potere escludere confusione testuale. Descrivono albero alto 15–65 piedi, chioma piramidale, foglie giovanili aghiformi, adulte squamiformi, galbuli neri, monti del Libano fino ad alte quote. Confrontata anche voce 186 *Sabina phoenicia* a p.209–210, distinto taxon, non sinonimo di *S. excelsa*.
2. **Zohary, *Plants of the Bible* (1982), pp. 106–107** (PDF Libreria pp.107–108), «Evergreen Cypress / Cilician Fir / Eastern Savin». `berōš` è **collettivo** per conifere; a seconda del contesto possono entrare *Cupressus sempervirens*, *Abies cilicica*, *Juniperus excelsa*. Quando è connesso al cedro e al Libano favorisce talvolta l'abete cilicio; quando si riferisce al **Senir/Ermon** di **Ezechiele 27:5** considera il ginepro greco un candidato. Paralleli lessicali `brotha` (Libano), `berōtîm` del **Cantico 1:17** e `burāsu` accadico non sono prove etimologiche conclusive. Cita anche *J. foetidissima* in alternativa: altro taxon moderno.
3. **Duke, *Handbook of Medicinal Plants of the Bible* (2008), pp. 224–226** (PDF Libreria pp.250–252), figura 1.57 p.225. Registra <em>J. excelsa</em> e collega Ezechiele 27:5 con Zohary. Il lungo elenco di nomi e sinonimi comprende taxa oggi classificati separatamente, in particolare <em>J. polycarpos</em>. Storia delle pratiche popolari (usi topici, fumo, oli, galbuli), alcuni effetti sperimentali: non dimostrano sicurezza né indicazioni terapeutiche; non diffondere dosaggi né ricette. Attenzione che Duke nelle pagine successive preferisce altri ginepri per interpretazioni bibliche di `arar`.
4. **H. B. Tristram, *The Natural History of the Bible* (edizione storica nella Libreria)**, voce «Cypress», **pp. 348–349** (PDF pp.360–361), include espressamente il **Syrian Juniper, *Juniperus excelsa*** come ipotesi per la «cypress» di **Isaia 44:14–15**, con il cipresso comune come alternativa; voce «Fir», **pp. 353–354** (PDF pp.365–366) descrive l'ampiezza di `berosh/beroth` e ricorda conifere/pini/ginepri in testi di Isaia, Ezechiele, Cantico e legno del Tempio, spesso privilegiando altri taxa quali *Pinus halepensis*. Nessun versetto viene attribuito sicuramente al ginepro.
5. **L. J. Musselman, *A Dictionary of Bible Plants* (2011), pp. 78–79**, online Cambridge University Press (abstract consultabile), propone <em>J. excelsa</em> come un possibile legno `algum/almug` e distingue questo da `tidhar/teashur` (per cui considera <em>J. oxycedrus</em>). Fonte contemporanea ulteriore oltre i tre classici.
6. **UBS / TIPs** «Each According to its Kind: Plants and Trees in the Bible», <https://tips.translation.bible/tip_verse/ezek-275/>, Ezechiele 27:5, giustifica *J. excelsa* come possibile legno di Senir.

## Tassonomia aggiornata (Kew POWO novembre 2026)
- *Juniperus excelsa* M.Bieb., **accettato**, Cupressaceae, pubblicato 1798, *Tabl. Prov. Mer Casp.* p.120: https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:60461568-2 .
- **Sinonimi omotipici**: <em>Sabina excelsa</em> (M.Bieb.) Antoine, <em>Juniperus foetida</em> var. <em>excelsa</em> (M.Bieb.) Spach, <em>J. sabina</em> var. <em>excelsa</em> (M.Bieb.) Georgi. Questi collegamenti sono veri.
- **Specie indipendenti ACCETTATE**: <em>Juniperus polycarpos</em> K.Koch (https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:262309-1), la cui sinonimia contiene <em>J. excelsa</em> subsp./var. <em>polycarpos</em>; <em>Juniperus foetidissima</em> Willd. (https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:262220-1). <em>J. oxycedrus</em> e <em>J. phoenicia</em> sono voci indipendenti ATL-0122/0123.
- Kew nativo da **Balcani settentrionali a Israele e Caucaso**, unità specifiche Palestina, Libano–Siria, Cipro, Türkiye e altre. Ecologia di monti calcarei, pendii rupestri aridi, boschi aperti.
- Anatomia WFO / Flora of Israel / Gymnosperm Database: foglie adulte squamiformi appressate opposte/decussate, giovanili aghiformi, microstrobili maschili, **galbuli**, non vere bacche o drupe; maturazione verdastro → porpora/nero-bluastra; coni 6–12 mm circa secondo descrizioni e aree. Il legno aromatico non prova un «algum» specifico.

## Ecologia e conservazione
- **EUFORGEN** https://www.euforgen.org/species/juniperus-excelsa e ricerca **Ecological characterization of the Juniperus excelsa stands in Lebanon** (2013) https://www.persee.fr/doc/ecmed_0153-8756_2013_num_39_1_1303 : frammentazione boschi, taglio, pascolo, estensione coltivi, stress idrico, isolamento di popolazioni. Distinguere pressione locale dalla categoria IUCN globale.
- La letteratura sulle attività biologiche di oli e resine non giustifica ricette o dosaggi, né commestibilità supposta per analogia con *J. communis*.

## Immagine originale e trasferimento Base64/Library
- Tavola botanica DIGITALE ORIGINALE 19° sec, senza scritte, con albero di montagna, tronco sfogliato, rametti a squame, strobili maschili giallastri, galbuli verdi e scuri e semini, dettagli giovanili. **Interpretazione iconografica, NON campione d'erbario; i galbuli illustrati sono ingranditi**.
- WebP `tavola-botanica_juniperus-excelsa-atl-0121.webp` 1024×1536, **444182 byte**, SHA256 **`afda4fd0cfb42eb5107109c3cbbc5e2cb4c627173a4e182dbb5f152112325c7e`**.
- Generato ponte Base64 **19 blocchi** da 24000 byte massimi (18×24000 +12182 finale), file temporaneo Libreria `/PIANTE DELLA BIBBIA/atl0121_base64_bridge_temp.txt`.
- `pdb/atlas-media-start` + `pdb/atlas-media-chunk` in ordine con ogni `next_offset` verificato (fino a 444182) + `pdb/atlas-media-finish(set_featured=true)` → media **#1917**, featured **#1917**, SHA256 lato server identico.
- URL media https://piantedellabibbia.altervista.org/wp-content/uploads/2026/11/tavola-botanica_juniperus-excelsa-atl-0121.webp .
- ALT, caption e meta `pdb_plate_media_id=1917`, provenienza iconografica scritti sul sito.
- File ponte temporaneo da cestinare dopo controllo finale di WordPress.

## Collazioni non confermate
- Post 1896 *Flora of Syria, Palestine and Sinai*: nessuna pagina primaria di <em>J. excelsa</em> localizzata mediante ricerca testuale; le osservazioni geografiche sono attribuite a Moldenke o altre fonti verificate.
- Grilli Caiola–Guarrera–Travaglini, Balfour, Dafni–Böck e altri materiali: nessuna menzione specifica verificata integralmente in questo ciclo; non sostenere di aver letto ogni pagina o che non ne parlino. Questo resta controllo aperto, non omissione nascosta.
- Il paragrafo tradizionale su <em>J. foetidissima</em>, i lemmi `berōš`, `algum/almug` e `ʿarʿār` richiede separazione rigorosa di taxa e contesti.

## Roadmap
- **ATL-0121 PUBBLICATA**, WP #1915 e featured #1917.
- Prossima specie prevista: **ATL-0122 — <em>Juniperus oxycedrus</em> L. (ginepro coccolone/pungente secondo sottospecie; verificare nome comune)**, non avviare senza richiesta.
- **Automazione oraria Atlante sospesa**.


## CHECK FINALE POST-PUBBLICAZIONE
- WordPress `pdb/get-content` **#1915** conferma `publish`, featured **#1917**, HTML **19860 caratteri**, due link interni a cedro e cipresso, SEO title/description/keyword/OG presenti.
- `pdb/seo-audit(limit=100)` dopo pubblicazione conferma **issues=[]** per #1915 e anche per #1910.
- `ewpa/get-cpt-item` **#1918** conferma `pdb_source` **publish** con permalink e **3049 caratteri** di collazione.
- Controllo di chiusura **ATL-0120 #1910**: ancora publish e include la nuova analisi lessicale di **Isaia 58:5 (UBS)**.
- Il file ponte Base64 temporaneo `atl0121_base64_bridge_temp.txt` della Libreria è stato **spostato nel cestino** tramite `files__manage_library`; il file WebP definitivo e la featured WordPress restano intatti.
- Tentativo browser web di aprire URL pubblici #1915 e #1910 fallito per inaccessibilità dell'host tramite il browser; quindi **nessuna verifica grafica indipendente desktop/mobile né Lighthouse** rivendicata.
