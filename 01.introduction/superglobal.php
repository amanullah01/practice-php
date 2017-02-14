<?php
    echo "<pre>";
    echo $_SERVER['HTTP_USER_AGENT'];
    print_r($_SERVER);

    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    ?>
    <h3>strpos() must have returned non-false</h3>
    <p>You are using Internet Explorer</p>
    <?php
    } else {
    ?>
    <h3>strpos() must have returned false</h3>
    <p>You are not using Internet Explorer</p>
    <?php
    }
?>
