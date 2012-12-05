<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate inputs
        if (empty($_POST["taskname"]))
        {
            apologize("You must enter a name for the task.");
        }
        else if (empty($_POST["sdescrip"]))
        {
            apologize("You must give a short description of the task.");
        }
        else if (empty($_POST["time"]))
        {
            apologize("You must enter an estimate for the amount of time needed to complete the task.");
        }
        
        // try to add task
        $results = query("INSERT INTO tasks (sdescrip, ldescrip, time, name) VALUES(?, ?, ?, ?)",
        $_POST["sdescrip"], $_POST["ldescrip"],  $_POST["time"],  $_POST["taskname"]);
        if ($results === false)
        {
            apologize("Unable to create a new task. Please try again.");
        }

        // redirect to portfolio
        redirect("/");
    }
    else
    {
        // else render form
        render("createTask_Form.php", ["title" => "Create Task"]);
    }

?>
