#!/bin/bash

# /var/www
sudo setfacl -R -m g:atl-sysadmins:rwx /var/www/atlwiki
sudo setfacl -R -d -m g:atl-sysadmins:rwx /var/www/atlwiki

# /var/www/atlwiki/images && /var/www/atlwiki/cache
sudo setfacl -bR /var/www/atlwiki/images
sudo setfacl -bR /var/www/atlwiki/cache
