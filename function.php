<?php
    echo '<table border="1">';

    for ($i = 1; $i <= 100; $i++) {

    if ($i % 15 == 0) echo "<tr><td>Item: {$i} Coating Damage and Lightning Strike</td><td>FAILED</td></tr>";
    else if ($i % 3 == 0) echo "<tr><td>Item: {$i} Coating Damage</td><td>FAILED</td></tr>";
    else if ($i % 5 == 0) echo "<tr><td>Item: {$i} Lightning Strike</td><td>FAILED</td></tr>";
    else echo "<tr><td>Item: {$i}</td><td>PASSED</td></tr>";

    }
    echo '</table>';
  ?>
