<?php

if(isset($_POST['submit'])) {
    $n = intval($_POST['n']);
    
    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= $n; $j++) {
            if($j == 1 || $j == $n || $i == intval($n/2) + 1) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "&nbsp;&nbsp;";
        for($j = 1; $j <= $n; $j++) {
            if($j == 1 || $j == $n || $i == intval($n/2) + 1) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br/>";
    }
}

?>

<form method="POST">
    <label>Enter a number:</label>
    <input type="number" name="n" min="1" max="10" required>
    <br/>
    <button type="submit" name="submit">Submit</button>
</form>
