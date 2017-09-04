<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
JLoader::register('FieldsHelper', JPATH_ADMINISTRATOR . '/components/com_fields/helpers/fields.php'); 
?>
<div class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) :  ?>
    <?php $jcFields = FieldsHelper::getFields('com_content.article', $item, true); ?>
	<?php
      $article_images 	= json_decode($item->images);
      $article_image 		= '';?>
      <?php if(isset($article_images->image_fulltext) && !empty($article_images->image_fulltext)) {
      $article_image 	= $article_images->image_fulltext;
	}?>
<div class="news-block col-md-4 col-sm-4">
  	<div class="image-block" style="background-image: url('<?php echo $article_image; ?>')"></div>
  	<div class="color-block" style="background-color:<?php echo $jcFields[0]->value; ?>;"></div>
	<div class="content-block"  itemscope itemtype="http://schema.org/Article">
      <div>
       	<h4 class="title-block" itemprop="name">			
            <?php echo $item->title; ?>
        </h4>
		<div class="date-block">
          <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_LC3')); ?>
      	</div>
        <div class="button-block">
          <a href="<?php echo $item->link; ?>" itemprop="url">			
            <?php echo JText::_('BLOCKS_READ_MORE'); ?>
          </a>
        </div>
       </div>
	</div>
</div>
  <?php endforeach; ?>
</div>
