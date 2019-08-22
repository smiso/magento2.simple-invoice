# Magento 2: Simple Invoice
Add simple invoice Payment Method to Magento 2

## Requirements
Magento 2

## Installation

### Using Composer
    composer require smiso/simple-invoice
	php bin/magento setup:upgrade
	php bin/magento setup:static-content:deploy
	
### Manual Installation
Copy the files to `app/code/SmileSolutions/SimpleInvoice`

	php bin/magento setup:upgrade
	php bin/magento setup:static-content:deploy

## Configuration
Go to `Stores -> Configuration -> Sales -> Payment Methods -> Simple Invoice`
