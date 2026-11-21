# ATL-0162 — *Polypogon monspeliensis* (L.) Desf. — dossier operativo 21/11/2026

**Stato backend verificato durante questa sessione:** WP pianta **#2363 DRAFT**. Il taxon NON è da ricreare. Legacy **ATL-0180**. Taxonomy **Poaceae #18**; 17/17 meta specialistici popolati e 11/11 legacy. Yoast getter per #2363: title, description, keyword, `noindex=false`, `nofollow=false`.

## Ricerca scientifica e nuovo dato nomenclaturale
- Kew POWO **accetta** `Polypogon monspeliensis (L.) Desf.`, identificatore 1048074-2, `Flora Atlantica` 1:66 (1798). Basionimo `Alopecurus monspeliensis` L., 1753. Presenti Palestine, Lebanon-Syria, Sinai nell'areale nativo odierno di Kew, non prova uso nominativo biblico.
- **Aggiornamento 2025:** Romero-Zarco & Sáez, *Three new nomenclatural combinations in Agrostis L.*, *Acta Botanica Malacitana* 50 (2025), articolo 21009, p.2, DOI https://doi.org/10.24310/abm.v50.2025.21009: combinazione `Agrostis monspeliensis (L.) Romero Zarco & L.Sáez`. Kew POWO 2026 la classifica **SINONIMO** di `Polypogon monspeliensis` (https://powo.science.kew.org/taxon/77357318-1). Non creare un nuovo taxon e non cancellare il titolo sotto il nome accettato da Kew.
- **Moldenke & Moldenke 1952, pp.28–29, PDF pp.28–29 VERIFICATO DIRETTAMENTE:** `Polypogon monspeliensis` figura fra sei graminacee proposte come plausibili per i passi generici sull'erba. Gen1:11–12, Num22:4, Dt11:15, Dt32:2, 1Re18:5 NON denominano questa specie e non giustificano alcuna identificazione `certa` o `probabile` specie-specifica.
- **Post 1896, p.841, PDF 851, LETTO DIRETTAMENTE:** chiave botanica del genere `POLYPOGON`, pannocchia spiciforme e glume aristate; NON identificazione di questa specie né versetto.
- **Zohary, Duke, Tristram, Balfour:** ricerca testuale nei rispettivi PDF senza voce specifica `Polypogon monspeliensis`. Non attribuire loro descrizioni o identificazioni specie-specifiche. **Dafni–Böck 2019** riguarda metodo e critica delle attribuzioni, NON fonte specifica. **Grilli Caiola non letto**.
- Diagnosi controllata su NSW PlantNET, Flora NZ, VicFlora, Flora of Israel, Dryades: annuale Poaceae con radici fascicolate, culmi genicolati, foglie distiche, ligula membranosa, pannocchie spiciformi, glume aristate, spighette uniflore, cariossidi. Distinguerla da `Lagurus ovatus` e `Polypogon viridis`.
- Frontend HTML con nuovo paragrafo tassonomico 2025 e bibliografia aggiunta alla stessa scheda WP #2363, con aggiornamento parallelo di `plant.sources`, `plant.historical_context`, `pdb_scientific_synonyms`, `pdb_history`.

## Apparati WordPress
- Scheda **#2363 bozza**; `featured_media=#2365`; famiglia Poaceae #18.
- Fonti Kew #2366, Flora NZ #2367, PlantNET #2368, VicFlora #2369, Flora Israel #2370, Dryades #2371; fonte storica Moldenke #135 e Post #2041 RIUTILIZZATE.
- Source_citations #1402–1409 (botanica e filologia genericamente) già presenti, **fonte nuova #2388 PUBLISHED** Romero-Zarco & Sáez 2025 e **source_citation #1416** con locator p.2. Non duplicare fonti o relazioni.
- **Non creare relation `identifications`** né `passage_terms` a nome di specie per i versetti generici: sarebbe falsa identificazione. Le occorrenze testuali bibliche sono documentate nella pagina con grado esplicito.

## Immagine, verifiche e gate di pubblicazione
- Media WordPress **#2365**, file WebP `atl-0162-polypogon-monspeliensis-tavola-senza-scritte.webp`, riscontrato `_wp_attachment_metadata`: 1024×1536, 386770 byte, attachment URL e featured confermati; ALT associato.
- Originale privato in Libreria `/PIANTE DELLA BIBBIA/atl-0162-polypogon-monspeliensis-tavola-senza-scritte.webp`. Riletto come file binario WebP: **SHA256 locale `66fb096d6a676c252f32117a42516c9f4b963e62511b43a31bbcd1d6792ca888`**, 386770 byte 1024×1536. Ispezione VISIVA della tavola locale: nessuna scritta visibile. File originale privato mantenuto.
- **SHA256 del file remoto lato WordPress non acquisito direttamente in questa revisione**: la coincidenza di byte e dimensioni non è equiparata all'uguaglianza di hash server/originale. Se chi ha effettuato `pdb/atlas-media-finish` ha ricevuto la risposta checksum, registrarla nel dossier e in `pdb_image_provenance` e certificare il gate. Non inventare conferma.
- L'ulteriore preflight temporaneo `atlante_webp_preflight_0162.webp` creato in questa sessione è stato eliminato dalla Libreria (cestino). Non cancellare l'altro preflight e il ponte `atl-0162-bridge-temporaneo-base64.txt` finché la sessione che li usa non ha confermato upload e cleanup.
- **GATE non interamente certificato; WP ancora DRAFT in questa revisione**. Non asserire PUBLISHED senza nuova rilettura backend di `status=publish`, URL, SHA remote, SEO, famiglia e apparati.
- `QA_VISIVA_FRONTEND_NON_CERTIFICATA` per desktop/mobile esterni; la visione dell'illustrazione locale non equivale ad audit pagina.
- Automazione unica `6b00cb7b5a988191877878d9f84bebad` verificata ATTIVA, `FREQ=HOURLY`, prossima run 16:01 Europe/Rome al momento del controllo; non alterata.

**Prossimo passo:** recuperare **ATL-0162 #2363** e certificare media gate; pubblicare solo dopo passaggio di tutti i controlli. Solo alla pubblicazione confermata assegnare **ATL-0163 / legacy ATL-0181 *Populus alba* L.** come nuovo candidato (previo anti-duplicati).
