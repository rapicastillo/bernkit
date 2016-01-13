<?php
  /* This wuold try to solve the IE problem, by first accessing a website from the outsite and then printing it out here..

Rapi Castillo
*/
  $url = "https://docs.google.com/spreadsheets/d/1T09be8U1qmDF0qJ5QB0xFE4pwikknUpy4MMN6Hrpcb4/export?gid=0&format=csv";
  $content = file_get_contents($url);
//  $data = json_decode($content);

  echo $content;
?>
