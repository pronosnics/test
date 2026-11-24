# Registro QA anti-ripetizioni — Piante della Bibbia — 24 novembre 2026

> Registro operativo privato del repository; **non** copiare frasi di workflow nelle pagine pubbliche. Collegato alla [roadmap master](PIANTE_DELLA_BIBBIA_MASTER_SPECIFICHE_E_ROADMAP.md).

## Stato verificato e grado di certezza

- WordPress/plugin `pdb-atlante`, copertura consultata 24/11/2026: **225** record `pdb_plant` pubblicati, **225 con almeno una fonte associata**, **0 senza fonti**, **31 segnalazioni relazionali**. Questo non significa che tutte le fonti siano state rilette fonte per fonte, né che 31 specie siano mancanti.
- Le **31** segnalazioni hanno `identifications=0` nella copertura: su ciascuna è stata eseguita una **revisione mirata del testo WordPress e del metadato biblico**, non una collazione filologica esaustiva di tutte le fonti. In tutti i 31 casi la scheda esplicita un limite all'attribuzione specie-specifica. **Non aggiungere relazioni di identificazione solo per far scendere il contatore.**
- Gli interventi puntuali elencati qui sotto sono **salvati** su WordPress; quando indicato «scansione mirata» non affermare una revisione integrale certificata.
- Per ogni record, **prima di ripetere**: controllare questo registro e `post_modified_gmt` / `pdb_botanical_reviewed_at`. Se testo, fonti e nomenclatura sono invariati e non emerge una nuova incongruenza, **non rifare le stesse verifiche**. Su nuova fonte, correzione scientifica, mutamento tassonomico o modifica contenutistica significativa, riaprire soltanto il controllo pertinente e aggiornare il registro.
- **Distinguere stati**: `PRESENTE` (record online), `QA_MIRATO_DOCUMENTATO` (controlli specifici conclusi), `QA_FONTI_COMPLETO` (collazione registrata fonte per fonte, relazioni/immagine/SEO e rendering completati), `IDENTIFICAZIONE_NON_PROVATA` (assenza di collegamento motivata), `BOZZA` (non pubblicata). Sono stati verificati i primi due aspetti per i record qui descritti; **non assegnare in blocco `QA_FONTI_COMPLETO`**.

## Registro individuale delle 31 segnalazioni `identifications=0`

Ogni riga registra il **motivo del mancato collegamento specie-specifico**, non una nuova «identificazione negativa definitiva». Fonte della motivazione: `pdb_biblical_overview` pubblicato e testo revisionato; non inventare un grado di certezza superiore.

