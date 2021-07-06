<?php

# 1.
define('DB_HOST', 'localhost');
define("DB_USER", 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'university');
define('DB_PORT', '3306');


# 2.
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
/* var_dump($connection); */


# 3.
if ($connection && $connection->connect_error) {
    echo 'Sorry, connection failed! ' . $connection->connect_error;
} else {
    ?>
    <h4 class="message"> <?php echo 'Connection successful! Go 👍';?> </h4>
    <?php
}


# 4.
$statement = $connection->prepare("INSERT INTO `students` (`name`,`surname`, `date_of_birth`,
`degree_id`, `fiscal_code`, `enrolment_date`, `registration_number`, `email`) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
$statement->bind_param("sssissis", $name, $surname, $date_of_birth, $degree_id,
$fiscal_code, $enrolment_date, $registration_number, $email);
$name = "Lorenzo";
$surname = "Calzi";
$date_of_birth = "1999-09-23";
$degree_id = 10;
$fiscal_code = "CLZLNZ99P23A940H";
$enrolment_date = "2018-09-15";
$registration_number = 3451559558;
$email = "lorenzo@gmail.com";
$statement->execute();
/* var_dump($statement);  */


# 5.
$sql = "SELECT * FROM `students` WHERE YEAR(`date_of_birth`) = 1999";
$results = $connection->query($sql);
/* var_dump($results); */

if($results && $results->num_rows > 0) {
    while($row = $results->fetch_assoc()) {
    ?>   
        <div class="container">
            <div class="user">
                <div>
                    <h3> <?php echo " " . $row['name'] . " " . $row['surname'];?> </h3>
                </div>

                <p> <?php echo "Nato il: " . $row['date_of_birth'];?> </p>
                <p> <?php echo "Codice fiscale: " . $row['fiscal_code'];?> </p>
                <p> <?php echo "Iscritto il: " . $row['enrolment_date']; ?> </p>
                <p> <?php echo "Email: " . $row['email']; ?> </p>
            </div> 
        </div>
        
        
    <?php
    }
} elseif($results) {
    ?>
    <h2> <?php echo "No Results 😅"; ?> </h2>
    <?php
} else {
    ?>
    <h2> <?php  echo "Query error 🤷‍♂️"; ?> </h2>
    <?php
}


# 6.
$connection->close();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500&display=swap" rel="stylesheet">
    <!-- Link CSS -->
    <link rel="stylesheet" href="./style.css">
    <!-- Title -->
    <title>University</title>
</head>
<body>
    
</body>
</html>
