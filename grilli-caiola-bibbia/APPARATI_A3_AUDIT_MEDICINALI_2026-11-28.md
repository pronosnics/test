# A.3 — Audit trasversale medicinali (28/11/2026)
Fonte: registro 110 voci illustrate A.3, inventario live WordPress. Non equivalenza fra pianta biblica, identificazione botanica, impiego storico e terapia dimostrata.

## Inventario iniziale
atlas-list type=pdb_medicine status=any pagine 1–3: 100+99+0, 199 ID distinti. atlas-coverage: 198 pubblicate, tutte con fonti; 1 non pubblicata (inventario precedente: draft). Il registro tab.4–5 contiene 105 candidature medicinali, 105 ID distinti; 9 voci prive di candidato da titolo. Titoli dell'intero inventario filtrati per nomi scientifici/comuni delle 9: nessuna corrispondenza pertinente, non prova dell'assenza del metadato plant_id in altri titoli. Censimento completo dei metadati dei medicinali ancora da svolgere.

## Nove voci senza candidato per titolo: screening dei contenuti botanici live
Letti contenuti di nove schede botaniche tramite atlas-get content; analisi mirata degli estratti riguardanti usi, evidenza e sicurezza. Fonti citate nel testo, non nuovamente collazionate in originale in questo lotto.
| Pianta WP | Decisione preliminare | Motivazione |
|---|---|---|
| 6177 dicocco | mantenere in botanica | Duke 468–470 confronto, non monografia autonoma; Dafni–Böck p9 Triticum sp., distinzione da attestazione biblica; glutine e celiachia già trattati |
| 3953 frumento tenero | candidato dossier nutrizionale/etnomedicinale, priorità P2 | Duke 468–472 Wheat, crusca/germe e usi tradizionali; sicurezza glutine/allergia presente; verificare fonti primarie e evitare duplicazioni dei frumenti |
| 2011 gelso nero | candidato monografia critica P2 | Duke 276–278 Black Mulberry, tradizioni foglie/frutti/corteccia, cautele; assente da elenco ristretto Dafni–Böck secondo scheda; separare M. alba e dati preclinici |
| 5747 grano duro | mantenere in botanica | Duke non monografia autonoma, non trasferire attività del tenero, glutine già trattato |
| 1961 lenticchia | candidato monografia critica P2 | Duke 245–247, tradizioni topiche e alimentari, allergologia; no ricette/dosi né indicazioni cliniche |
| 6332 melo selvatico | mantenere in botanica, riserva P2 | Duke p262 congettura sui frutti selvatici, non prova clinica; non trasferire dati M. domestica; assenza di attestazione medicinale biblica nel testo |
| 6254 spelta | mantenere in botanica | Duke 468–472 confronto Wheat, glutine e allergia, nessuna monografia autonoma |
| 3962 tulipano di Saron | mantenere sicurezza in botanica, riserva P2 | Duke Tulipa spp. 472–474, allergeni tuliposidi/tulipalina, non dati specifici della specie; no ingestione dei bulbi |
| 1981 zizzania/loglio | candidato dossier tossicologico P1/P2 | Duke 259–260 Darnel, avvertenza negativa; Dafni–Böck esclusione secondo scheda; tossicità/funghi da collazionare 2026, no uso terapeutico |
Nessuna nuova scheda creata: prima verificare tutti i metadati e fonti specifiche. Priorità di revisione non indica efficacia clinica.

