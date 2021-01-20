<?php 
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action = "insert.php">
        <table>
            <tr>
                <td>EMP Id:</td>
                <td><input type = "text" name = "empid" required></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type = "text" name = "name"></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type = "date" name = "DOB"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type = "text" name = "address"></td>
            </tr>
            <tr>
                <td>Country:</td>
                <td>
                    <select name = "country" id = "country">
                        <option selected value="Please select a country">Please select a country</option>
                        <option value="Spain">Spain</option>
                        <option value="USA">USA</option>
                        <option value="Bangladesh">Bangladesh</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>State:</td>
                <td>
                    <select name = "state" id = "state">
                        <option selected value="default" ></option>
                        <option value="Texas">Texas</option>
                        <option value="Wisconsin">Wisconsin</option>
                        <option value="Dhaka">Dhaka</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>City:</td>
                <td>
                    <select name = "city" id = "city">
                        <option selected value="default" ></option>
                        <option value="Texas">Arlington</option>
                        <option value="Wisconsin">Wyoming</option>
                        <option value="Dhaka">Dhaka</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date of joining:</td>
                <td><input type = "date" name = "DOJ"></td>
            </tr>
            <tr>
                <td>Profile pic:</td>
                <td>
                <input type="file" name="image" />
                </td>
                
            </tr>
            <tr>
                <td>
                    <button type = "submit">SUBMIT</button>
                </td>
            </tr>
            
        </table>
    </form>
</body>
</html>