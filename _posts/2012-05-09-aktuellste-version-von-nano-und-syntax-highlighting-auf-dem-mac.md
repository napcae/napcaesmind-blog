---
layout: post
title: Aktuellste Version von nano und Syntax Highlighting auf dem Mac
---

<p>Da ich relativ oft auf der Kommandozeile arbeite, aber oft nur kleine Textabschnitte bearbeite benutze ich bevorzugt <a href="http://www.nano-editor.org/">nano.</a></p>

<p>Auf Mac OS X ist aber eine alte Binary(2.0.6) installiert. Um die neuste Version 2.2.6 mit Syntax Highlighting zu bekommen, kommt man aber nicht drum herum entweder MacPorts zu installieren oder sich nano selbst zu kompilieren.</p>

<p>Ladet euch also die aktuellste Source von der <a href="http://www.nano-editor.org/download.php">Website</a> runter und entpackt sie:</p>

<p><code>$bash3.2 tar -xvf nano*</code></p>

<p>Vorbereiten und Kompilieren:<br />
<code>&lt;br /&gt;
$bash3.2 ./configure&lt;br /&gt;
$bash3.2 make&lt;br /&gt;
$bash3.2 sudo make install&lt;br /&gt;</code></p>

<p>Nun sollte nano in <code>/usr/local/bin</code> installiert sein. Mit <code>$bash3.2 export PATH=/usr/local/bin:$PATH</code>, danach <code>$bash3.2 nano -V</code> könnt ihr nun testen, ob die neuste Version installiert worden ist. <br>Um diese dauerhaft zu verwenden, empfiehlt es sich das Original Binary in <code>/usr/bin</code> von nano nach nano&#95;old zu ändern.<br> Außerdem ist es wichtig vorher in der .bash&#95;profile den PATH einzutragen(<code>export PATH=/usr/local/bin:$PATH</code>).</p>

<p>Für das Syntax Highlighting noch folgende .nanorc im Homeverzeichnis erstellen:  </p>

<pre><code>## Nanorc files
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
</code></pre>

<p>Das wars auch schon.</p>
