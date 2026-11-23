# ATL-0005 — *Acanthus hirsutus* subsp. *syriacus* (Boiss.) Brummitt — dossier, fonti e QA

**Data 23 novembre 2026. Stato: PUBBLICATA / MEDIA_OK / SEO_0.** Voce legacy **ATL-0005 *Acanthus syriacus* Boiss.**, Moldenke1952 voce5 pp26–27. Utilizzato esclusivamente il plugin WordPress `pdb-atlante` 0.2.8 con ability EWPA, non WPVibe.

## Anti-duplicati e nomenclatura

- Ricerche prima della creazione nel CPT `pdb_plant`: `Acanthus syriacus`, `Acanthus hirsutus`, `acanto siriano` → 0 schede dedicate; ricerca `Acanthus` trova occorrenze di altre piante nel testo, non duplicati specifici.
- Royal Botanic Gardens, Kew, POWO accetta ***Acanthus hirsutus* subsp. *syriacus* (Boiss.) Brummitt**, IPNI **955647-1**, pubblicato 1989. Basionimo/sinonimo omotipico ***Acanthus syriacus* Boiss.**, IPNI **44923-1**, pubblicato 1849. Non confondere con ***Acanthus spinosus* L.**, taxon distinto citato da Tristram.
- Famiglia **Acanthaceae #46** creata e associata alla pianta; ordine Lamiales. Profilo Kew: erbacea perenne **20–80 cm**, rosetta foglie coriacee **10–30 cm** profondamente lobate e spinose, spiga fino **60 cm**, brattee e sepali porpora, corolla bianca, 4 stami, capsule con fino a quattro semi, meccanismi di deiscenza esplosiva. Habitat garighe rocciose calcaree e margini di campi; nativa Turchia meridionale/orientale–Levante/Israele.
- **Kew IUCN non valutata** nel profilo consultato: non inventare categoria di minaccia.

## Collazione diretta fonte per fonte

1. **Moldenke 1952**, *Plants of the Bible*, **pp. 26–27** (voce 5): Giobbe 30:7, Sofonia 2:9, termine ebraico `ḥārūl` H2738. Propone con cautela `Acanthus syriacus` dopo aver discusso `Urtica` e la tesi di Tristram, che invece aveva nominato **`Acanthus spinosus`**; Moldenke attribuisce a Post il dato di presenza di `A. syriacus` nel Levante. Alternative `Paliurus`, `Sinapis`, `Cynara`, `Gymnarrhena`. Il testo non va letto come determinazione certa.
2. **Tristram 1867**, *The Natural History of the Bible*, **pp. 432, 478**; copie digitali, PDF pp. **444, 487**. Propone `Acanthus spinosus` per `ḥārūl` di Giobbe, Proverbi e Sofonia. L'attribuzione a `A. syriacus` NON è sua. Le osservazioni ottocentesche su habitat, acanto e combustibile sono storiche e non prove dell'identificazione specifica.
3. **Zohary 1982**, *Plants of the Bible*, **p. 165** (PDF p. 166): **`Acanthus syriacus`** per un possibile motivo decorativo nella **Lettera di Aristea §70**, NON un libro biblico canonico. Il motivo del capitello corinzio può richiamare altre specie di `Acanthus`; non è una determinazione diagnostica certa.
4. **Kew POWO** IPNI 955647-1 e 44923-1, comprensivo di *Kew Species Profiles* con descrizione di morfologia, differenze dalla subsp. `hirsutus`, areale, coltivazione ornamentale e conservazione ex situ; fonti primarie per tassonomia e caratteri del taxon moderno.
5. **Brown–Driver–Briggs H2738**: `ḥārūl` in Giobbe30:7, Proverbi24:31, Sofonia2:9. Fonte già presente nel database #3607 e lemma già presente #3611; NON sono stati duplicati.
6. **Duke 2008**: ricerca testuale dell'opera consultata non trova una voce specifica `Acanthus syriacus`; non collegare Duke come prova ornamentale o medica specie-specifica.
7. **Post** citato da Moldenke (rif. bibliografico n.265) e non verificato direttamente in originale in questa sessione per la localizzazione esatta; il dato su Post in pagina è riportato correttamente come **testimonianza riferita da Moldenke** e non come citazione diretta da Post.
8. Grilli Caiola/Guarrera/Travaglini, Dafni–Böck, Balfour e altri repertori: non inseriti quali fonti positive su questa sottospecie in assenza di un passo attinente verificato. Niente bibliografia decorativa.

## WordPress: stato tecnico confermato

