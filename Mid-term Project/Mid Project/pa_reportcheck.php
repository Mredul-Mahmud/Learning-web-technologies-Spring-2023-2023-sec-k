<?php 
    session_start();
    
    if(isset($_REQUEST['submit'])){
    
        $Pa_name = $_REQUEST['paname'];
        $Pa_report = $_REQUEST['pareport'];
       
       
        

        

        if($Pa_name == "" && $Pa_report ==""){
            echo "Please enter something";
        }else{
            $file = fopen("pa_report.txt", "a");
            $data = $Pa_name."|".$Pa_report." \r\n";
            fwrite($file, $data);
            fclose($file);
            echo "Thank you. We will try solve his problem.";
        }
    }else{
        echo "Something went wrong. Try again";
    }
?>