<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>

<h1><a href="<?php get_home_url(); ?>"><?php echo get_bloginfo("name"); ?></a></h1>

<?php //wp_nav_menu("Primary Menu");?>

<ul class="nav">
<?php
$menu = wp_get_nav_menu_items('Primary Menu');
foreach($menu as $menu_item)
{
    // var_dump($menu_item); // render the object
    echo '<li class="nav-item"><a href="'.$menu_item->url.'.">'.$menu_item->title.'</a></li>'; //$menu_item->url." ".$menu_item->title ."<br>";
}
?>
</ul>