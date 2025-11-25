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
<title></title>
</head>
<body>

<form method="GET" >
    <div class="card p-3">

        <h5 class="text-info">Filter By City</h5>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="city[]" value="Kolkata" >
            <label class="form-check-label">Kolkata</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="city[]" value="Delhi">
            <label class="form-check-label">Delhi</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="city[]" value="Mumbai">
            <label class="form-check-label">Mumbai</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="city[]" value="Purulia">
            <label class="form-check-label">Purulia</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="city[]" value="Rajasthan">
            <label class="form-check-label">Rajasthan</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="city[]" value="Purbamedinipur">
            <label class="form-check-label">purbamedinipur</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="city[]" value="Bihar">
            <label class="form-check-label">Bihar</label>
        </div>


        <hr>

        <h5 class="text-info">Filter By Course</h5>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="course[]" value="PHP">
            <label class="form-check-label">PHP</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="course[]" value="Java">
            <label class="form-check-label">Java</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="course[]" value="Python">
            <label class="form-check-label">Python</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="course[]" value="C#">
            <label class="form-check-label">C#</label>
        </div>

        <h5 class="text-info">Filter By Marks</h5>
        <div class="form-check">
            <input type="checkbox" name="marks[]" value="100" class="form-check-input">
            <label for="">100</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="marks[]" value="90-99" class="form-check-input">
            <label for="">90-99</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="marks[]" value="75-89" class="form-check-input">
            <label for="">75-89</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="marks[]" value="60-74" class="form-check-input">
            <label for="">60-74</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="marks[]" value="45-59" class="form-check-input">
            <label for="">45-59</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="marks[]" value="0-44" class="form-check-input">
            <label for="">Fail</label>
        </div>

        <button type="submit" class="btn btn-info mt-3">Apply Filter</button>

    </div>
</form>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>

