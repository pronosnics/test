---
project: "Piante della Bibbia — Atlante integrato"
document_type: "specifica-editoriale-e-roadmap"
version: "1.0"
created: "2026-11-17"
last_catalog_check: "2026-11-17"
reference_plugin: "pdb-atlante 0.1.8"
source_registry:
  moldenke: "Moldenke.pdf"
  duke: "(ebook) Duke's Handbook of Medicinal Plants of the Bible by James A. Duke.pdf"
  crosswalk: "atlante_catalogo_piante_2026.csv"
  indexes:
    - "atlante_moldenke_230.csv"
    - "atlante_duke_176.csv"
status: "specifiche approvate come punto di partenza; tassonomia e pagine da ricontrollare voce per voce"
---

# Piante della Bibbia — MASTER editoriale e piano di sviluppo

> **Documento guida permanente.** Ogni nuova scheda dell'Atlante deve partire da qui, essere verificata sui libri originali, riportare le fonti con indicazione delle pagine ed essere collegata al database esistente. Questo file non sostituisce le fonti originali: ne governa l'uso.
>
> **Regola fondamentale:** sviluppare **schede ampie, ricche e complete**, usando **tutto il materiale pertinente realmente presente** nelle voci di **H. N. e A. L. Moldenke, *Plants of the Bible* (1952)** e di **James A. Duke, *Duke's Handbook of Medicinal Plants of the Bible* (2008)**, integrandolo con verifica tassonomica e scientifica moderna. **Non riempire sezioni con informazioni inventate né sacrificare contenuti utili per rispettare un limite di parole.**

## 0. Stato iniziale, consistenza e avvertenze del censimento

| Indicatore | Valore di lavoro | Significato |
|---|---:|---|
| Voci numerate Moldenke | **230** | Numerazione dell'indice storico; non tutte sono specie botaniche. |
| Voci Duke | **176** | Voci del catalogo, non 176 nuove specie in aggiunta a Moldenke. |
| Gruppi unificati preliminari | **281** | Censimento di lavoro da normalizzare, **non** 281 taxa scientificamente validati. |
| Gruppi associati a entrambi i libri | **117** | Abbinamenti preliminari, suscettibili di correzioni per sinonimia o identificazioni errate. |
| Candidati a scheda botanica | **252** | Da rivedere singolarmente con POWO/WFO; possibile ulteriore deduplicazione. |
| Organismi non botanici / appendice | **29** | Batteri, funghi, licheni o altri organismi: NON pubblicarli come piante. |
| Specie botaniche online | **3** | Olivo #129, Vite #143, Fico #152. |
| Priorità fondamentali da sviluppare | **44** | Primo gruppo di nuove schede botaniche. |
| Altri candidati da sviluppare | **205** | Ricerca e revisione successive. |
| Voci Moldenke non leggibili nella copia | **3** | Voci **77, 78, 105**; recuperare rispettivamente pp. **82–83** e **106–107**. |

**Fotografia WordPress:** sito `https://piantedellabibbia.altervista.org/`; plugin Atlante 0.1.8; al controllo precedente risultavano 3 piante, 11 schede di passi biblici e 4 nomi antichi pubblicati. *La fotografia non si aggiorna automaticamente*: prima di ogni fase confrontare gli ID con WordPress tramite `pdb/atlas-health`, `pdb/atlas-list` e `pdb/atlas-list-links`. Non creare una seconda scheda quando esiste già quella della specie.

**Fonte del censimento:** file di lavoro `atlante_catalogo_piante_2026.csv` e indici `atlante_moldenke_230.csv`, `atlante_duke_176.csv` ricostruiti dalle copie fornite. L'indice è un **registro preliminare**: nomi storici, nomi comuni, abbinamenti e pagine devono essere ricontrollati prima della pubblicazione. La colonna “pagina” indica la **pagina stampata** riportata nel catalogo, non necessariamente la pagina del PDF.

## 1. Principi non negoziabili

1. **Un solo grande Atlante, cinque modelli:** Pianta (`pdb_plant`), Passo biblico (`pdb_quote`), Nome antico (`pdb_term`), Usi medicinali (`pdb_medicine`), Fonte (`pdb_source`). Un unico database di relazioni; tre porte d'ingresso per il lettore: **Bibbia, Botanica, Medicina**.
2. **Una scheda botanica canonica per specie valida**, non per variante italiana, nome storico, sinonimo o prodotto. Oliva e olio d'oliva non duplicano la specie `Olea europaea`.
3. **Ricchezza prima della brevità:** trattare tutti gli aspetti pertinenti presenti in Moldenke e Duke, con sintesi originali sostanziose, spiegazioni, confronti, precisazioni, passi e collegamenti. Non è consentito riassumere un'intera voce lunga in tre righe.
4. **Nessuna invenzione:** se il libro non cita un fatto, non attribuirglielo; se non cita una specie o un determinato passo, registrare “non documentato nella fonte consultata”. Distingue fatti nel testo, proposte di studiosi, ricostruzioni moderne e ipotesi.
5. **Tassonomia e filologia verificabili:** distinguere nome storico, accettato e sinonimi; registrare le alternative botaniche e un livello di certezza contestuale, senza fonderle in una “certezza” artificiale.
6. **Passi biblici accurati:** citazioni **letterali**, con versione identificata, riferimenti e numerazione esatti, trascrizione confrontata con l'edizione dichiarata. Commento redazionale in lingua contemporanea separato dalle virgolette.
7. **Le fonti non sono ornamentali:** ogni dato botanico, identificazione storica, impiego tradizionale e valutazione terapeutica deve avere fonte e posizione (pagina, voce, sezione, URL e data per banche dati).
8. **Duke è una fonte etnobotanica:** riporta tradizioni, attività, indicazioni, dosi storiche e rischi; **non** è una prescrizione sanitaria né automaticamente prova clinica attuale.
9. **Tavole originali verificabili:** estetica delle cromolitografie botaniche di Otto Wilhelm Thomé, ma non attribuire a Thomé immagini digitali create oggi. Anatomia corretta e provenienza trasparente.
10. **WordPress prima della diffusione:** nuove schede in bozza, collegamenti completi, controllo SEO e mobile, revisione botanica e sanitaria, quindi pubblicazione. Non pubblicare automaticamente liste vuote o schede incomplete.

## 2. Politica della lunghezza e livello di approfondimento

Le lunghezze sono **obiettivi qualitativi**, non numeri da raggiungere artificialmente:

| Tipologia | Copertura desiderata quando la documentazione la supporta | Regola |
|---|---|---|
| Pianta principale (fonti ricche) | Orientativamente **2.000–4.500+ parole** di studio originale complessivo, oltre alle pagine dei passi e medicinali collegate | La completezza documentale prevale sul limite. |
| Pianta secondaria (fonte breve) | Quanto occorre per esaurire le informazioni attestabili, eventualmente 800–1.800 parole | Non inventare argomenti per allungare. |
| Passo biblico importante | Testo originale autorizzato + commento di **500–1.500+ parole**, se supportato | Comprendere contesto, termini, identità botanica e relazioni. |
| Nome antico | Voce filologica di **300–1.000+ parole** secondo i dati disponibili | Lingua, scrittura, traslitterazione, forme, passi, etimologie solo se attestate. |
| Usi medicinali documentati | Analisi dettagliata delle fonti Duke + confronto moderno, anche **1.000–2.500+ parole** | Evidenza, parte usata, sicurezza e distinzione tradizione/clinica. |

**Per ogni nuova specie**, completare una *matrice di copertura delle fonti*: non serve riportare in pubblico ogni nome comune globale o ogni studio secondario, ma **ogni sezione rilevante consultata** va esaminata, selezionata criticamente e, se esclusa, motivata nel registro interno. Questo è il significato operativo di “usare tutto il materiale che abbiamo”.

## 3. Protocollo sulle fonti: Moldenke e Duke

### 3.1 Moldenke (1952): lettura completa della voce

- [ ] Identificare numero di voce, **pagine stampate di inizio/fine** e eventuali **note supplementari** in altre parti del volume.
- [ ] Riportare nomenclatura usata dagli autori, famiglia secondo il libro, eventuali sinonimi e relative divergenze moderne.
- [ ] Estrarre **tutti i passi biblici pertinenti** e classificarli: citazione diretta, allusione, traduzione incerta, nome di prodotto/legno/resina anziché pianta.
- [ ] Studiare nomi ebraici, greci e altre lingue antiche **esattamente come presentati**; verificare forme e grafie su strumenti filologici prima di pubblicare.
- [ ] Registrare **identificazioni alternative**, opinioni di autori precedenti, motivi dell'incertezza, specie respinte dagli autori e grado di fiducia attuale.
- [ ] Recuperare i dati su portamento, ambiente, areale, coltivazione, storia economica, rituale, ornamentale o simbolica presenti nella voce.
- [ ] Conservare in note interne riferimenti a illustrazioni, edizioni o traduzioni e altre fonti citate dagli autori; verificare prima di aggiungerle alla bibliografia pubblica.
- [ ] Consultare le appendici o note integrative per la stessa specie: non fermarsi all'incipit della voce.
- [ ] Annotare i vuoti della copia disponibile e non costruire artificialmente le parti mancanti.

