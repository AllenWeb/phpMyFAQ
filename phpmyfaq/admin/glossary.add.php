<?php
/**
* $Id: glossary.add.php,v 1.1 2005-09-15 20:13:26 thorstenr Exp $
*
* Displays a form to add a glossary item
*
* @author       Thorsten Rinne <thorsten@phpmyfaq.de>
* @since        2005-09-15
* @copyright    (c) 2005 phpMyFAQ Team
* 
* The contents of this file are subject to the Mozilla Public License
* Version 1.1 (the "License"); you may not use this file except in
* compliance with the License. You may obtain a copy of the License at
* http://www.mozilla.org/MPL/
* 
* Software distributed under the License is distributed on an "AS IS"
* basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
* License for the specific language governing rights and limitations
* under the License.
*/

print sprintf('<h2>%s</h2>', $PMF_LANG['ad_menu_glossary']);

if ($permission['addglossary']) {
    
    

} else {
    print $PMF_LANG["err_NotAuth"];
}