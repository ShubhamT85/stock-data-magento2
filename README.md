# Magento 2(Get stock data of a certain range selected in admin menu)
1. This module will give stock data in terms of range selected in a table manner.
2. Admin menu named **STOCK DATA** is created for choosing certain range of stock of products.
## Basic Flow of the module
- Firstly, after cloning the git and extracting the folder wrap it inside folder **StockData** and again wrap this folder in **Task** so inshort, create your directory as magento-root-directory/app/code/Task/StockData/cloned_directory.
- After that open the magento root directory in terminal and hit the following commands,
  - `sudo php bin/magento module:enable Task_StockData`
  - `sudo php bin/magento setup:upgrade`
  - `sudo php bin/magento setup:di:compile`
  - `sudo php bin/magento setup:static-content:deploy -f`
  - `sudo php bin/magento indexer:reindex` (optional)
  - `sudo php bin/magento cache:flush`
  - `sudo chmod 777 -R var/ pub/ generated/`
- Now, open your web browser and type in the following link to open magento admin (assuming for localhost or else type in https://your-magento-from-ftp/admin) **localhost/magento-root-directory/admin** you will see an admin menu named **STOCK DATA**.
- After that click on the admin menu and you will see five submenus in the admin menu starting from *Stock more than 100 **to** Out of stock*.
- Click on the desired range to be viewed and you will be redirected to an admin page consisting of all products' Name, SKU and Quantity that belong to the range chosen by you displayed in a table manner.

**Note :**
- According to benchmark test done, this feature can fetch a data of 2000 products in about 20 seconds so if you have a base of products more than 10K this will might take sometime to render the results.
- Beware changing the module and vendor name since it can be a bit hectic and will require a keen vision on every file.

### Happy Coding :)


