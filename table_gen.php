<?php  
    // Get row and column count from URL parameters
    $row_count = $_GET['row_num'];
    $col_count = $_GET['col_num'];
    $gender = $_GET['gender'];
    $dept = $_GET['dept'];
    $msg = $_GET['message'];
   

    // Display the table size
    echo '表格大小: ' . $row_count  . ' 列, ' . $col_count . ' 行.<br><br>'; 
    echo '性別: ' . $gender . ".";
    echo '科系' . $dept .'.';
    echo '留言' . $msg ;
  

    // Start the table
    echo '<table border="1" cellpadding="5" cellspacing="0">';

    // Loop to create rows
    for ($i = 1; $i <= $row_count; $i++) {
        echo '<tr>';
        
        // Loop to create columns
        for ($j = 1; $j <= $col_count; $j++) {
            echo '<td>Row ' . $i . ', Col ' . $j . '</td>';
        }
        
        echo '</tr>';
    }

    // End the table
    echo '</table>';
?>
