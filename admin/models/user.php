<?php

if (!function_exists('checkUniqueEmail')) {
    // Nếu không trùng thì trả về true
    // Nếu trung thì trả về false
    function checkUniqueEmail($tableName, $email)
    {
        try {

            $sql = "SELECT * FROM $tableName WHERE email = :email LIMIT 1";

            $stmt = $GLOBALS['connect']->prepare($sql);

            $stmt->bindParam(":email", $email);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('checkUniqueEmailForUpdate')) {
    // Nếu không trùng thì trả về true
    // Nếu trung thì trả về false
    function checkUniqueEmailForUpdate($tableName, $id, $email)
    {
        try {

            $sql = "SELECT * FROM $tableName WHERE email = :email AND id <> :id LIMIT 1";

            $stmt = $GLOBALS['connect']->prepare($sql);

            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":id", $id);


            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('getUserAdminByEmailAndPassword')) {
    function getUserAdminByEmailAndPassword($email, $password)
    {
        try {
            $sql = "SELECT * FROM users WHERE email = :email AND password = :password AND role = 1 LIMIT 1";

            $stmt = $GLOBALS['connect']->prepare($sql);

            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        };
    }
}
// if (!function_exists('getUserByEmailAndPassword')) {
//     function getUserByEmailAndPassword($email, $password)
//     {
//         try {
//             $sql = "SELECT * FROM users WHERE email = :email AND password = :password LIMIT 1";

//             $stmt = $GLOBALS['connect']->prepare($sql);

//             $stmt->bindParam(":email", $email);
//             $stmt->bindParam(":password", $password);

//             $stmt->execute();

//             return $stmt->fetch();
//         } catch (\Exception $e) {
//             debug($e);
//         }
//     }
// }
