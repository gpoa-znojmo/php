CREATE TABLE kniha
(
ID INT NOT NULL AUTO_INCREMENT ,
NICK VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL ,
EMAIL VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NULL ,
WEB VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NULL ,
VZKAZ VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL ,
DATUM VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL ,
PRIMARY KEY (ID)
);
