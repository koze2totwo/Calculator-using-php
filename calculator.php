<?php


$cookie1name="numb";
$cookie1value="";
$cookie2name ="op";
$cookie2value="";
if(isset($_POST["numb"])){
    $num = $_POST["input"].$_POST["numb"];
    
}
else{
    $num = "";
}
if(isset($_POST["op"])){
    $cookie1value = $_POST["input"];
    
    
    setcookie($cookie1name,$cookie1value,time()+84600,"/");
    $cookie2value =$_POST["op"];
    setcookie($cookie2name,$cookie2value,time()+86400,"/");
   
    $num="";
}
if(isset($_POST["equal"])){
    $num = $_POST["input"];
 
    switch($_COOKIE["op"]){
        case "+":
            $result = $_COOKIE["numb"] + $num;
            break;
        case "-":
            $result = $_COOKIE["numb"] - $num;
            break;
        case "*":
            $result = $_COOKIE["numb"]* $num;
            break;
        case "/":
            $result = $_COOKIE["numb"]/$num;
            break; 
        }
        
        $num = $result;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="what.css" type="text/css">
</head>
<body>
<p>Calculator using PHP</p>
<div class="container">
<form action="" method="post" >
   
        <input type="text" class="result" name="input" value="<?php echo @$num; ?>">
        <br>
        <input class="fir"  value="1"  type="submit" name="numb">
        <input class="fir" value="2" type="submit" name="numb"> 
        <input type="submit" class="fir" value="3" name="numb">
        <input type="submit" class="fir" value="+" name="op">   
        <input type="submit" class="fir" value="4" name="numb">
        <input type="submit" class="fir" value="5" name="numb">
        <input type="submit" class="fir" value="6" name="numb">
        <input type="submit" class="fir" value="-" name="op">
        <input type="submit" class="fir" value="7" name="numb">
        <input type="submit" class="fir" value="8" name="numb">    
        <input type="submit" class="fir" value="9" name="numb">    
        <input type="submit" class="fir" value="*" name="op">
        
        <input type="submit" class="fir" value="0" name="numb">
        <input type="submit" class="fir" value="=" name="equal">
        <input type="submit" class="fir" value="/" name="op">
        <input type="submit" class="reset" value="RS" name="rset">
 
    </form>
    </div>
    
</html>
