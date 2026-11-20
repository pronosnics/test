# Atlante Biblico — Audit ATL-0137 e pubblicazione ATL-0138 — 20 novembre 2026

## Identificativi verificati
- **ATL-0137 — Mentha longifolia (L.) L.**, pianta WP **#2006**, pubblicata https://piantedellabibbia.altervista.org/piante/menta-selvatica-mentha-longifolia-bibbia/, featured #2008, SEO audit **0 issues**.
- Revisione finale: nome accettato e basionimo confermati con Kew POWO; `Mentha sylvestris` L. sinonimo di `M. longifolia` subsp. `longifolia`; Matteo 23:23 e Luca 11:42 citano la menta (greco `hēdýosmon`) a livello generale, non `M. longifolia` con certezza. Moldenke, Post, Zohary, Tristram, Duke e Dafni–Böck già integrati. Nessuna nuova omissione sostanziale da correggere. Resta una QA visuale esterna desktop/mobile non certificata.

## ATL-0138 — Morus nigra L., gelso nero
- **WordPress #2011** · stato **publish** · URL https://piantedellabibbia.altervista.org/piante/gelso-nero-morus-nigra-sicamino-bibbia/
- Non esisteva una precedente scheda `Morus nigra` in `pdb_plant` (ricerche Morus, Morus nigra, gelso, mulberry, sycamine): la ricerca fulltext richiamava invece `Ficus sycomorus`, WP #367, che è **specie distinta**. 
- Kew POWO accetta `Morus nigra` L. (1753); areale **nativo W/SW Iran**; Libano–Siria e Mediterraneo sono territori di introduzione. https://powo.science.kew.org/taxon/854688-1
- Nomi vicini da non confondere: gelso bianco `Morus alba` (principale per bachi da seta); `Ficus sycomorus` sicomoro (Luca 19:4); `Morus rubra` Nord America.

### Confronto fonte per fonte
1. Moldenke, *Plants of the Bible* 1952, voce 134, **pp. 140–141**: sicamino di Luca 17:6, more in 1 Mac 6:34, differenza dal sicomoro, `bekaim` dei «mulberry trees» di Samuele/Cronache oggi non attribuibile a `Morus`; storia seta/coltivazione.
2. Balfour, *The Plants of the Bible: Trees and Shrubs* 1857, *Sycamine-Tree*, **pp. 33–34** (PDF pagine 59–60): identificazione tradizionale con `M. nigra`, ragione linguistica antica (Dioscoride, Galeno, Celso, Sibthorpe), distinzione da `Ficus sycomorus`; frutto multiplo e non mora di rovo. Balfour, sezione *Aspen or Trembling Poplar*, **PDF p. 35**, distingue i `bekaim`.
3. Tristram, *The Natural History of the Bible* 1867, *Sycamine* **pp. 396–397** (PDF 408–409): gelso nero e sicamino; coltivazione di gelso bianco e nero, succo usato per bevande, foglie per bachicoltura.
4. Post, *Flora of Syria, Palestine and Sinai* 1896, **p. 739**: `Morus nigra` e `Morus alba`, differenze fra infruttescenze quasi sessili e acidule del primo e infruttescenze più peduncolate del secondo, villosità, piante coltivate.
5. Zohary, *Plants of the Bible* 1982, **p. 71**: distingue `mórōn` 1 Mac 6:34 (senso di gelso), `sykáminos` Lc 17:6 (attribuzione probabile ma non dimostrata) e ipotesi filologica `mesukkān` in Is 40:20 (incerta). Indicazioni originarie caspiche superate dalla circoscrizione moderna Kew; descrizione antica della dioicità non esclusiva.
6. Duke, *Handbook of Medicinal Plants of the Bible* 2008, **pp. 276–278**: 1 Mac 6:34, traduzioni di `bekaim`, usi alimentari, distinzioni di specie; elenco etnobotanico **non presentato come evidenza clinica**.
7. Dafni–Böck (2019) PDF controllato: nessun riscontro puntuale specifico rinvenuto per `M. nigra`; **non inserito** in bibliografia decorativa.
8. Grilli Caiola–Guarrera–Travaglini: inserire solo quando saranno disponibili e verificabili le pagine pertinenti.

