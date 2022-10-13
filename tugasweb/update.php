<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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
        <h1>Update Staff Data</h1>
        <div class="form-container">
            <form action="" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">

                <label for="email">Email</label>
                <input type="email" name="email" id="email">

                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob">

                <label for="text">Job</label>
                <input type="text" name="job" id="job">

                <input type="submit" value="Submit">
            </form>
        </div>
        <?php
        require('config.php');
        $id = $_GET['id'];

        if(!empty($_POST)){
            
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $dob = $_REQUEST['dob'];
            $job = $_REQUEST['job'];
    
            $sql = "UPDATE staff SET name = '$name', email = '$email', dob = '$dob', job = '$job' WHERE id = '$id'";
    
            if(!empty($name)){
                if(mysqli_query($conf, $sql)){
                    echo "Data has been successfully updated";
                }else{
                    echo "Error: $sql. ".mysqli_error($conf);
                }
            }
        }
        ?>
    </div>
    
</body>
</html>