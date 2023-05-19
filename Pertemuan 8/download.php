<?php

if(isset($_GET['key']) && $_GET['key'] == 'rahasia' ){
    header('Content-Disposition: attachment; filename="info.php');
    header('Content-Type: text/php');
    readfile(__DIR__. '/file/info.php');
    exit();
}else{
    echo "INVALID KEY ! <br/><a href='upload.php'>Back</a>";
}

?>