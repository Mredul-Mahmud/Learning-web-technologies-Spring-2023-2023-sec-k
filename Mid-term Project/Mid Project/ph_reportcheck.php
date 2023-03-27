<?php 
    session_start();
    
    if(isset($_REQUEST['submit'])){
    
        $Ph_name = $_REQUEST['phname'];
        $Ph_report = $_REQUEST['phreport'];
       
       
        

        

        if($Ph_name == "" && $Ph_report ==""){
            echo "Please enter something";
        }else{
            $file = fopen("ph_report.txt", "a");
            $data = $Ph_name."|".$Ph_report." \r\n";
            fwrite($file, $data);
            fclose($file);
            echo "Thank you. We will try solve his problem.";
        }
    }else{
        echo "Something went wrong. Try again";
    }
?>