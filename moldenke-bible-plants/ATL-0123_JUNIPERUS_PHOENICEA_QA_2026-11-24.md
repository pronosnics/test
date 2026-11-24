# ATL-0123 — *Juniperus phoenicia* (grafia storica) → *Juniperus phoenicea* L. — verifica e riconciliazione (24 novembre 2026)

**Esito: RICONCILIATA CON SCHEDA ESISTENTE / REVISIONE SCIENTIFICA MIRATA CONCLUSA, senza duplicazioni.** Non è una nuova scheda, né una collazione dichiarata integrale di ogni pagina storica; non è stato eseguito un test grafico indipendente su dispositivo mobile.

## Identità botanica e bibliografica

- Nome nella roadmap ATL-0123: ***Juniperus phoenicia*** (grafia frequente in Duke e Zohary). La voce originale **Moldenke e Moldenke, *Plants of the Bible* (1952), voce 186, pp.209–210** è invece ***Sabina phoenicea* (L.) Antoine**, un **sinonimo omotipico** di ***Juniperus phoenicea* L.** nel trattamento accettato di [Kew POWO, IPNI 262307-1](https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:262307-1).
- **Duke**, *Duke's Handbook of Medicinal Plants of the Bible* (2008), voce **«Phoenician Juniper (Juniperus phoenicia L.)»**, pp. **228–229**. La sua ampia sinonimia include il taxon *J. turbinata*; NON seguire questa sinonimia indiscriminatamente come tassonomia attuale. Nel 2026 Kew considera **[J. turbinata Guss., IPNI 262382-1](https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:262382-1)** un'altra specie accettata.
- **Kew *J. phoenicea* sensu stricto**: areale nativo soprattutto Spagna, Francia sudoccidentale/Corsica, Italia nordoccidentale, Sardegna e Baleari (con dettaglio limitato per le isole). **Kew *J. turbinata***: comprende tra l'altro **Palestina, Libano-Siria, Sinai, Nord-Ovest Arabia**. Non attribuire al taxon occidentale la distribuzione levantina delle descrizioni storiche aggregate.
- Kew classifica ***Juniperus tetragona* Moench** e ***J. terminalis* Salisb.** come omotipici **nomina illegitima superflua** di *J. phoenicea*, insieme a *Sabina phoenicea* e *Sabinella phoenicea* come omotipici. *J. phoenicea* subsp. *turbinata* (Guss.) Nyman e *J. phoenicea* var. *turbinata* (Guss.) Parl. sono invece omotipici di *J. turbinata* sensu Kew.
- La distinzione è coerente con Adams et al. (2013), *Phytologia* 95:202–209, e la sintesi Kew. La nomenclatura dei due taxa è **oggetto di aggiornamento rispetto ai repertori del XIX–XX secolo**.

## Record WordPress già presente: non ricreare

- Scheda botanica **WP #1938**, già `publish`: [*Juniperus phoenicea* L. — Ginepro fenicio e il nome ʿarʿār](https://piantedellabibbia.altervista.org/piante/ginepro-fenicio-juniperus-phoenicea-arar-geremia-bibbia/).
- Tavola featured **media #1939**, WebP originale già presente; famiglia **Cupressaceae termine #65**. Non ricreata né sostituita la tavola: il controllo immagini la dà presente.
- Il corpo contiene già confronto rigoroso con *J. turbinata*, Geremia 17:6 e 48:6, i termini *ʿarʿār* / *ʿaroʿer*, Deuteronomio 2:36 come toponimo, e ipotesi di legno rituale *ʾerez* in Levitico 14 e Numeri 19. Non presentare le identificazioni come certe.
- **Rettifica WordPress eseguita**: corretto il titolo bibliografico nel corpo da «Bible Plants» a ***Plants of the Bible*** (1952), una sola occorrenza; adeguata `pdb_scientific_synonyms` alla sinonimia Kew omotipica e ai nomi illegittimi; precisati `pdb_history`, `pdb_moldenke_pages` (voce 186 pp.209–210), `pdb_duke_pages` (pp.228–229) e `pdb_sources`. Il nuovo testo delle fonti in metadati è naturale e **non contiene ID WordPress o note tecniche**.
- **Nuova fonte Duke catalogata, senza duplicati**: `pdb_source` **#5674**, citazione accurata «Phoenician Juniper», pp.228–229, autori, anno, ISBN, editor e pagina editore; **relazione `source_citations` #4331** a #1938.
- Migliorati **metadati bibliografici già esistenti senza ricreare fonti**: **#5184 Moldenke** (autori, titolo, 1952); **#5183 Kew** (autori, 2026, URL accettato); **#5186 Zohary** (autore, 1982, titolo, editore); **#5185 Lamonaca 2024**, DOI **10.31743/vv.16842**, pagina ufficiale [Verbum Vitae](https://czasopisma.kul.pl/index.php/vv/article/view/16842).
- **Nuova fonte UBS #5680** (guida *Plants and Trees in the Bible*, §1.11.2, [Phoenician juniper](https://freely-given.org/OBD/UBS/Flora/1.11.2.htm)): distingue quattro possibilità per il passo Geremia 48:6, fra le quali toponimo Aroer, asino selvatico per emendazione, arbusto/ginepro e indigenza; per Geremia 17:6 ricorda anche l'ipotesi alternativa di *Calotropis procera*. Il suo uso di *J. phoenicea* per piante in Sinai è **tassonomicamente ampio/storico**, non prova dell'areale di *J. phoenicea* occidentale. Inseriti **paragrafo scientifico nella scheda** e relativa voce nella bibliografia, **`source_citations` #4332** a #1938, riferimenti in `pdb_sources`.

