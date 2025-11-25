<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>PHP Calculator</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
body {
  background: linear-gradient(135deg, #74ABE2, #5563DE);
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.calculator-box {
  background: #fff;
  border-radius: 15px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.2);
  padding: 30px 40px;
  width: 100%;
  max-width: 450px;
  transition: 0.3s;
}
.calculator-box:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(0,0,0,0.25);
}
.calculator-box h3 {
  font-weight: 600;
  color: #333;
}
label {
  font-weight: 500;
}
.btn-primary {
  background: #5563DE;
  border: none;
  font-weight: 600;
  transition: 0.3s;
}
.btn-primary:hover {
  background: #4450c0;
}
.result-box {
  margin-top: 20px;
  padding: 12px;
  border-radius: 10px;
  background: #e9f7ef;
  color: #155724;
  font-weight: 600;
  text-align: center;
}
</style>
</head>
<body>

<div class="calculator-box">
  <h3 class="text-center mb-4"><i class="fas fa-calculator"></i> PHP Calculator</h3>

  <form action="" method="post">
    <div class="form-group mb-3">
      <label>Input First Number</label>
      <input type="number" name="num1" class="form-control" placeholder="Enter first number" required>
    </div>

    <div class="form-group mb-3">
      <label>Input Second Number</label>
      <input type="number" name="num2" class="form-control" placeholder="Enter second number" required>
    </div>

    <div class="form-group mb-3">
      <label>Select Operator</label>
      <select name="operation" class="form-control" required>
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
        <option value="%">Modulus (%)</option>
      </select>
    </div>

    <button type="submit" name="ok" class="btn btn-primary btn-block">Calculate</button>
  </form>

  <?php
  if (isset($_POST["ok"])) {
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $op = $_POST["operation"];
      $result = "";

      switch ($op) {
          case '+':
              $result = $num1 + $num2;
              break;
          case '-':
              $result = $num1 - $num2;
              break;
          case '*':
              $result = $num1 * $num2;
              break;
          case '/':
              $result = ($num2 != 0) ? $num1 / $num2 : "Error! Division by zero";
              break;
          case '%':
              $result = ($num2 != 0) ? $num1 % $num2 : "Error! Division by zero";
              break;
          default:
              $result = "Invalid Operator";
      }

      echo "<div class='result-box'>Result: <strong>$result</strong></div>";
  }
  ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
