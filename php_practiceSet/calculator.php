<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Calculator</title>
</head>
<body>

<div class="container">
    <div class="col-md-6 offset-md-3 calculator-box">
        <h3 class="text-center mb-4"><i class="fas fa-calculator"></i> PHP Calculator</h3>
        <form action="" method="post">
        <div class="form-group">
        <label for="">Input First Number</label>
        <input type="number" name="num1" placeholder="enter number" required>
        </div>

        <div class="form-group">
        <label for="">Input Second Number</label>
        <input type="number" name="num2" placeholder="enter number" required>
        </div>


        <div class="form-group">
        <label for="" >Operator</label>
        <select name="operation" id="operation" class="form-control">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        </div>


        <button class="submit" name="ok">Click Me</button>
        </form>
        <?php

        if (isset($_POST["ok"])) {
            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $op=$_POST["operation"];
            $result="";
            switch ($op) {
                case '+':
                     $result=$num1+$num2;
                    break;
                case '-':
                    $result=$num1-$num2;
                    break;
                case '*':
                    $result=$num1*$num2;
                    break;
                case '/':
                    $result=($num2 !=0) ? $num1 / $num2: "error division by 0";
                    break;

                case '%':
                    $result=($num2 !=0) ? $num1 % $num2: " error divition by 0";
                    break;
                default:
                    $result="Invailed";

            }
            echo "result is = ".$result;
        }

        ?>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>