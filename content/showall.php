<h2>All Results</h2>

<?php

$find_sql= "SELECT * FROM `quote_table` JOIN author_table ON (`author_table`.`Author_ID` = `quote_table`.`Author_ID`)";

$find_query = mysqli_query($conn, $find_sql);
$find_rs = mysqli_fetch_assoc($find_query);

?>