### 3.2 Duke (2008): leggere le sezioni della voce

Duke stesso descrive nell'introduzione il formato del volume. La sua scala è **soggettiva** e non va convertita automaticamente in indicazione clinica moderna.

| Sezione Duke | Che cosa registrare nell'archivio | Pubblicazione |
|---|---|---|
| **Lead line / Synonyms** | Nome inglese, nome scientifico storico, famiglia e simboli editoriali di sicurezza | Confrontare la nomenclatura moderna; spiegare la natura storica del punteggio. |
| **NOTES** | Confronto delle traduzioni bibliche, storia, aneddoti documentati, controversie sull'identificazione | Commento originale con versetti attribuiti e riscontri. |
| **COMMON NAMES** | Nomi geografici e linguistici pertinenti, con fonte e lingua | Evitare liste indiscriminate di 100 nomi, conservare gli altri nelle note strutturate. |
| **ACTIVITIES** | Attività riportate e riferimento del livello attribuito nel libro | Classificare come tradizionale, sperimentale o clinica solo dopo revisione della prova. |
| **INDICATIONS** | Condizioni per cui la pianta è stata riportata in uso, punteggio e fonte originaria | NON trasformare in indicazioni approvate. |
| **DOSAGES / FNFF** | Dosi o pratiche storiche, distinzione alimento/medicinale, codici FNFF | Conservare come dato storico e di ricerca; niente ricette terapeutiche o inviti all'autotrattamento. |
| **DOWNSIDES** | Tossicità, effetti avversi, gravidanza, interazioni e limiti segnalati | Mettere la sicurezza **prima** della narrazione medicinale; integrare fonti recenti. |
| **EXTRACTS / chimica** | Estratti, composti, parte botanica, attività di laboratorio e riferimenti | Separare in vitro/animale/uomo; non estendere risultati da un estratto all'intera pianta. |

**Codici di Duke (da *Format of This Book*):** `f` = uso folklorico; `1` = sostegni preliminari, inclusi laboratorio/animali/epidemiologia; `2` = alcuni preparati o estratti approvati da organismi citati dall'autore oppure sperimentati clinicamente; `3` = rara prova clinica sull'erba stessa. **Questi codici NON sono la scala regolatoria EMA e NON provano la sicurezza odierna.** I simboli `X`, `+`, `++`, `+++` nella *lead line* sono **valutazioni soggettive di sicurezza dell'autore**, non autorizzazioni all'impiego. La voce *Olive Oil* non produce una nuova specie botanica diversa da *Olive*.

**Diritti:** Duke è un libro protetto da copyright. Pubblicare sintesi autonome e citazioni brevissime, quando necessarie, con attribuzione. **Non** copiare o tradurre integralmente capitoli nel sito. Le nostre traduzioni di studio sono materiale di lavoro, non prova di autorizzazione alla riproduzione pubblica.

### 3.3 Fonti integrative contemporanee

- **Kew — Plants of the World Online (POWO)** o **World Flora Online (WFO)**: nome accettato, autore, famiglia, sinonimi, areale con data di consultazione.
- **Flora regionali, pubblicazioni botaniche e risorse filologiche**: morfologia, fenologia, areale storico, lessico antico e traduzioni difficili.
- **EMA/HMPC, WHO, schede di farmacovigilanza, studi peer-reviewed**: prove e rischi per **preparazioni e parti botaniche precise**. Non asserire che esista una monografia EMA per ogni pianta.
- **Bibbia Diodati storica, edizione precisamente identificata** (o altra traduzione di cui siano verificate le autorizzazioni): fonte del versetto **letterale**; se si usa l'ebraico o il greco, indicare l'edizione e verificare il testo.
- Ogni fonte moderna ha **URL, titolo, ente/autore, data di accesso e oggetto esatto** dell'affermazione.

## 4. Anatomia obbligatoria di ogni grande scheda botanica (`pdb_plant`)

### Blocco introduttivo — orientamento rapido

1. Titolo **breve** in pagina (es. **Olivo**); `H1` unico, nome scientifico *Olea europaea* L., famiglia botanica e sinonimi nel corpo. Titolo SEO completo separato dal titolo visuale.
2. **Tavola botanica originale** e didascalia trasparente sulla provenienza.
3. Sintesi originale (3–5 righe): perché la specie è interessante per Bibbia, botanica e storia medica.
4. Accessi rapidi a **Bibbia · Botanica · Medicina · Fonti**; eventuale avviso d'incertezza se l'identificazione è discussa.

### Corpo enciclopedico — non saltare i capitoli documentabili

- **Identità e classificazione:** nome accettato, autore, famiglia, sinonimi storici di Moldenke/Duke, differenze con specie affini e identificazioni alternative.
- **Descrizione botanica approfondita:** habitus, radici/fusto/corteccia, foglie, fiori, infiorescenze, frutti/semi, resina/lattice, ciclo biologico, impollinazione dove pertinente, caratteri diagnostici.
- **Distribuzione e ambiente:** areale spontaneo vs coltivato/introdotto, clima, suolo, ecologia e adattamenti; evitare di attribuire la Palestina antica a una specie per il solo fatto che oggi vi cresce.
- **Storia e coltivazione:** archeobotanica se documentata, commercio, materiali, agricoltura, calendario stagionale, usi alimentari, domestici e rituali.
- **La pianta nella Bibbia:** panoramica dei principali passi, uso letterale e simbolico, distinzione fra pianta, frutto, olio, legno, resina, spezia o prodotto trasformato.
- **Passi collegati:** card strutturate col riferimento, citazione breve verificata e collegamento alla scheda `pdb_quote`, evitando testi duplicati nel corpo principale.
- **Nomi antichi:** ebraico, greco e altre lingue solo quando attestati, traslitterazione motivata, varianti e link ai lemmi `pdb_term`.
- **Storia delle identificazioni:** confronto tra Moldenke, Duke e altri studiosi; classificazione **consolidata / probabile / controversa / non identificabile** con argomenti pro e contro.
- **Usi etnobotanici e medicinali:** sintesi critica della scheda `pdb_medicine` pertinente, senza duplicarne tutto il testo; collegamenti incrociati per parte e preparazione.
- **Confronto ragionato Moldenke–Duke:** ciò che entrambi condividono, ciò che uno aggiunge, dove divergono o usano nomi e versioni bibliche differenti.
- **Curiosità documentate e approfondimenti:** soltanto dati sostenuti dalle fonti, ad esempio colore/dimensione dei frutti, coltivazione, storia culturale, botanica comparata.
- **Bibliografia analitica:** libro, anno, nome della voce, pagine **precise**, URL di fonti moderne; registrazione strutturata in `pdb_source` e `source_citations`.
- **Esplora le piante correlate:** soltanto affinità reali (stesso passo, stessa parola, specie alternativa, famiglia botanica), senza duplicare schede.

**Regola UX:** la scheda pubblica mostra il riassunto e le card essenziali, gli **approfondimenti lunghi restano espandibili**, indicizzabili e navigabili; non eliminare testo per abbreviare la pagina. Su mobile conservare tavola leggibile, ancore accessibili e bibliografia ordinata.

## 5. Modelli collegati e relative specifiche

### 5.1 `pdb_quote` — scheda biblica autonoma

Obbligatori: `book`, `chapter`, `verse_start`, `verse_end`, versione/edizione usata, testo **completo dove verificato e legalmente riproducibile**, riferimenti e numerazione, contesto letterario, termini antichi pertinenti, traduzioni alternative, interpretazione botanica, specie **distinte** con stato di identificazione, letture di Moldenke/Duke, bibliografia e rimandi. Non associare arbitrariamente un nome ebraico a un testo greco del Nuovo Testamento.

**Precisione:** una versione può numerare diversamente rispetto a un'altra (es. il grappolo di Escol in Numeri 13); conservare riferimento dell'edizione mostrata, indicare l'equivalenza. **Mai inserire tra virgolette una parafrasi scritta da noi.** Usare eventuale ebraico/greco solo dopo controllo filologico delle forme flessive. Una pagina per passo narrativo può riferirsi a 2–3 specie senza essere duplicata (es. Giudici 9:8–13).

### 5.2 `pdb_term` — nome antico

Lingua e sistema di scrittura, lemma originale Unicode, vocalizzazione/diacritici, traslitterazione, significati contestuali, differenze da parole simili, forme flesse, occorrenze bibliche confermate, eventuali ambiguità botaniche, fonti lessicali e link alle identificazioni. Le card delle specie sono **deduplicate per specie**, pur mantenendo più relazioni nel database. Per l'ebraico `lang=he`, `dir=rtl`; niente traslitterazioni inventate.

### 5.3 `pdb_medicine` — usi tradizionali e medicina

