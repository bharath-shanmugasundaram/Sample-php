<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Marks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="her">
        
        <div class="mb-3">
        <form action="index.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputReg" required name="registration_number" placeholder="Registration Number">
                <label for="floatingInputReg">Registration Number</label>
            </div>
            <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingInputReg" required name="date_of_birth" placeholder="Registration Number">
            <label for="floatingInputDOB">Date of Birth</label>
            </div>
            <button class="btn btn-success" id="submitButton" style="align-items: center;" type="submit">Check Marks</button>
        </form>
        </div>
    </div>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
  
    }
    .her{
        background: rgba( 255, 255, 255, 0.1 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 0px );
-webkit-backdrop-filter: blur( 0px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
        padding: 20px;
    }
</style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
