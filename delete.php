<?php

include("includes/functions.php");

deleteData("clients", $_GET["id"]);
header("location: hiddenIndex.php");

?>