| WP `pdb_plant` | Taxon | Motivazione / limite biblico | Intervento o perimetro verificato |
|---:|---|---|---|
| 4799 | *Armoracia rusticana* | Erbe amare collettive (maror); presenza rituale tardiva del rafano non prova identificazione biblica | testo/metadati corretti |
| 4752 | *Anthemis cotula* | Fiori generici; Zohary tratta il genere e non prova la specie | nota editoriale eliminata |
| 4700 | *Anabasis articulata* | Shuni e Hagarmi sono nomi propri; solo ipotesi etimologica | scansione mirata |
| 4664 | *Alopecurus utriculatus subsp. anthoxanthoides* | Erba biblica generica, non identificazione di Poaceae | ID immagine/ALT corretti |
| 4605 | *Allium ascalonicum* | šûmîm non determina lo scalogno spontaneo; differenza da aglio e scalogno coltivato | scansione mirata |
| 4478 | *Aegilops peregrina* | Vocaboli generici per erbe/foraggio, non per Aegilops | scansione mirata |
| 3992 | *Urtica dioica* | Nomi antichi di ortiche plurivoci; presenza floristica non prova uso biblico della specie | meta scientifici normalizzati; medicina bozza #5599 |
| 3988 | *Urtica membranacea* | U. caudata Vahl nome storico; parole bibliche non diagnosticano la specie | meta scientifici e nota interna corretti |
| 3984 | *Ulmus minor subsp. canescens* | Emendazione gešem/nešem di Isaia 44:14 congetturale; Osea 4:13 spesso terebinto | autore e URL Kew corretti |
| 3980 | *Typha L.* | sûf/gōmeʾ/kálamos generici, senza identificazione di specie | meta di genere completati |
| 3970 | *Typha angustifolia* | T. angustata trattato diversamente da Kew e ITIS; canna evangelica indeterminata | meta scientifici completati |
| 3966 | *Tulipa L.* | niṣṣānîm indica collettivamente fiori primaverili | meta di genere completati |
| 3957 | *Tulipa montana* | Kew: nativa Iran/Turkmenistan; tulipani levantini storici con nome non trasferibile automaticamente | metadati completati e nota interna rimossa |
| 3953 | *Triticum aestivum* | ḥiṭṭāh identifica frumento come categoria, non sempre il moderno grano tenero esaploide | meta completati; editorial status aggiornato |
| 3940 | *Thymelaea hirsuta* | Mattanah è un toponimo; mitnan è accostamento ipotetico | scansione mirata |
| 3937 | *Zygophyllum dumosum* | Elim è un toponimo, non fitonimo attestato | meta usi ripulito |
| 3817 | *Tamarix senegalensis* | Manna e ʾēšel: ipotesi storiche; non attestazione specie-specifica | sinonimia e metadati ripuliti |
| 3695 | *Suaeda spp.* | Alofitie, toponimi e antroponimi non determinano il genere nei versi | scansione mirata |
| 2567 | *Quercus lusitanica* | Taxon ibero-marocchino moderno distinto da antichi concetti levantini di Q. lusitanica | meta tradotti, normalizzati e distinti |
| 2508 | *Quercus pseudococcifera* | Termini biblici delle querce non dimostrano la specie nordafricana tipificata | habitat e usi corretti |
| 2363 | *Polypogon monspeliensis* | Erbe bibliche genericamente intese, confronto floristico storico | testo/editoriali e PDF-note ripuliti |
| 1986 | *Plicosepalus acaciae* | Ipotesi roveto ardente basata su storia naturale, non diagnosi | scansione mirata |
| 1938 | *Juniperus phoenicea* | ʿarʿār e simili vocaboli non specificano la specie; delimitazione tassonomica storica | scansione mirata |
| 1922 | *Juniperus oxycedrus* | Ginepro pungente non identificato con certezza da Geremia | testo e sinonimi corretti |
| 1910 | *Juncus maritimus* | Termini acquatici biblici identificano habitat non specie | scansione mirata |
| 1906 | *Juncus effusus* | Termini palustri generici, nessuna diagnosi specie-specifica | scansione mirata |
| 1892 | *Hyoscyamus muticus* | Shikkeron è toponimo; accostamento etimologico al giusquiamo è congetturale | distribuzione/meta corretti |
| 1873 | *Hyoscyamus aureus* | Shikkeron è toponimo; Giuseppe Flavio extrabiblico | link e commenti editoriali corretti |
| 1738 | *Eragrostis cilianensis* | Vocaboli biblici di foraggio/erba non determinano la specie | ripetizione diagnostica e punteggiatura corrette |
| 1452 | *Crocus kotschyanus* | Cantico 6:4 è toponomastico; Cantico 4:14 menziona altra spezia | distribuzione/meta corretti |
| 1449 | *Crocus vitellinus* | Ipotesi poetica di Moffatt; nessuna specie nominata nel Cantico 6:4 | scansione mirata |

## Operazioni puntuali confermate (24/11)

