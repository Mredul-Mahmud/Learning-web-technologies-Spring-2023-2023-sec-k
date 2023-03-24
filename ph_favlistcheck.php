<?php 
    session_start();
    
    if(isset($_REQUEST['submit'])){
    
        $Favph = $_REQUEST['FavPh'];
        $phfavno = $_REQUEST['phfavno'];

       
        

        

        if($Favph == "" && $phfavno== "" ){
            echo "Please enter the Doctor name & Appointment serial number";
        }else{
            $file = fopen("Ph_favorites.txt", "a");
            $data = $Favph."|".$phfavno." \r\n";
            fwrite($file, $data);
            fclose($file);
            echo "Doctor Added";
        }
    }else{
        echo "Something went wrong. Try again";
    }
?>