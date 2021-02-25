<?php
if ($c = OCILogon("ILYA", "1234", "localhost/XE")) {
} else {
    $err = OCIError();
    echo "Oracle Connect Error " . $err['message'];
}
?>