- **#4799, #4752, #3817, #3937, #2363, #1922, #1873, #4664, #2508, #1892, #1452**: ritocchi editoriali/metadati, rimozione di istruzioni interne e distinzione delle identità botaniche dove necessaria; #4664 media `pdb_plate_media_id=4682` e ALT. Non estendere la dichiarazione di completezza ad altri record.
- **#2567 *Quercus lusitanica***: campi scientifici e biblici in italiano, nome attuale occidentale separato da concetti orientali storici.
- **#3988 *Urtica membranacea*, #3992 *Urtica dioica*, #3953 *Triticum aestivum***: metadati scientifici completati e normalizzati, testi editoriali ripuliti, `pdb_editorial_status=revisionata` e data 24/11/2026. **Fonti puntuali non equivalgono a collazione esaustiva**.
- **#3957 *Tulipa montana***: rimossa dal corpo una nota di revisione datata, sostituita da bibliografia naturale; metadati completati. Kew POWO accepted IPNI 543008-1, areale Iran/Turkmenistan. 
- **#1738 *Eragrostis cilianensis***: duplicazione nel paragrafo di diagnosi eliminata.
- **#3984 *Ulmus minor* subsp. *canescens***: autore Bartolucci & Galasso, URL POWO IPNI 60478977-2 confermato.
- **#3980 *Typha* L., #3970 *T. angustifolia*, #3966 *Tulipa* L.**: aggiornati author, accepted taxon, link Kew, morfologia, distribuzione, sinonimia e comparazione fonti, senza nuovi link biblici.
- **#5599 `pdb_medicine` — *Urtica dioica***: **BOZZA NON PUBBLICATA**, associata a pianta #3992; dopo confronto EMA/HMPC `Urticae herba` (EMA/HMPC/261302/2022, versione aggiornata 2025), `Urticae radix` (EMA/HMPC/322646/2023, 2025) e `Urticae folium` (monografia distinta), precisate indicazioni **tradizionali**, avvertenze e limiti dell'evidenza. **6 collegamenti `source_citations` #4280–4285** registrati. Non presentare come trattamento biblico provato. Pubblicazione e QA grafica/SEO ancora da eseguire.

## Regola di chiusura per evitare lavoro duplicato

