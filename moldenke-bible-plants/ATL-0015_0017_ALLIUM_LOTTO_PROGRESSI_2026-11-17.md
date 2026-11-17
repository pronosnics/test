# ATL-0015 Cipolla + ATL-0017 Aglio — Registro finale del lotto

**Data:** 17 novembre 2026.  
**STATO VERIFICATO:** **LOTTO COMPLETATO, PUBBLICATO, IMMAGINI_OK, SEO_0**  
**Repository:** pronosnics/test; la roadmap deve contrassegnare entrambe le specie [x].  
**Automazione autonoma:** `6afc98c5562c819187751443bd904c12` — frequenza oraria, secondo roadmap.

## Check conclusivi verificati tramite MCP WordPress

- [x] **14 nuovi contenuti, tutti `publish`**: 2 piante, 1 passo biblico condiviso, 2 termini, 2 schede di medicina storica, 7 fonti bibliografiche.
- [x] **Piante:** Cipolla *Allium cepa* L. #627 <https://piantedellabibbia.altervista.org/piante/cipolla-allium-cepa/>; Aglio *Allium sativum* L. #628 <https://piantedellabibbia.altervista.org/piante/aglio-allium-sativum/>.
- [x] **Passo biblico unico:** Numeri 11:5–6 #626, <https://piantedellabibbia.altervista.org/citazioni/numeri-11-5-6-cipolle-aglio-porri/>. Relazioni identifications #113 Cipolla (consolidata) e #114 Aglio (probabile, a causa del dibattito storico sullo scalogno). Relazioni passage_terms #106 e #107. Il porro resta una voce distinta e riutilizzerà #626.
- [x] **Nomi ebraici:** *bəṣel* H1211 #630 e *šûm* H7762 #631. Traduzione Diodati 1649 breve estratto «de’ porri, delle cipolle, e degli agli» controllato su testo digitale, non facsimile.
- [x] **Medicine:** Cipolla #639; Aglio #640. Duke rivisto per esperimenti, variabilità dei risultati, dati clinici piccoli, interazioni e tossicità. Informazioni sanitarie moderne NCCIH e EMA, studio di revisione sulla cipolla e rischio veterinario aggiunto.
- [x] **Fonti create e pubblicate:** Kew Cipolla #633, Kew Aglio #634, lessico BDB #635, EMA monografia aglio #636, NIH/NCCIH 2025 aglio #637, revisione RCT cipolla 2023 #638, Merck Veterinary #661. Fonti condivise Moldenke #135, Duke #136, Diodati #217 riutilizzate. Citazioni bibliografiche MCP **#340–369** registrate.
- [x] **Originali letti interamente con limiti voce:** Moldenke 1952 voci 22/23 *Allium ascalonicum / A. sativum*, p32; voce 24 *A. cepa*, p33 e chiusura a inizio p34. Duke 2008 «Onion» pp16–20, «Leek» pp21–23 come delimitatore, «Garlic» pp23–30 e successivo Aloe. Documentati i confini fra i testi.
- [x] **Taxon attuali Kew:** *Allium cepa* L. e *Allium sativum* L. accettati, famiglia **Amaryllidaceae**, non la Liliaceae storico-Duke. Origine e cultivar antichi trattati con cautela.
- [x] **Tavola Cipolla:** `tavola-botanica_allium-cepa.webp` **1086×1448**, **384150 byte**, SHA-256 `154c3e455a601d79ed95e693040cb31375ccda64b1aa4b433b3cf5b41e7740cc`, **17/17 blocchi MCP**, Media/featured **#629**, ALT/didascalia/provenienza/pdb_plate_media_id verificati.
- [x] **Tavola Aglio:** `tavola-botanica_allium-sativum.webp` **1086×1448**, **241004 byte**, SHA-256 `6b1b67cf5ac4d3c821c315eba01631361dbbf420f3a66efe8fa2d55f44879a9d`, **11/11 blocchi MCP**, Media/featured **#632**, ALT/didascalia/provenienza/pdb_plate_media_id verificati.
- [x] Entrambi i file temporanei privati Base64 utilizzati per il trasferimento sono stati **eliminati dalla Libreria**.
- [x] **SEO:** titoli, slug, focus keyword, meta description, cornerstone e OG per le piante, collegamenti interni tra pianta/passo/lemma/medicina. L'audit WordPress ha inizialmente richiesto i campi strutturali `bible_references` e `sources` delle piante: **aggiunti e ricontrollati**; risultato finale **0 avvisi** su #627 e #628.
- [x] **Status di tutti i 14 ID verificato direttamente `publish`**, nessuna bozza residua delle categorie censite dopo questo lotto.
- [x] **Plugin `pdb-atlante 0.2.4` invariato**, confermato da `pdb/atlas-health`.
- [ ] **QA visuale reale** su desktop e mobile con browser indipendente; non confondere con audit strutturale WordPress.

