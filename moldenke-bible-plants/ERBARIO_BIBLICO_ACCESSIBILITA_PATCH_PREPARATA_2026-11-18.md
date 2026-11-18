# Erbario Biblico v1.0.1 — Accessibilità: due correzioni da applicare

**Verificato:** 18 novembre 2026. **Stato: patch non applicata al sito.** Manca accesso ai file PHP/CSS del tema (plugin WPVibe non presente sul WordPress; connettore remoto può leggere DOM e PageSpeed, non modificare file).

## 1. Link della homepage nascosto agli screen reader

Il DOM attuale contiene:
```html
<a class="brand-symbol" href="https://piantedellabibbia.altervista.org/" aria-hidden="true">❦</a>
```
Un link focusable non può essere aria-hidden=true. Modificare SOLO questa istanza nel file header.php del tema, conservando l'espressione PHP esistente che costruisce l'URL e inserendo:
```html
<a class="brand-symbol" href="...URL originale..." aria-label="Torna alla homepage"><span aria-hidden="true">❦</span></a>
```
Verificare navigazione tastiera e focus visibile. Non sostituire un URL PHP dinamico con una stringa statica.

## 2. Contrasto del tema

Il foglio pubblicato è /wp-content/themes/piante-della-bibbia-theme/assets/site.css?ver=1.0.1.
Il rapporto Lighthouse indica color-contrast, ma non fornisce il selettore preciso. Non correggere CSS alla cieca: usare il rapporto completo per identificare gli elementi specifici, confrontare con i valori del foglio e garantire WCAG AA: rapporto 4.5:1 sul testo normale; 3:1 su testo grande e componenti grafici informativi. Verificare hover, focus e menu mobile.

## Procedura per applicare senza rischio

1. Ricevere ZIP effettivo del tema attivo o installare/attivare WPVibe sul WordPress per abilitare editor dei file. Il connettore ChatGPT WPVibe da solo non basta.
2. Eseguire backup recente del tema e del sito e conservare rollback.
3. Preparare copia, applicare patch sul template e CSS, aprire anteprima. Non cambiare tema pubblico senza QA/backup e autorizzazione.
4. Testare Lighthouse desktop/mobile su homepage, Atlante, una specie e Terra Promessa; controllare menu tastiera e contrasto.

**Non dichiarare 'risolto' finché non si è modificato il tema e verificato il nuovo Lighthouse.**

## Aggiornamento operativo: pacchetto 1.0.2 prodotto e validato

- Trovato in Libreria l'archivio originale **erbario-biblico-tema-1.0.1-seo.zip** (versione che corrisponde all'attuale installazione WordPress Erbario Biblico 1.0.1).
- Creato **erbario-biblico-tema-1.0.2-accessibilita.zip**, disponibile nella Libreria utente e come allegato di conversazione.
- Modifiche: header.php link brand resta cliccabile e leggibile per screen reader, con aria-label e icona decorativa aria-hidden solo nel figlio; assets/site.css cambia soltanto il colore del testo sui fondi chiari nei selettori .eyebrow, .latin, .method-points e .fact dt.
- Il rapporto WCAG calcolato per il precedente oro #ae8650 sul fondo #f8f7f1 era circa 3,09:1, insufficiente per testo normale; per il nuovo colore #795526 è circa 6,23:1. Il colore precedente #6f806e della classe latin aveva contrasto circa 3,92:1 e ora è più scuro.
- Versione incrementata a **1.0.2** in style.css e nei riferimenti di functions.php, senza alterare gli altri template.
- Validazione: ZIP integrità e struttura, CSS parentesi bilanciate, PHP lint positivo su **tutti i 16 template PHP** del pacchetto.
- **Non ancora installato sul sito**: il collegamento WordPress/MCP consente modifiche ai contenuti/media, ma il tema non è modificabile tramite le abilities disponibili. WPVibe remoto è in sola lettura per il codice quando il suo plugin WordPress non è installato. Per il deploy, installare ZIP nell'amministrazione con backup e conferma di sovrascrittura, poi rifare Lighthouse.
- La correzione del colore riguarda il tema; eventuali ulteriori contrasti sfavorevoli provenienti dai CSS del plugin Atlante andranno controllati nel Lighthouse successivo, senza promettere accessibilità 100 prima del test.
