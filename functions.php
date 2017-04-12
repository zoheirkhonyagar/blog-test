<?php
function getSiteName(){
    global $mysqli;
    $sql = "SELECT site_name FROM general";
    $result = $mysqli->query($sql);
    $name = $result->fetch_array(1)['site_name'];
    return $name;
}
function getSocialLinks(){
    global $mysqli;
    $sql = "SELECT * FROM social_media" ;
    $result = $mysqli->query($sql);
    $result = $result->fetch_all(1);
    return $result;
}
?>