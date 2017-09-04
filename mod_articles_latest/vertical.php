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
  
    <div class="news-vertical <?php if ($item->featured == 1) : ?><?php echo 'featured'; ?><?php endif; ?>" itemscope="" itemtype="http://schema.org/Article">
    
      <div class="container-vertical col-md-4 col-sm-4 col-xs-4">
      
        <div class="date-vertical">
            <?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_LC3')); ?>
        </div>
        <div class="category-vertical">
            <?php echo $item->category_title; ?>
         </div>
        
      </div>
    
      <div class="content-vertical col-md-6 col-sm-6 col-xs-6">
      
        <h4 class="title-vertical" itemprop="name">
          <a href="<?php echo $item->link; ?>" itemprop="url">			
		  <?php echo $item->title; ?>
          </a>
        </h4>
        
        <p class="intro-vertical">
          <a href="<?php echo $item->link; ?>" itemprop="url">			
          <?php echo JHTML::_('string.truncate',(strip_tags ($item->introtext)), 150); ?>
          </a>
        </p>
        
      </div>
                                       
    </div>
    
  <?php endforeach; ?>
</div>

