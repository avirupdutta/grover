<?php
session_start();
session_destroy();

header("Location: ../../views/templates/index.php");

