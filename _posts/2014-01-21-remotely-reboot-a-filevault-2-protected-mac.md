---
layout: post
title: Remotely reboot a FileVault 2 protected Mac
---
So this is one is pretty neat. 
	
If your Mac is far away(or you are lying in your bed) and you want to restart your Mac, you can just <code>sudo shutdown -r now</code>. </p>

<p>But what if your Mac is FileVault 2 protected and encrypted? Who is typing the password for you into the keyboard?
The answer? Just use <code>sudo fdesetup authrestart</code> and you are good to go!</p>
