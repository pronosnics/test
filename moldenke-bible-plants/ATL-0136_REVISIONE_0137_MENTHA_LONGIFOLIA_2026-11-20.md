# Atlante Piante della Bibbia — Revisione ATL-0136 e pubblicazione ATL-0137
**Data:** 20 novembre 2026  
**Fonte della verità sugli stati di produzione:** WordPress MCP `pdb-atlante`; la roadmap storica GitHub ha codici obsoleti/non allineati. Non ricreare le piante già pubblicate.

## 1. Controllo finale ATL-0136 — *Malva sylvestris* L.
- **Pianta WordPress ID 2000**, `publish`: https://piantedellabibbia.altervista.org/piante/malva-sylvestris-giobbe-malluch-halamuth/
- Immagine in evidenza #2002 confermata.
- Riconfrontati Moldenke `Plants of the Bible` pp. 53–54, Tristram `Natural History of the Bible` pp. 465–466, Post `Flora` p. 178, Zohary `Plants of the Bible` p. 99, Duke `Handbook` pp. 266–269.
- Distinzione conservata: `ḥallāmût` di Giobbe 6:6 (eventuale Malva/Alcea) ≠ `mallûaḥ` di Giobbe 30:4 (più verosimilmente Atriplex halimus).
- Nessuna lacuna sostanziale riscontrata nel testo. Corretta su WordPress una sintassi Markdown rimasta dentro un paragrafo HTML: il giudizio su Moldenke ora usa `<strong>` anziché letterali `**`. Nessuna alterazione del significato.
- Audit SEO aggiornato: `issues=[]`.

## 2. Nuova ATL-0137 — *Mentha longifolia* (L.) L.
- **ID WordPress #2006**, status **publish**: https://piantedellabibbia.altervista.org/piante/menta-selvatica-mentha-longifolia-bibbia/
- Nomenclatura attuale Kew POWO: `Mentha longifolia (L.) L.` (1759), basionimo `Mentha spicata var. longifolia L.` (1753); genere Lamiaceae, ordine Lamiales. https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:450735-1 .
- Il nome storico `Mentha sylvestris L.` usato da Post/Tristram è sinonimo del taxon `Mentha longifolia subsp. longifolia` secondo Kew: https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:451224-1 . Moldenke usa aut. `(L.) Huds.`, da non sostituire all'autoria corrente `(L.) L.`.
- Identificazione biblica **plausibile ma non univoca**. Greco `ἡδύοσμον` (`hēdýosmon`) in Matteo 23:23 e Luca 11:42 = 'menta' genericamente; non nome scientifico. Matteo menziona menta, aneto e cumino; Luca menta e ruta. L'aneto greco `ἄνηθον` non è automaticamente `Pimpinella anisum`, nonostante certe traduzioni antiche.
- Esodo 12:8 e Numeri 9:11 (erbe amare) **non nominano la menta**: alcune attribuzioni pasquali sono tradizioni storiche e non citazioni botaniche dirette.

