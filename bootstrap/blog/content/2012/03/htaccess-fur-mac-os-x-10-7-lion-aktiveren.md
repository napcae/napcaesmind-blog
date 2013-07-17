/*
Title: .htaccess für Mac OS X 10.7 Lion aktiveren
Author: napcae
Date: 2012/03/03
*/

Von Haus aus, sind .htaccess Dateien beim Apache für OS X leider deaktiviert. Um diese zu aktivieren um zum Beispiel passwortgeschützte Verzeichnisse zu erstellen, bedarf es einiger Modifikationen. Die Apache Config befindet sich nicht wie üblich unter `/etc/httpd/httpd.conf` sondern hier: `/etc/apache2/httpd.conf`  
Im Klartext macht also folgendes:  
`<br />
$ sudo nano /etc/apache2/httpd.conf<br />
`  
Bearbeitet diese Stelle:  
`<br />
    #<br />
    # AllowOverride controls what directives may be placed in .htaccess files.<br />
    # It can be "All", "None", or any combination of the keywords:<br />
    #   Options FileInfo AuthConfig Limit<br />
    #<br />
    AllowOverride none<br />
`  
zu  
`<br />
    #<br />
    # AllowOverride controls what directives may be placed in .htaccess files.<br />
    # It can be "All", "None", or any combination of the keywords:<br />
    #   Options FileInfo AuthConfig Limit<br />
    #<br />
    <strong>AllowOverride All</strong><br />
`

Startet den Apache neu und die Sache sollte gegessen sein. Kleiner Tip, mit STR+W könnt ihr nach Wörtern im nano/pico suchen.

Um nun das Verzeichnis eurer Wahl mit einem Passwort zu schützen, macht folgendes. Wechselt in euer WebRoot und erstellt eine .htaccess mit folgendem Inhalt:  
`<br />
AuthName "Password required"<br />
AuthType Basic<br />
AuthUserFile vollständigerPfad_zu_eurem/.htpasswd<br />
Require valid-user<br />
`  
Wechselt dann zum Ordner, wo die .htpasswd entstehen soll und tippt  
`$ htpasswd -c .htpasswd euerbenutzer`  
ein. Ein gültiges Passwort eingeben, es bestätigen und nun zum Testen “localhost”(oder eure WebURL) in den Browser eingeben. Es sollte nach Usernamen und Passwort gefragt werden.