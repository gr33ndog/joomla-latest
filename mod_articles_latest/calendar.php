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
	<div class="news-calendar col-md-4" itemscope itemtype="http://schema.org/Article">
      
      	<span class="category-calendar">
          <?php echo $item->category_title; ?>
      	</span>
      
		<span class="day-calendar">
          <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_CALENDAR_DAY')); ?>
      	</span>
      
		<span class="date-calendar">
          <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_CALENDAR_MONTH_YEAR')); ?>
      	</span>
      
      	<h4 class="title-calendar" itemprop="name">
            <a href="<?php echo $item->link; ?>" itemprop="url">			
				<?php echo $item->title; ?>
			</a>
        </h4>
		<p class="introtext-calendar">
          	<a href="<?php echo $item->link; ?>" itemprop="url">
				<?php echo JHTML::_('string.truncate',(strip_tags ($item->introtext)), 150); ?>
          	</a>
		</p>
	</div>
  <?php endforeach; ?>
</div>
