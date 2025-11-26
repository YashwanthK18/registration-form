<?php
// Read all input values
$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
$gender = $_POST['gender'] ?? '';
$birthdate = $_POST['birthdate'] ?? '';
$country = $_POST['country'] ?? '';
$bio = nl2br($_POST['bio'] ?? '');
$interests = isset($_POST['interests']) ? implode(", ", $_POST['interests']) : "None";
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Successful</title>
<style>
body {
    background-color: #f0f0f0;
    font-family: Arial;
}
.card {
    width: 600px;
    margin: 40px auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
}
h2 { text-align:center; }
.info { margin: 10px 0; }
label { font-weight:bold; }
</style>
</head>

<body>
<div class="card">
    <h2>Registration Successful</h2>

    <div class="info"><label>Name:</label> <?= $fullname ?></div>
    <div class="info"><label>Email:</label> <?= $email ?></div>
    <div class="info"><label>Gender:</label> <?= $gender ?></div>
    <div class="info"><label>Date of Birth:</label> <?= $birthdate ?></div>
    <div class="info"><label>Country:</label> <?= $country ?></div>
    <div class="info"><label>Interests:</label> <?= $interests ?></div>
    <div class="info"><label>Bio:</label> <?= $bio ?></div>
</div>
</body>
</html>
