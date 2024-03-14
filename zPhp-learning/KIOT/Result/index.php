<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Marks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="heo">
<table class="table table-hover">
  <tbody>
    <?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "h";
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $registrationNumber = isset($_POST['registration_number']) ? $_POST['registration_number'] : '';
        $dateOfBirth = isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : '';
        if (is_numeric($registrationNumber)) {
            $sql = "SELECT mark1, mark2, mark3, mark4, mark5,dob,namee FROM iot WHERE reg = ? LIMIT 1";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $registrationNumber);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($row['dob'] == $dateOfBirth) {
                    $tot=$row['mark1']+$row['mark2']+$row['mark3']+$row['mark4']+$row['mark5'];
                        echo "<thead><tr><th>Registration Number : $registrationNumber </th><th >Student Name: ". $row['namee'] ."</th><th >Batch- 2027</th></tr><tr><th >Subject Code</th><th >Subject Title</th><th >Mark Obtained</th><th >Total Mark</th><th >Percentage</th></tr></thead>";
                        echo "<tr><td>HS8151</td><td>Communicative English </td><td>" . $row['mark1'] . "</td><td>50</td><td>" . $row['mark1']/50*100 . "%</td></tr><br></div>";
                        echo "<tr><td>MA8151</td><td>Calculus For Engenering </td><td>" . $row['mark3'] . "</td><td>50</td><td>" . $row['mark3']/50*100 . "%</td></tr><br></div>";
                        echo "<tr><td>PH8151</td><td>Applied Physics  </td><td>" . $row['mark4'] . "</td><td>50</td><td>" . $row['mark4']/50*100 . "%</td></tr><br></div>";
                        echo "<tr><td>CY8151</td><td>Engenerring Chemistry  </td><td>" . $row['mark5'] . "</td><td>50</td><td>" . $row['mark5']/50*100 . "%</td></tr><br></div>";
                        echo "<tr><td>GE8151</td><td>Problem Solving C Programming </td><td>" . $row['mark2'] . "</td><td>50</td><td>" . $row['mark2']/50*100 . "%</td></tr><br></div>";
                        echo "<tr><td></td><th>Total Marks Obtained : " . $tot . "</th>";
                        if($row['mark1']>25&&$row['mark2']>25&&$row['mark3']>25&&$row['mark4']>25&&$row['mark5']>25){
                            echo "<th>Result : All Clear</th></tr>";
                        }else{
                            echo "<th>Result : Arrear</th></tr>";
                        }
                } else {
                    echo "<p>Date of Birth does not match for Registration Number $registrationNumber</p>";
                }
            } else {
                echo "<p>No results found for Registration Number $registrationNumber</p>";
            }
            $stmt->close();
        } else {
            echo "<p>Please enter a valid Registration Number and Date of Birth</p>";
        }
    }
    $conn->close();
    ?>
   </tbody>
</table>
<a href="Auth.php" type="button" class="btn btn-success position-absolute bottom-0 start-50 translate-middle-x" >Back</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
</body>
    <style>
        body {
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        }
        .table{
            padding: 20px;
            align-items:center;
            justify-content:center;
            text-align:center;
        }
        @media screen and (max-width: 600px) {
            button {
                font-size: 14px;
            }
        }
        .heo{
            margin :0;
            padding:75px;
        }
    </style>
   