## Primo gruppo metadati (15 candidati + due senape)
| Medicina | Piante candidate nella riga | plant_id effettivo | Stato | Livello registrato | Campi essenziali vuoti |
|---|---|---|---|---|---|---|
| 4329 | 4328 | 4328 | publish | preclinical | nessuno |
| 4418 | 4409 | 4409 | publish | traditional | nessuno |
| 640 | 628 | 628 | publish | traditional | nessuno |
| 7680 | 1949 | 1949 | publish | non valorizzato | nessuno |
| 670 | 666 | 666 | publish | traditional | nessuno |
| 711 | 700 | 700 | publish | traditional | pdb_contraindications, pdb_interactions |
| 7002 | 6979 | 6979 | publish | preclinical | pdb_contraindications |
| 710 | 699 | 699 | publish | traditional | pdb_interactions |
| 4728 | 4727 | 4727 | publish | non valorizzato | nessuno |
| 4775 | 4774 | 4774 | publish | non valorizzato | nessuno |
| 4837 | 4836 | 4836 | publish | non valorizzato | nessuno |
| 4916 | 4914 | 4914 | publish | non valorizzato | nessuno |
| 4941 | 4940 | 4940 | publish | non valorizzato | nessuno |
| 1313 | 1307 | 1307 | publish | non valorizzato | pdb_contraindications |
| 4881 | 4880 | 4880 | publish | non valorizzato | nessuno |
| 812 | 807 | 807 | publish | traditional | pdb_interactions |
| 4986 | 807 | 807 | publish | non valorizzato | nessuno |
Controllo strutturale, non certificazione scientifica del livello di evidenza. Nessuna modifica WordPress. Prossimo gruppo: candidati successivi e riconciliazione di eventuali duplicati.

