<?php
// For namespace configs: https://www.mediawiki.org/wiki/Manual:$wgNamespaceProtection

// https://www.mediawiki.org/wiki/Manual:$wgAvailableRights
$wgAvailableRights[] = 'template-editing';
$wgAvailableRights[] = 'module-editing';
$wgAvailableRights[] = 'meta-editing';

$wgNamespaceProtection[10] = ['template-editing']; // Template:
$wgNamespaceProtection[828] = ['module-editing']; // Module:
$wgNamespaceProtection[4] = ['meta-editing']; // Atl.wiki:

define("NS_GUIDES", 3000); 
define("NS_GUIDES_TALK", 3001);
$wgExtraNamespaces[NS_GUIDES] = "Guides";
$wgExtraNamespaces[NS_GUIDES_TALK] = "Guides_talk";
