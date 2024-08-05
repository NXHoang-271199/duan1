<?php

if(!function_exists("listAllForCart")){
    function listAllForCart()
    {
        try {
            $sql = "
            SELECT 
            ci.id as ci_id,
            ci.cart_id as ci_cart_id,
            ci.product_id as ci_product_id,
            ci.size_id as ci_size_id,
            ci.quantity as ci_quantity,
            c.user_id as c_user_id,
            p.price as p_price,
            p.discount as p_discount,
            p.name as p_name,
            p.image as p_image,
            s.name as s_name
            FROM
                cart_items as ci
            INNER JOIN 
                carts as c ON ci.cart_id = c.id
            INNER JOIN 
                products AS p ON ci.product_id = p.id
            INNER JOIN 
                sizes AS s ON ci.size_id = s.id    
            ";
            $stmt = $GLOBALS['connect']->prepare($sql);
        
            $stmt->execute();
        
            return $stmt->fetchAll();
            
        } catch (\Exception $e) {
            debug($e);
        }
    
    }
}

function deleteCartItemByCartIDAndProductIDAndSizeID($cartID, $productID, $sizeID)
{
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

function getCartItem($cartID, $productID, $sizeID)
{
    try {
        $sql = "
        SELECT * FROM cart_items 
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
        
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}