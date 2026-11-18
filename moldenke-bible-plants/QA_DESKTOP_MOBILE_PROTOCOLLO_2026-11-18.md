# Protocollo QA Atlante — 18 novembre 2026

## Risolto
- Pagina #778, «Le sette piante della Terra Promessa», PUBBLICATA: https://piantedellabibbia.altervista.org/sette-piante-terra-promessa-bibbia/
- Tavola botanica featured Media #972, sette specie, WebP e ALT verificati. Audit SEO WordPress: zero issue.
- Tre immagini inutilizzabili generate durante il lavoro NON sono state caricate sul sito.
- Dati botanici normalizzati in WordPress per #957, #942, #922, #905, #889, #874: salvare nel campo scientific_name SOLO genere ed epiteto, lasciando l'autore botanico nel campo authorship separato. Verificato frontend per le quattro specie più recenti. Altre 25 schede avevano già campi normalizzati.

## Google Lighthouse, test reali mobile e desktop
| Pagina | Device | Performance | Accessibilità | Best practices | SEO | CLS |
| --- | --- | ---: | ---: | ---: | ---: | ---: |
| Centaurea verutum #957 | mobile | 91 | 92 | 100 | 100 | 0 |
| Centaurea verutum #957 | desktop | 100 | 92 | 100 | 100 | 0 |
| Terra Promessa #778 | mobile | 94 | 92 | 100 | 100 | 0 |
| Terra Promessa #778 | desktop | 99 | 93 | 100 | 100 | 0 |

Test effettuati tramite WPVibe audit_page che interroga Google PageSpeed Insights. Sono test di rendering e accessibilità su dispositivi emulati, NON fotografie/screenshot esaminati visivamente. Il DOM realmente renderizzato è verificabile via WPVibe get_page_html anche se il browser pubblico iniziale non accedeva al dominio.

## Due problemi ACCESSIBILITÀ tema non ancora risolti
- aria-hidden-focus: header contiene un link alla home focusable con aria-hidden=true. Nel tema sostituire con link accessibile, aria-label «Torna alla homepage», evitando aria-hidden sul link.
- color-contrast: Lighthouse rileva almeno un testo con contrasto insufficiente. Occorre analisi selettori e CSS e test dopo la correzione.
- Tema attivo Erbario Biblico v1.0.1. Gli strumenti di lettura HTML e Lighthouse funzionano, ma il plugin WPVibe per leggere/modificare i file del tema NON è installato: tentativo read_file dà REST 404. Per modificare il tema servono il sorgente/ZIP del tema con autorizzazione al deploy, oppure l'installazione temporanea di WPVibe (plugin WPVibe, ricerca «vibe-ai») con backup recente prima della pubblicazione. Non dichiarare accessibilità 100 senza modifiche realmente testate.

## Gate operativo permanente per ogni nuova scheda
1. Anti-duplicazione, tassonomia Kew e lettura completa delle fonti con numeri di pagina.
2. Campo scientific_name SOLO binomio, autore in authorship; mai duplicare L. o altre autorità nell'H1/hero.
3. Tavola botanica corretta, provenance/licenza, WebP, testo ALT e featured verificati. Non pubblicare immagine di altro taxon.
4. SEO audit pianta prima e dopo pubblicazione, zero issue; verifica contenuto WordPress e immagine via MCP.
5. Verifica DOM reale (WPVibe get_page_html), main, h1, featured, tabelle scrollabili e link interni.
6. Lighthouse sia mobile sia desktop su almeno ogni nuovo template e sulle pagine rappresentative; registrare CLS, SEO, accessibilità e prestazioni; risolvere ciò che è possibile.
7. Per screenshot grafici veri serve screenshot del browser o Work Cloud Browser, non confonderli con metriche Lighthouse.

## Integrazione ATL-0059: controllo esterno SEO obbligatorio

- Cephalaria syriaca #973 pubblicata con featured #981. L'audit WordPress mostrava 0 issue, ma al primo Lighthouse SEO **92/100** per assenza del meta tag description nell'HTML pubblico: il campo editoriale PDB non sincronizzava da solo Yoast. Risolto aggiornando la proprietà SEO Yoast sulla pagina pubblicata e verificando il tag HTML e la canonical.
- Dopo la correzione e il nuovo Lighthouse: **mobile performance 99/100, accessibilità 92, Best Practices 100, SEO 100, CLS0; desktop 94/100, accessibilità 92, Best Practices 100, SEO 100, CLS0**. La differenza nelle prestazioni tra misurazioni è variabilità di laboratorio; non riportare come accelerazione software dimostrata.
- Per OGNI nuova pianta, verificare dopo la pubblicazione il vero contenuto di head: title, meta name=description, link rel=canonical, Open Graph image, robots; **non fermarsi all'audit interno**. Aggiungere questo al gate editoriale.
- Accessibilità tema ancora da correggere sul sorgente; note tecniche: [Erbario Biblico accessibilità, patch preparata](ERBARIO_BIBLICO_ACCESSIBILITA_PATCH_PREPARATA_2026-11-18.md).
- Next roadmap: ATL-0060 *Ceratonia siliqua* L. (carrubo).
