---
layout: post
title: Panic’s “Prompt” und Public Key Authentication
---

<p>Also, da gibt es diese <a href="http://itunes.apple.com/us/app/prompt/id421507115?mt=8" title="Universal App">Universal App</a> namens “Prompt” aus der Entwicklerschmiede <a href="http://www.panic.com/">Panic</a>.<br />
Nichts weiter als ein SSH Client, aber er unterstützt Public Key Authentication. Dazu muss man nur seinen Private Key via iTunes Dateifreigabe auf’s iPhone oder wahlweise auf sein iPad synchronisieren und ihn dann in der App selbst auswählen. Das war’s – denkste. Leider gibt es keine gute Dokumentation über den Vorgang, einen Schritt habe ich nämlich nirgends wo gefunden(im Nachhinein hätte man aber auch selber darauf kommen können..)  </p>

<pre><code>$ cd .ssh
$ cat id_rsa.pub &gt;&gt; authorized_keys
</code></pre>

<p>Einfach seinen Public Key(vom Server) nach authorized_keys schieben und fertig! :D</p>

<p>Manchmal stell’ ich mich aber auch blöde an..</p>
