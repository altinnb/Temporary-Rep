<?php 
//get data from input
//validation data
//open main page

require 'dbData.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (validateEmptyData($email, $password)) {
        header('Location: login.php');
    }
    elseif (validateData($email, $password)) {
        header('Location: main.php');
    }
    else{
        header('Location: login.php');
    }
}

function validateEmptyData($email, $password){
    if (empty($email) || empty($password)) {
        return true;
    }
    return false;
}
function validateData($email, $password){
    global $allUsers;
    foreach ($allUsers as $user) {
        if ($user['email'] == $email && $user['password'] == $password) {
            return true;
        }
    }
    return false;
}
?>
