<?php

   class MyDB extends SQLite3
   {
      function __construct()
      {
            $this->open('obsession.db');
      }
   }

   function getBooking($searchTerm = null) {
      
      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }
      if(!$searchTerm) {
         $sql ='SELECT * from BOOKING;';
      } else {
         $sql ='SELECT * FROM BOOKING WHERE FIRSTNAME LIKE "'.$searchTerm.'" OR LASTNAME LIKE "'.$searchTerm.'" OR EMAIL LIKE "'.$searchTerm.'" OR DAY LIKE "'.$searchTerm.'" OR MONTH LIKE "'.$searchTerm.'" OR TIME LIKE "'.$searchTerm.'";';
      }
      $ret = $db->query($sql);
      $array = [];
      if(!$ret){
        echo $db->lastErrorMsg();
        return [];
      } else {
         while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $array[] = $row;
         }
         $db->close();
         return $array;
      }
   }
   
   
   function addBooking($fname, $lname, $email, $day, $month, $time) {
      
      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }

      $sql ='INSERT INTO BOOKING (FIRSTNAME, LASTNAME, EMAIL, DAY, MONTH, TIME) VALUES ("'.$fname.'", "'.$lname.'", "'.$email.'", "'.$day.'", "'.$month.'", "'.$time.'");';
      $db->query($sql);
   }
   
   
      
?>