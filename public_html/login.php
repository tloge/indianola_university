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

<!-- Navigation Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
    <!-- Three line "hamburger" icon for the collapsed navigation -->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Title on nav bar -->
          <a class="navbar-brand" href="index.html">Indianola University</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home Page</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="directions.html">Directions and Hours</a></li>
            <li><a href="tuition_and_fees.html">Tutition and Fees</a></li>
            <li><a href="majors.html">Majors</a></li>
            <li><a href="sports.html">Sports</a></li>
            <li class="active"><a href="login.html">Login</a></li>
            <li><a href="sign_up.html">Sign Up</a></li>
            <li><a href="recruit.html">Recruit Me</a></li>
          </ul>
        </div>
      </div>
  </nav>

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

  <footer class="col-xs-12">
  <p>&copy; Indianola University, 2017</p>
  <p>702 E C St, Indianola, IA 50125</p>
  <p>Phone: 515-123-4567</p>
     </footer>
</body>
</html>