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