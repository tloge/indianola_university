<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  
  <!-- This points us to the css sheet. -->
  <link rel="stylesheet" type="text/css" href="style_sheet.css">

      <!-- Main CSS styles for Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/simplex/bootstrap.min.css">

  <title>Indianola University</title>

 <?php include 'navigation.php'; ?>

     <!-- Main content -->
    <div class="container">
      <!-- This container moves below the menu bar -->
      <div class="below_menu_container">
      </div>
    </div>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
  <header>
  <h1 style="color: #FFFFFF">Indianola University</h1>
  
  <p><img src="img/header.jpg" alt="Indianola University Header" height="150px"></p>
  </header>

  <section class="container">
    <h1>Sign Up</h1>
    <form>
    <label for="firstname">First name:</label><br>
    <input type="text" name="firstname"><br>
    <label for="lastname">Last name:</label><br>
    <input type="text" name="lastname"><br>
    <label for="username">Username:</label><br>
    <input type="text" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="text" name="password"><br><br>
    <button class="button" style="vertical-align:middle"><span>Submit </span></button>
    </form>    
  </section>
    <div class="alert alert-info" role="alert">
    <strong>Warning!</strong> If you already have an account go to the login page.
  </div>
 <?php include 'footer.php'; ?>
</body>
</html>