# Sincronizzazione della scheda bibliografica Moldenke con l’Atlante

Data intervento: **2026-11-18**  
WordPress: **pdb_source #135**  
Pagina: https://piantedellabibbia.altervista.org/fonti-bibliografiche/moldenke-plants-of-the-bible/  
Plugin attivo durante la verifica: **pdb-atlante 0.2.4** (nessun aggiornamento necessario).

## Problema risolto
Il testo bibliografico di `#135` era rimasto alla versione 16 novembre e citava soltanto **Olivo, Vite, Fico** con link di prova. La pagina pubblica contiene **già** la sezione generata automaticamente «Schede che citano questa fonte» (`#schede`), alimentata dalle relazioni `source_citations` nell’Atlante. Questa sezione riportava studi nuovi, ma il commento introduttivo e l'anteprima SEO risultavano obsoleti.

## Intervento del 18 novembre
- Aggiornati corpo e riassunto di `pdb_source #135` con metodo editoriale, categorie di piante e questioni di identificazione.
- Sostituiti link di prova con permalink pubblici delle schede; nel testo editoriale sono raggiungibili tutte le **19 specie pubblicate** alla data del controllo.
- Inserite citazioni `source_citations` mancanti per le tre piante iniziali: Olivo `#129` (Moldenke voce 150, p.157, link relazione `#422`); Vite `#143` (voce 226, p.240, link `#423`); Fico `#152` (voce 104, p.103, link `#424`).
- Aggiornati title, meta description, OpenGraph e tipo schema Yoast; effettuato clear-cache post.
- Test live: nuova intestazione e descrizione SEO corrette; commento nuovo visibile; sezione dinamica `#schede` aggiornata con Olivo/Vite/Fico.
- Nota QA: il rendering della sezione `#schede` ha restituito **103 collegamenti** sia prima sia dopo la creazione di tre relazioni. Di conseguenza l’elenco dinamico potrebbe avere un limite di risultati e non mostrare tutti i contenuti storici; l’indice editoriale usa link espliciti anche per le specie meno recenti. Non dichiarare che la sezione dinamica è un indice esaustivo senza una verifica specifica.

## Regola vincolante per ogni nuovo lotto botanico
1. Prima di creare nuove schede, rileggi lo stato reale di WordPress e la fonte Moldenke nel PDF e nella traduzione GitHub; non inventare voci, numeri di pagina, lemmi o identificazioni.
2. Dopo la collazione delle fonti, crea/aggiorna `source_citations` per `source_id=135` con `pdb/atlas-link`: `kind=source_citations`, `object_type=pdb_plant`, `object_id=<ID pianta>`, `page_start`, `page_end` se riscontrato, `locator` e `claim_summary` attendibili. Registrare i collegamenti solo dove Moldenke è realmente pertinente.
3. Quando pubblichi la pianta, verifica che la relazione bibliografica sia consultabile, che la scheda abbia URL canonico e che l’elenco dinamico alla fonte mostri i nuovi collegamenti; controllare il possibile limite di visualizzazione.
4. Aggiorna il commento statico in fonte `#135` quando aggiungi nuove specie o emergono correzioni storico-botaniche; evita conteggi fissi non aggiornati e liste che copino ciecamente la sezione dinamica. Mantieni per l'indice editoriale i collegamenti storici non mostrati nella sezione dinamica. Mantieni un testo scientificamente cauto.
5. Verifica output HTML pubblico, Yoast title/meta/canonical, collegamenti e cache; registra eventuali limitazioni in roadmap, progressi e resoconto.
6. **Non modificare né reinstallare `pdb-atlante` soltanto per le immagini o per questa procedura.**
7. Il task automatico «Atlante Biblico — lotti specie» è rimasto **sospeso** durante l'intervento; la sua istruzione persistente è stata estesa affinché sincronizzi la fonte a ogni lotto **quando verrà riattivato dall'utente**. Non riattivarlo autonomamente.

## Casi da mantenere distinti
- Aloe vera / Aloe succotrina; anemone / «gigli dei campi»; Anastatica / galgal; Aquilaria / aloe dei testi antichi; terebinto / lentisco / balsamo. L'identificazione storica in Moldenke non sostituisce il dato tassonomico moderno.
