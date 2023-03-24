<?php 
    session_start();
?>
<html>
    <head>
        <title>Report</title>
        <body align= center>
        <form method="POST" action="ph_reportcheck.php" enctype="">
            <h1>Report a problem</h1>
            <li>How can we help us?</li>
            Your name: <input type="text" name="phname" value="" /><br><br>
           Write the problem you're facing: <input type="text" name="phreport" value="" /><br><br>
            <input type="submit" name="submit" value="Add" /> <br>
            <a href="homeph.php" target="_blank"> Back</a>

        </body>
    </head>
</html>