Una scheda per pianta/parte/ambito quando serve, non per ogni malattia citata. In apertura **avviso di sicurezza**; poi parte botanica, preparazione menzionata nelle fonti, testimonianze di Duke e altri autori, studio delle attività/indicazioni come dato storico, composti e ipotesi, ricerca in vitro/animale/uomo, eventuale monografia EMA, effetti avversi, controindicazioni, interazioni e bibliografia. Nessuna dose terapeutica o ricetta operativa proposta come consiglio. I prodotti vegetali non sono automaticamente equivalenti (olio ≠ foglie; uva ≠ estratto di foglie; frutto di fico ≠ lattice).

### 5.4 `pdb_source` — fonte bibliografica

Scheda per opera, monografia o database autorevole: autori, titolo completo, anno/edizione, editore, identificatore o URL, diritti, data di consultazione, capitolo/voce, pagine di utilizzo, limitazioni e rettifiche. Tutte le citazioni della stessa opera si agganciano a **un'unica fonte** con localizzazioni diverse.

## 6. Standard delle tavole botaniche — *Flora von Thomé*

### 6.1 Linguaggio grafico richiesto

- **Illustrazione botanica scientifica originale** in stile cromolitografia naturalistica ottocentesca, ispirata all'estetica di Otto Wilhelm Thomé, **non** finto facsimile storico.
- **Sfondo avorio** o carta naturale chiara, palette verde salvia/oliva, marroni e ocra discreti; dettagli anatomici accurati, non immaginari.
- Tavola verticale in rapporto **3:4**, proposta master **1600 × 2133 px** o superiore; margini tranquilli per visualizzazione su cellulare.
- **Composizione:** pianta completa o ramo caratteristico dominante; dettagli separati per foglie, boccioli, fiori, frutti, semi, struttura del fiore e sezione del frutto se pertinenti. Se le parti non sono coesistenti nella stessa stagione, indicare la composizione come tavola scientifica, non fotografia di un singolo momento.
- **Fedeltà botanica:** disposizione delle foglie, forma del fiore, numero di petali/stami quando diagnostico, colore dei frutti, anatomia e portamento devono essere verificati. Gli errori dell'immagine generata richiedono rigenerazione/correzione.
- **No etichette incorporate inventate:** nome, autore botanico, provenienza, periodo e didascalia in HTML della pagina; niente scritte pseudolatine nell'illustrazione.
- **Tipi di immagini:** tavola principale, dettagli tecnici opzionali, eventuale confronto fra specie simili; fotografica solo come materiale aggiuntivo con licenza verificata.

### 6.2 Prompt master per creare la tavola (personalizzare, poi verificare)

> Crea una tavola **botanica scientificamente accurata** di **[NOME ACCETTATO + AUTORE]**, famiglia **[FAMIGLIA]**, ispirata alle cromolitografie ottocentesche della *Flora von Deutschland, Österreich und der Schweiz* di Otto Wilhelm Thomé, ma come **illustrazione digitale originale contemporanea, non riproduzione di una tavola storica**. Fondo avorio uniforme, texture cartacea lieve, luce naturale, dettagli finissimi. Raffigura **[PORTAMENTO/RAMO]**, foglie **[DISPOSIZIONE E FORMA VERIFICATA]**, fiori **[CARATTERI E STAGIONE]**, frutti **[FORMA/COLORE]**, semi e sezioni anatomiche **[DETTAGLI]** negli spazi laterali inferiori, mantenendo proporzioni corrette. Tavola verticale 3:4; soggetto interamente nell'inquadratura con margini, adatta a una scheda mobile. Nessun testo, nessun logo, nessuna cornice moderna, nessuna specie estranea, nessun elemento decorativo non botanico.

**Prima della generazione:** raccogliere una *scheda di anatomia verificata* con almeno una fonte botanica moderna; se la pianta è poco conosciuta, procurare fotografie/figure documentarie, non inventare la morfologia. **Dopo la generazione:** revisione visiva di uno o più particolari (foglie, fiori, frutti, organi sessuali), confronto con fonti, approvazione editoriale e salvataggio della provenienza.

### 6.3 File, accessibilità e diritti

| Output | Standard |
|---|---|
| Master | PNG ad alta risoluzione con copie di lavoro preservate internamente. |
| Web | WebP ottimizzato, generalmente **1600×2133** o dimensioni equivalenti; controllare qualità visiva e peso, non imporre un limite che renda il testo botanico sfocato. |
| Nome file | `tavola-botanica_[genere-specie].webp`, es. `tavola-botanica_punica-granatum.webp`. |
| ALT | Testo botanico utile, es. `Tavola botanica del melograno con rami, foglie, fiori e frutto sezionato`. |
| Didascalia | Nome scientifico completo + «Tavola botanica digitale originale realizzata per Piante della Bibbia, ispirata alle cromolitografie botaniche ottocentesche». |
| Crediti | Autore/strumento, data, versione, riferimento anatomico, licenza applicabile; non dichiarare «illustrazione di Thomé» se non lo è. |
| WordPress | Caricare in Media Library, impostare `featured_image`, collegare a `pdb_plate_media_id`, verificare responsive e `srcset`. |
| Varianti | Se esiste una vera tavola storica pubblicata legittimamente, citare opera, archivio e licenza; non confondere con quella digitale originale. |

**Tavole già disponibili:** Olivo, Vite, Fico. Non rigenerarle senza motivo e non sostituire le immagini già pubblicate automaticamente.

## 7. Pipeline operativa per sviluppare UNA nuova specie

1. **Selezione dall'indice**: scegliere l'ID `ATL-XXXX` dalla roadmap, verificare se specie o sinonimo esistente e controllare gli ID WordPress prima di creare qualcosa.
2. **Inventario fonti**: leggere **interamente** le pagine della voce Moldenke e quelle Duke, note integrative, rimandi e bibliografia; segnare pagina iniziale/finale realmente consultata. Se una fonte non tratta la pianta, non inventarne il contributo.
3. **Normalizzazione**: nome storico, accettato, famiglia, sinonimi, nomi comuni; registrare esattamente quale proposta deriva da Kew e quale da Moldenke/Duke. Contrassegnare `taxon_status=unresolved` se serve.
4. **Mappa biblica**: estrarre ogni passo pertinente, distinguere passo effettivo, allusione, traduzione alternativa e identificazione respinta; verificare il testo dell'edizione, citare versetti integralmente solo se consentito.
5. **Matrice Moldenke/Duke**: checklist dei capitoli effettivamente letti; segnalare riscontri, differenze e lacune.
6. **Scrittura ampia**: stendere descrizione scientifica, storia, cultura, interpretazioni, confronto delle opere e bibliografia; nessuna riproduzione estesa delle pagine protette da copyright.
7. **Medicina**: per ogni materiale citato, parte vegetale, tipo di preparazione e livello dell'evidenza; fonti moderne e avvisi di sicurezza; niente prescrizioni.
8. **Tavola originale**: scheda anatomica → generazione/stilizzazione → controllo botanico → WebP/ALT/credito → caricamento.
9. **Bozze WordPress**: creare/aggiornare `pdb_plant`, `pdb_quote`, `pdb_term`, `pdb_medicine`, `pdb_source` solo dove occorrono; non duplicare voci già online.
10. **Relazioni MCP**: associare termini e passi, identità contestuali con livello di certezza, fonte e localizzazione (`pdb/atlas-link`). Pubblicare **solo dopo** verifica delle relazioni (`pdb/atlas-list-links`).
11. **SEO e UX**: titolo SEO breve, meta descrizione originale, H1 unico, breadcrumb, immagini, schema/bibliografia, link interni; mobile come riferimento di qualità; nessun duplicato fra campi strutturati e testo espandibile.
12. **Revisione e pubblicazione**: controllo editoriale, filologico, botanico, clinico e dei diritti; `pdb/seo-audit`; pubblicazione WordPress; ricontrollo pubblico desktop/mobile e aggiornamento dello stato nel presente Markdown.

**Stati standard dell'editoria:** `DA_CREARE` → `FONTI_DA_LEGGERE` → `FONTI_ESTRATTE` → `NOME_DA_VERIFICARE` → `IN_REDAZIONE` → `TAVOLA_DA_CREARE` → `BOZZA_WP` → `REVISIONE` → `PUBBLICATA` → `AGGIORNAMENTO`. Stati alternativi: `IDENTIFICAZIONE_CONTROVERSA`, `ACCORPATA_A_[ID]`, `APPENDICE`, `BLOCCATA_FONTE_MANCANTE`.

## 8. Checklist prima di pubblicare (copiarla nella singola scheda)

