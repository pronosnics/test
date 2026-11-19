# Audit retroattivo Zohary — lotto 11–21 su 58

**Data:** 19 novembre 2026. **Fonte diretta:** Michael Zohary, *Plants of the Bible*, Cambridge University Press, 1982, PDF completo 226 pagine digitali fornito dall'utente, **non** ripubblicato sul repository. Numeri di pagina riferiti all'edizione stampata.

| N. | WP ID | Specie | Testo direttamente letto in Zohary | Correzione / approfondimento |
|--:|--:|---|---|---|
| 11 | 557 | *Pistacia terebinthus* | Terebinth pp. 110–111 | *elah* in P. atlantica e P. palaestina, non semplice attribuzione a P. terebinthus |
| 12 | 627 | *Allium cepa* | Leek–Onion–Garlic p. 80 | *beṣālîm*, bulbo e ricordo alimentare di Numeri 11 |
| 13 | 628 | *Allium sativum* | Leek–Onion–Garlic p. 80 | *šummîm*, moltiplicazione vegetativa, limiti delle origini antiche |
| 14 | 666 | *Aloe vera* | Eaglewood–Aloe p. 204 | Antico Testamento: legno aromatico; Giovanni 19:39: ipotesi aloe succulenta |
| 15 | 699 | *Anemone coronaria* | Crown Anemone p. 170 | gigli del campo: identificazione tradizionale, non univoca |
| 16 | 700 | *Aquilaria malaccensis* | Eaglewood p. 204 | *Aquillaria agallocha* storico vs taxon moderno; differenza rispetto ad Aloe |
| 17 | 737 | *Aloe succotrina* | Aloe p. 204 | ampia accezione Aloe vera nel 1982 da non convertire in sinonimia moderna |
| 18 | 760 | *Boswellia sacra* | Frankincense p. 197 | *levonah*, *lubān*, commercio delle resine e pluralità delle Boswellia |
| 19 | 807 | *Mutarda nigra (Brassica nigra)* | Black Mustard p. 93 | identificazione probabile, parabola non tassonomia esclusiva |
| 20 | 874 | *Calotropis procera* | Apple of Sodom p. 122 | Giuseppe Flavio tradizione postbiblica; evitare attribuzione diretta a Deut 32:32 |
| 21 | 889 | *Capparis spinosa* | Caperbush p. 98 | *avionah* Eccl 12:5 e proposta alternativa *ezov*: entrambe controverse |

## Verifiche WordPress e qualità

Per ciascuno degli 11 ID sopra:

- `pdb/get-content` dopo la scrittura: **publish**, una sola sezione con marcatore `data-pdb-zohary-audit="20261119-..."`, metadati `plant.sources` aggiornati;
- `pdb/seo-audit(limit=100)` restituisce **issues: []**;
- conservati titolo, slug, link, immagine in evidenza e parti già presenti, nessun nuovo record creato.

**Nota su specie non coperte direttamente:** *Pistacia lentiscus* (#597) non possiede una trattazione nominativa specifica nelle monografie lette. Non aggiungere una falsa fonte diretta; mantenerla in valutazione di confronto, senza contare un aggiornamento WordPress.

**Stato cumulativo:** #1–#2 (olivo e vite) + lotto #3–#10 (8 specie) + questo lotto (11 specie) = **21/58 completate su WordPress**, 37 restanti.
