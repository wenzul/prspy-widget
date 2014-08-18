prspy-widget
============
Website widget to display clan members currently playing on Project Reality servers.

Usage
============
The file serverdata.php retrieves http://www.realitymod.com/prspy/json/serverdata.json?#time()# and deliver it from the same domain to avoid blocking messages (unsafe script) by different browsers.

Standalone Version
------------
Put the prspy folder in the root directory of your site and copy the sections in index.php into your template page.

Joomla Module
------------
Copy *mod_prspy* into the modules folder of your Joomla! installation.
You can install/acitvate the module in the administration backend.
You can define the clantag to be filtered and a refresh interval via backend.
Tested with Joomla!-Version 2.5.24.

Example
============
![PRSpy Widget Example](preview.png?raw=true "PRSpy Widget Example")

Links
============
Realitymod.com forum thread (Server administrators):
http://www.realitymod.com/forum/f109-pr-bf2-sa-private-forums/105484-clan-members-currently-playing-prspy-2.html

Contributors
============
Original Concept: [3dAC] blip2  
Joomla Module and Flags/Scores: [KSK] wenzul
