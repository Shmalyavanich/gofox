<?php
/**
 * @package   ZOO Item
 * @author    YOOtheme http://www.yootheme.com
 * @copyright Copyright (C) YOOtheme GmbH
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

$media_position = $params->get('media_position', 'top');

?>

<div class="layout-uikit uk-margin-top">

	<?php if (($media_position == 'top' || $media_position == 'left' || $media_position == 'right') && $this->checkPosition('media')) : ?>
	<div class="uk-align-<?php echo in_array($media_position, array('left', 'right')) ? 'medium-' . $media_position : 'center'; ?> uk-margin-bottom-remove"><?php echo $this->renderPosition('media'); ?></div>
	<?php endif; ?>

	<div class="uk-nbfc">

	<?php if ($this->checkPosition('title')) : ?>
	<div class="uk-h5 uk-margin-top uk-text-bold"><?php echo $this->renderPosition('title'); ?></div>
	<?php endif; ?>
	
	<?php if ($this->checkPosition('subtitle')) : ?>
	<div class="uk-text-muted uk-margin-large-bottom uk-text-small"><?php echo $this->renderPosition('subtitle'); ?></div>
	<?php endif; ?>

	<?php if (($media_position == 'middle') && $this->checkPosition('media')) : ?>
	<div class="uk-thumbnail uk-margin-bottom-remove"><?php echo $this->renderPosition('media'); ?></div>
	<?php endif; ?>

	<?php if (($media_position == 'bottom') && $this->checkPosition('media')) : ?>
	<div class="uk-thumbnail uk-margin-bottom-remove"><?php echo $this->renderPosition('media'); ?></div>
	<?php endif; ?>

	</div>

</div>