## Integrazioni importanti emerse nell'audit finale

1. **Moldenke**: cipolla egiziana, racconto di Erodoto sulle spese della piramide (testimonianza letteraria), cipolle dolci secondo Hasselquist, credenze egizie sugli strati del bulbo e folklore di San Tommaso; aglio con etimologia/scalogno (John Smith vs William Smith), W.T. Stearn su domesticazione asiatica, Talmud e leggenda extra-biblica dell'Eden.
2. **Duke**: la voce Onion include dati discordanti su glicemia nei ratti, composti solforati (GPCS) proposti per riassorbimento osseo, attività cellulari non cliniche e rischi allergici; la voce Garlic contiene in vitro su antrace e microbi orali, piccoli studi cardiometabolici, un caso con lamivudina, oltre a un'ampia sezione di effetti avversi e interazioni farmacologiche: nessuna panacea validata.
3. **Ulteriore dato di sicurezza:** Duke p20–21 menziona anemia emolitica nei cani da composti Allium; Merck Veterinary Manual conferma possibili intossicazioni in cani e gatti anche con prodotti essiccati. Distinguere questo rischio dall'uso alimentare umano.
4. **Evidenza moderna**: EMA monografia definitiva prima versione (pubblicata 28 aprile 2020), bozza revisione 2025 NON adottata secondo la pagina controllata; NCCIH 2025 effetti modesti su lipidi/pressione/glicemia, sicurezza integratori; revisione RCT cipolla 2023, evitare generalizzazioni a cibo e dosi sperimentali.
5. **Nessun duplicato:** una sola pagina Numeri 11:5–6 #626 condivisa; altri luoghi ebraici del termine generico «erba» non attribuiti automaticamente al porro.

## Nuovi totali WordPress confermati

| Tipo | Pubblicati |
|---|---:|
| Piante | **14** |
| Passi biblici | **86** |
| Nomi/lemmi biblici | **28** |
| Schede medicinali | **14** |
| Fonti bibliografiche | **48** |

Tutte le categorie `pdb/atlas-list` consultate con limite 100 hanno `drafts=0`, i conteggi sono quelli pubblici effettivamente restituiti da WordPress.

## Dossier e prossima coppia

- [Dossier Cipolla](ATL-0015_CIPOLLA_DOSSIER_2026-11-17.md)
- [Dossier Aglio](ATL-0017_AGLIO_DOSSIER_2026-11-17.md)
- [Procedura immagini](PROCEDURA_DEFINITIVA_MEDIA_SENZA_UPDATE_PLUGIN.md)
- [Standard audit e lotti](PROCEDURA_AUDIT_FINALE_E_LOTTI_AUTONOMI.md)

**Prossime voci aperte secondo roadmap:** ATL-0019 Aloe vera (Duke p30, Moldenke non voce autonoma) e ATL-0022 Anastatica hierochuntica, rosa di Gerico (Moldenke voce 29 p38, Duke p36). Prima di creare il lotto successivo rileggere la roadmap aggiornata e il database per evitare duplicati. Lo stato qui riportato è verificato, non una promessa di futuro lavoro.
