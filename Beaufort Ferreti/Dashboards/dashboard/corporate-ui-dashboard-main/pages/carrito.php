<?php
session_start();

// Conexión a la base de datos
include "../../../../Admin/php/conexion.php";

// Verifica si el usuario está autenticado
if (!isset($_SESSION['user_data'])) {
    header("Location: ../pages/sign-in.php");
    exit;
}

// Manejo de la eliminación de productos del carrito
if (isset($_GET['action']) && $_GET['action'] === 'remove' && isset($_GET['index'])) {
    $index = intval($_GET['index']);
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
    header("Location: carrito.php");
    exit;
}

// Procesamiento de la compra y actualización del stock
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkout'])) {
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        $conexion->begin_transaction();

        try {
            foreach ($_SESSION['cart'] as $index => $item) {
                // Obtener la cantidad ingresada por el usuario desde el formulario
                $cantidad = isset($_POST['quantity'][$index]) ? $_POST['quantity'][$index] : 0;
                
                // Validación de la cantidad ingresada
                if ($cantidad <= 0) {
                    throw new Exception("Cantidad no válida para el producto {$item['name']}.");
                }

                // Obtener el stock actual del producto
                $sql_stock = "SELECT cantidad FROM stock WHERE id_producto = ?";
                $stmt_stock = $conexion->prepare($sql_stock);
                $stmt_stock->bind_param('i', $item['id']);
                $stmt_stock->execute();
                $result_stock = $stmt_stock->get_result();

                if ($result_stock->num_rows > 0) {
                    $row_stock = $result_stock->fetch_assoc();
                    $stock_actual = $row_stock['cantidad'];

                    // Verificar que haya suficiente stock
                    if ($stock_actual >= $cantidad) {
                        // Actualizar el stock (restar la cantidad comprada por el usuario)
                        $new_stock = $stock_actual - $cantidad;
                        $sql_update = "UPDATE stock SET cantidad = ? WHERE id_producto = ?";
                        $stmt_update = $conexion->prepare($sql_update);
                        $stmt_update->bind_param('ii', $new_stock, $item['id']);

                        if (!$stmt_update->execute()) {
                            throw new Exception("Error al actualizar el stock: " . $stmt_update->error);
                        }

                        // Registrar en el historial de compras
                        $sql_insert_log = "INSERT INTO control_compras (id_producto, cantidad, mensaje, fecha) VALUES (?, ?, 'Compra realizada', NOW())";
                        $stmt_insert_log = $conexion->prepare($sql_insert_log);
                        $stmt_insert_log->bind_param('ii', $item['id'], $cantidad);
                        if (!$stmt_insert_log->execute()) {
                            throw new Exception("Error al registrar en el historial de compras: " . $stmt_insert_log->error);
                        }
                    } else {
                        throw new Exception("No hay suficiente stock para el producto {$item['name']}. Stock disponible: $stock_actual.");
                    }
                    $stmt_update->close();
                    $stmt_insert_log->close();
                } else {
                    throw new Exception("Producto no encontrado en el stock.");
                }
                $stmt_stock->close();
            }

            // Vaciar el carrito
            unset($_SESSION['cart']);

            // Confirmar la transacción y redirigir al usuario
            $conexion->commit();
            header("Location: carrito.php?status=success");
            exit;
        } catch (Exception $e) {
            // Revertir la transacción en caso de error
            $conexion->rollback();
            die("Error durante la compra: " . $e->getMessage());
        }
    } else {
        die("El carrito está vacío.");
    }
}
$sql="select * from usuarios order by id_usuario DESC";
$res= $conexion->query($sql) or die($conexion->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Carrito</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-roboto">
  <div class="container mx-auto mt-10">
    <div class="flex shadow-md my-10">
      <div class="w-full bg-white px-10 py-10">
        <div class="flex justify-between border-b pb-8">
          <h1 class="font-semibold text-2xl">Carrito de compras</h1>
          <!-- Nombre de usuario -->
          <?php
                          while($fila = mysqli_fetch_array($res) ){
      
                            ?>
          <h2 class="font-semibold text-2xl"> <?php echo $fila ['users'] ?></h2>
          <?php  } ?>
        </div>
        <div class="flex mt-10 mb-5">
          <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Detalles de los productos</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Cantidad</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Precio</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Total</h3>
        </div>

        <!-- Mostrar los productos del carrito -->
        <?php
        $total = 0;
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
            echo '<form method="POST" action="carrito.php">';
            foreach ($_SESSION['cart'] as $index => $item) {
                $subtotal = $item['price'] * $item['quantity'];
                $total += $subtotal;
                echo "
                <div class='flex items-center hover:bg-gray-100 -mx-8 px-6 py-5' id='item-{$index}'>
                    <div class='flex w-2/5'>
                        <div class='w-20'>
                            <img src='../../../../img/Productos/{$item['image']}' alt='Product Image' class='h-24 rounded-lg' width='100'/>
                        </div>
                        <div class='flex flex-col justify-between ml-4 flex-grow'>
                            <span class='font-bold text-sm'>{$item['name']}</span>
                            <span class='text-red-500 text-xs'>Categoria</span>
                            <a class='font-semibold hover:text-red-500 text-gray-500 text-xs' href='carrito.php?action=remove&index={$index}'>
                                Eliminar
                            </a>
                        </div>
                    </div>
                    <div class='flex justify-center w-1/5'>
                        <input type='number' name='quantity[{$index}]' value='{$item['quantity']}' min='1' max='10' required class='mx-2 border text-center w-8 quantity' data-price='{$item['price']}' data-index='{$index}'/>
                    </div>
                    <span class='text-center w-1/5 font-semibold text-sm' id='price-{$index}'>\${$item['price']}</span>
                    <span class='text-center w-1/5 font-semibold text-sm' id='subtotal-{$index}'>\${$subtotal}</span>
                </div>
                ";
            }
            echo "<button type='submit' name='checkout' class='bg-red-500 font-semibold hover:bg-red-600 py-3 text-sm text-white uppercase w-full rounded-lg'>Pagar</button></form>";
        } else {
            echo "<div class='text-center w-full py-5'>Tu carrito está vacío</div>";
        }
        ?>

        <div class="flex justify-between border-t pt-8">
          <div>
            <a href="./shop.php" class="flex font-semibold text-indigo-600 text-sm mt-10">
              <i class="fas fa-arrow-left mr-2"></i>
              Continuar comprando
            </a>
          </div>
          <div>
            <span class="font-semibold text-2xl" id="total">Total: $<?php echo $total; ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Función para actualizar el total
    function updateTotal() {
      let total = 0;
      const items = document.querySelectorAll('.quantity');
      items.forEach(input => {
        const quantity = parseInt(input.value);
        const price = parseFloat(input.getAttribute('data-price'));
        const subtotal = quantity * price;
        // Actualiza el subtotal de cada producto
        document.getElementById(`subtotal-${input.getAttribute('data-index')}`).textContent = `$${subtotal.toFixed(2)}`;
        total += subtotal;
      });
      // Actualiza el total
      document.getElementById('total').textContent = `Total: $${total.toFixed(2)}`;
    }

    // Agregar evento para actualizar el total cuando cambie la cantidad
    document.querySelectorAll('.quantity').forEach(input => {
      input.addEventListener('input', updateTotal);
    });

    // Inicializar el total al cargar la página
    updateTotal();
  </script>
</body>
</html>
