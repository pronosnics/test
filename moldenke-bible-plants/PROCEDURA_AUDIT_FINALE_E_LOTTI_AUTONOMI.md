# Atlante Piante della Bibbia — procedura per lotti autonomi e audit delle fonti

**Avviata 17 novembre 2026.** Questa procedura si affianca al master e a `PROCEDURA_DEFINITIVA_MEDIA_SENZA_UPDATE_PLUGIN.md` e si applica **a ogni specie**. Non è un elenco di pubblicazioni automatiche già avvenute.

## Automazione quotidiana

**Titolo:** Atlante Biblico — lotti specie  
**ID attività:** `6afc98c5562c819187751443bd904c12`  
**Ricorrenza:** giornaliera, intorno alle 10:00 (Europe/Rome), dal 18/11/2026.  
**Lotto obiettivo:** due nuove specie (tre solo se effettivamente semplici); completare prima schede in bozza non concluse; evitare lavori concorrenti sulle medesime voci. Il primo lotto pianificato nella roadmap è ATL-0015 *Allium cepa* / Cipolla e ATL-0017 *Allium sativum* / Aglio. Non dichiarare pubblicazione finché il server non conferma `publish`.

## Filtro di completezza OBBLIGATORIO prima della pubblicazione

1. **Deduplicazione:** interrogare WordPress per specie, sinonimi, lemma, passo, fonte; recuperare gli ID esistenti, non creare copie. Controllare anche le schede incompiute delle precedenti esecuzioni.
2. **Lettura esaustiva dei testi originali** presenti nella Libreria utente: Moldenke *Plants of the Bible*, Duke *Handbook of Medicinal Plants of the Bible*. Per ogni voce identificare l'inizio e la fine anche se taglia una pagina; gli estratti di altre specie sono esclusi. Registrare volume, voce, pagine stampate e pagine PDF.
3. **Matrice di controllo per specie**: nome scientifico accettato e sinonimi storici; etimologia e nomi volgari; morfologia (fiori, foglie, frutti, stagione, habitus); areale e habitat; contesto ebraico/greco; **tutti i passi discussi dalle fonti**, compresi deuterocanonici, toponimi e nomi propri distinti dalle piante; confronti con altre specie; antichi usi alimentari, artigianali e commerciali; note culturali e folklore; medicina tradizionale, risultati preclinici/clinici realmente attestati e controindicazioni. Spuntare ogni categoria con nota fonte/pagina, oppure marcare **non trattata**. Non inserire testi ripetitivi solo per riempire.
4. **Filologia:** separare testo ebraico/greco, traduzione Diodati 1649, CEI per deuterocanonici e ipotesi botanica. Citare brevi estratti senza attribuire una traduzione a un'altra; segnalare i cambi di numerazione di versetti. Per ogni legame pianta↔passo assegnare motivazione e livello (diretto, probabile, controverso, toponimo, nome personale, metafora).
5. **Verifica tassonomica moderna:** Kew POWO; distinguere status accettato, sinonimi, cultivar e confronti senza mescolare specie come *Pistacia lentiscus*, *P. terebinthus*, *P. atlantica* o *P. vera*.
6. **Informazioni mediche:** dire esplicitamente quando una proprietà è soltanto una testimonianza folklorica o un esperimento in vitro/animali. Citare EMA/HMPC se disponibile con il livello regolatorio preciso; evitare promesse di cura e indicazioni farmacologiche domestiche. Non riportare dosi storiche per automedicazione, soprattutto se tossiche.
7. **Tavola originale:** verificare identità visiva della specie, fiore, foglie, frutto e habitus; conservare formato WebP, ALT, didascalia e provenienza. Seguendo la procedura MCP definitiva: blocchi di **24.000 byte raw** codificati in Base64 tramite file temporaneo privato → `pdb/atlas-media-start` → `pdb/atlas-media-chunk` con offset sequenziali → `pdb/atlas-media-finish`. Richiedere conferme SHA-256, ID allegato, immagine in evidenza, campo `pdb_plate_media_id`; eliminare lo staging. **Non aggiornare pdb-atlante 0.2.4 per ottenere l'upload.**
8. **SEO e qualità:** titolo, meta description e keyword individuali, gerarchia H1/H2, interlink, citazioni, status link, slug e audit `pdb/seo-audit` senza issue; **QA visiva reale desktop/mobile** distinta dall'audit automatico. Se un elemento indispensabile non è disponibile non dichiarare `MEDIA_OK` né `PUBBLICATO` e conservare bozza con motivo del blocco.
9. **Audit conclusivo delle omissioni:** confrontare nuovamente **l'intero originale Moldenke e Duke, frase per frase sul contenuto rilevante**, con quanto appare nelle schede create. Integrare dati significativi dimenticati e annotare che cosa si è aggiunto. Rifare SEO dopo correzioni.
10. **Chiusura:** pubblicare solo dopo gate superati, verificare `status=publish` per tutti gli ID, URL, Media ID, checksum e audit. Aggiornare roadmap, dossier e progressi con dati verificati, e comunicare numero di specie, schede, link e prossima coppia. Non confondere programma futuro con lavoro già eseguito.

## Controllo supplementare del Lentisco (17/11/2026)

Sulle pagine **Moldenke voce 161 pp177–178** e **Duke Mastic pp339–341**, un ulteriore audit ha individuato e portato direttamente nelle pagine WordPress #597 e #604:
- raccolta storica del mastice con incisioni e periodo di agosto citato da Moldenke, «lacrime» di qualità diverse per usi diversi;
- uso romano dei frutti come spezia, olio alimentare di semi a Cipro, legno per affumicature secondo il repertorio Duke;
- ricerche precliniche su antiaterogenesi, antimicrobici, larve di *Culex* e apoptosi in cellule del colon (nessuna prova di cure cliniche);
- **Duke annota che una fonte sulla sicurezza non specifica la dose**, quindi non concludere che non vi siano effetti collaterali.

L'ultimo `pdb/seo-audit` rileva **0 avvisi su Lentisco #597 e Terebinto #557**. Non sostituisce la verifica fotografica mobile/desktop.

## Regola di progressione

La roadmap GitHub è la fonte per scegliere la prossima specie **ancora aperta**, non la semplice ultima specie menzionata in una risposta. Prima coppia: **ATL-0015 Cipolla** e **ATL-0017 Aglio**. Dopo ogni lotto leggere di nuovo il master prima di iniziarne uno successivo.
