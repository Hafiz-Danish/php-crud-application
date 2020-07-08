<?php

    //php code goes here



?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- a table for printing the data coming from the database -->
    <table class="table-content">
        <thead>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>city</th>
                <th>salary</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>burhan23</td>
                <td>sialkot</td>
                <td>40,000</td>
                
            </tr>
            <tr>
                <td>2</td>
                <td>sultan98</td>
                <td>multan</td>
                <td>55,000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>haroon34</td>
                <td>islamabad</td>
                <td>80,000</td>
            </tr>
            <tr>
                <td>4</td>
                <td>umar988</td>
                <td>sialkot</td>
                <td>40,000</td>
            </tr>
            <tr>
                <td>5</td>
                <td>faraz333</td>
                <td>wazirabad</td>
                <td>52,000</td>
            </tr>
            <tr>
                <td>6</td>
                <td>arslan34</td>
                <td>karachi</td>
                <td>65,000</td>
            </tr>
            <tr>
                <td>7</td>
                <td>aqeel342</td>
                <td>hyderabad</td>
                <td>90,000</td>
            </tr>
            <tr>
                <td>8</td>
                <td>shamas89</td>
                <td>lahore</td>
                <td>76,000</td>
            </tr>
            <tr>
                <td>9</td>
                <td>nadeem098</td>
                <td>lahore</td>
                <td>40,000</td>
            </tr>
            <tr>
                <td>10</td>
                <td>abdullah433</td>
                <td>Gujranwala</td>
                <td>55,000</td>
            </tr>
        </tbody>
        
        
    </table>


    <!-- the form to submit data  -->
    <form action="handler.php" method="post" autocomplete="off">
        <h2>CRUD</h2>
        <input type="text" placeholder="username" name="username" required="required" maxlength="20">
        <input type="text" placeholder="city" name="city" required="required" maxlength="20">
        <input type="text" placeholder="salary" name="salary" required="require" maxlength="10"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    




</body>
</html>





















