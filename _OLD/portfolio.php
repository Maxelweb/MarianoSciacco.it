<? include 'includes/template_header.php'; ?>

<section id="pageheader">
	<div class="limiter">
		<div class="title">Portfolio: siti web e progetti in corso</div>
	</div>
</section>


<section id="description">
	<div class="limiter">
		
		<article>
			<h2>Atlantis (City) Roleplay [2011 - 2017]</h2>
				<p>
					Atlantis (City) Roleplay era una community italiana di <b>San Andreas Multiplayer (SA-MP)</b>, nota mod multiplayer non ufficiale di Grand Theft Auto: San Andreas.
					All'interno di questo gioco si simulava la vita reale impersonando i ruoli di una società moderna quali poliziotto, criminale, civile disoccupato, medico, pompiere, tassista e via dicendo.
				</p>
				<p>
					Per questa community ho realizzato i seguenti siti web:
					<ul>
						<li>Atlantisbook, <b>Social Network</b> (simulato) di Los Santos</li>
						<li><b>Database</b> per gli agenti del reparto penitenziario con portale accademici (SADoC)</li>
						<li><b>Database</b> per l'FBI</li>
						<li><b>Database</b> per le officine (LSW)</li>
						<li><b>Database</b> per la scuola guida</li>
						<li><b>Database</b> per Emergency Medical Service (EMS)</li>
						<li><b>Portale Web</b> per il dominio internet LSCITY.ORG</li>
						<li><b>Portale Notizie</b> per gli annunci importanti globali</li>
						<li><b>Portale Esami</b> per la polizia (LSPD) e per il Fire Department (LSFD)</li>
						<li><b>Portale di Sviluppo</b> per i monitorare i changelog e i bug di mappe, gamemod e altri siti web</li>
						<li><b>Portale Web + Blog</b> per la polizia (LSPD)</li>
						<li><b>Help Desk</b> per l'aiuto degli utenti con i siti web</li>
						<li><b>User Control Panel (UCP)</b> per il server training della polizia (LSPD)</li>
						<li><b>Rinnovo grafico</b> del UCP di gioco (mai pubblicato causa chiusura)</li>
						<li><b>Database generale</b> per le fazioni legali (mai pubblicato causa chiusura)</li>
						<li>Tema e bugfix del database della polizia (LSPD)</li>
						<li>Temi dei forum delle fazioni in PHPBB 3 / 3.1 (<b>ProfessionalWeb</b>)</li>
					</ul>
				</p>
				<p>
					Molti di questi siti web sono stati sviluppati e portati avanti nel tempo, in base agli andamenti del server e in base alle mie conoscenze di Web Development, maturate con gli anni.
					Quelli che ebbero più successo furono a suo tempo i database delle fazioni e il social network che vennero usati da molti utenti e ciò permise di <b>aumentare la realtà</b> potendo continuare a giocare, oltre che nel server di gioco, anche al di fuori con il sito web appositamente creato e affine al tipo di lavoro del personaggio che si possedeva.
				</p>
				<p>
					La peculitarità di questi siti stava nel fatto che ciascuno era sviluppato in maniera differente dall'altro, ma ognuno vantava di un comparto amministrativo e di un comparto utente per cui alcune zone o alcune azioni richiedevano necessariamente dei permessi appositi.
				</p>
		</article>
		
		<article>

				<h2>La struttura dei database e della maggior parte dei siti web</h2>

				<p>
					La struttura dei siti era molto semplice. Se stilassimo una mappa del sito verrebbe nella maggior parte dei casi una cosa del genere:
				</p>
				<div class="fleft"><img src="images/portfolio/database-structure.png"></div>
					<ul>
						<li>Partendo dal basso, troviamo la <b>Visitor Area</b> che è la zona adibita ai visitatori, solitamente con poche pagine da poter vedere, tra cui la zona di registrazione e accesso al sito.</li>
						<li>Nella parte centrale c'è il fulcro del sistema: la <b>User & Moderator Area</b> in cui gli utenti e i moderatori adoperavano le tabelle piene di dati come ad esempio Fedine Penali, Veicoli Sequestrati, Lezioni di guida effettuate, Richiami alla patente, Visite mediche effettuate e tante altre cose. </li>
						<li>L'area più alta, denominata <b>Admin Area</b>, è la zona più ristretta di tutto il database in cui solo una cerchia ristretta di persone poteva averne accesso. Difatti da lì era possibile vedere le Logs, ossia i movimenti degli utenti e dei moderatori, i dati cancellati, gli accessi effettuati, gli indirizzi IP, gli errori di Login, gli utenti bannati e le eventuali news da comunicare agli utenti. Da qui dunque si aveva accesso alle informazioni più sensibili, ma il tutto era comunque ben protetto e gestito.</li>
					</ul>
					<ul>
						<li>
							A livello di struttura tecnica del database in tutti i casi i database erano dotati di due tabelle principali: <b>logs</b> & <b>utenti</b>. La prima racchiudeva tutto ciò che qualsiasi utente faceva dal primo momento in cui loggava, fino a quando usciva dalla sessione. La seconda tabella, invece, teneva traccia delle informazioni base dell'utente per rendere possibile l'accesso e la gestione dei permessi. Ciascun utente corrispondeva a un record che aveva in genere le colonne <code>username, password, rank, founder, ip, ban</code> che servivano a determinare <i>Nome utente, Password (hashata), Rank del permesso (0-4), Founder (Booleano), Ultimo Indirizzo IP e Ban (Booleano)</i>.
						</li>
					</ul>
				<p>
					Diversamente, i portali web avevano una struttura leggermente differente essendo indirizzati appunto ad essere siti di notizie e informazioni per i visitatori.
				</p>
				<div class="fright"><img src="images/portfolio/portal-structure.png"></div>

					<ul>
						<li>
							Troviamo infatti la <b>admin area</b> e la <b>visitor area</b> che assumono maggiore centralità, mentre l'area utente viene completamente rimossa. 
							Difatti dalla admin area è possibile accedere alle funzioni di gestione delle news la quale, nella maggior parte dei casi, era sviluppata in maniera molto elementare e con giusto un paio di funzioni di controllo (logs). 
						</li>
						<li>
							Ciò che balzava sicuramente all'occhio era ovviamente la maggior accuratezza per quanto riguarda il design, dal momento che tutti i miei progetti si rifanno a fogli di stile CSS completamente sviluppati ex novo. Questo per mettere a disposizione del visitatore le informazioni disponibili con maggior piacere di navigazione web. 
						</li>
					</ul>
		</article>

		<p class="false">La sezione è in costruzione..</p>

	</div>
</section>

<? include 'includes/template_footer.php'; ?>