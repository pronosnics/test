# ATL-0046 — *Boswellia serrata* Roxb. / *B. thurifera* Roxb. — QA del 24 novembre 2026

**Esito reale: PUBBLICATA / CONTROLLO MIRATO E SCIENTIFICO DOCUMENTATO.** Non estendere questo giudizio a una collazione integrale di tutte le fonti ottocentesche o a una verifica browser grafica indipendente, non effettuata.

## Raccordo tassonomico e prevenzione dei duplicati

- La roadmap storica indica **ATL-0046 *Boswellia thurifera* Roxb.**; [Kew POWO IPNI127069-1](https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:127069-1) la registra come sinonimo **omotipico e nome superfluo illegittimo** della specie accettata **[Boswellia serrata Roxb., IPNI127067-1](https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:127067-1)**. Kew cita *Asiat. Res.* 9:379 (1807) per il nome accettato e 11:158 (1810) per *B. thurifera*.
- Altri sinonimi omotipici Kew: *Libanotus asiaticus* Stackh. (nom. illeg. superfl.); eterotipici *B. glabra* Roxb., *B. hirsuta* Sm., *B. serrata* var. *glabra* (Roxb.) A.W.Benn., ecc. Le flore indiane possono usare l'autore esteso **Roxb. ex Colebr.**, mentre Kew accetta **Roxb.**; non creare taxon distinto.
- Kew dà areale nativo **India, Assam, Himalaya occidentale** e segnala Sri Lanka tra le aree di estinzione locale; **non** nativa di Palestina o Arabia nel trattamento Kew. Distinta da *B. sacra* Flück. WP **#760** e da *B. papyrifera* (Caill.) Hochst. WP **#5662**.
- Prima di creare, ricerca WordPress per `Boswellia serrata`, `Boswellia thurifera`, `Boswellia glabra`, `Indian frankincense`: **nessuna pagina specifica preesistente**, soltanto menzioni di #760 e #5662. La presente scheda canonica non deve essere duplicata per i sinonimi.

## WordPress / bibliografia / immagine

- Nuova scheda `pdb_plant` **#5669**, **PUBBLICATA**, URL https://piantedellabibbia.altervista.org/piante/boswellia-serrata-incenso-indiano-bibbia/ ; `modified_gmt=2026-11-24 22:12:18` rilevato dal plugin, titolo **«Boswellia serrata Roxb. — Incenso indiano e confronto con la Bibbia»**. Famiglia **Burseraceae** WordPress **#55**.
- Tre fonti nuove in catalogo `pdb_source`: **#5666** Kew POWO IPNI127067-1 (nome, areale, sinonimi); **#5667** World Agroforestry/Agroforestree (portamento, foglie seghettate, racemi, frutti e habitat); **#5668** MedlinePlus / Natural Medicines (prove e precauzioni relative a specifici estratti di *B. serrata*).
- Sei fonti già catalogate, non ricreate: **#4962** Moldenke & Moldenke (1952), pp.56–59, voce **50 *B. thurifera***; **#762** Kew POWO sinonimia *B. thurifera*; **#764** NIH/NCCIH *Boswellia: Usefulness and Safety*, aprile 2025; **#763** Brown–Driver–Briggs H3828 `ləḇônāh`; **#4964** Zohary (1982), p.197, contesto comparativo; **#4965** Tristram (1867), p.355, interpretazioni storiche.
- **Nove** relazioni `source_citations` **#4322–4330**, con locator e motivo dei confronti. Nei metadati bibliografici visibili in pubblico le fonti sono scritte naturalmente, **senza WP ID né note di workflow**.
- Featured image **#5670**, fotografia di **Dinesh Valke** (Thane, India; 28 febbraio 2010), da [Wikimedia Commons](https://commons.wikimedia.org/wiki/File:Boswellia_serrata_(4399783209).jpg), licenza **CC BY-SA 2.0 Generic**. Importata come **JPEG**, foto botanica identificata della fioritura, con titolo, ALT, credito, data e URL di licenza registrati. Non è una tavola generata né testimonianza dell'origine botanica dell'incenso biblico. JPEG mantenuto come scelta di provenienza verificabile; preferenza WebP non prescrive falsa attribuzione all'immagine.

