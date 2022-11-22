<?php
    $content = "includes/mainpage.php";

    if(isset($_GET["p"])){
        switch($_GET["p"]){
            case "mikor":
                $content = "includes/mikor.php";
                break;
            case "tipp":
                $content = "includes/tipp.php";
                break;
            case "ev":
                $content = "includes/ev.php";
                break;
            case "adatlap":
                $content = "includes/adatlap.php";
                break;
        }
    }
?>