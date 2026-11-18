# Fix indice dinamico completo delle fonti — pdb-atlante 0.2.5

**Data:** 18/11/2026
**Stato:** implementato e testato localmente; installazione su WordPress ancora da eseguire.
**Pacchetto installabile:** `pdb-atlante-0.2.5.zip` (Libreria ChatGPT, conservato senza sostituire la 0.2.4).
**SHA-256 ZIP:** `b699c832aea32065c3cb7d1ed170a5c857dd6454206d8f9e6249284d6a424186`.

## Diagnosi

Il rendering in `pdb-atlante/includes/frontend-layout.php`, funzione `pdba_v2_source`, leggeva le citazioni con:
`SELECT * FROM ... source_citations WHERE source_id=%d ORDER BY id DESC LIMIT 120`.
Poi scartava contenuti non pubblicati e deduplicava per `post ID`. Pertanto con la fonte Moldenke #135 si osservavano soltanto 103 schede pubbliche nel blocco «Schede che citano questa fonte» nonostante relazioni ulteriori.

## Soluzione 0.2.5

- Query **senza LIMIT**, con `INNER JOIN wp_posts` (prefisso automatico), `SELECT DISTINCT p.ID,p.post_type,p.post_title` e condizioni `sc.source_id = ...`, `p.post_status = publish`, `p.post_type = sc.object_type`. Filtra soltanto i CPT autorizzati dal plugin.
- Ordina per tipo, titolo e ID. Più citazioni della medesima scheda producono un solo link; le bozze non vengono mostrate.
- Nuova funzione `pdba_v5_source_related_index`: indice integrale server-side diviso in **Piante**, **Passi biblici**, **Nomi biblici**, **Usi medicinali**, **Altre fonti**. Totale complessivo e per tipo, link di navigazione interna.
- Prime 12 schede visibili per categoria, le restanti in `details` espandibile: HTML completo lato server e navigazione senza JavaScript, compatibile mobile.
- CSS dedicato in `assets/atlante.css`, version bump in `pdb-atlante.php` per invalidare cache CSS.
- Nessuna modifica al database, ai contenuti, alle relazioni, a SEO, immagini o MCP.

## Test locali

- `php -l` eseguito su tutti i file PHP, senza errori.
- Test con 207 oggetti simulati (2 bozze): **205 link HTML**, anche oltre la 120ª posizione, gruppi/navigazione presenti, bozze escluse, link al primo e ultimo oggetto conservati.
- ZIP verificato senza errori di integrità.
- **Da collaudare sul sito** dopo l'installazione: `pdb/atlas-health` (atteso 0.2.5), il numero completo dei link alla pagina #135, le specie storiche Olivo/Vite/Fico, le altre fonti (Duke), risposta mobile e Yoast/canonical.

## Installazione e rollback

Da WordPress: Plugin → Aggiungi plugin → Carica plugin → `pdb-atlante-0.2.5.zip` → **Sostituisci il plugin corrente**, senza disinstallarlo o cancellare i dati.

Per annullare, reinstallare `pdb-atlante-0.2.4.zip` come sostituzione; i dati del database restano invariati.

**Regola di processo:** l'indice delle fonti deve seguire automaticamente ogni nuovo collegamento `source_citations`, senza copie editoriali manuali e senza limiti nascosti. L'aggiornamento del commento bibliografico è un'operazione editoriale separata.
