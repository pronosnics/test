# Progressi ATL-0147 Mirto — 17 novembre 2026

## Ultimo controllo successivo alla pubblicazione — 17 novembre 2026, ore 18 italiane

- WordPress **#525–534 tutti `publish`** verificati nuovamente via `pdb/atlas-get`; `pdb/seo-audit` **zero avvisi** per mirto #525 e mandorlo #467.
- **Immagine principale definitivamente confermata:** WebP originale **Media #547**, 1086×1448, con ALT, `pdb_plate_media_id=547`, provenienza e checksum già registrati. La tavola storica Thomé in pubblico dominio **#551** è stata importata come prova della possibilità alternativa `ewpa/upload-image`, ma non sostituisce il WebP originale: featured #525 ripristinata esplicitamente su **#547**; allegato #551 resta disponibile, non in evidenza.
- **Diagnosi risolta:** il ponte tecnico tra file generato in `/mnt/data` e MCP è già documentato nella `PROCEDURA_DEFINITIVA_MEDIA_SENZA_UPDATE_PLUGIN.md`: file temporaneo in Files, lettura blocchi base64, `atlas-media-start/chunk/finish`. **Trasferimento originale Mirto eseguito in 15 blocchi**. Per immagini esterne con licenza verificata è disponibile `ewpa/upload-image` direttamente da URL. Nessun aggiornamento del plugin 0.2.4.
- **Revisione Duke pp.279–283 e Moldenke pp.143–145**: nessun nuovo versetto botanico sicuro omesso nelle voci originali; mantenuta la distinzione Neemia/Levitico, Isaia, Zaccaria, Ester e la cautela terapeutica sugli oli essenziali. Aggiunta al contenuto pubblicato la precisazione **Ester 2:12 «olio di mirra» non indica il mirto**; eliminati tre rimandi editoriali rimasti formulati al futuro o «in revisione» nelle pagine #525/#316. Distinguere sempre mirto (Myrtus) da mirra (resina di Commiphora spp.).
- SEO Yoast su #525–534: **titoli, meta-descrizioni, keyphrase e canonical pubbliche verificate**, noindex non impostato. La QA visiva mobile/desktop in un browser indipendente rimane separata dalla verifica MCP e non va spacciata per completata.



## STATO FINALE: PUBBLICATA, MEDIA_OK, SEO_OK

- WordPress: 10 nuove pagine #525–534 **tutte publish**, identificate una per una via `pdb/atlas-get`.
- Tavola originale `tavola-botanica_myrtus-communis.webp` completa, 1086×1448, 343784 byte e SHA-256 `fa2199337be55327274a2a3e71d22c87f88ee77baa054a1c5d068be9f2bd3e78`; **Media #547** con ALT e immagine in evidenza scheda #525. Trasferita in 15 blocchi senza ricompressione, checksum confermato dal server.
- Audit WordPress: **0 problemi** per il mirto #525 e mandorlo #467; plugin `pdb-atlante 0.2.4` mantenuto.
- Due schede già pubblicate #316 Levitico 23:40 e #319 Neemia 8:15 collegate, nessuna duplicazione.
- Correzioni Duke/Moldenke integrate: foglie trifogliate selezionate nella tradizione, rami folti di Neemia non secondo mirto, concia/tornitura e folklore, studi preclinici/olio concentrato, distribuzione Kew aggiornata fino a Pakistan con Etiopia.
- WordPress principale: https://piantedellabibbia.altervista.org/piante/mirto-myrtus-communis/
- QA manuale fotografica su più viewport non completata con browser indipendente; il sito WordPress e il suo audit hanno confermato contenuti e allegati, non misurano ogni aspetto dell'impaginazione.

### Registro storico di lavorazione (fotografia precedente alla pubblicazione)


Stato: 10 bozze create, NON pubblicate. Pubblicazione in attesa di immagine e QA grafica.
- [x] Fonti originali Moldenke voce 138 pp143–145, Duke Myrtle pp279–283, Kew, BDB H1918/H1919, Diodati 1649 letti.
- [x] Verificato che Levitico 23:40 e Neemia 8:15 sono già pubblicati #316/#319: riusati i contenuti, senza duplicati.
- [x] Distinti Zaccaria «mortine», Levitico «mortella» e nome Hadassah in Ester 2:7.
- [x] WordPress nuove bozze #525–534, relazioni botaniche #93–97, lessico #83–88, fonti #271–292.
- [x] Testi SEO Yoast, slug e keyphrase; allineati i campi SEO e bibliografia dello Studio Manager con pdb/update-content.
- [x] Audit #525: unico warning «Immagine in evidenza assente»; Mandorlo #467 pubblicato e zero warning, suoi dati Studio Manager storicamente obsoleti ora aggiornati.
- [x] Originale WebP preparato: 1086×1448, 343784 byte, SHA256 fa2199337be55327274a2a3e71d22c87f88ee77baa054a1c5d068be9f2bd3e78.
- [ ] Upload WebP via MCP; attendere attachment reale, featured media e ALT; niente nuova release plugin.
- [ ] QA visuale desktop/mobile e pubblicazione controllata delle 10 schede.
- [ ] Aggiornare il master e contatori pubblici solo dopo conferme.
- [ ] Duplice media inutilizzato #522 del Mandorlo valutabile per pulizia dopo verifica dipendenze.

[Dossier completo](ATL-0147_MIRTO_DOSSIER_2026-11-17.md).