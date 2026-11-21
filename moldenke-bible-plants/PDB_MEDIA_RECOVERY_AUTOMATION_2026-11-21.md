# Atlante Piante della Bibbia — affidabilità caricamento media in automazione

Aggiornamento operativo: 21 novembre 2026.

## Diagnosi confermata

Il prompt dell'automazione programmata alle 07:45 conteneva già i passi corretti: WebP locale, codifica Base64 in righe da 24.000 byte, file ponte temporaneo nella Libreria, lettura sequenziale, `pdb/atlas-media-start`, `pdb/atlas-media-chunk`, `pdb/atlas-media-finish`. La corsa ATL-0148 (#2134) non è arrivata al trasferimento WordPress perché i tentativi di creare il file ponte nella Libreria sono stati rifiutati con `HTTP 403: Library LPE indexing requires a trusted producer`. Non è un errore della codifica Base64 e non dimostra un guasto del plugin WordPress.

Il WebP generato nella corsa autonoma era `/mnt/data/tavola-botanica_nymphaea-lotus-atl-0148.webp`, 1216×1293, 416.582 byte, SHA-256 `a7c0c061864948eeee1eaef0e6bba806d3510843f9559fcdec167bbeceaabd26`, ma era nel sandbox della corsa autonoma: un altro thread non può dedurne automaticamente la disponibilità in un differente sandbox. Prima di rigenerarlo, cercare il file originale nel runtime, negli allegati effettivamente esportati e nella Libreria; se irreperibile, non dichiarare di riutilizzarlo.

## Test separato da questa conversazione

- L'upload tramite `files__manage_library` di un file ponte sintetico di circa 555 KB nella radice privata della Libreria è riuscito.
- `files__read` ha restituito esattamente 32.000 caratteri della prima riga e una riga finale più corta.
- Test con WebP diagnostico di 487.450 byte e relativo ponte da 21 righe: `pdb/atlas-media-start` ha aperto la sessione su WP #2134; `pdb/atlas-media-chunk` ha accettato i primi 24.000 byte e restituito `next_offset=24000`, `remaining_bytes=463450`.
- Test annullato esplicitamente con `pdb/atlas-media-abort`, `aborted=true`; nessuna immagine di prova è stata pubblicata. File ponte diagnostici eliminati dalla Libreria.
- Il test interattivo non prova che la stessa autorizzazione LPE esista nel runtime delle automazioni: quello specifico HTTP 403 deve essere verificato nell'esecutore reale.

## Procedura di recupero obbligatoria per tutte le prossime specie

1. **Preflight dello stesso runtime produttore.** Prima di generare una nuova tavola, provare l'upload Library di un minuscolo file temporaneo prodotto dallo stesso ambiente e con lo stesso metodo che produrrà il ponte. Verificare `status=succeeded`, riscoprire il file tramite `files__list` e leggerlo, poi eliminarlo. Un test da un altro thread non garantisce l'esito dell'automazione.
2. Se `container_path` restituisce esattamente `Library LPE indexing requires a trusted producer`, **non** riprovare la stessa sorgente in altre cartelle: il problema è la provenienza/affidabilità del produttore, non la directory. Usare `source_file_ref:{file_id:...}` **solo se** uno strumento disponibile ha effettivamente esportato il file prodotto e restituito un ID `file_...` valido (non inventarlo). Questa via copia uno snapshot autorizzato. Se non esiste un FileRef esportato, dichiarare il blocco di autorizzazione della piattaforma senza aggirarlo e lasciare la scheda in bozza.
3. Per un ponte autorizzato, salvare `file_id` e `library_file_id` della Libreria; dopo l'upload **eseguire `files__list({surface:'library',library_path:'/'})`**, o ricerca per nome esatto, per rendere la fonte visibile a `files__read`. Il solo `file_id` appena restituito da `files__manage_library` può generare `File is not currently visible`; questa non è una riga Base64, e deve interrompere il trasferimento finché non viene riscoperta la fonte.
4. Generare il ponte con `base64.b64encode(raw[i:i+24000])` su **una riga per blocco**, senza modificare i caratteri. I blocchi completi sono 32.000 caratteri Base64 e 24.000 byte raw; l'ultimo può essere più corto. Registrare peso reale, hash e numero di righe.
5. Aprire `pdb/atlas-media-start` **una sola volta** e mantenere l'`upload_id`. Inviare i blocchi in ordine, con `offset` aggiornato **esclusivamente** dal `next_offset` della risposta, verificando anche `remaining_bytes`. Nel Code Mode orchestrare gruppi di **massimo tre-quattro blocchi per chiamata a `functions.exec`**, perché molte chiamate interne a `files__read` e `pdb/atlas-media-chunk` nella stessa orchestrazione possono raggiungere il limite del tool. Riutilizzare `upload_id`, numero di riga e offset fra i gruppi.
6. Non chiamare `finish` finché `remaining_bytes!=0` o `next_offset!=file_size`. Il server deve restituire ID allegato, immagine in evidenza, URL e SHA-256 identico al sorgente. Se l'upload è diagnostico, non chiamare `finish`: usare `pdb/atlas-media-abort` e pulire il ponte.
7. Dopo il `finish`, verificare WordPress con lettura della scheda e dei media (`featured`, `pdb_plate_media_id`, MIME, ALT, didascalia), poi **eliminare** il ponte temporaneo con `library_file_id`. Non salvare Base64 nei dossier GitHub o nel contenuto della scheda.
8. In caso di 403 persistente nell'automazione, **non sprecare un'altra corsa a generare una nuova immagine non trasferibile**. Continuare la collazione delle fonti e la revisione della bozza, registrando `BLOCKED_LIBRARY_TRUST_403`, e segnalare esplicitamente che occorre una via di esportazione riconosciuta come trusted dal servizio Files per quell'esecutore. Non attribuire il blocco a WP.

## Fatti di stato da non perdere

ATL-0147 #2129 è pubblicata con tavola WebP #2130. ATL-0148 *Nymphaea lotus* L. è una bozza esistente, WordPress #2134. Non creare nuove bozze duplicate e non passare a ATL-0149 finché ATL-0148 non è completa e verificata. L'immagine ATL-0148 generata alle 07:45 non risulta disponibile nell'attuale sandbox interattivo; non è stata trasferita in WordPress. Automazione oraria esistente ID `6b00cb7b5a988191877878d9f84bebad`, programmata alle :45 Europe/Rome.