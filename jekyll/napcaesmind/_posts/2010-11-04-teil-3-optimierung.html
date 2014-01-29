---
layout: post
title: 'Teil 3: Optimierung'
---

<p><a href="http://napcae.wordpress.com/2010/11/03/teil-2-erstellen-des-socks5-proxys/#more-78" target="_blank">Teil 2</a> handelte von der Einrichtung des SOCKS5 Proxys.</p>

<p>Im letzten Teil des Tutorials wird ein Passwortfreies Login durch Public Key Authentication ermöglicht.</p>

<h2>Erstellen des Schlüssels</h2>

<p>Öffnet auf eurer lokalen Computer ein Terminal und gebt folgendes ein</p>

<pre><code>$ ssh-keygen -t rsa&lt;
</code></pre>

<p>alle "Dialoge" mit Enter bestätigen.</p>

<p>Mit folgendem Befehl übertragt man seinen Key über scp auf seine FritzBox</p>

<pre><code>$ scp ~/.ssh/id_rsa.pub root@euredomain.dyndns.org:$HOME/.ssh/authorized_keys
</code></pre>

<p>Nun kann man sich jederzeit ohne Passwort auf seinen Server einloggen.<br />
Anmerkung:  Schützt die Datei <em>~/.ssh/id_rsa</em> vor unberechtigten Zugriffen, denn damit loggt man sich ein!</p>

<p>Was bringt das einem nun? Zum einen ist das sicherer als ein Passwort, da man jenes über Sniffing oder Key_Logger schnell rausfinden kann. Außerdem ermöglicht diese Methode einem die Realisierung eines Scriptes, welches automatisch die Location ändert und den Tunnel öffnet.</p>

<h2>Script</h2>

<p>Dies sieht so aus:</p>

<pre><code>#!/bin/sh
#This Script will open a dynamic ssh Tunnel to your server      
#activate Location "SOCKS5 - on the road"
scselect xxxxxxxxxxxxxxxxxxxxxxxxxxxxx

sleep 5

#open tunnel
ssh -D 9999 -p 443 -v root@euredomain.dyndns.org 

#end
</code></pre>

<p>Findet zuerst heraus, wie die ID eures Netzwerkes ist</p>

<pre><code>$ scselect
</code></pre>

<p>Notiert euch die ID und ersetzt xxxxxxxxxxxxxx mit der ID</p>

<p>Speichert das Script als *.command und es ist nach</p>

<pre><code>$ chmod u+rwx *.command
</code></pre>

<p>mit einem Doppelklick ausführbar!</p>

<p>So ist man sicher in Hotspots unterwegs =)</p>

<p>Viel Spaß!</p>
