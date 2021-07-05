<!-- GROUP BY -->

1. Contare quanti iscritti ci sono stati ogni anno:

    SELECT COUNT(`id`) AS "numero_iscritti", YEAR(`enrolment_date`) AS "anno di iscrizione"
    FROM `students`
    GROUP BY YEAR(`enrolment_date`)


2. Contare gli insegnanti che hanno l'ufficio nello stesso edificio:

    SELECT COUNT(`id`) AS "numero_professori", `office_address` AS "Edificio"
    FROM `teachers`
    GROUP BY `office_address`


3. Calcolare la media dei voti di ogni appello d'esame:

    SELECT AVG(`vote`) AS "Media", `exam_id` AS "Appello"
    FROM `exam_student`
    GROUP BY `exam_id`

4. Contare quanti corsi di laurea ci sono per ogni dipartimento:

    SELECT COUNT(`name`) AS "Corso di Laurea", `department_id` AS "Dipartimento"
    FROM `degrees`
    GROUP BY `department_id`



<!-- JOINS -->

1. Selezionare tutti gli studenti iscritti al Corso di Laurea in Economia:

    SELECT `students`.`name`, `students`.`surname`,  `students`.`date_of_birth`, `students`.`email`, `students`.`enrolment_date`, `degrees`.`name`
    FROM `students`
    JOIN `degrees`
    ON `students`.`degree_id` = `degrees`.`id`
    WHERE `degrees`.`name` = "Corso di Laurea in Economia"


2. Selezionare tutti i Corsi di Laurea del Dipartimento di Neuroscienze:

    SELECT `degrees`.`name` AS "Nome del corso di laurea", `degrees`.`level` AS "Livello", `degrees`.`address` AS "Indirizzo"
    FROM `degrees`
    JOIN `departments`
    ON `degrees`.`department_id` = `departments`.`id`
    WHERE `departments`.`name` = "Dipartimento di Neuroscienze"


3. Selezionare tutti i corsi in cui insegna Fulvio Amato (id=44):

    SELECT `courses`.`name` AS "Nome del corso", `courses`.`period` AS "Periodo", `courses`.`cfu` AS "CFU"
    FROM `courses`
    JOIN `teachers`
    ON `courses`.`degree_id` = `teachers`.`id`
    WHERE `teachers`.`id` = 44


4. Selezionare tutti gli studenti con i dati relativi al corso di laurea a cui sono iscritti e il relativo dipartimento, in ordine      alfabetico per cognome e nome

    SELECT `students`.`name` AS "Nome", `students`.`surname` AS "Cognome", `students`.`enrolment_date` AS "Data di iscrizione", `degrees`.`name` AS "Corso", `departments`.`name` AS "Dipartimento"
    FROM `students`
    JOIN `degrees`
    ON `students`.`degree_id` = `degrees`.`id`
    JOIN `departments`
    ON `departments`.`id` =`degrees`.`department_id`
    ORDER BY `students`.`name`, `students`.`surname`


5. Selezionare tutti i corsi di laurea con i relativi corsi e insegnanti:

    SELECT `degrees`.`name` AS "Corso di Laurea", `courses`.`name` AS "Corso", `teachers`.`name` AS "Nome", `teachers`.`surname` AS "Cognome"
    FROM `degrees`
    JOIN `courses`
    ON `degrees`.`id` = `courses`.`degree_id`
    JOIN `course_teacher`
    ON `courses`.`id` = `course_teacher`.`course_id`
    JOIN `teachers`
    ON `course_teacher`.`teacher_id` = `teachers`.`id`


6. Selezionare tutti i docenti che insegnano nel Dipartimento di Matematica:

    SELECT `teachers`.`name` AS "Nome", `teachers`.`surname` AS "Cognome", `teachers`.`email` AS "Email", `teachers`.`office_number` AS "Ufficio", `departments`.`name` AS "Dipartimento"
    FROM `teachers`
    JOIN `course_teacher`
    ON `teachers`.`id` = `course_teacher`.`teacher_id`
    JOIN `courses`
    ON `course_teacher`.`course_id` = `courses`.`id`
    JOIN `degrees`
    ON `courses`.`degree_id` = `degrees`.`id`
    JOIN `departments`
    ON `degrees`.`department_id` = `departments`.`id`
    WHERE `departments`.`name` = "Dipartimento di Matematica"


