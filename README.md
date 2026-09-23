# Analisi sommaria
Il progetto presuppone la possibilità di leggere uno storico di chat archiviate su un server xmpp.
La login verrà effettuata sul database mySQL ejabberd_reader utilizzando CI4 Shield.
I vari settings rimarrano su tale database.
Lo storico chat reale sarà sul database ejabberd.db attualmente in writable (vedi sotto appunto sul collegamento a quello operativo già WAL).

Le chat visualizzate saranno richieste sulla base dell'utente loggato, pertanto ogni utente associerà a se stesso uno username letto dalla tabella users di ejabberd.db che fungerà da chiave per filtrare il diario personale e intercettare tutti i bare_peer con cui si è scambiati messaggi.

Una volta selezionato il bare_peer il software andrà a leggere tutto l'elenco di messaggi con quell'utente e visualizzerà un albero di date/chat che permetterà di interagire per poter visualizzare la chat del il giorno selezionato.

## Stack tecnologico ambiente DEV
- PHP v8.4.25
- Codeigniter v4.7.4
- AdminLTE 4 v4.9.1  
- Bootstrap v5.3.8

## Database
### Default 
il database principale dell'applicazione, con gestione utenti di Shield, login, permessi ed eventualmente in futuro i settings
### Secondary
il database sqlite3 di ejabberd contenente uno storico chat unificato tra due diverse VPS con storia dal 2016 con interruzione logging nel 2023 e ripresa nel 2026 con adozione nuova VPS personale con MAM attivato. Al momento il database vive dentro writeable in quanto non ho ancora identificato il modo per poterlo collegare al vero database sqlite3 in /var/lib/ejabberd/ejabberd.db che è già predisposto con [journal WAL](https://www.sqlite.org/wal.html)

# Roadmap di sviluppo/changelog

## [v0.0.1]
- Inizializzazione progetto con CI4

## [v0.0.2]
- AdmiLTE4 via CDN
- Creazione Adminseeder
- Aggiunta sistema di Shield con migrazione
```console
> php spark migrate --all
```

## [v0.0.3]
- Creazione README.md aggiornato
- Login personalizzata con layout auth
- Partial per gli alert condiviso dai layout
- CSS custom per img brand in login
- Aggiunto immagini del software (ejabberd e miranda) in public images con formato webp
- Aggiornata favicon con icona Miranda
- Aggiunto filtri di login e csrf
- Installato translation ufficiali CI4 e impostato default locale it
- Login Shield funzionante

## [v0.0.4]
- Disabilitazione registrazione
- Sistemazione gruppi presenti, adattamento matrici
- Aggiunta campo custom 'ejabberd_nick' con migrazione ad hoc
- Creazione UserModel come nuovo userProvider per campi custom
- Gestione completa utenti (namespace Admin):
    - CRUD completo di gestione con gruppi, assegnazione e rimozione
    - Controller dedicato e view dedicate con gestione superadmin/admin


