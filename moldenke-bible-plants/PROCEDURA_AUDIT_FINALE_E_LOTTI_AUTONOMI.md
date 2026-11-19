# Atlante Piante della Bibbia — procedura per lotti autonomi e audit delle fonti

## Registro bibliografico permanente — aggiornamento 19 novembre 2026

**PRIMA di ogni nuova scheda e di ogni revisione retroattiva** aprire il [registro bibliografico canonico](FONTI_BIBLIOGRAFICHE_MASTER_ATLANTE_2026-11-19.md). Il confronto di base resta Moldenke–Duke–Zohary–Grilli Caiola + Kew; da oggi si deve inoltre **verificare la pertinenza** delle sei fonti aggiunte: Dafni–Böck (2019), Balfour (1857), Tristram (1867), Post (1896), Dafni–Levy–Lev (2005) e Frumin et al. (2024).

- Per specie o usi detti medicinali: ricercare **prima** nelle tabelle 1–4 dell'articolo Dafni–Böck 2019 e registrare esattamente se uso *biblico diretto*, *indiretto*, *postbiblico* o *egizio/mesopotamico*. Le 45 specie proposte **non** rappresentano 45 citazioni bibliche medicinali dirette.
- Alberi/arbusti: consultare Balfour e Tristram quando pertinenti; controllare sinonimi/nomenclatura con Kew. Flora storica locale: Post. Tradizioni del giuggiolo di Cristo: Dafni–Levy–Lev. Reperti/rituali di Gat: Frumin et al.
- Per **ognuna delle fonti pertinenti**, annotare pagina effettivamente letta, identificazione e grado di certezza; se non pertinente segnalarlo soltanto nell'audit interno. Non aggiungere bibliografie decorative in WordPress e non pubblicare frasi del tipo «questa fonte non cita la pianta».
- Due PDF sono archiviati nella Libreria `/PIANTE DELLA BIBBIA/Fonti bibliografiche/` e gli altri sono raggiungibili tramite URL nel registro canonico. In una nuova chat **verificare accessibilità dei file**: non inventare percorsi locali.
- **PREGRESSO:** il controllo delle 58 specie con Zohary è concluso (47 integrazioni WP, 11 senza novità). Il **nuovo audit delle sei opere** è un incarico distinto, ancora da svolgere e da documentare per lotti; non confondere i due stati.

## Aggiornamento obbligatorio Zohary — 19 novembre 2026

**Da ATL-0089 in avanti**, ogni audit della specie deve consultare per impostazione predefinita **quattro fonti**: Moldenke, Duke, Grilli Caiola–Guarrera–Travaglini e Michael Zohary, *Plants of the Bible* (1982). La verifica di Zohary precede il publish e può concludersi in tre modi documentati: **voce letta e integrata con pagine**; **voce letta ma nessuna integrazione necessaria**; **non trattata / non verificabile**. È vietato inserire una citazione per riempire il campo bibliografico senza lettura della pagina originale. Traduzione italiana di lavoro dei passaggi pertinenti, sintesi originale pubblicabile e distinzione fra ipotesi, specie e sinonimi.

**Pregresso:** [matrice retroattiva delle 58 specie pubblicate al 19/11/2026](AUDIT_ZOHARY_RETROATTIVO_58_SCHEDE_2026-11-19.md), **già conclusa per Zohary** (47 WP integrate, 11 senza nuova integrazione). **Fonte e PDF esterno:** [scheda Zohary](FONTE_ZOHARY_PLANTS_OF_THE_BIBLE.md). La prossima specie ATL-0089, *Cupressus sempervirens*, ha un riferimento iniziale Zohary «Evergreen Cypress» p. 106, da leggere prima dell'integrazione.


## Caso verificato: lotti Allium Cipolla e Aglio, 17/11/2026

**14 nuove schede WordPress verificate `publish`**: piante #627/#628, passo biblico condiviso #626 (senza duplicati), nomi ebraici #630/#631, medicine #639/#640, fonti #633–638 e #661. **Due tavole WebP originali tramite MCP** Media #629 (Cipolla, 17 blocchi, SHA-256 `154c3e455a601d79ed95e693040cb31375ccda64b1aa4b433b3cf5b41e7740cc`) e #632 (Aglio, 11 blocchi, SHA-256 `6b1b67cf5ac4d3c821c315eba01631361dbbf420f3a66efe8fa2d55f44879a9d`); entrambe featured e ALT, staging eliminato, audit SEO 0, plugin 0.2.4 invariato.

**Nuova lezione tecnica importante:** l'audit SEO delle piante può segnalare «Riferimenti biblici assenti» e «Bibliografia assente» anche se i testi HTML e le relazioni MCP contengono già questi dati. Il campo strutturato letto da `pdb/seo-audit` richiede un `pdb/update-content` della pianta con `plant.bible_references`, `plant.bible_passages`, `plant.sources` e, se opportuno, `plant.moldenke_pages`. Aggiornare, rilanciare audit e verificare **0 avvisi** prima del `publish`. L'operazione `pdb/update-content` in questo contesto ha accettato gli oggetti `pdb_plant`, ma non le altre tipologie: per SEO fonti, medicina, passi e termini usare `yoast-seo/update-post-seo-data`, e per focus keyword `ewpa/update-post-meta` come necessario. Non inventare esiti di chiamate che falliscono.

**Lezione editoriale:** Num 11:5–6 è un solo passo per Cipolla, Aglio e futuro Porro. Moldenke 1952 p32 riporta l'ipotesi storica dello scalogno per l'ebraico dell'aglio; distinguerla dal taxon moderno e dalla cipolla. Duke Onion pp16–20 e Garlic pp23–30 contengono studi di diversa qualità, e le interazioni/veterinaria meritevoli di confronto con NIH, EMA e Merck. La monografia EMA definitiva della prima versione (2020) va distinta dalla **bozza 2025** di revisione.



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

La roadmap GitHub è la fonte per scegliere la prossima specie **ancora aperta**, non la semplice ultima specie menzionata in una risposta. **ATL-0015 Cipolla e ATL-0017 Aglio sono stati completati e pubblicati il 17/11/2026**; prossime voci indicative aperte ATL-0019 Aloe vera e ATL-0022 Anastatica hierochuntica, da verificare contro il master aggiornato e il database prima di procedere. Dopo ogni lotto leggere di nuovo il master prima di iniziarne uno successivo. **Obbligo di aggiornare master, dossier e progressi in ogni esecuzione, anche senza pubblicazione**, registrando blocchi e prove server.