- [ ] Libro Moldenke consultato integralmente nelle pagine disponibili + note supplementari; localizzazioni registrate.
- [ ] Libro Duke consultato integralmente **se presente**; tutti i blocchi utili controllati; punteggi interpretati correttamente.
- [ ] Lista dei passi biblici verificata per libro/capitolo/versetto e per edizione; citazioni autenticamente letterali.
- [ ] Fonti storiche, moderna tassonomia e interpretazione autonoma chiaramente distinte.
- [ ] Nome scientifico accettato o incertezza tassonomica documentata; nessuna scheda duplicata.
- [ ] Citazioni bibliografiche con pagina, voce, URL moderni e accesso.
- [ ] Approfondimenti ampi, informativi e non ripetitivi; commento critico Moldenke/Duke presente.
- [ ] Usi medicinali separati per parte, preparazione, tradizione, prova, rischi; nessuna promessa terapeutica.
- [ ] Tavola botanica approvata, WebP, ALT, didascalia originale e provenienza registrata.
- [ ] Relazioni WordPress incrociate verificate in entrambe le direzioni (pianta ↔ passo ↔ termine ↔ fonte ↔ medicina).
- [ ] Nessun testo di Duke/Moldenke riprodotto lungamente senza diritti; nessun credito immagine scorretto.
- [ ] H1 unico, SEO nei campi di Studio Manager e Yoast dove previsto, immagine in evidenza, CTA, mobile/desktop e accessibilità.
- [ ] Salvataggio bozza → rilettura → pubblicazione → verifica pubblica → aggiornamento roadmap.

## 9. Modello da duplicare per una scheda botanica

```markdown
# [NOME ITALIANO BREVE] — [GENERE specie AUTORE]

- **ID roadmap:** ATL-XXXX
- **Stato:** DA_CREARE
- **ID WordPress:** —
- **Nome accettato:** [DA VERIFICARE CON KEW/POWO]
- **Famiglia:** [DA VERIFICARE]
- **Sinonimi Moldenke/Duke:** [TESTO STORICO, NON ANCORA VALORE ACCETTATO]
- **Moldenke:** voce [N.], pp. [STAMPATE], note supplementari [PAGINE]
- **Duke:** voce «[NOME INGLESE]», pp. [STAMPATE], sezioni presenti [ELENCO]
- **Tavola botanica:** DA_CREARE / IN_REVISIONE / APPROVATA, file + provenienza
- **Identificazioni controverse:** sì/no, alternative e motivi
- **Editor / revisioni:** [DATA, AUTORE]

## Sintesi iniziale
[4–6 righe originali]

## Identità e tassonomia
[Nome accettato, famiglia, autore, sinonimi storici]

## Descrizione botanica approfondita
[Portamento, tronco, foglie, fiori, frutti, semi, riproduzione, specie simili]

## Habitat, areale e coltivazione
[Separare spontaneo / coltivato / storia]

## Usi alimentari, artigianali, economici e rituali
[Informazioni pertinenti con fonti]

## La pianta nei testi biblici
[Tabella passi | traduzione | nome antico | identificazione | fonte | stato]

## Nomi antichi e traduzioni
[Per ogni termine, lingua, forma, passi e fonte]

## Interpretazioni botaniche e alternative
[Consolidata/probabile/controversa/non determinabile, argomenti]

## Lettura completa di Moldenke
[Parafrasi originale di tutti i punti rilevanti, pagine e obiezioni]

## Lettura completa di Duke
[Notes / Common Names / Activities / Indications / Dosages storici / Downsides / Extracts, solo sezioni presenti]

## Evidenza scientifica e sicurezza
[Fonti recenti, parte, preparazione, limiti, avvertenze]

## Confronto Moldenke – Duke
[Accordi, differenze, problemi di identificazione, elementi aggiunti]

## Tavole e immagini
[Prompt con anatomia verificata, file WebP, ALT, attribuzione]

## Bibliografia con pagine
[Autore, opera, anno, voce, intervallo preciso, URL accessi]

## Link e record WordPress
[IDs pianta, passi, lemmi, medicina, fonti, collegamenti MCP]

## Revisione e pubblicazione
- [ ] Copertura fonti completa
- [ ] Filologia verificata
- [ ] Tassonomia verificata
- [ ] Medicina/sicurezza verificate
- [ ] Tavola approvata
- [ ] SEO / audit / mobile / desktop
- [ ] Pubblicata e roadmap aggiornata
```

## 10. Esempio di dossier futuro prioritario: Melograno

**Nome di lavoro:** Melograno — *Punica granatum* L. **Moldenke:** voce da p. **189** secondo l'indice di lavoro. **Duke:** «Pomegranate» da p. **362**. La scheda dovrà essere estesa quanto consentono i due capitoli e le fonti moderne: morfologia di fiori e frutti, semi e arilli, coltivazione, valore ornamentale e religioso, passi biblici pertinenti e traduzioni, usi storici di diverse parti botaniche, sicurezza ed eventuali prove moderne specifiche; tavola verticale con ramo, foglie, fiori e melograno intero e sezionato. **Non attribuire a queste pagine fatti non ancora verificati nel testo originale.**

## 11. Catalogo di sviluppo completo (281 gruppi, stato modificabile)

**Istruzioni di aggiornamento:** cambiare `[ ]` in `[x]` solo per `PUBBLICATA`; per gli stati intermedi sostituire il campo `Stato`. Dopo l'unificazione tassonomica, mantenere l'ID storico `ATL-XXXX` e registrare `ACCORPATA_A_ATL-XXXX` invece di cancellare la riga. Pagine e associazioni sono **punti di ingresso alla ricerca**, non citazioni editoriali già verificate. Per le 3 specie pubblicate mantenere il post ID esistente.

**Legenda fonte:** `M` = *Moldenke, Plants of the Bible* (1952), numero voce e pagina stampata; `D` = *Duke's Handbook...* (2008), pagina stampata. `—` = opera non censita per quella voce (non significa che non ne parli altrove). `?` = richiede revisione. I nomi comuni lasciati vuoti nel catalogo di origine sono indicati come `da definire`.

### 11.1 Già online — revisione e ampliamento continuo

Queste schede sono **pubblicate**, non da ricreare. Incrementare i contenuti, conservare permalink, ID WP e relazioni.

- [x] **ATL-0105 · *Ficus carica*** — Fico; **M voce 104, p. 103 · D p. 187**; fonte: Moldenke + Duke; **stato: PUBBLICATA**; WP: `152`.

- [x] **ATL-0161 · *Olea europaea*** — Olivo; **M voce 150, p. 157 · D p. 306; 309**; fonte: Moldenke + Duke; **stato: PUBBLICATA**; WP: `129` · ⚠ Più voci nella stessa fonte; Duke tratta separatamente il prodotto Olive Oil: non creare una seconda scheda botanica..

- [x] **ATL-0276 · *Vitis vinifera*** — Vite; **M voce 226, p. 240 · D p. 496**; fonte: Moldenke + Duke; **stato: PUBBLICATA**; WP: `143`.



### 11.2 Priorità 1 — 44 specie principali da realizzare

Prima ondata di sviluppo: fonti botaniche e bibliche ricche, alta riconoscibilità e buoni percorsi interconnessi. L’ordine alfabetico qui sotto **non** implica l’ordine di lavorazione.

- [ ] **ATL-0015 · *Allium cepa*** — Cipolla; **M voce 24, p. 33 · D p. 16**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0017 · *Allium sativum*** — Aglio; **M voce 23, p. 32 · D p. 23**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0019 · *Aloe vera*** — Aloe; **M — · D p. 30**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0022 · *Anastatica hierochuntica*** — Rosa di Gerico; **M voce 29, p. 38 · D p. 36**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0024 · *Anemone coronaria*** — Anemone; **M voce 32, p. 41 · D p. 37**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0028 · *Aquilaria agallocha*** — Legno di aloe (aquilaria); **M voce 36, p. 47 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0041 · *Balanites aegyptiaca*** — Dattero del deserto; **M voce 47, p. 55 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—` · ⚠ Possibile corrispondenza con Balanites aegyptiacus; controllare sinonimia/identificazione.

- [ ] **ATL-0045 · *Boswellia sacra*** — Incenso (Boswellia); **M — · D p. 62**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0047 · *Brassica nigra*** — Senape nera; **M voce 51, p. 59 · D p. 65**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0053 · *Capparis spinosa*** — Cappero; **M — · D p. 76**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0055 · *Cedrus libani*** — Cedro del Libano; **M voce 55, p. 66 · D p. 84**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0060 · *Ceratonia siliqua*** — Carrubo; **M voce 60, p. 72 · D p. 90**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0065 · *Cinnamomum aromaticum*** — Cassia; **M voce 68, p. 75 · D p. 104**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0066 · *Cinnamomum verum*** — Cannella; **M voce 69, p. 76 · D p. 108**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0070 · *Citrullus colocynthis*** — Coloquintide; **M voce 73, p. 78 · D p. 115**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0072 · *Citrus medica*** — Cedro (agrume); **M — · D p. 121**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0074 · *Commiphora gileadensis*** — Balsamo di Galaad; **M — · D p. 128**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0076 · *Commiphora myrrha*** — Mirra; **M — · D p. 131**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0079 · *Coriandrum sativum*** — Coriandolo; **M voce 80, p. 86 · D p. 138**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0082 · *Crocus sativus*** — Zafferano; **M voce 85, p. 87 · D p. 143**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0088 · *Cuminum cyminum*** — Cumino; **M voce 88, p. 89 · D p. 155**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0093 · *Cyperus papyrus*** — Papiro; **M voce 91, p. 92 · D p. 172**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0106 · *Ficus sycomorus*** — Sicomoro; **M — · D p. 191**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0109 · *Gundelia tournefortii*** — Gundelia; **M voce 30, p. 38 · D p. 201**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0113 · *Hordeum vulgare*** — Orzo; **M voce 110, p. 111 · D p. 205**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0118 · *Juglans regia*** — Noce; **M voce 114, p. 119 · D p. 216**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0131 · *Lens culinaris*** — Lenticchia; **M voce 127, p. 128 · D p. 245**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0132 · *Lilium candidum*** — Giglio bianco; **M voce 112, p. 114 · D p. 247**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0141 · *Mandragora officinarum*** — Mandragora; **M voce 132, p. 137 · D p. 269**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0147 · *Myrtus communis*** — Mirto; **M voce 138, p. 143 · D p. 279**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0149 · *Nardostachys grandiflora*** — Nardo; **M — · D p. 285**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0170 · *Phoenix dactylifera*** — Palma da dattero; **M voce 157, p. 169 · D p. 325**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0176 · *Pistacia lentiscus*** — Lentisco; **M voce 161, p. 177 · D p. 339**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0177 · *Pistacia terebinthus*** — Terebinto; **M voce 162, p. 178 · D p. 341**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—` · ⚠ Numerazione originale;.

