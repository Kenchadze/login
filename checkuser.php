<?php
$s = OCIParse($c, "SELECT USER_LOGIN, USER PASSWORD FROM USERS");
OCIExecute($s, OCI_DEFAULT);

while (OCIFetch($s)) {
    echo ("USER_LOGIN, USER_PASSWORD")
}
// Выполняем commit
OCICommit($c);
// Отключаемся от бд
OCILogoff($c);
?>