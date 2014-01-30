---
layout: post
title: 'Teil 2: Erstellen des SOCKS5 Proxys'
---

<p>Im <a href="/blog/2010/11/teil-1-erstellen-eines-ssh-servers-mit-hilfe-einer-fritzbox" target="_blank">1.Teil</a> ging es um die Erstellung des SSH Servers.</p>

<p>Für den 2. Teil des Tutorials wird nun ein SOCKS5 Proxy über die Locations(Orte?) von OS X eingerichtet. Außerdem öffnet man einen dynamischen SSH Tunnel.</p>

<h2>SOCKS5 erstellen</h2>

<p>Öffnet dazu zunächst die Systemeinstellungen</p>

<p><a href="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-30-51.png" target="_bank"><img class="img-responsive" style="display:block;margin-left:auto;margin-right:auto;border:0 initial initial;" title="Screen shot 2010-11-03 at 15.30.51.png" src="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-30-51.png" border="0" alt="Screen shot 2010-11-03 at 15.30.51.png" width="481" height="59" /></a></p>

<p>Hier wählt man dann Netzwerk/Network</p>

<p style="text-align:center;">
  <a href="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-12-35.png" target="_bank"><img class="img-responsive" class="aligncenter" style="display:block;" title="Screen shot 2010-11-03 at 15.12.35.png" src="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-12-35.png" border="0" alt="Screen shot 2010-11-03 at 15.12.35.png" width="419" height="358" /></a>
</p>

<p>Oben bei Locations(Orte?) fügt man einen neuen Ort hinzu</p>

<p><a href="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-12-55.png" target="_bank"><img class="img-responsive" style="display:block;margin-left:auto;margin-right:auto;border:0 initial initial;" title="Screen shot 2010-11-03 at 15.12.55.png" src="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-12-55.png" border="0" alt="Screen shot 2010-11-03 at 15.12.55.png" width="449" height="395" /></a></p>

<p>Ich hab meine Location “SOCKS5 – on the road” genannt</p>

<p>Klickt auf Advanced/Erweitert. Diese Location wird für Ethernet wie folgt editiert</p>

<p><a href="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-14-03.png" target="_blank"><img class="img-responsive" style="display:block;margin-left:auto;margin-right:auto;border:0 initial initial;" title="Screen shot 2010-11-03 at 15.14.03.png" src="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-14-03.png" border="0" alt="Screen shot 2010-11-03 at 15.14.03.png" width="399" height="312" /></a></p>

<p>Wiederholt diesen Vorgang für AirPort und ggf. weitere Interfaces.</p>

<h2>Dynamischen Tunnel öffnen</h2>

<p>Öffnet ein Terminal und gebt folgendes ein</p>

<pre><code>$ ssh -D 9999 -p 443 -v root@euredomain.dyndns.org
</code></pre>

<p>Das Passwort ist natürlich das, welches man vorher festgelegt hat.</p>

<p><strong>-D</strong> steht hierbei für die dynamische Weiterleitung auf den Port 9999</p>

<p><strong>-v</strong> ist dafür da, Fehler die auftauchen besser identifizieren zu können(kann weggelassen werden)</p>

<p>Das war’s dann auch schon, aktiviert vorher die Location und gebt dann den Terminalbefehl ein.</p>

<p><a href="/blog/2010/11/teil-3-optimierung" target="_blank">Teil 3</a> werde ich morgen veröffentlichen.</p>
