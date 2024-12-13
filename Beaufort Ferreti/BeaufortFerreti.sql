create database BeaufortFerreti;



use BeaufortFerreti;


CREATE TABLE usuarios (
    id_usuario integer not null auto_increment,             
    users VARCHAR(20),                    
    password VARCHAR(200),                  
    email VARCHAR(100),                    
    name VARCHAR(50),
    level tinyint,
    ap VARCHAR(50),                         
    am VARCHAR(50), 
    funcion varchar (70),
    img VARCHAR (100),
    primary key (id_usuario)
);


INSERT INTO usuarios (id_usuario, users, password, email, name,level, ap, am, funcion, img)
VALUES
(1, 'MagdielD', '1234', 'j1234mag@gmail.com', 'Jesus Magdiel','Admin', 'Dominguez', 'Baca', 'Administrador','default.jpg')
SELECT * FROM usuarios WHERE email = 'j1234mag@gmail.com' AND password='1234';

select * from usuarios;



CREATE TABLE productos (
    id_producto integer not null auto_increment,    
    nombre CHAR(100),                           
    descripcion TEXT,                           
    precio DECIMAL(10, 2),                      
    categoria CHAR(50),                         
    imagen VARCHAR(100),                        
    PRIMARY KEY (id_producto)                   
);

-- Insertar un producto en la tabla productos
INSERT INTO productos (id_producto, nombre, descripcion, precio, categoria, imagen)
VALUES (1,'Sudadera', 'Sudadera', 25.99, 'Ropa', 'default.jpg');

SELECT * FROM productos WHERE nombre = 'Sudadera' AND categoria='Ropa';

select * from productos;


CREATE TABLE stock (
    id_producto INT NOT NULL,                     -- Eliminar auto_increment
    nombre CHAR(50),
    cantidad INT,
    estado CHAR(1),
    fecha_actualizacion DATE,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);


-- Insertar un producto en la tabla stock
INSERT INTO stock (id_producto, nombre, cantidad, estado, fecha_actualizacion)
VALUES (1, 'Sudadera', 500, 'Disponible', '2024-11-27');








-- Crear la tabla proveedores
CREATE TABLE proveedores (
    id_proveedor integer not null auto_increment,          
    nombre CHAR(100),                    
    direccion CHAR(200),                 
    telefono VARCHAR(15),                   
    correo VARCHAR(100),                                           
    cantidad INT,                           
    fecha DATE,                              
    PRIMARY KEY (id_proveedor)
);

-- Insertar un proveedor en la tabla proveedores
INSERT INTO proveedores (nombre, direccion, telefono, correo, cantidad, fecha)
VALUES
('Magdiel', '715 Elm Street, Springfield, IL 62704, USA', '+52 636-103-02-67', 'j1234mag@gmail.com', 170, '2024-11-27');



-- Tabla de carrito
CREATE TABLE carrito (
    id_carrito INT PRIMARY KEY,             
    id_usuario INT,                         
    id_producto INT,                        
    cantidad INT,                           
    precio DECIMAL(10, 2),                  
    total DECIMAL(10, 2),   
    imagen varchar (100),
    nombre char (100),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),  
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)  
);


-- Insertar un producto en el carrito
INSERT INTO carrito (id_carrito, id_usuario, id_producto, cantidad, precio, total, imagen, nombre)
VALUES (1, 1, 1, 2, 25.99, 51.98, 'default.jpg', 'camisa');














CREATE TABLE control_compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL,
    mensaje VARCHAR(255),
    fecha DATETIME,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);


DELIMITER //

CREATE TRIGGER actualizar_stock_carrito
AFTER DELETE ON carrito
FOR EACH ROW
BEGIN
    DECLARE mensaje VARCHAR(255);
    DECLARE stock_actual INT;

    -- Obtener el stock actual
    SELECT cantidad INTO stock_actual
    FROM stock
    WHERE id_producto = OLD.id_producto;

    -- Actualizar el stock
    UPDATE stock
    SET cantidad = cantidad + OLD.cantidad -- Se vuelve a sumar la cantidad eliminada
    WHERE id_producto = OLD.id_producto;

    -- Registrar en la tabla control_compras
    SET mensaje = CONCAT('Se han devuelto ', OLD.cantidad, ' unidades del producto con ID ', OLD.id_producto);
    INSERT INTO control_compras (id_producto, cantidad, mensaje, fecha)
    VALUES (OLD.id_producto, OLD.cantidad, mensaje, NOW());
END;
//

DELIMITER ;





DELIMITER //

CREATE TRIGGER actualizar_stock_carrito_update
AFTER UPDATE ON carrito
FOR EACH ROW
BEGIN
    DECLARE stock_actual INT;

    -- Obtener el stock actual del producto
    SELECT cantidad INTO stock_actual
    FROM stock
    WHERE id_producto = NEW.id_producto;

    -- Verificar si hay suficiente stock para la nueva cantidad
    IF stock_actual < NEW.cantidad THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'No hay suficiente stock para este producto.';
    ELSE
        -- Actualizar el stock
        UPDATE stock
        SET cantidad = cantidad - (NEW.cantidad - OLD.cantidad)
        WHERE id_producto = NEW.id_producto;
    END IF;
END;
//

DELIMITER ;