## Riscontro primo gruppo e doppia scheda senape
17/17 pubblicate, plant_id effettivi conformi al candidato; 9 livelli evidenza vuoti (#7680,4728,4775,4837,4916,4941,1313,4881,4986). 5 schede con campi di sicurezza vuoti: #711 controindicazioni/interazioni, #7002 controindicazioni, #710 interazioni, #1313 controindicazioni, #812 interazioni. Non equiparare metadato vuoto ad assenza nel testo né riempire senza fonte.
Senape #812 e #4986 entrambe pubblicate, plant_id=807. Riletti i due testi e tutte le relazioni: #812 3 relazioni (#450 Duke, #456 Kew, #5515 caso clinico), #4986 9 relazioni (#3927–3931, #5511–5514), 2 fonti identiche (#808 Kew, #4979 caso clinico) e due record Duke distinti (#136/#4976 da riconciliare in audit fonti). #812 è approfondimento circoscritto alle ustioni, #4986 monografia generale con sezione ustioni e collegamenti reciproci nel testo. Sovrapposizione tematica, non doppione automaticamente eliminabile; conservare entrambe per ora, valutare differenziazione esplicita e canonical/SEO. Nessun trasferimento o cancellazione. Fonti citate rilette dai record, non ricollazionate integralmente in originale in questo lotto.
Prossimo: restanti 88 candidati, quindi metadati dei 94 medicinali non candidati per escludere collegamenti non emersi da titolo; fonti e sicurezza P1/P2, riserve iconografiche ancora aperte.


## Secondo gruppo metadati e relazioni, parte A (28/11/2026)
5/5 associazioni candidate confermate, pubblicate. Lettura live atlas-get meta e atlas-relations source_citations. Relazioni non equivalgono a fonti distinte né a verifica delle fonti originali.
| Medicina | Piante candidate nella riga | plant_id effettivo | Stato | Livello registrato | Campi essenziali vuoti | Relazioni | Fonti distinte |
|---|---|---|---|---|---|---|---|
| 1589 | 1583 | 1583 | publish | non valorizzato | pdb_contraindications | 9 | 9 |
| 2251 | 2243 | 2243 | publish | non valorizzato | pdb_contraindications, pdb_interactions | 2 | 2 |
| 1147 | 1133 | 1133 | publish | non valorizzato | nessuno | 11 | 11 |
| 895 | 889 | 889 | publish | non valorizzato | nessuno | 14 | 14 |
| 8583 | 3937 | 3937 | publish | traditional | nessuno | 4 | 4 |
Livelli vuoti: #1589, #2251, #1147, #895. Campi essenziali vuoti: #1589 pdb_contraindications; #2251 pdb_contraindications, pdb_interactions. Relazioni complessive: 40; possibili duplicati API: nessuno. Nessuna modifica WordPress. Cumulativo 22/105.


## Secondo gruppo metadati e relazioni, parte B (28/11/2026)
5/5 associazioni candidate confermate, pubblicate. Lettura live atlas-get meta e atlas-relations source_citations. Relazioni non equivalgono a fonti distinte né a verifica delle fonti originali.
| Medicina | Piante candidate nella riga | plant_id effettivo | Stato | Livello registrato | Campi essenziali vuoti | Relazioni | Fonti distinte |
|---|---|---|---|---|---|---|---|
| 3483 | 3482 | 3482 | publish | insufficient | nessuno | 19 | 16 |
| 2095 | 2080 | 2080 | publish | non valorizzato | nessuno | 5 | 5 |
| 998 | 992 | 992 | publish | non valorizzato | pdb_side_effects, pdb_contraindications, pdb_interactions | 10 | 10 |
| 1116 | 1104 | 1104 | publish | non valorizzato | pdb_contraindications, pdb_interactions | 9 | 9 |
| 1040 | 1031 | 1031 | publish | non valorizzato | pdb_interactions | 4 | 4 |
Livelli vuoti: #2095, #998, #1116, #1040. Campi essenziali vuoti: #998 pdb_side_effects, pdb_contraindications, pdb_interactions; #1116 pdb_contraindications, pdb_interactions; #1040 pdb_interactions. Relazioni complessive: 47; possibili duplicati API: #3483 (3). Nessuna modifica WordPress. Cumulativo 27/105.


**A.3 — medicinali, secondo gruppo (28/11/2026):** 10/10 candidati verificati live, tutti pubblicati, plant_id corretto; cumulativo 27/105. 87 relazioni bibliografiche, 84 coppie scheda–fonte distinte; 8 livelli evidenza vuoti (#1589,2251,1147,895,2095,998,1116,1040), 5 schede con campi sicurezza vuoti (#1589,2251,998,1116,1040). Cardo mariano #3483: 19 relazioni/16 fonti; tre gruppi candidati duplicati #3459 (2662/6215), #3461 (2663/6210), #3462 (2664/6211), riletti localizzatori e claim: generali vs approfondimenti specifici OMS, Cochrane e Nutrients, non cancellare. Cassia #1116: testo live contiene già avvertenze cumarina/BfR, gravidanza, fegato e farmaci, mentre metadati controindicazioni/interazioni vuoti: riserva di allineamento, non assenza di cautele; priorità successiva verifica originale. Nessuna modifica WP né nuova collazione integrale fonti. Tentativi di gruppo più ampio superavano limite chiamate, ripetuti in due sottogruppi da cinque con salvataggio separato; nessun risultato non registrato conteggiato. [Audit medicinali](APPARATI_A3_AUDIT_MEDICINALI_2026-11-28.md). Prossimo da #1279, 78 candidati residui e 94 non candidati, riserve precedenti mantenute.


## Terzo gruppo metadati e relazioni, parte A (28/11/2026)
5/5 associazioni candidate confermate, pubblicate. Lettura live atlas-get meta e atlas-relations source_citations. Relazioni non equivalgono a fonti distinte né a verifica delle fonti originali.
| Medicina | Piante candidate nella riga | plant_id effettivo | Stato | Livello registrato | Campi essenziali vuoti | Relazioni | Fonti distinte |
|---|---|---|---|---|---|---|---|
| 1279 | 1271 | 1271 | publish | non valorizzato | pdb_contraindications, pdb_interactions | 5 | 5 |
| 268 | 266 | 266 | publish | traditional | nessuno | 10 | 10 |
| 946 | 942 | 942 | publish | insufficient | nessuno | 13 | 13 |
| 1480 | 1477 | 1477 | publish | non valorizzato | pdb_contraindications, pdb_interactions | 3 | 3 |
| 1068 | 1057, 6551 | 1057 | publish | non valorizzato | pdb_side_effects, pdb_contraindications, pdb_interactions | 6 | 6 |
Livelli vuoti: #1279, #1480, #1068. Campi essenziali vuoti: #1279 pdb_contraindications, pdb_interactions; #1480 pdb_contraindications, pdb_interactions; #1068 pdb_side_effects, pdb_contraindications, pdb_interactions. Relazioni complessive: 37; possibili duplicati API: nessuno. Nessuna modifica WordPress. Cumulativo 32/105.


## Terzo gruppo metadati e relazioni, parte B (28/11/2026)
5/5 associazioni candidate confermate, pubblicate. Lettura live atlas-get meta e atlas-relations source_citations. Relazioni non equivalgono a fonti distinte né a verifica delle fonti originali.
| Medicina | Piante candidate nella riga | plant_id effettivo | Stato | Livello registrato | Campi essenziali vuoti | Relazioni | Fonti distinte |
|---|---|---|---|---|---|---|---|
| 6562 | 1057, 6551 | 6551 | publish | non valorizzato | pdb_contraindications, pdb_interactions | 5 | 5 |
| 1369 | 1358 | 1358 | publish | non valorizzato | pdb_interactions | 7 | 7 |
| 639 | 627 | 627 | publish | traditional | pdb_interactions | 6 | 6 |
| 1555 | 1551 | 1551 | publish | traditional | nessuno | 6 | 6 |
| 7808 | 1955 | 1955 | publish | traditional | nessuno | 10 | 10 |
Livelli vuoti: #6562, #1369. Campi essenziali vuoti: #6562 pdb_contraindications, pdb_interactions; #1369 pdb_interactions; #639 pdb_interactions. Relazioni complessive: 34; possibili duplicati API: nessuno. Nessuna modifica WordPress. Cumulativo 37/105.


**A.3 — medicinali, terzo gruppo (28/11/2026):** 10/10 candidati verificati live, tutti pubblicati, plant_id corretto; cumulativo 37/105. 71 relazioni bibliografiche, 71 coppie scheda–fonte distinte; nessun gruppo duplicato segnalato. 5 livelli evidenza vuoti (#1279,1480,1068,6562,1369); 6 schede con campi sicurezza vuoti (#1279,1480,1068,6562,1369,639). Cichorium endivia #1057→medicina #1068 e C. pumilum #6551→#6562 distinti, associazione uno-a-uno confermata. Cicuta #1369: riletto testo e 7 relazioni, avvertenze esplicite su tossicità potenzialmente fatale, urgenza, nessun uso domestico o indicazione terapeutica dimostrata; fonte #7553 Ucar 2026 con limite conferma analitica assente, come da relazione. Metadati evidence_level e interactions vuoti: riserva di allineamento, non assenza di cautele. Henné #7808: testo e 10 relazioni riletti, metadati essenziali completi; G6PD/emolisi, PPD, limiti clinici, sicurezza gravidanza/allattamento e interazioni non definite documentati; fonti #7794,7796,7798,7800,7802,5166 pertinenti secondo localizzatori registrati. Nessuna nuova collazione integrale delle fonti originali, nessuna modifica WP. [Audit medicinali](APPARATI_A3_AUDIT_MEDICINALI_2026-11-28.md). Prossimo quarto gruppo, 68 candidati residui e 94 non candidati; riserve precedenti mantenute.


## Quarto gruppo metadati e relazioni, parte A (28/11/2026)
5/5 associazioni candidate confermate, pubblicate. Lettura live atlas-get meta e atlas-relations source_citations. Relazioni non equivalgono a fonti distinte né a verifica delle fonti originali.
| Medicina | Piante candidate nella riga | plant_id effettivo | Stato | Livello registrato | Campi essenziali vuoti | Relazioni | Fonti distinte |
|---|---|---|---|---|---|---|---|
| 1264 | 1257 | 1257 | publish | non valorizzato | pdb_side_effects, pdb_contraindications, pdb_interactions | 3 | 3 |
| 1241 | 1227 | 1227 | publish | non valorizzato | pdb_interactions | 7 | 7 |
| 1391 | 1383 | 1383 | publish | non valorizzato | pdb_contraindications | 7 | 7 |
| 1795 | 1791 | 1791 | publish | non valorizzato | pdb_tradition, pdb_interactions | 4 | 4 |
| 1493 | 1485 | 1485 | publish | non valorizzato | pdb_contraindications | 5 | 5 |
Livelli vuoti: #1264, #1241, #1391, #1795, #1493. Campi essenziali vuoti: #1264 pdb_side_effects, pdb_contraindications, pdb_interactions; #1241 pdb_interactions; #1391 pdb_contraindications; #1795 pdb_tradition, pdb_interactions; #1493 pdb_contraindications. Relazioni complessive: 26; possibili duplicati API: nessuno. Nessuna modifica WordPress. Cumulativo 42/105.


## Quarto gruppo metadati e relazioni, parte B (28/11/2026)
5/5 associazioni candidate confermate, pubblicate. Lettura live atlas-get meta e atlas-relations source_citations. Relazioni non equivalgono a fonti distinte né a verifica delle fonti originali.
| Medicina | Piante candidate nella riga | plant_id effettivo | Stato | Livello registrato | Campi essenziali vuoti | Relazioni | Fonti distinte |
|---|---|---|---|---|---|---|---|
| 1709 | 1704 | 1704 | publish | traditional | nessuno | 4 | 4 |
| 1823 | 1819 | 1819 | publish | non valorizzato | nessuno | 6 | 6 |
| 4118 | 4117 | 4117 | publish | traditional | nessuno | 11 | 11 |
| 156 | 152 | 152 | publish | traditional | nessuno | 5 | 4 |
| 1759 | 1756 | 1756 | publish | non valorizzato | nessuno | 8 | 8 |
Livelli vuoti: #1823, #1759. Campi essenziali vuoti: nessuno. Relazioni complessive: 34; possibili duplicati API: #156 (1). Nessuna modifica WordPress. Cumulativo 47/105.


**A.3 — medicinali, quarto gruppo (28/11/2026):** 10/10 candidati verificati live, tutti pubblicati, plant_id corretto; cumulativo 47/105. 60 relazioni bibliografiche, 59 coppie scheda–fonte distinte; un gruppo candidato duplicato fico #156, fonte Duke #136 relazioni #18 pp.187–190 (usi/rischi) e #27 p.191 (ricerca preliminare), localizzatori e claim differenti: conservare. 7 livelli evidenza vuoti (#1264,1241,1391,1795,1493,1823,1759); 5 schede con campi sicurezza vuoti (#1264,1241,1391,1795,1493), inoltre #1795 tradizione vuota. Riletti estratti dei testi live: coloquintide #1241 tossicità grave e divieto automedicazione, metanalisi 2022 e rassegna 2026 riportate con limiti; cotone #1795 gossipolo, ipokaliemia, rischi riproduttivi, distinzione olio raffinato/semi e dati LactMed/EFSA con ambito distinto; edera #1823 EMA/HMPC/325716/2017 rev.2, preparazioni definite e cautele, livello evidenza da allineare dopo ricollazione; fava #4118 G6PD/favismo, allattamento e levodopa, campi essenziali presenti. Galbano #1759 metadati sicurezza presenti, evidenza non valorizzata; studio combinato non prova del solo galbano secondo meta. Nessuna modifica WordPress, nessuna nuova collazione integrale fonti originali. [Audit medicinali](APPARATI_A3_AUDIT_MEDICINALI_2026-11-28.md). Prossimo quinto gruppo, 58 candidati residui e 94 non candidati, riserve precedenti mantenute.


## Quinto gruppo metadati e relazioni, parte A (28/11/2026)
5/5 associazioni candidate confermate, pubblicate. Lettura live atlas-get meta e atlas-relations source_citations. Relazioni non equivalgono a fonti distinte né a verifica delle fonti originali.
| Medicina | Piante candidate nella riga | plant_id effettivo | Stato | Livello registrato | Campi essenziali vuoti | Relazioni | Fonti distinte |
|---|---|---|---|---|---|---|---|
| 1810 | 1807 | 1807 | publish | traditional | nessuno | 11 | 11 |
| 6583 | 1966 | 1966 | publish | non valorizzato | pdb_contraindications, pdb_interactions | 7 | 7 |
| 2612 | 2610 | 2610 | publish | traditional | nessuno | 13 | 13 |
| 3330 | 3329 | 3329 | publish | insufficient | nessuno | 9 | 9 |
| 767 | 760 | 760 | publish | traditional | nessuno | 7 | 7 |
Livelli vuoti: #6583. Campi essenziali vuoti: #6583 pdb_contraindications, pdb_interactions. Relazioni complessive: 47; possibili duplicati API: nessuno. Nessuna modifica WordPress. Cumulativo 52/105.


## Quinto gruppo metadati e relazioni, parte B (28/11/2026)
5/5 associazioni candidate confermate, pubblicate. Lettura live atlas-get meta e atlas-relations source_citations. Relazioni non equivalgono a fonti distinte né a verifica delle fonti originali.
| Medicina | Piante candidate nella riga | plant_id effettivo | Stato | Livello registrato | Campi essenziali vuoti | Relazioni | Fonti distinte |
|---|---|---|---|---|---|---|---|
| 2152 | 2140 | 2140 | publish | non valorizzato | nessuno | 6 | 6 |
| 1177 | 1167 | 1167 | publish | non valorizzato | nessuno | 9 | 9 |
| 2529 | 2525 | 2525 | publish | traditional | nessuno | 8 | 8 |
| 604 | 597 | 597 | publish | traditional | pdb_interactions | 9 | 9 |
| 8670 | 1976 | 1976 | publish | non valorizzato | nessuno | 3 | 3 |
Livelli vuoti: #2152, #1177, #8670. Campi essenziali vuoti: #604 pdb_interactions. Relazioni complessive: 35; possibili duplicati API: nessuno. Nessuna modifica WordPress. Cumulativo 57/105.


**A.3 — medicinali, quinto gruppo (28/11/2026):** 10/10 candidati verificati live, tutti pubblicati, plant_id corretto; cumulativo 57/105. 82 relazioni bibliografiche, 82 coppie scheda–fonte distinte; nessun gruppo duplicato segnalato. 4 livelli evidenza vuoti (#6583,2152,1177,8670); 2 schede con campi sicurezza vuoti (#6583 controindicazioni/interazioni, #604 interazioni). Riletti estratti live Retama #2612 (caso Schmid 2006 di intossicazione neonatale, distinzione tossicità/efficacia), Boswellia #767 (non trasferire prove B. serrata), Cistus #1177 (EMA 2025 uso tradizionale delle parti aeree, non resina; dissenso e limiti tossicologici documentati), Pistacia lentiscus #604 (EMA 2016/addendum 2024, distinzione uso tradizionale e consolidato), Linum #8670 (metadati distinguono uso consolidato per stitichezza e tradizionale per lievi disturbi gastrointestinali, rischio ostruzione e ritardo assorbimento; livello da valutare per indicazione). Nessuna nuova collazione integrale delle fonti originali, nessuna modifica WordPress. [Audit medicinali](APPARATI_A3_AUDIT_MEDICINALI_2026-11-28.md). Prossimo sesto gruppo da #8332, 48 candidati residui e 94 non candidati, riserve precedenti mantenute.


## Sesto gruppo metadati e relazioni, parte A (28/11/2026)
5/5 associazioni candidate confermate, pubblicate. Lettura live atlas-get meta e atlas-relations source_citations. Relazioni non equivalgono a fonti distinte né a verifica delle fonti originali.
| Medicina | Piante candidate nella riga | plant_id effettivo | Stato | Livello registrato | Campi essenziali vuoti | Relazioni | Fonti distinte |
|---|---|---|---|---|---|---|---|
| 8332 | 8330 | 8330 | publish | non valorizzato | pdb_tradition, pdb_side_effects, pdb_contraindications, pdb_interactions | 2 | 2 |
| 2125 | 2114, 2129, 2134 | 2114 | publish | non valorizzato | nessuno | 1 | 1 |
| 8342 | 2114, 2129, 2134 | 2129 | publish | non valorizzato | pdb_part, pdb_tradition, pdb_side_effects, pdb_contraindications, pdb_interactions | 1 | 1 |
| 8338 | 2114, 2129, 2134 | 2134 | publish | non valorizzato | pdb_part, pdb_tradition, pdb_side_effects, pdb_contraindications, pdb_interactions | 2 | 2 |
| 7188 | 2000 | 2000 | publish | non valorizzato | pdb_side_effects, pdb_interactions | 5 | 5 |
Livelli vuoti: #8332, #2125, #8342, #8338, #7188. Campi essenziali vuoti: #8332 pdb_tradition, pdb_side_effects, pdb_contraindications, pdb_interactions; #8342 pdb_part, pdb_tradition, pdb_side_effects, pdb_contraindications, pdb_interactions; #8338 pdb_part, pdb_tradition, pdb_side_effects, pdb_contraindications, pdb_interactions; #7188 pdb_side_effects, pdb_interactions. Relazioni complessive: 11; possibili duplicati API: nessuno. Nessuna modifica WordPress. Cumulativo 62/105.


## Sesto gruppo metadati e relazioni, parte B (28/11/2026)
5/5 associazioni candidate confermate, pubblicate. Lettura live atlas-get meta e atlas-relations source_citations. Relazioni non equivalgono a fonti distinte né a verifica delle fonti originali.
| Medicina | Piante candidate nella riga | plant_id effettivo | Stato | Livello registrato | Campi essenziali vuoti | Relazioni | Fonti distinte |
|---|---|---|---|---|---|---|---|
| 469 | 467 | 467 | publish | traditional | nessuno | 4 | 4 |
| 6600 | 6599 | 6599 | publish | non valorizzato | pdb_contraindications, pdb_interactions | 12 | 12 |
| 213 | 212 | 212 | publish | traditional | nessuno | 9 | 9 |
| 7199 | 2006 | 2006 | publish | non valorizzato | nessuno | 6 | 6 |
| 2220 | 2206 | 2206 | publish | non valorizzato | pdb_side_effects, pdb_contraindications, pdb_interactions | 3 | 3 |
Livelli vuoti: #6600, #7199, #2220. Campi essenziali vuoti: #6600 pdb_contraindications, pdb_interactions; #2220 pdb_side_effects, pdb_contraindications, pdb_interactions. Relazioni complessive: 34; possibili duplicati API: nessuno. Nessuna modifica WordPress. Cumulativo 67/105.


**A.3 — medicinali, sesto gruppo (28/11/2026):** 10/10 candidati verificati live, tutti pubblicati, plant_id corretto; cumulativo 67/105. 45 relazioni bibliografiche, 45 coppie scheda–fonte distinte; nessun gruppo duplicato segnalato. 8 livelli evidenza vuoti (#8332,2125,8342,8338,7188,6600,7199,2220); 6 schede con campi sicurezza vuoti (#8332,8342,8338,7188,6600,2220). #8332 tradizione vuota; #8342 e #8338 parte e tradizione vuote; #2125 data revisione vuota. Ninfee: #2114→#2125, #2129→#8342, #2134→#8338, tre associazioni distinte; riletti testi live, Duke White Waterlily pp.303–306 non trasferibile indiscriminatamente, serie clinica di 5 casi su prodotti commerciali blue lotus non certifica taxon, studio animale N. lotus non dimostra sicurezza umana; 1/1/2 relazioni rispettivamente, priorità approfondimento bibliografico e allineamento metadati. Mandragora #6600: testo live con intossicazioni Piccillo 2002, alcaloidi tropanici, assenza prove fertilità e divieto rimedi domestici; controindicazioni/interazioni e livello da allineare. Mentha #7199: testo live distingue trial limitati, rischi pulegone/mentofurano e oli concentrati; mandorlo #469 metadati distinguono semi dolci/amari, cianogenicità, allergenicità e limiti terapeutici. Nessuna modifica WordPress, nessuna nuova collazione integrale fonti originali. [Audit medicinali](APPARATI_A3_AUDIT_MEDICINALI_2026-11-28.md). Prossimo settimo gruppo da #1338, 38 candidati residui e 94 non candidati, riserve precedenti mantenute.
