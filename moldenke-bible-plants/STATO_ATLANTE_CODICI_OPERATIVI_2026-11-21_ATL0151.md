# ATL-0151 — Paliurus spina-christi Mill. — COMPLETATA 21/11/2026

## Identità, anti-duplicati e stato WordPress
- Codice operativo ATL-0151; riga roadmap master legacy **ATL-0165** (non confondere i due codici).
- Specie accettata da Kew POWO, `https://powo.science.kew.org/taxon/717707-1`, famiglia Rhamnaceae, nome *Paliurus spina-christi* Mill.; sinonimi *P. aculeatus* Lam., *Rhamnus paliurus* L., *P. australis* Gaertn. (nom. illeg. superfl.), *Ziziphus paliurus* (L.) Willd. Distinta da *Ziziphus spina-christi*.
- WordPress `pdb_plant` **#2159**, status **publish** riletta dopo update.
- Permalink verificato dal backend: https://piantedellabibbia.altervista.org/piante/spinocristi-paliurus-spina-christi-corona-spine-bibbia/
- Anti-duplicati `pdb/atlas-list type=pdb_plant,status=any` cercati Paliurus, aculeatus, marruca, Rhamnus paliurus, spina-christi: nessuna scheda autonoma preesistente. *Lycium europaeum* #1990 risulta solo come voce con confronto sul lessico.
- Famiglia Rhamnaceae term #16 (nuova).

## Tavola botanica, trasferimento e integrità
- Una sola tavola illustrata digitale originale, senza didascalie, ramificazione zigzag, foglie ovate 3-nervate, spine stipolari diseguali, piccoli fiori giallo-verdi e frutti secchi discoidali con ala circolare.
- Originale conservato in Libreria `/PIANTE DELLA BIBBIA/atl-0151-paliurus-spina-christi-tavola-botanica.webp` (file_id `file_0000000060908210bc740d939221c7ba`); non conservare Base64 su GitHub.
- WebP **1086x1448** px, **385758** byte, SHA256 **30a70c2086f6874b8aa2c27deea2fe50f13d7236a4b1c45b98beb72d4fa95b14**.
- Preflight Library del mini-file completato con status=succeeded. Ponte in 17 blocchi binari (16x24000 + 1758), Base64 ASCII una riga per blocco: `pdb/atlas-media-start` una volta, 17 `pdb/atlas-media-chunk`, controllati uno a uno `next_offset` e `remaining_bytes`; `pdb/atlas-media-finish` con checksum server uguale al locale.
- Media/featured #2160, MIME `image/webp`, ALT descrittivo verificato da `ewpa/get-media`; `_thumbnail_id=2160`, `pdb_plate_media_id=2160` e provenienza su pianta #2159.
- Link media https://piantedellabibbia.altervista.org/wp-content/uploads/2026/11/atl-0151-paliurus-spina-christi-tavola-botanica.webp
- Pulizia ponte e mini-file: `files__manage_library` status `succeeded` per entrambi (spostati nel cestino). WebP originale NON cancellato.

## Fonti originali realmente collazionate
1. Moldenke & Moldenke (1952), *Plants of the Bible*, voce 154, **p. stampata 165 / PDF 161**. Preferisce ipotesi Paliurus per corona, spine e rami flessibili, ma documenta contrasto storico sulla presenza in Giudea. Fonte WP #135.
2. J.A. Duke (2008), *Duke's Handbook of Medicinal Plants of the Bible*, **pp.315–316 / PDF 341–342**, p.316 include frutto secco vs *Ziziphus*, osservazioni medicinali tradizionali e confusione sulla commestibilità. Fonte #136.
3. G.E. Post (1896), *Flora of Syria, Palestine and Sinai*, **p.201 / PDF 211**, nome storico *Paliurus aculeatus*: tre nervi, coppia di spine, frutto alato, siepi delle pianure. Fonte #2041.
4. H.B. Tristram (1867), *The Natural History of the Bible*, **pp.428–429 / PDF 440–441**: confronto `samur`, `šāmîr`, *Paliurus*, *Rhamnus*, *Ziziphus*. Fonte #2042.
5. J.H. Balfour (1857), *The Plants of the Bible: Trees and Shrubs*, **p.54 / PDF 88**: diversi taxa proposti per spine, compreso *P. aculeatus*; nessuna identificazione specifica dimostrata. Fonte #2043.
6. M. Zohary (1982), *Plants of the Bible*, **pp.153–156 / PDF 154–157**: lessico delle spine spesso collettivo, *ʾăṭād* più plausibilmente *Ziziphus*, *Sarcopoterium spinosum* concorrente per corona; NON attribuire a Zohary un'identificazione a favore di Paliurus. Fonte #1554.
7. Kew POWO #2162, https://powo.science.kew.org/taxon/717707-1 (letto live); O. Johnson 2024 Trees and Shrubs Online #2163 (scheda botanica letta live); Molecules 2026 31(1),87 #2164 (abstract/riassunto/conclusioni online, NON prove cliniche). 
- Dafni–Böck 2019 PDF cercato direttamente: nessuna occorrenza specifica di `Paliurus` individuata, pertanto nessuna attribuzione. Grilli Caiola–Guarrera–Travaglini non accessibile in questa sessione: non citato senza lettura.

