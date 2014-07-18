**awaydrasil.auth.server**
======================


#### Secondary Authentication Server for Minecraft Server Administrators

----------


Informations
---------

**AwayDrasil** is a server-side application which permit you to check if **Minecraft** users could have access to your private game server.

> **IMPORTANT :**
> 
> - **AwayDrasil** only work using **MineLauncherCreator** application, which will create your own custom launcher.
> - If you don't want to use **MineLauncherCreator**, you have to find the same launcher source-code used by the app by yourself.
> - The official forum for **MLC** is **Minecraft.fr** (see [<i class="icon-share"></i> the forum post here](#synchronization)).
> - You have to use a SSL certification for the security of your server, and for the security of personnal users informations. (https)

#### <i class="icon-download"></i><i class="icon-upload"></i> JSON content

Like the original Mojang authentication server, AwayDrasil use JSON content inputs and outputs.

#### <i class="icon-file"></i> .htaccess already configured

The .htaccess file is ready to go, activating rewrite PHP module for the directory and linking 404 error page. So you have to install the application on a PHP5 server including the rewrite_url module.

#### <i class="icon-folder-open"></i> All in one directory

The application is really simple, so there's just one file to edit, **config.php**.

#### <i class="icon-pencil"></i> One application, two differents ways to use it

The application permit you to use a **SQL database**, or a **whitelist file** verification for the authentication.

