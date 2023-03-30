<?php
session_start();
if (isset($_SESSION['contador'])){
    $_SESSION['contador']++;
    echo $_SESSION['contador'];
}else{
    $_SESSION['contador'] = 0;
    echo $_SESSION['contador'];
}
?>