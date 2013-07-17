/*
Title: Aktuellste Version von nano und Syntax Highlighting auf dem Mac
Author: napcae
Date: 2012/05/09
*/

Da ich relativ oft im Terminal arbeite, aber oft nur kleine Textabschnitte bearbeite benutze ich bevorzugt [nano.][1]

Auf Mac OS X ist aber eine alte Binary(2.0.6) installiert. Um die neuste Version 2.2.6 mit Syntax Highlighting zu bekommen, kommt man aber nicht drum herum entweder MacPorts zu installieren oder sich nano selbst zu kompilieren.

<!--more-->

  
Ladet euch also die aktuellste Source von der [Website][2] runter und entpackt sie:

`$bash3.2 tar -xvf nano*`

Vorbereiten und Kompilieren:  
`<br />
$bash3.2 ./configure<br />
$bash3.2 make<br />
$bash3.2 sudo make install<br />
`

Nun sollte nano in `/usr/local/bin` installiert sein. Mit `$bash3.2 export PATH=/usr/local/bin:$PATH`, danach `$bash3.2 nano -V` könnt ihr nun testen, ob die neuste Version installiert worden ist. Um diese dauerhaft zu verwenden, empfiehlt es sich das Original Binary in `/usr/bin` von nano nach nano\_old zu ändern. Außerdem ist es wichtig vorher in der .bash\_profile den PATH einzutragen(`export PATH=/usr/local/bin:$PATH`).

Für das Syntax Highlighting noch folgende .nanorc im Homeverzeichnis erstellen:  
`<br />
## Nanorc files<br />
include "/usr/local/share/nano/nanorc.nanorc"</p>
<p>## C/C++<br />
include "/usr/local/share/nano/c.nanorc"</p>
<p>## Cascading Style Sheets<br />
include "/usr/local/share/nano/css.nanorc"</p>
<p>## Debian files<br />
include "/usr/local/share/nano/debian.nanorc"</p>
<p>## Gentoo files<br />
include "/usr/local/share/nano/gentoo.nanorc"</p>
<p>## HTML<br />
include "/usr/local/share/nano/html.nanorc"</p>
<p>## PHP<br />
include "/usr/local/share/nano/php.nanorc"</p>
<p>## TCL<br />
include "/usr/local/share/nano/tcl.nanorc"</p>
<p>## TeX<br />
include "/usr/local/share/nano/tex.nanorc"</p>
<p>## Quoted emails (under e.g. mutt)<br />
include "/usr/local/share/nano/mutt.nanorc"</p>
<p>## Patch files<br />
include "/usr/local/share/nano/patch.nanorc"</p>
<p>## Manpages<br />
include "/usr/local/share/nano/man.nanorc"</p>
<p>## Groff<br />
include "/usr/local/share/nano/groff.nanorc"</p>
<p>## Perl<br />
include "/usr/local/share/nano/perl.nanorc"</p>
<p>## Python<br />
include "/usr/local/share/nano/python.nanorc"</p>
<p>## Ruby<br />
include "/usr/local/share/nano/ruby.nanorc"</p>
<p>## Java<br />
include "/usr/local/share/nano/java.nanorc"</p>
<p>## AWK<br />
include "/usr/local/share/nano/awk.nanorc"</p>
<p>## Assembler<br />
include "/usr/local/share/nano/asm.nanorc"</p>
<p>## Bourne shell scripts<br />
include "/usr/local/share/nano/sh.nanorc"</p>
<p>## POV-Ray<br />
include "/usr/local/share/nano/pov.nanorc"</p>
<p>## XML-type files<br />
include "/usr/local/share/nano/xml.nanorc"<br />
`  
Das wars auch schon.

 [1]: www.nano-editor.org/
 [2]: http://www.nano-editor.org/download.php