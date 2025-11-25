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
<title>Pattern</title>
</head>
<body>
    <h1 >Pattern Program</h1>
    <div class="container">
        <div class="col-md-2">
            <form action="" method="post">
                <div class="form-group">
                    <label for="" >Enter Number :-</label>
                    <input type="number" name="number" >
                    
                </div>
                <button type="submit" class="btn btn-primary" name="ok">Click Me</button>
            </form>
 
            <?php
             if (isset($_POST["ok"])) {
                $number=$_POST["number"];

                                            /* for ($i=1; $i<=$number ; $i++) { 
                                                for ($j=1; $j <=$i ; $j++) {     //pattern print;
                                                    echo $j." ";
                                                }echo "</br>";
                                            }
                                            */

                          
                                      /*    $rev=0;
                                            $num1=$number;
                                            while ($number>0) {
                                            $rem=$number%10;
                                            $rev=($rev*10)+$rem;
                                            $number=(int)($number/10);        //palindrome number;
                                        }
                                        if ($num1==$rev) {
                                            echo $num1." Is palindrome number";
                                        }else {
                                            echo $num1. " Not Palindrome Number";
                                        }
                                        */
 

                                        


             }
             
            ?>


        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>