# Progressi Sicomoro — ATL-0106 — 17 novembre 2026

## Conferma plugin, tavola e SEO (ultima verifica MCP, 17 novembre 2026)

- [x] Plugin **pdb-atlante 0.2.3** attivo.
- [x] `pdb/atlas-media-import-bundled`: **imported=1, already_present=6, errors=[]**.
- [x] Media #426 `image/webp` in WordPress: `tavola-botanica_ficus-sycomorus.webp`, ALT "Tavola botanica digitale originale del sicomoro, con foglie ovate, chioma espansa e grappoli di siconi cauliflori sul tronco e sui rami".
- [x] Pianta WP #367: `featured_media=426` e `pdb_plate_media_id=426`; `pdb_image_provenance` aggiornato a importazione effettiva.
- [x] SEO audit **0 rilievi su tutte le 7 piante**.
- [x] Verifica visiva del file WebP originale: siconi e albero rappresentati in modo plausibile; la vignetta floreale isolata è **artistica e non anatomia esatta** perché i fiori di Ficus sono minuscoli e interni ai siconi. Non presentarla come diagramma diagnostico.
- [ ] QA reale desktop e smartphone del template: non eseguita dalla sola verifica MCP.
- [ ] Possibile variante futura della tavola con vignetta floreale rigorosa, per qualità botanica massima; non blocca la presenza dell'immagine e l'audit SEO.
- [ ] Recupero facsimile originale Moldenke pp.106–107 (trascrizione esterna già letta).
**Stato attuale:** PUBBLICATA / SEO_OK / MEDIA_OK / QA_GRAFICA_APERTA.

## Stato finale verificato in MCP — 17 novembre 2026

**PREVALE SULLA CRONOLOGIA SOTTOSTANTE:** il Sicomoro **WP #367 è PUBBLICATO** all'URL https://piantedellabibbia.altervista.org/piante/sicomoro-ficus-sycomorus/. Anche **tutte le 17 pagine collegate #368–384 risultano PUBBLICATE**. Conteggi pubblici ricontrollati usando `pdb/atlas-list`: **7 piante, 52 passi biblici, 12 nomi antichi, 7 medicinali, 24 fonti**. La fonte primaria Duke pp191–194 è stata controllata sul PDF dell'utente e la voce Moldenke p108 e nota p282 sull'originale; pp106–107 disponibili in **trascrizione digitale esterna Scribd** ma facsimile originale non presente nella Libreria.

### Perfezionamenti redazionali eseguiti
- [x] Scheda centrale #367 approfondita su Moldenke voce 105 pp.106–108, fig.62 e note supplementari p.282; trascrizione esterna dichiarata, nessuna finzione di aver letto il facsimile mancante.
- [x] Nomi antichi **#374, #375, #376** ampliati con spiegazioni autonome di circa **200–255 parole ciascuna**: ebraico *šiqmāh* vs «fichi» della Diodati in 1 Cr 27:28, greco *sykomoréa* vs *sykáminos*, e *bōlēs* / interpretazione del lavoro di Amos.
- [x] Otto passi **#377–384** arricchiti con commenti di circa 150–190 parole ciascuno, senza duplicazione e con distinzioni fra paralleli, specie differenti e interpretazioni letterarie.
- [x] Medicina #368 ampliata con circa **580 parole** su repertorio storico Duke, tipo di preparazione, livelli di prova, rischi del lattice e studio **PMID 8170162**: il potato-disc bioassay e l'attività antibatterica in vitro non giustificano cure mediche.
- [x] Nove citazioni fonti aggiuntive **relazioni #175–183** per Moldenke pp.106–107 (*OCR esterno*), p108, appendice p282 e Duke p191–194 collegate a pianta, Amos, Zaccheo, Salmo 78, termine *šiqmāh* e *sykomoréa*.
- [x] Riutilizzati i legami già esistenti con Cedro #266, Olivo #129, Vite #143; Fico comune #152 tenuto taxonomicamente distinto.
- [x] Pianta principale SEO Studio Manager e Yoast configurato, famiglia Moraceae #7 assegnata. **Audit sito 17/11:** #367 `publish`, `featured_media=0`, unico avviso **«Immagine in evidenza assente»**; le sei piante precedenti 0 avvisi.

