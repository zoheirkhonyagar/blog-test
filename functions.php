<?php
function getSiteName(){
    global $mysqli;
    $sql = "SELECT site_name FROM general";
    $result = $mysqli->query($sql);
    $name = $result->fetch_array(1)['site_name'];
    $mysqli->close();
    return $name;
}
?>