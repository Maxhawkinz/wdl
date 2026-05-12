<html>
<head>
  <title>SECD130 Ajay Thakare</title>
  <style>
    body { font-family: Arial; background: cyan; display: flex; justify-content: center; align-items: center; height: 100vh; }
    .box { background: white; padding: 25px; border-radius: 10px; width: 350px; }
    h2 { text-align: center; }
    input { width: 100%; padding: 8px; margin: 8px 0; box-sizing: border-box; }
    button { width: 100%; padding: 10px; background: blue; color: white; border: none; border-radius: 5px; cursor: pointer; }
    .output { margin-top: 15px; color: green; }
  </style>
</head>
<body>
  <div class="box">
    <h2>Enter Values</h2>
    <form method="POST">
      <input type="text" name="val1" placeholder="Value 1" required>
      <input type="text" name="val2" placeholder="Value 2" required>
      <input type="text" name="val3" placeholder="Value 3" required>
      <button type="submit">Store & Display</button>
    </form>
    <div class="output">
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $arr = array($_POST['val1'], $_POST['val2'], $_POST['val3']);
          echo "<strong>Array Elements:</strong><br>";
          foreach ($arr as $value) {
            echo "<p>" . $value . "</p>";
          }
        }
      ?>
    </div>
  </div>
</body>
</html>