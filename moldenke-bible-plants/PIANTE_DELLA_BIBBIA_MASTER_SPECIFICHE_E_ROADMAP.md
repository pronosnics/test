---
project: "Piante della Bibbia — Atlante integrato"
document_type: "specifica-editoriale-e-roadmap"
version: "1.0"
created: "2026-11-17"
last_catalog_check: "2026-11-17"
reference_plugin: "pdb-atlante 0.2.4"
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

## Stato successivo — Sicomoro ATL-0106 (17 novembre 2026)

La [scheda del Sicomoro](https://piantedellabibbia.altervista.org/piante/sicomoro-ficus-sycomorus/) e **17 schede collegate** sono **PUBBLICATE**, verificate tramite MCP. **Totali aggiornati: 7 piante, 52 passi, 12 nomi antichi, 7 medicina, 24 fonti** (102 contenuti). Il plugin live è **pdb-atlante 0.2.2**: la versione **0.2.3 con tavola originale del Sicomoro è pronta ma da installare**; audit SEO **1 avviso residuo**, «Immagine in evidenza assente». La pubblicazione dei testi è conclusa ma **media e QA grafica restano aperte**. Confronto fonti: Moldenke voce 105 pp.106–108 (trascrizione esterna pp.106–107), note originali p.282, figura 62; Duke pp.191–194. [Audit fonti completo](ATL-0106_SICOMORO_AUDIT_MOLDENKE_DUKE_2026-11-17.md).

## Stato operativo aggiornato — 17 novembre 2026

**Pubblicazione Palma da dattero ATL-0170 verificata su WordPress:** [scheda Phoenix dactylifera #308](https://piantedellabibbia.altervista.org/piante/palma-da-dattero-phoenix-dactylifera/), media #344; 20 nuovi contenuti pubblicati complessivamente (1 pianta, 11 passi, 3 nomi, 1 medicina, 4 fonti). Plugin **pdb-atlante 0.2.2**; audit SEO **0 avvisi** sulle 6 piante. Conteggi pubblici verificati con `pdb/atlas-list`: **6 piante · 44 passi · 9 nomi · 6 medicina · 19 fonti**. [Audit fonti conclusivo](ATL-0170_AUDIT_COMPLETO_MOLDENKE_DUKE_2026-11-17.md). **Unico QA non concluso:** resa grafica effettiva su desktop e smartphone. I numeri delle vecchie «fotografie» e le precedenti righe della cronologia restano **storici** e non prevalgono su questo stato. **Prossima specie prevista:** Sicomoro (*Ficus sycomorus*), mantenendo la roadmap.

**Sicomoro ATL-0106 pubblicato (verifica MCP del 17 novembre 2026):** [scheda Ficus sycomorus #367](https://piantedellabibbia.altervista.org/piante/sicomoro-ficus-sycomorus/), **18 nuovi contenuti pubblicati** (1 pianta, 8 passi, 3 nomi, 1 medicina, 5 fonti); contatori **7 piante · 52 passi · 12 nomi · 7 medicina · 24 fonti**. Tutti gli interventi enciclopedici e lessicali salvati, nuovi legami di fonti Moldenke pp106–108 e nota p282; la trascrizione digitale esterna delle pp106–107 è stata verificata ma mancano i facsimili nella copia originale. **SEO **0 avvisi**; WebP **#426** e versione **0.2.3** confermati.2.2** e pacchetto **0.2.3** pronto per l'importazione della tavola. QA grafica desktop/mobile non verificata. [Progressi](ATL-0106_SICOMORO_PROGRESSI_2026-11-17.md).

## Sicomoro ATL-0106 — controllo di chiusura plugin 0.2.3 (17 novembre 2026)

**Ultima verifica amministrativa:** `pdb/atlas-health` restituisce **pdb-atlante 0.2.3**; il comando `pdb/atlas-media-import-bundled` ha importato **1** tavola, ne ha riconosciute **6** esistenti e restituito **0 errori**. La pianta Sicomoro **WP #367, publish** ha `featured_media=426` e `pdb_plate_media_id=426`. La Media Library conferma `image/webp`, ALT presente, URL https://piantedellabibbia.altervista.org/wp-content/uploads/pdb-atlante/tavola-botanica_ficus-sycomorus.webp, titolo e data corretti. La `pdb_image_provenance` è stata corretta in produzione per riflettere l'importazione effettiva e non più uno stato futuro.

**SEO:** audit WP eseguito DOPO l'importazione: **0 problemi** per tutte e sette le piante (oltre all'index dell'Atlante); nessuna regressione per Palma #308 o Cedro #266. Rimane **solo QA visivo browser responsive non eseguito**: non dedurre la corretta resa da un audit metadati.

**Verifica botanica della tavola:** chioma larga, foglie, grappoli di siconi direttamente sul tronco e rami sono coerenti con *Ficus sycomorus*. La **piccola vignetta floreale isolata non è un disegno rigoroso**: i piccoli fiori del genere *Ficus* sono contenuti all'interno del siconio. Non chiamarla «corolla esterna del sicomoro» né usarla per diagnosi morfologica. Fonte: https://flora.org.il/en/books/plant-stories-2/chapter-g/useful_plants_g2/ ; https://academic.oup.com/aob/article/127/5/621/6012849 .

**Ultimo controllo documentale:** Duke *Sycamore Fig*, pp. **191–194**, include note, varianti nomi, ATTIVITÀ/INDICAZIONI folkloriche, preparati, storia naturale, studio di estratti preliminare PMID 8170162. La scheda pubblica conserva il fatto che un saggio in vitro non dimostra cure umane. Moldenke voce **105**, pp. **106–108**, comprende le pp.106–107 consultate soltanto in trascrizione esterna, p108 sul PDF originale, appendice p282 sul PDF originale e confronto con *Morus nigra* p140 su traduzione: NON dichiarare collazione facsimile completa delle pp106–107.

**Stato finale ATL-0106:** PUBBLICATA / SEO_OK / MEDIA_OK / FONTI_VERIFICATE_CON_LACUNA_FACSIMILE / QA_VISIVA_APERTA. Passaggio successivo: ATL-0093, Papiro (*Cyperus papyrus*) come da roadmap.

### Avanzamento ATL-0093 — Papiro (17 novembre 2026)

**Nuovo lotto in bozze, NON PUBBLICATO:** 15 contenuti WordPress **#427–441** (pianta, 6 passi, 3 nomi, una medicina, 4 fonti) con Cyperaceae #8, 17 sezioni di botanica, relazioni documentate e SEO. La collazione Moldenke **pp.92–94 e appendice p.281** e Duke **pp.172–174** ha evidenziato un importante errore di sinonimia nel libro Duke: **Cyperus rotundus non è Cyperus papyrus**, come conferma Kew. Fra i passi, Esodo/giunchi della cesta è più certo di Isaia 58:5 e 19:7. **Da completare:** brevi estratti Diodati 1649, tavola botanica originale e import Media, QA visivo desktop/mobile e solo dopo pubblicazione. Contatori delle piante pubblicate ancora **7**, plugin live **0.2.3**. [Dossier](ATL-0093_PAPIRO_DOSSIER_2026-11-17.md) · [Progressi](ATL-0093_PAPIRO_PROGRESSI_2026-11-17.md).

### Seconda verifica ATL-0093 — Diodati 1649 collazionata

**17 novembre 2026:** sui sei passi biblici in bozza **#436–441** sono stati aggiunti estratti brevi verificati nella versione **Giovanni Diodati 1649** (Bibliа.com, URL specifici per versetto). In Isaia 19:7 il testo dice «Le praterie che son presso al fiume», non «canne da carta»: la specie rimane marcata **controversa**. Salvati i campi `pdb_verse_text`, traduzione, diritti, stato `revisionata` e nuove sei relazioni Diodati **#206–211** (precedenti citazioni #184–205). Resta la tavola botanica originale/immagine in evidenza da preparare, l'audit finale e QA responsive. **Papiro e tutti i 14 collegati sono sempre bozze**, nessun nuovo contenuto Papiro pubblicato.

### Chiusura editoriale ATL-0093 — Papiro (17 novembre 2026)

Pubblicati tutti i 15 contenuti WP #427–441: **8 piante / 58 passi / 15 nomi / 8 medicine / 28 fonti**. [Scheda Papiro](https://piantedellabibbia.altervista.org/piante/papiro-cyperus-papyrus/). Moldenke e Duke ricollazionati; Diodati 1649 verificata; studi medici qualificati. Tavola originale WebP pronta, **plugin 0.2.4 da installare** per l'importazione: ultimo stato sito 0.2.3, audit #427 unico avviso per immagine in evidenza. La QA grafica responsive resta aperta. Prossima specie: **ATL-0184 Mandorlo**.

### Chiusura tecnica definitiva: plugin stabile 0.2.4, Papiro MEDIA_OK

**Verifica diretta WordPress 17/11/2026:** plugin **pdb-atlante 0.2.4** attivo; Papiro **WP #427 pubblicato**, tavola WebP **Media #493** importata, ALT verificato, `pdb_plate_media_id=493`, in evidenza e **SEO 0 avvisi**. Le **otto specie pubblicate hanno tutte zero avvisi**. **Mandorlo ATL-0184** rimane in bozza; ha ora una tavola originale WebP 1086×1448 generata e controllata nel contenitore, **non ancora importata nella Media Library**: la prova `pdb/atlas-media-start` seguita da `pdb/atlas-media-abort` dimostra le funzioni di upload generico già disponibili senza incremento di versione, ma NON un caricamento completo. Non dichiarare MEDIA_OK finché WP non restituisce allegato e immagine in evidenza.

**Decisione progettuale permanente:** basta aggiornamenti `0.2.1→0.2.4` per aggiungere immagini. La 0.2.4 contiene già gli strumenti di upload MCP e WordPress dispone anche di un link di caricamento diretto; per ogni nuova tavola utilizzare queste interfacce generiche, non mettere l'immagine nel ZIP. Aggiornare il software solo per vere correzioni/funzionalità. Vedi [Procedura permanente immagini senza nuove versioni](PROCEDURA_DEFINITIVA_MEDIA_SENZA_UPDATE_PLUGIN.md). Il resto della cronologia qui sotto è una fotografia degli stati precedenti.

### Papiro, integrazione biblica finale — 17 novembre 2026

Dopo verifica delle sei occorrenze principali di Moldenke e del catalogo Duke, sono state individuate **due testimonianze supplementari** non comprese nel nucleo Moldenke: **Giobbe 9:26 (#498, ʾēḇeh H16, controversa)** e **2 Giovanni 1:12 (#499, χάρτης G5489, materiale scrittorio probabile)**. Pubblicate sei nuove pagine WordPress: **fonti BDB/Thayer #494–495, termini #496–497, versi #498–499**; nuovi collegamenti e citazioni, oltre alle 15 precedenti pagine Papiro. **Papiro = 21 nuove pagine pubblicate.** Tre Giovanni 1:13 (penna di canna) solo confronto culturale, NON identificazione botanica certa. Le citazioni Diodati 1649 sono collazionate, con esatta forma «saette» in Giobbe e «carta, e ... inchiostro» in 2 Giovanni.

**Conteggi pubblici verificati da `pdb/atlas-list`: 8 piante / 60 passi / 17 nomi / 8 medicina / 30 fonti.** `pdb/seo-audit` segnala **zero avvisi per tutte le otto piante pubblicate**, Papiro #427 con WebP in evidenza #493 e plugin 0.2.4. Mandorlo ATL-0184 resta con 12 bozze non pubblicate (pianta #467, media ancora da caricare). Procedura per immagini future: [upload media MCP stabile](PROCEDURA_DEFINITIVA_MEDIA_SENZA_UPDATE_PLUGIN.md), **non rilasciare plugin per ogni tavola**. Le statistiche e i rilievi SEO vecchi nel master sono fotografie storiche, non stato corrente.

### Mirto ATL-0147 — PUBBLICATO e verificato (17/11/2026)

**Dieci nuove schede Mirto #525–534 tutte `publish`**: pianta, fonti Kew/BDB, due lemmi (hadas/Hadassah), scheda di medicina storica e quattro schede bibliche. Riutilizzati e collegati Levitico 23:40 #316 e Neemia 8:15 #319 (nessun duplicato). Moldenke voce 138 pp.143–145 e Duke Myrtle pp.279–283 letti integralmente, con correzioni finali su Sukkot, significati distinti, storia della profumeria/concia, avvertenze sugli oli e prove mediche precliniche. **Tavola originale Media #547** caricata via MCP in **15 blocchi**, 343784 byte, SHA-256 `fa2199337be55327274a2a3e71d22c87f88ee77baa054a1c5d068be9f2bd3e78`, ALT e featured confermati in pianta #525. **Audit SEO zero avvisi**, plugin 0.2.4 invariato. Metodologia byte bridge documentata nella [procedura definitiva](PROCEDURA_DEFINITIVA_MEDIA_SENZA_UPDATE_PLUGIN.md). La QA visiva su viewport desktop/mobile resta distinta dall'audit SEO. **Contatori pubblici dopo Mirto: 10 piante, 71 passi, 21 nomi, 10 medicina, 34 fonti** (verificati da MCP).


### Terebinto ATL-0177 — PUBBLICATO / MEDIA_OK / SEO_0 (17/11/2026)

**Verifica in produzione:** 18 schede WordPress #557–574 tutte `publish`, immagine originale `tavola-botanica_pistacia-terebinthus.webp` **Media #575** caricata via MCP in **16/16 blocchi**, SHA-256 corrispondente, ALT, featured e `pdb_plate_media_id=575`; **audit zero avvisi**. Nomenclatura corretta secondo Kew e differenze bibliche di identificazione separate da toponimi/nomi propri. Il file staging base64 è stato eliminato. La procedura definitiva immagini è documentata e resta la via predefinita per tutte le specie, **senza aggiornamenti di pdb-atlante 0.2.4**. Le registrazioni storiche del master a versioni precedenti sono state conservate come cronologia, non stato corrente.

**Conteggi pubblici verificati via MCP dopo Terebinto:** **11 piante**, **81 passi biblici**, **24 nomi biblici**, **11 schede di medicina storica**, **37 fonti bibliografiche**. La QA fotografica viewport mobile/desktop è ancora un controllo distinto dall'audit tecnico. Prossima voce suggerita, per confronto delle resine ma come specie separata: **ATL-0176 Lentisco (*Pistacia lentiscus*)**. [Dossier Terebinto](ATL-0177_TEREBINTO_DOSSIER_2026-11-17.md) · [Progressi](ATL-0177_TEREBINTO_PROGRESSI_2026-11-17.md).

### Lentisco ATL-0176 — PUBBLICATO / MEDIA_OK / SEO_0 (17/11/2026)

Verifica WordPress: **12 nuove schede #597–608, tutte pubblicate**, originale WebP **Media #609** e immagine in evidenza della pianta #597, ALT confermato, **22/22 blocchi MCP** e checksum SHA-256 identico (`0cf339de26d158a3a2c24e1dce15a05fb9d826195331277bdd5acdf816cbc7ec`). File staging Base64 privato eliminato dopo l'upload; `pdb-atlante 0.2.4` non aggiornato. Audit SEO della pianta: **zero avvisi**. Pagine e fonti trattano Susanna 13:54–59, Genesi 37:25, Geremia 8:22, Ezechiele 27:17 e riusano Genesi 43:11 senza doppione. Le fonti sono Moldenke voce 161 pp177–178, Duke Mastic pp339–341, Kew, BDB H6875, CEI 2008 ed EMA (monografia uso tradizionale 2016 e addendum 2024). Il Siracide 24:16 resta attribuito al terebinto, non al lentisco. **Conteggi pubblici verificati via MCP:** 12 piante, 85 passi biblici, 26 nomi, 12 medicina, 41 fonti. QA fotografica manuale desktop/mobile ancora distinta da quella strutturale. Procedura di upload ripetibile in [file media](PROCEDURA_DEFINITIVA_MEDIA_SENZA_UPDATE_PLUGIN.md). [Dossier Lentisco](ATL-0176_LENTISCO_DOSSIER_2026-11-17.md).

### Standard di audit finale e lotti autonomi — 17/11/2026

**Procedura permanente:** [PROCEDURA_AUDIT_FINALE_E_LOTTI_AUTONOMI.md](PROCEDURA_AUDIT_FINALE_E_LOTTI_AUTONOMI.md). Per **ogni specie**, prima di pubblicare, confrontare integralmente le sezioni pertinenti dei PDF Moldenke e Duke con le schede preparate, aggiungendo eventuali omissioni (morfologia, areale, nomi, tutti i passi, tradizioni, storia commerciale, ricerche, rischi, confini con specie adiacenti). Verificare Kew, lingua originale e traduzioni, SEO e tavola con SHA via MCP. Non cambiare plugin 0.2.4. No duplicati e no pubblicazione senza prova server. **Attività di avanzamento quotidiana attiva**: `6afc98c5562c819187751443bd904c12`, circa 10:00 Europe/Rome dal 18/11/2026, **due specie per esecuzione** quando fattibile. Primo lotto previsto: ATL-0015 **Allium cepa** e ATL-0017 **Allium sativum** (restano aperte). È un programma, non la dichiarazione di un lotto già pubblicato. Revisione extra Lentisco #597/#604 conclusa e audit 0.

### Lotto Allium ATL-0015 / ATL-0017 — CHIUSO, PUBBLICATO e verificato (17/11/2026)

**Risultati su WordPress verificati**: **14 nuovi contenuti tutti `publish`**: piante Cipolla #627 e Aglio #628, unico passo condiviso Numeri 11:5–6 #626, due termini H1211/H7762 #630–631, due schede medicinali #639–640, sette nuove fonti bibliografiche #633–638 e #661. Nessun duplicato del passo per aglio e cipolla. Sono stati completati il confronto finale con Moldenke (voci 22–24, pp32–34) e Duke (Onion pp16–20, Garlic pp23–30, distinte dal Leek pp21–23), moderni Kew, EMA, NIH/NCCIH, studio clinico cipolla 2023 e sicurezza veterinaria Merck. Status pubblicati e **SEO zero issue su entrambe le piante**, plugin `pdb-atlante 0.2.4` invariato. Originali WebP caricati via MCP con **hash verificati**: Cipolla **Media #629** (17 blocchi), Aglio **Media #632** (11 blocchi); file staging temporanei eliminati. Controllo viewport fotografico mobile/desktop rimane separato da audit WordPress.

**Totali pubblici MCP dopo il lotto:** **14 piante, 86 passi biblici, 28 nomi/lemmi, 14 medicine storiche, 48 fonti**, senza bozze residue nelle cinque tipologie. [Registro verifiche](ATL-0015_0017_ALLIUM_LOTTO_PROGRESSI_2026-11-17.md) · [Dossier Cipolla](ATL-0015_CIPOLLA_DOSSIER_2026-11-17.md) · [Dossier Aglio](ATL-0017_AGLIO_DOSSIER_2026-11-17.md).

**Prossimo lotto da ricontrollare prima dell'esecuzione:** ATL-0019 *Aloe vera* e ATL-0022 *Anastatica hierochuntica* (Rosa di Gerico), soggetti alla deduplicazione su WordPress e nuova lettura delle fonti. Ogni esecuzione oraria DEVE aggiornare roadmap, dossier e registro solo dopo conferma MCP, senza anticipare pubblicazioni. La procedura editoriale generale resta [qui](PROCEDURA_AUDIT_FINALE_E_LOTTI_AUTONOMI.md).

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

- [x] **ATL-0015 · *Allium cepa*** — **CIPOLLA PUBBLICATA 17/11/2026**; Moldenke voce 24 p33–34 (conclusione della voce) e Duke Onion pp16–20 letti, confronto Kew/BDB. Pianta WP **#627**, passo unico condiviso Numeri 11:5–6 **#626**, lemma bəṣel H1211 **#630**, medicina **#639**, fonti Kew #633, BDB #635, studi 2023 #638 e Merck veterinario #661. Tavola WebP originale **Media #629** 1086×1448, 384150 byte, SHA256 verificato, **17 blocchi MCP**, ALT/featured OK. SEO **0 avvisi**, status `publish` verificato, plugin 0.2.4 invariato. [Scheda](https://piantedellabibbia.altervista.org/piante/cipolla-allium-cepa/) · [Dossier](ATL-0015_CIPOLLA_DOSSIER_2026-11-17.md) · [Progressi lotto](ATL-0015_0017_ALLIUM_LOTTO_PROGRESSI_2026-11-17.md).

- [x] **ATL-0017 · *Allium sativum*** — **AGLIO PUBBLICATO 17/11/2026**; Moldenke voci 22/23 p32 e Duke Garlic pp23–30 letti, disputa storica scalogno/aglio e differenza dal porro; Kew Amaryllidaceae, BDB H7762. Pianta WP **#628**, passo condiviso Numeri 11:5–6 **#626** (nessun duplicato), lemma šûm **#631**, medicina **#640**, fonti Kew #634, BDB #635, EMA #636, NIH/NCCIH #637, Merck #661. Tavola WebP originale **Media #632** 1086×1448, 241004 byte, checksum verificato, **11 blocchi MCP**, ALT/featured OK. SEO **0 avvisi**, status `publish` verificato, plugin 0.2.4 invariato. [Scheda](https://piantedellabibbia.altervista.org/piante/aglio-allium-sativum/) · [Dossier](ATL-0017_AGLIO_DOSSIER_2026-11-17.md) · [Progressi lotto](ATL-0015_0017_ALLIUM_LOTTO_PROGRESSI_2026-11-17.md).

- [ ] **ATL-0019 · *Aloe vera*** — Aloe; **M — · D p. 30**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0022 · *Anastatica hierochuntica*** — Rosa di Gerico; **M voce 29, p. 38 · D p. 36**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0024 · *Anemone coronaria*** — Anemone; **M voce 32, p. 41 · D p. 37**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0028 · *Aquilaria agallocha*** — Legno di aloe (aquilaria); **M voce 36, p. 47 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0041 · *Balanites aegyptiaca*** — Dattero del deserto; **M voce 47, p. 55 · D —**; fonte: Moldenke; **stato: DA_CREARE**; WP: `—` · ⚠ Possibile corrispondenza con Balanites aegyptiacus; controllare sinonimia/identificazione.

- [ ] **ATL-0045 · *Boswellia sacra*** — Incenso (Boswellia); **M — · D p. 62**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0047 · *Brassica nigra*** — Senape nera; **M voce 51, p. 59 · D p. 65**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0053 · *Capparis spinosa*** — Cappero; **M — · D p. 76**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [x] **ATL-0055 · *Cedrus libani*** — Cedro del Libano; **M voce 55, pp. 66–70 · D pp. 84–86**; fonte: Moldenke + Duke + Kew + RBGE + IUCN + Diodati 1649; **stato: PUBBLICATA (17/11/2026)**, revisione completa; 18 pagine WordPress online: pianta `266`, medicina `268`, lemma `269`, 12 passi `270–275` + `293–298`, 3 fonti `276–278`, tavola Media `267` caricata via MCP. Indice di 45 riferimenti Moldenke, con eccezioni e anomalie; audit SEO 0 rilievi su 6 contenuti verificati. [Rapporto fonti completo](VERIFICA_CEDRO_DEL_LIBANO_2026-11-17.md). **QA grafica desktop/mobile del Cedro ancora da completare.**

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

- [x] **ATL-0093 · *Cyperus papyrus*** — **PAPIRO PUBBLICATO** (ulteriori Giobbe 9:26 #498 e 2 Giovanni 1:12 #499 con lessici #496–497, citazioni Diodati revisionate), 21 post WordPress pubblicati (#427–441 e #494–499: 1 pianta, 6 fonti, 1 medicina, 5 nomi, 8 passi). Moldenke voce 91 pp.92–94 + supplemento p.281; Duke «Papyrus» pp.172–174; Kew: corretta la confusione di Duke fra Cyperus papyrus e Cyperus rotundus. 6 identificazioni: 3 consolidate, 1 probabile, 2 controverse; 7 legami lessicali; 39 citazioni bibliografiche. SEO Yoast completato, **Media #493 importata in evidenza, SEO 0 avvisi**. Tavola WebP 1086×1448 importata in WordPress Media #493, plugin 0.2.4 attivo; upload delle prossime tavole via MCP, senza aggiornamenti per specie. QA visuale desktop/mobile da eseguire. Totali verificati: **8 piante, 60 passi, 17 nomi, 8 medicina, 30 fonti**. [Dossier](ATL-0093_PAPIRO_DOSSIER_2026-11-17.md) · [Progressi](ATL-0093_PAPIRO_PROGRESSI_2026-11-17.md).

- [x] **ATL-0106 · *Ficus sycomorus*** — **Sicomoro biblico PUBBLICATO**; fonte Moldenke **voce 105, pp.106–108** (pp.106–107 da **trascrizione digitale esterna**, facsimile originali ancora mancanti nel PDF; p.108 e nota p.282 direttamente verificate), Duke **«Sycamore Fig» pp.191–194** originali lette integralmente; **pianta WP #367**, medicina #368, fonti #369–373, nomi #374–376, **8 passi #377–384**, famiglia Moraceae #7. **18 nuove pagine pubblicate**; relazioni con Cedro #266, Olivo #129 e Vite #143 già esistenti. **SEO 0 avvisi**, plugin live **0.2.3**, **tavola WebP originale #426** importata e in evidenza; ALT e provenienza verificati. Contenuti Amos, Zaccheo, Caulifloria, vespe, legenda mariana, lessico e sicurezza medica verificati; **QA visivo desktop/mobile ancora aperto**; la vignetta floreale isolata è artistica e non illustra la reale disposizione dei piccoli fiori interni ai siconi. **Nota iconografica**: immagine scientificamente stilizzata, fiore isolato non diagnostico; confronto Kew per anatomia. [Dossier](ATL-0106_SICOMORO_DOSSIER_2026-11-17.md) · [Progressi](ATL-0106_SICOMORO_PROGRESSI_2026-11-17.md).

- [ ] **ATL-0109 · *Gundelia tournefortii*** — Gundelia; **M voce 30, p. 38 · D p. 201**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0113 · *Hordeum vulgare*** — Orzo; **M voce 110, p. 111 · D p. 205**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0118 · *Juglans regia*** — Noce; **M voce 114, p. 119 · D p. 216**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0131 · *Lens culinaris*** — Lenticchia; **M voce 127, p. 128 · D p. 245**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0132 · *Lilium candidum*** — Giglio bianco; **M voce 112, p. 114 · D p. 247**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [ ] **ATL-0141 · *Mandragora officinarum*** — Mandragora; **M voce 132, p. 137 · D p. 269**; fonte: Moldenke + Duke; **stato: DA_CREARE**; WP: `—`.

- [x] **ATL-0147 · *Myrtus communis*** — **MIRTO PUBBLICATO 17/11/2026**. Nuove schede WordPress #525–534 (10 su 10 `publish`): pianta #525, fonti #526–527, termini #528–529, medicina #530, passi #531–534; Levitico #316 e Neemia #319 collegati e riutilizzati, senza duplicati. Moldenke 1952 voce 138 pp143–145, Duke 2008 Myrtle pp279–283, Kew, BDB H1918/H1919, Diodati 1649. Tavola originale WebP **Media #547** 1086×1448, SHA256 verificato via MCP in 15 blocchi, ALT/featured e `pdb_plate_media_id=547`. **Audit SEO 0 avvisi; plugin 0.2.4 invariato.** [Scheda Mirto](https://piantedellabibbia.altervista.org/piante/mirto-myrtus-communis/) · [Dossier](ATL-0147_MIRTO_DOSSIER_2026-11-17.md) · [Progressi](ATL-0147_MIRTO_PROGRESSI_2026-11-17.md).

- [ ] **ATL-0149 · *Nardostachys grandiflora*** — Nardo; **M — · D p. 285**; fonte: Duke; **stato: DA_CREARE**; WP: `—`.

- [x] **ATL-0170 · *Phoenix dactylifera*** — **PALMA DA DATTERO, PUBBLICATA e revisionata**; Moldenke voce 157 **pp.169–172**, Duke «Date Palm» **pp.325–329**; sito WP **Pianta #308**, Media **#344**, medicina **#309**, nomi **#310–311 e #350** (*tōmer*), fonti **#312–314 e #360** (quattro specie Sukkot), passi **#315–322 e #351–353** (11 nuovi); riuso Salmo #274 e Gioele #222, Neemia #319 collegato anche a Olivo #129. **SEO audit 0 avvisi**, plugin **0.2.2**, testo originale ampio, prove mediche qualificate; **QA visiva responsive aperta**. [Dossier](ATL-0170_PALMA_DA_DATTERO_DOSSIER_2026-11-17.md) · [Audit critico integrale Moldenke/Duke](ATL-0170_AUDIT_COMPLETO_MOLDENKE_DUKE_2026-11-17.md) · [Progressi](ATL-0170_PALMA_DA_DATTERO_PROGRESSI_2026-11-17.md).

- [x] **ATL-0176 · *Pistacia lentiscus*** — **LENTISCO PUBBLICATO 17/11/2026**: WP pianta #597, fonti Kew/CEI/BDB/EMA #598–601, termini greco ed ebraico #602–603, medicina #604, quattro nuovi passi #605–608; Genesi 43:11 #474 riutilizzato senza duplicati. Moldenke voce 161 pp177–178 e Duke Mastic pp339–341 confrontati con Kew taxon accettato e CEI Daniele/Susanna 13:54–59. Il v54 dice lentisco, il v58 dice leccio; non attribuire tutti i balsami ṣŏrî H6875 al lentisco. Monografia EMA = **uso tradizionale** (non cure oncologiche). Tavola originale **Media #609**, 1086×1448 WebP, 22 blocchi MCP con SHA verificato e ALT/featured. **Audit SEO 0 avvisi**, plugin 0.2.4 invariato. [Scheda](https://piantedellabibbia.altervista.org/piante/lentisco-pistacia-lentiscus/) · [Dossier](ATL-0176_LENTISCO_DOSSIER_2026-11-17.md) · [Progressi](ATL-0176_LENTISCO_PROGRESSI_2026-11-17.md).

- [x] **ATL-0177 · *Pistacia terebinthus*** — **TEREBINTO PUBBLICATO 17/11/2026**, 18 nuovi contenuti WP: pianta #557, fonti Kew/BDB/CEI #558–560, termini ebraici #561–563, medicina #564, dieci passi #565–574. **Moldenke** voce 162 pp178–179 (*P. terebinthus* var. *palaestina*, nome storico) e **Duke** Terebinth pp341–342 controllati integralmente; Kew accetta *Pistacia terebinthus* L. e considera *Pistacia palaestina* sinonimo. Diodati 1649 per i passi canonici e CEI 2008 per Siracide deuterocanonico; Gen18:8 generico, Valle di Ela toponimo, Assalonne/Ofra dubbie, Isaia/Osea traduzioni da esplicitare. **Tavola WebP originale Media #575**, caricamento diretto MCP in 16 blocchi con SHA-256 verificato, ALT, featured e `pdb_plate_media_id=575`. **SEO 0 avvisi**, plugin 0.2.4 invariato. [Scheda](https://piantedellabibbia.altervista.org/piante/terebinto-pistacia-terebinthus/) · [Dossier](ATL-0177_TEREBINTO_DOSSIER_2026-11-17.md) · [Progressi](ATL-0177_TEREBINTO_PROGRESSI_2026-11-17.md).

- [x] **ATL-0184 · *Prunus amygdalus* Batsch** — **MANDORLO PUBBLICATO il 17/11/2026: 13 contenuti WordPress**, pianta #467 (https://piantedellabibbia.altervista.org/piante/mandorlo-prunus-amygdalus/), medicina #469, termini ebraici #470–471, fonti Kew #472 e BDB #516, 7 passi #473–479. **Moldenke** voce 28 pp.35–38 e **Duke** Almond pp.355–360 controllati; Diodati 1649 estratti da trascrizione digitale integrati, Gen30:37 «nocciuolo» e differenze filologiche chiarite. Nome accettato Kew *Prunus amygdalus*, sinonimi *Prunus dulcis* e *Amygdalus communis*. **MEDIA_OK via MCP:** tavola WebP originale caricata in 6 blocchi, media #523, featured #523, ALT, checksum verificato. **SEO: zero avvisi**, markup pubblico verificato; eventuale QA fotografica responsive resta separata dall'audit DOM. Nessun aggiornamento del plugin 0.2.4. **Prossima specie: ATL-0147 Mirto (*Myrtus communis*)**. [Dossier](ATL-0184_MANDORLO_DOSSIER_2026-11-17.md) · [Progressi](ATL-0184_MANDORLO_PROGRESSI_2026-11-17.md) · [Procedura media](PROCEDURA_DEFINITIVA_MEDIA_SENZA_UPDATE_PLUGIN.md).

- [x] **ATL-0186 · *Punica granatum*** — Melograno; **M voce 169, pp. 189–191 · D pp. 362–367**; fonte: Moldenke + Duke + Kew + NCCIH; **stato: PUBBLICATA (QA visivo mobile/desktop da completare)**; WP: `212` (pianta), `213` (medicina), `214` (nome antico), `218–223` e `241–244` (10 passi), fonti `215–217` e `240`; già esistente #195 (Numeri 13:24) collegato. **Tassonomia confermata:** Lythraceae (Punicaceae storica).

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
| 2026-11-17 | ATL-0186 · Melograno | Esaminate voci originali, aggiunti 1 Sam 14:2, 1 Re 7, Numeri 20:5, Cantico 4:13; rivisti ornamenti, concia/coloranti, miti di fertilità, medicina; corretta sarcotesta (Foods 2024); SEO verificata | PUBBLICATA | Moldenke voce 169 pp. 189–191; Duke Pomegranate pp. 362–367; Kew; NCCIH; Melgarejo et al. Foods 2024; Diodati 1649 | 212–223 e 240–244 (17 nuove pagine); citazione #195 condivisa; Media #238 | 4 piante e 21 passi in sito; 0 avvisi SEO sulle pagine editoriali incluse nell'audit; QA mobile/desktop da effettuare. |
| 2026-11-17 | SITE / template desktop 0.2.0 | Menu WordPress primary aggiornato a 6 voci; 4 excerpt biblici completati e DOI Melgarejo registrato; pacchetto desktop responsive e indice degli approfondimenti prodotto | PLUGIN_0.2.0_LIVE / QA_MOBILE_APERTO | Screenshot desktop 6 modelli, file plugin 0.1.9, audit SEO WordPress | Menu #3; citazioni #241–244; fonte #240 | Validare versione 0.2.0 dopo installazione, QA mobile e desktop; mantenere attivi media MCP e versetti originali. |
| 2026-11-17 | SITE / homepage 0.2.1 | Correzione above-the-fold per homepage Atlante desktop, titolo e hero compattati, ricerca più alta con fallback lato tema | PLUGIN_0.2.1_LIVE / DESKTOP_VERIFICATO | Screenshot browser desktop 1366×768; sorgente plugin 0.2.0 | Plugin 0.2.1 (ZIP) | QA visuale live prima di chiudere; nessuna modifica WordPress in questa fase. |
| 2026-11-17 | ATL-0055 · Cedro del Libano | Riesaminati PDF originali e Github Moldenke/Duke; recuperati 45 riferimenti classificati per certezza, aggiunte 6 schede bibliche, corretti 2 rimandi anomali e ampliate botanica, ’erez e medicina Duke | PUBBLICATA | Moldenke 55 pp.66–70; Duke Cedar of Lebanon pp.84–86; Kew/RBGE/IUCN/Diodati 1649; [verifica integrale](VERIFICA_CEDRO_DEL_LIBANO_2026-11-17.md) | WP #266, #268–278 e #293–298; Media #267 | 18 nuove pagine pubblicate; SEO audit 0 avvisi su 6 esaminati, sito 5 piante/33 passi. QA grafica mobile/desktop Cedro da eseguire; prossima Palma da dattero. |
| 2026-11-17 | ATL-0170 · Palma da dattero | Dossier 2.429 parole; Fonti Moldenke pp.169–172 e Duke pp.325–329; 15 bozze MCP, 9 identificazioni e 8 legami lessicali, 27 citazioni fonti; WebP originale generata | BOZZA_WP / REVISIONE_APERTA | Moldenke 1952; Duke 2008; Kew; BDB; revisione 2026 | 308–322; riuso #274 | Nessuna pubblicazione; media e SEO da collegare, verifica Diodati e QA grafica aperte. [Progressi](ATL-0170_PALMA_DA_DATTERO_PROGRESSI_2026-11-17.md). |
| 2026-11-17 | ATL-0170 · Palma da dattero | Rifinita bozza #308, famiglia Arecaceae #6, campi Studio Manager e Yoast, 8 citazioni Diodati revisionate, medicina #309 ampliata; recuperati Gioele #222 e Neemia/Olivo | BOZZA_WP / SEO_CORRETTA / QA_MEDIA_APERTA | Moldenke pp.169–172; Duke pp.325–329; Kew; BDB; Diodati 1649 | 308–322; riuso 274, 222 e 129 | Audit 1 solo avviso: immagine; versione plugin 0.2.2 preparata ma **non installata**; QA desktop/mobile e pubblicazione aperti. [Progressi](ATL-0170_PALMA_DA_DATTERO_PROGRESSI_2026-11-17.md). |
| 2026-11-17 | ATL-0170 · Palma da dattero | Verifica successiva: plugin 0.2.2 LIVE, import MCP idempotente della tavola #344, SEO audit 0 avvisi, tutte le 15 bozze con slug descrittivo e 8 passi approfonditi | BOZZA_WP / SEO_OK / MEDIA_OK / QA_VISIVA_APERTA | Moldenke pp.169–172; Duke pp.325–329; Kew; Diodati 1649 | 308–322; Media 344; riuso 274, 222, 129 | Tutti i nuovi elementi restano BOZZA. QA grafico desktop/mobile, controllo tavola e pubblicazione ancora aperti. [Registro](ATL-0170_PALMA_DA_DATTERO_PROGRESSI_2026-11-17.md). |
| 2026-11-17 | **ATL-0170 · Palma da dattero — CHIUSURA EDITORIALE E PUBBLICAZIONE** | Audit completo Moldenke voce 157 pp.169–172 e Duke pp.325–329, correzioni etrog/Cedrus, tōmer/tāmār, Geremia controverso, allergenicità e limiti clinici; 20 nuove pagine WP + tavola #344 | **PUBBLICATA / SEO 0 / FONTI VERIFICATE / QA_VISIVA_APERTA** | [Audit completo](ATL-0170_AUDIT_COMPLETO_MOLDENKE_DUKE_2026-11-17.md) · Kew · BDB · Sefaria · Diodati 1649 | 308–322, 350–353, 360, media 344 | **Totali verificati: 6 Piante, 44 Passi, 9 Nomi, 6 Medicina, 19 Fonti.** Il Cedro #266 non modificato. Responsive desktop/mobile resta da controllare visivamente. |
| 2026-11-17 | ATL-0106 · Sicomoro | Identificata voce Moldenke 105 pp.106–108 (pp.106–107 mancanti nel PDF); Duke pp.191–194 lette; 18 nuove bozze WordPress; tassonomia, 8 passi, 3 nomi, 5 fonti, medicina e tavola preparati | **BOZZA_WP / SEO_SOLO_MEDIA / QA_APERTA** | [Dossier](ATL-0106_SICOMORO_DOSSIER_2026-11-17.md) · [Progressi](ATL-0106_SICOMORO_PROGRESSI_2026-11-17.md) | Pianta #367, medicina #368, fonti #369–373, termini #374–376, passi #377–384 | Plugin 0.2.3 ZIP pronto da installare, nessuna pubblicazione nuova; contatori 6/44/9/6/19. Da recuperare pp.106–107 di Moldenke. |
| 2026-11-17 | **ATL-0106 Sicomoro — pubblicazione e audit finale** | Collazione Moldenke voce 105: pp.106–107 da trascrizione esterna, p.108 e note p.282 dal PDF utente, figura 62; Duke pp.191–194 originali; testo botanico 3.200+ parole e 18 nuove pubblicazioni | **PUBBLICATA / SEO_TESTI_OK / MEDIA_DA_IMPORTARE / QA_VISIVA_APERTA** | [Audit completo](ATL-0106_SICOMORO_AUDIT_MOLDENKE_DUKE_2026-11-17.md) | WP #367–384; 18 elementi | Totali 7/52/12/7/24; unico rilievo SEO su #367: featured image assente. Plugin 0.2.3 pronto con tavola WebP; live 0.2.2. |
| 2026-11-17 | **ATL-0106 · Sicomoro PUBBLICATO** | Complicate pp.106–107 Moldenke da OCR esterno segnalato, p.108 e supplemento 282 da originale; Duke pp.191–194 originali; ampliati 8 passi, 3 lemmi, medicina, 9 citazioni di fonte; 18 nuove pagine WP ora publish | **PUBBLICATA / SEO_MEDIA_APERTA / QA_VISIVA_APERTA** | [Dossier](ATL-0106_SICOMORO_DOSSIER_2026-11-17.md) · [Progressi](ATL-0106_SICOMORO_PROGRESSI_2026-11-17.md) | #367–384; famiglia Moraceae #7, plugin 0.2.2 | Totali MCP **7/52/12/7/24**. ZIP 0.2.3 pronto ma non installato, immagine in evidenza ancora assente e unico avviso SEO; non dichiarare test responsive. |
| 2026-11-17 | **ATL-0093 · Papiro** | Riletti Moldenke voce 91 pp92–94 + p281 e Duke Papyrus pp172–174; scoperto falso sinonimo di Cyperus rotundus; create 15 bozze, 6 identificazioni, 7 termini, 22 citazioni | **BOZZA_WP / SEO_SOLO_MEDIA / DIODATI_QA_APERTA** | [Dossier](ATL-0093_PAPIRO_DOSSIER_2026-11-17.md) · [Progressi](ATL-0093_PAPIRO_PROGRESSI_2026-11-17.md) | #427–441, Cyperaceae #8 | Nessuna nuova pubblicazione; sette piante pubblicate confermate, prossimi: Diodati, tavola, QA. |
| 2026-11-17 | ATL-0093 Papiro — pubblicazione | Completati Moldenke 92–94, nota 281 e Duke 172–174; integrate tecnica delle barche a fasci, storia dei documenti antichi, nomi errati e caveat medici; pubblicate 15 schede WP | PUBBLICATA / SEO_MEDIA_APERTA | Fonti originali e Kew / Diodati 1649 | #427–441 | Totali 8/58/15/8/28. WebP e 0.2.4 pronti; resta import immagine e QA responsive. |
| 2026-11-17 | **ATL-0184 Mandorlo — avvio** | Kew: Prunus amygdalus accettato, Prunus dulcis/Amygdalus communis sinonimi. Lettura Moldenke 35–38 e Duke 355–360, 12 bozze WP e relazioni, errore confine laetrile p355 corretto | **BOZZE / SEO_MEDIA_DA_CREARE / DIODATI_QA_APERTA** | [Dossier](ATL-0184_MANDORLO_DOSSIER_2026-11-17.md) · [Progressi](ATL-0184_MANDORLO_PROGRESSI_2026-11-17.md) | #467 e #469–479 | 7 bibbia, 2 lemmi, 1 medicina, 1 fonte. Mandorlo NON pubblicato; conteggi sito restano 8/58/15/8/28. |
| 2026-11-17 | **Piante della Bibbia — chiusura problema aggiornamenti frequenti** | Plugin live 0.2.4; Papiro #427/Media #493 ora OK (ALT, in evidenza, SEO 0); test avvio+annullamento upload MCP generico su Mandorlo #467 | **BUG_DI_PROCESSO_RISOLTO / MEDIA_PAPIRO_OK / MANDORLO_DRAFT** | [Procedura senza update](PROCEDURA_DEFINITIVA_MEDIA_SENZA_UPDATE_PLUGIN.md) | #427/#493; #467 | Nessuna futura release per una tavola; nuovo flusso immagini WordPress Media + MCP. Non dichiarare test completo di upload Mandorlo, file ancora locale. |
| 2026-11-17 | **Papiro: nuove citazioni da Giobbe e 2 Giovanni** | Confronto BDB H16, Thayer G5489 e Diodati 1649: Giobbe 9:26 barche/«saette», 2 Giovanni 1:12 carta, 3 Giovanni 1:13 calamo non identificabile; pubblicate 6 schede #494–499 e collegate a Papiro #427 | **PUBBLICATA / SEO 0 / MEDIA 493** | [Progressi Papiro](ATL-0093_PAPIRO_PROGRESSI_2026-11-17.md) · [Procedura media](PROCEDURA_DEFINITIVA_MEDIA_SENZA_UPDATE_PLUGIN.md) | #494–499 | Totali pubblicati 8 piante / 60 passi / 17 nomi / 8 medicina / 30 fonti; Mandorlo in bozza. |
| [AAAA-MM-GG] | ATL-XXXX | [Sintesi attività] | [Stato] | [Pagine/fonti] | [ID] | [Blocchi/decisioni] |

### Protocollo immagini via MCP (plugin 0.1.9)

- **Stato al 17 novembre 2026:** pacchetto `pdb-atlante-0.1.9.zip` **installato e verificato** su Altervista. `pdb/atlas-health` = `0.1.9`; `pdb/atlas-media-import-bundled` = 0 importate, 5 già presenti, 0 errori.
- **Tavola Melograno:** immagine WebP originale inclusa nel plugin e **importata automaticamente** nella Libreria Media WordPress #238, associata alla scheda #212 (featured e `pdb_plate_media_id`). Alt text e provenienza registrati.
- **Import diretto locale:** l'abilità `pdb/atlas-media-import-bundled` importa e collega le tavole senza connessioni HTTPS in uscita, e restituisce gli ID media.
- **Tavole nuove senza reinstallare ogni volta:** protocollo MCP autenticato `pdb/atlas-media-start` → blocchi `pdb/atlas-media-chunk` → `pdb/atlas-media-finish`. Trasferimento base64 per blocchi da 48 KiB massimo, SHA-256 e validazione del MIME, fino a 8 MiB. Ogni chiamata richiede un amministratore WordPress autorizzato.
- **Sicurezza:** non sovrascrivere immagini in evidenza esistenti senza richiesta esplicita; verificare `pdb_plate_media_id`, `_thumbnail_id`, alt text, Media Library e resa mobile.
- **Test locali:** tavola WebP Punica 431716 byte, 11 blocchi, checksum finale identico e registrazione simulata; PHP lint e ZIP integri. **Test live:** importazione locale idempotente e senza errori, Media #238 e featured #212 verificati; protocollo MCP `media-start` → `media-chunk` (68 byte ricevuti) → `media-abort` superato senza media residui. Finalizzazione (`media-finish`) con un file nuovo ancora da provare alla prossima tavola; non crearne una copia di test inutile.

### Pulizia pagina tecnica «Notifiche push» — 17 novembre 2026

- **Pagina WordPress #112:** «Notifiche push», creata e non più modificata dal 12 dicembre 2018, senza contenuto, senza estratto; nessun plugin dedicato alle notifiche push nella lista dei plugin WordPress attivi.
- **Decisione:** la pagina non è necessaria all'Atlante; su richiesta dell'utente è stata spostata nel **Cestino WordPress**, non eliminata definitivamente, per consentire il ripristino. MCP `ewpa/delete-post` ha restituito successo.
- **Verifica post intervento:** plugin `pdb-atlante` ancora versione `0.2.1`; audit `pdb/seo-audit` ora 5 elementi controllati e **zero avvisi**, senza il precedente rilievo sull'immagine mancante della pagina tecnica. Il menu primary continua a usare 6 voci proprie.
- **Nota prudenziale:** l'assenza di plugin push attivi non esclude un vecchio servizio esterno di Altervista; la pagina può essere ripristinata dal Cestino se una dipendenza esterna emerge.
- **Mobile:** ricevuto screenshot della homepage generale del tema (hero verde e schede botaniche, non della route `/atlante/`); non è una prova completa di regression test della pagina Atlante mobile 0.2.1. La verifica dedicata di `/atlante/` rimane aperta.

### Rifinitura homepage above-the-fold — Atlante 0.2.1 (17 novembre 2026)

- **Motivazione:** screenshot desktop 1366 × 768, zoom 100%: il grande blocco del titolo e il margine sottostante lasciano il modulo «Cerca nell'erbario biblico» sotto la piega, pur essendo la funzione centrale della pagina.
- **Stato reale (17/11/2026):** plugin `pdb-atlante 0.2.1` **installato e confermato attivo** con `pdb/atlas-health`; screenshot desktop Chrome 1366×768 (zoom 100%) conferma hero ridotta, H1 su una riga e campo/pulsante di ricerca visibili senza scroll. Nessuna modifica ai dati editoriali del database dovuta a questa patch.
- **Implementazione:** CSS limitato a `body.page-id-131` con media query desktop `min-width:960px`; compatta la hero del tema, riduce H1 e distanze fra hero e box di ricerca. Fallback JavaScript locale `assets/atlas-home-compact.js` identifica il titolo principale e assegna classi CSS al contenitore hero quando i selettori del tema non coincidono. Nessuna rete esterna, nessun dato personale e nessuna scrittura WordPress.
- **Preservazione:** 5 CPT, 4 tavole botaniche incluse, MCP immagini, menu WordPress, schede e versetti invariati. Mobile sotto 960px fuori intervento.
- **Test effettuati:** PHP lint 11 file, `node --check` sul nuovo JS, ZIP integrità 21 file, SHA256 `75668dd6a0c60db114cd5145813b81657c838ef7cc05280f2d78ff4b9162916f`.
- **Verifiche effettuate:** `pdb/atlas-health` riporta `0.2.1`; screenshot reale desktop 1366 × 768 al 100% mostra ricerca e pulsante senza scorrere; menu, palette e impaginazione preservati. Audit SEO: zero problemi sulle schede editoriali controllate, avviso soltanto su pagina tecnica `Notifiche push` #112. **Da verificare ancora:** regressioni mobile e singola scheda Melograno nella 0.2.1.

### Consolidamento grafico desktop — Atlante 0.2.0 (17 novembre 2026)

**Stato reale al 17 novembre 2026:** plugin `pdb-atlante 0.2.0` **installato e attivo** (confermato da `pdb/atlas-health`). Verificati tramite screenshot desktop la pagina Atlante e la scheda Melograno con gli approfondimenti aperti: griglia quattro colonne, menu a sei voci e indice dello studio presenti. QA visiva mobile della 0.2.0 e prova di navigazione interattiva dei collegamenti ancora da completare.

**Modifiche già eseguite su WordPress, indipendenti dal plugin:**
- Il menu esistente WordPress `navigazione` (ID 3) ora ha 6 voci: Atlante, Piante, Bibbia, Medicina, Nomi antichi, Fonti; assegnato e verificato alla posizione `primary` del tema. La pagina «Notifiche push» non è stata cancellata.
- Excerpt incompleti corretti sui passi `241–244` usando le sintesi complete già presenti nel database, senza alterare i testi principali.
- La fonte scientifica `240` (Melgarejo et al. 2024) dispone ora del DOI `10.3390/foods13020201` registrato nei metadati.
- Audit SEO dei contenuti editoriali: nessun rilievo (rimane avviso sulla sola pagina tecnica `Notifiche push` #112).

**Modifiche implementate nel nuovo pacchetto da installare:**
1. Etichetta «Diodati 1649» / «Diodati 1821» determinata dal titolo della fonte, eliminando la vecchia dicitura fissa 1821.
2. Schede dell'Atlante in quattro colonne desktop su schermi ampi, larghezza aumentata senza cambiare il contenuto della pagina nel database.
3. Card orizzontali per specie collegate a citazioni e nomi antichi; card medicinali più ampie, senza lunghi blocchi in maiuscolo.
4. Indice interno a titoli H2, con ancore e indice laterale per gli approfondimenti lunghi Moldenke/Duke, senza rimuovere sezioni.
5. Schede bibliografiche con DOI cliccabile e collegamento evidente alla fonte ufficiale; numero articolo 201 distinto dalle pagine delle opere.
6. Intro non duplicate, didascalie delle tavole senza nomi file tecnici, suggerimenti di altre piante in fondo alle schede.
7. Conservazione dei trasferimenti MCP per media, delle tavole botaniche, delle relazioni e della grafica mobile validata (0.1.8).

- **Riscontro screenshot 17/11/2026:** homepage Atlante con quattro piante nella stessa riga (Olivo, Vite, Fico, Melograno), ricerca larga, menu a 6 voci e passi biblici a card. Scheda Melograno con tavola, blocco introduttivo, indice interno all'approfondimento Moldenke–Duke, fonti e suggerimenti di piante correlate. La schermata lunga del Melograno è compressa, quindi i dettagli di tipografia e i collegamenti al clic non sono ancora accertati. Nessuna modifica ai dati WordPress richiesta da questa verifica.

**Test locali:** PHP lint superato per 11 file; helper bibliografia 1649/1821, pagina/articolo, indice editoriale e ancore duplicate verificati; ZIP controllato; SHA256 `17522dc90c0bb274e65e169fb90e347ace796191cc156fe0048bd4d11685618b`. **Verifica sul sito:** MCP `atlas-health` conferma 0.2.0; `pdb/seo-audit` segnala zero problemi sulle schede editoriali verificate, il solo avviso riguarda `Notifiche push` (#112). Screenshot desktop della pagina Atlante e della scheda Melograno confermano i nuovi layout; resta il controllo responsive mobile e il test manuale dei link al clic.

### Dettaglio di lavorazione — ATL-0186 Melograno (17 novembre 2026)
- **Revisione editoriale 17/11/2026:** nuove citazioni su Saul (1 Sam 14:2), capitelli del Tempio (1 Re 7), deserto (Numeri 20:5), giardino (Cantico 4:13); distinte interpretazioni storico-culturali di Moldenke da evidenza botanica; corretta la terminologia «arillo» con «sarcotesta» sulla base di Melgarejo et al., *Foods* 2024; distinti rischi di corteccia radicale e usi alimentari secondo Duke/NCCIH. Pubblicazione confermata WordPress, QA visuale da completare.


- **Stato:** `PUBBLICATA` il 17 novembre 2026: tutte le 17 nuove pagine in stato `publish`, media #238 associato, audit SEO editoriale senza problemi; verifica grafica mobile/desktop ancora da completare.
- **Fonti direttamente consultate:** Moldenke, voce 169, pp. 189–191 (pagina PDF 185–187); Duke, voce «Pomegranate», pp. 362–367 (PDF 388–393). Consultati inoltre Kew POWO e NCCIH. Nessuna presunta prova clinica attribuita alle liste popolari di Duke.
- **Schede WordPress pubblicate:** botanica `212`; medicina `213`; rimmôn `214`; fonti `215–217`, `240`; passi `218–223` e `241–244`. Il già pubblicato Numeri 13:24 `195` è stato collegato al Melograno.
- **Relazioni:** salvate identificazioni, nomi antichi e citazioni delle fonti, comprese 6 nuove identificazioni e nuove citazioni durante la revisione finale; i passi condivisi richiamano anche Olivo, Fico e Vite.
- **Tassonomia:** `Punica granatum L.` accettata, Lythraceae; `Punicaceae` nel testo Duke come classificazione storica. Il termine Rimmon nel nome di una divinità non è una pianta.
- **Tavola originale:** `tavola-botanica_punica-granatum.webp` (1086 × 1448 px, ~432 KB), creata digitalmente nello stile botanico ottocentesco, **non** una riproduzione di Thomé. Media WordPress #238 importato e collegato automaticamente dal plugin 0.1.9.
- **Da completare:** verifica visuale mobile/desktop e collegamenti nel frontend. Non rimangono bozze relative alla lavorazione Melograno. Il rilievo SEO residuo riguarda soltanto la pagina tecnica `Notifiche push` #112.

### Dossier in lavorazione — ATL-0055 Cedro del Libano (17 novembre 2026)

- **Stato reale:** `BOZZA_WP`, non pubblicato; plugin `pdb-atlante` 0.2.1 attivo. La revisione desktop e mobile del plugin è considerata chiusa sui modelli già pubblicati, mentre il nuovo dossier non ha ancora QA editoriale finale e responsive.
- **Fonti originali lette:** Moldenke e Moldenke, `Plants of the Bible` (1952), voce 55 **pp. 66–70**, compresi i rimandi biblici, la descrizione botanica, la storia dei boschi e le leggende posteriori; Duke, `Handbook of Medicinal Plants of the Bible` (2008), voce «Cedar of Lebanon» **pp. 84–86**, complete le sezioni Notes, Synonyms, Activities, Indications, Dosages, Downsides, Extracts.
- **Tassonomia e conservazione:** nome accettato `Cedrus libani A.Rich.` (Kew), Pinaceae; forma «Loud.» di Moldenke è isonimo successivo; IUCN Vulnerabile (VU), valutazione globale del 2011 pubblicata nel 2013; consultati RBGE per morfologia e rischi.
- **WordPress bozze:** pianta #266 (oltre 2300 parole, con immagine), usi medicinali #268, lemma ebraico `’erez` #269, Giudici 9:15 #270, 1 Re 4:33 #271, 1 Re 5:6–10 #272, 2 Sam 5:11 #273, Salmo 92:12 #274, Ezechiele 17:22–24 #275; fonti Kew #276, RBGE #277, IUCN #278. Il passo Giudici 9:15 si collega alla favola già pubblicata Giudici 9:8–13 senza duplicarla.
- **Relazioni create:** 6 identificazioni fra pianta, passo e lemma; 6 collegamenti lessicali; 21 citazioni di fonte collegate alle bozze. Non classificare come certi i «cedri» rituali di Levitico 14 o Numeri 19:6, discussi da Moldenke, né confondere il nome «deodar» della medicina popolare con la specie esatta senza prova.
- **Tavola:** nuova illustrazione digitale originalissima in stile cromolitografia ottocentesca, albero adulto, aghi su brachiblasti, coni femminili eretti, pollinici e semi alati; `tavola-botanica_cedrus-libani.webp` 1086×1448, 386484 byte; **caricata e associata automaticamente via MCP** in 11 blocchi, SHA-256 `84e8ffc08c558ab03c59d1c71c55c355ed32a2ff6f9788811e1d5cca6e1073c8`, Media WordPress #267, featured della bozza #266. Nessuna reinstallazione plugin necessaria.
- **QA:** corretto l'estratto Ezechiele 17:22 prima di pubblicare, per aderire letteralmente alla Diodati 1649; metadati SEO e slug impostati nelle bozze. **Da completare:** revisione filologica di tutti i virgolettati, eventuali passi condivisi con altre specie, audit prima della pubblicazione, screenshot desktop/mobile del Cedro appena online. Non segnare `PUBBLICATA` fino alla conferma MCP dello stato `publish`.

### Verifica finale ATL-0055 — Cedro del Libano, 17 novembre 2026

- **Rapporto analitico:** [VERIFICA_CEDRO_DEL_LIBANO_2026-11-17.md](VERIFICA_CEDRO_DEL_LIBANO_2026-11-17.md), con 45 riferimenti Moldenke classificati per certezza, confronto completo con Duke pp.84–86, anomalie filologiche, controllo della traduzione Diodati 1649 e registro delle 18 pagine pubblicate.
- **Correzioni critiche:** 2 Re 10:27 non menziona il cedro nella Diodati; «2 Cronache 22:14» nella fonte storica è un riferimento inesistente: non creare identificazioni sicure; inoltre Lev 14, Num 19:6, Ez 27:5 e 31:8 sono identificazioni discusse, spesso relative a ginepro o pino secondo Moldenke.
- **Contenuti recuperati:** favola dello spino 2 Re 14:9, Cantico 1:17, Isaia 14:8, Salmo 29:5, Zaccaria 11:1–2, casa di cedri di Davide 2 Sam 7:2; testimonianze di Tristram, Warburton, Burckhardt, storia delle foreste e distinzione da tradizioni extra-bibliche.
- **Duke:** sei attività e repertorio dei microrganismi, uso sperimentale dell'olio a 1.000 ppm non come ricetta, pratica storica del fumo non raccomandata, confusione con Cedrus deodara esplicitata.
- **Pubblicazione confermata:** WP #266 con tavola #267, #268–278, #293–298; 18 nuove pagine in publish. Plugin 0.2.1. **Audit SEO 0 rilievi sui 6 contenuti esaminati**; inventario pubblicato con 5 piante, 33 passi biblici, 6 nomi antichi, 5 medicine, 15 fonti.
- **Prossimo:** QA visiva Cedro su smartphone e desktop quando disponibili screenshot; sviluppo Palma da dattero `Phoenix dactylifera` secondo ordine roadmap.

### Avanzamento ATL-0106 — Sicomoro (17 novembre 2026, bozze WP)

- **Fonte Moldenke:** l'indice prova che esiste la **voce 105 a p.106**; la copia PDF in Libreria salta le pp.106–107, mentre p.108 è leggibile e riporta l'incisione dei siconi, Amos, 1 Cr 27:28, Salmi 78:47 e le confusioni con sycamore/sycamine. Duke, «Sycamore Fig», **pp.191–194** è invece integralmente disponibile.
- **Sito:** bozza **#367** e 17 schede collegate, 18 bozze in tutto; plugin corrente controllato **0.2.2**, ZIP **0.2.3 preparato** per importazione della nuova tavola; pubblicati restano 6 piante / 44 passi / 9 nomi / 6 medicina / 19 fonti.
- **SEO:** un rilievo sulla bozza, immagine in evidenza assente; no regressioni sulle piante pubblicate. Controlli responsive e completamento pagine Moldenke mancanti aperti. [Dossier](ATL-0106_SICOMORO_DOSSIER_2026-11-17.md), [Progressi](ATL-0106_SICOMORO_PROGRESSI_2026-11-17.md).

### Avanzamento ATL-0170 — Palma da dattero (17 novembre 2026, verifica MCP)

- **Stato:** `BOZZE_WP_COMPLETE_DA_REVISIONARE`; **non pubblicata**. Scheda botanica unica #308 (Phoenix dactylifera L., Arecaceae). Verificati sul WordPress collegato `pdb-atlante 0.2.1` e i 15 contenuti di lavorazione #308–322, tutti `draft`.
- **Schede collegate:** medicina #309; nomi antichi #310 (ebraico tāmār) e #311 (greco phoînix); fonti #312 POWO, #313 BDB, #314 revisione scientifica 2026; otto passi #315–322 (Es 15:27; Lv 23:40; Gdc 4:5; 2 Cr 3:5; Ne 8:15; Ct 7:7–8; Gv 12:13; Ap 7:9).
- **Salmo 92:12:** passo condiviso #274 già in pubblicazione per Cedro #266; collegamento per Palma #308 verificato come identificazione #57. Non duplicare.
- **Matrice e dossier:** [ATL-0170_PALMA_DA_DATTERO_DOSSIER_2026-11-17.md](ATL-0170_PALMA_DA_DATTERO_DOSSIER_2026-11-17.md), Moldenke voce 157 pp.169–172 e Duke «Date Palm» pp.325–329, con interpretazioni controverse separate dalle attestazioni esplicite.
- **Lavori residui:** collazione letterale Diodati 1649, SEO, tavola WebP e featured image, verifica responsive e pubblicazione dopo QA. **Contatori pubblici non incrementati:** 5 piante, 33 passi, 6 nomi, 5 medicina, 15 fonti.

## 14. Aggiornamento e continuità del Markdown

- Questo file è la **fonte di verità della programmazione editoriale**, non è la fonte di verità botanica: le **opere originali e i database tassonomici** rimangono autorevoli per le affermazioni.
- Per ogni sessione: **prima** leggere il master, **poi** leggere le fonti specifiche; **dopo** modificare la stessa riga del catalogo (stato, ID WP, dati verificati), inserire i collegamenti creati e aggiungere una riga al registro.
- Se il catalogo cresce, mantenere i vecchi ID stabili. Vietato riordinare il master cambiando i numeri dei record già usati: per una nuova voce aggiungere un nuovo `ATL-XXXX` progressivo.
- **GitHub master attivo:** `pronosnics/test`, file `moldenke-bible-plants/PIANTE_DELLA_BIBBIA_MASTER_SPECIFICHE_E_ROADMAP.md`, branch `main`. Aggiornare questo file a ogni progresso e annotare gli ID WordPress; evitare copie disallineate. Per un processo automatico è preferibile conservare anche il CSV come indice macchina, ma **il presente Markdown deve restare leggibile e completo autonomamente**.
- Cambiare versione documento (`1.1`, `1.2`…) alla modifica delle regole editoriali; cambiare solo data di aggiornamento per il normale avanzamento di una pianta.
- Per dubbi tassonomici o filologici registrare **decisione, evidenza e autore/data della revisione**: non correggere silenziosamente le fonti storiche.

---

**Obiettivo finale:** non un semplice elenco di erbe, ma un **Atlante storico-botanico biblico completo**, di centinaia di documenti interconnessi, con **schede narrative molto approfondite**, citazioni testuali corrette, apparato di fonti verificabile, tavole botaniche originali e una distinzione rigorosa tra tradizione medicinale e scienza contemporanea.

### Verifica lotto ATL-0019 / ATL-0022 — 17/11/2026 ore 20:28 CET

Controllo MCP `pdb/atlas-health`: plugin **0.2.4** confermato, non modificato. `pdb/atlas-list` con ricerca `Aloe` e `Anastatica`: **nessun risultato** (controllo preliminare, non sostituisce deduplicazione per tutti i lemmi e ID). Il lotto **resta APERTO**: non risultano pubblicazioni, tavole caricate, checksum o audit SEO conclusivi in questa verifica. Fonti preliminari: Duke Aloe pp.30–35 e Anastatica p.36; indice Moldenke Aloe succotrina p.231 e Anastatica p.38; le pagine esatte e i confini delle voci devono essere collazionati sugli originali prima di creare/pubblicare schede. Attenzione: l'`Aloe` biblico aromatico non è automaticamente *Aloe vera*; verificare l'identificazione con cautela. Prossima coppia **ATL-0019 e ATL-0022**, senza spuntare le caselle.


### Seconda verifica lotto ATL-0019 / ATL-0022 — 17/11/2026 ore 21:27 CET

Lotto precedente **ancora APERTO**; non passare ad altre specie e non marcare `[x]`. MCP conferma `pdb-atlante 0.2.4` invariato; ricerche Aloe, Anastatica, aloes senza risultati specifici. Lettura mirata di Duke: Aloe pp.30–34 (p.35 contiene il confine con Anabasis); Anastatica pp.36–37 (non solo p.36). Aggiunte cautele: identificazione dell'aloe in Giovanni 19 non sicura, gel distinto dal lattice; Salmo 83:13 non nomina Anastatica e l'uso tradizionale nel parto non è prova clinica. Dossier ATL-0019 e ATL-0022 e registro lotto aggiornati. Restano da fare confronto integrale Moldenke e Duke, POWO, deduplicazione relazionale, WebP originale con staging/chunk/SHA, audit SEO e QA. **Nessun nuovo contenuto WP o media verificato; prossimo lotto sempre ATL-0019 / ATL-0022.**
