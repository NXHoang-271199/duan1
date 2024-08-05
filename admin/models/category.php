<?php

// if (!function_exists('checkUniqueCateName')) {
//     // Nếu không trùng thì trả về true
//     // Nếu trung thì trả về false
//     function checkUniqueCateName($tableName, $catename)
//     {
//         try {

//             $sql = "SELECT * FROM $tableName WHERE catename = :catename LIMIT 1";

//             $stmt = $GLOBALS['connect']->prepare($sql);

//             $stmt->bindParam(":catename", $catename);

//             $stmt->execute();

//             $data = $stmt->fetch();

//             return empty($data) ? true : false;
//         } catch (\Exception $e) {
//             debug($e);
//         }
//     }
// }

// if (!function_exists('checkUniqueCateNameForUpdate')) {
//     // Nếu không trùng thì trả về true
//     // Nếu trung thì trả về false
//     function checkUniqueCateNameForUpdate($tableName, $id, $catename)
//     {
//         try {

//             $sql = "SELECT * FROM $tableName WHERE catename = :catename AND id <> :id LIMIT 1";

//             $stmt = $GLOBALS['connect']->prepare($sql);

//             $stmt->bindParam(":catename", $catename);
//             $stmt->bindParam(":id", $id);


//             $stmt->execute();

//             $data = $stmt->fetch();

//             return empty($data) ? true : false;
//         } catch (\Exception $e) {
//             debug($e);
//         }
//     }
// }
