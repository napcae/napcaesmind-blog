/*
Title: Remotely reboot a FileVault 2 protected Mac
Author: napcae
Date: 2014/01/21
*/

So this is one is pretty neat. 
If your Mac is far away(or you are lying in your bed) and you want to restart your Mac, you can just `sudo shutdown -r now`. 

But what if your Mac is FileVault 2 protected and encrypted? Who is typing the password for you into the keyboard?
The answer? Just use `sudo fdesetup authrestart` and you are good to go!