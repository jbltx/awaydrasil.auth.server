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
> - The official forum for **MLC** is **Minecraft.fr** (see [<i class="icon-share"></i> the forum post here](http://minecraft.fr/forum/index.php?threads/07-2014-creation-de-launcher-1-6-2-%C3%A0-1-7-9-mlc.118972/)).
> - You have to use a SSL certification for the security of your server, and for the security of personnal users informations. (https)

#### <i class="icon-download"></i><i class="icon-upload"></i> JSON content

Like the original Mojang authentication server, AwayDrasil use JSON content inputs and outputs.

#### <i class="icon-file"></i> .htaccess already configured

The .htaccess file is ready to go, activating rewrite PHP module for the directory and linking 404 error page. So you have to install the application on a PHP5 server including the rewrite_url module.

#### <i class="icon-folder-open"></i> All in one directory

The application is really simple, so there's just one file to edit, **config.php**.

#### <i class="icon-pencil"></i> One application, two differents ways to use it

The application permit you to use a **SQL database**, or a **whitelist file** verification for the authentication.



----------


Installation
---------------


#### <i class="icon-download"></i> Download all the source files

You can do this by using this [link](https://github.com/jbltx/awaydrasil.auth.server/archive/master.zip) or by create a git repo on your machine.

#### <i class="icon-folder"></i> Extract files

You just need files located in http/auth.awaydrasil.net/

#### <i class="icon-pencil"></i> Edit **config.php**

Open config.php in notepad or other text editor.
First, you need to choose the way you will use the server.
To use it with whitelist verification, enter the following :
```
$systemUsed = 'whitelist';
```
If you want to use a database, enter that :
```
$systemUsed = 'database';
```
After that, you need to enter the URL adress of your server, and don't forget the last "/" character.
```
$cfg_hostname = 'http://localhost/auth.awaydrasil.net/';
```
Then enter sql database informations (if you use it, of course)
```
$cfg_db_host = 'localhost'; //sql server URL
$cfg_db_username = 'root'; //username
$cfg_db_password = ''; //password
$cfg_db_database = 'remote'; //name of the database chosen to make the verification
```
If you want to use the whitelist method, you have to enter the adress where we can find this file
```
$filename = 'http://localhost/remote/whitelist.txt';
```
> **TIPS :** If you want to store the whitelist in a inaccessible dir by web, it's possible using certain PHP functions :
```
$current_dir = dirname(__FILE__); // return the path of the current php file on your server like /var/www/auth_dir
$var_dir = str_replace("/www/auth_dir", "", $current); // return /var
$whitelist_file = $var_dir."/craftbukkit_server/whitelist.txt"; // return /var/craftbukkit_server/whitelist.txt
//So finally you can use this for example in config.php :
$filename = str_replace("/www/auth_dir", "", dirname(__FILE__))."/craftbukkit_server/whitelist.txt";
//You can also use a succession of dirname() functions to go up in arborescence :
$filename = dirname(dirname(dirname(__FILE__)))."/craftbukkit_server/whitelist.txt";
//If you already know the absolute path of the whitelist file, enter the absolute path :
$filename = "/var/craftbukkit_server/whitelist.txt";
```

----------


Finish
-----------

You just just have to upload all on your server. You can test it by using web applications like [POSTMAN](http://www.getpostman.com/) to create HTTP JSON request...
```
{"username":"YOUR_MINECRAFT_USERNAME"}
```
