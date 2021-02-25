<?php

    session_start();
    include "connect.php";
    $select="SELECT * FROM USERS WHERE USER_LOGIN='$login'AND PASSWORD='$password'";
    $check_user = oci_parse($c,$select);
    OCIExecute($check_user, OCI_DEFAULT);
    $row=oci_fetch_array($check_user, OCI_ASSOC);
?>
