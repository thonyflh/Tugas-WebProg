<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <ul>
            <li><h1>PT. KamiBisa</h1></li>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="staff.php">Staff</a></li>
        </ul>
    </div>

    <div class="content">
        <h1>Staff list</h1>
        <div class="insertBtn">
            <a href="insert.php">Insert new staff</a>
        </div>
        <table>
            <tr class="header">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>DoB</th>
                <th>Job</th>
                <th>Action</th>
            </tr>
            <?php
            require('config.php');

            $sql_select = "SELECT * FROM staff";
            $result = mysqli_query($conf, $sql_select);

            while($row = mysqli_fetch_array($result)){
                echo "<tr><th><p>$row[id]</p></th>";
                echo "<th><p>$row[name]</p></th>";
                echo "<th><p>$row[email]</p></th>";
                echo "<th><p>$row[dob]</p></th>";
                echo "<th><p>$row[job]</p></th>";
                echo "<th><div class='btn'><a href='update.php?id=$row[id]'>Update</a>
                    </div><div class='btn'><a href='delete.php?id=$row[id]'>Delete</a>
                    </div></th></tr>";
            }

            function delete($id){

                global $conf; 
                mysqli_query($conf, "DELETE FROM staff WHERE id = $id");
            
                return mysqli_affected_rows($conf);
            }
            ?>

        </table>
    </div>
    
</body>
</html>