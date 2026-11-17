# Progressi Mandorlo — ATL-0184 — 17 novembre 2026

## Stato aggiornato — revisione finale editoriale e SEO (17 novembre 2026)

- **13 bozze WordPress non pubblicate**: pianta #467, medicina #469, lemmi #470–471, Kew #472, 7 passi biblici #473–479 e nuova fonte BDB #516. La bozza #467 resta intenzionalmente privata fino alla presenza di un'immagine in evidenza valida.
- **Diodati 1649**: breve estratto inserito e verificato su trascrizione digitale Biblia.com nei 7 passi, con nota trasparente che non si tratta di collazione su facsimile della stampa originale. Rimossi segnaposto e le frasi obsolete dove individuate. Preciso «nocciuolo» in Genesi 30:37, «mandorle» in Genesi 43:11, «vasi in forma di mandorla» nei due Esodi, la verga di Aronne, il mandorlo in Ecclesiaste e šāqēd/šōqēd in Geremia. Per Numeri: differenza di numerazione ebraica 17:23 vs. italiana 17:8.
- **BDB aggiunto**: fonte lessicografica #516, bozze; 8 citazioni fonte #236–243 verso pianta/termini/passi, più 7 citazioni Diodati #244–250 verso i singoli passi. Nessun duplicato della fonte generale Diodati #217.
- **Testi e SEO**: titolo e descrizione Yoast della pianta #467 aggiornati, voce cornerstone ItemPage, descrizioni specifiche migliorate per #474–479, titoli biblicamente più precisi su #475–476, keyphrase per 6 passi, medico e termini revisionati. Controllo SEO live: **unico warning «Immagine in evidenza assente»** per #467; tutte le altre piante pubblicate restano senza warning.
- **Tavola botanica originale nuova**: WebP 1086×1448, 274258 byte, SHA-256 `61bc8c50109d0f6c9037d195f3634f77411219027ae558d45986e3ad6dac85c0`, nome `tavola-botanica_prunus-amygdalus.webp`. Verificati fiore pentamero, foglia seghettata, drupa verde, guscio e seme. **NON ancora caricata in WordPress**. È stata creata una pagina WordPress temporanea per l'upload, con sessione *pending*; URL/token volutamente non registrati qui.
- **Plugin**: pdb-atlante **0.2.4 stabile**; nessun nuovo ZIP. Dopo upload verificare attachment, ALT, provenienza, featured, audit, QA visiva desktop/mobile, poi pubblicare in ordine fonte, termini, medicina, versetti e infine pianta.
- **Prossima specie prevista dalla roadmap**: **ATL-0147 Mirto (*Myrtus communis*)**, Moldenke voce 138 p.143, Duke p.279.



## Variazione globale della pubblicazione Papiro — 17 novembre 2026

Il Papiro ha ora 8 passi biblici pubblicati (incluse nuove note Giobbe 9:26 #498 e 2 Giovanni 1:12 #499), e 21 pagine complessive; i conteggi pubblici sono **8/60/17/8/30**. Questo non modifica lo stato del Mandorlo: **12 BOZZE** (#467, #469–479), plate WebP originale pronta ma non ancora associata, Diodati dei 7 versetti da verificare. Non incrementare le versioni del plugin per nuove tavole: [procedura definitiva](PROCEDURA_DEFINITIVA_MEDIA_SENZA_UPDATE_PLUGIN.md).

## Tavola originale creata e nuovo flusso upload verificato — 17 novembre 2026

La tavola digitale originale del **Mandorlo — Prunus amygdalus Batsch** è stata generata e ispezionata: tronco e chioma in fiore, corolle rosa a cinque petali, foglie seghettate, drupe verdi vellutate, endocarpi legnosi e semi. File WebP **1086×1448**, dimensione **428.820 byte**, SHA-256 **ba05f9b3ab5a42f8794b57ecb48c09ed92319847b659b25e1f49c9ec96c73ccf**, filename `tavola-botanica_prunus-amygdalus.webp` in file conversazione. La composizione artistica non è un campione d'erbario né un facsimile di Duke o Moldenke.

**NON è ancora in WordPress.** Test del metodo generico già attivo in 0.2.4: `pdb/atlas-media-start` con ID post 467, file manifest e checksum → sessione autorizzata con blocchi fino a 49.152 byte; `pdb/atlas-media-abort` → annullata, senza allegati indesiderati. L'invio completo tramite MCP o `ewpa/create-upload-link` resta da terminare. Si tratta di **upload di contenuto**, non aggiornamento plugin: [Procedura permanente immagini senza nuove versioni](PROCEDURA_DEFINITIVA_MEDIA_SENZA_UPDATE_PLUGIN.md).

Il resto resta in bozza, 12 schede #467 e #469–479. Estratti Diodati 1649 dei sette passi ancora da collazionare: non pubblicare prima. SEO struttura Mandorlo: solo featured image mancante. **Papiro invece MEDIA_OK/SEO_OK, plugin 0.2.4 attivo.**

**Status:** BOZZE_WP_CREATE / FONTI_PRINCIPALI_LETTE / SEO_TESTO_OK / DIODATI_DA_COLLAZIONARE / IMMAGINE_DA_GENERARE / QA_APERTA.

- **Kew 2026:** nome accettato *Prunus amygdalus* Batsch (Rosaceae); *Prunus dulcis* (Mill.) D.A.Webb e *Amygdalus communis* L. sinonimi. La roadmap iniziava con Prunus dulcis: correggere questa formulazione senza duplicazioni.
- **Moldenke**: voce 28 *Amygdalus communis* L., pagine stampate 35–38, analisi di shaked, luz, candelabro, Gen43, verga Aronne e ricezione culturale. Il riferimento p274 è bibliografia e non una nota supplementare botanica.
- **Duke**: voce Almond pp355–360, codice botanico Prunus dulcis, categorie attività, indicazioni, preparazioni, tossicità, fitopatologia e ricerca dietetica. Laetrile nella prima parte di p355 è della voce precedente: attenzione alla delimitazione.
- **WordPress**: pianta #467, medicina #469, lemmi #470–471, fonte Kew #472, passi #473–479 = **12 nuove bozze**. ID #468 non incluso.
- **Legami**: 7 identificazioni #84–90 (Gen30 lûz controverso, Gen43 consolidato, ornamenti Esodo probabili, Num17 consolidato, Eccles12 probabile, Ger1 consolidato); 7 rimandi lessicali #74–80; 13 citazioni fonti #215–227.
- **SEO**: tutti 12 slug e titolo/meta Yoast impostati; pianta #467 Studio Manager completato. Audit MCP: **unico rilievo immagine in evidenza assente**.
- **Biblia**: in bozza citazioni Diodati 1649 intenzionalmente NON inserite. Forme originali da verificare, poi breve estratto e bibliografia.
- **Visual**: creare tavola originale scientificamente valida e nuovo import immagine; non pubblicare nel frattempo.

**Fasi successive:** Diodati sette passi, approfondimento singole schede, lessico H, verifica SEO relazioni, tavola, responsive, pubblicazione controllata e aggiornamento master. [Dossier integrale](ATL-0184_MANDORLO_DOSSIER_2026-11-17.md).

**Stato Papiro:** 15 nuove pagine #427–441 PUBBLICATE; unica criticità SEO immagine, per la quale è pronto ZIP pdb-atlante 0.2.4; web site ancora versione 0.2.3 fino a nuova installazione. Totali pubblici 8/58/15/8/28, che NON includono le bozze Mandorlo.
