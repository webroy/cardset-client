/**
 * STEP 2. 
 * -> Insert example data after the resp-service is running
 * -> If you don't need an example Set, then you can only execute:
 *      INSERT INTO `card_type` VALUES (1,'Kahoot');
 */

-- Go to database
USE `cardset`;

-- Create example category
INSERT INTO `category` VALUES (1,'Elektronik');

-- Create example card type
INSERT INTO `card_type` VALUES (1,'Kahoot');

-- Create example card set
INSERT INTO `card_set` VALUES (1,'Schaltungen',1,1);

-- Create example cards
INSERT INTO `card` VALUES 
(1,'Digital_Grundgatter_01.jpg','PSI-Berufsausbildung','Welche LED leuchtet?',1),
(2,'Digital_Grundgatter_02.jpg','PSI-Berufsausbildung','Welche LED leuchtet?',1),
(3,'Digital_Grundgatter_03.jpg','PSI-Berufsausbildung','Welche LED leuchtet?',1),
(4,'Digital_Grundgatter_04.jpg','PSI-Berufsausbildung','Welche LED leuchtet?',1),
(5,'Diode_01.jpg','PSI-Berufsausbildung','Durch welche LED fliesst der grösste Strom, bzw. welche LED leuchtet am hellsten?',1),
(6,'Diode_02.jpg','PSI-Berufsausbildung','Durch welche LED fliesst der grösste Strom, bzw. welche LED leuchtet am hellsten?',1),
(7,'Diode_03.jpg','PSI-Berufsausbildung','Durch welche LED fliesst der grösste Strom, bzw. welche LED leuchtet am hellsten?',1),
(8,'Diode_04.jpg','PSI-Berufsausbildung','Durch welche LED fliesst der grösste Strom, bzw. welche LED leuchtet am hellsten?',1),
(9,'Stromkreis_Grundschaltung_01.jpg','PSI-Berufsausbildung','Welche LED kann leuchten, bzw. wenn mehrere LEDs leuchten, welche LED leuchtet am hellsten?',1),
(10,'Stromkreis_Grundschaltung_02.jpg','PSI-Berufsausbildung','Welche LED kann leuchten, bzw. wenn mehrere LEDs leuchten, welche LED leuchtet am hellsten?',1),
(11,'Stromkreis_Grundschaltung_03.jpg','PSI-Berufsausbildung','Welche LED kann leuchten, bzw. wenn mehrere LEDs leuchten, welche LED leuchtet am hellsten?',1),
(12,'Stromkreis_Grundschaltung_04.jpg','PSI-Berufsausbildung','Welche LED kann leuchten, bzw. wenn mehrere LEDs leuchten, welche LED leuchtet am hellsten?',1),
(13,'Stromkreis_Junction_01.jpg','PSI-Berufsausbildung','Welche LED kann leuchten, bzw. wenn mehrere LEDs leuchten, welche LED leuchtet am hellsten?',1),
(14,'Stromkreis_Junction_02.jpg','PSI-Berufsausbildung','Welche LED kann leuchten, bzw. wenn mehrere LEDs leuchten, welche LED leuchtet am hellsten?',1),
(15,'Stromkreis_Junction_03.jpg','PSI-Berufsausbildung','Welche LED kann leuchten, bzw. wenn mehrere LEDs leuchten, welche LED leuchtet am hellsten?',1),
(16,'Stromkreis_Junction_04.jpg','PSI-Berufsausbildung','Welche LED kann leuchten, bzw. wenn mehrere LEDs leuchten, welche LED leuchtet am hellsten?',1),
(17,'Widerstand_Grundschaltung_01.jpg','PSI-Berufsausbildung','Welche LED kann leuchten, bzw. wenn mehrere LEDs leuchten, welche LED leuchtet am hellsten?',1),
(18,'Widerstand_Grundschaltung_02.jpg','PSI-Berufsausbildung','Welche LED kann leuchten, bzw. wenn mehrere LEDs leuchten, welche LED leuchtet am hellsten?',1),
(19,'Widerstand_Grundschaltung_03.jpg','PSI-Berufsausbildung','Welche LED kann leuchten, bzw. wenn mehrere LEDs leuchten, welche LED leuchtet am hellsten?',1),
(20,'Widerstand_Grundschaltung_04.jpg','PSI-Berufsausbildung','Welche LED kann leuchten, bzw. wenn mehrere LEDs leuchten, welche LED leuchtet am hellsten?',1);

-- Create example card answer
INSERT INTO `answer` VALUES 
(1,'Rot',0,1),(2,'Grün',0,1),(3,'Blau',1,1),(4,'Gelb',0,1),
(5,'Rot',0,2),(6,'Grün',0,2),(7,'Blau',0,2),(8,'Gelb',1,2),
(9,'Rot',0,3),(10,'Grün',1,3),(11,'Blau',0,3),(12,'Gelb',0,3),
(13,'Rot',1,4),(14,'Grün',0,4),(15,'Blau',0,4),(16,'Gelb',0,4),
(17,'Rot',0,5),(18,'Grün',1,5),(19,'Blau',0,5),(20,'Gelb',0,5),
(21,'Rot',1,6),(22,'Grün',0,6),(23,'Blau',0,6),(24,'Gelb',0,6),
(25,'Rot',0,7),(26,'Grün',0,7),(27,'Blau',1,7),(28,'Gelb',0,7),
(29,'Rot',0,8),(30,'Grün',0,8),(31,'Blau',0,8),(32,'Gelb',1,8),
(33,'Rot',0,9),(34,'Grün',1,9),(35,'Blau',0,9),(36,'Gelb',0,9),
(37,'Rot',1,10),(38,'Grün',0,10),(39,'Blau',0,10),(40,'Gelb',0,10),
(41,'Rot',0,11),(42,'Grün',0,11),(43,'Blau',0,11),(44,'Gelb',1,11),
(45,'Rot',0,12),(46,'Grün',0,12),(47,'Blau',0,12),(48,'Gelb',1,12),
(49,'Rot',0,13),(50,'Grün',0,13),(51,'Blau',0,13),(52,'Gelb',1,13),
(53,'Rot',0,14),(54,'Grün',1,14),(55,'Blau',0,14),(56,'Gelb',0,14),
(57,'Rot',1,15),(58,'Grün',0,15),(59,'Blau',0,15),(60,'Gelb',0,15),
(61,'Rot',0,16),(62,'Grün',0,16),(63,'Blau',1,16),(64,'Gelb',0,16),
(65,'Rot',0,17),(66,'Grün',0,17),(67,'Blau',1,17),(68,'Gelb',0,17),
(69,'Rot',0,18),(70,'Grün',0,18),(71,'Blau',0,18),(72,'Gelb',1,18),
(73,'Rot',1,19),(74,'Grün',0,19),(75,'Blau',0,19),(76,'Gelb',0,19),
(77,'Rot',0,20),(78,'Grün',1,20),(79,'Blau',0,20),(80,'Gelb',0,20);
