<?php
$cookie_name = "user";
$cookie_value = "reda";
setcookie($cookie_name, $cookie_value, strtotime("+4 days"),"/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name]."<br>";
}session_start();
print_r($_COOKIE);
print_r($_SESSION);

//  echo "<br>". $_SESSION["favcolor"]; 
//  echo "<br>". $_SESSION["favanimal"]; 

//  session_unset();
//  session_destroy();

//  setcookie($cookie_name, $cookie_value, time() - 3600);

?>

</body>
</html>