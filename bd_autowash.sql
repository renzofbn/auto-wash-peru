-- ---------------------------------------------------------
-- ---------------------------------------------------------
-- CREATE DATABASE bd_autowash;
-- USE bd_autowash;
-- insertar datos para servicios
insert into tb_servicio(nombre_servicio, descripcion_servicio, precio_base) values('Lavado de salón','LAVADO EXTERIOR DE CARROCERÍA CON SHAMPOO, SECADO CON ANTE SONAX, LAVADO DE LLANTAS Y GUARDARNOS',220);
insert into tb_servicio(nombre_servicio, descripcion_servicio, precio_base) values('Lavado de Salón con Desinfección Premiun','LAVADO EXTERIOR DE CARROCERÍA CON SHAMPOO, SECADO CON ANTE SONAX, LAVADO DE LLANTAS Y GUARDARNOS',250);
insert into tb_servicio(nombre_servicio, descripcion_servicio, precio_base) values('Tratamiento de Pintura de Auto','REVITALIZA EL COLOR DE LA PINTURA, ELIMINA RAYAS LIGERAS Y MICRO RAYAS, SUAVIZA LA SUPERFICIE CON LO CUÁL EL POLVO NO SE ADHIERE Y QUEDA BRILLANTE COMO UN ESPEJO (LITERALMENTE). ',350);
insert into tb_servicio(nombre_servicio, descripcion_servicio, precio_base) values('Lavado con Encerado y Desinfección','LAVADO EXTERIOR CON SHAMPOO, SECADO CON PAÑOS DE MICROFIBRA, SILICONA A GUARDAFANGO Y PLÁSTICOS',100);
-- ---------------------------------------------------------
-- ---------------------------------------------------------
-- Insertar datos para vehiculos
insert into tb_auto(marca,modelo) values('Nissan','Urvan');
insert into tb_auto(marca,modelo) values('Mercedes Benz','S 280');
insert into tb_auto(marca,modelo) values('Aston Martin','DB5');
insert into tb_auto(marca,modelo) values('Prosche',' Carrera GT');
insert into tb_auto(marca,modelo) values('Cadillac', 'Escalade');
insert into tb_auto(marca,modelo) values('Chevrolet', 'Camaro');
insert into tb_auto(marca,modelo) values('Chrysler', '300');
insert into tb_auto(marca,modelo) values('Citroën', 'C4');
insert into tb_auto(marca,modelo) values('Dacia', 'Duster');
insert into tb_auto(marca,modelo) values('Daewoo', 'Lanos');
insert into tb_auto(marca,modelo) values('Daihatsu', 'Sirion');
insert into tb_auto(marca,modelo) values('Dodge', 'Challenger');
insert into tb_auto(marca,modelo) values('Ferrari', '458 Italia');
insert into tb_auto(marca,modelo) values('Fiat', '500');
insert into tb_auto(marca,modelo) values('Ford', 'Mustang');
insert into tb_auto(marca,modelo) values('Honda', 'Civic');
insert into tb_auto(marca,modelo) values('Hummer','H2');
insert into tb_auto(marca,modelo) values('Hyundai','Accent');
insert into tb_auto(marca,modelo) values('Infiniti','QX56');
insert into tb_auto(marca,modelo) values('Isuzu','D-Max');
insert into tb_auto(marca,modelo) values('Jaguar','XJ');
insert into tb_auto(marca,modelo) values('Jeep','Grand Cherokee');
insert into tb_auto(marca,modelo) values('Kia','Sportage');
insert into tb_auto(marca,modelo) values('lected','Lancer');
insert into tb_auto(marca,modelo) values('Lancia','Ypsilon');
insert into tb_auto(marca,modelo) values('Land Rover','Range Rover');
insert into tb_auto(marca,modelo) values('Lexus','IS');
insert into tb_auto(marca,modelo) values('Lotus','Elise');
insert into tb_auto(marca,modelo) values('Maserati','Gran Turismo');
insert into tb_auto(marca,modelo) values('Maybach','57');
insert into tb_auto(marca,modelo) values('Mazda','3');
insert into tb_auto(marca,modelo) values('McLaren','MP4-12C');
-- ---------------------------------------------------------
-- ---------------------------------------------------------
-- Insertar datos para Cliente
insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) values('Rodrigo','Fernandez','Garcia','casa de rodrigo a la derecha','rodrigof@gmail.com',71289305,10502531405,978524621);
insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) values('Mery','Yoverita','Silupu','casa de Mery, puerta marrón','meryy@gmail.com',71289304,10502531404,972499554);
insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) values('Mario','Escurra','Gallardo','casa de MArio gire a la izquierda','marioe@gmail.com',71289303,10502531403,987690919);
insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) values('Ivan','Buhajeruk','Fernández','casita de Spreen, Argentina','ivanb@gmail.com',71289302,10502531401,962366380);
insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) values('Anthony','Bullón','Gonzales','casita de Anthony Cra en Miraflores','tonyb@gmail.com',71289311,10502531411,940302090);
insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) values('Jorge','Gonzales','Gonzales','casita de Jorge Cra en Miraflores','jorgegon@gmail.com',71289312,10502531412,960377223);
insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) values('Alex', 'Sánchez','Ugarte','casita de Alex en Miraflores','alex23@gmail.com',71289313,10502531413,934758061);
insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) values('Willian', 'Aguilar','Gonzales','casita de Willian en Miraflores','aguiwii@gmail.com',71289314,10502531414,986540128);
insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) values('Jhon', 'Castillo', 'Ramos','casita de Jhon en Miraflores','jkosra@gmail.com',71289315,10502531415,997250235);
insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) values('Carlos', 'Caballero', 'Cava', 'casita de Carlos en Miraflores','carlos304s@gmail.com',71289316,10502531416,987654321);
insert into tb_cliente(nombre, ap_paterno, ap_materno,direccion,email,dni,ruc,telefono) values('Eduardo', 'Turner', 'Franco', 'casita de Eduardo en Miraflores','edumasna92@gmail.com',71289317,10502531417,988434371);