### Fonti fonte per fonte effettivamente verificate
1. **Moldenke**, `Plants of the Bible` (1952), voce 133, pp. **139–140**: `M. longifolia (L.) Huds.` come candidata preferita, specie lungo corsi d'acqua, confronti con `M. arvensis` e `M. sativa`, usi culinari e tradizione di menta calpestata sui pavimenti. Il testo non dimostra specie precisa dei Vangeli.
2. **Post**, `Flora of Syria, Palestine and Sinai` (1896), p. **614**, sotto `Mentha sylvestris L.`: fiori lillacini, spighe terminali, foglie quasi sessili da ovate a lanceolate e ambiente di fossi/argini. Presenta varietà locali e confronta `M. aquatica` e `M. pulegium`.
3. **Tristram**, `Natural History of the Bible` (1867), pp. **471–472**, «Mint», sotto `Mentha sylvestris` storica: distinzione da menta d'orto `M. sativa`, usi alimentari e pasquali riportati come tradizione.
4. **Zohary**, `Plants of the Bible` (1982), p. **88**, «Mint»: considerava `M. longifolia` la più comune fra le tre specie descritte per Israele; habitat umidi, fiori rosa-violetti, possibile coltivazione domestica, usi popolari.
5. **Duke**, `Handbook of Medicinal Plants of the Bible` (2008), pp. **273–275**, «Wild Mint (Biblical Mint)»: ammette che il nome «biblical mint» comporta un'interpretazione; confronta tre specie tramite caratteristiche del calice e dei verticillastri. Liste farmacologiche non sono prove cliniche o bibliche.
6. **Dafni–Böck**, `Medicinal plants of the Bible—revisited` (2019), tabella 2, p. **7**: `Mentha spp.` (genere, **non** identificazione di `M. longifolia` in via esclusiva). Testimonianze storiche/medicinali separate dal testo canonico.
7. **Kew/POWO**, autorità tassonomica e areale nativo (Libano–Siria, Palestina e Sinai). Studi moderni: `Chemotypes and Their Stability in Mentha longifolia (L.) L.—A Comprehensive Study of Five Accessions`, Plants 2021, 10, 2478, DOI 10.3390/plants10112478; `Patterns of molecular and morphological variation in Mentha subgen. Mentha`, DOI 10.1093/botlinnean/boaf074. Linea guida EMA/HMPC su pulegone/mentofurano per uso erboristico concentrato.
8. **Balfour** (`Plants of the Bible: Trees and Shrubs`, 1857) non offre un'identificazione diretta della menta nella monografia controllata; non citato decorativamente sul sito. **Grilli Caiola–Guarrera–Travaglini:** pagine pertinenti non ancora disponibili per consultazione; integrazione futura, senza pretendere controllo esaustivo non effettuato.

### Tavola botanica, upload e verifiche
- File finale: `ATL-0137_Mentha_longifolia_tavola_botanica.webp`, **1024×1536 px**, **492358 byte**, SHA-256 **`9cb302a1bc31408fc4abb7db567fdca391a1cfba458ae984f27278ed99c6deed`**.
- WebP originale elaborato localmente e passato in Base64 via ponte temporaneo privato di Libreria. **21 blocchi**: 20×24000 byte più blocco finale da 12358 byte; ogni blocco verificato con `next_offset` e `remaining_bytes`.
- Plugin invariato: `pdb/atlas-media-start` → `pdb/atlas-media-chunk` sequenziale → `pdb/atlas-media-finish(set_featured:true,replace_featured:false)`. SHA-256 di WordPress restituito **identico** all'originale.
- WordPress Media **#2008**, featured image **#2008**, `pdb_plate_media_id=2008`. URL: https://piantedellabibbia.altervista.org/wp-content/uploads/2026/11/tavola-botanica_mentha-longifolia-atl-0137.webp
- Alt text registrato; provenienza attribuita a tavola digitale originale illustrativa, non immagine d'erbario storico.
- SEO title/meta description/keyword/OpenGraph impostati; audit finale `pdb/seo-audit` dopo la pubblicazione: **`issues=[]`**. Link interno alla scheda già pubblicata del cumino #1485.
- Il file ponte Base64 temporaneo è stato eliminato dalla Libreria (spostato nel cestino) dopo Media OK.
- **QA grafica indipendente desktop/mobile non certificata**: apertura pubblica nel browser web non riuscita per limiti di accessibilità del browser, mentre la lettura WordPress MCP conferma testo, featured e SEO.
- Nessuna creazione di bibliografia ornamentale, nessuna prescrizione medica su oli essenziali: la variabilità di chemotipi e la possibile presenza di pulegone/mentofurano sono distinte dalla cucina.

## 3. Passo successivo
Prossima specie in ordine effettivo: **ATL-0138 — Morus nigra L.**, gelso nero, da aprire solo dopo l'usuale revisione e anti-duplicati. La roadmap master storica riporta numeri differenti (`Mentha longifolia` come ATL-0142): conservare gli ID WordPress verificati e riconciliare senza generare duplicati.