### Stato tecnico ancora aperto
- [ ] Plugin WordPress **0.2.2 attivo**, ZIP di aggiornamento **pdb-atlante-0.2.3.zip** pronto ma NON ancora confermato installato. Installare il pacchetto tramite Plugin → Carica plugin → Sostituisci, senza disinstallare la versione esistente. Contiene tavola originale `tavola-botanica_ficus-sycomorus.webp`, 1086×1448.
- [ ] Poi chiamare `pdb/atlas-health`, `pdb/atlas-media-import-bundled` (idempotente), verificare media, ALT, `pdb_plate_media_id`, featured image e `pdb/seo-audit` (obiettivo 0 avvisi).
- [ ] QA visiva desktop e smartphone: ingombri, hero, tavola botanica, scritture greca/ebraica, mobile typography e collegamenti; il controllo amministrativo MCP NON è QA visuale.
- [ ] Facsimile originale Moldenke pp106–107 da recuperare quando disponibile, mantenendo nel testo la provenienza OCR delle note verificate.

## Stato effettivo verificato tramite MCP

**STATO STORICO SUPERATO — 18 bozze allora create; nello stato finale tutte e 18 sono PUBBLICATE.** Plugin **pdb-atlante 0.2.2** ancora attivo alla verifica finale. **Versione 0.2.3 pronta** in ZIP, costruita dalla 0.2.2, ma **non installata**. La tavola botanica WebP originale del Sicomoro **non è ancora caricata** in WordPress; la creazione del collegamento di upload e il tentativo di invio da container sono falliti per DNS del sandbox, senza creare Media ID.

- **Contatori pubblici INVARIATI:** 6 piante, 44 passi, 9 nomi, 6 medicina, 19 fonti, già confermati al termine della Palma.
- **Pianta canonica #367**: Ficus sycomorus L. / Moraceae (termine tassonomico #7). Titolo SEO, meta, focus keyword Studio Manager corretti. **Audit SEO: solo immagine in evidenza assente**.
- **Scheda medicina #368**, con `pdb_plant_id=367`, testo critico Duke pp.193–194, tradizioni distinte da studi preclinici e sicurezza del lattice.
- **Fonti #369–373:** Kew POWO, BDB H8256, greco G4809/G4807, Galil 1968, PubMed PMID 8170162.
- **Lessico #374–376:** šiqmāh (sicomoro), sykomoréa (Luca 19:4), bōlēs (Amos 7:14).
- **Passi #377–384:** 1 Re 10:27; 1 Cr 27:28; 2 Cr 1:15; 2 Cr 9:27; Sal 78:47; Is 9:10; Am 7:14; Lc 19:4. Testo storico Diodati 1649 verificato per estratti.
- **SEO Yoast** salvato sui 18 nuovi elementi e slug descrittivi assegnati; nessuna delle pagine nuove è stata pubblicata.

## Matrice Moldenke–Duke

| Autore | Pagine | Stato | Note |
|---|---|---|---|
| Moldenke & Moldenke, voce **105**, Ficus sycomorus | **106–107** | **MANCANTI nella copia PDF** | La roadmap precedentemente indicava “M —”: errato. Testo non inventato e recupero delle scansioni indicato come debito. |
| Moldenke & Moldenke, voce 105 | **108** | **VERIFICATA** | Incisione dei frutti, interpretazione del lavoro di Amos, 1 Cr 27:28, Sal 78:47; distinzione da acero inglese e gelso. |
| Moldenke, voce *Morus nigra* | **140** | **VERIFICATA** | Distingue il sicomino di Luca 17:6 dal sicomoro di Luca 19:4. |
| Duke, «Sycamore Fig» | **191–194** | **VERIFICATA INTEGRALE** | Nomi e sinonimi, Zaccheo, legno e storia, attività e indicazioni, dosi folkloriche, vespe/partenocarpia, estratti PMID 8170162. |
| Kew | Ficus sycomorus L., https://powo.science.kew.org/taxon/853797-1 | **VERIFICATA** | Nome accettato, Moraceae, areale Africa–Arabia. |
| Galil 1968 | Studio su fruttificazione in Israele | **VERIFICATA** | Parthenocarpia nella coltura; non estendere indiscriminatamente alle popolazioni native. |

