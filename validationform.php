<?php
if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])) {

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)) {
    // perform operations with the form data
} else {
    echo "One or more fields are empty.";
}
} else {
echo "All fields are not set.";
}
?>