<?php
  function show_form() {
    $form_data = "<form action='Version2.php' method='POST'><div class='container'>
                    <label><b>Username</b></label>
                    <input type='text' placeholder='Enter Username' name='user_name' required>
                  <button type='submit'>Login</button></div></form>";
    echo $form_data;
  }

  //Als iets is ingevuld moet hij de cookie zetten.
  if(isset($_POST['user_name'])){
    setcookie("user_name", $_POST['user_name']);
    header("Location: Version2.php");
  }

  //Als de cookie gezet is moet hij de waarde van de cookie laten zien en anders het form
  if(isset($_COOKIE['user_name'])) {
    echo "Welcome ".$_COOKIE['user_name']." !";
  } else {
    //Naar hetzelfde script waardoor hij opnieuw laad
    show_form();
  }
?>