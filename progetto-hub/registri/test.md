# Verifiche

## Lotto 2 — 28 novembre 2026, ripresa da Work

- `pdb/atlas-health`: plugin 0.2.14 attivo, cinque CPT pubblicati dal modello. `pdb/list-templates`: Erbario Biblico, slug piante-della-bibbia-theme, template default/editorial/fullwidth/landing.
- `pdb/get-settings`: titolo hero "Le piante della Bibbia", descrizione breve, CTA "Esplora le piante", accenti #42634a e #ae8650.
- `ewpa/get-menu` #3: sette voci, sei radici e Metodo e fonti (#2036) figlio di Fonti (#257). Nessun menu footer assegnato.
- `ewpa/get-page`: #131, #778, #2035 tutte pubblicate; contenuto, permalink e metadati letti. Audit specializzato atlas-public-audit non accetta queste pagine standard (Scheda pubblica non disponibile).
- HTTP anonimo: homepage e sitemap non accessibili al browser di ricerca; sitemap via MCP fallisce con cURL 56 CONNECT tunnel 403. Non equivale a indisponibilità universale del sito.
- Campione #8677 Salvia palaestina: atlas-public-audit auto ripiega sul main locale autenticato. H1 1, immagini 4 tutte con ALT e srcset, 22 link di cui 15 interni, sei sezioni con ancore, zero marcatori editoriali rilevati e zero warning. Non certifica head pubblico, CSS, JS, link remoti o rendering mobile; nessuna verifica scientifica aggiuntiva.
- Ancora aperti: sorgenti tema attivo vs pacchetto, ricerca per query e filtri, visualizzazione reale su desktop/mobile, sitemap/canonical pubblici, benchmark, misure prestazionali. Nessuna scrittura WordPress.

Prossimo test: confronto sorgenti, verifica degli URL di ricerca da browser e degli archivi, quindi prototipo isolato con rollback.
