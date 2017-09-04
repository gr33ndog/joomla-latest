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
	<?php if(isset($article_images->image_intro) && !empty($article_images->image_intro)) {
	$article_image 	= $article_images->image_intro;
}?>
	<div class="news-icons col-md-4" itemscope itemtype="http://schema.org/Article">
      <div class="content-icons">
        <p class="image-icons">
        	<img src="<?php echo $article_image; ?>" alt="" >
        </p>
      	<h4 class="title-icons" itemprop="name">			
			<?php echo $item->title; ?>
        </h4>
      	<p class="intro-icons">
          <a href="<?php echo $item->link; ?>" itemprop="url">
          	<?php echo JHTML::_('string.truncate',(strip_tags ($item->introtext)), 100); ?>
          </a>
      	</p>
      </div>
	</div>
  <?php endforeach; ?>
</div>
