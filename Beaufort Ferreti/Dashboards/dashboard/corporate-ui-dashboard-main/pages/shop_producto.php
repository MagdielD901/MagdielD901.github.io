<?php
include "../../../../Admin/php/conexion.php";

// Verificamos si se ha pasado un ID en la URL
if (isset($_GET['id'])) {
    $id_producto = $_GET['id'];

    // Realizamos la consulta para obtener el producto específico
    $query = "SELECT * FROM productos WHERE id_producto = '$id_producto'";
    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) > 0) {
        $producto = mysqli_fetch_array($result);
    } else {
        echo "Producto no encontrado.";
    }
} else {
    echo "No se ha especificado un producto.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ropa</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


  <link rel="stylesheet" href="../../../../css/shop_producto.css">
 
  
</head>

<style>
  body {
           font-family: Arial, sans-serif;
       }
       .product-title {
           font-size: 2rem;
           font-weight: bold;
       }
       .price {
           color: #d9534f;
           font-size: 2rem;
           font-weight: bold;
       }
       .original-price {
           text-decoration: line-through;
           color: #999;
           font-size: 1.2rem;
       }
       .description {
           margin-top: 1rem;
           margin-bottom: 1rem;
       }
       .color-options, .size-options {
           margin-bottom: 1rem;
       }
       .color-options button, .size-options button {
           margin-right: 0.5rem;
           margin-bottom: 0.5rem;
       }
       .stock-info {
           margin-bottom: 1rem;
       }
       .add-to-cart {
           margin-top: 1rem;
       }
       .product-details {
           margin-top: 2rem;
       }
       .quantity-control {
           display: flex;
           align-items: center;
       }
       .quantity-control input {
           text-align: center;
           max-width: 60px;
       }
       .quantity-control button {
           background-color: #000;
           color: #fff;
           border: none;
           padding: 0.5rem 1rem;
       }
 </style>
</head>
<body>
<?php include "./menu.html"?>
       
<?php if (isset($producto)) { ?>
    <div class="container mt-7">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../../../img/Productos/<?php echo $producto['imagen']; ?>" class="d-block w-100" alt="producto">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php echo $producto['nombre']; ?></h5>
                                <p><?php echo $producto['descripcion']; ?></p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-md-6">
                <h1 class="product-title">
                    <?php echo $producto['nombre']; ?>   
                </h1>

                <div class="rating">
                    <input value="5" name="rate" id="star5" type="radio">
                    <label title="text" for="star5"></label>
                    <input value="4" name="rate" id="star4" type="radio">
                    <label title="text" for="star4"></label>
                    <input value="3" name="rate" id="star3" type="radio" checked=""/>
                    <label title="text" for="star3"></label>
                    <input value="2" name="rate" id="star2" type="radio">
                    <label title="text" for="star2"></label>
                    <input value="1" name="rate" id="star1" type="radio">
                    <label title="text" for="star1"></label>
                </div>

                <p class="price">
                    $<?php echo $producto['precio']; ?>
                    <span class="original-price">$240.00</span>
                </p>

                <p class="description">
                    <?php echo $producto['descripcion']; ?>
                </p>

                <div class="color-options">
                    <p><strong>COLOR:</strong></p>
                    <button class="btn btn-light">GRIS</button>
                    <button class="btn btn-light">NEGRO</button>
                    <button class="btn btn-light">AZUL</button>
                </div>

                <div class="size-options">
                    <p><strong>TAMAÑO:</strong></p>
                    <button class="btn btn-light">XL</button>
                    <button class="btn btn-light">L</button>
                    <button class="btn btn-light">M</button>
                    <button class="btn btn-light">S</button>
                </div>

                <p class="stock-info">150 en stock</p>

                <div class="quantity-control">
                    <button class="btn btn-dark" onclick="decreaseQuantity()">-</button>
                    <input class="form-control mx-2" id="quantity" min="1" type="number" value="1"/>
                    <button class="btn btn-dark" onclick="increaseQuantity()">+</button>
                </div>

                <div class="add-to-cart">
                    <form action="../../../../Admin/php/add-carrito.php" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $producto['id_producto']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $producto['nombre']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $producto['precio']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $producto['imagen']; ?>">
                        <button type="submit" class="cssbuttons-io">
                            <span>Agregar al carrito</span>
                        </button>
                    </form>
                </div>

                <div class="product-details">
                    <p><strong>ID:</strong> <?php echo $producto['id_producto']; ?></p>
                    <p><strong>CATEGORIA:</strong> <?php echo $producto['categoria']; ?></p>
                    <p><strong>TAGS:</strong></p>
                </div>
            </div>
        </div>
    </div>



  <section class="product-tabs">
    <div class="container-fluid px-3 px-md-5 padding-medium pt-0">
      <div class="row">
        <div class="offset-md-1 col-md-10 tabs-listing">
          <nav>
            <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
              <button class="nav-link active text-black fw-semibold text-uppercase px-5 py-3 mx-3" id="nav-home-tab"
                data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                aria-selected="true">Detalles</button>
              <button class="nav-link text-black fw-semibold text-uppercase px-5 py-3 mx-3" id="nav-information-tab"
                data-bs-toggle="tab" data-bs-target="#nav-information" type="button" role="tab"
                aria-controls="nav-information" aria-selected="false" tabindex="-1">Medidas</button>
              <button class="nav-link text-black fw-semibold text-uppercase px-5 py-3 mx-3" id="nav-shipping-tab"
                data-bs-toggle="tab" data-bs-target="#nav-shipping" type="button" role="tab"
                aria-controls="nav-shipping" aria-selected="false" tabindex="-1">Devoluciones &amp; Envio</button>
              <button class="nav-link text-black fw-semibold text-uppercase px-5 py-3 mx-3" id="nav-review-tab"
                data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review"
                aria-selected="false" tabindex="-1">Comentarios</button>
            </div>
          </nav>
          <div class="tab-content py-5" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <h5><?php echo $producto['nombre']; ?></h5>
              <p><?php echo $producto['descripcion']; ?>
              </p>
              <ul>
              <?php } ?>
            <div class="tab-pane fade" id="nav-information" role="tabpanel" aria-labelledby="nav-information-tab">
              <h5>Best ways to use</h5>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            </div>
            <div class="tab-pane fade" id="nav-shipping" role="tabpanel" aria-labelledby="nav-shipping-tab">
              <h5>Returns Policy</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet.
                Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin
                purus. Mauris consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus,
                ut vehicula leo efficitur at.</p>
              <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra
                erat aliquet ac.</p>
              <h5>Shipping</h5>
              <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed
                fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et
                vestibulum metus. Integer sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu
                vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a
                interdum augue. Nam ut nibh mauris.</p>
            </div>
            <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
              <div class="review-box d-flex flex-wrap">
                <div class="col-lg-6 d-flex flex-wrap gap-3">
                  <div class="col-md-2">
                    <div class="image-holder">
                      <img src="images/reviewer-1.jpg" alt="review" class="img-fluid rounded-circle">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="review-content">
                      <span class="rating secondary-font">
                        <svg class="star text-yellow" width="15" height="15">
                          <use xlink:href="#star"></use>
                        </svg>
                        <svg class="star text-yellow" width="15" height="15">
                          <use xlink:href="#star"></use>
                        </svg>
                        <svg class="star text-yellow" width="15" height="15">
                          <use xlink:href="#star"></use>
                        </svg>
                        <svg class="star text-yellow" width="15" height="15">
                          <use xlink:href="#star"></use>
                        </svg>
                        <svg class="star text-yellow" width="15" height="15">
                          <use xlink:href="#star"></use>
                        </svg>
                        (4.5)</span>
                      <div class="review-header">
                        <span class="author-name text-black fw-bold">Mark Johnson</span>
                        <span class="review-date">– 03/07/2024</span>
                      </div>
                      <p>Vitae tortor condimentum lacinia quis vel eros donec ac. Nam at lectus urna duis convallis
                        convallis</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 d-flex flex-wrap gap-3">
                  <div class="col-md-2">
                    <div class="image-holder">
                      <img src="images/reviewer-2.jpg" alt="review" class="img-fluid rounded-circle">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="review-content">
                      <div class="rating-container d-flex align-items-center">
                        <span class="rating secondary-font">
                          <svg class="star text-yellow" width="15" height="15">
                            <use xlink:href="#star"></use>
                          </svg>
                          <svg class="star text-yellow" width="15" height="15">
                            <use xlink:href="#star"></use>
                          </svg>
                          <svg class="star text-yellow" width="15" height="15">
                            <use xlink:href="#star"></use>
                          </svg>
                          <svg class="star text-yellow" width="15" height="15">
                            <use xlink:href="#star"></use>
                          </svg>
                          <svg class="star text-yellow" width="15" height="15">
                            <use xlink:href="#star"></use>
                          </svg>
                          (3.5)</span>
                      </div>

                      <div class="review-header">
                        <span class="author-name text-black fw-bold">Jenny Willis</span>
                        <span class="review-date">– 03/06/2022</span>
                      </div>
                      <p>Vitae tortor condimentum lacinia quis vel eros donec ac. Nam at lectus urna duis convallis
                        convallis</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="add-review mt-5">
                <h5>Add a review</h5>
                <p>Your email address will not be published. Required fields are marked *</p>
                <form id="form" class="form-group">

                  <div class="pb-3">
                    <div class="review-rating">
                      <span>Your rating *</span>
                      <div class="rating-container d-flex align-items-center">
                        <span class="rating secondary-font">
                          <svg class="star text-yellow" width="15" height="15">
                            <use xlink:href="#star"></use>
                          </svg>
                          <svg class="star text-yellow" width="15" height="15">
                            <use xlink:href="#star"></use>
                          </svg>
                          <svg class="star text-yellow" width="15" height="15">
                            <use xlink:href="#star"></use>
                          </svg>
                          <svg class="star text-yellow" width="15" height="15">
                            <use xlink:href="#star"></use>
                          </svg>

                          <svg class="star text-yellow" width="15" height="15">
                            <use xlink:href="#star"></use>
                          </svg>
                          (5.0)</span>
                      </div>
                    </div>
                  </div>
                  <div class="pb-3">
                    <input type="file" class="form-control" data-text="Choose your file">
                  </div>
                  <div class="pb-3">
                    <label>Your Name</label>
                    <input type="text" name="name" placeholder="Write your name here*" class="form-control">
                  </div>
                  <div class="pb-3">
                    <label>Your Email</label>
                    <input type="text" name="email" placeholder="Write your email here*" class="form-control">
                  </div>
                  <div class="pb-3">
                    <label>Your Review</label>
                    <textarea class="form-control" placeholder="Write your review here*"></textarea>
                  </div>
                  <div class="pb-3">
                    <label>
                      <input type="checkbox" required="">
                      <span class="label-body">Save my name, email, and website in this browser for the next
                        time.</span>
                    </label>
                  </div>
                  <button type="submit" name="submit" class="btn btn-dark rounded-0  px-5 py-3 mt-2 ">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 

  <!-- Script -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  
    <script>
      function decreaseQuantity() {
               var quantityInput = document.getElementById('quantity');
               var currentValue = parseInt(quantityInput.value);
               if (currentValue > 1) {
                   quantityInput.value = currentValue - 1;
               }
           }
    
           function increaseQuantity() {
               var quantityInput = document.getElementById('quantity');
               var currentValue = parseInt(quantityInput.value);
               quantityInput.value = currentValue + 1;
           }
     </script>
  

</body>

</html>