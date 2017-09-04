<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;


?>
<p class="latestnews<?php echo $moduleclass_sfx; ?>">
	<?php foreach ($list as $item) :  ?>
      <span class="infos-inline"><?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_LC3')); ?>-<?php echo $item->category_title; ?></span>
      <span class="title-inline"><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?> · </a></span>
    <?php endforeach; ?>
</p>
