<?php
/*
Template Name: Event Description-
*/
?>
<?php
get_header();


// Get the queried object and sanitize it
$current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
// Get the page slug
$slug = $current_page->post_name;
//$slug = "sceance-douverture";
//var_dump($slug);

$event=array();
$db_event;
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=eds;charset=utf8', 'root', '');
    $db_event=$bdd->query("SELECT * FROM wp_em_events as events WHERE events.event_slug = '$slug'")->fetch();
    //var_dump($db_event);
    $event["name"]=$db_event["event_name"];
    $event["start_date"]=$db_event["event_start_date"];
    $event["start_time"]=$db_event["event_start_time"];
    $event["end_date"]=$db_event["event_end_date"];
    $event["end_time"]=$db_event["event_end_time"];
    $event["description"]=$db_event["post_content"];
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>

<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
                    <h1><?php the_title();?></h1>	
                    <div>
						<div class="row">
							<div class="col-md-6">
                            <h2><?php echo $event["name"] ?></h2>
                                    <p>du <?php echo $event["start_date"]; ?> à <?php echo $event["start_time"]; ?><br/>
                                            au <?php echo $event["end_date"]; ?> à <?php echo $event["end_time"]; ?></p>
                                    <p><?php echo $event["description"] ?></p>
                                </div>
                            
                        </div>
                    </div>
                </div>
</main>




<?php get_footer();?>