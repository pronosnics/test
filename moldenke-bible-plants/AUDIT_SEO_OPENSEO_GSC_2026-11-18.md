# Audit SEO Piante della Bibbia — OpenSEO, Google Search Console, WordPress — 18 novembre 2026

**Dominio:** https://piantedellabibbia.altervista.org — progetto OpenSEO `e50db78a-891e-425e-8bec-863250e5077a`. Audit senza modifiche a immagini, tassonomia, contenuti scientifici o plugin.

## Audit crawler OpenSEO

- Audit completo del 18/11: `2513c84b-a693-4453-8a74-9ae2727abe4a`, homepage, **50/50 pagine HTTP 200, 50 tecnicamente indicizzabili**, nessun H1 mancante o multiplo, 0 immagini prive di ALT nel campione, 0 tempi oltre 1000 ms. **6 rilievi:** 2 meta description mancanti, 2 titoli troppo lunghi, meta dell'archivio /usi-medicinali/ **162 caratteri**, e blocco per limite 50 pagine (248 altre URL scoperte e non analizzate).
- Audit di conferma su /usi-medicinali/ `dd1cb9f1-e4dc-4889-a285-c2e33272654f`: 50 URL HTTP 200, criticità rimaste **limite crawl** e meta archive 162 caratteri.
- Audit su /piante/ `c1e4b8ee-698d-4d7f-961f-cd04cc6e4379`: 50 URL HTTP 200, evidenziate ulteriori due schede nomi biblici con title lunghi e meta assenti; 9 segnalazioni canonical su slug percent-encoded dove URL crawled e canonical differivano per **maiuscole/minuscole delle cifre esadecimali**. Non trattare la differenza di rappresentazione URL come contenuto duplicato senza conferme ulteriori.
- Report e accesso ai crawl: https://app.openseo.so/p/e50db78a-891e-425e-8bec-863250e5077a/audit

## Modifiche SEO eseguite via MCP WordPress (Yoast)

1. `pdb_medicine #670` Aloe vera: SEO title **«Aloe vera: gel, lattice e sicurezza»** e meta description di 151 caratteri. Identità canonica confermata e `publish`. Cache oggetto del post svuotata.
2. `pdb_medicine #671` Anastatica hierochuntica: SEO title **«Anastatica: usi storici e rischi»** e meta description di 156 caratteri, senza prescrizioni mediche; `publish`. Cache oggetto svuotata.
3. `pdb_term #683` Alóē G250: SEO title **«Alóē (G250): l'aloe di Giovanni 19:39»** e meta description di 149 caratteri, senza specie botanica certa. Cache oggetto svuotata.
4. `pdb_term #672` Gulgal: SEO title **«Gulgal: parola ebraica e piante bibliche»** e meta description di 146 caratteri, lasciando controversa l'identificazione. Cache oggetto svuotata.

**Verifica indipendente post-fix:** OpenSEO ha letto HTML pubblico di ciascuna delle quattro pagine con title e meta description aggiornati, HTTP 200, `isIndexable=true`, un H1, `imagesMissingAlt=0` e `inSitemap=true`. Audit puntuali:
- Aloe vera `832fe07b-f8bb-46c5-87b3-7ce78f0e9f84`;
- Anastatica `066a3373-969e-48fb-852a-5762bbaada93`;
- Alóē `52f73452-d3ae-4c5e-9e6c-8c2639bded5f`;
- Gulgal `9f078dc1-9f43-4224-b48d-c9d54eaab2a1`.

## Search Console: ispezione URL effettuata, non confondere con il crawl

La proprietà https://piantedellabibbia.altervista.org/ è collegata e verificata in OpenSEO.

- **Indicizzate** su ispezione GSC: homepage, /atlante/, Mandorlo, Fico, Olivo, Aloe vera. Google ha scansionato tali URL il **18 novembre 2026** (crawler mobile; canonical coincidenti).
- **Scansionate, attualmente NON indicizzate**: fonte bibliografica Moldenke, Cedro del Libano.
- **«URL sconosciuto a Google» al momento della verifica**: Boswellia sacra, Buxus sempervirens e Buxus balearica, Balanites, Brassica nigra, Butomus, Vite, Palma da dattero, Papiro, Melograno, Anastatica. Stato non equivale a blocco SEO né implica mancata sitemap.
- GSC Performance 28 giorni (19/10–15/11/2026, dati consolidati disponibili) **zero righe** per le pagine; sito recente, non dedurre posizionamenti.

## Residui, limiti e priorità

- [x] Quattro schede difettose su title/meta corrette e riconfermate nel crawl HTML.
- [x] Verificata la Search Console, con sei URL già indicizzate nel campione esaminato.
- [ ] **Meta description dell'archivio /usi-medicinali/** lunga 162 caratteri (raccomandazione OpenSEO <=160). È un avviso informativo di impatto basso; la gestione dell'archivio richiede modifica della configurazione SEO/template CPT, non confonderla con l'edit delle schede singole. Non è stata ancora modificata.
- [ ] Limite di crawl **50 pagine per audit**: centinaia di URL del sito non esaminate in un singolo crawl. Effettuati crawl mirati, ma non dichiarare l'intero sito auditato.
- [ ] Monitoraggio GSC delle schede pubblicate recentemente; richiedere indicizzazione in Search Console per pagine prioritarie, se necessario. Google non usa IndexNow.
- [ ] Lighthouse performance/accessibilità **non eseguito in questo audit** (runLighthouse=false); non attribuire nuovi punteggi.
- [ ] QA visiva desktop/mobile separata ancora da completare.

**L'automazione oraria dell'Atlante rimane sospesa.** Nessun plugin aggiornato né sottoposto a controllo versione/salute per questa analisi.
