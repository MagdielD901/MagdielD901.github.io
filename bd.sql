CREATE database beaufort_ferreti;
use beaufort_ferreti;


-- Tabla para productos

-- Tabla para usuarios
CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY,             
    usuario VARCHAR(20),                    
    password VARCHAR(200),                  
    correo VARCHAR(100),                    
    nombre VARCHAR(50),                     
    ap VARCHAR(50),                         
    am VARCHAR(50)                          
);

CREATE TABLE productos (
    id_producto INT PRIMARY KEY,            
    nombre VARCHAR(100),                    
    descripcion TEXT,                       
    precio DECIMAL(10, 2),                  
    categoria VARCHAR(50),                  
    imagen BLOB                             
);


-- Tabla para carrito
CREATE TABLE carrito (
    id_carrito INT PRIMARY KEY,             
    id_usuario INT,                         
    id_producto INT,                        
    cantidad INT,                           
    precio DECIMAL(10, 2),                  
    total DECIMAL(10, 2),                   
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),  
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)  
);

-- Tabla para compra_en_linea
CREATE TABLE compra_en_linea (
    id_compra INT PRIMARY KEY,              
    id_carrito INT,                         
    metodo_pago INT,                        
    fecha_entrega DATE,                     
    FOREIGN KEY (id_carrito) REFERENCES carrito(id_carrito)   
);

-- Tabla para pedidos
CREATE TABLE pedidos (
    id_pedido INT PRIMARY KEY,              
    id_cliente INT,                         
    fecha_pedido DATE,                      
    estado CHAR(1),                         
    id_producto INT,                        
    cantidad INT,                           
    precio_total DECIMAL(10, 2),            
    direccion_envio VARCHAR(200),           
    metodo_pago INT,                        
    fecha_envio DATE,                       
    fecha_entrega DATE,                     
    FOREIGN KEY (id_cliente) REFERENCES usuarios(id_usuario),  
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)  
);

-- Tabla para proveedores
CREATE TABLE proveedores (
    id_proveedor INT PRIMARY KEY,           
    nombre VARCHAR(100),                    
    direccion VARCHAR(200),                 
    telefono VARCHAR(15),                   
    correo VARCHAR(100),                    
    id_producto INT,                        
    cantidad INT,                           
    fecha DATE,                             
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)  
);

-- Tabla para stock
CREATE TABLE stock (
    id_producto INT PRIMARY KEY,            
    cantidad INT,                           
    cantidad_minima INT,                    
    estado CHAR(1),                         
    fecha_actualizacion DATE,               
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)  
);










-- INSERT INTO



-- insert into de usuarios
INSERT INTO usuarios (id_usuario, usuario, password, correo, nombre, ap, am)
VALUES
(1, 'MagdielD', '1234', 'magdiel@gmail.com', 'Jesus Magdiel', 'Dominguez', 'Baca'),
(2, 'Jenny', '4321', 'jenny@gmail.com', 'Jennifer', 'Castillo', 'Mendoza'),
(3, 'Sebas', 'sebas', 'sebas@gmail.com', 'Sebastian', 'Chacon', 'Bencomo');


-- insert into de productos
INSERT INTO productos (id_producto, nombre, descripcion, precio, categoria, imagen)
VALUES
(1, 'Camiseta', 'Camiseta de algodón', 29.99, 'Ropa', NULL),
(2, 'Jeans', 'Jeans de mezclilla', 49.99, 'Ropa', NULL),
(3, 'Zapatos', 'Zapatos deportivos', 59.99, 'Calzado', NULL);


-- insert into de carrito
INSERT INTO carrito (id_carrito, id_usuario, id_producto, cantidad, precio, total)
VALUES
(1, 1, 1, 2, 29.99, 59.99),  -- 2 camisetas para MagdielD
(2, 2, 2, 1, 49.99, 49.99),  -- 1 jeans para Jenny
(3, 3, 3, 1, 59.99, 59.99);  -- 1 par de zapatos para Sebas


-- insert into de pedidos
INSERT INTO pedidos (id_pedido, id_cliente, fecha_pedido, estado, id_producto, cantidad, precio_total, direccion_envio, metodo_pago, fecha_envio, fecha_entrega)
VALUES
(1, 1, '2024-11-01', 'Pendiente', 1, 2, 59.99, 'Calle Ficticia 123', 1, '2024-11-02', '2024-11-05'),
(2, 2, '2024-11-02', 'Enviado', 2, 1, 49.99, 'Avenida Real 456', 2, '2024-11-03', '2024-11-06'),
(3, 3, '2024-11-03', 'Entregado', 3, 1, 59.99, 'Boulevard Central 789', 1, '2024-11-04', '2024-11-07');


-- insert into de stock
INSERT INTO stock (id_producto, cantidad, cantidad_minima, estado, fecha_actualizacion)
VALUES
(1, 100, 10, 'Disponible', '2024-11-01'),
(2, 50, 5, 'Disponible', '2024-11-02'),
(3, 30, 3, 'Disponible', '2024-11-03');







-- CONSULTAS DE PRODUCTO CARTESIANO


-- usuarios y productos
SELECT u.usuario, p.nombre
FROM usuarios u, productos p;

-- carrito y pedidos
SELECT c.id_carrito, p.id_pedido
FROM carrito c, pedidos p;

-- productos y stock
SELECT p.nombre, s.cantidad
FROM productos p, stock s;




-- CONSULTAS CON INNER JOIN


-- usuarios y carrito
SELECT u.usuario, c.id_carrito, c.cantidad
FROM usuarios u
INNER JOIN carrito c ON u.id_usuario = c.id_usuario;

-- pedidos y productos
SELECT p.id_pedido, pr.nombre, p.cantidad, p.precio_total
FROM pedidos p
INNER JOIN productos pr ON p.id_producto = pr.id_producto;

-- proveedores y productos
SELECT pr.nombre, pr.descripcion, prov.nombre AS proveedor
FROM proveedores prov
INNER JOIN productos pr ON prov.id_producto = pr.id_producto;





-- COOLUMNA Y RESUMEN


-- Promedio del precio de los productos
SELECT AVG(precio) AS promedio_precio
FROM productos;


-- Total de ventas por cliente
SELECT u.usuario, SUM(p.precio_total) AS total_ventas
FROM pedidos p
INNER JOIN usuarios u ON p.id_cliente = u.id_usuario
GROUP BY u.usuario;

-- Cantidad total vendida de cada producto
SELECT pr.nombre, SUM(p.cantidad) AS cantidad_vendida
FROM pedidos p
INNER JOIN productos pr ON p.id_producto = pr.id_producto
GROUP BY pr.nombre;

select * from carrito;
select * from pedidos;
select * from stock;



















