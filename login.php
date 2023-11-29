<link rel="stylesheet" href="style.css">

<?php
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == 'admin' && $password == 'admin') {
            echo '<h3>Login successful</h3>';
        } else {
            echo '<h3>Invalid credentials</h3>';
        }
    }
    else {
        echo '<h3>Please login</h3>';
    }
?>