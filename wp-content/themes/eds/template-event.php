<?php
/*
Template Name: Event Description
*/
?>
<?php
get_header();

// Get the queried object and sanitize it
$current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
// Get the page slug
$slug = $current_page->post_name;

echo $slug;

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=eds;charset=utf8', 'root', '');
    $event=$bdd->query("SELECT * FROM wp_em_events as events WHERE events.event_slug = '$slug'")->fetch();
    echo $event["post_content"];
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

get_footer();
?>