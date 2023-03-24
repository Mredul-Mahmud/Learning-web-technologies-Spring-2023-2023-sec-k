<?php 
    session_start();
    
    if(isset($_REQUEST['submit'])){
    
        $Favpa = $_REQUEST['FavPa'];
        $pafavno = $_REQUEST['pafavno'];

       
        

        

        if($Favpa == "" && $pafavno== "" ){
            echo "Please enter the patient name & appointment serial number";
        }else{
            $file = fopen("Pa_favorites.txt", "a");
            $data = $Favpa."|".$pafavno." \r\n";
            fwrite($file, $data);
            fclose($file);
            echo "Person Added";
        }
    }else{
        echo "Something went wrong. Try again";
    }
?>