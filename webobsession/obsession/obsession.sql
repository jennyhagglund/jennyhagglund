DROP TABLE IF EXISTS BOOKING;


CREATE TABLE BOOKING
(
BOOKID INTEGER PRIMARY KEY,
FIRSTNAME varchar(64),
LASTNAME varchar(64),
EMAIL varchar(64),
DAY varchar(16),
MONTH varchar(16),
TIME varchar(16)
);

INSERT INTO BOOKING (FIRSTNAME, LASTNAME, EMAIL, DAY, MONTH, TIME) 
VALUES ('Johanna', 'Smith', 'johannasmith@live.se', '18', '6', '3pm'),
('Frida', 'Kmeid', 'frida9898@live.se', '12', '7', '1pm'),
('Jenny', 'Hagglund', 'jenny.hagglund99@live.se', '7', '8', '11am');

