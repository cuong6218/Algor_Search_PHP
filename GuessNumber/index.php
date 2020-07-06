
<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
if(isset($_POST['btn-play'])) {

    $_SESSION['low'] = 0;

    $_SESSION['high'] = 100;

    $_SESSION['mid'] = rand(0,100);    

} else if(isset($_POST['btn-bigger'])) {

    $_SESSION['low'] = $_SESSION['mid'] + 1;

    $_SESSION['mid'] = floor(($_SESSION['low'] + $_SESSION['high']) / 2); 

} else if(isset($_POST['btn-smaller'])) {

    $_SESSION['high'] = $_SESSION['mid'] - 1;

    $_SESSION['mid'] = floor(($_SESSION['low'] + $_SESSION['high']) / 2); 

} else if(isset($_POST['btn-correct'])) {

    echo "You are correct! <br>" ;

    session_destroy();

    header('refresh:3');

}



}

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Document</title>

</head>

<body>

​

<?php 

    if(isset($_SESSION['mid'])) {

        echo $_SESSION['mid'];

    }

?>

<form action="" method="POST">

    <button name="btn-play" >Play</button>

    <button name="btn-bigger" >bigger</button>

    <button name="btn-smaller" >smaller</button>

    <button name="btn-correct" >correct</button>



</form>

</body>

</html>

​

