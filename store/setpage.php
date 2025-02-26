<?php
session_start();

?>



<?php

$_SESSION['disabled'] = $_GET['ser'];

echo $_SESSION['disabled'];

?>