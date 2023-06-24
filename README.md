Defer Javascripts module for OpenMage (and Magento 1.9)
=============================

Features
---------
- moves all javascript tags just before the `</body>` tag
- removes all HTML comments

Known Issues
------------

The module can't detect scripts that have been commented out, they'll become active again.

Backup!!!
---------
Backup your database before launching the translation process!!!
This module is provided "as is" and I'll not be responsible for any data damage.

Installation
------------

Install via composer (`composer require fballiano/openmage-defer-javascripts`), 
modman (`modman clone https://github.com/fballiano/openmage-defer-javascripts`)
or any other way you like

Support
-------
If you have any issues with this extension, open an issue on GitHub.

Contribution
------------
Any contributions are highly appreciated. The best way to contribute code is to open a
[pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Developer
---------
Fabrizio Balliano  
[http://fabrizioballiano.com](http://fabrizioballiano.com)  
[@fballiano](https://twitter.com/fballiano)

Licence
-------
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)

Copyright
---------
(c) Fabrizio Balliano
