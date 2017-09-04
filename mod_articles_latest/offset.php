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
	<div class="news-offset col-md-3 col-xs-8" itemscope itemtype="http://schema.org/Article">
        <span class="category-offset">
          <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_LC3')); ?>
      	</span>    
      	<h4 class="title-offset" itemprop="name">
            <a href="<?php echo $item->link; ?>" itemprop="url">			
				<?php echo $item->title; ?>
			</a>
        </h4>
		<p class="introtext-offset">
          	<a href="<?php echo $item->link; ?>" itemprop="url">
				<?php echo JHTML::_('string.truncate',(strip_tags ($item->introtext)), 150); ?>
          	</a>
		</p>
	</div>
  <?php endforeach; ?>
</div>
