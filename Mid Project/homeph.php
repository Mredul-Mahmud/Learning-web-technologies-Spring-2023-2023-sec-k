<?php 
    session_start();

?>

    <html lang="en">
        <head>
        <title>Home Page </title>
        </head>
        <form align = center>
            <h1>Welcome Home Doctor!</h1><br><br>
            <h2>How can we help you?</h2><br><br>

            
            

                <h1>Report us</h1>
            <ul>
                <li><a href="ph_report.php">Click here to report your problem</a></li>
                </ul>
                <h1>Manage your favorites</h1>
            <ul>
            <li><a href="pa_favapp.php">Favourite Appointments</a></li><br>
                <li><a href="ph_favlist.php">Favourite Patient</a></li> <br><br>
                
                </ul>
            <h1>Searches </h1>
            <ul>
                <li><a href="ph_search.php">Search Patients</a></li><br><br>

                
            </ul>
            <h1>Search Appointments </h1>
            <ul>
                <li><a href="appointmentsearch.php">Search for appointments</a></li><br>
                
                
            </ul>
            <button><a href="Ph_login.php">Logout</a></button>
</form>
    </html>

