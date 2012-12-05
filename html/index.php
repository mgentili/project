<?php

    // configuration
    require("../includes/config.php"); 

    //gets all the tasks
    $rows = query("SELECT * FROM tasks");
    
    // renders tasks
    render("tasks.php", ["rows" => $rows]);
?>

