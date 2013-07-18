/*
Title: Teil 1: Erstellen eines SSH Servers mit Hilfe einer Fritz!Box
Author: napcae
Date: 2010/11/02
*/

Fangen wir also an!

Benötigt wird eine Fritz!Box, in diesem Fall eine 7170.

Installiert wird dann <a href="http://matt.ucc.asn.au/dropbear/dropbear.html" target="_blank">Dropbear</a>, ein SSH Server, der speziell für <a href="http://de.wikipedia.org/wiki/Embedded_Linux" target="_blank">eingebettete Pinguine</a> entwickelt wurde.

## <span style="font-size:20px;">Dropbear installieren</span><span style="font-size:20px;font-weight:bold;"></span>

Schafft euch erst mal Zugriff zu eurer Box via telnet. Nehmt dazu ein Telefon im Haushalt und ruft folgende Nummer an:

	#96*7*

Jetzt kann man sich über eine Shell auf die Box verbinden. Das Passwort ist dabei das gleiche, wie beim Webfrontend

	telnet fritz.box

Dropbear wird nun installiert, kopiert den Hash eures selbst gewählten Passwortes

	$ cd /var
	$ /usr/bin/wget http://www.spblinux.de/fbox.new/cfg_dropbear
	$ chmod 755 /var/cfg_dropbear
	$ /var/cfg_dropbear install
	$ /var/dropbear/bin/passwd
	$ cat /var/tmp/passwd</pre>

Als nächstes öffnet <a href="http://de.wikipedia.org/wiki/Vi" target="_blank">vi</a> um eine neue Datei zu erstellen

	vi /var/tmp/debug.cfg

Kopiert den Inhalt hier in das Script, xxxxxxxx müsst ihr mit dem errechneten Hashwert ersetzen

    #!/bin/sh
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
    echo 'root:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx:0:0:root:/var/tmp/:/bin/sh' > /var/tmp/passwd
    echo "ftpuser:any:1000:0:ftp user:/var/media/ftp:/bin/sh" >> /var/tmp/passwd
    echo "nameserver 192.168.178.1" >> /var/tmp/resolv.conf

Das erstellte Script wird dann mit ESC , **:wq** gespeichert und mit

	$ cat /var/tmp/debug.cfg > /var/flash/debug.cfg

in den Speicher geschrieben.

## ar7.cfg bearbeiten

Die ar7.cfg wird nun bearbeitet, um die Fritz!Box von außen erreichbar zu machen.

	$ cat /var/flash/ar7.cfg > /var/tmp/ar7.cfg
	$ vi /var/tmp/ar7.cfg
	
Sucht nach diesen Zeilen und fügt **#ssh-fritz-box** hinzu

	forwardrules = "tcp 0.0.0.0:584 0.0.0.0:443 0",
					"tcp 0.0.0.0:443 0.0.0.0:22 # fritz-box"

Es wird der Port 443 verwendet(https). Damit “sichert” man sich vor Bruteforceattacken insofern ab, dass der Standard Port für ssh eigentlich 22 ist. Der Hauptgrund aber warum nicht der Port 22 benutzt wird, ist dass die meisten (Schul-,Firmen-)Netzwerke diesen sperren, 443 aber hingegen durchlassen.

Die temporäre Datei wird wieder in den Speicher geschrieben

	$ cat /var/tmp/ar7.cfg > /var/flash/ar7.cfg

Zum Schluss wird die Box neu gestartet

	$ reboot

und Telnet wieder abgeschaltet, in dem man mit dem Telefon diese Nummer anruft:

	#96*8*

<a href="/blog/2010/11/teil-2-erstellen-des-socks5-proxys">Der zweite Teil, das erstellen des SOCKS5 Proxys</a> und der <a href="/blog/2010/11/teil-3-optimierung" target="_blank">dritte Teil, die Optimierung</a> folgen noch.