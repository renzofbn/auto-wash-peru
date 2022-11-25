create database bd_autowash;
use bd_autowash;

select * from tb_cliente;
select * from tb_auto;
select * from tb_servicio;
select * from tb_venta;
select * from tb_empleado;

-- insertar datos para servicios
insert into tb_servicio(nombre_servicio, descripcion_servicio, precio_base)
values('Lavado de salón','LAVADO EXTERIOR DE CARROCERÍA CON SHAMPOO, SECADO CON ANTE SONAX, LAVADO DE LLANTAS Y GUARDARNOS',220);

insert into tb_servicio(nombre_servicio, descripcion_servicio, precio_base)
values('Lavado de Salón con Desinfección Premiun','LAVADO EXTERIOR DE CARROCERÍA CON SHAMPOO, SECADO CON ANTE SONAX, LAVADO DE LLANTAS Y GUARDARNOS',250);

insert into tb_servicio(nombre_servicio, descripcion_servicio, precio_base)
values('Tratamiento de Pintura de Auto','REVITALIZA EL COLOR DE LA PINTURA, ELIMINA RAYAS LIGERAS Y MICRO RAYAS, SUAVIZA LA SUPERFICIE CON LO CUÁL EL POLVO NO SE ADHIERE Y QUEDA BRILLANTE COMO UN ESPEJO (LITERALMENTE). ',350);

insert into tb_servicio(nombre_servicio, descripcion_servicio, precio_base)
values('Lavado con Encerado y Desinfección','LAVADO EXTERIOR CON SHAMPOO, SECADO CON PAÑOS DE MICROFIBRA, SILICONA A GUARDAFANGO Y PLÁSTICOS',100);
-- ---------------------------------------------------------
-- ---------------------------------------------------------
-- Insertar datos para vehiculos
insert into tb_auto(marca,modelo) values('Nissan','Urvan');

insert into tb_auto(marca,modelo) values('Mercedes Benz','S 280');

insert into tb_auto(marca,modelo) values('Aston Martin','DB5');

insert into tb_auto(marca,modelo) values('Prosche',' Carrera GT');
-- ---------------------------------------------------------
-- ---------------------------------------------------------

-- Insertar datos para Cliente

insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) 
values('Rodrigo','Fernandez','Garcia','casa de rodrigo a la derecha','rodrigof@gmail.com',71289305,10502531405,978524621);

insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) 
values('Mery','Yoverita','Silupu','casa de Mery, puerta marrón','meryy@gmail.com',71289304,10502531404,978524621);

insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) 
values('Mario','Escurra','Gallardo','casa de MArio gire a la izquierda','marioe@gmail.com',71289303,10502531403,978524621);

insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) 
values('Ivan','Buhajeruk','Fernández','casita de Spreen, Argentina','ivanb@gmail.com',71289302,10502531401,978524621);

insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) 
values('Anthony','Bullón','Gonzales','casita de Anthony Cra en Miraflores','tonyb@gmail.com',71289311,10502531411,978524621);

-- ---------------------------------------------------------
-- ---------------------------------------------------------
-- Insertar datos para empleados
insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) 
values('More','Pucheta','Abril',71289320,10502531472,978524621,'morep@gmail.com','casita de More, Argentina','Lustradora');

insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) 
values('Daarick','Lujan','Abril',71289310,10502531473,978524621,'daarickl@gmail.com','casita de Daarick, directo a Comas','Supervisor');

insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) 
values('Karla',' Chiroque','Sarmiento',71289307,10502531407,978524621,'karlac@gmail.com','casita de Karla, al costado de Daarick','Supervisor');

insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) 
values('Alonso','Lopez','Martinez',71289308,10502531408,978524621,'alonsol@gmail.com','casita de Alonso, limita al norte ocn Perú','Supervisor');

insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) 
values('Christian','Grey','Doman',71289069,10502531469,978524621,'chrisg@gmail.com','casita de Christian, La Casa Blanca','Supervisor');

insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) 
values('Lucy','Ruz','Weird',71289399,10502531499,978524621,'lucyr@gmail.com','casita de Lucy','Pintor');
-- ---------------------------------------------------------
-- ---------------------------------------------------------