- [ ] **ATL-0184 · *Prunus dulcis*** — Mandorlo; **M voce 28, p. 35 · D p. 355**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [x] **ATL-0186 · *Punica granatum*** — Melograno; **M voce 169, pp. 189–191 · D pp. 362–367**; fonte: Moldenke + Duke + Kew + NCCIH; **stato: BOZZA_WP (tavola WebP pronta, caricamento Media in attesa)**; WP: `212` (pianta), `213` (medicina), `214` (nome antico), `218–223` (6 passi); altre fonti `215–217`; `195` collegamento a Numeri 13:24. **Tassonomia confermata:** Lythraceae (Punicaceae storica).

- [ ] **ATL-0188 · *Quercus coccifera*** — Quercia spinosa; **M voce 171, p. 193 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0196 · *Ricinus communis*** — Ricino; **M voce 177, p. 203 · D p. 374**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0236 · *Sinapis arvensis*** — Senape selvatica; **M voce 203, p. 220 · D p. 433**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0238 · *Solanum incanum*** — Melanzana selvatica; **M voce 17; 204, p. 29; 221 · D p. 438**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—` · ⚠ Più voci nella stessa fonte;.

- [ ] **ATL-0251 · *Tamarix mannifera*** — Tamerice della manna; **M voce 21, p. 31 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0260 · *Triticum aestivum*** — Grano; **M voce 215; 217, p. 228; 233 · D p. 468**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—` · ⚠ Più voci nella stessa fonte; Numerazione originale;.

- [ ] **ATL-0275 · *Vitis orientalis*** — Vite selvatica (identificazione discussa); **M voce 225, p. 239 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0280 · *Ziziphus spina-christi*** — Spina di Cristo; **M voce 229, p. 248 · D p. 506**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.



### 11.3 Candidati successivi — 205 specie da ricercare

Da classificare per lotti dopo P1; prima verificare sinonimi, identificazioni storiche e presenza reale in Moldenke/Duke.

- [ ] **ATL-0001 · *Abies cilicica*** — nome italiano da definire; **M — · D p. 1**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0002 · *Acacia nilotica*** — nome italiano da definire; **M voce 1, p. 23 · D p. 2**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0003 · *Acacia seyal*** — nome italiano da definire; **M voce 3, p. 24 · D p. 6**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0004 · *Acacia tortilis*** — nome italiano da definire; **M voce 4, p. 24 · D p. 7**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0005 · *Acanthus syriacus*** — nome italiano da definire; **M voce 5, p. 26 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0010 · *Aegilops variabilis*** — nome italiano da definire; **M voce 10, p. 28 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0011 · *Agrostemma githago*** — nome italiano da definire; **M voce 16, p. 29 · D p. 8**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0012 · *Alcea rosea*** — nome italiano da definire; **M — · D p. 11**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0013 · *Alhagi maurorum*** — nome italiano da definire; **M voce 18; 19, p. 30; 31 · D p. 13**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—` · ⚠ Più voci nella stessa fonte; Numerazione originale;.

- [ ] **ATL-0014 · *Allium ascalonicum*** — nome italiano da definire; **M voce 22, p. 32 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0016 · *Allium porrum*** — nome italiano da definire; **M voce 25, p. 34 · D p. 21**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0018 · *Aloe succotrina*** — nome italiano da definire; **M voce 27, p. 231 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0020 · *Alopecurus anthoxanthoides*** — nome italiano da definire; **M voce 11, p. 28 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0021 · *Anabasis articulata*** — nome italiano da definire; **M — · D p. 35**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0023 · *Andropogon aromaticus*** — nome italiano da definire; **M voce 31, p. 39 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0025 · *Anethum graveolens*** — nome italiano da definire; **M voce 34, p. 46 · D p. 39**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0026 · *Anthemis cotula*** — nome italiano da definire; **M — · D p. 43**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0027 · *Anthemis palaestina*** — nome italiano da definire; **M voce 33, p. 41 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0029 · *Aquilaria malaccensis*** — nome italiano da definire; **M — · D p. 44**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0030 · *Armoracia rusticana*** — nome italiano da definire; **M — · D p. 47**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0031 · *Artemisia herba-alba*** — nome italiano da definire; **M voce 38, p. 48 · D p. 50**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0032 · *Artemisia judaica*** — nome italiano da definire; **M voce 39, p. 48 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0033 · *Arundo donax*** — nome italiano da definire; **M voce 40, p. 50 · D p. 52**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0034 · *Astragalus gummifer*** — nome italiano da definire; **M voce 41, p. 51 · D p. 55**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0035 · *Astragalus tragacantha*** — nome italiano da definire; **M voce 42, p. 51 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0036 · *Atriplex dimorphostegia*** — nome italiano da definire; **M voce 43, p. 53 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0037 · *Atriplex halimus*** — nome italiano da definire; **M voce 44, p. 53 · D p. 57**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0038 · *Atriplex rosea*** — nome italiano da definire; **M voce 45, p. 53 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0039 · *Atriplex tatarica*** — nome italiano da definire; **M voce 46, p. 53 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0040 · *Avena sterilis*** — nome italiano da definire; **M voce 12, p. 28 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0042 · *Balanites aegyptiacus*** — nome italiano da definire; **M — · D p. 58**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0043 · *Boswellia carterii*** — nome italiano da definire; **M voce 48, p. 56 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0044 · *Boswellia papyrifera*** — nome italiano da definire; **M voce 49, p. 56 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0046 · *Boswellia thurifera*** — nome italiano da definire; **M voce 50, p. 56 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—` · ⚠ Possibile corrispondenza con Boswellia sacra; controllare sinonimia/identificazione.

- [ ] **ATL-0048 · *Butomus umbellatus*** — nome italiano da definire; **M voce 52, p. 62 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0049 · *Buxus longifolia*** — nome italiano da definire; **M voce 53, p. 62 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0050 · *Buxus sempervirens*** — nome italiano da definire; **M — · D p. 69**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0051 · *Calotropis procera*** — nome italiano da definire; **M — · D p. 72**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0052 · *Capparis sicula*** — nome italiano da definire; **M voce 54, p. 65 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0054 · *Carthamus tinctorius*** — nome italiano da definire; **M — · D p. 80**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0056 · *Centaurea calcitrapa*** — nome italiano da definire; **M voce 56, p. 70 · D p. 86**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0057 · *Centaurea iberica*** — nome italiano da definire; **M voce 57, p. 70 · D p. 88**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0058 · *Centaurea verutum*** — nome italiano da definire; **M voce 58, p. 70 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0059 · *Cephalaria syriaca*** — nome italiano da definire; **M — · D p. 89**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0061 · *Cercis siliquastrum*** — nome italiano da definire; **M voce 61, p. 73 · D p. 93**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0062 · *Cicer arietinum*** — nome italiano da definire; **M — · D p. 94**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0063 · *Cichorium endivia*** — nome italiano da definire; **M voce 62, p. 74 · D p. 97**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0064 · *Cichorium intybus*** — nome italiano da definire; **M voce 63, p. 74 · D p. 100**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0067 · *Cistus creticus*** — nome italiano da definire; **M voce 70, p. 77 · D p. 113**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0068 · *Cistus salvifolius*** — nome italiano da definire; **M voce 71, p. 77 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0069 · *Cistus villosus*** — nome italiano da definire; **M voce 72, p. 77 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0071 · *Citrullus lanatus*** — nome italiano da definire; **M voce 74, p. 80 · D p. 118**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0073 · *Commiphora africana*** — nome italiano da definire; **M voce 76, p. 81 · D p. 126**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0075 · *Commiphora habessinica*** — nome italiano da definire; **M — · D p. 130**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0077 · *Commiphora opobalsamum*** — nome italiano da definire; **M voce 79, p. 84 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—` · ⚠ Possibile corrispondenza con Commiphora gileadensis; controllare sinonimia/identificazione.

- [ ] **ATL-0078 · *Conium maculatum*** — nome italiano da definire; **M — · D p. 135**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0080 · *Crocus cancellatus*** — nome italiano da definire; **M voce 81, p. 86 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—` · ⚠ Numerazione originale;.

