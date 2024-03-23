Defer Javascripts module for OpenMage/Magento1
=============================

<table><tr><td align=center>
<strong>If you find my work valuable, please consider sponsoring</strong><br />
<a href="https://github.com/sponsors/fballiano" target=_blank title="Sponsor me on GitHub"><img src="https://img.shields.io/badge/sponsor-30363D?style=for-the-badge&logo=GitHub-Sponsors&logoColor=#white" alt="Sponsor me on GitHub" /></a>
<a href="https://www.buymeacoffee.com/fballiano" target=_blank title="Buy me a coffee"><img src="https://img.shields.io/badge/Buy_Me_A_Coffee-FFDD00?style=for-the-badge&logo=buy-me-a-coffee&logoColor=black" alt="Buy me a coffee" /></a>
<a href="https://www.paypal.com/paypalme/fabrizioballiano" target=_blank title="Donate via PayPal"><img src="https://img.shields.io/badge/PayPal-00457C?style=for-the-badge&logo=paypal&logoColor=white" alt="Donate via PayPal" /></a>
</td></tr></table>

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
