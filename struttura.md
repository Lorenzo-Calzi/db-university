# Database University:

## (table) Dipartimenti:

- id                            BIGINT PRIMARY KEY UNIQUE NOTNULL INDEX
- nome_del_dipartimento         VARCHAR(50) NOTNULL INDEX                          <!-- DIPARTIMENTO DI SCIENZE UMANE -->
- categorie                     VARCHAR(30) NOTNULL INDEX                          <!-- laurea triennale/magistrale -->
- nome_del_direttore            VARCHAR(30) NOTNULL                                <!-- Maria -->
- cognome_del_direttore         VARCHAR(30) NOTNULL                                <!-- Grazia -->


## Corsi di laurea:

- id                            BIGINT PRIMARY KEY UNIQUE NOTNULL INDEX
- nome_del_corso_di_studio      VARCHAR(50) NOTNULL INDEX                           <!-- BIOTECNOLOGIE -->
- livello                       VARCHAR(30) NOTNULL                                 <!-- laurea/master -->
- numero_di_prove               TINYINT NULL NOTNULL                                <!-- 20 -->
- anno_accademico               VARCHAR(30) NOTNULL INDEX                           <!-- 2020/2021 -->
- posti disp.                   MEDIUMINT NOTNULL                                   <!-- 670 -->
- durata_in_anni                TINYINT NULL NOTNULL                                <!-- 3 -->
- sede                          VARCHAR(30) NOTNULL INDEX                           <!-- milano -->
- lingua                        VARCHAR(30) NOTNULL                                 <!-- italiano -->
- crediti                       SMALL NOTNULL                                       <!-- 180 -->


## Corsi: 

- id                            BIGINT PRIMARY KEY UNIQUE NOTNULL INDEX
- nome_del_corso                VARCHAR(50) NOTNULL INDEX                           <!-- Sciende dell'educazione -->
- Area                          VARCHAR(30) NULL                                    <!-- Formazione -->
- cfu                           TINYINT NULL NOTNULL                                <!-- 8 -->
- dipartimento                  VARCHAR(50) NULL INDEX                              <!-- DIPARTIMENTO DI SCIENZE UMANE -->
- categoria                     VARCHAR(30) NULL                                    <!-- Laurea triennale -->
- descrizione                   TEXT NULL                                           <!-- text.. -->

## Insegnanti:

- id                            BIGINT PRIMARY KEY UNIQUE NOTNULL INDEX
- nome                          VARCHAR(30) NOTNULL                                 <!-- Mario -->
- cognome                       VARCHAR(30) NOTNULL INDEX                           <!-- Rossi -->
- email                         VARCHAR(50) NOTNULL                                 <!-- prova@example.com -->
- telefono                      INT NULL                                            <!-- 349 xxxxxx -->
- stanza                        TEXT NOTNULL                                        <!-- Piano: P04, Stanza: 4154 -->
- materie                       VARCHAR(30) NOTNULL                                 <!-- Fisica/Matematica -->
- gerarchia                     VARCHAR(30) NULL                                    <!-- prof ordinario / associati -->
- corsi_tenuti(SSD)             VARCHAR(50) NULL INDEX                              <!-- PEDAGOGIA GENERALE E SOCIALE-->                  


## Appelli

- id                            BIGINT PRIMARY KEY UNIQUE NOTNULL INDEX
- data                          VARCHAR(30) NOTNULL INDEX                           <!-- 05/07/2021 -->
- tentativi                     TINYINT NULL NOTNULL                                <!-- 2/4 -->
- scadenza                      VARCHAR(30) NOTNULL                                 <!-- 12/2021 -->
- corso_di_studio               VARCHAR(30) NULL                                    <!-- Sciende dell'educazione -->
- docente                       VARCHAR(30) NULL                                    <!-- Rossi -->
- voto                          TINYINT NULL NOTNULL                                <!-- 30 -->


## Studente

- id                            BIGINT PRIMARY KEY UNIQUE NOTNULL INDEX
- nome                          VARCHAR(30) NOTNULL                                 <!-- Lorenzo -->
- cognome                       VARCHAR(30) NOTNULL                                 <!-- Calzi -->
- codice_fiscale                CHAR(16) NOTNULL                                    <!-- ABCD1234 -->
- n.matricola                   VARCHAR(30) NOTNULL                                 <!-- XXXXXXX -->
- anno_di_immatricolazione      VARCHAR(30) NOTNULL                                 <!-- 2019/2020 -->
- anno_universitario            VARCHAR(30) NOTNULL                                 <!-- in corso/fuori corso -->
- esami_conseguiti              TINYINT NULL NOTNULL                                <!-- 30 -->
- media_voto                    TINYINT NULL NOTNULL                                <!-- 27 -->
- crediti                       SMALL NOTNULL                                       <!-- 180 -->      


## Voto

- 




