<?php
while (have_posts()) {
    the_post();
?>
    <h1>This sia page not a post.</h1>
    <h1><a href=<?php the_permalink() ?>><?php echo the_title() ?></a></h1>
    <p><?php echo the_content() ?></p>
    <hr>
<?php
}
?>