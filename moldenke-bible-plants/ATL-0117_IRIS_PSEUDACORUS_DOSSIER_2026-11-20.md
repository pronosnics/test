# ATL-0117 — *Iris pseudacorus* L. (giaggiolo acquatico) | PUBBLICATA — 20 novembre 2026

## WordPress e SEO
- Canonical WordPress plant #1897, `publish`: https://piantedellabibbia.altervista.org/piante/giaggiolo-acquatico-iris-pseudacorus-l-il-giglio-di-osea-e-la-botanica-delle-paludi/
- CPT `pdb_plant`, taxa metadata nome, authorship L., accepted, Kew authority, morfologia, habitat, distribuzione, nomi vernacolari, parti, usi non medicinali, storia, overview biblica, stato revisionata.
- SEO title, description, focus keyword, OpenGraph, campi biblici `bible_references`, `bible_passages`, `sources`, Moldenke pp43/117–118 inseriti. Audit MCP `pdb/seo-audit(limit=100)`: ID1897 **issues=[]** prima della pubblicazione. Publish verificato con `pdb/update-content`. Nessuna certificazione Lighthouse o rendering desktop/mobile.
- Controllo anti-duplicati `pdb/atlas-list(search:Iris)`: nessuna scheda autonoma Iris pseudacorus, solo occorrenze nel testo di schede altre.

## Fonti specifiche e collazione
1. **Moldenke & Moldenke (1952), *Plants of the Bible***, voce 113, **pp.117–118**, e pagina 43 per la voce *lily*, confrontato originale e traduzione italiana della Libreria. Ipotesi <em>I. pseudacorus</em> per **Osea 14:5**, **Siracide 39:14**, **Siracide 50:8**. Campione dell'erbario di Post attribuito alla pianura Hula e segnalazioni Antilibano/Damasco; Evenari disconosceva l'indigenato regionale e suggeriva altri iris scuri, come *I. bismarckiana*. Moldenke non pretende certezza della corrispondenza: è espressione poetica e «shushan» è vocabolo comune ampio. Susa in Ester/Neemia è luogo.
2. **James A. Duke (2008), *Duke's Handbook of Medicinal Plants of the Bible***, voce «Yellow Flag», **pp.214–216** (PDF Libreria pp.240–242), figura 1.54 p.215. Conferma che Moldenke propone la specie per Osea ma **Zohary non è d'accordo**. Nomi popolari e usi storici, coloranti, attività e impieghi etnografici NON equivalgono a clinica o sicurezza.
3. **Michael Zohary (1982), *Plants of the Bible***: **non** attribuire a Zohary un'identificazione positiva di *I. pseudacorus*; dissenting judgement riferito da Duke p214. Non citare pagina Zohary non verificata.
4. **Kew POWO**, https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:438992-1, nome accettato e nativo dall'Europa al Caucaso, Mediterraneo fino all'Iran, Palestina e Libano/Siria inclusi. Pubblicazione in Linneo 1753, *Species Plantarum* p38. Alternative *Iris bismarckiana* accettata distintamente: https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:438414-1 .
5. **Flora of Israel and adjacent areas**, https://flora.org.il/en/plants/IRIPSE/ : presenza documentata piana Hula, rara Alta Galilea, specie classificata localmente rara/minacciata/protetta. Non supporta certezza del referente biblico.
6. **World Flora Online** https://www.worldfloraonline.org/taxon/wfo-0000783754: descrizione fiori gialli, tre tepali esterni riflessi, tre interni eretti, frutto a capsula.
7. **USGS NAS** https://nas.er.usgs.gov/queries/factsheet.aspx?speciesid=1115: specie palustre rizomatosa, colonizzazione e rischio invasivo fuori areale.
8. **Post *Flora of Syria, Palestine and Sinai***: Moldenke cita suo erbario per campione di Hula. Non è stata localizzata una voce testuale primaria esplicita `I. pseudacorus` nella ricerca PDF di questo ciclo, pertanto NON attribuire pagina inventata a Post. **Tristram**, **Balfour**, **Dafni–Böck** e **Grilli Caiola–Guarrera–Travaglini** non collazionati integralmente su questa specie; non dichiarare riscontro negativo esaustivo.

## Interpretazione Bibbia
- **Osea 14:5**, nota: versificazione può differire (14:6 in alcune edizioni). Fiore simil-giglio e radici; non una determinazione di specie.
- **Siracide 39:14, 50:8**: l'immagine di gigli vicini alle acque in 50:8 è ecologicamente congruente, ma non esclude altri fiori.
- `shushan/shoshannah` non nome di specie singola; Susa/Shushan di Ester e Neemia è toponimo.
- In assenza di attestazione certa, **non creare relazioni `identifications` dirette** da tutti questi passi alla pianta come certe.
- Interazione con schede `Anemone coronaria` e `Hyacinthus orientalis`: conservare le ipotesi concorrenti e diversità di contesto.

## Tavola e trasferimento
- Tavola originale stile XIX sec, senza etichette, fondo avorio; foglie lanceolate a spada, fiori gialli con tepali esterni penduli con marcature brune/porpora, tepali interni verticali, rizoma e semi illustrativi. Arte digitale NON erbario.
- File WebP **1024×1536**, **301546 byte**, SHA256 `5775c296b292613a758bcf6ed8b83cea16e6791091df59e25cf9ff6d86835d87`.
- Ponte Base64 testuale temporaneo nella Libreria, **13 blocchi sequenziali** attraverso `pdb/atlas-media-start`, `pdb/atlas-media-chunk` e `pdb/atlas-media-finish(set_featured:true)`; checksum server uguale, media WordPress **#1898**, featured **#1898**; ALT descrittivo.
- Media URL: https://piantedellabibbia.altervista.org/wp-content/uploads/2026/11/tavola-botanica_iris-pseudacorus-atl-0117.webp

## Relazioni WP
- `source_citations` #1037 per Moldenke #135 pp117–118; #1038 Duke #136 pp214–216.
- Testo + taxon + SEO + media, audit strutturale OK, WP `publish`. Non fare QA grafica esterna se non effettivamente testata.

## Stato
- ATL-0117 pubblicata in un solo ciclo dopo chiusura ATL-0116.
- Automazione oraria **SOSPESA**, senza aggiornamenti allo scheduler.
