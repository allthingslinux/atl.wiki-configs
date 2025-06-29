#!/bin/bash

# /etc/mediawiki
sudo chown -R atl-wiki:www-data /etc/mediawiki
sudo chmod -R 750 /etc/mediawiki

# /var/www/mediawiki
sudo chown -R atl-wiki:www-data /var/www/atlwiki
sudo chmod -R 750 /var/www/atlwiki

# /var/www/mediawiki/images & /var/www/mediawiki/cache
sudo chmod -R 770 /var/www/atlwiki/images
sudo chmod -R 770 /var/www/atlwiki/cache

# /var/www/mediawiki/sitemap & /var/www/mediawiki/sitemap.xml
sudo chmod -R 755 /var/www/atlwiki/sitemap
sudo chmod 755 /var/www/atlwiki/sitemap.xml
