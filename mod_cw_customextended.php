<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the helper class
require_once __DIR__ . '/helper.php';

$helper = new ModCwCustomextendedHelper($params);
$text = $params->get('text');

// Prepare content if that is selected
if ($params->def('prepare_content', 1))
{
    JPluginHelper::importPlugin('content');
    $text = JHtml::_('content.prepare', $text, '', 'mod_cw_customextended.content');
}

// Get the module class suffix
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_cw_customextended', $params->get('layout', 'default'));
