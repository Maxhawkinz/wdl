<!DOCTYPE html>
<html>
<head>
  <title>SECD130 Ajay Thakare</title>
  <style>
    body { font-family: Arial; background: cyan; text-align: center; padding-top: 100px; }
    .box { background: white; width: 350px; margin: auto; padding: 30px; border-radius: 10px;}
    h1 { color: Black; }
    p  { color: pink; font-size: 18px; }
  </style>
</head>
<body>
  <div class="box">
    <h1>Welcome!</h1>
    <?php
      date_default_timezone_set("Asia/Kolkata");
      echo "<p>Today's Date: " . date("d-m-Y") . "</p>";
      echo "<p>Current Time: " . date("h:i:s A") . "</p>";
    ?>
  </div>
</body>
</html>