## Evidenze scientifiche e limiti

- Botanica moderna da Kew e World Agroforestry: albero deciduo con corteccia sottile sfogliante, foglie composte a margine crenato-seghettato, racemi biancastri 10–20 cm e frutti trigoni. Stagionalità tipica dei boschi tropicali secchi indiani. [World Agroforestry](https://apps.worldagroforestry.org/treedb2/speciesprofile.php/?Spid=353).
- *Flora of India* vol. 4 (Botanical Survey of India) offre una descrizione affine in una fonte PDF ampia; il tentativo di visualizzazione della pagina via web screenshot **è fallito per limiti di download**. Pertanto non dichiarare una collazione visuale della pagina PDF completata; testo pubblico fondato su Kew/World Agroforestry.
- Il nome d'uso **«frankincense of scripture»** presente nella collezione economico-botanica Kew è **una denominazione commerciale storica**, non prova che `B. serrata` fosse la specie di ogni `ləḇônāh` biblica.
- Esodo30:34; Levitico2:1–2 e 24:7; Cantico3:6, 4:6,14; Isaia60:6; Matteo2:11: **il lessico indica il prodotto aromatico, non un binomio botanico**. Moldenke raggruppa tre nomi, con *B. thurifera* nella voce 50, non dimostra una identificazione specie-specifica dei versetti. **Nessuna relazione `identifications` creata per forzare il contatore.**
- **Medicina:** NCCIH segnala limiti di qualità e numerosità dei trial; MedlinePlus attribuisce «possibilmente efficace» solo a estratti particolari per alcuni sintomi dell'osteoartrosi, con effetti collaterali e possibili interazioni. Evitare trasposizione a resina grezza, fumo e specie diverse. Si distinguono sostanza aromatica, oleogommoresina, olio essenziale ed estratto standardizzato; nessuna indicazione terapeutica biblica specie-specifica attribuita.

## QA WordPress post-pubblicazione

- `pdb/atlas-get`, `ewpa/get-cpt-item`, `pdb/get-content`: **`publish`**, URL canonico, featured **#5670**, famiglia **Burseraceae #55**, metadati botanici e biblici, bibliografia e SEO compilati.
- Corpo HTML: **13 H2/13 chiusure**, **24 P/24 chiusure**, **7 citazioni in elenco** più rimandi testuali; nessuna nota gestionale rilevata con pattern precisi. Pulito il campo `pdb_duke_pages` che inizialmente riportava una istruzione operativa senza fonte verificata; riscritta `pdb_sources` senza identificativi interni WordPress.
- `pdb/seo-audit` per **#5669** restituisce **`issues=[]`** dopo `publish`. Non è stata verificata l'esatta resa pixel sul browser pubblico: la chiamata diretta allo strumento web ha fallito per accesso.
- Snapshot della copertura WordPress: **231 botaniche pubblicate / 231 con almeno una fonte / 0 senza fonti; 37 flag** relazionali `identifications=0`. Questo flag è motivato scientificamente anche per la nuova specie, non va «risolto» inventando versi.

## Regola anti-ripetizioni

**ATL-0046 è completata per il perimetro documentato**. Prima di riprenderla verificare dossier, ID WordPress #5669 e `modified_gmt`; riaprire solo su nuova fonte, modifica materiale o errore dimostrato. Per il resto passare alla **prima voce realmente incompleta** della roadmap, escludendo taxa già chiusi (ATL-0047–0055 sono segnati come pubblicati/accorpati in master), dopo nuovo preflight anti-duplicati. Non copiare istruzioni tecniche nel sito pubblico.
