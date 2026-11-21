# ATL-0164 — *Populus euphratica* Olivier — CHIUSA / PUBLISHED 21 novembre 2026

**Operativo ATL-0164 / legacy ATL-0182**. Manuale richiesto dopo **SOSPENSIONE** dell'unica automazione oraria. WordPress **pdb_plant #2402** status **publish**, verificato live:
https://piantedellabibbia.altervista.org/piante/pioppo-delleufrate-populus-euphratica-olivier-i-salici-di-babilonia-e-le-identificazioni-bibliche/

## Automazione
- Automazione **6b00cb7b5a988191877878d9f84bebad**: **is_enabled=false**, sospesa esplicitamente su richiesta utente (tool Automations update confermato, success=true). **Frequenza originaria invariata** `DTSTART:20261121T090100; RRULE:FREQ=HOURLY`; non creare task aggiuntivi, **NON RIATTIVARE** fino a nuova richiesta. Tutte le vecchie note «attiva» nel master/workflow sono STORICHE.
- Una sola specie lavorata in questa corsa. Nessun plugin/tema modificato.

## Anti duplicati, scienza, fonti
- Ricerca WordPress live `Populus euphratica`, pioppo dell'Eufrate, Euphrates poplar e sinonimi `Turanga euphratica`, `Balsamiflua euphratica`: non esisteva post autonomo prima di #2402. *Populus alba* #2391 rimane separata, non duplicare.
- Kew POWO: **accepted** *Populus euphratica* **Olivier**, prima pubblicazione 1807; sinonimi omotipici *Turanga euphratica* e *Balsamiflua euphratica*, 30 sinonimi in tutto; native includono Palestine, Lebanon-Syria, Iraq e Iran; Egypt e Spain introdotte nel database. Codifica moderna non prova un periodo biblico preciso.
- Morfologia: radici/ripollonamento, albero ripariale salino, forte eterofillia foglie giovanili lanceolate vs adulte rombiche/ovate, gemme, amenti dioici, capsule, semi piumosi. Confronto con *P. alba* (foglia pagina inferiore bianco-lanosa), *P. tremula*, *Salix* spp., *Morus nigra*. Frontiers 2026 review **Xiao C. & Guo H.**, DOI 10.3389/fpls.2026.1977680, 16/11/2026: fattori anatomici e fisiologici, distinguere correlazioni, validazioni eterologhe e prove sul campo.
- Direttamente esaminati: Moldenke & Moldenke **1952 pp.183–184 (PDF179–180)**; Duke **2008 pp.350–352 (PDF376–378)**, score originale ++; Zohary **1982 pp.130–131 (PDF131–132)**; Post **1896 pp.744–745 (PDF754–755)**; Balfour **1857 pp.17–18 (PDF35–36)** favorevole a **P. tremula per bəḵāʾîm**; Tristram **1867 pp.389–390 (PDF401–402)** confronto pioppi del Levante, non prova di tutti i versetti; Kew; BDB H6155/H6851/H1057; LXX 2Sam5; UBS Poplar; Xiao/Guo2026. Dafni & Böck 2019 controllato per **metodo**: non ha voce *Populus euphratica* attestata nella collazione, non usarlo come cura biblica. **Grilli Caiola non letto**, non attribuire.

## Filologia biblica: NON appiattire i termini
- **Salmo137:1–3** ʿărāḇîm **H6155**: tradotto salici; **Zohary 1982 p130** e UBS considerano *P. euphratica* plausibile nell'ambiente dell'Eufrate; resta **CONTROVERSA** vs *Salix* spp.
- **Ezechiele17:5–6** ṣapṣāpâ **H6851**: salice oppure pioppo secondo Zohary; parabola della vite, **CONTROVERSA**.
- **2Sam5:23–24 / 1Cr14:14–15** bəḵāʾîm **H1057**: Moldenke/Post propongono pioppo dell'Eufrate, Balfour preferisce *P. tremula*, BDB indica anche albero balsamifero; LXX **bosco del pianto**, non taxon; entrambi **CONTROVERSA** e il secondo è racconto parallelo, non prova indipendente.
- **Levitico23:40** aravot H6155: quote già esistente #316 riusata, l'uso rituale di salici veri è sostenuto da Zohary, malgrado alcune proposte storiche con pioppi; **nessuna identification P. euphratica forzata**. Il toponimo Salmo84:6 «Baca», Lev26:36 su foglie mosse, Isa7:2 sul bosco sono associazioni generiche NON identificazioni.
- *Livneh* Gen30:37/Osea4:13 e *Populus alba* sono dossier distinti; non mescolare i 3 diversi lemmi.

