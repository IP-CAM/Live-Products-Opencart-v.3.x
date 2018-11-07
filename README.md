# Live Options+

The Live Options+ extension is for CMS Opencart 3. It extremly extends standart OpenCart features for the product options.

The extension has been tested with OC 3.0.2.0 and default template, but should work with other OC 3.x and default-compatable templates and can be easy modified for custom templates.

## Features
* The equal sign for the product options for prices, points and weight (with ability to hide prefix '=').
  - The equal sign is an exclusive feature that replace the base price (points, weight) of a product, 
  - Options that use the equal sign are summed
* Ability to proportinal change that dependents on the ratio of special/discount price to product price for:
  - Option prices.
  - Option prices in points.
  - Reward points.
* Multiple view types for displaying summary product information:
  - Full price (Product Price + Option Price).
  - Full price (tax, price in points, reward points) based on the specified quantity.
  - Taking into account the quantity required for the discount.
  - Total weight of the product and specified options.
* Multiple view types for displaying product option:
  - Default - option orefix + option price.
  - Price, points and weight based on the specified quantity.
  - Old prices in case of discount or special prices.
  - Prices in reward points.
  - Weight.
  - Quantity in stock.
  - Alert message for options that are not available in desired quantity.
  - Tooltips for information about option points, weight and availability.
  - Custom text for free option.
  - Custom separator for option information
* Ajax with requests caching.
* Custom id's for html containers for prices, old prices, options, points etc.
* Multilangual frontend - all messages based on the store language.
* Multilangual backend - EN/UA/RU.
* Does not change original files - OCMOD modification.

## Change log
* v1.0 (2018.11.06):
    * First release.

## How to install
* To begin, make backup, really!
* Open Admin Panel.
* Admin > Extensions > Extensions > Installer > [Upload]: open the extension file.
* Admin > Extensions > Extensions > Modifications > [Refresh].
* Admin > Dashboard > [Developer Settings] > [Refresh].

## How to configure
* Admin > Extensions > Extensions > Modules > [underr] Live Options+ > [Install].
* Admin > Extensions > Extensions > Modules > [underr] Live Options+ > [Edit].
    * Set the desired parameters.

## How to uninstall
* Make backup
* Open Admin Panel
* Admin > Extensions > Extensions > Installer > Install History > find the extension file > [Uninstall]
* Admin > Extensions > Extensions > Modifications > [Refresh]
* Admin > Dashboard > [Developer Settings] > [Refresh]

## Live demo
* [Admin Demo](http://051c5f20.freevar.com/www/plus/admin/index.php?route=extension/module/live_options)
* [Front Demo](http://051c5f20.freevar.com/www/plus)

## Links
* [Opencart Marketplace](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35460)
* [underr.space](https://underr.space/notes/projects/project-013.html)

## License
* [EULA](https://raw.githubusercontent.com/underr-ua/ocmod3-product-options-plus/master/EULA.txt)
