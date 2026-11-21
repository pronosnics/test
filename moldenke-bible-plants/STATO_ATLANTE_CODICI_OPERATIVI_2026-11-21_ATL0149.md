# ATL-0149 — Origanum syriacum L. — COMPLETATA, 21/11/2026

## Stato verificato
- WordPress post #2140, **publish** verificato con `pdb/atlas-get`; permalink: https://piantedellabibbia.altervista.org/piante/origano-siriaco-origanum-syriacum-zaatar-e-ezov-biblico/
- Specie precedente ATL-0148 Nymphaea lotus L. #2134 resta publish, nessuna correzione provata.
- Testo botanico-biblico e bibliografico ampliato (~10.300 caratteri), metadati botanici compilati e `pdb_editorial_status=revisionata` con data `2026-11-21`.
- **Tavola WebP** media e featured #2141: 1199×1312 px, 335098 byte, SHA-256 `c6f39beb3495cd0f657adbf4725f6a63c276f882d972e3899869fa804562bab2`; server ha verificato 14/14 blocchi Base64 sequenziali e checksum concorde. URL: https://piantedellabibbia.altervista.org/wp-content/uploads/2026/11/atl-0149-origanum-syriacum-tavola-botanica.webp . `pdb_plate_media_id=2141`; ALT e provenienza verificati. Nessun nuovo upload né immagine rigenerata nella revisione.
- Famiglia botanica `pdb_family`: **Lamiaceae #14** creata e assegnata.
- Yoast verificato direttamente con `ewpa/yoast-get-seo`: SEO title e description presenti, keyphrase `Origanum syriacum issopo biblico`, `noindex=false`. `pdb/seo-audit` segnala erroneamente campi mancanti anche per schede con dati Yoast salvati: non usare da solo come fonte.
- HTML pubblico: lo strumento web ha restituito errore di accesso; controllo strutturale via MCP sì, visuale browser desktop/mobile ancora non verificata.

## Fonti collazionate direttamente, con pagine effettive
- Moldenke & Moldenke (1952), *Plants of the Bible*, pp. **160–162**, PDF Libreria 156–158. Compare come *O. maru* L. e varietà, con alternative di identificazione.
- Michael Zohary (1982), *Plants of the Bible*, pp. **96–97**, PDF pp. 97–98: Syrian Hyssop *O. syriacum*; tradizione samaritana, riserva esplicita.
- James A. Duke (2008), *Handbook of Medicinal Plants of the Bible*, pp. **311–312**, PDF pp. 337–338: revisione della candidatura e usi non clinici.
- George E. Post (1896), *Flora of Syria, Palestine and Sinai*, p. **617**, PDF p. 627: *O. maru* L., diagnosi floristica e possibile hyssop.
- H. B. Tristram (1867), *The Natural History of the Bible*, pp. **455–458**, PDF pp. 467–470: favorevole al cappero *Capparis spinosa*, non sostiene certamente *O. syriacum*.
- Dafni & Böck (2019), *Medicinal plants of the Bible—revisited*, pp. **1, 4–5**: *O. syriacum* e il lemma ezov nel gruppo di identificazione alta secondo la loro metodologia.
- Kew POWO, https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:453375-1 : nome accettato, tre sottospecie e areale. *Origanum maru* **L.** è sinonimo di *O. syriacum* subsp. *syriacum*, mentre *O. maru* **Sm.** è sinonimo di *O. microphyllum*, non va incluso nella stessa specie.
- Balfour (1857), *Trees and Shrubs*: nessuna attribuzione specifica alla voce *O. syriacum* effettuata. Grilli Caiola–Guarrera–Travaglini: nessuna lettura diretta specifica registrata, non attribuire nulla.

## Relazioni WordPress
- Fonti già esistenti riusate: Moldenke #135, Zohary #1554, Duke #136, Post #2041, Tristram #2042, Dafni–Böck #2069. Nuova fonte Kew per *Origanum* #2150. Citazione preesistente Tristram #1189, nuove citazioni a pianta **#1190–1196**, citazione alla scheda medicinale **#1197**.
- Lemmi: ebraico ezov **#2142**, greco hyssōpos **#2148**; metadati ebraici registrati.
- Passi creati: Esodo 12:22 **#2143**, Levitico 14 **#2144**, Salmo 51:9 **#2145**, 1 Re 4:33 **#2146**, Giovanni 19:29 **#2149**; 5 relazioni lemma-passo **#239–243**.
- Identificazioni: **#278–282**, `probabile` per Esodo, Levitico e Salmo; `controversa` per 1 Re 4:33 e Giovanni 19:29. Nessuna identificazione scientificamente certa dichiarata.
- Scheda medicinali tradizionali separata **#2152**: https://piantedellabibbia.altervista.org/usi-medicinali/origano-siriaco-usi-medicinali-tradizionali/ ; no promesse terapeutiche.

## Aspetti tecnici residui e correzione del workflow
- La pulizia è stata nuovamente verificata usando i due percorsi esatti su `files__manage_library` in data 21/11/2026: **ENTRAMBI i file temporanei risultano GIÀ ASSENTI** (`status=skipped, error_code=not_found, File was already absent`). I 401 dell'esecuzione precedente non sono più un blocco né rimangono file da cancellare. L'assenza è verificata; il momento e l'autore dell'eliminazione non sono noti.
- La nuova automazione deve usare `file_id`/`library_file_id` esatto, verificare `status=succeeded` nei tool, tentare cleanup **una volta** dopo `finish` e, in caso di 401, registrare e proseguire se media/SHA/SEO/bibliografia sono completi; per i soli file temporanei la pulizia è problema tecnico non bloccante per la pubblicazione.
- Una nuova scheda non va creata quando esiste draft di quella specie; verificare in WordPress publish/draft e la roadmap, scegliere una sola specie per esecuzione.
- Plugin e tema invariati.

## Prossima specie
Prima specie distinta non completata **da riconfermare nella roadmap** dopo ATL-0149. NON dedurre il nome dal solo numero legacy, che può contenere sinonimi e taxa già pubblicati. Nell'esecuzione successiva cerca nel catalogo WP e nella roadmap prima di scegliere.