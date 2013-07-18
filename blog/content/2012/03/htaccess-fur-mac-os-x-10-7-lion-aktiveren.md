/*
Title: .htaccess für Mac OS X 10.7 Lion aktiveren
Author: napcae
Date: 2012/03/03
*/

Von Haus aus, sind .htaccess Dateien beim Apache für OS X leider deaktiviert. 
<br>
Um diese zu aktivieren um zum Beispiel passwortgeschützte Verzeichnisse zu erstellen, bedarf es einiger Modifikationen. 
<br>
Die Apache Config befindet sich nicht wie üblich unter
 
	/etc/httpd/httpd.conf
	
sondern hier: 

	/etc/apache2/httpd.conf 
	
<br>	
Im Klartext macht also folgendes:  

	$ sudo nano /etc/apache2/httpd.conf<br />

Bearbeitet diese Stelle:  

    #
    # AllowOverride controls what directives may be placed in .htaccess files.
    # It can be "All", "None", or any combination of the keywords:
    #   Options FileInfo AuthConfig Limit
    #
    AllowOverride none

zu  

    #
    # AllowOverride controls what directives may be placed in .htaccess files.
    # It can be "All", "None", or any combination of the keywords:
    #   Options FileInfo AuthConfig Limit
    #
    AllowOverride All


Startet den Apache neu und die Sache sollte gegessen sein. 
<br>Kleiner Tip, mit STR+W könnt ihr nach Wörtern im nano/pico suchen.

Um nun das Verzeichnis eurer Wahl mit einem Passwort zu schützen, macht folgendes. Wechselt in euer WebRoot und erstellt eine .htaccess mit folgendem Inhalt:  

	AuthName "Password required"
	AuthType Basic
	AuthUserFile vollständigerPfad_zu_eurem/.htpasswd
	Require valid-user
  
Wechselt dann zum Ordner, wo die .htpasswd entstehen soll und tippt
  
	$ htpasswd -c .htpasswd euerbenutzer
	
ein. Ein gültiges Passwort eingeben, es bestätigen und nun zum Testen “localhost”(oder eure WebURL) in den Browser eingeben.<br> 
Es sollte nach Usernamen und Passwort gefragt werden.