- [ ] **ATL-0081 · *Crocus hyemalis*** — nome italiano da definire; **M voce 82, p. 86 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0083 · *Crocus vitellinus*** — nome italiano da definire; **M voce 83, p. 86 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0084 · *Crocus zonatus*** — nome italiano da definire; **M voce 84, p. 86 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0085 · *Cucumis chate*** — nome italiano da definire; **M voce 86, p. 88 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0086 · *Cucumis melo*** — nome italiano da definire; **M voce 75, p. 80 · D p. 148**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0087 · *Cucumis sativus*** — nome italiano da definire; **M voce 87, p. 88 · D p. 151**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0089 · *Cupressus sempervirens*** — nome italiano da definire; **M voce 89, p. 89 · D p. 160**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—` · ⚠ Numerazione originale;.

- [ ] **ATL-0090 · *Curcuma longa*** — nome italiano da definire; **M — · D p. 162**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0091 · *Cymbopogon martini*** — nome italiano da definire; **M — · D p. 168**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0092 · *Cynomorium coccineum*** — nome italiano da definire; **M voce 90, p. 91 · D p. 171**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0094 · *Diospyros ebenaster*** — nome italiano da definire; **M voce 92, p. 95 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0095 · *Diospyros ebenum*** — nome italiano da definire; **M voce 93, p. 95 · D p. 174**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0096 · *Diospyros melanoxylon*** — nome italiano da definire; **M voce 94, p. 95 · D p. 176**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0098 · *Elaeagnus angustifolia*** — nome italiano da definire; **M voce 98, p. 97 · D p. 178**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0100 · *Eragrostis megastachya*** — nome italiano da definire; **M voce 13, p. 28 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0101 · *Eruca sativa*** — nome italiano da definire; **M — · D p. 181**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0103 · *Ferula galbaniflua*** — nome italiano da definire; **M voce 103, p. 102 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—` · ⚠ Possibile corrispondenza con Ferula gummosa; controllare sinonimia/identificazione.

- [ ] **ATL-0104 · *Ferula gummosa*** — nome italiano da definire; **M — · D p. 185**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0107 · *Fraxinus ornus*** — nome italiano da definire; **M voce 20, p. 31 · D p. 194**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0108 · *Gossypium herbaceum*** — nome italiano da definire; **M voce 106, p. 109 · D p. 197**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0110 · *Hedera helix*** — nome italiano da definire; **M voce 107, p. 111 · D p. 202**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0111 · *Hordeum distichon*** — nome italiano da definire; **M voce 108, p. 111 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0112 · *Hordeum hexastichon*** — nome italiano da definire; **M voce 109, p. 111 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0114 · *Hyacinthus orientalis*** — nome italiano da definire; **M voce 111, p. 114 · D p. 210**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0115 · *Hyoscyamus aureus*** — nome italiano da definire; **M — · D p. 212**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0116 · *Hyoscyamus muticus*** — nome italiano da definire; **M — · D p. 213**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0117 · *Iris pseudacorus*** — nome italiano da definire; **M voce 113, p. 117 · D p. 214**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0119 · *Juncus effusus*** — nome italiano da definire; **M voce 115, p. 120 · D p. 221**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0120 · *Juncus maritimus*** — nome italiano da definire; **M voce 116, p. 120 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0121 · *Juniperus excelsa*** — nome italiano da definire; **M voce 185, p. 209 · D p. 224**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0122 · *Juniperus oxycedrus*** — nome italiano da definire; **M voce 120, p. 121 · D p. 226**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0123 · *Juniperus phoenicia*** — nome italiano da definire; **M voce 186, p. 209 · D p. 228**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0124 · *Lactuca sativa*** — nome italiano da definire; **M voce 64, p. 74 · D p. 229**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0125 · *Lagenaria siceraria*** — nome italiano da definire; **M — · D p. 233**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0126 · *Laurus nobilis*** — nome italiano da definire; **M voce 121, p. 123 · D p. 237**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0127 · *Lawsonia inermis*** — nome italiano da definire; **M voce 122, p. 124 · D p. 241**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0133 · *Lilium chalcedonicum*** — nome italiano da definire; **M voce 128, p. 129 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0134 · *Linum usitatissimum*** — nome italiano da definire; **M voce 129, p. 129 · D p. 250**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0135 · *Liquidambar orientalis*** — nome italiano da definire; **M — · D p. 256**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0136 · *Lolium temulentum*** — nome italiano da definire; **M voce 130, p. 133 · D p. 259**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0137 · *Loranthus acaciae*** — nome italiano da definire; **M voce 2, p. 23 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0138 · *Lycium europaeum*** — nome italiano da definire; **M voce 131, p. 134 · D p. 260**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0139 · *Malus domestica*** — nome italiano da definire; **M — · D p. 261**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0140 · *Malva sylvestris*** — nome italiano da definire; **M — · D p. 266**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0142 · *Mentha longifolia*** — nome italiano da definire; **M voce 133, p. 139 · D p. 273**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0143 · *Morus nigra*** — nome italiano da definire; **M voce 134, p. 140 · D p. 276**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0148 · *Narcissus tazetta*** — nome italiano da definire; **M voce 139, p. 147 · D p. 283**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0150 · *Nardostachys jatamansi*** — nome italiano da definire; **M voce 140, p. 148 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—` · ⚠ Possibile corrispondenza con Nardostachys grandiflora; controllare sinonimia/identificazione.

- [ ] **ATL-0151 · *Nardurus orientalis*** — nome italiano da definire; **M voce 14, p. 28 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0152 · *Nasturtium officinale*** — nome italiano da definire; **M voce 65, p. 74 · D p. 289**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0154 · *Nerium oleander*** — nome italiano da definire; **M voce 143, p. 151 · D p. 294**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0155 · *Nigella sativa*** — nome italiano da definire; **M voce 144, p. 152 · D p. 298**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0157 · *Notobasis syriaca*** — nome italiano da definire; **M voce 145, p. 153 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0158 · *Nymphaea alba*** — nome italiano da definire; **M voce 147, p. 154 · D p. 303**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0159 · *Nymphaea caerulea*** — nome italiano da definire; **M voce 148, p. 154 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0160 · *Nymphaea lotus*** — nome italiano da definire; **M voce 149, p. 154 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0162 · *Origanum maru*** — nome italiano da definire; **M voce 151; 152, p. 160; 160 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—` · ⚠ Più voci nella stessa fonte; Numerazione originale; Possibile corrispondenza con Origanum syriacum; controllare sinonimia/identificazione \| Possibile corrispondenza con Origanum syriacum; controllare sinonimia/identificazione.

- [ ] **ATL-0163 · *Origanum syriacum*** — nome italiano da definire; **M — · D p. 311**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0164 · *Ornithogallum umbellatum*** — nome italiano da definire; **M voce 153, p. 162 · D p. 312**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0165 · *Paliurus spina-christi*** — nome italiano da definire; **M voce 154, p. 165 · D p. 315**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0166 · *Pancratium maritimum*** — nome italiano da definire; **M — · D p. 316**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0167 · *Panicum miliaceum*** — nome italiano da definire; **M voce 155, p. 166 · D p. 317**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0168 · *Papaver somniferum*** — nome italiano da definire; **M — · D p. 320**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0171 · *Phragmites australis*** — nome italiano da definire; **M voce 158, p. 172 · D p. 329**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0172 · *Pinus brutia*** — nome italiano da definire; **M voce 159, p. 173 · D p. 332**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0173 · *Pinus halepensis*** — nome italiano da definire; **M voce 160, p. 175 · D p. 334**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0174 · *Pinus pinea*** — nome italiano da definire; **M voce 35, p. 46 · D p. 335**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0175 · *Pistacia atlantica*** — nome italiano da definire; **M — · D p. 337**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0178 · *Pistacia vera*** — nome italiano da definire; **M voce 163, p. 179 · D p. 343**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0179 · *Platanus orientalis*** — nome italiano da definire; **M voce 164, p. 180 · D p. 345**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0180 · *Polypogon monspeliensis*** — nome italiano da definire; **M voce 15, p. 28 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0181 · *Populus alba*** — nome italiano da definire; **M voce 165, p. 181 · D p. 348**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0182 · *Populus euphratica*** — nome italiano da definire; **M voce 166, p. 183 · D p. 350**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0183 · *Prunus armeniaca*** — nome italiano da definire; **M voce 167, p. 184 · D p. 352**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0185 · *Pterocarpus santalinus*** — nome italiano da definire; **M voce 168, p. 188 · D p. 360**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0187 · *Quercus aegilops*** — nome italiano da definire; **M voce 170, p. 193 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—` · ⚠ Possibile corrispondenza con Quercus ithaburensis; controllare sinonimia/identificazione.

- [ ] **ATL-0189 · *Quercus coccifera var*** — nome italiano da definire; **M voce 172, p. 193 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0190 · *Quercus ilex*** — nome italiano da definire; **M voce 173, p. 193 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0191 · *Quercus ithaburensis*** — nome italiano da definire; **M — · D p. 367**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0192 · *Quercus lusitanica*** — nome italiano da definire; **M voce 174, p. 193 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0193 · *Ranunculus asiaticus*** — nome italiano da definire; **M — · D p. 369**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0194 · *Retama raetam*** — nome italiano da definire; **M voce 175, p. 200 · D p. 371**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0195 · *Rhamnus palaestinas*** — nome italiano da definire; **M voce 176, p. 202 · D p. 373**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0199 · *Rosa canina*** — nome italiano da definire; **M — · D p. 380**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0200 · *Rosa phoenicia*** — nome italiano da definire; **M voce 179, p. 205 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0201 · *Rubia tinctorium*** — nome italiano da definire; **M — · D p. 384**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0202 · *Rubus sanctus*** — nome italiano da definire; **M voce 180, p. 206 · D p. 386**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0203 · *Rubus ulmifolius*** — nome italiano da definire; **M voce 181, p. 206 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0204 · *Rumex acetosella*** — nome italiano da definire; **M voce 66, p. 74 · D p. 388**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0205 · *Ruscus aculeatus*** — nome italiano da definire; **M voce 182, p. 207 · D p. 391**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0206 · *Ruta chalepensis*** — nome italiano da definire; **M voce 183, p. 208 · D p. 394**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—` · ⚠ Numerazione originale;.