## WP apparati e QA
- Pianta **#2402 publish** (prima creata in bozza, mai duplicata); **17.084 caratteri**, 17/17 specialist meta + 11/11 legacy rilette. Salicaceae già esistente #23 assegnata. SEO Yoast title+description+focus getter positive, `noindex=false`, `nofollow=false`.
- Nuove fonti published: **#2404 Kew; #2405 Xiao/Guo2026; #2406 BDB 3 lemmi; #2407 LXX 2Sam; #2418 UBS**. Fonti riusate: Moldenke #135, Duke #136, Zohary #1554, Post #2041, Balfour #2043, Tristram #2042, Dafni-Böck #2069 (solo metodo).
- Tre lemmi ebraici published **#2408 ʿărāḇîm**, **#2409 ṣapṣāpâ**, **#2410 bəḵāʾîm**; 4 quote nuove published **#2411 Sal137**, **#2412 Ez17**, **#2413 2Sam5**, **#2414 1Cr14**; quota Lev23:40 **#316** riusata. Medicina **#2415 publish** con **16/16 meta**, Duke ++ dentifrice/vermifuge solo tradizioni non cliniche; no false cure o assunzione alimentare certificata.
- **31 source_citations documentate** `#1435–1465` (core pianta, medicina, lemmi, versetti e citazioni di controllo; 2 sul quote riusato #316). **5 passage_terms** #271–275. **4 identifications** #320–323 tutte **status=controversa** rilette.
- Tavola botanica originale digitale **SENZA SCRITTE** WebP **#2403 featured**, 1024×1536, 392.092 byte; SHA256 originale locale e valore restituito WordPress **IDENTICI**:
`01ff7dbc1c957f7eeafa3aae1e741b8a478c32d6caf2131c8fdc6fd8806a94cb`
  Originale privato Libreria: `/PIANTE DELLA BIBBIA/atl-0164-populus-euphratica-tavola-senza-scritte.webp`. Preflight VERO WebP Libreria succeeded; uploader MCP start/chunk/finish in 16 chunk con offset validati. ALT e metadata WordPress `_wp_attachment_image_alt`/`_wp_attachment_metadata` verificati. Ponte Base64 e WebP preflight temporanei cancellati dalla Libreria dopo pubblicazione, originale conservato.
- WP backend post-publish letto: `status=publish`, permalink, featured, family, 17/17 meta, 11/11 legacy, Yoast getter; **QA_VISIVA_FRONTEND_NON_CERTIFICATA** (visione finale esterna desktop/mobile non attestata). Nessuna rivendicazione di QA visiva remota.

## Passo seguente NON automatico
**Prossima candidata operativa ATL-0165 / legacy ATL-0183: *Prunus armeniaca* L.** Controllo WordPress preliminare per nome e «albicocco» non mostra scheda propria; verificare DI NUOVO prima di creare e controllare Kew, sinonimi e eventuale status. Fonti da collazionare (Moldenke voce167 p184+, Duke apricot p352+, Zohary, Post, Tristram, Balfour e studi moderni), incluse controversie sul «tappuaḥ» e frutti; **non iniziare in automatico mentre l'automazione è sospesa**. Ogni successiva specie va richiesta manualmente finché task rimane disabled.

**Dossier operativo e roadmap aggiornati 21/11/2026; non cambiare la programmazione salvata, la sospensione prevale sulle vecchie note storiche.**