## Controlli finali di qualità

- Dopo gli interventi `pdb/atlas-get`: **`publish`**, **`modified_gmt=2026-11-24 22:20:08`**, URL invariato.
- `ewpa/get-cpt-item`: **11 H2/11 chiusure, 17 P/17 chiusure, 2 tabelle/2 chiusure, 11 voci di bibliografia/11 chiusure**. Nessun pattern di nota interna o instruzione tecnica rimasto nel body, WebP featured presente, Cupressaceae assegnata.
- **SEO interno** `pdb/seo-audit`: **`issues=[]`** sulla scheda #1938. Meta citazioni, fonti e keyword già presenti, completato il campo Duke mancato.
- **Copertura globale post-interventi**: **231 piante pubblicate e 231 con fonti, 0 senza fonti**, `pdb_source` 1394/1394 con relazione, **37 flag** relazionali. I flag `identifications=0` per i taxa privi di identificazione biblica certa **non sono errori da azzerare artificialmente**.
- **Verifica di visualizzazione browser esterno mobile/desktop**: non certificata. La revisione è perimetrata a WordPress/plugin, fonti online, struttura HTML e metadati.

## Valutazione biblica e sicurezza

- ***ʿarʿār*** Geremia17:6, ***ʿaroʿer*** Geremia48:6: non determinano una specie; il confronto con il ginepro è storico-filologico e contestato. **Deuteronomio2:36 Aroer è un toponimo, non una prova di presenza dell'albero**. Nel legno detto `ʾerez` di Levitico14/Numeri19 non attribuire arbitrariamente specie moderne. Il «ginepro» di 1Re19 e Giobbe30:4 riguarda tradizionalmente *Retama*, non un ginepro.
- Duke elenca usi popolari di rametti, galbuli ed estratti e sottolinea dati di sicurezza limitati; NON trasporre quelle testimonianze a indicazioni cliniche, dosaggi, farmaci biblici o alla specie in senso stretto quando gli autori trattavano più taxa.
- Se si revisita ATL-0123: controllare prima questo dossier e WP #1938. **Non creare una seconda specie** per il nome storico `Juniperus phoenicia`, `Sabina phoenicea` o il falso sinonimo moderno di `J. turbinata`. Riaprire soltanto per nuove fonti, nuova classificazione, variazione WordPress o errore verificabile.

## Prossima vera voce da censire

Il master presenta come successiva scheda non chiusa **ATL-0128 *Lecanora affinis* Eversm.**: è un **lichene (fungo lichenizzato)**, non una pianta vascolare. [Index Fungorum](https://www.indexfungorum.org/names/NamesRecord.asp?RecordID=387562) ne riporta il nome moderno ***Circinaria affinis* (Eversm.) Sohrabi**. Prima di inserirla va verificato se il modello attuale `pdb_plant` rappresenti con chiarezza i funghi lichenizzati o se occorra una sezione storica distinta, e poi devono essere esaminati gli altri due licheni dei Moldenke (*Lecanora esculenta*, *L. fruticulosa*), la vecchia ipotesi della manna e i riferimenti primari. **Nessuna nuova scheda creata in questo preflight.**
