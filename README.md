# MageVersion

This module prints out the current Magento installed version by CLI

## How to use
Install this module through composer:

 `composer require vmasciotta/magento2-cli-version`

then update your Magento installation through the command line:

 `php bin/magento setup:upgrade`

clean your cache:
`php bin/magento cache:clean`

and finally check what version You are using typing:

`php bin/magento info:version`

the module prints out your current Magento2 installation version, for example:

`Magento Community 2.1.5`