- **Pianta** `pdb_plant` **#4436**, **publish**, https://piantedellabibbia.altervista.org/piante/acanthus-hirsutus-subsp-syriacus-acanto-siriano-giobbe-sofonia/ . **28 titoli H2 bilanciati**, **27 paragrafi bilanciati**, 1 lista UL completa, nessuna stringa TODO, MCP, Media #, SHA-256 nel corpo pubblico. Campo `pdb_editorial_status=revisionata`.
- **Medicina/sicurezza** `pdb_medicine` **#4437**, **publish**, https://piantedellabibbia.altervista.org/usi-medicinali/acanto-siriano-usi-ornamentali-sicurezza-limiti-terapeutici/ . **9 titoli H2**, 8 paragrafi, 1 UL bilanciati, campo `pdb_plant_id=4436`. Non si afferma efficacia clinica priva di prova. Collegamento reciproco alla pianta.
- **Citazioni bibliche** pubblicate: Giobbe30:7 **#4434** https://piantedellabibbia.altervista.org/citazioni/giobbe-30-7-harul-acanto-erbacce-spine/ ; Sofonia2:9 **#4435** https://piantedellabibbia.altervista.org/citazioni/sofonia-2-9-harul-sterpi-acanto-siriano/ ; meta traduzione dichiarata **parafrasi italiana redazionale**, non trascrizioni non verificate. `pdb_editorial_status=revisionata`; link di ritorno botanica. `Lettera Aristea §70` non creata in `pdb_quote` canonico.
- **Lemma** riutilizzato: `pdb_term` **#3611**, `ḥārūl` H2738. Passage_terms nuove **#360–361**, relazioni botaniche identifications **#488–489**, entrambe `status=controversa`, non esclusive.
- **Fonti bibliografiche nuove pubblicate** #4426 Kew (tassonomia + profilo), #4427 Moldenke, #4428 Tristram, #4429 Zohary; riuso BDB fonte #3607. **5 relazioni fonte botanica** #3537–3541, **3 medicina** #3542–3544, **3 Giobbe** #3545–3547, **3 Sofonia** #3548–3550; tutte univoche per singolo oggetto.
- **Tavola originale senza scritte** Media WordPress **#4438**, `tavola-botanica_acanthus-hirsutus-subsp-syriacus_ATL-0005.webp`, **1086×1448 px**, **271256 byte**. SHA-256 originale **`60d7357aa1532990707d6dc206a79f35e42b1cd1a57416611f8ad0f44b691543`** = SHA restituito da WordPress. Trasferimento via `pdb/atlas-media-start`, **12/12 blocchi** (11×24000 + ultimo 7256), `pdb/atlas-media-finish` ha confermato attachment_id=4438 e featured_image_id=4438. ALT botanico descrittivo; provenance pubblica concisa, non tecnica; `pdb_plate_media_id=4438`.
- **Originale WebP in Libreria privata** `/PIANTE DELLA BIBBIA/tavola-botanica_acanthus-hirsutus-subsp-syriacus_ATL-0005.webp`. Bridge temporaneo `atl0005_bridge_private_tmp.txt` da spostare nel cestino dopo la verifica.
- **SEO** titolo, descrizione e keyword nei meta legacy e in Rank Math. Robots `index,follow` per botanica, medicina e citazioni. `pdb/seo-audit` su pianta **issues=[]** dopo publish; anche ATL-0004 #4409 e ATL-0003 #4381 senza warning.
- Il controllo **HTML memorizzato nel backend**, media, permalinks, status e fonti è completato. **Non** equivale a prova di rendering pixel mobile/desktop con browser esterno; verifica visiva indipendente non certificata.

## Verifica supplementare della precedente ATL-0004

- *Vachellia tortilis* #4409 e medicina #4418 sono ancora `publish`, con 8 fonti botaniche, 4 medicinali, 3 relazioni controverse, featured media #4419 e `pdb/seo-audit issues=[]`.
- Verifica puntuale: nomi attuali Kew e subsp. *raddiana* separati, sinonimia storica non allargata alla specie, `shiṭṭîm` distinto da `seneh`; nessuna omissione sostanziale nuova identificata nelle fonti confrontate in questa sessione. Verifica visiva browser ancora non disponibile; niente modifiche senza ragione.

## Avanzamento roadmap

- **ATL-0005 COMPLETATA**, sorgente Moldenke voce5 e Zohary; non creare scheda autonoma per `Acanthus syriacus` (sinonimo) o altra immagine.
- **Prossima voce legacy progressiva: ATL-0006 *Acetobacter acetigenum***, non ATL-0010. Nel master anche ATL-0007, 0008 e 0009 sono altri batteri associati storicamente all'aceto. **AVVISO SCIENTIFICO:** NON sono piante, appartengono ai batteri. Prima di creare qualsiasi `pdb_plant`, verificare status nomenclaturale secondo LPSN/NCBI, eventuali sinonimi e il modello editoriale per microrganismi del sito; nessuna specie batterica va inserita falsamente come pianta. Moldenke p.27 associa più nomi storici al fenomeno dell'acetificazione; la Bibbia cita aceto, non specie identificabili microscopicamente. Il nome storico ATL-0009 `Acetobacter xylinum` è oggi associato a `Komagataeibacter xylinus` (LPSN) e quindi richiede riconciliazione.
- Registro legacy da aggiornare insieme al master; vecchi checkbox non rappresentano automaticamente numero di schede reali mancanti.
