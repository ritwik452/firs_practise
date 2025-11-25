<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch Case Examples</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h2 { color: #333; }
        form { margin-bottom: 20px; }
        input, select { padding: 5px; margin: 5px 0; }
        .result { background: #f0f0f0; padding: 10px; margin: 10px 0; border-left: 5px solid #333; }
    </style>
</head>
<body>
    <h1>PHP Switch Case Interactive Examples</h1>

    <!-- 1️⃣ Day Name Finder -->
    <h2>1. Day Name Finder</h2>
    <form method="post">
        Enter day number (1-7): <input type="number" name="day" min="1" max="7" required>
        <button type="submit" name="submit_day">Check Day</button>
    </form>
    <div class="result">
        <?php
        if(isset($_POST['submit_day'])){
            $day = $_POST['day'];
            switch($day){
                case 1: echo "Monday"; break;
                case 2: echo "Tuesday"; break;
                case 3: echo "Wednesday"; break;
                case 4: echo "Thursday"; break;
                case 5: echo "Friday"; break;
                case 6: echo "Saturday"; break;
                case 7: echo "Sunday"; break;
                default: echo "Invalid day"; break;
            }
        }
        ?>
    </div>

    <!-- 2️⃣ Simple Calculator -->
    <h2>2. Simple Calculator</h2>
    <form method="post">
        Number 1: <input type="number" name="num1" required><br>
        Number 2: <input type="number" name="num2" required><br>
        Operator:
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <br>
        <button type="submit" name="submit_calc">Calculate</button>
    </form>
    <div class="result">
        <?php
        if(isset($_POST['submit_calc'])){
            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $op = $_POST['operator'];
            switch($op){
                case '+': echo "Addition: ".($a+$b); break;
                case '-': echo "Subtraction: ".($a-$b); break;
                case '*': echo "Multiplication: ".($a*$b); break;
                case '/': 
                    echo ($b!=0) ? "Division: ".($a/$b) : "Cannot divide by zero";
                    break;
                case '%': echo "Modulus: ".($a%$b); break;
                default: echo "Invalid operator";
            }
        }
        ?>
    </div>

    <!-- 3️⃣ Vowel or Consonant -->
    <h2>3. Vowel or Consonant</h2>
    <form method="post">
        Enter a character: <input type="text" name="char" maxlength="1" required>
        <button type="submit" name="submit_vowel">Check</button>
    </form>
    <div class="result">
        <?php
        if(isset($_POST['submit_vowel'])){
            $ch = strtolower($_POST['char']);
            switch($ch){
                case 'a': case 'e': case 'i': case 'o': case 'u':
                    echo "$ch is a vowel"; break;
                default:
                    echo "$ch is a consonant"; break;
            }
        }
        ?>
    </div>

    <!-- 4️⃣ Grade Calculator -->
    <h2>4. Grade Calculator</h2>
    <form method="post">
        Enter marks (0-100): <input type="number" name="marks" min="0" max="100" required>
        <button type="submit" name="submit_grade">Check Grade</button>
    </form>
    <div class="result">
        <?php
        if(isset($_POST['submit_grade'])){
            $mark = $_POST['marks'];
            switch(true){
                case ($mark>=90 && $mark<=100): echo "Grade A+"; break;
                case ($mark>=80 && $mark<=89): echo "Grade A"; break;
                case ($mark>=70 && $mark<=79): echo "Grade B"; break;
                case ($mark>=60 && $mark<=69): echo "Grade C"; break;
                case ($mark>=40 && $mark<=59): echo "Grade D"; break;
                case ($mark<=39): echo "Fail"; break;
                default: echo "Invalid mark"; break;
            }
        }
        ?>
    </div>

    <!-- 5️⃣ Electricity Bill -->
    <h2>5. Electricity Bill</h2>
    <form method="post">
        Enter units: <input type="number" name="units" min="0" required>
        <button type="submit" name="submit_bill">Calculate Bill</button>
    </form>
    <div class="result">
        <?php
        if(isset($_POST['submit_bill'])){
            $unit = $_POST['units'];
            $bill = 0;
            switch(true){
                case ($unit <= 100): $bill = $unit*3; break;
                case ($unit <= 200): $bill = (100*3) + (($unit-100)*4); break;
                case ($unit > 200): $bill = (100*3) + (100*4) + (($unit-200)*5); break;
                default: echo "Invalid units"; break;
            }
            echo "Total bill: ₹$bill";
        }
        ?>
    </div>
</body>
</html>
