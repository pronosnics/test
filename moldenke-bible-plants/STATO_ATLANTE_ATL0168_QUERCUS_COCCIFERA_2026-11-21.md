# ATL-0168 — *Quercus coccifera* L. (quercia spinosa) — revisione e bozza WordPress del 21/11/2026

## Stato backend
- **PIANTA WP #2464 DRAFT, NON PUBLISHED**, titolo: «Quercia spinosa — Quercus coccifera L., kermes e interpretazioni bibliche». Corpo HTML originale **11.914 caratteri**, preparato da letture dirette.
- **Fagaceae term #26** assegnata e riletta, botanical specialist **16/17 chiavi** (il campo `pdb_plate_media_id=0`, nessun featured), legacy `plant` **11/11**, Yoast setter/getter titolo/descrizione/focus `Quercus coccifera`, `noindex=false`, `nofollow=false`.
- **Medicina storica WP #2476 DRAFT** 16/16 campi, `pdb_evidence_level=traditional`, distingue tannini di Quercus da pigmento del kermes **derivante dall'insetto**; nessuna cura/dose clinica.
- Fonti nuove **PUBLISHED**: Kew Q.coccifera #2466; Kew Q.pseudococcifera #2467; Kew Q.calliprinos #2468; Trees and Shrubs Online Q.coccifera #2469; EUFORGEN Q.coccifera #2470. Riutilizzate Moldenke #135, Duke #136, Zohary #1554, Post #2041, Tristram #2042, Balfour #2043 e Dafni–Böck #2069.
- **17 source_citations #1525–1541**, di cui #1525–1537 pianta e #1538–1541 medicina; claim e pagine precise.
- Reimpiegati quote Isaia2:13 #2457, Zaccaria11:1–2 #297, Osea4:13 #569, Giudici6:11 #572; e nomi ebraici esistenti #563 ʾallôn, #562 ʾēlôn, #561 ʾēlâ. 4 identifications #336–339 CONTROVERSE, correzione #340 del lemma su Giudici6:11.

## PROBLEMA DI QUALITÀ APERTO E NON OCCULTATO
Identificazione **#339** (pianta #2464, quote Giudici6:11 #572) usa per errore `term_id=562` ʾēlôn H436. Dal backend il termine pertinente al versetto è `term_id=561` ʾēlâ H424 (già legato al versetto dalla relazione #259). È stata creata l'identificazione corretta **#340** con `term_id=561`, ma **#339 è ancora persistente** e deve essere **eliminata**, non lasciata come informazione contraddittoria. `pdb/atlas-link` espone soltanto CREAZIONE di relazioni e non update/delete. **GATE QA NON SUPERATO**, NON PUBLISH fino a rettifica; vietato aggirare via modifica plugin, database non autorizzato o riscrivere ID fittizi. Non dichiarare questo errore «risolto» finché #339 non è effettivamente assente al reread.

## Tassonomia Kew, sinonimi e distinzione critica ATL-0189
- Kew accepted *Quercus coccifera* L. (Fagaceae), IPNI 295963-1: https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:295963-1 .
- Kew synonyms *Quercus calliprinos* Webb (295898-1) e Q.coccifera subsp.calliprinos; Zohary tratta separatamente nome *Q.calliprinos* della regione levantina; differenze est-ovest discusse anche da EUFORGEN.
- Le matrici legacy dello stesso Moldenke (1952, p.193) mostrano **«172. Quercus coccifera var. pseudococcifera (Desf.) Boiss.»**, che chiarisce ATL-0189 tronca. **Kew oggi accetta *Quercus pseudococcifera* Desf. quale specie autonoma** https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:296626-1 e registra il sinonimo varietale con combinazione formalmente (Desf.) **A.DC.** https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:77289424-1 . Il «Boiss.» è resoconto di Moldenke/vecchia fonte e va verificato come autoria storica, NON sostituire la forma Kew con essa. Taxon separato NON ancora pubblicato, futuro candidato; non dare per certa presenza levantina dell'entità occidentale Kew in base all'uso di `pseudo-coccifera` da Tristram e Post.