**Correzione filologica decisiva:** in **1 Cronache 27:28** la Diodati 1649 dice **«fichi»**, ma l'ebraico ha <em>šiqmîm</em>, sicomori. Non attribuire quel passo automaticamente al fico comune. In **Luca 17:6**, <em>sykáminos</em> G4807 è distinto da <em>sykomoréa</em> G4809 di Luca 19:4. **Amos 7:14:** «cogliendo» Diodati vs «incidendo/lavorando» in letture storico-lessicali.

## Collegamenti MCP già creati

- **14 identificazioni** per gli 8 nuovi passi: Sicomoro #367 in tutti; Cedro del Libano #266 in 1 Re, 2 Cr e Isaia; Olivo #129 in 1 Cr 27:28; Vite #143 nel Salmo 78:47. **Non** creare schede duplicate delle specie esistenti.
- **9 relazioni passo–lemma**: šiqmāh #374 nei 7 passi AT, sykomoréa #375 in Luca 19:4, bōlēs #376 in Amos 7:14.
- **28 relazioni fonte–contenuto**: Moldenke p.108 (#135), Duke pp.191–194 (#136), Diodati (#217), Kew (#369), BDB (#370), greco (#371), Galil (#372), studi bioattivi (#373). Il legame a Moldenke indica SOLO il materiale consultato, mai pp.106–107 come lette.

## Tavola botanica e plugin 0.2.3

- [x] Tavola digitale originale generata **1086 × 1448 px**, convertita a WebP, **390.592 byte**, SHA-256 `c2aab460eb7d4d2edc8025413dc0f8cc2c98eddc02478b5ed23f0e56fcc0d250`. Soggetto: ampia chioma, foglie ovate, siconi cauliflori sul tronco e rami, sezioni botaniche: controllare le interpretazioni grafiche al momento dell'import.
- [x] Plugin `pdb-atlante-0.2.3.zip` ricostruito dalla 0.2.2, **2.952.625 byte**, SHA-256 `9e1f04c9896584c7fef83db38ca7f399114a857f4b9a9ce3a4f66cc6a46d449f`; PHP lint **11 file OK**, integrità ZIP OK.
- [x] Aggiunto `367 => tavola-botanica_ficus-sycomorus.webp` ai bundle, hook importazione **idempotente** su WP Admin, `pdb/atlas-health` mostra nuova disponibilità dopo installazione. Non sostituisce le immagini esistenti e non modifica stato delle bozze.
- [ ] **Installare manualmente plugin 0.2.3** in WordPress da ZIP, scegliendo Sostituisci. NON disinstallare la 0.2.2.
- [ ] Verificare live versione 0.2.3, import di **1 nuova tavola**, Media ID reale in WP #367, `pdb_plate_media_id`, immagine in evidenza e ALT. Verificare `pdb/seo-audit`: **0 avvisi** per #367 senza regressioni sulle altre sei piante.

## QA prima di promuovere a pubblicato

- [x] Corpo principale originale ~2.555 parole, medicina ~912, testi biblici ~254–301 parole ciascuno; l'approfondimento testuale può ancora essere migliorato.
- [x] Taxon Moraceae, lessici e differenze Ficus carica/Morus nigra, bioattività senza indicazioni cliniche.
- [x] Strutture WP, collegamenti biblici e source citations creati in bozza.
- [ ] Integrare gli **otto passi verso obiettivo qualitativo 500–1.000+ parole**, quando i materiali lo sostengono, evitando ripetizioni.
- [ ] Recupero pagine Moldenke **106–107** da un'altra copia leggibile; in assenza, mantenere esplicita la lacuna anche dopo eventuale pubblicazione.
- [ ] Controllo visivo desktop/smartphone, specialmente titolo pagina, tavola, siconi, ebraico RTL, greco, link condivisi.
- [ ] Solo dopo media e QA finale, pubblicazione controllata di 18 schede (non automatica); aggiornare la roadmap e i contatori in base alla risposta reale MCP.

**Dossier completo:** [ATL-0106_SICOMORO_DOSSIER_2026-11-17.md](ATL-0106_SICOMORO_DOSSIER_2026-11-17.md).

## Pubblicazione e audit conclusivo — 17 novembre 2026 (stato prevalente)

- [x] **18 nuove pagine WordPress pubblicate e verificate**: pianta #367, medicina #368, 5 fonti #369–373, 3 nomi #374–376, 8 passi #377–384. [Sicomoro pubblico](https://piantedellabibbia.altervista.org/piante/sicomoro-ficus-sycomorus/).
- [x] **Moldenke voce 105**: trovata trascrizione esterna delle pp.106–107 assenti nella nostra scansione; recuperati morfologia, dimensioni storiche, frutti cauliflori, legname e tradizioni. **Pagina 108 e supplementi p.282** letti direttamente sul PDF originale; figura 62 tracciata. Testo botanico ora oltre **3.200 parole**.
- [x] **Duke pp.191–194**: collazione integrale della voce «Sycamore Fig», con attività/indicazioni tradizionali, preparazioni e ricerca preclinica non confusa con efficacia nell'uomo.
- [x] **OTTO passi** integrati editorialmente oltre la prima bozza, citazioni Diodati 1649 confrontate; 1 Cronache 27:28 «fichi» vs ebraico sicomori spiegato; Luca 17:6 non conteggiato per *Ficus sycomorus*.
- [x] Relazioni documentate con Cedro #266, Olivo #129, Vite #143; nessuna duplicazione con Fico #152. Famiglia Moraceae #7.
- [x] **Yoast SEO** titolo e descrizione salvati sui 18 contenuti; slug e focus keyword definiti. Audit `pdb/seo-audit`: **1 solo avviso su #367** — mancanza dell'immagine in evidenza.
- [x] Pacchetto **pdb-atlante-0.2.3.zip** con WebP originale Sicomoro preparato e verificato (ZIP OK, lint PHP su 11 file). Import automatico non distruttivo previsto al primo accesso admin; immagine non ancora online.
- [ ] **INSTALLAZIONE 0.2.3** sul sito, che alla verifica MCP esegue **0.2.2**; quindi controllo Media ID, `pdb_plate_media_id`, ALT, featured image e `pdb/seo-audit` a zero avvisi.
- [ ] QA visivo della pagina Sicomoro desktop/mobile, in particolare hero, immagine, titoli, ebraico/greco, link e contrasto.
- [ ] Se ottenibili, confrontare i facsimili originali di Moldenke pp.106–107 con la trascrizione esterna utilizzata (la lacuna della copia rimane).

**Contatori MCP verificati dopo la pubblicazione:** **7 piante, 52 passi, 12 nomi, 7 schede medicina, 24 fonti** (102 documenti), rispetto a 6/44/9/6/19 prima del Sicomoro. Le sezioni sopra documentano lo stato precedente delle bozze, da non confondere con quello finale.

[Audit fonte e sito completo](ATL-0106_SICOMORO_AUDIT_MOLDENKE_DUKE_2026-11-17.md) · [Master](PIANTE_DELLA_BIBBIA_MASTER_SPECIFICHE_E_ROADMAP.md).
