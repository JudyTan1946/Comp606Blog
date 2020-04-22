<?php
  require "header.php";
?>

<main>
  <div class="wrapper-main">
    <section class="section-default">
      <h1>Signup</h1>
      <?php
        if(isset($_GET['error'])){
          if($_GET['error'] == "emptyfields"){
            echo '<p class="signuperror">You need to fill in all fields!</p>';
          }
          elseif($_GET['error'] == "invalidmailuid"){
            echo '<p class="signuperror">Invalid username and email!</p>';
          }
          elseif($_GET['error'] == "invaliduid"){
            echo '<p class="signuperror">Invalid username</p>';
          }
          elseif($_GET['error'] == "invalidmail"){
            echo '<p class="signuperror">Invalid email!</p>';
          }
          elseif($_GET['error'] == "passwordcheck"){
            echo '<p class="signuperror">Your password do not match</p>';
          }
          elseif($_GET['error'] == "usertaken"){
            echo '<p class="signuperror">Username is already taken!</p>';
          }
        }
        elseif($_GET['signup'] == "succeed") {
          echo '<p class="signupsuccess">Signup Successful!</p>';
        }
      ?>
      <form class="form-signup" action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="Email">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Confirm Password">
        <button type="submit" name="signup-submit">Signup</button>
      </form>
    </section>
  </div>

</main>

<?php
  require "footer.php";
?>