- [ ] **ATL-0207 · *Ruta graveolens*** — nome italiano da definire; **M voce 184, p. 208 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0210 · *Saccharum officinarum*** — nome italiano da definire; **M voce 189, p. 214 · D p. 397**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0211 · *Salicornia europea*** — nome italiano da definire; **M — · D p. 402**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0212 · *Salicornia fruticosa*** — nome italiano da definire; **M voce 190, p. 215 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0213 · *Salicornia herbacea*** — nome italiano da definire; **M voce 191, p. 215 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—` · ⚠ Possibile corrispondenza con Salicornia europea; controllare sinonimia/identificazione.

- [ ] **ATL-0214 · *Salix acmophylla*** — nome italiano da definire; **M voce 194, p. 216 · D p. 404**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0215 · *Salix alba*** — nome italiano da definire; **M voce 195, p. 216 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0216 · *Salix babylonica*** — nome italiano da definire; **M — · D p. 409**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0217 · *Salix fragilis*** — nome italiano da definire; **M voce 196, p. 216 · D p. 411**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0218 · *Salix safsaf*** — nome italiano da definire; **M voce 197, p. 216 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0219 · *Salsola inermis*** — nome italiano da definire; **M voce 192, p. 215 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0220 · *Salsola kali*** — nome italiano da definire; **M voce 193, p. 215 · D p. 413**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0221 · *Salvadora persica*** — nome italiano da definire; **M — · D p. 415**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0222 · *Salvia judaica*** — nome italiano da definire; **M voce 198, p. 218 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0223 · *Santalum album*** — nome italiano da definire; **M voce 37, p. 47 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0224 · *Sarcopoterium spinosum*** — nome italiano da definire; **M — · D p. 418**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0225 · *Saussurea costus*** — nome italiano da definire; **M voce 199, p. 218 · D p. 419**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0226 · *Schoenoplectus lacustris*** — nome italiano da definire; **M voce 118, p. 120 · D p. 422**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0227 · *Scirpus holoschoenus*** — nome italiano da definire; **M voce 117, p. 120 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—` · ⚠ Numerazione originale;.

