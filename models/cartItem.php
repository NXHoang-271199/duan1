<?php

// function updateQuantityByCartIDAndProductID($cartID, $productID, $quantity){
//     try {
//         $sql = "
//         UPDATE cart_items 
//         SET quantity = :quantity 
//         WHERE cart_id = :cart_id 
//         AND product_id  = :product_id ";
        
//         $stmt = $GLOBALS['connect']->prepare($sql);

//         $stmt->bindParam(":quantity", $quantity);
//         $stmt->bindParam(":cart_id", $cartID);
//         $stmt->bindParam(":product_id", $productID);

//         $stmt->execute();
//     } catch (\Exception $e) {
//         debug($e);
//     }
// }

// function deleteCartItemByCartIDAndProductID($cartID, $productID){
//     try {
//         $sql = "
//         DELETE FROM cart_items 
//         WHERE 
//             cart_id = :cart_id 
//         AND 
//             product_id  = :product_id ";
        
//         $stmt = $GLOBALS['connect']->prepare($sql);

//         $stmt->bindParam(":cart_id", $cartID);
//         $stmt->bindParam(":product_id", $productID);

//         $stmt->execute();
//     } catch (\Exception $e) {
//         debug($e);
//     }
// }

function deleteCartItemByCartID($cartID){
    try {
        $sql = "
        DELETE FROM cart_items 
        WHERE 
            cart_id = :cart_id 
         ";
        
        $stmt = $GLOBALS['connect']->prepare($sql);

        $stmt->bindParam(":cart_id", $cartID);

        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function updateQuantityByCartIDAndProductIDAndSizeID($cartID, $productID, $sizeID, $quantity){
    try {
        $sql = "
        UPDATE cart_items 
        SET quantity = :quantity 
        WHERE cart_id = :cart_id 
        AND product_id  = :product_id
        AND size_id = :size_id";
        
        $stmt = $GLOBALS['connect']->prepare($sql);

        $stmt->bindParam(":quantity", $quantity);
        $stmt->bindParam(":cart_id", $cartID);
        $stmt->bindParam(":product_id", $productID);
        $stmt->bindParam(":size_id", $sizeID);

        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}


function deleteCartItemByCartIDAndProductIDAndSizeID($cartID, $productID, $sizeID){
    try {
        $sql = "
        DELETE FROM cart_items 
        WHERE 
            cart_id = :cart_id 
        AND 
            product_id  = :product_id
        AND
            size_id = :size_id";
        
        $stmt = $GLOBALS['connect']->prepare($sql);

        $stmt->bindParam(":cart_id", $cartID);
        $stmt->bindParam(":product_id", $productID);
        $stmt->bindParam(":size_id", $sizeID);

        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}



