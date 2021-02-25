<?php
if ($c = OCILogon("ILYA", "1234", "localhost/XE")) {
    echo "Successfully connected to Oracle.\n";
} else {
    $err = OCIError();
    echo "Oracle Connect Error " . $err['message'];
}
?>