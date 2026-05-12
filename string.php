<!DOCTYPE html>
<html>
<head>
  <title>SECD130 Ajay Thakare</title>
  <style>
    body { font-family: Arial; background: cyan; display: flex; justify-content: center; align-items: center; height: 100vh; }
    .box { background: white; padding: 25px; border-radius: 10px; width: 350px;  }
    h2 { text-align: center; text-weight: bold;}
    input { width: 100%; padding: 8px; margin: 10px 0; box-sizing: border-box; }
    button { width: 100%; padding: 10px; background: green; color: white; border: none; border-radius: 5px; cursor: pointer; }
    .output { margin-top: 15px; color: blue; }
  </style>
</head>
<body>
  <div class="box">
    <h2>String Manipulation</h2>
    <form method="POST">
      <input type="text" name="text" placeholder="Enter a string" required>
      <button type="submit">Process</button>
    </form>
    <div class="output">
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $str = $_POST['text'];
          echo "<p>Original: $str</p>";
          echo "<p>Length: "   . strlen($str)     . "</p>";
          echo "<p>Reversed: " . strrev($str)      . "</p>";
          echo "<p>Substring (first 5): " . substr($str, 0, 5) . "</p>";
        }
      ?>
    </div>
  </div>
</body>
</html>