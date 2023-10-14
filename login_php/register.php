<?php 
session_start();
include('server.php'); 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regiter page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <h2>ลงทะเบียน</h2>

    </div>
    <form action="resgister_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if(isset($_SESSION['error'])):?>
                <div class="error">
            <h3>
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);         
                ?>
            </h3>
                </div>
        <?php endif?>
        <div class="input-group">
            <label for="username">ชื่อผู้ใช้งาน</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">อีเมล</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="password_2">Confirm Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">ลงทะเบียน</button>
        </div>
        <p>สมัครสมาชิกเเล้วหรือไม่? <a href="login.php">คลิกที่นี่เพื่อเข้าสู่ระบบ</a></p>
    </form>
</body>

</html>