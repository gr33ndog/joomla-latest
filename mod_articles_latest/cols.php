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
<?php $count = 0; ?>
<?php foreach ($list as $item) :  ?>
	<?php
      $article_images 	= json_decode($item->images);
      $article_image 		= '';?>
      <?php if(isset($article_images->image_fulltext) && !empty($article_images->image_fulltext)) {
      $article_image 	= $article_images->image_fulltext;
    }?>
  <?php $count++; ?>
	<div class="news-cols col-md-3 col-sm-4 <?php echo $count; ?>"  itemscope itemtype="http://schema.org/Article">
		<p class="day-cols">
            <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_CALENDAR_DAY')); ?>
      	</p>
        <p class="date-cols">
          <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_CALENDAR_MONTH_YEAR')); ?>
      	</p>
      	<h4 class="title-cols" itemprop="name">
            <a href="<?php echo $item->link; ?>" itemprop="url">			
				<?php echo $item->title; ?>
			</a>
        </h4>
      	<p class="introtext-cols">
          	<a href="<?php echo $item->link; ?>" itemprop="url">
                <?php if($count%2 == 1): ?>
					<?php $nbcar = 300; ?>
        		<?php else: ?>
					<?php $nbcar = 500; ?>
                <?php endif ?>
              <?php echo JHTML::_('string.truncate',(strip_tags ($item->introtext)), $nbcar); ?>
          	</a>
		</p>

        <p class="image-cols">
        	<img src="<?php echo $article_image; ?>" alt="" >
        </p>
	</div>
  <?php endforeach; ?>
</div>
