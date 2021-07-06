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
    echo 'Connection successful! Go';
}


# 4.
$statement = $connection->prepare("INSERT INTO `students` (`name`,`surname`, `date_of_birth`)");
$statement->bind_param("iss", $name, $surname, $date_of_birth);
$name = "Lorenzo";
$surname = "Calzi";
$date_of_birth = "23-09-199";
$statement->execute();
var_dump($statement); 


# 5.
$sql = "SELECT * FROM `students` WHERE YEAR(`date_of_birth`) = 1999";
$results = $connection->query($sql);
/* var_dump($results); */

if($results && $results->num_rows > 0) {
    while($row = $results->fetch_assoc()) {
    ?>   
        <div>
            <div style="display: flex; align-items: center;">
                <h4> <?php echo "Studente: "?> <h3> <?php echo $row['name'] . " " . $row['surname'];?> </h3> </h4>
            </div>

            <p> <?php echo "Nato il: " . $row['date_of_birth'];?> </p>
            <p> <?php echo "Iscritto il: " . $row['enrolment_date']; ?> </p>
        </div> 
        
    <?php
    }
} elseif($results) {
    ?>
    <h2> <?php echo "0 Results"; ?> </h2>
    <?php
} else {
    ?>
    <h2> <?php  echo "Query error"; ?> </h2>
    <?php
}


# 6.
$connection->close();

?>