- [ ] **ATL-0228 · *Scirpus maritimus*** — nome italiano da definire; **M voce 119, p. 120 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0229 · *Scolymus hispanicus*** — nome italiano da definire; **M — · D p. 423**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0230 · *Scolymus maculatus*** — nome italiano da definire; **M voce 146, p. 153 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0231 · *Senna alexandrina*** — nome italiano da definire; **M — · D p. 424**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0235 · *Silybum marianum*** — nome italiano da definire; **M voce 59, p. 70 · D p. 428**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0237 · *Solanum anguivi*** — nome italiano da definire; **M — · D p. 436**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0239 · *Sorghum bicolor*** — nome italiano da definire; **M — · D p. 440**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0240 · *Sorghum vulgare*** — nome italiano da definire; **M voce 205, p. 222 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—` · ⚠ Numerazione originale; Possibile corrispondenza con Sorghum bicolor; controllare sinonimia/identificazione.

- [ ] **ATL-0245 · *Styrax benzoin*** — nome italiano da definire; **M voce 209, p. 223 · D p. 444**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0246 · *Styrax officinalis*** — nome italiano da definire; **M voce 210, p. 224 · D p. 447**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0247 · *Suaeda spp*** — nome italiano da definire; **M — · D p. 449**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0248 · *Tamaris articulata*** — nome italiano da definire; **M voce 211, p. 227 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0249 · *Tamaris pentandra*** — nome italiano da definire; **M voce 212, p. 227 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0250 · *Tamarix aphylla*** — nome italiano da definire; **M — · D p. 451**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0252 · *Tamarix tetragyna*** — nome italiano da definire; **M voce 213, p. 227 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0253 · *Taraxacum officinale*** — nome italiano da definire; **M voce 67, p. 74 · D p. 453**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0254 · *Tetraclinis articulata*** — nome italiano da definire; **M voce 214, p. 228 · D p. 459**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0255 · *Tetraena dumosa*** — nome italiano da definire; **M — · D p. 461**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0256 · *Thymelaea hirsuta*** — nome italiano da definire; **M — · D p. 462**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0259 · *Trigonella foenum-graecum*** — nome italiano da definire; **M voce 26, p. 34 · D p. 463**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0261 · *Triticum compositum*** — nome italiano da definire; **M voce 216, p. 228 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0262 · *Tulipa montana*** — nome italiano da definire; **M voce 218, p. 234 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0263 · *Tulipa sharonensis*** — nome italiano da definire; **M voce 219, p. 234 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0264 · *Tulipa spp*** — nome italiano da definire; **M — · D p. 472**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0265 · *Typha angustata*** — nome italiano da definire; **M voce 220, p. 235 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0266 · *Typha spp*** — nome italiano da definire; **M — · D p. 474**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0267 · *Ulmus canescens*** — nome italiano da definire; **M — · D p. 478**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0268 · *Urtica caudata*** — nome italiano da definire; **M voce 221, p. 237 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0269 · *Urtica dioica*** — nome italiano da definire; **M voce 222, p. 237 · D p. 480**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0270 · *Urtica pilulifera*** — nome italiano da definire; **M voce 223, p. 237 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0271 · *Urtica urens*** — nome italiano da definire; **M voce 224, p. 237 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0272 · *Vetiveria zizanioides*** — nome italiano da definire; **M — · D p. 485**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0273 · *Viburnum tinus*** — nome italiano da definire; **M — · D p. 490**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0274 · *Vicia faba*** — nome italiano da definire; **M voce 102, p. 101 · D p. 491**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0277 · *Xanthium spinosum*** — nome italiano da definire; **M voce 227, p. 245 · D p. 502**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0278 · *Zilla spinosa*** — nome italiano da definire; **M — · D p. 505**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0279 · *Ziziphus lotus*** — nome italiano da definire; **M voce 228, p. 247 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0281 · *Zostera marina*** — nome italiano da definire; **M voce 230, p. 249 · D p. 508**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.



### 11.4 Appendice — 29 organismi non botanici

**NON** pubblicare automaticamente come `pdb_plant`; verificarne categoria moderna e decidere se procedere con un modello o un’appendice separata.

- [ ] **ATL-0006 · *Acetobacter acetigenum*** — nome italiano da definire; **M voce 6, p. 27 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0007 · *Acetobacter acetum*** — nome italiano da definire; **M voce 7, p. 27 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0008 · *Acetobacter plicatum*** — nome italiano da definire; **M voce 8, p. 27 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0009 · *Acetobacter xylinum*** — nome italiano da definire; **M voce 9, p. 27 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0097 · *Eberthella typhi*** — nome italiano da definire; **M voce 95, p. 97 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0099 · *Epidermophyton rubrum*** — nome italiano da definire; **M voce 99, p. 98 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0102 · *Favotrichophyton violaceum*** — nome italiano da definire; **M voce 100, p. 98 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0128 · *Lecanora affinis*** — nome italiano da definire; **M voce 123, p. 125 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0129 · *Lecanora esculenta*** — nome italiano da definire; **M voce 124, p. 125 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0130 · *Lecanora fruticulosa*** — nome italiano da definire; **M voce 125, p. 125 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0144 · *Mucor mucedo*** — nome italiano da definire; **M voce 135, p. 141 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0145 · *Mycobacterium leprae*** — nome italiano da definire; **M voce 136, p. 142 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0146 · *Mycobacterium tuberculosis*** — nome italiano da definire; **M voce 137, p. 143 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0153 · *Neisseria gonorrhoeae*** — nome italiano da definire; **M voce 141, p. 149 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0156 · *Nostoc spp*** — nome italiano da definire; **M voce 126, p. 125 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0169 · *Pasteurella pestis*** — nome italiano da definire; **M voce 156, p. 167 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0197 · *Rickettsia prowazeki*** — nome italiano da definire; **M voce 96, p. 97 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0198 · *Roccella tinctoria*** — nome italiano da definire; **M voce 178, p. 204 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0208 · *Saccharomyces cerevisiae*** — nome italiano da definire; **M voce 187, p. 210 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0209 · *Saccharomyces ellipsoideus*** — nome italiano da definire; **M voce 188, p. 212 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0232 · *Shigella ambigua*** — nome italiano da definire; **M voce 200, p. 219 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0233 · *Shigella dysenteriae*** — nome italiano da definire; **M voce 201, p. 219 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0234 · *Shigella paradysenteriae*** — nome italiano da definire; **M voce 202, p. 219 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0241 · *Staphylococcus albus*** — nome italiano da definire; **M voce 206, p. 223 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0242 · *Staphylococcus aureus*** — nome italiano da definire; **M voce 207, p. 223 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0243 · *Streptococcus erysipelatis*** — nome italiano da definire; **M voce 97, p. 97 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0244 · *Streptococcus pyogenes*** — nome italiano da definire; **M voce 208, p. 223 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0257 · *Treponema pallidum*** — nome italiano da definire; **M voce 142, p. 149 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0258 · *Trichophyton rosaceum*** — nome italiano da definire; **M voce 101, p. 98 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.



## 12. Piano delle fasi e prime specie consigliate

**Ordine suggerito per le prime 12 schede**, subordinato a verifica del nome scientifico e delle fonti: 1. Melograno (*Punica granatum*), 2. Cedro del Libano (*Cedrus libani*), 3. Palma da dattero (*Phoenix dactylifera*), 4. Sicomoro (*Ficus sycomorus*), 5. Papiro (*Cyperus papyrus*), 6. Mandorlo (*Prunus dulcis*, nome storico differente), 7. Mirto (*Myrtus communis*), 8. Terebinto (*Pistacia terebinthus*), 9. Carrubo (*Ceratonia siliqua*), 10. Senape nera (*Brassica nigra*), 11. Incenso (*Boswellia sacra* e ipotesi storiche), 12. Mirra (*Commiphora myrrha* e ipotesi storiche).

- **Lotto A:** Melograno, Cedro, Palma, Sicomoro → creare piante e primi passi; verificare tassonomia.
- **Lotto B:** Papiro, Mandorlo, Mirto, Terebinto → termini antichi, botanica e confronto interpretazioni.
- **Lotto C:** Carrubo, Senape nera, Incenso, Mirra → attenzione a identificazioni concorrenti, parti botaniche e sicurezza.
- **Lotto D:** completare tutti i 44 prioritari, quindi gruppi tematici delle altre 205 voci.
- **Lotto E:** appendice non botanica, solo dopo separazione tassonomica e valutazione editoriale.

### Recupero delle fonti mancanti

- [ ] **Moldenke n. 77 — pp. 82–83 non presenti** nella copia: recuperare scansione e identificare voce.
- [ ] **Moldenke n. 78 — pp. 82–83 non presenti**: recuperare scansione e identificare voce.
- [ ] **Moldenke n. 105 — pp. 106–107 non presenti**: recuperare scansione e identificare voce.
- [ ] Riesaminare la sinonimia: `Boswellia thurifera`/`B. sacra`; `Commiphora opobalsamum`/`C. gileadensis`; `Ferula galbaniflua`/`F. gummosa`; `Nardostachys jatamansi`/`N. grandiflora`; altre righe segnalate nell'indice. **Possibile corrispondenza ≠ sinonimia dimostrata.**
- [ ] Verificare le pagine di Moldenke stampate in modo discordante dai numeri fisici del PDF; distinguere sempre `pagina_stampata` e `pagina_PDF` in archivio.

## 13. Registro delle sessioni di lavoro

| Data | ID roadmap | Operazione | Stato | Fonte/verifica | WP ID | Note |
|---|---|---|---|---|---|---|
| 2026-11-17 | ATL del catalogo relativo a Olivo, Vite e Fico | Riconciliazione del catalogo iniziale | PUBBLICATA | Stato WordPress esistente, non nuove pubblicazioni | 129 / 143 / 152 | 3 schede preesistenti; mantenere i loro link. |
| 2026-11-17 | Tutte | Creato master di specifiche e roadmap | DOCUMENTATO | Cataloghi Moldenke/Duke forniti | — | Nessuna scrittura sul sito effettuata per questa consegna. |
| 2026-11-17 | ATL-0186 · Melograno | Consultate integralmente voci originali, redatta scheda botanica ampia, medicina storica, lemma rimmôn, 6 schede bibliche, 3 nuove fonti e 15 identificazioni pianta–passo; SEO in bozza | BOZZA_WP | Moldenke n.169 pp.189–191; Duke Pomegranate pp.362–367; Kew POWO; NCCIH; Diodati 1649 | 212–223 (12 ID, inclusi 3 fonti); Numeri 13:24 #195 riusato | Tavola botanica WebP creata e revisionata preliminarmente; caricamento Media, pubblicazione e QA responsive pendenti. |
| [AAAA-MM-GG] | ATL-XXXX | [Sintesi attività] | [Stato] | [Pagine/fonti] | [ID] | [Blocchi/decisioni] |

### Dettaglio di lavorazione — ATL-0186 Melograno (17 novembre 2026)

- **Stato:** `BOZZA_WP`, non pubblicata: attesa tavola botanica in Media Library, featured image e controllo finale.
- **Fonti direttamente consultate:** Moldenke, voce 169, pp. 189–191 (pagina PDF 185–187); Duke, voce «Pomegranate», pp. 362–367 (PDF 388–393). Consultati inoltre Kew POWO e NCCIH. Nessuna presunta prova clinica attribuita alle liste popolari di Duke.
- **Nuove schede WordPress:** botanica `212`; usi tradizionali e sicurezza `213`; nome ebraico rimmôn `214`; fonti Kew `215`, NCCIH `216` e Diodati 1649 `217`; Deut 8:8 `218`, Es 28:33–34 `219`, Cant 4:3 `220`, Cant 8:2 `221`, Gioele 1:12 `222`, Aggeo 2:19 `223`. Riutilizzata la citazione Numeri 13:24 `195`.
- **Relazioni:** 15 identificazioni pianta–passo, 13 collegamenti con nomi antichi, 22 citazioni di fonte aggiunte, da verificare nuovamente dopo pubblicazione.
- **Tassonomia:** `Punica granatum L.` accettata, Lythraceae; `Punicaceae` nel testo Duke come classificazione storica. Il termine Rimmon nel nome di una divinità non è una pianta.
- **Tavola originale:** `tavola-botanica_punica-granatum.webp` (1086 × 1448 px, ~432 KB), creata digitalmente nello stile botanico ottocentesco, **non** una riproduzione di Thomé. Caricamento tramite Media WordPress in sospeso per limiti dell'accesso di rete del runtime.
- **Da completare:** ottenere l'ID Media, impostare featured image e `pdb_plate_media_id`, pubblicare il nucleo se il controllo è positivo, rieseguire audit SEO, verificare mobile e desktop. Aggiornare questa riga a `PUBBLICATA` solo quando lo è realmente.

## 14. Aggiornamento e continuità del Markdown

- Questo file è la **fonte di verità della programmazione editoriale**, non è la fonte di verità botanica: le **opere originali e i database tassonomici** rimangono autorevoli per le affermazioni.
- Per ogni sessione: **prima** leggere il master, **poi** leggere le fonti specifiche; **dopo** modificare la stessa riga del catalogo (stato, ID WP, dati verificati), inserire i collegamenti creati e aggiungere una riga al registro.
- Se il catalogo cresce, mantenere i vecchi ID stabili. Vietato riordinare il master cambiando i numeri dei record già usati: per una nuova voce aggiungere un nuovo `ATL-XXXX` progressivo.
- **GitHub master attivo:** `pronosnics/test`, file `moldenke-bible-plants/PIANTE_DELLA_BIBBIA_MASTER_SPECIFICHE_E_ROADMAP.md`, branch `main`. Aggiornare questo file a ogni progresso e annotare gli ID WordPress; evitare copie disallineate. Per un processo automatico è preferibile conservare anche il CSV come indice macchina, ma **il presente Markdown deve restare leggibile e completo autonomamente**.
- Cambiare versione documento (`1.1`, `1.2`…) alla modifica delle regole editoriali; cambiare solo data di aggiornamento per il normale avanzamento di una pianta.
- Per dubbi tassonomici o filologici registrare **decisione, evidenza e autore/data della revisione**: non correggere silenziosamente le fonti storiche.

---

**Obiettivo finale:** non un semplice elenco di erbe, ma un **Atlante storico-botanico biblico completo**, di centinaia di documenti interconnessi, con **schede narrative molto approfondite**, citazioni testuali corrette, apparato di fonti verificabile, tavole botaniche originali e una distinzione rigorosa tra tradizione medicinale e scienza contemporanea.