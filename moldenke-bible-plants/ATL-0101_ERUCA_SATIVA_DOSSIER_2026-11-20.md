# ATL-0101 — *Eruca sativa* Mill. (rucola) — CHIUSURA 20 novembre 2026

## Risultato finale verificato
- Una sola nuova specie botanica per l'esecuzione. WordPress **pdb_plant #1745**, stato **publish** riaccertato tramite `pdb/get-content` e `pdb/atlas-get`.
- URL pubblico: https://piantedellabibbia.altervista.org/piante/rucola-eruca-sativa-mill-2-re-439-%ca%beoro%e1%b9%af-e-botanica/
- Anti-duplicato WordPress: `pdb/atlas-list` su **Eruca** e **rucola** ha restituito zero altre schede botaniche prima della creazione. Nessuna seconda pianta per varietà e sinonimi.
- Kew POWO accetta ***Eruca sativa* Mill.** (Brassicaceae), https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:1110374-2. Sinonimi moderni documentati: *Brassica eruca* L., *Eruca vesicaria* subsp. *sativa* (Mill.) Thell. **Non confondere** con *Eruca vesicaria* (L.) Cav., anch'essa accettata da Kew come specie a sé, né con *Diplotaxis tenuifolia*, un'altra «rucola» in commercio.
- Meta WordPress corretti: `pdb_scientific_name="Eruca sativa"`, `pdb_authorship="Mill."`, senza ripetizione dell'autore. Campi morfologia, distribuzione, storia, nome ebraico, riferimenti, parti, SEO, fonti, stato editoriale valorizzati.

## Fonti effettivamente consultate, con pagine esatte
1. **Michael Zohary, *Plants of the Bible* (1982), «Garden Rocket», p. 101, PDF di Libreria p. 102**. Ipotesi identificativa basata su *oroth* / rabbinico *gargir* / arabo *jarjir*; nota essenziale: lo stesso Zohary ritiene **probabile che oroth designi genericamente «vegetables»**, in quanto le erbe edibili cercate e la zucca tossica trovata dalla vite sono diverse e il plurale/azione del raccolto non individuano una specie. Non attribuire a Zohary certezza che il testo non dà.
2. **James A. Duke, *Duke's Handbook of Medicinal Plants of the Bible* (2008), «Rocket», pp. 181–185, PDF pp. 207–211**. Varie traduzioni 2 Re 4:39–41, nome ebraico, alimentazione foglie/semi, usi tradizionali, glucoerucina, acido erucico. Le liste di attività folkloriche o sperimentali **non** sono indicazioni cliniche approvate.
3. **George E. Post, *Flora of Syria, Palestine and Sinai* (1896), p. stampata 79, PDF p. 89**. Voce `E. sativa`: foglie lirato-pennatifide, siliqua con becco, ambienti presso strade/campi. Testimonianza floristica 1896, non prova di presenza nell'episodio biblico. Nuova scheda fonte Post #1742, riusata anche per ATL-0100.
4. **Amots Dafni e Barbara Böck (2019), «Medicinal plants of the Bible—revisited», Table 4, PDF p. 10**, DOI:10.1186/s13002-019-0338-8. *Eruca sativa* riportata con testimonianze talmudiche per il nome *gargir* (Yoma 18b, Shabbat 109a, Gittin 69b). Fonti **postbibliche**, non prova che 2 Re nomini la specie.
5. **Royal Botanic Gardens, Kew, POWO**, taxon 1110374-2, status, nomenclatura e areale.
6. **Materiale illustrativo di riferimento**: fotografie di *Eruca* e confronto morfologico con tavola storica; foglie pennatifide, quattro petali crema con nervature scure, sei stami, siliqua beccata, radice a fittone.

