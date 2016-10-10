<?php

// no direct access
defined('_JEXEC') or die;

$linksList = json_decode($params->get('links'));
$linksCount = count($linksList->link_title);
?>
<div class="uk-mod-anchor_menu uk-mod-anchor_menu<?php echo $moduleclass_sfx ?>">

	<ul class="uk-anchor_menu-list">
	
		<?php for ($i = 0; $i < $linksCount; $i++){?>
		
			<?php if (($linksList->link_title[$i] != '') && ($linksList->link_link[$i] != '')){ ?>
			<li>
				<a class="uk-anchor_menu-list-link uk-underline" href="<?php echo $linksList->link_link[$i];?>">
					<?php echo $linksList->link_title[$i]; ?>
				</a>
			</li>	
			<?php } ?>
			
		<?php } ?>
	
	</ul>
	
</div>
