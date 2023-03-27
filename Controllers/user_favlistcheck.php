<?php 
    session_start();
    require_once "../models/add_model.php";
    
    if(isset($_REQUEST['submit']))
    {
    
        $favname = $_REQUEST['favName'];
        $favid = $_REQUEST['favId'];
        $favorites = $_REQUEST['favorites'];
        

        if($favname == "" && $favid== "" && $favorites== "" )
        {
            echo "Please enter all the details";
        }else{
            $favoritelist = ['favName'=> $favname,'favId'=> $favid, 'favorites'=> $favorites;
            $status = add_model($favoritelist);
            if($status)
            {
                header('location: user_favlist.php');
            echo "Added";
            }
    }
    else
    {
        echo "Something went wrong. Try again";
    }
?>