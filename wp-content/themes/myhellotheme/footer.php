<br>

<a href="<?php get_home_url(); ?>"><?php echo get_bloginfo("name"); ?></a>

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

<?php wp_footer(); ?>

</body>
</html>