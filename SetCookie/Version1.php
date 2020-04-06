<?php
  function show_form() {
    $form_data = "<form action='Version1.php' method='POST'>";
    $form_data .= "<div class='container'>
                    <label><b>Username</b></label>
                    <input type='text' placeholder='Enter Username' name='user_name' required>";
    $form_data .= "<button type='submit'>Login</button>";
    $form_data .= "</div></form>";
    echo $form_data;
  }

  //Als iets is ingevuld moet hij de cookie zetten.
  if(isset($_POST['user_name'])){
    setcookie("user_name", $_POST['user_name']);
    header("Location: Version1.php");
  }

  //Als de cookie gezet is moet hij de waarde van de cookie laten zien en anders het form
  if(isset($_COOKIE['user_name'])) {
    echo "Welcome ".$_COOKIE['user_name']." !";
  } else {
    //Naar hetzelfde script waardoor hij opnieuw laad
    show_form();
  }
?>