<?php

  function writeToJson_approval() 
  {
    echo " hello_boss ";
    if(file_exists('approved.json'))  
      {   

        $current_data = file_get_contents('approved.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
          'name'               =>     $_POST['name'],  
          'phone_number'               =>     $_POST['phone_number'],
          'e-mail'          =>     $_POST["email"],  
          'username'     =>     $_POST["username"],  
          'gender'     =>     $_POST["gender"],  
          'dob'     =>     $_POST["dob"] ,
          'visiting_date'     =>     $_POST["visiting_date"],
          'visiting_time'     =>     $_POST["visiting_time"] ,
          'visiting_hospital'     =>     $_POST["visiting_hospital"] 
      );  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        if(file_put_contents('approved.json', $final_data))  
        {  
          echo "Information Updated Successfully";
        } 
      } 
      else  
      {  
        echo "JSON File not exits";  
      }
  }

function readFromJason($file) 
  {
    $data = file_get_contents($file);
    $data = json_decode($data, true);
    return $data;
  }
  writeToJson_approval() ;

?>