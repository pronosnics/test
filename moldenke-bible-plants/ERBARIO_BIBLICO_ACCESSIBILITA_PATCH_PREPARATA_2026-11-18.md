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