<?php

$s = OCIParse($c, "INSERT INTO USERS VALUES (3, 'kolya',123)");
OCIExecute($s);
echo $c;
OCICommit($c);
?>