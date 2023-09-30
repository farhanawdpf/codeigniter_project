<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>regi form</h1>
    <form action="<?php echo site_url('Home/insert')?>" method="POST"> 
        <label for="">user name</label>
        <input type="text" name="user_name"><br><br>
        <label for="">user email</label>
        <input type="email" name="user_email"><br><br>
        <label for="">user password</label>
        <input type="password" name="user_password"><br><br>
        <input type="submit" name="submit" value="Insert"><br><br>
    </form>
</body>
</html>