<?php
session_start();

// Verificar si se ha enviado un producto al carrito
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Imprimir los valores recibidos
    var_dump($_POST);
    
    // Crear el arreglo del producto
    $product = [
        'id' => $_POST['product_id'],
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price'],
        'image' => $_POST['product_image'],
        'quantity' => 1 // Asumimos que al agregar al carrito se empieza con 1 unidad
    ];

    // Verificar si el carrito ya existe en la sesión
    if (isset($_SESSION['cart'])) {
        // Buscar si el producto ya está en el carrito
        $found = false;
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['id'] == $product['id']) {
                // Si el producto ya existe, incrementar la cantidad
                $item['quantity']++;
                $found = true;
                break;
            }
        }
        
        // Si el producto no se encontró, agregarlo al carrito
        if (!$found) {
            $_SESSION['cart'][] = $product;
        }
    } else {
        // Si el carrito no existe, crear uno nuevo
        $_SESSION['cart'] = [$product];
    }
}

// Redirigir al carrito
header("Location: ../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/carrito.php");
exit;
?>
