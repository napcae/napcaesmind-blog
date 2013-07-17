/*
Title: Teil 1: Erstellen eines SSH Servers mit Hilfe einer Fritz!Box
Author: napcae
Date: 2010/11/02
*/

Fangen wir also an!

Benötigt wird eine Fritz!Box, in diesem Fall eine 7170.

Installiert wird dann <a href="http://matt.ucc.asn.au/dropbear/dropbear.html" target="_blank">Dropbear</a>, ein SSH Server, der speziell für <a href="http://de.wikipedia.org/wiki/Embedded_Linux" target="_blank">eingebettete Pinguine</a> entwickelt wurde.

## <span style="font-size:20px;">Dropbear installieren</span><span style="font-size:20px;font-weight:bold;"><!--more--></span>

Schafft euch erst mal Zugriff zu eurer Box via telnet. Nehmt dazu ein Telefon im Haushalt und ruft folgende Nummer an:

> <pre>#96*7*</pre>

Jetzt kann man sich über eine Shell auf die Box verbinden. Das Passwort ist dabei das gleiche, wie beim Webfrontend

> <pre>telnet fritz.box</pre>

Dropbear wird nun installiert, kopiert den Hash eures selbst gewählten Passwortes

> <pre>cd /var</pre>
> 
> <pre>/usr/bin/wget http://www.spblinux.de/fbox.new/cfg_dropbear</pre>
> 
> <pre>chmod 755 /var/cfg_dropbear</pre>
> 
> <pre>/var/cfg_dropbear install</pre>
> 
> <pre>/var/dropbear/bin/passwd</pre>
> 
> <pre>cat /var/tmp/passwd</pre>

Als nächstes öffnet <a href="http://de.wikipedia.org/wiki/Vi" target="_blank">vi</a> um eine neue Datei zu erstellen

> <pre>vi /var/tmp/debug.cfg</pre>

Kopiert den Inhalt hier in das Script, xxxxxxxx müsst ihr mit dem errechneten Hashwert ersetzen

> <pre>while !(ping -c 1 spblinux.de)
do
sleep 2
done
cd /var</pre>
> 
> <pre>/usr/bin/wget http://www.spblinux.de/fbox.new/cfg_dropbear</pre>
> 
> <pre>sleep 10
chmod 755 /var/cfg_dropbear</pre>
> 
> <pre>/var/cfg_dropbear install
/var/cfg_dropbear start</pre>
> 
> <pre>/var/dropbear/bin/dropbearkey -t rsa -f /var/tmp/dropbear_rsa_hostkey -s 768</pre>
> 
> <pre>echo 'root:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx:0:0:root:/var/tmp/:/bin/sh' &gt; /var/tmp/passwd
echo "ftpuser:any:1000:0:ftp user:/var/media/ftp:/bin/sh" &gt;&gt; /var/tmp/passwd</pre>
> 
> <pre>echo "nameserver 192.168.178.1" &gt;&gt; /var/tmp/resolv.conf</pre>

Das erstellte Script wird dann mit ESC , **:wq** gespeichert und mit

> <pre>cat /var/tmp/debug.cfg &gt; /var/flash/debug.cfg</pre>

in den Speicher geschrieben.

## ar7.cfg bearbeiten

<!--more-->Die ar7.cfg wird nun bearbeitet, um die Fritz!Box von außen erreichbar zu machen.

> <pre>cat /var/flash/ar7.cfg &gt; /var/tmp/ar7.cfg
vi /var/tmp/ar7.cfg</pre>

Sucht nach diesen Zeilen und fügt **#ssh-fritz-box** hinzu

> <pre>forwardrules = "tcp 0.0.0.0:584 0.0.0.0:443 0",</pre>
> 
> <pre style="padding-left:90px;"><strong>"tcp 0.0.0.0:443 0.0.0.0:22 # fritz-box"</strong></pre>

Es wird der Port 443 verwendet(https). Damit “sichert” man sich vor Bruteforceattacken insofern ab, dass der Standard Port für ssh eigentlich 22 ist. Der Hauptgrund aber warum nicht der Port 22 benutzt wird, ist dass die meisten (Schul-,Firmen-)Netzwerke diesen sperren, 443 aber hingegen durchlassen.

Die temporäre Datei wird wieder in den Speicher geschrieben

> <pre>cat /var/tmp/ar7.cfg &gt; /var/flash/ar7.cfg</pre>

Zum Schluss wird die Box neu gestartet

> <pre>reboot</pre>

<pre>und Telnet wieder abgeschaltet, in dem man mit dem Telefon diese Nummer anruft:</pre>

> <pre>#96*8*</pre>

<pre><span style="font-family:Georgia, 'Times New Roman', 'Bitstream Charter', Times, serif;line-height:19px;white-space:normal;font-size:13px;"><a href="http://wp.me/p6SpR-1g">Der zweite Teil, das erstellen des SOCKS5 Proxys</a> und der <a href="http://wp.me/p6SpR-1l" target="_blank">dritte Teil, die Optimierung</a> folgen noch.</span></pre>