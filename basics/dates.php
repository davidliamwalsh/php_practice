<?php

  //echo date('d'); //day
  //echo date('m'); //month
  //echo date('y'); //year
  //echo date('1'); //day of the week

  //echo date('h'); //hour
  //echo date('i'); //min
  //echo date('s'); //seconds
  //echo date('a'); //AM or PM

  //echo date('d/m/Y');

  date_default_timezone_set('Europe/London');
  
  //echo date('h:i:sa');

  $timestamp1 = mktime(10, 14, 54, 12, 26, 1979);
  $timestamp2 = strtotime('7:00pm July 22 2020');
  $timestamp3 = strtotime('tomorrow');
  $timestamp4 = strtotime('yesterday');
  $timestamp5 = strtotime('+7 days');
  $timestamp6 = strtotime('next Sunday');

  //echo date('d/m/Y', $timestamp1);

  echo date('d/m/Y h:i:sa', $timestamp6);

?>