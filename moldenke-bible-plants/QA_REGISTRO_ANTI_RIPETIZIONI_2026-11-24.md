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
