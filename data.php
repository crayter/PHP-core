<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['check_list'])) {

        $checked_count = count($_POST['check_list']);
        $name = $_POST['username'];

        if ($checked_count < 2) {
            echo $name . " 's favourite colors is " . $checked_count . "<br/>";
            foreach ($_POST['check_list'] as $selected) {
                echo "<p>" . $selected . "</p>";
            }
        } else {
            echo $name . " 's favourite colors are " . $checked_count . "<br/>";
            foreach ($_POST['check_list'] as $selected) {
                echo "<p>" . $selected . "</p>";
            }
        }
    } else {
        echo "<b>Please Select Atleast One Option.</b>";
    }
}