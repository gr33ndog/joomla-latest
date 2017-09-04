<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$document = JFactory::getDocument();
$document->addStyleSheet('https://fonts.googleapis.com/css?family=Roboto+Slab');

?>
<div class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) :  ?>
  <?php
	$article_images 	= json_decode($item->images);
	$article_image 		= '';?>
	<?php if(isset($article_images->image_fulltext) && !empty($article_images->image_fulltext)) {
	$article_image 	= $article_images->image_fulltext;
}?>
	<div class="news-shift col-md-6" itemscope itemtype="http://schema.org/Article">
      <div class="box-shift image-shift" style="background-image: url('<?php echo $article_image; ?>')">
      </div>
      <div class="box-shift color-shift">
      </div>  
      <div class="box-shift date-shift">
		<span class="day-shift">
          <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_CALENDAR_DAY')); ?>
      	</span>
		<span class="my-shift">
          <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_CALENDAR_MONTH_YEAR')); ?>
      	</span>
      </div>
      
      <div class="box-shift title-shift">
      	<h4 itemprop="name">
            <a href="<?php echo $item->link; ?>" itemprop="url">			
				<?php echo $item->title; ?>
			</a>
        </h4>
      </div>
      <div class="box-shift text-shift">
        <p class="introtext-shift">
          <a href="<?php echo $item->link; ?>" itemprop="url">
           <?php echo JHTML::_('string.truncate',(strip_tags ($item->introtext)), 150); ?>
          </a>
        </p>
      </div>
	</div>
  <?php endforeach; ?>
</div>
