<?php 
    class db
    {
        function openCon()
        {
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $db = "Company";
            $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn -> error);
            return $conn;
        }

        function checkUser($conn, $table, $username, $password)
        {
            $result = $conn->query("select * from ".$table." where username='".$username."' and password='".$password."'");
            return $result;
        }

        function closeCon($conn)
        {
            $conn -> close();
        }

        function insertQuery($conn, $table, $username, $password, $fullname)
        {
            $queryString = "insert into ".$table."(username, password, fullname) values('".$username."', '".$password."', '".$fullname."')";
            $result = $conn->query($queryString);
            if($result === TRUE)
            {
                return $result;
            }
            else
            {
                return $conn->error;
            }
        }

        function insertQueryReg($conn, $table, $empid, $name, $dob, $address, $country, $state, $city, $doj, $img)
        {
            $queryString = "insert into ".$table."(id, name, DOB, Address, Country, State, City, DOJ, image) values(".$empid.", '".$name."', '".$dob."', '".$address."', '".$country."', '".$state."', '".$city."', '".$doj."', '".$img."')";
            
            $result = $conn->query($queryString);
            if($result === TRUE)
            {
                return $result;
            }
            else
            {
                return $conn->error;
            }
        }
    }
?>