/*
Title: Wie man sich vor Firesheep(und bösen Jungs) schützt
Author: napcae
Date: 2010/11/02
*/

Heutzutage haben wir’s gut.

Überall gibt es Hotspots, die frei zugänglich sind und auch rege genutzt werden – sei es <a href="http://www.golem.de/1006/75775.html" target="_blank">Starbucks</a> oder <a href="http://www.mcdonalds.de/unternehmen/restaurants/wlan.html" target="_blank">McDonalds</a>.

Meldet man sich auf einer Seite, wie zum Beispiel Facebook an, speichert der Browser die Login Daten in einem sogenannten “Session-Cookie”. Dieser ermöglicht es, weiterhin auf der der Seite zu surfen, ohne sich jedes mal neu anzumelden.

Das kann jemanden in einem offenen WLAN Hotspot zum Verhängnis werden, denn mit Eric Butlers Firefox Add On <a href="http://codebutler.com/firesheep" target="_blank">Firesheep</a>, kann man den Datenverkehr mitlesen und sich als fremder User einloggen und böse Spielchen treiben. Hacken für jedermann also.

[youtube=http://www.youtube.com/watch?v=JHKtsuATAh0&fs=1&hl=en_US&hd=1]

Um sich davor  zu schützen, hilft es einen SSH Tunnel zu bauen und darüber zu surfen. So hat man stets eine verschlüsselte Verbindung.

![][1]  
SSH Tunnel([Engadget][2])

Auf den folgenen Seiten werde ich nach und nach erklären wie man einen SSH Server aufsetzt, einen SOCKS5 Proxy verwendet und somit sicher in offenen Hotspots surfen kann.

[Teil 1: Erstellen eines SSH Servers mit Hilfe einer Fritz!Box][3]  
[Teil 2: Erstellen des SOCKS5 Proxys][4]  
<a href="http://wp.me/p6SpR-1l" target="_blank"> Teil 3: Optimierung</a>

 [1]: http://dl.dropbox.com/u/689724/wordpress/ssh-tunnel-diagram-ht.jpeg
 [2]: http://www.blogcdn.com/www.engadget.com/media/2006/03/ssh-tunnel-diagram-ht.jpg
 [3]: http://wp.me/p6SpR-N
 [4]: http://wp.me/p6SpR-1g