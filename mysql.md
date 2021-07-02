
1.  SELECT * 
    FROM `students` 
    WHERE YEAR(`date_of_birth`) = 1990


2.  SELECT *
    FROM `courses` 
    WHERE `cfu` > 10


3.  SELECT * 
    FROM `students` 
    WHERE 2021 - YEAR(`date_of_birth`) > 30

3b. SELECT * 
    FROM `students` 
    WHERE DATEDIFF(CURRENT_DATE, `date_of_birth`) > 11323
    

4.  SELECT * 
    FROM `courses` 
    WHERE `period` = "I semestre" AND `year` = 1


5.  SELECT * 
    FROM `exams` 
    WHERE TIME(`hour`) >= "14:00:00" AND DATE(`date`) = "2020-06-20"


6.  SELECT * 
    FROM `degrees` 
    WHERE `level` = "magistrale"


7.  SELECT COUNT(`id`)
    AS `NumberOfId`
    FROM `departments`


8.  SELECT COUNT(`id`)
    FROM `teachers`
    WHERE `phone` IS NULL