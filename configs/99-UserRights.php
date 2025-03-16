<?php
// For UserRights: https://www.mediawiki.org/wiki/Manual:User_rights
// bureaucrat, checkuser, supress, push-subscription-manager, autoconfirmed are useless

// * ~ Everyone 
$wgGroupPermissions['*']['createaccount'] = true; 
$wgGroupPermissions['*']['edit'] = false;

// user ~ All registered users
$wgGroupPermissions['user']['edit'] = true;  
$wgGroupPermissions['user']['writeapi'] = true; # For visual editor
$wgGroupPermissions['user']['move'] = false;
$wgGroupPermissions['user']['move-subpages'] = false;
$wgGroupPermissions['user']['move-categorypages'] = false;
$wgGroupPermissions['user']['move-rootuserpages'] = false;     
$wgGroupPermissions['user']['movefile'] = false;

// automoderated ~ Trusted Users (Allows bypassing edit moderation)   
$wgGroupPermissions['automoderated']['move'] = true;
$wgGroupPermissions['automoderated']['move-subpages'] = true;
$wgGroupPermissions['automoderated']['move-categorypages'] = true;
$wgGroupPermissions['automoderated']['move-rootuserpages'] = true;
$wgGroupPermissions['automoderated']['autoconfirmed'] = true;
$wgGroupPermissions['automoderated']['editsemiprotected'] = true;
$wgGroupPermissions['automoderated']['movefile'] = true;
$wgGroupPermissions['automoderated']['skip-moderation'] = true;
$wgGroupPermissions['automoderated']['skip-move-moderation'] = false;

// moderator ~ Wiki Only Moderators (not used yet)
$wgGroupPermissions['moderator']['move'] = true;
$wgGroupPermissions['moderator']['move-subpages'] = true;
$wgGroupPermissions['moderator']['move-categorypages'] = true;
$wgGroupPermissions['moderator']['move-rootuserpages'] = true;
$wgGroupPermissions['moderator']['autoconfirmed'] = true;
$wgGroupPermissions['moderator']['editsemiprotected'] = true;
$wgGroupPermissions['moderator']['movefile'] = true;
$wgGroupPermissions['moderator']['moderation'] = true;
$wgGroupPermissions['moderator']['block'] = true;
$wgGroupPermissions['moderator']['rollback'] = true;
$wgGroupPermissions['moderator']['skip-moderation'] = true;
$wgGroupPermissions['moderator']['skip-move-moderation'] = true;

// autoconfirmed ~ Useless autogiven role rn
$wgAutoConfirmAge = 604800;
$wgAutoConfirmCount = 10;
$wgGroupPermissions['autoconfirmed']['autoconfirmed'] = false;
$wgGroupPermissions['autoconfirmed']['editsemiprotected'] = false;

// staff ~ For all ATL Staff
$wgGroupPermissions['staff']['skip-moderation'] = true;
$wgGroupPermissions['staff']['skip-move-moderation'] = true;
$wgGroupPermissions['staff']['moderation'] = true;
$wgGroupPermissions['staff']['block'] = true;
$wgGroupPermissions['staff']['rollback'] = true;
$wgGroupPermissions['staff']['deleterevision'] = true;
$wgGroupPermissions['staff']['move'] = true;
$wgGroupPermissions['staff']['move-subpages'] = true;
$wgGroupPermissions['staff']['move-categorypages'] = true;
$wgGroupPermissions['staff']['move-rootuserpages'] = true;  
$wgGroupPermissions['staff']['autoconfirmed'] = true;
$wgGroupPermissions['staff']['editsemiprotected'] = true;
$wgGroupPermissions['staff']['delete'] = true;
$wgGroupPermissions['staff']['deleterevision'] = true;
$wgAddGroups['staff'] = [ 'automoderated', 'moderator' ];  
$wgRemoveGroups['staff'] = [ 'automoderated', 'moderator' ];  

// interface-admin ~ Grants interface edit permissions including templates
$wgGroupPermissions['interface-admin']['template-editing'] = true;
$wgGroupPermissions['interface-admin']['module-editing'] = true;

// sysop ~ Only for Wiki Admins, gives ALL permissions
$wgGroupPermissions['sysop']['checkuser'] = true;
$wgGroupPermissions['sysop']['checkuser-log'] = true;
$wgGroupPermissions['sysop']['investigate'] = true;
$wgGroupPermissions['sysop']['checkuser-temporary-account'] = true;
$wgGroupPermissions['sysop']['userrights'] = true;
$wgGroupPermissions['sysop']['renameuser'] = true;
$wgGroupPermissions['sysop']['userrights-interwiki'] = true;
$wgGroupPermissions['sysop']['editusercss'] = true;
$wgGroupPermissions['sysop']['edituserjson'] = true;
$wgGroupPermissions['sysop']['edituserjs'] = true;
$wgGroupPermissions['sysop']['editsitecss'] = true;
$wgGroupPermissions['sysop']['editsitejson'] = true;
$wgGroupPermissions['sysop']['editsitejs'] = true;
$wgGroupPermissions['sysop']['editinterface'] = true;
$wgGroupPermissions['sysop']['template-editing'] = true;
$wgGroupPermissions['sysop']['module-editing'] = true;
$wgGroupPermissions['sysop']['meta-editing'] = true;
$wgGroupPermissions['sysop']['hideuser'] = true;
$wgGroupPermissions['sysop']['deletelogentry'] = true;
$wgGroupPermissions['sysop']['deleterevision'] = true;
$wgGroupPermissions['sysop']['suppressionlog'] = true;
$wgGroupPermissions['sysop']['viewsuppressed'] = true;
$wgGroupPermissions['sysop']['suppressrevision'] = true;
$wgGroupPermissions['sysop']['usermerge'] = true;
$wgGroupPermissions['sysop']['import'] = false;
