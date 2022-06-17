# Magento 2 Browser Tab Messages 
[![Latest Stable Version](https://poser.pugx.org/hissey/module-browser-tabs/v)](https://packagist.org/packages/hissey/module-browser-tabs)
[![Total Downloads](http://poser.pugx.org/hissey/module-browser-tabs/downloads)](https://packagist.org/packages/hissey/module-browser-tabs)
[![License](http://poser.pugx.org/hissey/module-browser-tabs/license)](https://packagist.org/packages/hissey/module-browser-tabs)

Magento 2 Browser Tab Messages provides a quick way to enable messages to be displayed to your customers through their inactive tabs. For example "We miss you!" with a custom timeout.

## Installation
```
composer require hissey/module-browser-tabs
bin/magento setup:upgrade
```

## Usage
To get the browser tab messages to display:
1. Install the module
2. Stores > Config > Hissey > Browser Tab Messages
3. Enable Module
4. Enter your message text
5. Enter your timeout
6. bin/magento cache:flush

Thats it! Your message should now be visible in an inactive tab at your set timeout. 
