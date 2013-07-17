/*
Title: Teil 2: Erstellen des SOCKS5 Proxys
Author: napcae
Date: 2010/11/03
*/

Im <a href="http://napcae.wordpress.com/2010/11/02/teil-1-erstellen-eines-ssh-servers-mit-hilfe-einer-fritzbox/" target="_blank">1.Teil</a> ging es um die Erstellung des SSH Servers.

Für den 2. Teil des Tutorials wird nun ein SOCKS5 Proxy über die Locations(Orte?) von OS X eingerichtet. Außerdem öffnet man einen dynamischen SSH Tunnel.

## SOCKS5 erstellen

<!--more-->

Öffnet dazu zunächst die Systemeinstellungen

<a href="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-30-51.png" target="_bank"><img style="display:block;margin-left:auto;margin-right:auto;border:0 initial initial;" title="Screen shot 2010-11-03 at 15.30.51.png" src="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-30-51.png" border="0" alt="Screen shot 2010-11-03 at 15.30.51.png" width="481" height="59" /></a>

Hier wählt man dann Netzwerk/Network

<p style="text-align:center;">
  <a href="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-12-35.png" target="_bank"><img class="aligncenter" style="display:block;" title="Screen shot 2010-11-03 at 15.12.35.png" src="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-12-35.png" border="0" alt="Screen shot 2010-11-03 at 15.12.35.png" width="419" height="358" /></a>
</p>

Oben bei Locations(Orte?) fügt man einen neuen Ort hinzu

<a href="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-12-55.png" target="_bank"><img style="display:block;margin-left:auto;margin-right:auto;border:0 initial initial;" title="Screen shot 2010-11-03 at 15.12.55.png" src="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-12-55.png" border="0" alt="Screen shot 2010-11-03 at 15.12.55.png" width="449" height="395" /></a>

Ich hab meine Location “SOCKS5 – on the road” genannt

Klickt auf Advanced/Erweitert. Diese Location wird für Ethernet wie folgt editiert

<a href="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-14-03.png" target="_blank"><img style="display:block;margin-left:auto;margin-right:auto;border:0 initial initial;" title="Screen shot 2010-11-03 at 15.14.03.png" src="http://napcae.files.wordpress.com/2010/11/screen-shot-2010-11-03-at-15-14-03.png" border="0" alt="Screen shot 2010-11-03 at 15.14.03.png" width="399" height="312" /></a>

Wiederholt diesen Vorgang für AirPort und ggf. weitere Interfaces.

## Dynamischen Tunnel öffnen

<!--more-->

Öffnet ein Terminal und gebt folgendes ein

> <span style="font-family:monospace;">ssh -D 9999 -p 443 -v root@euredomain.dyndns.org</span>

Das Passwort ist natürlich das, welches man vorher festgelegt hat.

**-D** steht hierbei für die dynamische Weiterleitung auf den Port 9999

**-v** ist dafür da, Fehler die auftauchen besser identifizieren zu können(kann weggelassen werden)

Das war’s dann auch schon, aktiviert vorher die Location und gebt dann den Terminalbefehl ein.

<a href="http://wp.me/p6SpR-1l" target="_blank">Teil 3</a> werde ich morgen veröffentlichen.