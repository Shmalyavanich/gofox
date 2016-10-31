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
$i       = 0;
$columns = array();
$column  = 0;
$row     = 0;
$rows    = ceil(count($this->items) / $this->params->get('template.items_cols', 1));

// create columns
foreach ($this->items as $item) {

	if ($this->params->get('template.items_order')) {
		// order down
		if ($row >= $rows) {
			$column++;
			$row  = 0;
			$rows = ceil((count($this->items) - $i) / ($this->params->get('template.items_cols', 1) - $column));
		}
		$row++;
		$i++;
	} else {
		// order across
		$column = $i++ % $this->params->get('template.items_cols', 1);
	}

	if (!isset($columns[$column])) {
		$columns[$column] = '';
	}

	$columns[$column] .= $this->partial('item', compact('item'));
}

// render columns
$count = count($columns);
if ($count) {
	
	if ($count > 1) {
		
		echo '<div class="uk-grid" uk-grid>';
		for ($j = 0; $j < $count; $j++) {
			echo '<div class="uk-width-large-1-'.$count.'">'.$columns[$j].'</div>';
		}
		echo '</div>';
		
	} elseif ($count == 1) {
		
		echo '<div class="uk-grid" uk-grid>';
		for ($j = 0; $j < $count; $j++) {
			echo $columns[$j];
		}
		echo '</div>';
		
	}
}

// render pagination
echo $this->partial('pagination');
