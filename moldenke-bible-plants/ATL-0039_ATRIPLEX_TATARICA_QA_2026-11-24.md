# ATL-0039 — *Atriplex tatarica* L. — revisione scientifica e QA, 24 novembre 2026

**Esito:** scheda botanica WordPress **#5645 PUBBLICATA**, 8 relazioni bibliografiche, featured #5646, Amaranthaceae, SEO audit **issues=[]**. **Identificazione biblica non dimostrata.** Dossier di lavoro privato: le note operative **non devono essere inserite nel sito pubblico**.

## Collegamenti WordPress confermati

- [*Atriplex tatarica* L. — scheda botanica #5645](https://piantedellabibbia.altervista.org/piante/atriplex-tatarica-atriplice-giobbe-30-4/), `pdb_plant`, `publish`; `modified_gmt=2026-11-24 21:34:08` rilevato dopo la pubblicazione.
- Nome scientifico accettato **Kew POWO IPNI 164195-1**, pubblicazione Linneo *Species Plantarum* p. 1053 (1753), famiglia **Amaranthaceae** (termine WordPress #32); `Chenopodium tataricum`, `Obione tatarica`, `Schizotheca tatarica`, `Teutliopsis tatarica` quattro sinonimi omotipici Kew.
- Tre varietà di Kew: *constantinopolitana*, *pseudoornata*, *tatarica*. Areale nativo comprendente **Palestina, Sinai, Libano-Siria, Egitto e Iraq**; la presenza floristica moderna non prova la determinazione della parola biblica.
- Otto relazioni `source_citations` **#4301–4308** per la scheda botanica #5645:
  - **#4301** → fonte Kew POWO/Flora of Iraq **#5641**, taxon e areale, unità incongruenti;
  - **#4302** → *Flora of North America*, vol. 4 (2003) **#5642**, brattee fruttifere **4–8 × 3–7 mm**;
  - **#4303** → Mandák, Bímová e Plačková (2006), *American Journal of Botany* 93(11):1640–1649, DOI 10.3732/ajb.93.11.1640, fonte **#5643**, eterocarpia e dormienza differenziale;
  - **#4304** → Florae.it, specie *A. tatarica*, fonte **#5644**, nome italiano e bratteole **~5 × 6 mm**;
  - **#4305** → Moldenke & Moldenke (1952), p. 53, voce **46**, fonte esistente **#4922**: confronto *mallûaḥ*, non identificazione provata;
  - **#4306** → UBS, *Orache (saltwort)*, fonte esistente **#4925**, incertezza di *mallûaḥ* H4408;
  - **#4307–4308** → Zohary (1982, pp. 144–145) **#4921** e Tristram (1867, p. 466) **#4924**, entrambi confronti riguardanti soprattutto *A. halimus*.
- **NON** aggiunta alcuna identificazione per Giobbe30:4: `mallûaḥ` indica erbe salate/atriplici senza caratteri che individuino la specie moderna. Distinguere *rōṯem* del secondo emistichio e *ḥallāmût* di Giobbe6:6; nessun duplicato del passo #1601.

## Anomalia di unità corretta scientificamente

- [Kew POWO, descrizione derivata da Flora of Iraq 2016](https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:164195-1/general-information): riportato **«Bracteoles to 8 × 7 cm»**.
- [Flora of North America](https://www.efloras.org/florataxon.aspx?flora_id=1&taxon_id=200006784): **4–8 × 3–7 mm**; [Florae.it](https://www.florae.it/?id=6918): circa **5 × 6 mm**.
- La misura in centimetri è **incongruente** rispetto a due floristiche indipendenti. La scheda pubblica privilegia il dato in mm e spiega la discrepanza in modo scientifico; non afferma di aver letto l'originale a stampa di *Flora of Iraq*. Non usare 8 × 7 cm negli altri metadati, nelle tavole o in altre schede.

## Immagine e provenienza

- Featured image **WordPress #5646**, fotografia di **Krzysztof Ziarnek (Kenraiz)**, luglio 2022, *Atriplex tatarica* nel Botanischer Garten Halle, Germania. [Pagina originale Wikimedia Commons](https://commons.wikimedia.org/wiki/File:Atriplex_tatarica_kz01.jpg). Licenza **CC BY-SA 4.0**; autore, licenza e fonte registrati nei campi ALT/didascalia/descrizione media.
- JPEG importato dalla fonte esterna, WordPress lo ha ridimensionato sul server. **Non** presentarlo come illustrazione originale del progetto o prova dell'identità dell'atriplice nel passo biblico. Niente nuovi disegni, nessun upload Base64 necessario in questo caso.

## QA post-pubblicazione

- `ewpa/get-cpt-item` e `pdb/atlas-get`: scheda #5645 **publish**, URL valido e featured presente.
- HTML **11 H2 aperti / 11 chiusi**, **19 P aperti / 19 chiusi**, 8 voci bibliografiche e 10 link nel corpo. Nessun pattern di istruzioni interne nel contenuto controllato.
- Metadati WordPress: nome, autore, taxon Kew, morfologia, distribuzione, usi non medici, confronto biblico, parti, `pdb_bible_references`, `pdb_bible_passages`, `pdb_sources`, `pdb_moldenke_pages`, `pdb_duke_pages` (solo confronto esplicitamente indicato), stato `revisionata`, data 24/11/2026; SEO titolo, descrizione e focus `Atriplex tatarica`.
- Famiglia assegnata: `pdb_family` Amaranthaceae #32.
- Audit interno `pdb/seo-audit`: **issues=[]** sulla nuova #5645. **Non dichiarata una verifica grafica pixel mobile/desktop indipendente né una collazione integrale di tutte le opere del XIX–XX secolo**.

## Copertura dopo QA

Al momento del controllo WordPress `pdb/atlas-coverage`: **228** piante `pdb_plant` pubblicate, **228 con fonti associate**, **zero senza**, e **34** segnalazioni di relazioni senza identificazione specifica. Il nuovo flag si spiega perché si rifiuta correttamente di creare una identificazione del testo biblico non provata. Non equiparare 34 flag a 34 specie mancanti.

## Stato e prossima attività

**ATL-0039: PUBBLICATA / QA DOCUMENTATO, chiusa per il perimetro effettivamente controllato**. Riaprire soltanto su nuova evidenza, errore, mutamento significativo o se si acquisisce l'originale cartaceo di *Flora of Iraq* da collazionare. **Prossima ATL-0040 — *Avena sterilis* L.**, confrontare Kew e sinonimi, il ruolo dell'avena nelle descrizioni di erbe bibliche e i duplicati possibili; non creare relazioni bibliche certe prive di prova e non ripetere ATL-0036/37/38/39 senza ragione.
