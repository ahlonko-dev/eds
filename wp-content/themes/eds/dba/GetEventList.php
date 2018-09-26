<?php

function getEventList($eventCount){
    $bdd = new PDO('mysql:host=localhost;dbname=eds;charset=utf8', 'root', '');
    $db_events=$bdd->query("SELECT * FROM wp_em_events as events ORDER BY event_id DESC LIMIT $eventCount");
    $array_events=[];
    $tmp;
    while($tmp=$db_events->fetch()){
        array_push($array_events,$tmp);
    }
    return $array_events;
}

?>