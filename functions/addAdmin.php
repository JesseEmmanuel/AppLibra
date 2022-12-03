<?php
 $admin_uname = 'admin';
 $admin_pword = password_hash('pa55', PASSWORD_DEFAULT);
 $admin_role = "Admin";

 $mysqli = require __DIR__ . "/conn.php";

 $admin = "INSERT INTO tblaccounts (accountUserName, accountPassWord, accountRole)
           Values (?, ?, ?)";
 $stmt = $mysqli->stmt_init();
 $stmt->prepare($admin);
 $stmt->bind_param("sss",
                   $admin_uname,
                   $admin_pword,
                   $admin_role);
 $stmt->execute();
 header("Location: http://".$_SERVER['HTTP_HOST']."/AppLibra/index.php");
?>