
<?php 
$email; 
$password; 
 if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password']; 
    
    echo $email. ' and '. $password; 
    
 }

 else {
    echo 'form did not contain any data';
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action= 'form.php'>
        <input type='email' name = 'email'/>
        <input type = 'password' name = 'password' />
        <input type = 'submit' />
    </form>
    
</body>
</html>