### Filologia essenziale
- `1 Maccabei 6:34`: greco `μόρων` = more di gelso, **genere Morus**, ma non dimostra esclusivamente `M. nigra`. Riscontro interlineare https://openbible.info/labs/apocrypha-interlinear/1Macc.6
- `Luca 17:6`: `συκάμινος`, tradizionale gelso nero, grado **probabile non certo**; NON è il `συκομορέα` di Luca 19:4 (`Ficus sycomorus`).
- `Isaia 40:20`: l'associazione con il gelso è una **congettura etimologica di Zohary**, non una menzione botanica nella traduzione normale.
- `2 Samuele 5:23–24`, `1 Cronache 14:14–15`: `בְּכָאִים` (`bekā’īm`) non prova veri gelsi; candidati storici aspen/pioppi e alberi balsamiferi.
- Seta in Ezechiele 16:10,13 e Apocalisse 18:12: **non prova coltivazione locale di Morus nigra**.

### Ricerca scientifica moderna
- Kew POWO nativo W/SW Iran e sinonimie.
- World Flora Online descrizione di `M. nigra`: possibili individui monoici **o** dioici (non solo dioici); foglie cuoriformi e ruvide; infruttescenze multiple da fiori femminili (non bacche singole, non `Rubus`).
- Citogenetica: `Morus nigra` tipicamente 22x / 2n=308, studi 2023 https://pmc.ncbi.nlm.nih.gov/articles/PMC10503058/ .
- Composti antocianici e polifenolici: review 2022 https://pmc.ncbi.nlm.nih.gov/articles/PMC8777750/ ; nessuna attribuzione di cura antitumorale a un frutto sulla base di test preclinici.

### Tavola illustrata e prova tecnica di upload
- WebP locale `/mnt/data/ATL-0138_Morus_nigra_tavola_botanica.webp`, **1024×1536 px**; peso **587412 byte**; SHA-256 `34a69bc2e353c37b794772259260445110fae7cd7f2e87c7022998bbad33738c`.
- Procedura consolidata `pdb/atlas-media-start` → `pdb/atlas-media-chunk` 24.000 byte raw per blocco → `pdb/atlas-media-finish(set_featured:true)`. **25/25 blocchi**, ultimo 11412 byte, `next_offset=587412`, `remaining_bytes=0`.
- **SHA restituito dal server identico** all'originale locale: `34a69bc2e353c37b794772259260445110fae7cd7f2e87c7022998bbad33738c`.
- Media Library **#2013**, featured image **#2013**, `pdb_plate_media_id=2013`, ALT e provenienza registrati. Media URL https://piantedellabibbia.altervista.org/wp-content/uploads/2026/11/tavola-botanica_morus-nigra-atl-0138.webp
- SEO title/meta/keyword OG salvati; `pdb/seo-audit` **issues=[]** su scheda **pubblicata** #2011.
- Il file Base64 temporaneo `atl0138_morus_nigra_ponte_base64_TEMP_20261120.txt` è stato eliminato dalla Libreria (cestino); non conservare nei repository.
- Il controllo grafico indipendente desktop/mobile resta separato: WordPress MCP ha verificato i dati, ma non è stata certificata una QA grafica browser esterna.

## Numerazione
- Numerazione **attiva** della sequenza di lavoro: **ATL-0138** per `Morus nigra`; ID WP **2011**.
- La *master roadmap* storica `PIANTE_DELLA_BIBBIA_MASTER_SPECIFICHE_E_ROADMAP.md` contiene ancora il vecchio codice **ATL-0143** per la stessa specie, marcato da creare: **non creare un duplicato** da questo vecchio record. Necessario riallineamento di tutta la roadmap, non sostituzione ingenua dei codici di una sola riga.

## Prossima voce
Verificare ordine della sequenza e duplicati prima di definire ATL-0139; nel vecchio indice compare `Myrtus communis` ma risulta già pubblicato, quindi non duplicare la specie.
