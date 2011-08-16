<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Breadcrumbs
 *
 * @author Kieran Graham
 * @author Ben Weller
 */
?>
<?php $c = count($breadcrumbs) ?>
<ul id="breadcrumbs">
<?php if ($c > ($conf['min_depth']-1)) : ?>
<?php foreach ($breadcrumbs as $k=>$crumb) : ?>
<?php if ($crumb->get_url() !== NULL AND count($breadcrumbs > 1)) :  ?>
	<li> 
        <a href="<?php echo $crumb->get_url()?>"><?php echo $crumb->get_title()?></a> 
        <?php //if ($k < $c-1 || $k === $c && $conf['last'] == TRUE) { ?>
        <?php if($k+1 !== $c || $conf['last'] == TRUE){ ?>
        <span class="sep"><?php echo $conf['sep']; ?></span>
        <?php } ?>
    </li>
<?php else : ?>
    <li><?php echo $crumb->get_title()?></li>
<?php endif; ?>
<?php //$c-- ?>
<?php endforeach; ?>
<?php endif; ?>
</ul>
