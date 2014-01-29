---
layout: post
title: 'Teil 1: Erstellen eines SSH Servers mit Hilfe einer Fritz!Box'
---

<p>Fangen wir also an!</p>

<p>Benötigt wird eine Fritz!Box, in diesem Fall eine 7170.</p>

<p>Installiert wird dann <a href="http://matt.ucc.asn.au/dropbear/dropbear.html" target="_blank">Dropbear</a>, ein SSH Server, der speziell für <a href="http://de.wikipedia.org/wiki/Embedded_Linux" target="_blank">eingebettete Pinguine</a> entwickelt wurde.</p>

<h2><span style="font-size:20px;">Dropbear installieren</span><span style="font-size:20px;font-weight:bold;"></span></h2>

<p>Schafft euch erst mal Zugriff zu eurer Box via telnet. Nehmt dazu ein Telefon im Haushalt und ruft folgende Nummer an:</p>

<pre><code>#96*7*
</code></pre>

<p>Jetzt kann man sich über eine Shell auf die Box verbinden. Das Passwort ist dabei das gleiche, wie beim Webfrontend</p>

<pre><code>telnet fritz.box
</code></pre>

<p>Dropbear wird nun installiert, kopiert den Hash eures selbst gewählten Passwortes</p>

<pre><code>$ cd /var
$ /usr/bin/wget http://www.spblinux.de/fbox.new/cfg_dropbear
$ chmod 755 /var/cfg_dropbear
$ /var/cfg_dropbear install
$ /var/dropbear/bin/passwd
$ cat /var/tmp/passwd&lt;/pre&gt;
</code></pre>

<p>Als nächstes öffnet <a href="http://de.wikipedia.org/wiki/Vi" target="_blank">vi</a> um eine neue Datei zu erstellen</p>

<pre><code>vi /var/tmp/debug.cfg
</code></pre>

<p>Kopiert den Inhalt hier in das Script, xxxxxxxx müsst ihr mit dem errechneten Hashwert ersetzen</p>

<pre><code>#!/bin/sh
while !(ping -c 1 spblinux.de)
do
sleep 2
done
cd /var
/usr/bin/wget http://www.spblinux.de/fbox.new/cfg_dropbear
sleep 10
chmod 755 /var/cfg_dropbear
/var/cfg_dropbear install
/var/cfg_dropbear start
/var/dropbear/bin/dropbearkey -t rsa -f /var/tmp/dropbear_rsa_hostkey -s 768
echo 'root:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx:0:0:root:/var/tmp/:/bin/sh' &gt; /var/tmp/passwd
echo "ftpuser:any:1000:0:ftp user:/var/media/ftp:/bin/sh" &gt;&gt; /var/tmp/passwd
echo "nameserver 192.168.178.1" &gt;&gt; /var/tmp/resolv.conf
</code></pre>

<p>Das erstellte Script wird dann mit ESC , <strong>:wq</strong> gespeichert und mit</p>

<pre><code>$ cat /var/tmp/debug.cfg &gt; /var/flash/debug.cfg
</code></pre>

<p>in den Speicher geschrieben.</p>

<h2>ar7.cfg bearbeiten</h2>

<p>Die ar7.cfg wird nun bearbeitet, um die Fritz!Box von außen erreichbar zu machen.</p>

<pre><code>$ cat /var/flash/ar7.cfg &gt; /var/tmp/ar7.cfg
$ vi /var/tmp/ar7.cfg
</code></pre>

<p>Sucht nach diesen Zeilen und fügt <strong>#ssh-fritz-box</strong> hinzu</p>

<pre><code>forwardrules = "tcp 0.0.0.0:584 0.0.0.0:443 0",
                "tcp 0.0.0.0:443 0.0.0.0:22 # fritz-box"
</code></pre>

<p>Es wird der Port 443 verwendet(https). Damit “sichert” man sich vor Bruteforceattacken insofern ab, dass der Standard Port für ssh eigentlich 22 ist. Der Hauptgrund aber warum nicht der Port 22 benutzt wird, ist dass die meisten (Schul-,Firmen-)Netzwerke diesen sperren, 443 aber hingegen durchlassen.</p>

<p>Die temporäre Datei wird wieder in den Speicher geschrieben</p>

<pre><code>$ cat /var/tmp/ar7.cfg &gt; /var/flash/ar7.cfg
</code></pre>

<p>Zum Schluss wird die Box neu gestartet</p>

<pre><code>$ reboot
</code></pre>

<p>und Telnet wieder abgeschaltet, in dem man mit dem Telefon diese Nummer anruft:</p>

<pre><code>#96*8*
</code></pre>

<p><a href="/blog/2010/11/teil-2-erstellen-des-socks5-proxys">Der zweite Teil, das erstellen des SOCKS5 Proxys</a> und der <a href="/blog/2010/11/teil-3-optimierung" target="_blank">dritte Teil, die Optimierung</a> folgen noch.</p>