1. **Preflight**: cercare in roadmap, nel registro, WordPress per ID, nome accettato e sinonimi. Non creare schede doppie.
2. **Controllo scientifico**: confrontare, **dove pertinenti e realmente consultate**, Moldenke, Duke, Zohary, Post, Tristram, Balfour, Dafni–Böck, Grilli Caiola/Guarrera/Travaglini e Kew POWO / floristiche regionali / letteratura attuale. Registrare *quale* passaggio/pagina sia stato verificato e quali siano le ipotesi controverse. Non dichiarare letture integrali se non compiute.
3. **Controllo WordPress**: ID, `publish` vs `draft`, contenuto/HTML, metadati italiani, collegamenti bibliografici e ai passi già esistenti, sinonimi, immagine in evidenza e ALT, SEO e assenza di note interne nel contenuto pubblico. Indicare chiaramente eventuali controlli NON compiuti (es. browser indipendente).
4. **Motivazione d'esito**: compilare `data | WP ID | taxon | stato | fonti/locator | motivazione dell'identificazione o della non-identificazione | correzioni | SEO/media | punti aperti`; solo quando tutte le dimensioni previste sono documentate marcare `QA_FONTI_COMPLETO`.
5. **Riapertura mirata**: revisione ripetuta solo su `modified_gmt` cambiato, nuova fonte, errore segnalato, nuova sinonimia, passo o bibliografia effettivamente mancanti. Le 31 segnalazioni automatiche non rappresentano di per sé 31 attività da ripetere.
6. **Separazione dei luoghi**: motivazioni scientifiche e bibliografia leggibili sul sito; dettagli su task, API, media transfer, screenshot, relazioni duplicate, WP ID, esiti dei controlli **solo nel repository**.

## Riscontri verificabili usati in questa sessione

- [Kew POWO — *Ulmus minor* subsp. *canescens*](https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:60478977-2).
- [Kew POWO — genere *Typha*](https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:30003823-2), [*Typha angustifolia*](https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:259280-2).
- [Kew POWO — genere *Tulipa*](https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:24874-1), [*T. montana*](https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:543008-1).
- [EMA — Urticae herba](https://www.ema.europa.eu/en/medicines/herbal/urticae-herba), [Urticae radix](https://www.ema.europa.eu/en/medicines/herbal/urticae-radix).
- Le percentuali di copertura sono **del database WordPress alla data del controllo**, non di tutte le 281 voci legacy (incluse 29 non botaniche).

**Nota metodologica:** nessun dato scientifico incerto è stato trasformato in fatto certo al solo scopo di chiudere una casella della roadmap.

## Continuazione QA — ATL-0035–0040 (24/11/2026)

- [Dossier di preflight e avanzamento](ATL-0035_0040_PREFLIGHT_QA_2026-11-24.md). #4940 *Atriplex halimus* pubblicata, immagine #4944 con ALT e identificazione controversa #508; controllo mirato completato. #4914 *Astragalus gummifer* e fonte #4893 rettificate per distinguere *A. tragacantha* L. occidentale; metadato operativo di Giobbe 30:4 #1601 ripulito.
- **ATL-0036 *Atriplex dimorphostegia***: **draft botanico WP #5627** (NON pubblicato), SEO compilato, fonti nuove #5628 Kew e #5629 WFO pubblicate, 5 source_citations #4286–4290. Senza immagine in evidenza; **non marcare QA_FONTI_COMPLETO né publish**. Se si riprende, usare #5627, non ricreare nuova voce.
- ATL-0035, ATL-0038, ATL-0039 e ATL-0040: preflight distinto nel dossier; nessuna scheda dedicata reperita, **nessuna chiusura o pubblicazione artificiale**.

## Aggiornamento post-pubblicazione ATL-0036 — 24/11/2026

- *Atriplex dimorphostegia* Kar. & Kir. **WP #5627 PUBBLICATA**, SEO audit `issues=[]`, immagine originale WebP **#5632** featured con ALT e SHA-256 verificato; Amaranthaceae #32. Fonti strutturate #4286–4292 (7), fonte Kew #5628 e WFO #5629; criterio di specie biblica di Giobbe 30:4 **non dimostrato**. [Scheda](https://piantedellabibbia.altervista.org/piante/atriplex-dimorphostegia-brattee-dimorfe-giobbe-30-4/) · [dossier ATL-0035–0040](ATL-0035_0040_PREFLIGHT_QA_2026-11-24.md).
- **Stato dopo aggiornamento:** WP 226 piante pubblicate / 226 con fonti, 32 segnalazioni identificazioni non specie-specifiche. Riaprire #5627 soltanto su nuova fonte, errore concreto o modifica; non duplicarla né aggiungere relazioni bibliche prive di prova. Browser responsive indipendente non certificato.

## Chiusura ATL-0038 — *Atriplex rosea* L., 24/11/2026

- WordPress **#5636 PUBBLICATA**, URL https://piantedellabibbia.altervista.org/piante/atriplex-rosea-atriplice-malluach-giobbe-30-4/ , Amaranthaceae #32, controllo HTML 10 H2/10 e 19 P/19; SEO `issues=[]` e metadata di citazione/bibliografia compilati.
- Fonti nuove #5633 (Kew POWO), #5634 (Al-Oudat–Qadir ICARDA, *Halophytic Flora of Syria* 2011, p58), #5635 (Flora of New Zealand); **otto** relazioni #4293–4300, incluse testimonianze comparate di Moldenke, UBS, Zohary, Tristram e Duke. Richiamato anche WFO per la morfologia.
- Immagine **#5637**: tavola storica Otto Wilhelm Thomé 1885 da Wikimedia Commons, pubblico dominio verificato, importata come JPEG con ALT e credito. Non è una nostra tavola originale; tentativi di generazione inadatti sono stati scartati e non pubblicati.
- **Motivazione del non collegamento di identificazione**: Giobbe 30:4 usa *mallûaḥ* (H4408), nome collettivo «erba salata», i Moldenke elencano più *Atriplex*; nulla nel testo identifica esclusivamente *A. rosea*. La relazione mancante è **motivata scientificamente**, non deve essere creata per azzerare il contatore.
- **Chiusura per perimetro**: verificati Kew, fonte regionale diretta ICARDA, flori moderne, stato WordPress, immagine e SEO; **non** dichiarare collaudata la resa pixel indipendente mobile/desktop. Il record non va ricreato o ripetuto senza cambiamenti effettivi.
- **Copertura post-pubblicazione** 227/227 botaniche con fonti, 33 segnalazioni relazionali (nuovi taxa senza identificazione certa inclusi).

## Chiusura ATL-0039 — *Atriplex tatarica* L., 24/11/2026

- **WordPress #5645 `publish`**, https://piantedellabibbia.altervista.org/piante/atriplex-tatarica-atriplice-giobbe-30-4/ . Taxon Kew IPNI164195-1, Amaranthaceae #32, bibliografia 8 relazioni #4301–4308 e quattro schede fonte nuove #5641–5644. Featured media **#5646**, foto botanica CC BY-SA 4.0 di Krzysztof Ziarnek (Kenraiz), attribuzione nella scheda media. SEO audit `issues=[]` e corpo controllato senza note operative.
- **Motivo dell'assenza di identificazione**: il lemma `mallûaḥ` di Giobbe 30:4 corrisponde a «erba salata», non alla diagnosi moderna di *A. tatarica*; Moldenke p53 nomina la specie come candidata fra quattro atriplici. Identificazione biblica specie-specifica **non dimostrata**: flag corretto, non errore da azzerare creando link.
- **Particolarità scientifica tracciata**: *Flora of Iraq* in Kew riporta brattee «8 × 7 cm» incongruenti; *Flora of North America* indica 4–8 × 3–7 **mm**, Florae.it ca. 5 × 6 mm. Non riprodurre «cm» in nuove schede. Pubblico conserva distinzione tra misura verificata e origine non accertata del refuso.
- Dopo la pubblicazione: **228 piante pubblicate / 228 con fonti**, 34 flag relazionali. Perimetro documentato nel [dossier ATL-0039](ATL-0039_ATRIPLEX_TATARICA_QA_2026-11-24.md); browser responsive indipendente e collazione integrale delle antiche fonti non certificati. **Non ripetere** controlli sui record #5645, #5636, #5627, #4940 senza nuovi errori/fonti/versioni.

## Chiusura ATL-0040 — *Avena sterilis* L. — 24/11/2026

- WP botanica **#5654 pubblicata**, https://piantedellabibbia.altervista.org/piante/avena-sterilis-avena-maggiore-erbe-bibbia/ . Identità Kew IPNI391787-1, due sottospecie, Poaceae #18, distinta da *Avena fatua* e *A. sativa*. Fonti WordPress #5650 Kew, #5651 GRIN, #5652 Oveisi e collaboratori 2024, #4480 Moldenke 1952 pp28–29, **quattro relazioni #4309–4312**. Immagine botanica #5656 (Colsu, Sicilia 2016, Wikimedia Commons CC BY-SA 4.0), credito/ALT. `pdb/seo-audit issues=[]`, HTML 10/10 H2 e 19/19 P, nessuna nota gestionale nel corpo.
- L'assenza di identificazione biblica è **scientificamente motivata**: i sei taxa dei Moldenke sono esempi di graminacee compatibili con vocaboli generici per erba/foraggio, non sei determinazioni di versetti. Nessun link di identificazione forzato. Non duplicare né rifare QA senza nuova evidenza. [Dossier](ATL-0040_AVENA_STERILIS_QA_2026-11-24.md).
- **Copertura**: **229** `pdb_plant` pubblicate, **229 con fonti**, 35 flag relazionali non necessariamente errati.
- **Raccordi successivi**: ATL-0042 *Balanites aegyptiacus* è già WP **#747 *Balanites aegyptiaca* (L.) Delile**, nomenclatura Kew accepted IPNI813589-1 e forma storica aegyptiacus in sinonimia, status `publish`; ATL-0043 *Boswellia carterii* corrisponde già a WP **#760 *Boswellia sacra* Flück.**, Kew accepted IPNI127065-1, *B. carteri* Birdw. in sinonimia, `carterii` grafia storica. Entrambe revisionate nei metadati il 24/11/2026 e già pubblicate, **nessuna duplicazione**; attenzione a distinguere da Boswellia papyrifera e B. serrata. Cercare nuove omissioni specifiche, non rifare il lavoro invariato.

## Chiusura ATL-0044 — Boswellia papyrifera (Caill.) Hochst., 24/11/2026

- **WordPress pianta #5662 `publish`**, [scheda](https://piantedellabibbia.altervista.org/piante/boswellia-papyrifera-incenso-africano-bibbia/); nome corretto Kew IPNI127060-1, non abbreviare l'autore senza motivo, Burseraceae #55. Distinta dalla *B. sacra* #760 e da *B. serrata*; l'albero è nativo dell'Africa tropicale, non della Palestina biblica.
- **9 relazioni fonti #4313–4321**: catalogate Kew/Gillett #5658, FAO Gebrehiwot et al. #5659, Bongers et al. *Nature Sustainability* (2019) #5660, DeCarlo et al. chimica resina 2022 #5661; riusate Moldenke 1952 pp56–59 #4962, Zohary #4964, Tristram #4965, BDB H3828 #763, NCCIH #764. Nessuna fonte primaria dichiarata letta integralmente se non documentato.
- **Featured WebP #5663** 1024×1536, 283456 byte, SHA-256 `0bdccd0178c3380d86d84b9ff6e47bbba8417c78a06285743523e5a7f5650602` verificato server, ALT e metadati didascalia naturali; archivio privato WebP conservato, file temporanei dei sette blocchi eliminati. Tavola illustrativa, non campione erbariale.
- QA WordPress: 13 H2/13 chiusure, 26 P/26 chiusure; bibliografia in testo, riferimento biblico in metadati, status `revisionata`, SEO `issues=[]`, nessuna nota tecnica rilevata nel contenuto. Browser esterno ha restituito errore: **non certificato test frontend grafico indipendente**.
- **Motivo dell'assenza di link identificazione**: Es 30:34 e altri versetti nominano la resina ləḇônāh / líbanos, **non la precisa specie**. Moldenke elenca tre Boswellia e non fornisce una prova specie-specifica per il singolo passo; nessuna relazione di identificazione fittizia. **Copertura 230 botaniche / 230 con fonti, 36 flag**. [Dossier QA ATL-0044](ATL-0044_BOSWELLIA_PAPYRIFERA_QA_2026-11-24.md). Riaprire solo con nuova evidenza/modifica, non duplicare.

## Preflight ATL-0046 — Boswellia serrata Roxb., 24/11/2026

- Roadmap storica: `ATL-0046 Boswellia thurifera` Roxb.; **Kew [IPNI127069-1](https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:127069-1)** la tratta come sinonimo di **`Boswellia serrata` Roxb.**, nome accettato [IPNI127067-1](https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:127067-1), nativo del **subcontinente indiano** e distinto da `B. sacra` WP #760 e `B. papyrifera` WP #5662.
- Anti-duplicati WordPress per `Boswellia serrata`, `B. thurifera`, `B. glabra`, `Indian frankincense`: nessuna scheda botanica dedicata emersa; menzioni in #760/#5662. Fonte Kew WP **#762** già presente. **Non creare copie dei taxa esistenti**, ma la nuova specie indiana può richiedere record distinto dopo collazione scientifica.
- Stato **PREFLIGHT DOCUMENTATO / DA REALIZZARE**, non pubblicata e non spuntata. Il mero nome storico Moldenke non dimostra identificazione in un versetto biblico, anche se la resina di `B. serrata` è oggi merce/ingrediente farmacognostico. Riaprire per fonti, controllo sinonimi e QA immagine/SEO; non ripetere ATL-0044.

## Chiusura ATL-0046 — *Boswellia thurifera* = *Boswellia serrata* Roxb., 24/11/2026

- Botanica canonica WordPress **#5669 PUBBLICATA**: https://piantedellabibbia.altervista.org/piante/boswellia-serrata-incenso-indiano-bibbia/ . *B. thurifera* Roxb. è nome **omotipico e superfluo illegittimo** del taxon accettato da Kew *B. serrata* Roxb. (IPNI127067-1). *B. glabra* è in sinonimia eterotipica. Distinta da WP #760 *B. sacra* e WP #5662 *B. papyrifera*: non crearne duplicati.
- Nuove fonti #5666 Kew, #5667 World Agroforestry, #5668 MedlinePlus; fonte già presente Moldenke 1952 p56–59 #4962, Kew sinonimo #762, NCCIH #764, BDB H3828 #763, Zohary #4964, Tristram #4965. **9 relazioni bibliografiche #4322–4330** con perimetro e claim distinti. Nessuna `identifications` inserita: il lessico biblico *ləḇônāh* e *líbanos* designa il prodotto, non la specie botanica indiana.
- Immagine in evidenza **#5670**: fioritura documentata da Dinesh Valke (Thane, 2010), Wikimedia Commons [originale](https://commons.wikimedia.org/wiki/File:Boswellia_serrata_(4399783209).jpg), licenza CC BY-SA 2.0; titolo, ALT, credito e licenza nei metadati. JPEG da foto autentica, non tavola originale del progetto.
- QA HTML **13 H2/13 chiusure; 24 P/24 chiusure**, Burseraceae #55, SEO `issues=[]`, nessuna nota di workflow nel corpo; `pdb_sources` ripulito da ID tecnici e `pdb_duke_pages` vuoto (nessuna citazione specie-specifica verificata). Browser grafico indipendente NON verificato per errore di accesso web.
- Copertura dopo pubblicazione: **231 botaniche pubblicate / 231 con fonti**, nessuna senza; **37 flag** relativi ad assenze di identificazioni specie-specifiche. **Non** interpretare il flag come errore automatico. Riaprire soltanto con nuova prova, errore concreto o modifica materiale; [dossier ATL-0046](ATL-0046_BOSWELLIA_SERRATA_QA_2026-11-24.md).

## Preflight successivo — ATL-0123 *Juniperus phoenicia* (24/11/2026)

- La roadmap usa `Juniperus phoenicia`, mentre la specie Kew accettata è ***Juniperus phoenicea* L.**, già **WordPress #1938 PUBBLICATA**, aggiornata il 24/11 con data editoriale `revisionata`, nome e sinonimi botanici. Il testo riconosce come distinta ***J. turbinata* Guss.**, che Kew considera nativa anche del Levante ([taxon 262382-1](https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:262382-1)). *J. phoenicea* in senso stretto ha areale soprattutto sud-est Francia, Spagna: non spostare al Levante la distribuzione di *J. turbinata* per analogia.
- **Da verificare prima di spuntare il progressivo ATL-0123:** corrispondenza precisa della grafia della voce Moldenke 186 p.209 e di Duke p.228 con la specie corrente, e bibliografia pubblica di #1938. Non creare una seconda scheda di *J. phoenicea* e non aggiungere un riferimento biblico certo a *ʿarʿār* senza prova.

## Chiusura verificata ATL-0123 — *Juniperus phoenicia* → *J. phoenicea* L. (#1938), 24/11/2026

- Stato: **RICONCILIATA/QA SCIENTIFICO MIRATO COMPLETATO**, **NON** nuova specie. *Sabina phoenicea* (L.) Antoine usato da Moldenke (1952), voce 186 pp209–210, è sinonimo omotipico del nome accettato Kew *Juniperus phoenicea* L. (IPNI262307-1); grafia *J. phoenicia* in Duke (2008), «Phoenician Juniper» pp228–229. Kew (IPNI262382-1) separa *J. turbinata* Guss., autoctona del Levante, dalla specie occidentale *J. phoenicea* s.str.
- WordPress pianta **#1938 `publish`**, URL https://piantedellabibbia.altervista.org/piante/ginepro-fenicio-juniperus-phoenicea-arar-geremia-bibbia/ . Featured WebP **#1939**, Cupressaceae #65, struttura HTML 11 H2/11 chiusure, 17 P/17, 2 tabelle/2, bibliografia 11 voci/11; SEO audit `issues=[]`. Last modified **2026-11-24 22:20:08**. Nessuna nota gestionale nel corpo, nessuna identificazione biblica arbitraria creata.
- **Correzioni vere**: in corpo titolo bibliografico «Bible Plants» sostituito con ***Plants of the Bible***; `pdb_scientific_synonyms` distingue *J. tetragona* e *J. terminalis* omotipici illegittimi da *J. turbinata* (taxon accettato distinto); `pdb_history`, `pdb_sources`, `pdb_moldenke_pages`, `pdb_duke_pages` documentano differenze storiche e limiti clinici. Metadati corretti sulle fonti **#5183** Kew, **#5184** Moldenke, **#5185** Lamonaca 2024 DOI 10.31743/vv.16842, **#5186** Zohary 1982.
- Due nuove fonti senza duplicazioni: **#5674 Duke (2008), pp228–229**, relazione di citazione **#4331**; **#5680 UBS, Phoenician Juniper §1.11.2**, relazione **#4332**. UBS distingue quattro letture di Geremia48:6 (toponimo Aroer, asino selvatico con emendazione, arbusto/ginepro, indigenza), cita anche l'ipotesi *Calotropis procera* per Geremia17:6 e usa un concetto storico ampio di *J. phoenicea*; aggiunti un paragrafo di confronto e una voce bibliografica al pubblico, senza perdere prudenza.
- **Biblico: `ʿarʿār` Geremia17:6 e `ʿaroʿer` Geremia48:6 NON determinano unicamente una specie. Aroer di Deuteronomio2:36 è un toponimo.** Per riti con legno *ʾerez* nessuna identificazione di *J. phoenicea* certa. Non ricreare scheda, né link di identificazione forzati.
- Copertura WordPress **231 piante pubblicate/231 con fonti**; **1394 fonti bibliografiche con relazione su 1394**; **37 segnalazioni relazionali** senza attribuzione specie-specifica. [Dossier scientifico dettagliato](ATL-0123_JUNIPERUS_PHOENICEA_QA_2026-11-24.md). Browser esterno pixel mobile/desktop non certificato.
- **Nuovo punto**: ATL-0128–0130 licheni *Lecanora* (taxa fungini), preflight tassonomico e vincoli del CPT botanico. Riaprire ATL-0123 soltanto per nuove evidenze, modifiche reali o errori riscontrati.

## Preflight sistematico ATL-0128–0130: tre licheni *Lecanora* storici — 24/11/2026

- **ATL-0128** *Lecanora affinis* Eversm. → **`Circinaria affinis` (Eversm.) Sohrabi**, Species Fungorum ID **563034**; **ATL-0129** *L. esculenta* (Pall.) Eversm. → **`Circinaria esculenta` (Pall.) Sohrabi**, ID **563027**; **ATL-0130** *L. fruticulosa* Eversm. → **`Circinaria fruticulosa` (Eversm.) Sohrabi**, ID **563028**. Taxa **diversi**, appartengono a **Fungi/Ascomycota, Megasporaceae**, non al regno Plantae né a una famiglia delle piante vascolari.
- **WP preflight** ricerca per 7 nomi storici e moderni e «lichene»: zero schede dedicate. Esistono pagine sulla manna con ipotesi botanico-storiche di altre fonti: NON sono duplicati di questi licheni. Fonti già catalogate WP **#3825** (Moldenke pp121–123, panorama generico della manna), **#3829** (Nature 1929), **#3827** (Duke 2008 p194); **non ricreare fonti identiche**. Il master indica **Moldenke p125, voci 123–125** per i tre licheni: originale ancora da collazionare puntualmente, e la fonte generica pp121–123 **non equivale** alla verifica di p125.
- Esodo16 descrive la manna come alimento/prodigio biblico ma non fornisce identificazioni botaniche specie-specifiche; non convertire una vecchia ipotesi «manna da lichene vagante» in un'identificazione certa. Anche la presenza in specie di licheni deserticoli non prova la crescita nel Sinai in epoca biblica.
- **Stato registrato:** 3 voci in **PREFLIGHT / DA VERIFICARE**, **0 schede create, 0 pubblicate, nessuna marcata [x]**. Prima della scheda futura, decidere modello tassonomico del sito per funghi lichenizzati e controllare voce Moldenke, distribuzione, morfologia, immagine autentica/diritti e fonte bibliografica. [Dossier scientifico](ATL-0128_0130_LICHENI_PREFLIGHT_2026-11-24.md). Non ripetere anti-duplicati già svolto salvo nuovo contenuto WP o tassonomia cambiata.