## Record WordPress e relazioni
- Fonti nuove #2162 Kew, #2163 Johnson, #2164 studio semi; fonte canoniche riusate #135, #136, #1554, #2041, #2042, #2043.
- Citazioni fonti alla pianta #2159: **#1204–1212** (9 fonti), più citazioni a supporti **#1213–1220**.
- Passi biblici creati #2165 Matteo 27:29, #2166 Marco 15:17, #2167 Giovanni 19:2–5, #2168 Isaia 7:23–25, ciascuno con parafrasi originale e metadati biblici.
- Lemmi #2169 greco ἄκανθα (G173), #2170 ebraico שָׁמִיר; legami passo–termine **#245–248**.
- Identificazioni con pianta **#284–287**, tutte con `status=controversa`; non è possibile dimostrare specie dalla corona (ἀκάνθαι) o da šāmîr.
- Medicina storica e sicurezza separata **#2171**; distingue usi tradizionali e dati sperimentali da efficacia clinica; non propone consumo o dosaggi.
- Tutti i supporti #2162–2171 status publish; collegamenti in corpo della pianta a citazioni, lemmi, fonti, medicina e altro taxon già esistente.

## SEO e QA
- `ewpa/yoast-get-seo` ha confermato su #2159 SEO title, description, focus keyphrase `Paliurus spina-christi Bibbia`, noindex=false, nofollow=false, OG e immagine OG corretti. Yoast applicato anche ai record di supporto #2162–2171.
- `ewpa/get-cpt-item` dopo pubblicazione: status=publish, permalink corretto, featured, famiglia e campi scientifici registrati, ALT media da `ewpa/get-media`, link biblici e medicina in testo.
- Audit `pdb/atlas-coverage` attesta 111/111 `pdb_plant` con almeno una fonte (non è prova di audit visivo completo). Preesistono 30 segnalazioni editoriali su altre piante; non sono errori di ATL-0151.
- **QA HTML pubblico desktop/mobile NON certificato:** tentativo browser esterno fallito `Internal Error / sito non accessibile via strumento`. Non annulla la pubblicazione WP confermata dal backend.
- Tema/plugin NON modificati.

## Prossima specie da affidare all'automazione ESISTENTE
- Vecchia voce **ATL-0166 — Pancratium maritimum L.**, giglio di mare. Kew POWO accetta il nome (Amaryllidaceae; https://powo.science.kew.org/taxon/66466-1), sinonimo *Hymenocallis maritima* (L.) M.Roem. Ricerche WP `pdb_plant`, status any: Pancratium maritimum e sea daffodil hanno restituito solo *Narcissus tazetta* WP #2016 per citazione nel testo; *Hymenocallis maritima* e *Pancratium carolinianum* non hanno scheda autonoma. Sono taxa distinti.
- Codice operativo successivo **ATL-0152 solo dopo ulteriore controllo live anti-duplicati e delle bozze**; non dedurre dal legacy, verificare all'inizio della corsa.
- Non sospendere né duplicare automazione oraria esistente id `6b00cb7b5a988191877878d9f84bebad`, Europe/Rome, una specie/ora; richiedere collazione di tutte le fonti, preflight Library prima di generare media, checksum e SEO prima di publish.
