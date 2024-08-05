<?php

// if (!function_exists('listAllHomeProduct')) {
//     function listAllHomeProduct()
//     {
//         try {
//             $sql = "
//                 SELECT 
//                 p.id          as p_id,
//                 p.cate_id     as p_cate_id,
//                 p.name        as p_name,
//                 p.price       as p_price,
//                 p.discount    as p_discount,
//                 p.image       as p_image,
//                 p.description as p_description,
//                 c.name        as c_name,
//                 s.id          as size_id,
//                 s.name        as size_name
//                 FROM products as p
//                 INNER JOIN categories as c ON c.id = p.cate_id
//                 LEFT JOIN product_size as ps ON p.id = ps.product_id
//                 LEFT JOIN sizes as s ON ps.size_id = s.id
//                 ORDER BY p.id DESC;
//             ";
//             $stmt = $GLOBALS['connect']->prepare($sql);

//             $stmt->execute();

//             $products = $stmt->fetchAll();

//             // Đưa dữ liệu về kích cỡ vào mảng sản phẩm tương ứng
//             $result = [];
//             foreach ($products as $product) {
//                 $productId = $product['p_id'];
//                 if (!isset($result[$productId])) {
//                     $result[$productId] = [
//                         'p_id' => $productId,
//                         'p_cate_id' => $product['p_cate_id'],
//                         'p_name' => $product['p_name'],
//                         'p_price' => $product['p_price'],
//                         'p_discount' => $product['p_discount'],
//                         'p_image' => $product['p_image'],
//                         'p_description' => $product['p_description'],
//                         'c_name' => $product['c_name'],
//                         'sizes' => []
//                     ];
//                 }
//                 if (!empty($product['size_id'])) {
//                     $result[$productId]['sizes'][] = [
//                         's_id' => $product['size_id'],
//                         's_name' => $product['size_name']
//                     ];
//                 }
//             }

//             return array_values($result);
//         } catch (\Exception $e) {
//             debug($e);
//         }
//     }
// }

if (!function_exists('listAllHomeProduct')) {
    function listAllHomeProduct()
    {
        try {
            // Thực hiện truy vấn SQL và lấy kết quả
            $products = fetchProductsWithSizes();
            
            // Xử lý kết quả truy vấn để gom nhóm kích cỡ vào từng sản phẩm
            $result = groupSizesByProduct($products);

            // Trả về mảng các sản phẩm với các kích cỡ đã được gom nhóm
            return array_values($result);
        } catch (\Exception $e) {
            // Xử lý ngoại lệ nếu có lỗi xảy ra
            debug($e);
        }
    }
}

if (!function_exists('fetchProductsWithSizes')) {
    function fetchProductsWithSizes()
    {
        $sql = "
            SELECT 
                p.id          as p_id,
                p.cate_id     as p_cate_id,
                p.name        as p_name,
                p.price       as p_price,
                p.discount    as p_discount,
                p.image       as p_image,
                p.description as p_description,
                c.name        as c_name,
                s.id          as size_id,
                s.name        as size_name
            FROM products as p
            INNER JOIN categories as c ON c.id = p.cate_id
            LEFT JOIN product_size as ps ON p.id = ps.product_id
            LEFT JOIN sizes as s ON ps.size_id = s.id
            ORDER BY p.id DESC;
        ";

        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}

if (!function_exists('groupSizesByProduct')) {
    function groupSizesByProduct($products)
    {
        $result = [];
        
        foreach ($products as $product) {
            $productId = $product['p_id'];

            // Kiểm tra xem sản phẩm này đã có trong mảng kết quả chưa
            if (!isset($result[$productId])) {
                // Nếu chưa có, khởi tạo mảng sản phẩm với các thông tin cơ bản
                $result[$productId] = [
                    'p_id' => $productId,
                    'p_cate_id' => $product['p_cate_id'],
                    'p_name' => $product['p_name'],
                    'p_price' => $product['p_price'],
                    'p_discount' => $product['p_discount'],
                    'p_image' => $product['p_image'],
                    'p_description' => $product['p_description'],
                    'c_name' => $product['c_name'],
                    'sizes' => [] // Khởi tạo mảng kích cỡ rỗng
                ];
            }

            // Nếu sản phẩm có kích cỡ, thêm kích cỡ vào mảng 'sizes'
            if (!empty($product['size_id'])) {
                $result[$productId]['sizes'][] = [
                    's_id' => $product['size_id'],
                    's_name' => $product['size_name']
                ];
            }
        }

        return $result;
    }
}


// if (!function_exists('listAllForProduct')) {
//     function listAllHomeProduct()
//     {
//         try {
//             $sql = "
//                 SELECT 
//                 p.id          as p_id,
//                 p.cate_id     as p_cate_id,
//                 p.name        as p_name,
//                 p.price       as p_price,
//                 p.discount    as p_discount,
//                 p.image       as p_image,
//                 p.description as p_description,
//                 c.name    as c_name
//                 FROM products as p
//                 INNER JOIN categories as c ON c.id = p.cate_id
//                 ORDER BY p_id DESC;
//             ";
//             $stmt = $GLOBALS['connect']->prepare($sql);

//             $stmt->execute();

//             return $stmt->fetchAll();
//         } catch (\Exception $e) {
//             debug($e);
//         }
//     }
// }
// if (!function_exists('showOneForProductDetail')) {
function showProductByID($id)
{
    try {
        $sql = "
            SELECT 
            p.id          as p_id,
            p.cate_id     as p_cate_id,
            p.name        as p_name,
            p.price       as p_price,
            p.discount    as p_discount,
            p.image       as p_image,
            p.description as p_description,
            c.name        as c_name
            FROM products as p
            INNER JOIN categories as c ON c.id = p.cate_id
            WHERE 
                p.id = :id
            LIMIT 1
        ";
        $stmt = $GLOBALS['connect']->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}
// }

// if (!function_exists('productListByCategoryID')) {
function getProductByCategoryID($categoryID, $perPage, $page)
{
    try {
        $limit = $perPage;
        $offset = ($page - 1) * $perPage;
        $sql = "
            SELECT 
            p.id          as p_id,
            p.cate_id     as p_cate_id,
            p.name        as p_name,
            p.price       as p_price,
            p.discount    as p_discount,
            p.image       as p_image,
            p.description as p_description,
            c.name    as c_name
            FROM products as p
            INNER JOIN categories as c ON c.id = p.cate_id
            WHERE 
                p.cate_id = :cate_id
            LIMIT $limit OFFSET $offset
        ";
        $stmt = $GLOBALS['connect']->prepare($sql);

        $stmt->bindParam(":cate_id", $categoryID);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}
// }

function countAllProductByCategoryID($categoryID)
{
    try {
        $sql = "
        SELECT 
            count(*) total 
        FROM products as p
        WHERE 
            p.cate_id = :cate_id";

        $stmt = $GLOBALS['connect']->prepare($sql);

        $stmt->bindParam(":cate_id", $categoryID);

        $stmt->execute();

        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

if(!function_exists('getSizeForProduct')){
    function getSizeForProduct($productID){
        try{
            $sql = "
            SELECT 
                s.id   as s_id,
                s.name as s_name
            FROM sizes as s INNER JOIN product_size as ps ON s.id = ps.size_id
            WHERE ps.product_id = :product_id
            ";
            $stmt = $GLOBALS['connect']->prepare($sql);

            $stmt->bindParam(":product_id", $productID);

            $stmt->execute();
            return $stmt->fetchAll();
        }catch (\Exception $e) {
            debug($e);
        }
    }
}