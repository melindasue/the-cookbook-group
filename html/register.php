<?php
    // configuration
    require("../includes/config.php");
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        //Error checking
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
        {
            apologize("Email address is not valid.");
        }
        
        if (empty($_POST["name"]) || empty($_POST["password"]) || empty($_POST["email"]))
        {      
            apologize("Please enter a valid name, email address, and password.");
        }
        
        if ($_POST["password"] != $_POST["confirmation"])
        {      
            apologize("Passwords do not match.");
        }
                            
        //Registers Users
        $register = query("INSERT INTO users (name, email, hash) VALUES(?,?,?)", $_POST["name"], $_POST["email"], crypt($_POST["password"]));
    
        if ($register === false)
        {
            apologize("Username already exists. Try again.");
        }
        
        $rows = query("SELECT LAST_INSERT_uniqueid() AS uniqueid");
        $uniqueid = $rows[0]["uniqueid"];
        $_SESSION["uniqueid"] = $uniqueid;
        redirect("./index.php");
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }
                    
?>