-- ---------------------------------------------------------
-- ---------------------------------------------------------
-- Insertar datos para empleados
insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) values('More','Pucheta','Abril',71289320,10502531472,938528013,'morep@gmail.com','casita de More, Argentina','Lustradora');
insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) values('Daarick','Lujan','Abril',71289310,10502531473,931839319,'daarickl@gmail.com','casita de Daarick, directo a Comas','Supervisor');
insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) values('Karla',' Chiroque','Sarmiento',71289307,10502531407,955848718,'karlac@gmail.com','casita de Karla, al costado de Daarick','Supervisor');
insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) values('Alonso','Lopez','Martinez',71289308,10502531408,967608001,'alonsol@gmail.com','casita de Alonso, limita al norte ocn Perú','Supervisor');
insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) values('Christian','Grey','Doman',71289069,10502531469,966932738,'chrisg@gmail.com','casita de Christian, La Casa Blanca','Supervisor');
insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) values('Lucy','Ruz','Weird',71289399,10502531499,990897594,'lucyr@gmail.com','casita de Lucy','Pintor');
insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) values('Luis','Perez','Gonzales',71289309,10502531409,966561408,'luispe@gmail.com','casita de Luis, La Casa Blanca','Pintor');
insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) values('Juan', 'Carbajal','Gonzales',71289306,10502531406,955246175,'carba@gmail.com','casita de Juan, La Casa Azul', 'Lustrador');
insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) values('Jorge', 'Quispe', 'Llares',71289301,10502531401,924735613,'jorgeinsano@gmail.com','casita de Jorge, su Casa', 'Lustrador');
insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) values('Liliana', 'De la Cruz', 'Espinoza',71289302,10502531402,982419332,'liliespi@gmail.com','casita de Liliana, su Casa', 'Pintor');
insert into tb_empleado(nombre, ap_paterno, ap_materno,dni,ruc,telefono,email,direccion,cargo) values('Alberto', 'Moreno', 'Cornejo',71289303,10502531403,980089743,'albertocorne@gmail.com','casita de Alberto, su Casa', 'Lustrador');
-- ---------------------------------------------------------
-- ---------------------------------------------------------