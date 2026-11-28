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
