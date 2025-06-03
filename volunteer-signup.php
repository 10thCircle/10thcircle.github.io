<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://10thcircle.github.io/style.css">
    <title> 10th Circle - Volunteer Sign-up </title>
    <link rel="icon" type="image/x-icon" href="../Images/gajlogo.png">
  </head>
  <body>
    <header class="header">
      <nav class="navbar">
        <a href="https://10thcircle.github.io/" class="nav-logo">10th Circle</a>
        <ul class="nav-menu">
          <li class="nav-item">
            <a href="https://10thcircle.github.io/" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="AOC" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
            <a href="FYS" class="nav-link">Schools</a>
          </li>
          <li class="nav-item">
            <a href="Our_Staff" class="nav-link">Our Staff</a>
          </li>
          <li class="nav-item">
            <a href="curriculums" class="nav-link">Curriculums</a>
          </li>
          <li class="nav-item">
            <a href="projects" class="nav-link">Projects</a>
          </li>
        </ul>
        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </header>

    <img src="../Images/coding-4.jpg" height="500px" width="100%" alt="Image of 10th Circle students coding"/>

    <h2>Volunteer Sign-up Form</h2>
    <form action="?action=save" method="post">
      <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
      <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
      <label for="availability">Availability:</label>
        <textarea id="availability" name="availability"></textarea><br><br>
      <label for="language">Programming Language you want to teach: </label>
        <input type="radio" id="scratch" name="language" value="scratch">
        <label for="scratch">Scratch</label><br>
        <input type="radio" id="html" name="language" value="html">
        <label for="html">HTML</label><br>
        <input type="radio" id="css" name="language" value="css">
        <label for="css">CSS</label><br>
        <input type="radio" id="javascript" name="language" value="javascript">
        <label for="javascript">JavaScript</label><br>
        <input type="radio" id="everything" name="language" value="everything">
        <label for="everything">All of the Above</label><br>
      <label>Are you a teacher already?</label>
        <input type="radio" id="yes" name="teacher" value="yes">
        <input type="radio" id="no" name="teacher" value="no">
      <label>What school do you work at or want to work at?</label>
        <input type="text" id="school" name="school"><br><br>
      <input type="submit" value="Submit">
    </form>
    <?php
    $action = $_GET["action"];
    $mydata = $_POST["name", "email", "availability", "language", "teacher", "school"];
    if($action == "save" && empty($mydata)) {
      echo "<p>Please fill out the form before submitting.</p>";
    } elseif($action == "save") {
      echo "<p>Thank you for signing up!</p>";
    }

    if($action == "save") {
      $targetFolder = "/path/to/folder";
      file_put_contents($targetFolder."form1storage.txt", <br>$mydata);
    }
    ?>
    <div class="footer">
      &copy; 2023 10th Circle
    </div>
  </body>
</html>