## Fonti collazionate DIRETTAMENTE, pagine stampate (e note)
- **Moldenke & Moldenke 1952, pp.193–197:** p193 lista di 5 voci `Quercus` (170 aegilops, 171 coccifera, 172 var.pseudococcifera, 173 ilex, 174 lusitanica); p195 colorante del kermes da insetto e alternative per querce bibliche; p196–197 vecchi nomi e grandi querce del Levante.
- **Post 1896, p739:** `Q.coccifera`, foglie sempreverdi spinose, ghiande e cupole, varietà `genuina`, `integrifolia`, `calliprinos`, `pseudococcifera` nel senso ottocentesco. **p740:** descrive separatamente `Q.aegilops` (= tema ATL-0167).
- **Zohary 1982, pp108–109:** `Quercus ithaburensis` Tabor oak (caducifoglia) e `Q.calliprinos` evergreen, radici, foglie piccole coriacee spinose, amenti e fiori femminili, vento; discute genericità dei nomi allon/elon vs elah. NON prova specie dei singoli versetti.
- **Tristram 1867 p319:** storica cocciniglia `Coccus ilicis`/kermes su quercia levantina e pigmento; <strong>non</strong> attribuire il colore direttamente alla corteccia/ghiande né identificare automaticamente una specie di insetto moderna. **pp368–371:** grande quercia sempreverde nominata `Q.pseudo-coccifera` e «Oak of Abraham», denominazioni storiche non equivalenti automaticamente a `Q.pseudococcifera` attuale; valonia `Q.aegilops` nelle pp370–371 è ALTRA QUERCIA.
- **Balfour 1857 pp19–20:** confronta `Q.ilex`, `Q.coccifera`, `Q.aegilops`, ebraico allon/elah e querce bibliche, senza prova unica.
- **Duke 2008 pp367–369:** intestazione Tabor oak `Q.ithaburensis` ++, distingue Zohary `Q.calliprinos` evergreen, menziona kermes p368, molte attività mediche `OTHER OAKS` non specifiche né clinicamente dimostrate per `Q.coccifera`. `++` riguarda Tabor oak, **non** attribuirlo a coccifera.
- **Dafni & Böck 2019 pp1–2:** solo metodi delle piante medicinali bibliche, **NON** cita direttamente la specie nel passo/medicina.
- **Kew POWO** (3 voci), **Trees and Shrubs Online** (morfologia, discussione taxon) **EUFORGEN** (genetica est-ovest, habitat). **Grilli Caiola NON LETTO** (non accessibile); Settanta e nomi linguistici verse-specific NON ancora collazionati, evitare falso certainty.

## Bibbia e medicina
Is2:13, Zac11:2, Os4:13 e Giudici6:11 tutti **CONTROVERSA**; altri passi Amos2:9, Gen35:8, Gios24:26 e colori Es25:4, Lev14:4–6, Is1:18 citati criticamente nel testo senza specifica identificazione della specie. `tôlaʿat šānî` colore scarlatto: collegamento storico con insetto kermes ospite della quercia, **NON prova** che i testi nominino `Quercus coccifera`. Meta di medicina storica #2476 16/16, nessuna terapia clinicamente certa.

## Media e pubblicazione NON possibili
- Preflight Libreria del 21/11/2026 ore18:02:38 Europe/Rome con VERO WebP file di altro taxon ha restituito **`HTTP403 Library LPE indexing requires a trusted producer`**. È il rigetto di file/provenienza, non necessariamente downtime globale.
- Cooldown per lo STESSO produttore sino a 22/11/2026 ore18:02:38 Europe/Rome, salvo cambiamento reale e documentato delle condizioni; non aggirare con PUT o altra cartella; non produrre immagine non archiviabile.
- WebP originale per ATL-0168 NON generata, SHA non applicabile, `featured=0`, `pdb_plate_media_id=0` => gate media fallito. Inoltre QA relation #339 errata. **PIANTA DRAFT, MEDICINA DRAFT, NO PUBLISHED**.
- QA_VISIVA_FRONTEND_NON_CERTIFICATA; niente automazione attiva.

## Prossimi passi MANUALI
1. Eliminare in modo autorizzato la relation #339 errata e verificare assenza, mantenendo #340 corretta; no plugin/theme changes.
2. Quando un vero WebP da trusted producer passa preflight, creare tavola ORIGINALE senza alcuna scritta, salvare originale Libreria, trasferire Base64 chunk SHA server=local, featured, ALT; pubblicare solo dopo QA completo e SEO riletta.
3. Solo dopo chiusura due bozze botaniche #2455 e #2464 passare alla distinta ATL-0189 *Q.pseudococcifera* accettata Kew o altra coda. NON attivare task senza richiesta.
