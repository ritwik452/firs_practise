<?php
session_start();

if (isset($_POST['destroy'])) {
    session_unset();
    session_destroy();
    echo "Session destroy";
}
?>

<form method="post">
    <button type="submit" name="destroy">Destroy Session</button>
</form>
