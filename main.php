<?php

function SmartForm($formName){
  if(!(ctype_alnum($formName))){
    die('Invalid SmartForm Name: '.$formName);
  }
  $SmartForm = MySQL2Arr("SELECT * FROM SmartForms WHERE Name LIKE '".mysql_real_escape_string($formName)."' LIMIT 1");
  if(!(isset($SmartForm[0]))){
    die('SmartForm '.$formName.' not found!');
  }
  $SmartForm=$SmartForm[0];
  
  //default to reading the specified rows
  //understand the types and display them as relevant
  
  //option at top for editing values
  //use the correct types when editing
  //validate data types on submit. sanitize and handle database updates
  
}
