/*
Title: Aktuellste Version von nano und Syntax Highlighting auf dem Mac
Author: napcae
Date: 2012/05/09
*/

Da ich relativ oft auf der Kommandozeile arbeite, aber oft nur kleine Textabschnitte bearbeite benutze ich bevorzugt [nano.][1]

Auf Mac OS X ist aber eine alte Binary(2.0.6) installiert. Um die neuste Version 2.2.6 mit Syntax Highlighting zu bekommen, kommt man aber nicht drum herum entweder MacPorts zu installieren oder sich nano selbst zu kompilieren.

  
Ladet euch also die aktuellste Source von der [Website][2] runter und entpackt sie:

`$bash3.2 tar -xvf nano*`

Vorbereiten und Kompilieren:  
`<br />
$bash3.2 ./configure<br />
$bash3.2 make<br />
$bash3.2 sudo make install<br />
`

Nun sollte nano in `/usr/local/bin` installiert sein. Mit `$bash3.2 export PATH=/usr/local/bin:$PATH`, danach `$bash3.2 nano -V` könnt ihr nun testen, ob die neuste Version installiert worden ist. <br>Um diese dauerhaft zu verwenden, empfiehlt es sich das Original Binary in `/usr/bin` von nano nach nano\_old zu ändern.<br> Außerdem ist es wichtig vorher in der .bash\_profile den PATH einzutragen(`export PATH=/usr/local/bin:$PATH`).

Für das Syntax Highlighting noch folgende .nanorc im Homeverzeichnis erstellen:  

    ## Nanorc files
    include "/usr/local/share/nano/nanorc.nanorc"
    ## C/C++
    include "/usr/local/share/nano/c.nanorc"
    ## Cascading Style Sheets
    include "/usr/local/share/nano/css.nanorc"
    ## Debian files
    include "/usr/local/share/nano/debian.nanorc"
    ## Gentoo files
    include "/usr/local/share/nano/gentoo.nanorc"
    ## HTML
    include "/usr/local/share/nano/html.nanorc"
    ## PHP
    include "/usr/local/share/nano/php.nanorc"
    ## TCL
    include "/usr/local/share/nano/tcl.nanorc"
    ## TeX
    include "/usr/local/share/nano/tex.nanorc"
    ## Quoted emails (under e.g. mutt)
    include "/usr/local/share/nano/mutt.nanorc"
    ## Patch files
    include "/usr/local/share/nano/patch.nanorc"
    ## Manpages
    include "/usr/local/share/nano/man.nanorc"
    ## Groff
    include "/usr/local/share/nano/groff.nanorc"
    ## Perl
    include "/usr/local/share/nano/perl.nanorc"
    ## Python
    include "/usr/local/share/nano/python.nanorc"
    ## Ruby
    include "/usr/local/share/nano/ruby.nanorc"
    ## Java
    include "/usr/local/share/nano/java.nanorc"
    ## AWK
    include "/usr/local/share/nano/awk.nanorc"
    ## Assembler
    include "/usr/local/share/nano/asm.nanorc"
    ## Bourne shell scripts
    include "/usr/local/share/nano/sh.nanorc"
    ## POV-Ray
    include "/usr/local/share/nano/pov.nanorc"
    ## XML-type files
    include "/usr/local/share/nano/xml.nanorc"
      
      
      
Das wars auch schon.

 [1]: http://www.nano-editor.org/
 [2]: http://www.nano-editor.org/download.php