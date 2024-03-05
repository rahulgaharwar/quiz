<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Online Quiz Registration</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    form {
        max-width: 400px;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="tel"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        width: 100%;
        background: #4caf50;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background: #45a049;
    }
    .error {
        color: red;
    }
</style>
</head>
<body>

<form id="registrationForm" onsubmit="return validateForm()">
    <h2>Register for Quiz</h2>
    <label for="firstName">First Name</label>
    <input type="text" id="firstName" name="firstName" required>

    <label for="lastName">Last Name</label>
    <input type="text" id="lastName" name="lastName" required>

    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="contactNumber">Contact Number</label>
    <input type="tel" id="contactNumber" name="contactNumber" required>

    <input type="submit" name="registerbutton" value="Register">
</form>

<script>
    function validateForm() {
        var firstName = document.getElementById("firstName").value;
        var lastName = document.getElementById("lastName").value;
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var email = document.getElementById("email").value;
        var contactNumber = document.getElementById("contactNumber").value;

        if (firstName == "" || lastName == "" || username == "" || password == "" || email == "" || contactNumber == "") {
            alert("All fields must be filled out");
            return false;
        }
        return true;
    }
</script>


<?php
if(isset($_POST["registerbutton"]))
{
    echo "test";
}
?>

</body>
</html>
