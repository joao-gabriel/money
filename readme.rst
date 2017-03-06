###################
What is this?
###################

This is a simple work-in-progress money management web-app done by myself to practice some Codeingiter.

*******************
Release Information
*******************

ATTENTION:
I needed to make a fix on Codeigniter in order to work with `Grocery CRUD <http://www.grocerycrud.com/>`_.
It seems it will be fixed on next release. I'm using 3.1.3.
Here's the fix:
https://github.com/bcit-ci/CodeIgniter/pull/4975/commits/b9ac1a1c268dd6590bb8fb283f45326ce3e0c919

I also needed to make changes to application/.htaccess and copy it to the project root directory in order to work without the "index.php" in the URLs.
I erased all content from the file and put:
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /money
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
</IfModule>

I used this tool to create migration from the database I've created by hand:
https://github.com/liaan/codeigniter_migration_base_generation

So all you have to do to create the database is run codeigniter migration normally.
If you don't know how to do it, this is a very good guide:
http://developer-paradize.blogspot.com.br/2015/04/how-to-implement-database-migrations.html

**************************
TODO
**************************

-  Interface Improvements
-  Graph screen showing entries by categories and tags
-  Login to protect data and allow more than one user per installation


*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.

And then copy the files from this repository to the same folder, overwriting files if asked.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community IRC <https://webchat.freenode.net/?channels=%23codeigniter>`_
-  `Grocery CRUD <http://www.grocerycrud.com/>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.