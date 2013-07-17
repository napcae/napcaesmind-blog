/*
Title: Panic&#8217;s &#8220;Prompt&#8221; und Public Key Authentication
Author: napcae
Date: 2012/02/25
*/

Also, da gibt es diese [Universal App][1] namens “Prompt” aus der Entwicklerschmiede [Panic][2].  
Nichts weiter als ein SSH Client, aber er unterstützt Public Key Authentication. Dazu muss man nur seinen Private Key via iTunes Dateifreigabe auf’s iPhone oder wahlweise auf sein iPad synchronisieren und ihn dann in der App selbst auswählen. Das war’s – denkste. Leider gibt es keine gute Dokumentation über den Vorgang, einen Schritt habe ich nämlich nirgends wo gefunden(im Nachhinein hätte man aber auch selber darauf kommen können..)  
`<br />
$ cd .ssh<br />
$ cat id_rsa.pub >> authorized_keys<br />
`

Einfach seinen Public Key(vom Server) nach authorized_keys schieben und fertig! <img src='http://198.211.112.164/wp-includes/images/smilies/icon_biggrin.gif' alt=':D' class='wp-smiley' /> 

Manchmal stell’ ich mich aber auch blöde an..

 [1]: http://itunes.apple.com/us/app/prompt/id421507115?mt=8 "Universal App"
 [2]: http://www.panic.com/