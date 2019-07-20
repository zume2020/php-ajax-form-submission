<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
try {
    $PDO = new \PDO('mysql:dbname=database_name;host=server_name;port=3306', 'user_id', 'password');
} catch (\PDOException $Exception) {
    echo $Exception->getMessage();
    die;
}

$Prepared = $PDO->prepare('INSERT INTO `formsub` (`name`, `msg`) values (:name, :msg)');
if ($Prepared !== false) {
    $Query = $Prepared->execute([
        'name' => $_POST['Name'],
        'msg' => $_POST['Message']
    ]);
} else {
    $Query = false;
}

echo $Query ? 'Working good' : 'Error';
?>