**Fonti esaminate come controllo di pertinenza, senza includerle nella bibliografia pubblica:** Moldenke non presenta una monografia *Eruca sativa* nella sezione pertinente oggetto di riscontro; Balfour (1857) e Tristram (1867), ricerche per «rocket» senza voce diretta individuata; gli studi Dafni–Levy–Lev 2005 e Frumin 2024 sono dedicati a contesti diversi, non utilizzati; **Grilli Caiola–Guarrera–Travaglini** posseduto dal progetto ma **volume integrale non disponibile nel materiale digitalizzato consultabile tramite Libreria in questa esecuzione**: non fingere la revisione di sue pagine né inventare un locator. È un limite di esaustività e non modifica la provenienza delle fonti effettivamente riportate. Nessuna citazione biblica estesa da traduzioni protette.

## Interpretazione biblica
- 2 Re 4:39–41: si cercano «erbe/verdure» (<span>ʾorōṯ</span>), ma vengono raccolte dalla vite selvatica **zucche/frutti sconosciuti**; non confondere rucola con il vegetale tossico.
- La rucola è una **identificazione proposta e controversa**, registrata con `status=controversa`; non è una pianta inequivocabilmente nominata dal versetto.
- Distinta dalla coloquintide *Citrullus colocynthis* WP #1227. Riutilizzata la citazione esistente **#1236**, senza duplicarla.

## WordPress, SEO e media
- Pianta **#1745 — publish**. Nuovo lemma ebraico **#1747 — publish**, «ʾorōṯ» con cautele; nuova medicina storica **#1748 — publish**; fonte scientifica specifica **#1749 — publish**, Dafni–Böck tabella 4. Riutilizzate fonti condivise Zohary **#1554**, Duke **#136**, Post **#1742** e la citazione esistente **#1236**.
- Relazioni `passage_terms` **#213**, `identifications` **#247** (controversa), `source_citations` **#972–978**.
- Tavola digitale originale d'ispirazione ottocentesca senza scritte, WebP **1024×1536, 310288 byte**, SHA-256 locale e WordPress **`0db96d5403301bdc6fa35c783b894aa50aaa04be60f4ee6cc96686ccedabdb24`**. Upload WordPress via `pdb/atlas-media-start` → Base64 `pdb/atlas-media-chunk` in **13 blocchi** da 24000 byte (ultimo 22288) → `pdb/atlas-media-finish`. WordPress ha restituito **`attachment_id=1746` e `featured_image_id=1746`**, checksum uguale. Media URL: https://piantedellabibbia.altervista.org/wp-content/uploads/2026/11/tavola-botanica_eruca-sativa-atl-0101.webp.
- ALT verificato in Media Library: «Tavola botanica illustrativa della rucola Eruca sativa Mill.: radice a fittone, foglie pennatifide, fiori a quattro petali crema venati di viola, siliqua con becco, semi e parti fiorali». Campi `pdb_plate_media_id=1746`, `pdb_image_provenance` e metadata SEO compilati. Il file ponte Base64 temporaneo è stato **eliminato** dalla Libreria dopo l'esito.
- **Audit SEO `pdb/seo-audit` dopo publish: `issues=[]`**. Collegamenti interni al termine, al documento medicinale, alle fonti, al passo biblico e alla coloquintide verificati sul contenuto WP.
- **Limite QA**: browser esterno non è riuscito ad aprire il permalink o la media, quindi **nessuna ispezione screenshot desktop/mobile o Lighthouse indipendente** certificata; controllo WP MCP, ALT, hash e audit SEO interno sono stati eseguiti.

## Programmazione e specie successiva
- L'utente ha chiesto **sospensione** dell'automazione «Atlante Biblico — 1 specie/ora» e la sospensione `is_enabled=false` è stata **confermata**.
- ATL-0102 *Favotrichophyton violaceum* è un fungo (nome storico ricondotto a *Trichophyton violaceum*), non creare `pdb_plant`.
- ATL-0103 *Ferula galbaniflua* Boiss. & Buhse è un sinonimo accettato sotto il taxon ***Ferula gummosa* Boiss.**, confermato da Kew POWO/GRIN. Non crearne due schede.
- Prossima specie botanica distinta da avviare **solo su richiesta**, dopo check roadmap e anti-duplicati WP: **ATL-0104 — *Ferula gummosa* Boiss.**, galbano. Kew https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:842298-1.
