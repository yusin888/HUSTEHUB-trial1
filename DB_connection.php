<?php

$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "E:\Jkuat units\units 3.2\Commercial Programming\hustehub-server_hustehub-database.pbids", NULL, NULL);
mysqli_real_connect($conn, "hustehub-server.mysql.database.azure.com", "kuiapqspwm", "7072HBLJ0AE1SU86$", "hustehub-database", 3306, MYSQLI_CLIENT_SSL);
?>
