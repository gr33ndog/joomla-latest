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
  <?php
	$article_images 	= json_decode($item->images);
	$article_image 		= '';?>
	<?php if(isset($article_images->image_fulltext) && !empty($article_images->image_fulltext)) {
	$article_image 	= $article_images->image_fulltext;
}?>
	<div class="news-preview col-md-4" itemscope itemtype="http://schema.org/Article">
      <div class="image-preview" style="background-image: url('<?php echo $article_image; ?>')">
		<span class="day-preview">
          <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_CALENDAR_DAY')); ?>
      	</span>
		<span class="date-preview">
          <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_CALENDAR_MONTH_YEAR')); ?>
      	</span>
      
      	<h4 class="title-preview" itemprop="name">
            <a href="<?php echo $item->link; ?>" itemprop="url">			
				<?php echo $item->title; ?>
			</a>
        </h4>
      	<span class="category-preview">
          <?php echo $item->category_title; ?>
      	</span>
      </div>
	</div>
  <?php endforeach; ?>
</div>
