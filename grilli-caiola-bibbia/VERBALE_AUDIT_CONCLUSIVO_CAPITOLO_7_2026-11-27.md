# Capitolo 7 — Verbale di audit conclusivo (27/11/2026)

## Stato
Lotto 63, audit trasversale sul materiale accessibile, **eseguito con coda amministrativa ancora aperta**. 23/23 monografie chiuse editorialmente con riserve + delta mirra. Non equivale a chiusura scientifica assoluta o attestazione di tutti gli originali. Dati riletti live tramite MCP in questa sessione; nessuna nuova collazione delle fonti originali effettuata nel lotto 63.

## Inventario e risultati live
| Taxon | WP botanica | WP medicina | Relazioni bibliografiche botanica | Identificazioni | Relazione Grilli #775 | Tavola |
|---|---:|---:|---:|---:|---|---:|
| Abies cilicica | 4328 | 4329 | 19 | 3 | 5668 | 4330 |
| Vachellia tortilis | 4409 | 4418 | 18 | 3 | 5683 | 4419 |
| Laurus nobilis | 1949 | 7680 | 19 | 2 | 5692 | 1950 |
| Commiphora gileadensis | 1307 | 1313 | 21 | 8 | 5277 | 1308 |
| Ceratonia siliqua | 992 | 998 | 25 | 3 | 5728 | 993 |
| Cedrus libani | 266 | 268 | 16 | 17 | 5762 | 7737 |
| Cupressus sempervirens | 1551 | 1555 | 18 | 11 | 5784 | 1553 |
| Lawsonia inermis | 1955 | 7808 | 24 | 2 | 5822 | 7791 |
| Diospyros ebenum | 1704 | 1709 | 26 | 1 | 5855 | 7833 |
| Retama raetam | 2610 | 2612 | 31 | 3 | 5878 | 2613 |
| Boswellia sacra | 760 | 767 | 19 | 7 | 5889 | 806 |
| Quercus ilex | 2525 | 2529 | 23 | 1 | 5900 | 2530 |
| Pistacia lentiscus | 597 | 604 | 22 | 5 | 5912 | 609 |
| Ulmus minor subsp. canescens | 3984 | 7984 | 22 | 2 | 5935 | 3985 |
| Populus alba | 2391 | 2396 | 17 | 2 | 5952 | 2397 |
| Pistacia vera | 2312 | 2327 | 27 | 1 | 5966 | 8047 |
| Quercus ithaburensis | 2540 | 2548 | 26 | 2 | 5980 | 2541 |
| Quercus coccifera | 2464 | 2476 | 21 | 6 | 5985 | 2494 |
| Rosa phoenicia | 2677 | 2678 | 16 | 5 | 5994 | 2679 |
| Pterocarpus santalinus | 2441 | 2450 | 14 | 3 | 6000 | 2442 |
| Ficus sycomorus | 367 | 368 | 23 | 8 | 6008 | 8092 |
| Tamarix aphylla | 3749 | 3750 | 24 | 3 | 6024 | 3768 |
| Pistacia atlantica | 2291 | 2301 | 33 | 10 | 6034 | 2292 |
| Commiphora myrrha (delta cap. 6) | 1326 | 1338 | 18 | 11 | 5444 / 5934 | 1327 |

Totale prima di eventuale riconciliazione: 522 relazioni bibliografiche sulle 24 botaniche, 119 identificazioni (con fonte, locatore e spiegazione non vuoti; nessun gruppo duplicato segnalato per identificazioni). Grilli presente su tutte le monografie con pagine 113–135 e figure 65–87; mirra due loci distinti p102 fig57 e pp111–112. Tutte le pagine sono esplicitate nel campo locator o nei campi pagina, anche se alcuni campi numerici sono vuoti.

- Audit locale botaniche 24/24 e medicinali 24/24: H1 unico, zero ALT mancanti, zero marcatori redazionali candidati e zero warning. Tavola e featured coincidono per tutte le botaniche. Non equivale a nuova ispezione visuale delle 24 tavole né verifica CSS/JS, immagini remote, link esterni, apparati o supplementi.
- SEO Yoast memorizzato: titolo, description e focus compilati sulle 24 botaniche, tutti riletti. Non è verifica head HTML pubblico; SEO delle medicinali non riletto in questo lotto.
- Identificazioni: verifica delle 119 righe, 33 lemmi espliciti distinti e 91 coppie distinte passo–lemma. Una coppia mancava: Cantico 1:17 #294 / lemma bərôtîm H1266 #4345, corretta con atlas-link, nuova relazione passage_terms #458, readback positivo. Conservato il collegamento comparativo preesistente #202 al lessico bərôš H1265. Le altre coppie esplicite risultano presenti. 19 identificazioni hanno term_id nullo: non necessariamente errore, nessuna attribuzione automatica; resta coda di normalizzazione filologica. Verifica delle relazioni, non nuova collazione integrale dei testi biblici. In particolare Cedrus #65/69/71/75 citano fonte del sicomoro nei passi comparativi: da affinare con locatori specifici per ʾerez, senza negare presenza del cedro.
- 24 gruppi candidati di fonte ripetuta esaminati nel dettaglio, prevalentemente loci/claim distinti. Due coppie sostanzialmente sovrapposte: Ficus #174 assorbibile in #176 (Moldenke p282); Retama #1688 assorbibile in #1680 (Tristram pp359–360). Proposta 1b98baa3-a20c-4b20-938d-0912d8b7aff8, stato pending, NON applicata; merge_mode replace_claim con contenuti combinati. Approvazione amministrativa: https://piantedellabibbia.altervista.org/wp-admin/admin.php?page=pdba-reconcile . Dopo applicazione rileggere righe e totali (attesi 520 complessivi, Ficus 22 e Retama 30), pending=null e audit delle due botaniche. Nessuna eliminazione di fonti o schede. Altre coppie con sovrapposizioni parziali mantenute perché contenuto/locus distinto.
- 19 relazioni storiche con campo locator vuoto (#1074,1075,74,75,1072,1073,146,147,148,149,150,174,1332–1337,1340); 16 con pagine già presenti, tre (#148–150) con descrizione in claim (Kew/BDB/lessico greco) ma senza pagina/locator. Non inventare pagine: normalizzazione formale differita e non scambiata per nuova verifica. Tutte hanno claim.
- HTTP anonimo: tentativo campione Abies #4328, CONNECT tunnel 403; apertura pubblica esterna non riuscita. Non annulla il browser pubblico 23/23 registrato al lotto 37, ma non certifica la resa dopo tutte le ultime modifiche.
- Riserve P1-L (identità, metodo, campioni, clinica, attribuzioni), P2-A/P2-D (integrali, dati, facsimili, voucher, registri), P3 (controlli residui) restano nella matrice e nei dossier. Nessuna promozione scientifica o terapeutica. Non ripetere accessi falliti senza nuove piste. Non dichiarare chiusura senza riserve.

## Coda per chiusura amministrativa del lotto
Approvazione della riconciliazione, rilettura e audit mirato; riportare stato effettivo in roadmap e verbale. Controllo pubblico dopo modifiche e completamento normalizzazioni bibliografiche/filologiche in coda, separati dalle riserve intrinseche. Nessuna nuova botanica creata.
