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
    <h1>Sign up to be recruited!</h1>
    <form>
    <label for="firstname">First name:</label><br>
    <input type="text" name="firstname"><br>
    <label for="lastname">Last name:</label><br>
    <input type="text" name="lastname"><br>
    <label for="email">Email:</label><br>
    <input type="text" name="email"><br>
    <label for="phonenumber">Phone Number:</label><br>
    <input type="text" name="phone"><br>
    <label for="highschool">High School:</label><br>
    <input type="text" name="high_school"><br>
    <label for="url">Highlight URL (Optional):</label><br>
    <input type="text" name="highlight_url"><br><br>
    <button class="button" style="vertical-align:middle"><span>Submit </span></button>
    </form> 
    <p> Thank you for your interest in Indianola University, our coaches will get in contact with you within a few days!   
  </section>
 <?php include 'footer.php'; ?>
</body>
</html>