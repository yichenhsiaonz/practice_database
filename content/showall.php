<h2>All Results</h2>

<?php

$find_sql= "SELECT * FROM `quote_table` JOIN author_table ON (`author_table`.`Author_ID` = `quote_table`.`Author_ID`)";

$find_query = mysqli_query($conn, $find_sql);
$find_rs = mysqli_fetch_assoc($find_query);

do {

    $quote = preg_replace('/[^A-Za-z0-9.,?\s\'\-]/', ' ', $find_rs['Quote']);
    $author = $find_rs['Author']
?>

<div class="results">
    <?php echo $quote; ?><br />
    <?php echo $author; ?>
</div>

<br />

<?php

}

while($find_rs = mysqli_fetch_assoc($find_query))

?>