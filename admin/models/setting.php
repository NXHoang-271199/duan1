<?php
if (!function_exists('settingUpdateByKey')) {
    function settingUpdateByKey($key, $data)
    {
        try {
            $setParams = get_set_params($data);
            $sql = "UPDATE settings SET $setParams WHERE `key` = :key";

            $stmt = $GLOBALS['connect']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->bindParam(":key", $key);
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
