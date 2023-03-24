<?php 
    session_start();
    
    if(isset($_REQUEST['submit'])){
    
        $appno = $_REQUEST['PhFavAppointment'];
       
        

        

        if($appno == "" ){
            echo "Please enter the appointment serial number";
        }else{
            $file = fopen("Ph_favappointment.txt", "a");
            $data = $appno." \r\n";
            fwrite($file, $data);
            fclose($file);
            echo "Appointment Added";
        }
    }else{
        echo "Something went wrong. Try again";
    }
?>