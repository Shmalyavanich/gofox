<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die;

?>
<div id="blog_latest" class="uk-blog_latest">
	<div class="uk-blog_latest-title uk-h1 uk-text-center uk-text-bold uk-text-uppercase">
		<?php echo JText::_('TPL_BLOG_LATEST_TITLE');?>
	</div>

	<div class="uk-grid">
	<?php foreach ($list as $item) : ?>
		<div class="uk-width-1-3">
			<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
		</div>
	<?php endforeach; ?>
	</div>
</div>