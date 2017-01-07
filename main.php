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
  pd($SmartForm);
  ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2><?php echo $SmartForm['Title']; ?></h2>
        <?php echo $SmartForm['Description']; ?>
      </div>
    </div>
    <div class="row">
      
    <?php
    $Columns = explode(',',$SmartForm['ReadFields'].','.$SmartForm['WriteFields']);
    foreach($Columns as $Column){
      if($Column==''){continue;}
    ?>
    
      <div class="col-xs-12 col-sm-2 col-md-2">
        <?php echo $Column; ?>:
      </div>
      <div class="col-xs-12 col-sm-10 col-md-4">
        <input type="text" class="form-control">
      </div>
    
    <?php
    }
    ?>
      
    </div>
  </div>
  <?php
  
  //understand the types and display them as relevant
  
  //option at top for editing values
  //use the correct types when editing
  //validate data types on submit. sanitize and handle database updates
  exit;
}
