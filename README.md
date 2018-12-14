# Live Products

The Live Products extension is for CMS Opencart 3. It allows to display additional information about the product and adds useful features of working with product options.

The extension has been tested with OC 3.0.2.0 and default template, but should work with other OC 3.x and default-compatible templates and can be easily modified for newer OC versions and custom templates.

Please feel free to contact me by email <underr.public@gmail.com> or through support form and comments on Opencart Marketplace (see links below).

## Features
* The equal sign for the product options for prices, points and weight (with ability to hide prefix '=').
  - The equal sign is an exclusive feature that replace the base price (points, weight) of a product.
  - Options that use the equal sign are summed.
* Ability to proportional change that dependents on the ratio of special/discount price to product price for:
  - Option prices.
  - Option prices in points.
  - Reward points.
* Extended product summary:
  - Total price, tax, weight, price in points and reward points can be display considering specified product quantity.
  - Considers product quantity required for the discount.
  - Total weight of the product and specified options.
* Multiple types for display product option info:
  - Old prices (in case of usage discount or special prices).
  - Additional info about option points, weight and availability.
  - Warning message about insufficient quantity of specified options.
  - Custom text for free option.
  - Custom separator for option information.
* Back-end and front-end caching.
* Multilingual front-end - all messages based on the store active language.
* Multilingual back-end - EN/UA/RU.
* Doesn't change original files - OCMOD modification.
* And much more...

## Change log
* v1.1 (2018.12.14):
    * Fixed issue with reward points calculation by quantity.
* v1.0 (2018.11.14):
    * First release.

## How to install
* To begin, make backup, really!
* Open Admin Panel.
* Admin > Extensions > Extensions > Installer > [Upload]: open the extension file.
* Admin > Extensions > Extensions > Modifications > [Refresh].
* Admin > Dashboard > [Developer Settings] > [Refresh].

## How to configure
* Admin > Extensions > Extensions > Modules > [underr] Live Products > [Install].
* Admin > Extensions > Extensions > Modules > [underr] Live Products > [Edit].
    * Set the desired parameters.

## How to uninstall
* Make backup
* Open Admin Panel
* Admin > Extensions > Extensions > Installer > Install History > find the extension file > [Uninstall]
* Admin > Extensions > Extensions > Modifications > [Refresh]
* Admin > Dashboard > [Developer Settings] > [Refresh]

## Live demo
* [Admin Demo](http://plus.ocmod-space.dx.am/admin/index.php?route=extension/module/live_products)
* [Front Demo](http://plus.ocmod-space.dx.am/)

## Links
* [Opencart Marketplace](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35460)
* [underr.space](https://underr.space/notes/projects/project-013.html) - description in russian (coming soon)

## License
* [EULA](https://raw.githubusercontent.com/underr-ua/ocmod3-live-products/master/EULA.txt)
