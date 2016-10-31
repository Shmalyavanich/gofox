<?php
/**
 * @package   com_zoo
 * @author    YOOtheme http://www.yootheme.com
 * @copyright Copyright (C) YOOtheme GmbH
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// init vars
$params = $item->getParams('site');

/* set media alignment */
$align = ($this->checkPosition('media')) ? $params->get('template.teaseritem_media_alignment') : '';

?>

<?php if ($align == "above") : ?>
	<div class="uk-text-center">
		<?php echo $this->renderPosition('media', array('style' => 'uikit_block')); ?>
	</div>
<?php endif; ?>

<?php if ($this->checkPosition('title')) : ?>
<div class="uk-h5 uk-margin-top uk-text-bold">
	<?php echo $this->renderPosition('title'); ?>
</div>
<?php endif; ?>

<?php if ($this->checkPosition('subtitle')) : ?>
<div class="uk-text-muted uk-margin-bottom uk-text-small">
	<?php echo $this->renderPosition('subtitle'); ?>
</div>
<?php endif; ?>

<?php if ($align == "top") : ?>
	<?php echo $this->renderPosition('media', array('style' => 'uikit_block')); ?>
<?php endif; ?>

<?php if ($align == "left" || $align == "right") : ?>
<div class="uk-align-<?php echo $align; ?>@m">
	<?php echo $this->renderPosition('media'); ?>
</div>
<?php endif; ?>

<?php if ($this->checkPosition('content')) : ?>
	<?php echo $this->renderPosition('content'); ?>
<?php endif; ?>

<?php if ($this->checkPosition('meta')) : ?>
<p class="uk-article-meta">
    <?php echo $this->renderPosition('meta'); ?>
</p>
<?php endif; ?>

<?php if ($align == "bottom") : ?>
	<?php echo $this->renderPosition('media', array('style' => 'uikit_block')); ?>
<?php endif; ?>

<?php if ($this->checkPosition('links')) : ?>
<ul class="uk-subnav uk-subnav-divider">
	<?php echo $this->renderPosition('links', array('style' => 'uikit_subnav')); ?>
</ul>
<?php endif;
