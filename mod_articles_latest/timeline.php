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
  <?php $countlist = 0; ?>
  
<?php foreach ($list as $item) :  ?>

	<div class="news-timeline <?php echo (++$countlist%2 ? "odd" : "even"); ?>" itemscope itemtype="http://schema.org/Article" >
      
      <div class="date-timeline col-md-6 col-sm-6 col-xs-6">
        <div class="container-timeline">
        <span class="category-timeline">
          <?php echo $item->category_title; ?>
      	</span>
		<span class="day-timeline">
          <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_CALENDAR_DAY')); ?>
      	</span>
		<span class="month-year-timeline">
          <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_CALENDAR_MONTH_YEAR')); ?>
      	</span>
        </div>
      </div>
                                         
      <div class="content-timeline col-md-6 col-sm-6 col-xs-6">
      	<h4 class="title-timeline" itemprop="name">
            <a href="<?php echo $item->link; ?>" itemprop="url">			
				<?php echo $item->title; ?>
			</a>
        </h4>
      </div>
                                                               
	</div>
  <?php endforeach; ?>
</div>
