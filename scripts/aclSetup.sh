#!/bin/bash

# /etc/mediawiki
sudo setfacl -R -m g:atl-sysadmins:rwx /etc/mediawiki
sudo setfacl -R -d -m g:atl-sysadmins:rwx /etc/mediawiki

# /etc/mediawiki/secrets
sudo setfacl -b /etc/mediawiki/secrets
sudo setfacl -k /etc/mediawiki/secrets
