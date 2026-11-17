# Progressi Sicomoro — ATL-0106 — 17 novembre 2026

## Stato effettivo verificato tramite MCP

**18 nuove bozze WordPress create, 0 pubblicate.** Plugin **pdb-atlante 0.2.2** ancora attivo alla verifica finale. **Versione 0.2.3 pronta** in ZIP, costruita dalla 0.2.2, ma **non installata**. La tavola botanica WebP originale del Sicomoro **non è ancora caricata** in WordPress; la creazione del collegamento di upload e il tentativo di invio da container sono falliti per DNS del sandbox, senza creare Media ID.

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
