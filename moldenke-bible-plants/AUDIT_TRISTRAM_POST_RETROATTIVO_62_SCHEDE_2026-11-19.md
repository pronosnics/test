# Audit Tristram–Post — 62 specie pubblicate, 19 novembre 2026

**Obiettivo:** confronto delle 62 schede WordPress dell'Atlante delle Piante della Bibbia con i due **originali integrali** di Henry Baker Tristram (1867) e George Edward Post (1896). Non attribuire ai due autori identificazioni moderne non dimostrate.

## Risultato verificato

- **62/62** specie censite e confrontate con il **testo estratto, i nomi storici, sinonimi, indici e i brani pertinenti** dei due PDF originali, con controllo delle pagine digitalizzate quando rilevante. L'analisi è **su specie e sui passaggi individuati**, non una lettura filologica manuale ininterrotta di ogni riga delle 1.468 pagine.
- **41** schede WordPress arricchite con testo italiano originale, riferimenti bibliografici puntuali e `plant.sources`; **42** nuove sezioni HTML (la scheda di *Cistus creticus* #1167 ne riceve due).
- **21** schede senza integrazione, per assenza di nuove informazioni non ridondanti o perché le fonti trattano **un genere, un prodotto o un termine storico** senza identificare univocamente la specie moderna.
- **Verifica post-salvataggio:** le 41 pagine revisionate sono state riaperte via `pdb/get-content`, con `status=publish`, citazione della fonte nel campo strutturato, e 1 sezione nuova tracciabile (2 per #1167). **SEO: 62/62 piante nel controllo `pdb/seo-audit`, zero criticità segnalate.** Non equivale a ispezione grafica/CWV o verifica esterna di tutte le affermazioni cliniche.
- Nessun titolo, permalink, immagine in evidenza o stato di pubblicazione modificato; interventi tramite `pdb/update-content` con `expected_modified_gmt` per prevenire conflitti.
- **Correzioni durante QA sulle fonti originali:** nella voce *Pistacia terebinthus* è stata precisata la varietà storica **palaestina**, non *mutica*; nella voce *Cynomorium coccineum* si è corretto che Post la tratta sotto l'intestazione **Euphorbiaceae**, una classificazione storica non attuale. Entrambe le correzioni sono state risalvate in WordPress.

## File integrali stabili

| Libro | Edizione | PDF originale | Libreria ChatGPT | Nota |
|---|---|---:|---|---|
| H. B. Tristram, *The Natural History of the Bible* | Londra, 1867 | **532 pp** | `/PIANTE DELLA BIBBIA/Fonti bibliografiche/Tristram_1867_The_Natural_History_of_the_Bible.pdf` | Botanica cap. XII da stamp. p. 330 = PDF 342; cap. XIII da stamp. p. 419 = PDF 431 |
| G. E. Post, *Flora of Syria, Palestine and Sinai* | Beirut, 1896 | **936 pp** | `/PIANTE DELLA BIBBIA/Fonti bibliografiche/Post_1896_Flora_of_Syria_Palestine_and_Sinai.pdf` | Copia con addenda; nelle voci principali spesso stampata p = PDF p − 10, da controllare localmente |

Dettagli dei PDF (identificativi stabili, checksum e indici): [registro delle due fonti storiche](FONTI_STORICHE_ORIGINALI_TRISTRAM_1867_POST_1896.md). Catalogo generale: [fonti bibliografiche master](FONTI_BIBLIOGRAFICHE_MASTER_ATLANTE_2026-11-19.md).

## Matrice completa delle 62 schede

La colonna «nessuna integrazione» significa **nessuna notizia sufficientemente nuova, specifica e verificata inserita in questo audit**, NON «il libro non nomina mai la pianta». Le grafie dei nomi storici vanno sempre distinte dal nome tassonomico accettato.

| WP ID | Scheda pubblicata | Esito | Pagina originale consultata | Nuovo contenuto o ragione dell'assenza |
|---:|---|---|---|---|
| 1598 | Fungo di Malta — Cynomorium coccineum L.: Giobbe 30:4 e botanica | **INTEGRATA WP** | Post p. 715 (PDF 725) | *Cynomorium coccineum*: nomi locali, spadice, salinità; sistematica di Post corretta a Euphorbiaceae |
| 1583 | Palmarosa — Cymbopogon martini: canna aromatica nella Bibbia e botanica | **NESSUNA INTEGRAZIONE** | — | Tristram tratta la canna aromatica/«calamus» senza attribuzione specifica comprovata a *Cymbopogon martini*; in scheda è già discusso il confronto. |
| 1575 | Curcuma — Curcuma longa L.: Cantico 4:14, Zohary e botanica | **NESSUNA INTEGRAZIONE** | — | Le fonti storiche menzionano *karkôm* e lo zafferano; non forniscono prova aggiuntiva specifica per *Curcuma longa* rispetto alla discussione già presente. |
| 1551 | Cipresso mediterraneo — Cupressus sempervirens L.: Bibbia, Zohary e botanica | **INTEGRATA WP** | Post p. 748 (PDF 758) | *Cupressus sempervirens*: forma a chioma stretta coltivata nei cimiteri |
| 1485 | Cumino — Cuminum cyminum L.: Isaia 28, Matteo 23:23 e botanica | **INTEGRATA WP** | Tristram p. 443 (PDF 455) | Cumino coltivato, impieghi culinari, battitura con verga e osservazione non trovato selvatico |
| 1477 | Cetriolo comune — Cucumis sativus L.: Bibbia, botanica e storia | **INTEGRATA WP** | Tristram pp. 441–443 (PDF 453–455); Post p. 324 (PDF 334) | Cetriolo, campi irrigati e capanne di guardia (Isaia 1:8), *khiyâr* |
| 1469 | Melone — Cucumis melo L.: Numeri 11:5, botanica e varietà antiche | **INTEGRATA WP** | Tristram p. 468 (PDF 480); Post p. 324 (PDF 334) | *Cucumis melo*: distinzione fra melone e anguria, nome *battikh asfar* |
| 1456 | Cetriolo egiziano — Cucumis chate Hasselq. (Cucumis melo): Bibbia e botanica | **INTEGRATA WP** | Tristram p. 442 (PDF 454); Post p. 324 (PDF 334) | *Cucumis chate*: descrizione agraria distinta da cetriolo e melone, nome *muqti* |
| 1452 | Croco di Kotschy — Crocus kotschyanus (sin. Crocus zonatus): Cantico 6:4 | **INTEGRATA WP** | Post p. 771 (PDF 781) | *Crocus zonatus* (nome storico): gola ad anello, fioritura autunnale, Libano e Hermon |
| 1449 | Croco siriano — Crocus vitellinus Wahlenb.: Cantico 6:4 e botanica | **INTEGRATA WP** | Post p. 773 (PDF 782) | *Crocus vitellinus*: caratteri, fig. 358, var. *vittatus* e fioritura invernale |
| 1432 | Zafferano — Crocus sativus L.: Cantico 4:14 e botanica | **INTEGRATA WP** | Tristram pp. 479–480 (PDF 491–492) | *karkôm*: saffron di Tristram vs turmeric di Zohary; osservazioni sul commercio |
| 1420 | Croco invernale — Crocus hyemalis: Cantico 6:4 e botanica | **INTEGRATA WP** | Post p. 773 (PDF 782) | *Crocus hyemalis*: foglie, periodo invernale e var. *Foxii* presso Gerico |
| 1401 | Croco di Damasco — Crocus damascenus: Cantico 6:4 e botanica | **NESSUNA INTEGRAZIONE** | — | Post tratta altri *Crocus*; nessuna monografia inequivoca identificata per *C. damascenus* nella copia consultata. |
| 1383 | Coriandolo — Coriandrum sativum: la manna nella Bibbia e botanica | **INTEGRATA WP** | Post p. 334 (PDF 344) | *Coriandrum sativum*: denominazione locale, foglie differenziate, coltura |
| 1358 | Cicuta maggiore — Conium maculatum: Bibbia, botanica e tossicità | **INTEGRATA WP** | Post p. 335 (PDF 345) | *Conium maculatum*: caratteri fusto maculato, presenza storica, forte tossicità |
| 1326 | Mirra — Commiphora myrrha: Bibbia, resina e botanica | **NESSUNA INTEGRAZIONE** | — | Tristram distingue prodotti resinosi e balsami, ma il materiale nuovo non è separabile in modo sicuro da quanto già pubblicato per mirra e balsamo. |
| 1307 | Balsamo di Galaad — Commiphora gileadensis: botanica e Bibbia | **INTEGRATA WP** | Tristram pp. 336–338 (PDF 348–350) | Balsamo di Galaad: fonti resinifere alternative; coltivazione antica vs osservazioni proprie |
| 1287 | Mirra africana — Commiphora africana: bdellio, Bibbia e botanica | **NESSUNA INTEGRAZIONE** | — | Denominazioni ottocentesche di mirra/«Balsamodendron» non determinano *Commiphora africana*; evitare un falso collegamento. |
| 1271 | Cedro agrume — Citrus medica L.: etrog, Bibbia e botanica | **NESSUNA INTEGRAZIONE** | — | Tristram discute il cedro-agrumi e l'interpretazione rituale dell'etrog; l'informazione pertinente è già nelle schede e nel confronto Balfour. |
| 1257 | Anguria — Citrullus lanatus: il melone d’Egitto nella Bibbia | **INTEGRATA WP** | Tristram p. 468 (PDF 480); Post p. 324 (PDF 334) | Anguria: coltivazione e calendario storico; *Citrullus vulgaris* come denominazione d'epoca |
| 1227 | Coloquintide — Citrullus colocynthis: Bibbia, zucche selvatiche e tossicità | **INTEGRATA WP** | Post p. 324 (PDF 334) | *Citrullus colocynthis*: distribuzione su ambienti sabbiosi e rischio tossico |
| 1198 | Cisto a foglie di salvia — Cistus salviifolius L.: Bibbia e botanica | **INTEGRATA WP** | Post p. 115 (PDF 125) | *Cistus salviaefolius*: petali bianchi, terreno roccioso e tassonomia storica |
| 1167 | Cisto di Creta — Cistus creticus L.: ladano, Bibbia e botanica | **INTEGRATA WP** | Post p. 114 (PDF 124); Tristram pp. 459–460 (PDF 471–472) | *Cistus villosus* var. *creticus*; raccolta storica del ladano e assenza di prova della produzione locale (due sezioni) |
| 1133 | Cannella vera — Cinnamomum verum J.Presl: Bibbia, aromi e botanica | **NESSUNA INTEGRAZIONE** | — | Cannella/cassia sono prodotti commerciali e nomi storici ambigui; nessun nuovo dato attribuibile con sicurezza a *Cinnamomum verum*. |
| 1104 | Cassia — Cinnamomum aromaticum Nees: spezia, Bibbia e botanica | **NESSUNA INTEGRAZIONE** | — | La distinzione cassia/cannella e la storia lessicale sono già presenti; nessuna notizia nuova sufficientemente specifica per *C. aromaticum*. |
| 1084 | Cicoria comune — Cichorium intybus L.: Bibbia, erbe amare e botanica | **INTEGRATA WP** | Post p. 475 (PDF 485) | *Cichorium intybus*: descrizione e distinzione da altri taxa del genere |
| 1057 | Indivia — Cichorium endivia L.: erbe amare nella Bibbia e botanica | **NESSUNA INTEGRAZIONE** | — | Post descrive *Cichorium intybus* e altri taxa ma non dimostra un'identificazione diretta delle erbe amare con *C. endivia*. |
| 1031 | Cece — Cicer arietinum L.: Bibbia, botanica e usi antichi | **INTEGRATA WP** | Post p. 285 (PDF 295) | *Cicer arietinum*: nome locale *hummus* e semi tostati *Quddâmi* |
| 1014 | Albero di Giuda — Cercis siliquastrum L.: botanica, Bibbia e tradizioni | **NESSUNA INTEGRAZIONE** | — | Post fornisce una chiave del genere *Cercis*; i dati generici non vengono falsamente presentati come descrizione autonoma di *C. siliquastrum*. |
| 992 | Carrubo — Ceratonia siliqua L.: Bibbia, baccelli e botanica | **NESSUNA INTEGRAZIONE** | — | Post include una descrizione generica del genere *Ceratonia*; origini e usi del carrubo sono già ampiamente documentati in scheda. |
| 973 | Cefalaria siriana — Cephalaria syriaca: le zizzanie di Matteo 13? | **INTEGRATA WP** | Post p. 400 (PDF 410) | *Cephalaria syriaca*: habitat nei campi e var. storiche *Boissieri*, *sessilis* |
| 957 | Cardo giallo del Levante — Centaurea verutum L.: Bibbia e botanica | **INTEGRATA WP** | Post p. 469 (PDF 479) | *Centaurea verutum*: fiori gialli, spine, bordi dei campi |
| 942 | Cardo stellato iberico — Centaurea iberica: Bibbia, botanica e dardar | **INTEGRATA WP** | Post p. 470 (PDF 480) | *Centaurea iberica*: spine laterali e varietà storiche |
| 922 | Calcatreppola — Centaurea calcitrapa L.: cardi e spine nella Bibbia | **INTEGRATA WP** | Post p. 470 (PDF 480) | *Centaurea calcitrapa*: spine e fioritura vs *C. iberica* |
| 905 | Cartamo — Carthamus tinctorius: zafferano biblico, botanica e fonti | **INTEGRATA WP** | Post p. 474 (PDF 484) | *Carthamus tinctorius*: nomi «safflower» e «saffron», tintura in cucina |
| 889 | Cappero — Capparis spinosa L. (sin. Capparis sicula): Bibbia e botanica | **INTEGRATA WP** | Post p. 109 (PDF 119) | *Capparis spinosa*: var. *aegyptia* e altri taxa storici, ecologia di muri/rocce |
| 874 | Pomo di Sodoma — Calotropis procera: Bibbia, botanica e tossicità | **INTEGRATA WP** | Tristram p. 484 (PDF 496) | *Calotropis procera* presso Mar Morto; lattice irritante; tradizioni non medicinali dimostrate |
| 850 | Bosso comune — Buxus sempervirens e il bosso nella Bibbia | **NESSUNA INTEGRAZIONE** | — | Le forme storiche «box-tree» sono state già documentate nel controllo integrale Balfour; nessuna nuova informazione univoca da ripetere. |
| 849 | Bosso a foglie lunghe — Buxus balearica (sin. Buxus longifolia) | **NESSUNA INTEGRAZIONE** | — | Le identificazioni del «box-tree» non riguardano con sicurezza *Buxus balearica*; la divergenza è già registrata. |
| 831 | Giunco fiorito — Butomus umbellatus e le piante palustri bibliche | **INTEGRATA WP** | Post p. 821 (PDF 831) | *Butomus umbellatus*: fiori rosa e zone acquatiche |
| 807 | Senape nera — Brassica nigra (Mutarda nigra) nella Bibbia | **INTEGRATA WP** | Tristram pp. 472–474 (PDF 484–486) | Senape nera vs alternativa *Salvadora persica* proposta da Balfour |
| 760 | Incenso — Boswellia sacra Flück.: Bibbia, resina e botanica | **INTEGRATA WP** | Tristram p. 355 (PDF 367) | Incenso: ricostruzione commerciale ottocentesca contestabile, non prova contro *Boswellia* arabica |
| 747 | Dattero del deserto — Balanites aegyptiaca e balsamo biblico | **NESSUNA INTEGRAZIONE** | — | Tristram cita piante come possibili fonti di balsami, ma non prova una menzione biblica diretta di *Balanites aegyptiaca*; dati già contestualizzati. |
| 737 | Aloe succotrina Weston — aloe del Capo, Bibbia e storia | **NESSUNA INTEGRAZIONE** | — | I riferimenti ad «aloes» non determinano la specifica *Aloe succotrina*; non aggiungere una citazione come se fosse diretta. |
| 700 | Legno d’agar — Aquilaria malaccensis Lam. (sin. Aquilaria agallocha) | **NESSUNA INTEGRAZIONE** | — | Tristram tratta «lign aloes» come prodotto aromatico, senza identificazione moderna esclusiva con *Aquilaria malaccensis*; il confronto è già presente. |
| 699 | Anemone coronaria L. — anemone dei campi e gigli del Vangelo | **NESSUNA INTEGRAZIONE** | — | Le discussioni su «gigli dei campi» e fiori candidati non danno un'identificazione sicura dell'*Anemone coronaria* né nuovi dati non ridondanti. |
| 667 | Anastatica hierochuntica — Rosa di Gerico e gulgal nella Bibbia | **INTEGRATA WP** | Post p. 67 (PDF 77) | *Anastatica hierochuntina*: apertura dei rami secchi e località storiche vicino al Mar Morto |
| 666 | Aloe vera — botanica, gel e aloe biblico (Giovanni 19:39) | **NESSUNA INTEGRAZIONE** | — | Tristram separa aloe aromatico e aloe farmaceutico in modo storico; la distinzione è già presente e non identifica direttamente *Aloe vera*. |
| 628 | Aglio — Allium sativum L.: Bibbia, botanica e sicurezza | **NESSUNA INTEGRAZIONE** | — | Aglio menzionato come cibo di Numeri 11:5; i resoconti recuperati non aggiungono dati specifici non già riportati. |
| 627 | Cipolla — Allium cepa L.: Bibbia, botanica e usi storici | **NESSUNA INTEGRAZIONE** | — | Cipolla menzionata come cibo di Numeri 11:5; informazioni alimentari e tradizionali già trattate, nessuna integrazione fondata. |
| 597 | Lentisco — Pistacia lentiscus L.: mastice, Bibbia e botanica | **INTEGRATA WP** | Post p. 207 (PDF 217) | *Pistacia lentiscus*: mastice, nome *mastik*, habitat costieri |
| 557 | Terebinto — Pistacia terebinthus L.: botanica, Bibbia e storia | **INTEGRATA WP** | Post p. 206 (PDF 216) | *Pistacia terebinthus*: nomenclatura ottocentesca e var. *palaestina* (correzione verificata) |
| 525 | Mirto — Myrtus communis L.: botanica, passi biblici e significato | **INTEGRATA WP** | Post p. 319 (PDF 329) | *Myrtus communis*: nomi locali e ambienti con corsi d'acqua |
| 467 | Mandorlo — Prunus amygdalus Batsch: botanica, Bibbia e storia | **INTEGRATA WP** | Post p. 302 (PDF 312) | *Amygdalus communis* storico, *microphylla* e *pedunculata* |
| 427 | Papiro — Cyperus papyrus L.: botanica, Bibbia, scrittura e storia | **INTEGRATA WP** | Post p. 830 (PDF 840) | *Cyperus papyrus*: forma vegetativa e località palustri Huleh/Tiberiade |
| 367 | Sicomoro — Ficus sycomorus L.: Bibbia, botanica e storia | **INTEGRATA WP** | Post p. 730 (PDF 740) | *Ficus sycomorus*: siconi su rami vecchi e presenza storica presso gli abitati |
| 308 | Palma da dattero — Phoenix dactylifera L.: botanica, Bibbia e storia | **NESSUNA INTEGRAZIONE** | — | Tristram racconta coltivazione e storia della palma a Gerico, informazioni già ampiamente trattate da Zohary/Balfour e nella scheda. |
| 266 | Cedro del Libano — Cedrus libani A.Rich.: botanica, Bibbia e storia | **INTEGRATA WP** | Post p. 751 (PDF 761) | *Cedrus libani*: boschi e località montane ricordate nel 1896 |
| 212 | Melograno — Punica granatum L.  /  Bibbia, botanica e usi storici | **INTEGRATA WP** | Post p. 319 (PDF 329) | *Punica granatum*: *rummân*, coltivazione e areale storico dichiarato con riserva |
| 152 | Fico — Ficus carica L.: foglie, frutti e riferimenti biblici | **INTEGRATA WP** | Tristram pp. 350–352 (PDF 362–364) | Fichi di Engedi e microclima; ripresa vegetativa precoce |
| 143 | Vite — Vitis vinifera L.: i tralci e la vera vite nella Bibbia | **INTEGRATA WP** | Post p. 203 (PDF 213) | *Vitis vinifera*: viticci, nomi agricoli e ipotesi sull'origine da non attualizzare |
| 129 | Olivo — Olea europaea L.: botanica, Bibbia e usi tradizionali | **INTEGRATA WP** | Post p. 521 (PDF 531) | *Olea europaea*: *zeitûn*, differenze storiche fra olivi spontanei e coltivati |

## Regole da mantenere nelle future schede

1. Per qualsiasi nuova specie cercare **sia** nei due PDF originali (in Libreria) **sia** nelle altre fonti canoniche Moldenke, Duke, Zohary, Grilli Caiola, Balfour, Dafni–Böck, Kew, studi specialistici.
2. Cercare la grafia ottocentesca, sinonimi, nomi comuni e parole ebraiche/greche, ma **citare soltanto il passaggio originale davvero letto**: riportare pagina stampata e pagina PDF quando differenti.
3. In Post valorizzare morfologia, fioritura, habitat e geografia **storica**; in Tristram osservazioni sul campo, lessico e congetture bibliche **attribuite all'autore**. Una descrizione naturalistica del 1867/1896 non identifica automaticamente una specie di un versetto biblico.
4. Preservare testi e metadati esistenti; pubblicare solo contributi **nuovi e non ridondanti** dopo confronto, mantenendo descrizioni originali in italiano e bibliografia; ripetere verifica WordPress e audit.
5. Non aggiungere al testo del sito note interne del tipo «non trattata in questa fonte» o affermazioni di indisponibilità dei libri.

**Fine audit:** due fonti ora **acquisite, consultate e applicate alle 62 specie**. Questo documento sostituisce lo stato iniziale di blocco accessi contenuto in [audit precedente di acquisizione](AUDIT_TRISTRAM_POST_62_SCHEDE_2026-11-19.md), che resta consultabile come cronologia. Nuove specie successive alle 62 iniziali devono essere incluse nei controlli futuri.
