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
<div class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) :  ?>
	<div class="td-calendar col-md-3 col-sm-4" itemscope itemtype="http://schema.org/Article">
		<span class="day-td">
          <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_CALENDAR_DAY')); ?>
      	</span>
		<span class="date-td">
          <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_CALENDAR_MONTH_YEAR')); ?>
      	</span>
      	<h4 class="title-td" itemprop="name">
            <a href="<?php echo $item->link; ?>" itemprop="url">			
				<?php echo $item->title; ?>
			</a>
        </h4>
	</div>
  <?php endforeach; ?>
</div>
