# PDB Hub 0.2.0 — checkpoint 15A

Stato: codice e matrice pronti per collaudo, NON installati su WordPress. Non usare il pacchetto 0.1.0 precedente.

## File richiesti
- pdb-hub.php (blob Git 62c3b556c5a1dfec8a8d43f43b6d06f0d7e3f2dd)
- hub-manifest.json (blob Git 1f5bed2fc61d7586ed44b8ca6bd92c8eb5b58a42)
- hub.css

La matrice contiene otto hub, 189 associazioni editoriali su 167 coppie tipo/slug distinte. Estratta solo dai collegamenti esplicitamente selezionati nei contenuti degli hub, non dalle occorrenze nei testi delle monografie. Sono esclusi riferimenti bibliografici e link generici. ID e slug dell'hub verificati via API. I membri sono risolti per tipo e slug esatto e restituiti con get_permalink; nessuna migrazione automatica di metadati o relazioni scientifiche. La versione 0.2 sostituisce il prototipo 0.1 non installato: matrice versionata, non modifica via metabox. Per modificare associazioni si aggiorna la matrice con revisione editoriale. Un cambio di slug richiede aggiornamento del manifesto.

## Sequenza di collaudo
1. Verificare backup recente dei file e del database, conservare copia del tema attivo inclusa la correzione didascalia. Preparare ripristino.
2. Installare il pacchetto 0.2.0 con i tre file, preferibilmente in ambiente di prova. Attivazione non eseguita.
3. Strumenti > Percorsi Atlante (admin-only): verificare 8 pagine, stati, 189 associazioni; correggere eventuali destinazioni non risolte anche nei contenuti degli hub prima di pubblicare. Il controllo WordPress non sostituisce il test HTTP dei permalink e delle pagine.
4. In bozza tema: verificare template page-templates/hub.php, indice #8767 [pdb_hub_index], footer con rimandi sulle schede, assenza di collegamenti verso draft o contenuti protetti. Controllare rendering, tastiera, mobile e RTL. Il modulo non scrive nel database e il template ha fallback; la disattivazione rende inattivi shortcode e rimandi. Prima di disattivazione su sito pubblico ripristinare il corpo statico dell'indice o renderizzare fallback.
5. Dopo collaudo e backup, pubblicare progressivamente hub e indice, attivare tema, controllare navigazione, sitemap, canonical e regressioni. Nessuna pubblicazione effettuata in 15A.

## Test 15A
- PHP CLI 8.4.24: lint OK su copia byte-identica al blob Git indicato.
- 15 test con funzioni WordPress simulate: esclude draft, slug errato e hub protetto; due rimandi inversi; slug ebraico percent-encoded con differente maiuscolazione; membro draft; tipo errato; slug assente; tipo non consentito; escape titolo indice; markup inverso; forward esclude mancanti; template hub; fallback senza template; slug hub non corrispondente; template indice; template CPT invariato.
- 10 destinazioni della matrice confrontate con API (1041,2054,3192,1809,4318,6178,1274,212,1834,1432), due record alternativi #672 e #434 non inclusi e preservati. Non certifica tutte le 167 destinazioni né HTTP.
- WPVibe DOM anteprima homepage: sezione percorsi, #778, nessun link ai due hub draft testati, sezione famiglie e contatore 70; footer modificato dopo il controllo DOM, non collaudato con modulo attivo. WPVibe quota esaurita senza reset.

## Checkpoint 15B — pacchetto installabile e audit integrale della matrice
- ZIP pdb-hub-0.2.0.zip, 7640 byte, SHA256 09bd326b019888340cbcca3082586e49794b7a7fca30f468dc37cb290a9f46f3. Tre file, hash Git verificati: PHP 62c3b556c5a1dfec8a8d43f43b6d06f0d7e3f2dd; JSON 1f5bed2fc61d7586ed44b8ca6bd92c8eb5b58a42; CSS e8a3e652d6e9f7194994e951b4a7e67bf9338a7a. ZIP integro, lint PHP OK, 15 test precedenti rieseguiti. Test completo con fixture della matrice reale: stati attuali escludono sette bozze, tutti i 167 membri verificati in simulazione; stati simulati pubblicati: 189 rimandi in ciascuna direzione, 8 card, 8 template. Non è un collaudo WordPress reale.
- Audit via API: 243 piante pubblicate, 59 destinazioni botaniche distinte risolte; 109 indirizzi degli altri tipi verificati, 106 esatti al primo passaggio e 3 errori di codifica. Correzioni a H2406 #5750, shoshanah #1859 e H3646 #1491 nei tre hub draft #8771/#8774/#8775 e nei sorgenti GitHub, rilette e risolte tutte. H2406 era già collegato correttamente da #778: l'allineamento riduce le destinazioni distinte da 168 a 167, 189 associazioni invariate. Audit JSON e correzioni in ../lotto-15-integrazione/.
- Non disponibile capacità di verificare un backup UpdraftPlus reale o installare il modulo via MCP proprietario. WPVibe non ha quota residua nel checkpoint precedente, reset non speso. Prima dell'installazione: eseguire backup completo e verificare stato; installare ZIP preferibilmente in staging; leggere Strumenti > Percorsi Atlante. Non pubblicare ancora l'indice finché shortcode e backup non verificati. Tavole tematiche, test HTTP completo, grafica, SEO/sitemap e attivazione restano aperti.
