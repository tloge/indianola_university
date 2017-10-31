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

</head>
   <!-- Main content -->
    <div class="container">
      <!-- This container moves below the menu bar -->
      <div class="below_menu_container">
      </div>
    </div>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
  <header>
  <h1 style="color: #FFFFFF">Indianola University</h1>
  <p><img src="img/header.jpg" alt="Indianola University Header" height="150px"></p>
  </header>

  <section class="container">
    <h1>Login</h1>
    <p>Please login below.</p>
    <form>
      <div class="form-group">
        <label for="email">Username:</label><br>
        <input type="email" id="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd">
      </div>
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
      <button class="button" style="vertical-align:middle"><span>Submit </span></button>
    </form>   
  </section>

 <?php include 'footer.php'; ?>
</body>
</html>