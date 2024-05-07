<?php

    $connect = mysqli_connect(
    'db',
    'fouad', 
    'password', 
    'team_data'
    );


    $query = "SELECT student_ID, First_Name, Age, CGPA FROM students";
    $result = mysqli_query($connect, $query);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Student Data</title>
    <link rel="stylesheet" href="css.css">
     <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .student {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 10px;
        }

        .student h4 {
            margin-top: 0;
            color: #007bff;
        }

        .student p {
            margin: 5px 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Students Data:</h1>
        <?php
        if (empty($result)) {
            echo "<div>";
            echo "<p>There is no data</p>";
            echo "</div>";
        } else {
            foreach ($result as $row) {
                echo "<div class='student'>";
                echo "<h4>ID: " . (isset($row['student_ID']) ? htmlspecialchars($row['student_ID']) : "N/A") . "</h4>";
                echo "<p>Name: " . (isset($row['First_Name']) ? htmlspecialchars($row['First_Name']) : "N/A") . "</p>";
                echo "<p>Age: " . (isset($row['Age']) ? htmlspecialchars($row['Age']) : "N/A") . "</p>";
                echo "<p>CGPA: " . (isset($row['CGPA']) ? htmlspecialchars($row['CGPA']) : "N/A") . "</p>";
                echo "</div>";
                echo "<hr>";
            }
        }
        ?>
    </div>

    <div class="form-container">
        <button onclick="location.href='index.php'" class="option-btn">Return to Home Page</button>
    </div>

    <script src="js.js"></script>
</body>
</html>
