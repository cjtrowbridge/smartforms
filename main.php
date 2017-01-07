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
  <style>
    .smartfield_edit_button,
    .smartform_edit{
      display: none;
    }
    h2:hover .smartfield_edit_button{
      display: inline;
    }
  </style>
  <script>
    function SmartFormsToggleEditability(smartform){
      smartform.parent().parent().parent().parent().css('border','1px solid #000');
    }
  </script>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2><?php echo $SmartForm['Title']; ?> <span class="smartfield_edit_button"><a href="javascript:void(0);" onclick="SmartFormsToggleEditability($(this));"><i class="material-icons" title="Edit">mode_edit</i></a></span></h2>
        <p><?php echo $SmartForm['Description']; ?></p>
      </div>
    </div>
    <div class="row">
      
    <?php
    foreach(explode(',',$SmartForm['WriteFields']) as $WriteField){
      if($WriteField==''){continue;}
    ?>
    
      <div class="col-xs-12 col-sm-2 col-md-2">
        <div style="text-align: right;">
          <?php echo $WriteField; ?>:
        </div>
      </div>
      <div class="col-xs-12 col-sm-10 col-md-4">
        
        <span class="smartform_read">value</span>
        <input type="text" class="form-control smartform_edit">
        
      </div>
    
    <?php
    }
    foreach(explode(',',$SmartForm['ReadFields']) as $ReadField){
      if($ReadField==''){continue;}
    ?>
    
      <div class="col-xs-12 col-sm-2 col-md-2">
        <div style="text-align: right;">
          <?php echo $ReadField; ?>:
        </div>
      </div>
      <div class="col-xs-12 col-sm-10 col-md-4">
        value
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
