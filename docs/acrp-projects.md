---
layout: page
title: Atlantis Roleplay
permalink: /projects/acrp/
---


# Atlantis Roleplay (2011 - 2017)

#### Progetti / AC-RP

#### [← Torna indietro](./)

Atlantis (City) Roleplay era una community italiana di **San Andreas Multiplayer (SA-MP)**, nota mod multiplayer non ufficiale di Grand Theft Auto: San Andreas. All'interno di questo gioco si simulava la vita reale impersonando i ruoli di una società moderna quali poliziotto, criminale, civile disoccupato, medico, pompiere, tassista e via dicendo.

Per questa community ho realizzato i seguenti siti web:

-   Atlantisbook, **Social Network** (simulato) di Los Santos
-   **Database** per gli agenti del reparto penitenziario con portale accademici (SADoC)
-   **Database** per la Los Santos News Network (LSNN)
-   **Database** per le officine (LSW)
-   **Database** per la scuola guida
-   **Database** per Emergency Medical Service (EMS)
-   **Portale Web** per il dominio internet LSCITY.ORG
-   **Portale Notizie** per gli annunci importanti globali
-   **Portale Esami** per la polizia (LSPD) e per il Fire Department (LSFD)
-   **Portale di Sviluppo** per i monitorare i changelog e i bug di mappe, gamemod e altri siti web
-   **Portale Web + Blog** per la polizia (LSPD)
-   **Help Desk** per l'aiuto degli utenti con i siti web
-   **User Control Panel (UCP)** per il server training della polizia (LSPD)
-   **Rinnovo grafico** del UCP di gioco 
-   **Database generale** per le fazioni legali (incompleto)
-   Tema e bugfix del database della polizia (LSPD)
-   Temi dei forum delle fazioni in PHPBB 3 / 3.1 (**ProfessionalWeb**)

Molti di questi siti web sono stati sviluppati e portati avanti nel tempo, in base agli andamenti del server e in base alle mie conoscenze di Web Development, maturate con gli anni. Quelli che ebbero più successo furono a suo tempo i database delle fazioni e il social network che vennero usati da molti utenti e ciò permise di **aumentare la realtà** potendo continuare a giocare, oltre che nel server di gioco, anche al di fuori con il sito web appositamente creato e affine al tipo di lavoro del personaggio che si possedeva.

La peculitarità di questi siti stava nel fatto che ciascuno era sviluppato in maniera differente dall'altro, ma ognuno vantava di un comparto amministrativo e di un comparto utente per cui alcune zone o alcune azioni richiedevano necessariamente dei permessi appositi.

## La struttura dei database e della maggior parte dei siti web

La struttura dei siti era molto semplice. Se stilassimo una mappa del sito verrebbe nella maggior parte dei casi una cosa del genere:

![](https://marianosciacco.it/images/portfolio/database-structure.png)

-   Partendo dal basso, troviamo la **Visitor Area** che è la zona adibita ai visitatori, solitamente con poche pagine da poter vedere, tra cui la zona di registrazione e accesso al sito.
-   Nella parte centrale c'è il fulcro del sistema: la **User & Moderator Area** in cui gli utenti e i moderatori adoperavano le tabelle piene di dati come ad esempio Fedine Penali, Veicoli Sequestrati, Lezioni di guida effettuate, Richiami alla patente, Visite mediche effettuate e tante altre cose.
-   L'area più alta, denominata **Admin Area**, è la zona più ristretta di tutto il database in cui solo una cerchia ristretta di persone poteva averne accesso. Difatti da lì era possibile vedere le Logs, ossia i movimenti degli utenti e dei moderatori, i dati cancellati, gli accessi effettuati, gli indirizzi IP, gli errori di Login, gli utenti bannati e le eventuali news da comunicare agli utenti. Da qui dunque si aveva accesso alle informazioni più sensibili, ma il tutto era comunque ben protetto e gestito.

-   A livello di struttura tecnica del database in tutti i casi i database erano dotati di due tabelle principali: **logs** & **utenti**. La prima racchiudeva tutto ciò che qualsiasi utente faceva dal primo momento in cui loggava, fino a quando usciva dalla sessione. La seconda tabella, invece, teneva traccia delle informazioni base dell'utente per rendere possibile l'accesso e la gestione dei permessi. Ciascun utente corrispondeva a un record che aveva in genere le colonne `username, password, rank, founder, ip, ban` che servivano a determinare _Nome utente, Password (hashata), Rank del permesso (0-4), Founder (Booleano), Ultimo Indirizzo IP e Ban (Booleano)_.

Diversamente, i portali web avevano una struttura leggermente differente essendo indirizzati appunto ad essere siti di notizie e informazioni per i visitatori.

![](https://marianosciacco.it/images/portfolio/portal-structure.png)

-   Troviamo infatti la **admin area** e la **visitor area** che assumono maggiore centralità, mentre l'area utente viene completamente rimossa. Difatti dalla admin area è possibile accedere alle funzioni di gestione delle news la quale, nella maggior parte dei casi, era sviluppata in maniera molto elementare e con giusto un paio di funzioni di controllo (logs).
-   Ciò che balzava sicuramente all'occhio era ovviamente la maggior accuratezza per quanto riguarda il design, dal momento che tutti i miei progetti si rifanno a fogli di stile CSS completamente sviluppati ex novo. Questo per mettere a disposizione del visitatore le informazioni disponibili con maggior piacere di navigazione web.
