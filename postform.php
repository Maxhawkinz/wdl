<!DOCTYPE html>
<html>
<head>
  <title>SECD130 Ajay Thakare</title>
  <style>
    body { font-family: Arial; background: cyan; display: flex; justify-content: center; align-items: center; height: 100vh; }
    .box { background: white; padding: 25px; border-radius: 10px; width: 320px;}
    h2 { text-align: center; }
    input { width: 100%; padding: 8px; margin: 10px 0; box-sizing: border-box; }
    button { width: 100%; padding: 10px; background: blue ; color: white; border: none; border-radius: 5px; cursor: pointer; }
    .output { margin-top: 15px; color: green; }
  </style>
</head>
<body>
  <div class="box">
    <h2>Enter Details</h2>
    <form method="POST" action="">
      <input type="text"  name="name"  placeholder="Enter Name"  required>
      <input type="email" name="email" placeholder="Enter Email" required>
      <button type="submit">Submit</button>
    </form>
    <div class="output">
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name  = $_POST['name'];
          $email = $_POST['email'];
          echo "<p>Name: "  . $name  . "</p>";
          echo "<p>Email: " . $email . "</p>";
        }
      ?>
    </div>
  </div>
</body>
</html>