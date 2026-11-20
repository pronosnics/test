# ATL-0098 — *Elaeagnus angustifolia* L. — olivagno | CHIUSURA 20 novembre 2026

## Esito verificato
- **Una sola nuova specie**; WordPress `pdb_plant` **#1723**, stato **publish** riaccertato via `pdb/atlas-get` dopo la pubblicazione.
- URL: https://piantedellabibbia.altervista.org/piante/olivagno-elaeagnus-angustifolia-l-albero-dellolio-e-bibbia/
- Verificato catalogo `pdb/atlas-list`: prima della bozza nessuna altra scheda `Elaeagnus`. La pianta non è `Olea europaea` (#129).
- Featured **Media #1725**, PNG originale digitale **540×720**, dimensione trasferita 389721 byte, SHA-256 confermato dal server **`c3382a1fe2d5434d68e1046bdd40aa99088058e0ea699032289a627fc52e36fe`**; URL https://piantedellabibbia.altervista.org/wp-content/uploads/2026/11/olivagno-elaeagnus-angustifolia-tavola-botanica.png .
- ALT verificato nel Media Library: «Tavola botanica originale dell'olivagno Elaeagnus angustifolia: foglie strette argentee, fiori a quattro lobi e quattro stami, frutti ovali e dettagli anatomici.» Featured verificato anche in `pdb/get-content` (`featured_media=1725`); campo `pdb_plate_media_id=1725`; provenienza dichiarata come illustrazione originale interpretativa.
- La **prima tavola generata e scartata** mostrava lobi fiorali soprannumerari e **non è stata caricata**. L'immagine caricata è una nuova illustrazione digitale schematica d'ispirazione ottocentesca; non è fotografia o preparato d'erbario.
- Metadati SEO salvati con `pdb/update-content` (titolo, description, focus keyword, OpenGraph) e dati botanico-biblici completi; ultimo `pdb/seo-audit` dopo **publish**: **`issues=[]`**.
- **Limite aperto, non falsamente chiuso:** test visuale indipendente del browser su desktop/mobile e screenshot non effettuati; interrogazione esterna del permalink e dell'immagine mediante web non riuscita, benché WordPress MCP confermi publish, URL e media. Nessuna attestazione Lighthouse.
 
## Fonti collazionate e decisioni
1. **H. N. e A. L. Moldenke, *Plants of the Bible* (1952), voce 98, pp. 97–98** (PDF della copia consultata pp. 95–96 nell'indicizzazione precedente); Supplementary Notes, voce 98: lettera di Trevor del 13 giugno 1951 sulla forma *ʿēṣ šemen* e dubbio di Zohary sull'areale storico palestinese. Non attribuire alla nota un numero di pagina non ricontrollato sull'originale.
2. **J. A. Duke, *Duke's Handbook of Medicinal Plants of the Bible* (2008), pp. 178–181**, PDF bibliotecario pp. 204–207; varianti di Neemia 8:15, sinonimi storici, frutti, usi popolari; Duke specifica che l'identificazione con l'oleastro è ricevuta da altri studiosi. Distinguere segnalazioni folkloriche/attività sperimentali e trattamenti clinici.
3. **H. B. Tristram, *The Natural History of the Bible* (1867), «Oil Tree», pp. 371–372**, PDF libreria pp. 383–384: sostegno storico a *Elaeagnus angustifolia*, confronto con *Balanites aegyptiaca*, restringimento storico dei luoghi in cui quest'ultima cresce. Non trasformare l'opinione in prova archeobotanica.
4. **Kew POWO:** https://powo.science.kew.org/taxon/323646-1 , nomenclatura accettata, Elaeagnaceae, sinonimi *E. orientalis*, *E. hortensis*, *E. angustifolia* var. *orientalis*, areale nativo «Lebanon–Syria» e «Palestine» come categorie floristico-geografiche moderne, non prova biblica.
5. **Burke Herbarium (University of Washington):** https://burkeherbarium.org/imagecollection/taxon.php?Taxon=Elaeagnus+angustifolia ; calice/perianzio tubulare a 4 lobi, assenza di petali separati, 4 stami; foglie alterne argentate. Base morfologica dell'illustrazione.
6. **PubMed PMID 27330526:** https://pubmed.ncbi.nlm.nih.gov/27330526/ ; studio randomizzato 2016 su estratto per osteoartrosi del ginocchio; un singolo trial non giustifica indicazioni generalizzate né dosaggi.

**Altre fonti del registro considerate:** Zohary (*Plants of the Bible*) e Dafni–Böck 2019 cercati senza passaggio diretto su *Elaeagnus* individuato; Balfour 1857 contiene «oil-tree [olive-tree]» in contesto diverso, non una specifica identificazione dell'olivagno; Post 1896 non ha fornito nelle ricerche testuali un passo specifico verificato su *Elaeagnus/Eleagnus*; Grilli Caiola–Guarrera–Travaglini e gli studi Dafni–Levy–Lev 2005 / Frumin 2024 non hanno prodotto per questo taxon una citazione pertinente accertata. **Esclusi dalla bibliografia della scheda:** nessuna pagina, sinonimia o identificazione inventata.

## Apparato WordPress pubblicato e relazioni
- Pianta #1723 (publish).
- Termine ebraico **#1726** (publish), «ʿēṣ šemen», senza Strong univoco inventato.
- Fonte bibliografica mirata **#1727** (publish), Tristram «Oil Tree» pp. 371–372; riutilizzate le fonti generali preesistenti Moldenke **#135** e Duke **#136**.
- Medicina storica **#1728** (publish), con distinzione dagli studi clinici.
- Passi preesistenti riutilizzati e non duplicati: Neemia 8:15 **#319**, Isaia 41:19 **#531**; interno a Olivo **#129**, Mirto **#525**.
- Relazioni `passage_terms` **#211–212**, `identifications` **#245–246** con stato **controversa**, `source_citations` **#962–966** (Moldenke, Duke, Tristram e apparato). Link interni alle 3 nuove pagine di supporto inseriti nel corpo con 3 sostituzioni verificate.
- Nessun passo aggiunto per 1 Cronache 27:28 o Michea 6:7: sono menzioni testuali generiche e non attestazioni della specie; 1 Re 6:23, 31–33 discusso nel testo e nei metadati senza relazione botanica certa.

## Controllo omissioni e criterio editoriale
Verificati: specie moderna contro le forme storiche, foglie/squame, perianzio 4-lobato, 4 stami, frutti e legno, Neemia/Isaia/Tempio, ipotesi *Balanites*, geografia antica vs moderna, alimentazione storica vs terapia, RCT clinico, rinvii interni, fonte precisa per pagina, SEO e media. Restano senza esito controlli visivi reali; non alterano lo stato effettivo `publish`.

## Stato del prossimo ciclo, senza sovrapposizioni
- **ATL-0099** *Epidermophyton rubrum* è **fungo** e non specie botanica: segnare «appendice organismi/non nuova pianta», non creare doppione come pianta.
- **ATL-0100** *Eragrostis megastachya* (Koeler) Link: **prima voce vegetale da esaminare nel prossimo task orario**. È sinonimo storico del taxon Kew-accettato ***Eragrostis cilianensis* (All.) Vignolo ex Janch.**, secondo POWO e USDA GRIN (verifiche preliminari). Controllare ancora anti-duplicati WP, Moldenke voce 13 p. 28 e l'intera bibliografia pertinente. Creare una sola scheda canonica se assente, non due post per sinonimi.
