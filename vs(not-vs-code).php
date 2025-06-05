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
</php>