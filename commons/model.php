<?php

// CRUD -> Create/Read(Danh sách/ Chi tiết)/Update?Delete

if (!function_exists('get_str_keys')) {
    function get_str_keys($data)
    {
        $keys = array_keys($data);

        $keysTenTen = array_map(function ($key) {
            return "`$key`";
        }, $keys);

        return implode(',', $keysTenTen);
        // return implode(',', array_keys($data));
    }
}

if (!function_exists('get_virtual_params')) {
    function get_virtual_params($data)
    {
        $keys = array_keys($data);

        $tmp = [];
        foreach ($keys as $key) {
            $tmp[] = ":$key";
        }
        return implode(',', $tmp);
    }
}
if (!function_exists('get_set_params')) {
    function get_set_params($data)
    {
        $keys = array_keys($data);

        $tmp = [];
        foreach ($keys as $key) {
            $tmp[] = "`$key` = :$key";
        }
        return implode(',', $tmp);
    }
}

// Insert
if (!function_exists('insert')) {
    function insert($tableName, $data = [])
    {
        try {

            $strKeys = get_str_keys($data);
            $virtualParams = get_virtual_params($data);

            $sql = "INSERT INTO $tableName ($strKeys) VALUES ($virtualParams)";

            $stmt = $GLOBALS['connect']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                // debug([":$fieldName", $value]);
                $stmt->bindParam(":$fieldName", $value);
            }
            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// List all
if (!function_exists('listAll')) {
    function listAll($tableName)
    {
        try {

            $sql = "SELECT * FROM $tableName ORDER BY id DESC";

            $stmt = $GLOBALS['connect']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Show one
if (!function_exists('showOnes')) {
    function showOne($tableName, $id)
    {
        try {

            $sql = "SELECT * FROM $tableName WHERE id = :id LIMIT 1";

            $stmt = $GLOBALS['connect']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Update
if (!function_exists('update')) {
    function update($tableName, $id, $data = [])
    {
        try {
            $setParams = get_set_params($data);

            $sql = "UPDATE $tableName SET $setParams WHERE id = :id";

            $stmt = $GLOBALS['connect']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->bindParam(":id", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Delete
if (!function_exists('deleteAcc')) {
    function deleteAcc($tableName, $id)
    {
        try {
            $sql = "DELETE FROM $tableName WHERE id = :id";

            $stmt = $GLOBALS['connect']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


if (!function_exists('checkUniqueName')) {
    // Nếu không trùng thì trả về true
    // Nếu trung thì trả về false
    function checkUniqueName($tableName, $name)
    {
        try {

            $sql = "SELECT * FROM $tableName WHERE name = :name LIMIT 1";

            $stmt = $GLOBALS['connect']->prepare($sql);

            $stmt->bindParam(":name", $name);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('checkUniqueNameForUpdate')) {
    // Nếu không trùng thì trả về true
    // Nếu trung thì trả về false
    function checkUniqueNameForUpdate($tableName, $id, $name)
    {
        try {

            $sql = "SELECT * FROM $tableName WHERE name = :name AND id <> :id LIMIT 1";

            $stmt = $GLOBALS['connect']->prepare($sql);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":id", $id);


            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// get last id
if (!function_exists('insert_get_last_id')) {

    function insert_get_last_id($tableName, $data = [])
    {
        try {

            $strKeys = get_str_keys($data);
            $virtualParams = get_virtual_params($data);

            $sql = "INSERT INTO $tableName($strKeys) VALUES ($virtualParams)";

            $stmt = $GLOBALS['connect']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->execute();

            return $GLOBALS['connect']->lastInsertId();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
