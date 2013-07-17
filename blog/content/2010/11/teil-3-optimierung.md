/*
Title: Teil 3: Optimierung
Author: napcae
Date: 2010/11/04
*/

<a href="http://napcae.wordpress.com/2010/11/03/teil-2-erstellen-des-socks5-proxys/#more-78" target="_blank">Teil 2</a> handelte von der Einrichtung des SOCKS5 Proxys.

Im letzten Teil des Tutorials wird ein Passwortfreies Login durch Public Key Authentication ermöglicht.

## Erstellen des Schlüssels<!--more-->

Öffnet auf eurer lokalen Computer ein Terminal und gebt folgendes ein

> <pre>ssh-keygen -t rsa</pre>

<pre><span style="font-family:Georgia, 'Times New Roman', 'Bitstream Charter', Times, serif;line-height:19px;white-space:normal;font-size:13px;">alle "Dialoge" mit Enter bestätigen</span></pre>

Mit folgendem Befehl übertragt man seinen Key über scp auf seine FritzBox

> <pre>scp ~/.ssh/id_rsa.pub root@euredomain.dyndns.org:$HOME/.ssh/authorized_keys</pre>

Nun kann man sich jederzeit ohne Passwort auf seinen Server einloggen.  
Anmerkung:  Schützt die Datei *~/.ssh/id_rsa* vor unberechtigten Zugriffen, denn damit loggt man sich ein!

Was bringt das einem nun? Zum einen ist das sicherer als ein Passwort, da man jenes über Sniffing oder Key_Logger schnell rausfinden kann. Außerdem ermöglicht diese Methode einem die Realisierung eines Scriptes, welches automatisch die Location ändert und den Tunnel öffnet.

## Script

<!--more-->

Dies sieht so aus:

> <pre>#! /bin/sh
#This Script will open a dynamic ssh Tunnel to your server   	

#activate Location "SOCKS5 - on the road"
scselect xxxxxxxxxxxxxxxxxxxxxxxxxxxxx

sleep 5

#open tunnel
ssh -D 9999 -p 443 -v root@euredomain.dyndns.org 

#end</pre>

Findet zuerst heraus, wie die ID eures Netzwerkes ist

> <pre>scselect</pre>

Notiert euch die ID und ersetzt xxxxxxxxxxxxxx mit der ID

Speichert das Script als *.command und es ist nach

> <pre>chmod u+rwx *.command</pre>

mit einem Doppelklick ausführbar!

So ist man sicher in Hotspots unterwegs =)

Viel Spaß!