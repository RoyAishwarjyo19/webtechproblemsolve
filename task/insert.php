<?php 
    include("db.php");
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $empid = $_POST["empid"];
        $name = $_POST["name"];
        $dob = $_POST["DOB"];
        $address = $_POST["address"];
        $country = $_POST["country"];
        $state = $_POST["state"];
        $city = $_POST["city"];
        $doj = $_POST["DOJ"];
        $img = $_POST["image"];
    
        if(empty($doj)){
            echo "Please enter date of joining<br>";
        }
        if(empty($dob)){
            echo "Please enter date of birth<br>";
        }
        if(empty($name)){
            echo "Please enter name<br>";
        }
        if(empty($address)){
            echo "Please enter address<br>";
        }
        if($country == "Please select a country"){
            echo "Please choose a country<br>";
        }
        if(empty($state)){
            echo "Please enter state<br>";
        }
        if(empty($city)){
            echo "Please enter city<br>";
        }

        else
        {
            $connection = new db();
            $conobj = $connection->openCon();
    
            $userQuery = $connection->insertQueryReg($conobj, "employee", $empid, $name, $dob, $address, $country, $state, $city, $doj, $img);
    
            if($userQuery === TRUE)
            {
                echo "Data successfully inserted";
            }
            else
            {
                echo "Error: ".$userQuery;
            }
        }
    }
    else
    {
        echo "FAILED";
    }
?>