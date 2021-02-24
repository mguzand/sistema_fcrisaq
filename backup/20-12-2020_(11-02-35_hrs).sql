SET FOREIGN_KEY_CHECKS=1;

CREATE DATABASE IF NOT EXISTS fcrisaq;

USE fcrisaq;

DROP TABLE IF EXISTS tbl_bitacoras;

CREATE TABLE `tbl_bitacoras` (
  `id_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `objeto` varchar(50) NOT NULL,
  `accion` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_bitacora`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=594 DEFAULT CHARSET=latin1;

INSERT INTO tbl_bitacoras VALUES("1","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-11 22:15:26");
INSERT INTO tbl_bitacoras VALUES("2","15","PANTALLA ROLES","INGRESO A LA PANTALLA ROLES","ingreso a pantalla roles","2020-12-11 22:16:13");
INSERT INTO tbl_bitacoras VALUES("3","15","PANTALLA ROLES","INGRESO A LA PANTALLA ROLES","ingreso a pantalla roles","2020-12-11 22:19:51");
INSERT INTO tbl_bitacoras VALUES("4","0","PANTALLA PROVEEDOR","INSERT","INSERT INTO tbl_roles (rol,descripcion) VALUES (\'E","2020-12-11 22:20:11");
INSERT INTO tbl_bitacoras VALUES("5","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-11 22:20:16");
INSERT INTO tbl_bitacoras VALUES("6","15","PANTALLA ROLES","INGRESO A LA PANTALLA ROLES","ingreso a pantalla roles","2020-12-11 22:21:27");
INSERT INTO tbl_bitacoras VALUES("7","0","PANTALLA DE ROL","INSERT","INSERT INTO tbl_roles (rol,descripcion) VALUES (\'J","2020-12-11 22:21:36");
INSERT INTO tbl_bitacoras VALUES("8","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-11 22:21:40");
INSERT INTO tbl_bitacoras VALUES("9","15","PANTALLA ROLES","INGRESO A LA PANTALLA ROLES","ingreso a pantalla roles","2020-12-11 22:21:50");
INSERT INTO tbl_bitacoras VALUES("10","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-11 22:24:37");
INSERT INTO tbl_bitacoras VALUES("11","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-11 22:24:39");
INSERT INTO tbl_bitacoras VALUES("12","0","PANTALLA PROVEEDOR","INSERT","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-11 22:25:40");
INSERT INTO tbl_bitacoras VALUES("13","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'JUAN\',Apellido=\'C","2020-12-11 22:25:52");
INSERT INTO tbl_bitacoras VALUES("14","15","PANTALLA PRODUCTO","INGRESO A LA PANTALLA PRODUCTO","Ingreso a pantalla Producto","2020-12-11 22:25:59");
INSERT INTO tbl_bitacoras VALUES("15","0","PANTALLA PRODUCTO","UPDATE","UPDATE tbl_producto\n        SET nombre = \'AGUA MI","2020-12-11 22:27:50");
INSERT INTO tbl_bitacoras VALUES("16","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-11 22:28:16");
INSERT INTO tbl_bitacoras VALUES("17","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-11 22:30:46");
INSERT INTO tbl_bitacoras VALUES("18","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-11 22:30:48");
INSERT INTO tbl_bitacoras VALUES("19","30","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'6\'","2020-12-11 22:31:03");
INSERT INTO tbl_bitacoras VALUES("20","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-11 22:31:15");
INSERT INTO tbl_bitacoras VALUES("21","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-16 11:50:06");
INSERT INTO tbl_bitacoras VALUES("22","15","PANTALLA PRODUCTO","INGRESO A LA PANTALLA PRODUCTO","Ingreso a pantalla Producto","2020-12-16 11:50:39");
INSERT INTO tbl_bitacoras VALUES("23","30","PANTALLA COMPRAS","INGRESO A LA PANTALLA COMPRAS","Ingreso a Pantalla Compras","2020-12-16 11:51:14");
INSERT INTO tbl_bitacoras VALUES("24","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-16 11:54:02");
INSERT INTO tbl_bitacoras VALUES("25","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-16 11:54:23");
INSERT INTO tbl_bitacoras VALUES("26","30","PANTALLA COMPRAS","INGRESO A LA PANTALLA COMPRAS","Ingreso a Pantalla Compras","2020-12-16 11:55:56");
INSERT INTO tbl_bitacoras VALUES("27","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-16 11:56:55");
INSERT INTO tbl_bitacoras VALUES("28","30","PANTALLA COMPRAS","INGRESO A LA PANTALLA COMPRAS","Ingreso a Pantalla Compras","2020-12-16 11:57:27");
INSERT INTO tbl_bitacoras VALUES("29","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-16 22:55:38");
INSERT INTO tbl_bitacoras VALUES("30","32","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-16 22:59:59");
INSERT INTO tbl_bitacoras VALUES("31","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-16 23:00:29");
INSERT INTO tbl_bitacoras VALUES("32","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-16 23:00:45");
INSERT INTO tbl_bitacoras VALUES("33","15","PANTALLA PRODUCTO","INGRESO A LA PANTALLA PRODUCTO","Ingreso a pantalla Producto","2020-12-16 23:00:46");
INSERT INTO tbl_bitacoras VALUES("34","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 10:17:08");
INSERT INTO tbl_bitacoras VALUES("35","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 10:17:31");
INSERT INTO tbl_bitacoras VALUES("36","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 10:17:44");
INSERT INTO tbl_bitacoras VALUES("37","15","Pantalla de usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id","2020-12-17 10:22:04");
INSERT INTO tbl_bitacoras VALUES("38","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 10:22:34");
INSERT INTO tbl_bitacoras VALUES("39","15","Pantalla de usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id","2020-12-17 10:24:25");
INSERT INTO tbl_bitacoras VALUES("40","15","Pantalla de Usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'36\'","2020-12-17 10:24:54");
INSERT INTO tbl_bitacoras VALUES("41","37","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 10:25:55");
INSERT INTO tbl_bitacoras VALUES("42","37","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y ","2020-12-17 10:26:16");
INSERT INTO tbl_bitacoras VALUES("43","37","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y ","2020-12-17 10:26:26");
INSERT INTO tbl_bitacoras VALUES("44","37","cambia","INGRESO","Esta en la pantalla de cambio de contraseña","2020-12-17 10:26:26");
INSERT INTO tbl_bitacoras VALUES("45","37","cambia","INGRESO","Esta en la pantalla de cambio de contraseña","2020-12-17 10:33:19");
INSERT INTO tbl_bitacoras VALUES("46","37","cambia","INGRESO","Esta en la pantalla de cambio de contraseña","2020-12-17 10:33:30");
INSERT INTO tbl_bitacoras VALUES("47","37","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y ","2020-12-17 10:42:56");
INSERT INTO tbl_bitacoras VALUES("48","37","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y ","2020-12-17 10:43:08");
INSERT INTO tbl_bitacoras VALUES("49","37","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y ","2020-12-17 10:43:17");
INSERT INTO tbl_bitacoras VALUES("50","37","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y ","2020-12-17 10:43:25");
INSERT INTO tbl_bitacoras VALUES("51","37","cambia","INGRESO","Esta en la pantalla de cambio de contraseña","2020-12-17 10:43:26");
INSERT INTO tbl_bitacoras VALUES("52","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 10:43:42");
INSERT INTO tbl_bitacoras VALUES("53","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 10:43:46");
INSERT INTO tbl_bitacoras VALUES("54","37","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y ","2020-12-17 10:53:44");
INSERT INTO tbl_bitacoras VALUES("55","37","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y ","2020-12-17 10:53:52");
INSERT INTO tbl_bitacoras VALUES("56","37","cambia","INGRESO","Esta en la pantalla de cambio de contraseña","2020-12-17 10:53:53");
INSERT INTO tbl_bitacoras VALUES("57","37","cambia","INGRESO","Esta en la pantalla de cambio de contraseña","2020-12-17 10:54:58");
INSERT INTO tbl_bitacoras VALUES("58","37","cambia","INGRESO","Esta en la pantalla de cambio de contraseña","2020-12-17 10:57:42");
INSERT INTO tbl_bitacoras VALUES("59","37","cambia","INGRESO","Esta en la pantalla de cambio de contraseña","2020-12-17 16:01:34");
INSERT INTO tbl_bitacoras VALUES("60","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 16:41:58");
INSERT INTO tbl_bitacoras VALUES("61","37","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y ","2020-12-17 16:45:55");
INSERT INTO tbl_bitacoras VALUES("62","37","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y ","2020-12-17 16:46:12");
INSERT INTO tbl_bitacoras VALUES("63","37","CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA POR PREGUNTA","Esta en la pantalla de cambio de contraseña","2020-12-17 16:46:12");
INSERT INTO tbl_bitacoras VALUES("64","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 16:46:29");
INSERT INTO tbl_bitacoras VALUES("65","37","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y ","2020-12-17 16:48:03");
INSERT INTO tbl_bitacoras VALUES("66","37","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y ","2020-12-17 16:48:16");
INSERT INTO tbl_bitacoras VALUES("67","37","RECUPERACION POR PREGUNTA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-17 16:48:16");
INSERT INTO tbl_bitacoras VALUES("68","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 16:48:23");
INSERT INTO tbl_bitacoras VALUES("69","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 16:58:18");
INSERT INTO tbl_bitacoras VALUES("70","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 17:00:23");
INSERT INTO tbl_bitacoras VALUES("71","15","tbl_usuario","UPDATE","UPDATE tbl_usuario SET nombre_usuario=\'PRUEBA\', us","2020-12-17 17:00:35");
INSERT INTO tbl_bitacoras VALUES("72","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 17:00:38");
INSERT INTO tbl_bitacoras VALUES("73","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 17:01:20");
INSERT INTO tbl_bitacoras VALUES("74","15","PANTALLA DE USUARIOS","MODIFICAR UN USUARIO","UPDATE tbl_usuario SET nombre_usuario=\'PRUEBA\', us","2020-12-17 17:03:08");
INSERT INTO tbl_bitacoras VALUES("75","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 17:03:12");
INSERT INTO tbl_bitacoras VALUES("76","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 17:03:17");
INSERT INTO tbl_bitacoras VALUES("77","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 17:05:24");
INSERT INTO tbl_bitacoras VALUES("78","37","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 17:05:33");
INSERT INTO tbl_bitacoras VALUES("79","37","PANTALLA CATALOGO","INGRESO A LA PANTALLA CATALOGO","ingreso a pantalla Catalogo","2020-12-17 17:05:41");
INSERT INTO tbl_bitacoras VALUES("80","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 17:08:23");
INSERT INTO tbl_bitacoras VALUES("81","15","PANTALLA ROLES","INGRESO A LA PANTALLA ROLES","ingreso a pantalla roles","2020-12-17 17:13:07");
INSERT INTO tbl_bitacoras VALUES("82","0","PANTALLA DE ROL","INSERT","INSERT INTO tbl_roles (rol,descripcion) VALUES (\'P","2020-12-17 17:15:37");
INSERT INTO tbl_bitacoras VALUES("83","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 17:15:42");
INSERT INTO tbl_bitacoras VALUES("84","15","PANTALLA ROLES","INGRESO A LA PANTALLA ROLES","ingreso a pantalla roles","2020-12-17 17:16:02");
INSERT INTO tbl_bitacoras VALUES("85","15","PANTALLA ROLES","INGRESO A LA PANTALLA ROLES","ingreso a pantalla roles","2020-12-17 17:26:26");
INSERT INTO tbl_bitacoras VALUES("86","15","","","ingreso a pantalla roles","2020-12-17 17:30:41");
INSERT INTO tbl_bitacoras VALUES("87","15","","","ingreso a pantalla roles","2020-12-17 17:30:51");
INSERT INTO tbl_bitacoras VALUES("88","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-17 17:32:16");
INSERT INTO tbl_bitacoras VALUES("89","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-17 17:32:20");
INSERT INTO tbl_bitacoras VALUES("90","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 17:48:17");
INSERT INTO tbl_bitacoras VALUES("91","15","PANTALLA DE USUARIOS","MODIFICAR UN REGISTRO","UPDATE tbl_usuario SET nombre_usuario=\'PRUEBA\', us","2020-12-17 17:48:26");
INSERT INTO tbl_bitacoras VALUES("92","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 17:48:35");
INSERT INTO tbl_bitacoras VALUES("93","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-17 17:48:39");
INSERT INTO tbl_bitacoras VALUES("94","0","PANTALLA PROVEEDOR","INSERT","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-17 17:49:59");
INSERT INTO tbl_bitacoras VALUES("95","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 17:50:27");
INSERT INTO tbl_bitacoras VALUES("96","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 17:50:30");
INSERT INTO tbl_bitacoras VALUES("97","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 17:52:57");
INSERT INTO tbl_bitacoras VALUES("98","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 17:53:06");
INSERT INTO tbl_bitacoras VALUES("99","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-17 17:53:09");
INSERT INTO tbl_bitacoras VALUES("100","30","PANTALLA PROVEEDOR","INSERT","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-17 17:56:12");
INSERT INTO tbl_bitacoras VALUES("101","30","PANTALLA PROVEEDOR","INSERT","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-17 17:56:29");
INSERT INTO tbl_bitacoras VALUES("102","30","PANTALLA PROVEEDOR","INSERT","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-17 17:57:50");
INSERT INTO tbl_bitacoras VALUES("103","30","PANTALLA PROVEEDOR","INSERT","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-17 19:04:18");
INSERT INTO tbl_bitacoras VALUES("104","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 19:05:06");
INSERT INTO tbl_bitacoras VALUES("105","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 19:06:46");
INSERT INTO tbl_bitacoras VALUES("106","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-17 19:06:49");
INSERT INTO tbl_bitacoras VALUES("107","30","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'13\'","2020-12-17 19:06:54");
INSERT INTO tbl_bitacoras VALUES("108","30","PANTALLA PROVEEDOR","INSERT","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-17 19:07:05");
INSERT INTO tbl_bitacoras VALUES("109","0","PANTALLA PROVEEDOR","INSERT","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-17 19:07:50");
INSERT INTO tbl_bitacoras VALUES("110","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 19:08:05");
INSERT INTO tbl_bitacoras VALUES("111","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-17 19:12:31");
INSERT INTO tbl_bitacoras VALUES("112","0","PANTALLA DE ROL","INSERT","INSERT INTO tbl_roles (rol,descripcion,creado_por)","2020-12-17 19:13:24");
INSERT INTO tbl_bitacoras VALUES("113","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-17 19:19:26");
INSERT INTO tbl_bitacoras VALUES("114","0","PANTALLA DE ROL","INSERT","INSERT INTO tbl_roles (rol,descripcion,creado_por)","2020-12-17 19:19:34");
INSERT INTO tbl_bitacoras VALUES("115","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-17 19:19:41");
INSERT INTO tbl_bitacoras VALUES("116","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 19:19:45");
INSERT INTO tbl_bitacoras VALUES("117","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-17 19:21:07");
INSERT INTO tbl_bitacoras VALUES("118","0","PANTALLA DE ROL","INSERT","INSERT INTO tbl_roles (rol,descripcion,creado_por)","2020-12-17 19:21:13");
INSERT INTO tbl_bitacoras VALUES("119","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-17 19:21:18");
INSERT INTO tbl_bitacoras VALUES("120","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 19:50:09");
INSERT INTO tbl_bitacoras VALUES("121","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 19:50:13");
INSERT INTO tbl_bitacoras VALUES("122","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 20:07:57");
INSERT INTO tbl_bitacoras VALUES("123","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 20:08:02");
INSERT INTO tbl_bitacoras VALUES("124","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 20:10:40");
INSERT INTO tbl_bitacoras VALUES("125","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 20:13:02");
INSERT INTO tbl_bitacoras VALUES("126","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 20:13:08");
INSERT INTO tbl_bitacoras VALUES("127","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 20:14:31");
INSERT INTO tbl_bitacoras VALUES("128","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 20:15:31");
INSERT INTO tbl_bitacoras VALUES("129","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 20:23:02");
INSERT INTO tbl_bitacoras VALUES("130","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 20:23:05");
INSERT INTO tbl_bitacoras VALUES("131","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 20:25:15");
INSERT INTO tbl_bitacoras VALUES("132","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 20:39:56");
INSERT INTO tbl_bitacoras VALUES("133","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 20:41:27");
INSERT INTO tbl_bitacoras VALUES("134","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 20:42:52");
INSERT INTO tbl_bitacoras VALUES("135","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 20:44:38");
INSERT INTO tbl_bitacoras VALUES("136","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 20:53:33");
INSERT INTO tbl_bitacoras VALUES("137","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-17 20:53:47");
INSERT INTO tbl_bitacoras VALUES("138","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 20:53:54");
INSERT INTO tbl_bitacoras VALUES("139","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 20:55:42");
INSERT INTO tbl_bitacoras VALUES("140","39","PANTALLA REGISTRO USUARIO","INSERTAR","insert into tbl_usuario (nombre_usuario,Apellidos,","2020-12-17 20:57:58");
INSERT INTO tbl_bitacoras VALUES("141","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 20:58:19");
INSERT INTO tbl_bitacoras VALUES("142","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 21:04:28");
INSERT INTO tbl_bitacoras VALUES("143","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 21:05:57");
INSERT INTO tbl_bitacoras VALUES("144","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 21:16:13");
INSERT INTO tbl_bitacoras VALUES("145","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-17 23:54:43");
INSERT INTO tbl_bitacoras VALUES("146","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 00:10:06");
INSERT INTO tbl_bitacoras VALUES("147","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 00:10:32");
INSERT INTO tbl_bitacoras VALUES("148","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 00:10:44");
INSERT INTO tbl_bitacoras VALUES("149","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 00:10:58");
INSERT INTO tbl_bitacoras VALUES("150","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 09:26:18");
INSERT INTO tbl_bitacoras VALUES("151","15","Pantalla de Usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'38\'","2020-12-18 09:27:48");
INSERT INTO tbl_bitacoras VALUES("152","15","Pantalla de Usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'39\'","2020-12-18 09:27:53");
INSERT INTO tbl_bitacoras VALUES("153","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 09:29:03");
INSERT INTO tbl_bitacoras VALUES("154","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 12:00:44");
INSERT INTO tbl_bitacoras VALUES("155","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 12:01:35");
INSERT INTO tbl_bitacoras VALUES("156","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 12:02:34");
INSERT INTO tbl_bitacoras VALUES("157","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 12:13:01");
INSERT INTO tbl_bitacoras VALUES("158","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 12:39:06");
INSERT INTO tbl_bitacoras VALUES("159","15","tbl_usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id","2020-12-18 12:40:23");
INSERT INTO tbl_bitacoras VALUES("160","15","tbl_usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id","2020-12-18 12:40:28");
INSERT INTO tbl_bitacoras VALUES("161","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 12:51:39");
INSERT INTO tbl_bitacoras VALUES("162","15","tbl_usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id","2020-12-18 12:52:19");
INSERT INTO tbl_bitacoras VALUES("163","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 12:53:48");
INSERT INTO tbl_bitacoras VALUES("164","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 12:53:55");
INSERT INTO tbl_bitacoras VALUES("165","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 12:54:37");
INSERT INTO tbl_bitacoras VALUES("166","15","tbl_usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id","2020-12-18 12:55:46");
INSERT INTO tbl_bitacoras VALUES("167","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 12:56:25");
INSERT INTO tbl_bitacoras VALUES("168","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 12:56:49");
INSERT INTO tbl_bitacoras VALUES("169","15","tbl_usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id","2020-12-18 12:58:00");
INSERT INTO tbl_bitacoras VALUES("170","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 12:58:09");
INSERT INTO tbl_bitacoras VALUES("171","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 12:58:10");
INSERT INTO tbl_bitacoras VALUES("172","15","tbl_usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id","2020-12-18 12:58:34");
INSERT INTO tbl_bitacoras VALUES("173","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 12:58:45");
INSERT INTO tbl_bitacoras VALUES("174","15","tbl_usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id","2020-12-18 13:01:05");
INSERT INTO tbl_bitacoras VALUES("175","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 13:08:40");
INSERT INTO tbl_bitacoras VALUES("176","15","Pantalla de Usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'40\'","2020-12-18 13:08:54");
INSERT INTO tbl_bitacoras VALUES("177","15","Pantalla de Usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'41\'","2020-12-18 13:08:59");
INSERT INTO tbl_bitacoras VALUES("178","15","Pantalla de Usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'43\'","2020-12-18 13:09:05");
INSERT INTO tbl_bitacoras VALUES("179","15","Pantalla de Usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'42\'","2020-12-18 13:09:13");
INSERT INTO tbl_bitacoras VALUES("180","15","Pantalla de Usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'37\'","2020-12-18 13:09:21");
INSERT INTO tbl_bitacoras VALUES("181","15","Pantalla de Usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'44\'","2020-12-18 13:09:28");
INSERT INTO tbl_bitacoras VALUES("182","15","Pantalla de Usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'46\'","2020-12-18 13:09:35");
INSERT INTO tbl_bitacoras VALUES("183","15","Pantalla de Usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'45\'","2020-12-18 13:09:41");
INSERT INTO tbl_bitacoras VALUES("184","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-18 13:09:45");
INSERT INTO tbl_bitacoras VALUES("185","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 13:16:59");
INSERT INTO tbl_bitacoras VALUES("186","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-18 13:17:03");
INSERT INTO tbl_bitacoras VALUES("187","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 14:25:39");
INSERT INTO tbl_bitacoras VALUES("188","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-18 14:26:18");
INSERT INTO tbl_bitacoras VALUES("189","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-18 14:33:50");
INSERT INTO tbl_bitacoras VALUES("190","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 14:41:58");
INSERT INTO tbl_bitacoras VALUES("191","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-18 14:42:05");
INSERT INTO tbl_bitacoras VALUES("192","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 14:42:09");
INSERT INTO tbl_bitacoras VALUES("193","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 14:46:35");
INSERT INTO tbl_bitacoras VALUES("194","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-18 14:46:37");
INSERT INTO tbl_bitacoras VALUES("195","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-18 14:46:40");
INSERT INTO tbl_bitacoras VALUES("196","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 14:48:11");
INSERT INTO tbl_bitacoras VALUES("197","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-18 14:50:25");
INSERT INTO tbl_bitacoras VALUES("198","15","PANTALLA DE ROLES","BORRAR REGISTRO","DELETE  FROM tbl_roles WHERE id_rol=\'19\'","2020-12-18 14:50:29");
INSERT INTO tbl_bitacoras VALUES("199","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 14:50:36");
INSERT INTO tbl_bitacoras VALUES("200","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-18 15:06:48");
INSERT INTO tbl_bitacoras VALUES("201","15","PANTALLA DE ROL","ACTUALIZAR UN REGISTRO","UPDATE tbl_roles SET rol=\'OPERADOR\', descripcion=\'","2020-12-18 15:06:59");
INSERT INTO tbl_bitacoras VALUES("202","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-18 15:07:08");
INSERT INTO tbl_bitacoras VALUES("203","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 15:13:06");
INSERT INTO tbl_bitacoras VALUES("204","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 15:25:12");
INSERT INTO tbl_bitacoras VALUES("205","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 15:25:17");
INSERT INTO tbl_bitacoras VALUES("206","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 15:25:56");
INSERT INTO tbl_bitacoras VALUES("207","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 15:30:50");
INSERT INTO tbl_bitacoras VALUES("208","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 15:30:56");
INSERT INTO tbl_bitacoras VALUES("209","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 15:31:20");
INSERT INTO tbl_bitacoras VALUES("210","15","PANTALLA DE PERMISOS","INGRESO A LA PANTALLA DE PERMISOS","ingreso a pantalla usuarios","2020-12-18 15:31:25");
INSERT INTO tbl_bitacoras VALUES("211","15","PANTALLA DE PERMISOS","INGRESO A LA PANTALLA DE PERMISOS","ingreso a pantalla usuarios","2020-12-18 15:37:57");
INSERT INTO tbl_bitacoras VALUES("212","15","PANTALLA DE PERMISOS","UPDATE","UPDATE tbl_roles_objeto set permiso_consulta=\'1\', ","2020-12-18 15:38:06");
INSERT INTO tbl_bitacoras VALUES("213","15","PANTALLA DE PERMISOS","INGRESO A LA PANTALLA DE PERMISOS","ingreso a pantalla usuarios","2020-12-18 15:38:10");
INSERT INTO tbl_bitacoras VALUES("214","15","PANTALLA DE PERMISOS","INGRESO A LA PANTALLA DE PERMISOS","ingreso a pantalla usuarios","2020-12-18 15:41:32");
INSERT INTO tbl_bitacoras VALUES("215","15","PANTALLA DE PERMISOS","INGRESO A LA PANTALLA DE PERMISOS","ingreso a pantalla usuarios","2020-12-18 15:41:38");
INSERT INTO tbl_bitacoras VALUES("216","15","PANTALLA DE PERMISOS","INGRESO A LA PANTALLA DE PERMISOS","ingreso a pantalla usuarios","2020-12-18 15:42:38");
INSERT INTO tbl_bitacoras VALUES("217","15","PANTALLA DE PERMISOS","INGRESO A LA PANTALLA DE PERMISOS","ingreso a pantalla usuarios","2020-12-18 15:42:42");
INSERT INTO tbl_bitacoras VALUES("218","15","PANTALLA DE PERMISOS","INGRESO A LA PANTALLA DE PERMISOS","ingreso a pantalla usuarios","2020-12-18 15:45:14");
INSERT INTO tbl_bitacoras VALUES("219","15","PANTALLA DE PERMISOS","INGRESO A LA PANTALLA DE PERMISOS","ingreso a pantalla usuarios","2020-12-18 15:45:20");
INSERT INTO tbl_bitacoras VALUES("220","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 17:20:37");
INSERT INTO tbl_bitacoras VALUES("221","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 17:20:38");
INSERT INTO tbl_bitacoras VALUES("222","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-18 17:20:47");
INSERT INTO tbl_bitacoras VALUES("223","15","PANTALLA DE USUARIOS","INSERTAR NUEVO USUARIO","insert into tbl_usuario (nombre_Usuario,usuario,id","2020-12-18 17:23:57");
INSERT INTO tbl_bitacoras VALUES("224","15","PANTALLA DE USUARIOS","MODIFICAR UN REGISTRO","UPDATE tbl_usuario SET nombre_usuario=\'PRUEBA\', us","2020-12-18 17:24:14");
INSERT INTO tbl_bitacoras VALUES("225","47","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-18 17:24:31");
INSERT INTO tbl_bitacoras VALUES("226","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:25:22");
INSERT INTO tbl_bitacoras VALUES("227","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:28:49");
INSERT INTO tbl_bitacoras VALUES("228","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:29:08");
INSERT INTO tbl_bitacoras VALUES("229","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:29:10");
INSERT INTO tbl_bitacoras VALUES("230","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:29:49");
INSERT INTO tbl_bitacoras VALUES("231","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:29:59");
INSERT INTO tbl_bitacoras VALUES("232","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:31:27");
INSERT INTO tbl_bitacoras VALUES("233","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:32:50");
INSERT INTO tbl_bitacoras VALUES("234","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:32:53");
INSERT INTO tbl_bitacoras VALUES("235","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:33:08");
INSERT INTO tbl_bitacoras VALUES("236","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:33:40");
INSERT INTO tbl_bitacoras VALUES("237","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:33:42");
INSERT INTO tbl_bitacoras VALUES("238","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:33:43");
INSERT INTO tbl_bitacoras VALUES("239","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:33:43");
INSERT INTO tbl_bitacoras VALUES("240","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:34:15");
INSERT INTO tbl_bitacoras VALUES("241","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:34:39");
INSERT INTO tbl_bitacoras VALUES("242","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:34:42");
INSERT INTO tbl_bitacoras VALUES("243","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:34:43");
INSERT INTO tbl_bitacoras VALUES("244","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:34:44");
INSERT INTO tbl_bitacoras VALUES("245","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:34:44");
INSERT INTO tbl_bitacoras VALUES("246","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:34:45");
INSERT INTO tbl_bitacoras VALUES("247","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:34:45");
INSERT INTO tbl_bitacoras VALUES("248","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:34:56");
INSERT INTO tbl_bitacoras VALUES("249","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:35:06");
INSERT INTO tbl_bitacoras VALUES("250","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:35:20");
INSERT INTO tbl_bitacoras VALUES("251","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:35:34");
INSERT INTO tbl_bitacoras VALUES("252","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:35:48");
INSERT INTO tbl_bitacoras VALUES("253","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:36:00");
INSERT INTO tbl_bitacoras VALUES("254","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:36:14");
INSERT INTO tbl_bitacoras VALUES("255","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:36:27");
INSERT INTO tbl_bitacoras VALUES("256","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:36:52");
INSERT INTO tbl_bitacoras VALUES("257","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:37:20");
INSERT INTO tbl_bitacoras VALUES("258","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:37:28");
INSERT INTO tbl_bitacoras VALUES("259","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:37:37");
INSERT INTO tbl_bitacoras VALUES("260","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:37:51");
INSERT INTO tbl_bitacoras VALUES("261","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:38:16");
INSERT INTO tbl_bitacoras VALUES("262","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:38:23");
INSERT INTO tbl_bitacoras VALUES("263","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-18 17:38:24");
INSERT INTO tbl_bitacoras VALUES("264","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-18 17:45:25");
INSERT INTO tbl_bitacoras VALUES("265","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:46:10");
INSERT INTO tbl_bitacoras VALUES("266","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-18 17:46:18");
INSERT INTO tbl_bitacoras VALUES("267","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-18 17:46:18");
INSERT INTO tbl_bitacoras VALUES("268","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-18 17:46:58");
INSERT INTO tbl_bitacoras VALUES("269","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-18 17:47:21");
INSERT INTO tbl_bitacoras VALUES("270","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-18 17:47:23");
INSERT INTO tbl_bitacoras VALUES("271","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-18 17:47:36");
INSERT INTO tbl_bitacoras VALUES("272","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-18 17:47:38");
INSERT INTO tbl_bitacoras VALUES("273","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-18 17:48:59");
INSERT INTO tbl_bitacoras VALUES("274","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-18 17:49:15");
INSERT INTO tbl_bitacoras VALUES("275","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-18 17:49:29");
INSERT INTO tbl_bitacoras VALUES("276","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-18 17:49:41");
INSERT INTO tbl_bitacoras VALUES("277","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-18 17:49:49");
INSERT INTO tbl_bitacoras VALUES("278","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-18 17:50:04");
INSERT INTO tbl_bitacoras VALUES("279","47","tbl_usuario","INSERT","UPDATE tbl_usuario SET contrasena=\'$2y$10$ja8aXWB.","2020-12-18 17:53:33");
INSERT INTO tbl_bitacoras VALUES("280","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-19 15:41:08");
INSERT INTO tbl_bitacoras VALUES("281","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-19 15:41:24");
INSERT INTO tbl_bitacoras VALUES("282","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-19 15:41:25");
INSERT INTO tbl_bitacoras VALUES("283","47","tbl_usuario","INSERT","UPDATE tbl_usuario SET contrasena=\'$2y$10$Y0dBBbIH","2020-12-19 15:44:08");
INSERT INTO tbl_bitacoras VALUES("284","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-19 15:48:44");
INSERT INTO tbl_bitacoras VALUES("285","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-19 15:48:51");
INSERT INTO tbl_bitacoras VALUES("286","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-19 15:48:51");
INSERT INTO tbl_bitacoras VALUES("287","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-19 16:18:28");
INSERT INTO tbl_bitacoras VALUES("288","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-19 16:18:38");
INSERT INTO tbl_bitacoras VALUES("289","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-19 16:18:39");
INSERT INTO tbl_bitacoras VALUES("290","47","tbl_usuario","INSERT","UPDATE tbl_usuario SET contrasena=\'$2y$10$ixCGJZJG","2020-12-19 16:45:54");
INSERT INTO tbl_bitacoras VALUES("291","47","tbl_usuario","INSERT","UPDATE tbl_usuario SET contrasena=\'$2y$10$f/Ujwc3a","2020-12-19 16:47:14");
INSERT INTO tbl_bitacoras VALUES("292","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-19 16:47:22");
INSERT INTO tbl_bitacoras VALUES("293","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-19 16:48:31");
INSERT INTO tbl_bitacoras VALUES("294","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-19 16:48:43");
INSERT INTO tbl_bitacoras VALUES("295","47","PANTALLA DE RECUPERACION POR PREGUNTA","PREGUNTAS DE SEGURIDAD","Esta en la pantalla de verificacion de pregunta y ","2020-12-19 16:48:51");
INSERT INTO tbl_bitacoras VALUES("296","47","PANTALLA DE CAMBIO DE CONTRASEÑA","CAMBIO DE CONTRASEÑA","Esta en la pantalla de cambio de contraseña","2020-12-19 16:48:51");
INSERT INTO tbl_bitacoras VALUES("297","47","tbl_usuario","INSERT","UPDATE tbl_usuario SET contrasena=\'$2y$10$DzEq1wnU","2020-12-19 16:49:18");
INSERT INTO tbl_bitacoras VALUES("298","47","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-19 16:49:27");
INSERT INTO tbl_bitacoras VALUES("299","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-19 17:43:49");
INSERT INTO tbl_bitacoras VALUES("300","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-19 17:43:54");
INSERT INTO tbl_bitacoras VALUES("301","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-19 17:44:10");
INSERT INTO tbl_bitacoras VALUES("302","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-19 17:44:17");
INSERT INTO tbl_bitacoras VALUES("303","0","PANTALLA DE ROL","INSERT","INSERT INTO tbl_roles (rol,descripcion,creado_por)","2020-12-19 17:44:27");
INSERT INTO tbl_bitacoras VALUES("304","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-19 17:44:32");
INSERT INTO tbl_bitacoras VALUES("305","15","INGRESO A LA PANTALLA DE ROLES"," PANTALLA DE ROLES","ingreso a pantalla roles","2020-12-19 17:45:10");
INSERT INTO tbl_bitacoras VALUES("306","15","PANTALLA DE PERMISOS","INGRESO A LA PANTALLA DE PERMISOS","ingreso a pantalla usuarios","2020-12-19 17:45:15");
INSERT INTO tbl_bitacoras VALUES("307","15","PANTALLA DE PERMISOS","INGRESO A LA PANTALLA DE PERMISOS","ingreso a pantalla usuarios","2020-12-19 17:45:46");
INSERT INTO tbl_bitacoras VALUES("308","47","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-19 17:45:57");
INSERT INTO tbl_bitacoras VALUES("309","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-19 17:46:13");
INSERT INTO tbl_bitacoras VALUES("310","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-19 17:46:17");
INSERT INTO tbl_bitacoras VALUES("311","15","PANTALLA DE USUARIOS","MODIFICAR UN REGISTRO","UPDATE tbl_usuario SET nombre_usuario=\'PRUEBA\', us","2020-12-19 17:46:41");
INSERT INTO tbl_bitacoras VALUES("312","47","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-19 17:46:52");
INSERT INTO tbl_bitacoras VALUES("313","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 17:46:57");
INSERT INTO tbl_bitacoras VALUES("314","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'15\'","2020-12-19 17:47:03");
INSERT INTO tbl_bitacoras VALUES("315","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'14\'","2020-12-19 17:47:07");
INSERT INTO tbl_bitacoras VALUES("316","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'12\'","2020-12-19 17:47:10");
INSERT INTO tbl_bitacoras VALUES("317","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'11\'","2020-12-19 17:47:14");
INSERT INTO tbl_bitacoras VALUES("318","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'10\'","2020-12-19 17:47:17");
INSERT INTO tbl_bitacoras VALUES("319","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'9\'","2020-12-19 17:47:21");
INSERT INTO tbl_bitacoras VALUES("320","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'8\'","2020-12-19 17:47:25");
INSERT INTO tbl_bitacoras VALUES("321","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'7\'","2020-12-19 17:47:28");
INSERT INTO tbl_bitacoras VALUES("322","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 17:48:12");
INSERT INTO tbl_bitacoras VALUES("323","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'PEDRO\',Apellido=\'","2020-12-19 17:48:37");
INSERT INTO tbl_bitacoras VALUES("324","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'PEDRO\',Apellido=\'","2020-12-19 17:48:47");
INSERT INTO tbl_bitacoras VALUES("325","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 17:48:58");
INSERT INTO tbl_bitacoras VALUES("326","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'PEDRO\',Apellido=\'","2020-12-19 17:49:09");
INSERT INTO tbl_bitacoras VALUES("327","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 18:07:04");
INSERT INTO tbl_bitacoras VALUES("328","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'PEDRO\',Apellido=\'","2020-12-19 18:07:17");
INSERT INTO tbl_bitacoras VALUES("329","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'PEDRO\',Apellido=\'","2020-12-19 18:07:28");
INSERT INTO tbl_bitacoras VALUES("330","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'PEDRO\',Apellido=\'","2020-12-19 18:07:36");
INSERT INTO tbl_bitacoras VALUES("331","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'PEDRO\',Apellido=\'","2020-12-19 18:07:44");
INSERT INTO tbl_bitacoras VALUES("332","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'PEDRO\',Apellido=\'","2020-12-19 18:08:07");
INSERT INTO tbl_bitacoras VALUES("333","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'PEDRO\',Apellido=\'","2020-12-19 18:09:12");
INSERT INTO tbl_bitacoras VALUES("334","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 18:11:54");
INSERT INTO tbl_bitacoras VALUES("335","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 18:22:39");
INSERT INTO tbl_bitacoras VALUES("336","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 18:23:34");
INSERT INTO tbl_bitacoras VALUES("337","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'PEDRO\',Apellido=\'","2020-12-19 18:24:04");
INSERT INTO tbl_bitacoras VALUES("338","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'PEDRO\',Apellido=\'","2020-12-19 18:24:22");
INSERT INTO tbl_bitacoras VALUES("339","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'PEDRO\',Apellido=\'","2020-12-19 18:24:33");
INSERT INTO tbl_bitacoras VALUES("340","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 18:25:15");
INSERT INTO tbl_bitacoras VALUES("341","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 18:26:10");
INSERT INTO tbl_bitacoras VALUES("342","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'MARIA\',Apellido=\'","2020-12-19 18:26:46");
INSERT INTO tbl_bitacoras VALUES("343","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'MARIA\',Apellido=\'","2020-12-19 18:26:57");
INSERT INTO tbl_bitacoras VALUES("344","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'MARIA\',Apellido=\'","2020-12-19 18:34:33");
INSERT INTO tbl_bitacoras VALUES("345","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 18:36:08");
INSERT INTO tbl_bitacoras VALUES("346","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 18:36:32");
INSERT INTO tbl_bitacoras VALUES("347","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 18:37:24");
INSERT INTO tbl_bitacoras VALUES("348","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 18:37:48");
INSERT INTO tbl_bitacoras VALUES("349","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 18:38:18");
INSERT INTO tbl_bitacoras VALUES("350","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 18:38:55");
INSERT INTO tbl_bitacoras VALUES("351","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 18:40:51");
INSERT INTO tbl_bitacoras VALUES("352","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 18:41:09");
INSERT INTO tbl_bitacoras VALUES("353","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 18:52:20");
INSERT INTO tbl_bitacoras VALUES("354","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 18:52:45");
INSERT INTO tbl_bitacoras VALUES("355","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 18:53:30");
INSERT INTO tbl_bitacoras VALUES("356","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 18:57:19");
INSERT INTO tbl_bitacoras VALUES("357","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 18:57:52");
INSERT INTO tbl_bitacoras VALUES("358","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 19:05:18");
INSERT INTO tbl_bitacoras VALUES("359","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 19:05:43");
INSERT INTO tbl_bitacoras VALUES("360","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 19:10:13");
INSERT INTO tbl_bitacoras VALUES("361","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 19:13:18");
INSERT INTO tbl_bitacoras VALUES("362","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 19:13:30");
INSERT INTO tbl_bitacoras VALUES("363","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 19:13:52");
INSERT INTO tbl_bitacoras VALUES("364","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 19:21:13");
INSERT INTO tbl_bitacoras VALUES("365","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 19:21:37");
INSERT INTO tbl_bitacoras VALUES("366","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'11\'","2020-12-19 19:21:46");
INSERT INTO tbl_bitacoras VALUES("367","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'10\'","2020-12-19 19:21:50");
INSERT INTO tbl_bitacoras VALUES("368","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'9\'","2020-12-19 19:21:53");
INSERT INTO tbl_bitacoras VALUES("369","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'8\'","2020-12-19 19:21:56");
INSERT INTO tbl_bitacoras VALUES("370","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'7\'","2020-12-19 19:22:00");
INSERT INTO tbl_bitacoras VALUES("371","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'6\'","2020-12-19 19:22:04");
INSERT INTO tbl_bitacoras VALUES("372","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'5\'","2020-12-19 19:22:07");
INSERT INTO tbl_bitacoras VALUES("373","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 19:22:29");
INSERT INTO tbl_bitacoras VALUES("374","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 19:23:18");
INSERT INTO tbl_bitacoras VALUES("375","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 19:24:27");
INSERT INTO tbl_bitacoras VALUES("376","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 19:25:50");
INSERT INTO tbl_bitacoras VALUES("377","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 19:26:15");
INSERT INTO tbl_bitacoras VALUES("378","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 19:26:58");
INSERT INTO tbl_bitacoras VALUES("379","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 19:27:53");
INSERT INTO tbl_bitacoras VALUES("380","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 19:28:12");
INSERT INTO tbl_bitacoras VALUES("381","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 19:29:54");
INSERT INTO tbl_bitacoras VALUES("382","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 19:30:50");
INSERT INTO tbl_bitacoras VALUES("383","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 19:31:54");
INSERT INTO tbl_bitacoras VALUES("384","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 19:32:03");
INSERT INTO tbl_bitacoras VALUES("385","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'JUAN\',Apellido=\'R","2020-12-19 19:32:18");
INSERT INTO tbl_bitacoras VALUES("386","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'JUAN\',Apellido=\'R","2020-12-19 19:32:29");
INSERT INTO tbl_bitacoras VALUES("387","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 20:48:33");
INSERT INTO tbl_bitacoras VALUES("388","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 20:58:48");
INSERT INTO tbl_bitacoras VALUES("389","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 20:59:30");
INSERT INTO tbl_bitacoras VALUES("390","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 22:58:26");
INSERT INTO tbl_bitacoras VALUES("391","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-19 22:59:04");
INSERT INTO tbl_bitacoras VALUES("392","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 23:17:44");
INSERT INTO tbl_bitacoras VALUES("393","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-19 23:18:02");
INSERT INTO tbl_bitacoras VALUES("394","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 01:46:38");
INSERT INTO tbl_bitacoras VALUES("395","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 01:46:51");
INSERT INTO tbl_bitacoras VALUES("396","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 01:47:04");
INSERT INTO tbl_bitacoras VALUES("397","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 01:47:34");
INSERT INTO tbl_bitacoras VALUES("398","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 01:47:50");
INSERT INTO tbl_bitacoras VALUES("399","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 01:52:08");
INSERT INTO tbl_bitacoras VALUES("400","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 01:55:21");
INSERT INTO tbl_bitacoras VALUES("401","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-20 01:55:53");
INSERT INTO tbl_bitacoras VALUES("402","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 01:56:17");
INSERT INTO tbl_bitacoras VALUES("403","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 01:59:20");
INSERT INTO tbl_bitacoras VALUES("404","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:02:39");
INSERT INTO tbl_bitacoras VALUES("405","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-20 02:03:17");
INSERT INTO tbl_bitacoras VALUES("406","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:09:36");
INSERT INTO tbl_bitacoras VALUES("407","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:10:03");
INSERT INTO tbl_bitacoras VALUES("408","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:10:10");
INSERT INTO tbl_bitacoras VALUES("409","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:11:40");
INSERT INTO tbl_bitacoras VALUES("410","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-20 02:12:10");
INSERT INTO tbl_bitacoras VALUES("411","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:13:29");
INSERT INTO tbl_bitacoras VALUES("412","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-20 02:14:00");
INSERT INTO tbl_bitacoras VALUES("413","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:14:32");
INSERT INTO tbl_bitacoras VALUES("414","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-20 02:15:07");
INSERT INTO tbl_bitacoras VALUES("415","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:15:13");
INSERT INTO tbl_bitacoras VALUES("416","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-20 02:16:30");
INSERT INTO tbl_bitacoras VALUES("417","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-20 02:17:13");
INSERT INTO tbl_bitacoras VALUES("418","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-20 02:17:14");
INSERT INTO tbl_bitacoras VALUES("419","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:17:18");
INSERT INTO tbl_bitacoras VALUES("420","47","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 02:37:13");
INSERT INTO tbl_bitacoras VALUES("421","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:37:44");
INSERT INTO tbl_bitacoras VALUES("422","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-20 02:38:16");
INSERT INTO tbl_bitacoras VALUES("423","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:46:09");
INSERT INTO tbl_bitacoras VALUES("424","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-20 02:46:50");
INSERT INTO tbl_bitacoras VALUES("425","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:47:21");
INSERT INTO tbl_bitacoras VALUES("426","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-20 02:47:57");
INSERT INTO tbl_bitacoras VALUES("427","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:53:25");
INSERT INTO tbl_bitacoras VALUES("428","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:55:40");
INSERT INTO tbl_bitacoras VALUES("429","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'GHUJKL\',Apellido=","2020-12-20 02:55:48");
INSERT INTO tbl_bitacoras VALUES("430","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:56:06");
INSERT INTO tbl_bitacoras VALUES("431","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'GHUJKL\',Apellido=","2020-12-20 02:56:13");
INSERT INTO tbl_bitacoras VALUES("432","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'ROSARIO\',Apellido","2020-12-20 02:56:27");
INSERT INTO tbl_bitacoras VALUES("433","0","PANTALLA PROVEEDORES","UPDATE ","UPDATE tbl_proveedor SET Nombre=\'MARIA\',Apellido=\'","2020-12-20 02:56:39");
INSERT INTO tbl_bitacoras VALUES("434","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 02:56:43");
INSERT INTO tbl_bitacoras VALUES("435","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 03:00:22");
INSERT INTO tbl_bitacoras VALUES("436","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'7\'","2020-12-20 03:00:31");
INSERT INTO tbl_bitacoras VALUES("437","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 03:00:44");
INSERT INTO tbl_bitacoras VALUES("438","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'8\'","2020-12-20 03:00:51");
INSERT INTO tbl_bitacoras VALUES("439","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 03:01:26");
INSERT INTO tbl_bitacoras VALUES("440","47","Proveedores","DELETE","DELETE  FROM tbl_proveedor WHERE ID_Proveedor=\'5\'","2020-12-20 03:01:30");
INSERT INTO tbl_bitacoras VALUES("441","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 03:01:34");
INSERT INTO tbl_bitacoras VALUES("442","15","PANTALLA PRODUCTO","INGRESO A LA PANTALLA PRODUCTO","Ingreso a pantalla Producto","2020-12-20 03:01:41");
INSERT INTO tbl_bitacoras VALUES("443","0","PANTALLA PRODUCTO","INSERT","INSERT INTO tbl_inventario(nombre_equipo,id_produc","2020-12-20 03:02:18");
INSERT INTO tbl_bitacoras VALUES("444","15","PANTALLA PRODUCTO","INGRESO A LA PANTALLA PRODUCTO","Ingreso a pantalla Producto","2020-12-20 03:02:29");
INSERT INTO tbl_bitacoras VALUES("445","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:02:32");
INSERT INTO tbl_bitacoras VALUES("446","47","PANTALLA COMPRAS","INGRESO A LA PANTALLA COMPRAS","Ingreso a Pantalla Compras","2020-12-20 03:05:43");
INSERT INTO tbl_bitacoras VALUES("447","0","PANTALLA COMPRAS","INSERT","INSERT INTO tbl_libro_diario(id_cuenta_cargada,id_","2020-12-20 03:06:01");
INSERT INTO tbl_bitacoras VALUES("448","47","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 03:06:06");
INSERT INTO tbl_bitacoras VALUES("449","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:06:10");
INSERT INTO tbl_bitacoras VALUES("450","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 03:07:40");
INSERT INTO tbl_bitacoras VALUES("451","0","PANTALLA PROVEEDORES","INSERTAR NUEVO PROVEEDOR","INSERT INTO tbl_proveedor (Nombre,Apellido,id_depa","2020-12-20 03:08:16");
INSERT INTO tbl_bitacoras VALUES("452","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 03:08:24");
INSERT INTO tbl_bitacoras VALUES("453","15","PANTALLA PRODUCTO","INGRESO A LA PANTALLA PRODUCTO","Ingreso a pantalla Producto","2020-12-20 03:08:26");
INSERT INTO tbl_bitacoras VALUES("454","0","PANTALLA PRODUCTO","INSERT","INSERT INTO tbl_inventario(nombre_equipo,id_produc","2020-12-20 03:08:50");
INSERT INTO tbl_bitacoras VALUES("455","15","PANTALLA PRODUCTO","INGRESO A LA PANTALLA PRODUCTO","Ingreso a pantalla Producto","2020-12-20 03:08:56");
INSERT INTO tbl_bitacoras VALUES("456","47","PANTALLA COMPRAS","INGRESO A LA PANTALLA COMPRAS","Ingreso a Pantalla Compras","2020-12-20 03:09:04");
INSERT INTO tbl_bitacoras VALUES("457","0","PANTALLA COMPRAS","INSERT","INSERT INTO tbl_libro_diario(id_cuenta_cargada,id_","2020-12-20 03:09:21");
INSERT INTO tbl_bitacoras VALUES("458","47","PANTALLA COMPRAS","INGRESO A LA PANTALLA COMPRAS","Ingreso a Pantalla Compras","2020-12-20 03:09:25");
INSERT INTO tbl_bitacoras VALUES("459","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:09:28");
INSERT INTO tbl_bitacoras VALUES("460","47","PANTALLA RETIRO KARDEX","INSERT","INSERT INTO tbl_libro_diario(id_cuenta_cargada,id_","2020-12-20 03:09:41");
INSERT INTO tbl_bitacoras VALUES("461","47","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 03:09:49");
INSERT INTO tbl_bitacoras VALUES("462","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:09:52");
INSERT INTO tbl_bitacoras VALUES("463","47","PANTALLA COMPRAS","INGRESO A LA PANTALLA COMPRAS","Ingreso a Pantalla Compras","2020-12-20 03:10:00");
INSERT INTO tbl_bitacoras VALUES("464","15","PANTALLA PRODUCTO","INGRESO A LA PANTALLA PRODUCTO","Ingreso a pantalla Producto","2020-12-20 03:10:11");
INSERT INTO tbl_bitacoras VALUES("465","47","PANTALLA COMPRAS","INGRESO A LA PANTALLA COMPRAS","Ingreso a Pantalla Compras","2020-12-20 03:10:27");
INSERT INTO tbl_bitacoras VALUES("466","0","PANTALLA COMPRAS","INSERT","INSERT INTO tbl_libro_diario(id_cuenta_cargada,id_","2020-12-20 03:10:46");
INSERT INTO tbl_bitacoras VALUES("467","47","PANTALLA COMPRAS","INGRESO A LA PANTALLA COMPRAS","Ingreso a Pantalla Compras","2020-12-20 03:10:50");
INSERT INTO tbl_bitacoras VALUES("468","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:10:53");
INSERT INTO tbl_bitacoras VALUES("469","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:11:06");
INSERT INTO tbl_bitacoras VALUES("470","47","PANTALLA RETIRO KARDEX","INSERT","INSERT INTO tbl_libro_diario(id_cuenta_cargada,id_","2020-12-20 03:11:42");
INSERT INTO tbl_bitacoras VALUES("471","47","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 03:12:04");
INSERT INTO tbl_bitacoras VALUES("472","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:12:07");
INSERT INTO tbl_bitacoras VALUES("473","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:19:29");
INSERT INTO tbl_bitacoras VALUES("474","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:32:07");
INSERT INTO tbl_bitacoras VALUES("475","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:34:43");
INSERT INTO tbl_bitacoras VALUES("476","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:36:18");
INSERT INTO tbl_bitacoras VALUES("477","47","PANTALLA SALIDA KARDEX","UPDATE","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 03:36:35");
INSERT INTO tbl_bitacoras VALUES("478","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:38:57");
INSERT INTO tbl_bitacoras VALUES("479","47","PANTALLA SALIDA KARDEX","UPDATE","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 03:39:16");
INSERT INTO tbl_bitacoras VALUES("480","47","PANTALLA SALIDA KARDEX","UPDATE","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 03:42:18");
INSERT INTO tbl_bitacoras VALUES("481","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:42:30");
INSERT INTO tbl_bitacoras VALUES("482","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:42:36");
INSERT INTO tbl_bitacoras VALUES("483","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:47:17");
INSERT INTO tbl_bitacoras VALUES("484","47","PANTALLA SALIDA KARDEX","UPDATE","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 03:47:29");
INSERT INTO tbl_bitacoras VALUES("485","47","PANTALLA SALIDA KARDEX","UPDATE","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 03:48:06");
INSERT INTO tbl_bitacoras VALUES("486","47","PANTALLA SALIDA KARDEX","UPDATE","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 03:49:08");
INSERT INTO tbl_bitacoras VALUES("487","47","PANTALLA SALIDA KARDEX","UPDATE","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 03:50:04");
INSERT INTO tbl_bitacoras VALUES("488","47","PANTALLA SALIDA KARDEX","UPDATE","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 03:51:03");
INSERT INTO tbl_bitacoras VALUES("489","47","PANTALLA SALIDA KARDEX","UPDATE","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 03:52:25");
INSERT INTO tbl_bitacoras VALUES("490","47","PANTALLA SALIDA KARDEX","UPDATE","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 03:52:36");
INSERT INTO tbl_bitacoras VALUES("491","47","PANTALLA SALIDA KARDEX","UPDATE","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 03:54:23");
INSERT INTO tbl_bitacoras VALUES("492","47","PANTALLA SALIDA KARDEX","UPDATE","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 03:55:53");
INSERT INTO tbl_bitacoras VALUES("493","47","PANTALLA SALIDA KARDEX","UPDATE","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 03:56:04");
INSERT INTO tbl_bitacoras VALUES("494","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:56:09");
INSERT INTO tbl_bitacoras VALUES("495","47","PANTALLA SALIDA KARDEX","UPDATE","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 03:56:22");
INSERT INTO tbl_bitacoras VALUES("496","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 03:59:10");
INSERT INTO tbl_bitacoras VALUES("497","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 07:51:24");
INSERT INTO tbl_bitacoras VALUES("498","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 07:52:45");
INSERT INTO tbl_bitacoras VALUES("499","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 07:54:54");
INSERT INTO tbl_bitacoras VALUES("500","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 07:55:16");
INSERT INTO tbl_bitacoras VALUES("501","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 07:55:20");
INSERT INTO tbl_bitacoras VALUES("502","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 07:55:27");
INSERT INTO tbl_bitacoras VALUES("503","15","PANTALLA PRODUCTO","INGRESO A LA PANTALLA PRODUCTO","Ingreso a pantalla Producto","2020-12-20 07:55:32");
INSERT INTO tbl_bitacoras VALUES("504","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 07:55:35");
INSERT INTO tbl_bitacoras VALUES("505","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 07:55:39");
INSERT INTO tbl_bitacoras VALUES("506","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 08:18:52");
INSERT INTO tbl_bitacoras VALUES("507","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 08:19:00");
INSERT INTO tbl_bitacoras VALUES("508","30","PANTALLA SALIDA KARDEX","EDITAR UN REGISTRO","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 08:26:50");
INSERT INTO tbl_bitacoras VALUES("509","30","PANTALLA SALIDA KARDEX","EDITAR UN REGISTRO","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 08:27:11");
INSERT INTO tbl_bitacoras VALUES("510","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 08:27:30");
INSERT INTO tbl_bitacoras VALUES("511","30","PANTALLA SALIDA KARDEX","EDITAR UN REGISTRO","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 08:30:58");
INSERT INTO tbl_bitacoras VALUES("512","30","PANTALLA SALIDA KARDEX","EDITAR UN REGISTRO","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 08:33:47");
INSERT INTO tbl_bitacoras VALUES("513","30","PANTALLA SALIDA KARDEX","EDITAR UN REGISTRO","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 09:18:19");
INSERT INTO tbl_bitacoras VALUES("514","30","PANTALLA SALIDA KARDEX","EDITAR UN REGISTRO","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 09:24:42");
INSERT INTO tbl_bitacoras VALUES("515","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:24:48");
INSERT INTO tbl_bitacoras VALUES("516","30","PANTALLA SALIDA KARDEX","EDITAR UN REGISTRO","UPDATE tbl_inventario SET nombre_equipo=\'JERINGAS\'","2020-12-20 09:25:04");
INSERT INTO tbl_bitacoras VALUES("517","30","PANTALLA RETIRO KARDEX","INSERT","INSERT INTO tbl_libro_diario(id_cuenta_cargada,id_","2020-12-20 09:25:23");
INSERT INTO tbl_bitacoras VALUES("518","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:25:29");
INSERT INTO tbl_bitacoras VALUES("519","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:25:46");
INSERT INTO tbl_bitacoras VALUES("520","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:25:52");
INSERT INTO tbl_bitacoras VALUES("521","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 09:25:55");
INSERT INTO tbl_bitacoras VALUES("522","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:25:58");
INSERT INTO tbl_bitacoras VALUES("523","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 09:26:12");
INSERT INTO tbl_bitacoras VALUES("524","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:26:15");
INSERT INTO tbl_bitacoras VALUES("525","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:26:30");
INSERT INTO tbl_bitacoras VALUES("526","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:28:18");
INSERT INTO tbl_bitacoras VALUES("527","47","PANTALLA RETIRO KARDEX","INSERT","INSERT INTO tbl_libro_diario(id_cuenta_cargada,id_","2020-12-20 09:28:27");
INSERT INTO tbl_bitacoras VALUES("528","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:32:04");
INSERT INTO tbl_bitacoras VALUES("529","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:33:45");
INSERT INTO tbl_bitacoras VALUES("530","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:35:04");
INSERT INTO tbl_bitacoras VALUES("531","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:35:47");
INSERT INTO tbl_bitacoras VALUES("532","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:42:37");
INSERT INTO tbl_bitacoras VALUES("533","47","PANTALLA COMPRAS","INGRESO A LA PANTALLA COMPRAS","Ingreso a Pantalla Compras","2020-12-20 09:42:43");
INSERT INTO tbl_bitacoras VALUES("534","15","PANTALLA PRODUCTO","INGRESO A LA PANTALLA PRODUCTO","Ingreso a pantalla Producto","2020-12-20 09:42:50");
INSERT INTO tbl_bitacoras VALUES("535","0","PANTALLA PRODUCTO","INSERT","INSERT INTO tbl_inventario(nombre_equipo,id_produc","2020-12-20 09:43:15");
INSERT INTO tbl_bitacoras VALUES("536","15","PANTALLA PRODUCTO","UPDATE","UPDATE tbl_producto\n        SET nombre = \'MASCARI","2020-12-20 09:43:28");
INSERT INTO tbl_bitacoras VALUES("537","47","PANTALLA COMPRAS","INGRESO A LA PANTALLA COMPRAS","Ingreso a Pantalla Compras","2020-12-20 09:43:36");
INSERT INTO tbl_bitacoras VALUES("538","0","PANTALLA COMPRAS","INSERT","INSERT INTO tbl_libro_diario(id_cuenta_cargada,id_","2020-12-20 09:43:53");
INSERT INTO tbl_bitacoras VALUES("539","0","PANTALLA COMPRAS","INSERT","INSERT INTO tbl_libro_diario(id_cuenta_cargada,id_","2020-12-20 09:44:06");
INSERT INTO tbl_bitacoras VALUES("540","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:44:14");
INSERT INTO tbl_bitacoras VALUES("541","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:44:19");
INSERT INTO tbl_bitacoras VALUES("542","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:44:37");
INSERT INTO tbl_bitacoras VALUES("543","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:46:00");
INSERT INTO tbl_bitacoras VALUES("544","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:48:06");
INSERT INTO tbl_bitacoras VALUES("545","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:48:55");
INSERT INTO tbl_bitacoras VALUES("546","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:49:02");
INSERT INTO tbl_bitacoras VALUES("547","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:49:24");
INSERT INTO tbl_bitacoras VALUES("548","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:50:51");
INSERT INTO tbl_bitacoras VALUES("549","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:50:57");
INSERT INTO tbl_bitacoras VALUES("550","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:51:00");
INSERT INTO tbl_bitacoras VALUES("551","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:51:09");
INSERT INTO tbl_bitacoras VALUES("552","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:52:17");
INSERT INTO tbl_bitacoras VALUES("553","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:52:30");
INSERT INTO tbl_bitacoras VALUES("554","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:52:57");
INSERT INTO tbl_bitacoras VALUES("555","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:53:03");
INSERT INTO tbl_bitacoras VALUES("556","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 09:53:14");
INSERT INTO tbl_bitacoras VALUES("557","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 09:53:31");
INSERT INTO tbl_bitacoras VALUES("558","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 09:55:52");
INSERT INTO tbl_bitacoras VALUES("559","15","PANTALLA PROVEEDORES","INGRESO A LA PANTALLA PROVEEDORES","ingreso a pantalla Proveedores","2020-12-20 10:09:48");
INSERT INTO tbl_bitacoras VALUES("560","15","PANTALLA PRODUCTO","INGRESO A LA PANTALLA PRODUCTO","Ingreso a pantalla Producto","2020-12-20 10:09:51");
INSERT INTO tbl_bitacoras VALUES("561","15","PANTALLA PRODUCTO","INGRESO A LA PANTALLA PRODUCTO","Ingreso a pantalla Producto","2020-12-20 10:12:46");
INSERT INTO tbl_bitacoras VALUES("562","0","PANTALLA PRODUCTO","INSERT","INSERT INTO tbl_inventario(nombre_equipo,id_produc","2020-12-20 10:13:11");
INSERT INTO tbl_bitacoras VALUES("563","15","PANTALLA PRODUCTO","UPDATE","UPDATE tbl_producto\n        SET nombre = \'ALCOHOL","2020-12-20 10:13:23");
INSERT INTO tbl_bitacoras VALUES("564","47","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 10:13:38");
INSERT INTO tbl_bitacoras VALUES("565","47","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 10:25:48");
INSERT INTO tbl_bitacoras VALUES("566","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 10:26:02");
INSERT INTO tbl_bitacoras VALUES("567","32","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 10:27:02");
INSERT INTO tbl_bitacoras VALUES("568","32","PANTALLA LIBRO DIARIO","INGRESO A LA PANTALLA LIBRO DIARIO","ingreso a pantalla Libro Diario","2020-12-20 10:27:08");
INSERT INTO tbl_bitacoras VALUES("569","30","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 10:33:20");
INSERT INTO tbl_bitacoras VALUES("570","15","PANTALLA PRODUCTO","INGRESO A LA PANTALLA PRODUCTO","Ingreso a pantalla Producto","2020-12-20 10:33:25");
INSERT INTO tbl_bitacoras VALUES("571","15","PANTALLA PRODUCTO","INGRESO A LA PANTALLA PRODUCTO","Ingreso a pantalla Producto","2020-12-20 10:37:20");
INSERT INTO tbl_bitacoras VALUES("572","30","PANTALLA COMPRAS","INGRESO A LA PANTALLA COMPRAS","Ingreso a Pantalla Compras","2020-12-20 10:37:23");
INSERT INTO tbl_bitacoras VALUES("573","30","PANTALLA COMPRAS","INGRESO A LA PANTALLA COMPRAS","Ingreso a Pantalla Compras","2020-12-20 10:41:51");
INSERT INTO tbl_bitacoras VALUES("574","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 10:41:54");
INSERT INTO tbl_bitacoras VALUES("575","30","PANTALLA KARDEX","INGRESO A LA PANTALLA KARDEX","ingreso a pantalla Kardex","2020-12-20 10:46:04");
INSERT INTO tbl_bitacoras VALUES("576","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 10:51:49");
INSERT INTO tbl_bitacoras VALUES("577","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-20 10:51:53");
INSERT INTO tbl_bitacoras VALUES("578","15","PANTALLA DE USUARIOS","MODIFICAR UN REGISTRO","UPDATE tbl_usuario SET nombre_usuario=\'PRUEBA\', us","2020-12-20 10:52:05");
INSERT INTO tbl_bitacoras VALUES("579","47","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 10:52:15");
INSERT INTO tbl_bitacoras VALUES("580","15","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 10:52:37");
INSERT INTO tbl_bitacoras VALUES("581","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-20 10:52:40");
INSERT INTO tbl_bitacoras VALUES("582","15","PANTALLA DE USUARIOS","MODIFICAR UN REGISTRO","UPDATE tbl_usuario SET nombre_usuario=\'ADMINISTRAD","2020-12-20 10:52:58");
INSERT INTO tbl_bitacoras VALUES("583","15","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-20 10:55:46");
INSERT INTO tbl_bitacoras VALUES("584","2","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 10:55:53");
INSERT INTO tbl_bitacoras VALUES("585","2","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 10:56:20");
INSERT INTO tbl_bitacoras VALUES("586","2","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-20 10:56:24");
INSERT INTO tbl_bitacoras VALUES("587","2","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-20 10:58:09");
INSERT INTO tbl_bitacoras VALUES("588","2","PANTALLA DE USUARIOS","INSERTAR NUEVO USUARIO","insert into tbl_usuario (nombre_Usuario,usuario,id","2020-12-20 10:58:54");
INSERT INTO tbl_bitacoras VALUES("589","2","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-20 10:59:53");
INSERT INTO tbl_bitacoras VALUES("590","2","PANTALLA USUARIOS","INGRESO A LA PANTALLA USUARIOS","ingreso a pantalla usuarios","2020-12-20 11:01:16");
INSERT INTO tbl_bitacoras VALUES("591","2","Pantalla de Usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'47\'","2020-12-20 11:01:20");
INSERT INTO tbl_bitacoras VALUES("592","2","Pantalla de Usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'48\'","2020-12-20 11:01:32");
INSERT INTO tbl_bitacoras VALUES("593","2","PANTALLA PRINCIPAL","INGRESO A LA PANTALLA PRINCIPAL","ingreso a pantalla principal","2020-12-20 11:02:27");



DROP TABLE IF EXISTS tbl_catalogo_cuenta;

CREATE TABLE `tbl_catalogo_cuenta` (
  `id_catalogo` int(11) NOT NULL AUTO_INCREMENT,
  `cuenta_padre` varchar(20) NOT NULL,
  `tipo_cuenta` varchar(60) NOT NULL,
  `codigo_cuenta` varchar(10) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estatus` varchar(5) NOT NULL DEFAULT 'AC',
  `creado_por` varchar(25) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `modificado_por` varchar(25) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `id_libro_diario` int(11) NOT NULL,
  PRIMARY KEY (`id_catalogo`),
  KEY `id_libro_diario` (`id_libro_diario`)
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_catalogo_cuenta VALUES("118","11","BANCO","111","ACTIVO CORRIENTES","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("119","11","CAJA","112","ACTIVO CORRIENTES","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("120","11","CLIENTES","113","ACTIVO CORRIENTES","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("121","11","INVENTARIO","114","ACTIVO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("122","11","CUENTAS POR COBRAR","115","ACTIVO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("123","11","SUMINISTRO","116","ACTIVO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("124","12","TERRENOS","121","ACTIVO NO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("125","12","EDIFICIOS","122","ACTIVO NO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("126","11","PUBLICIDAD","117","ACTIVO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("127","12","MOBILIARIO Y EQUIPO","123","ACTIVO NO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("128","12","EQUIPO DE OFICINA","124","ACTIVO NO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("129","21","IMPUESTOS POR PAGAR","211","PASIVO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("130","21","INTERESES POR PAGAR","212","PASIVO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("131","21","DOCUMENTOS POR PAGAR","213","PASIVO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("132","21","SEGUROS POR PAGAR","214","PASIVO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("133","21","SALARIOS POR PAGAR","215","PASIVO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("134","21","RENTAS COBRADAS POR ANTICIPADO","216","PASIVO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("135","22","PRESTAMOS","221","PASIVO NO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("136","22","CREDITOS HIPOTECARIOS","222"," PASIVO NO CORRIENTE","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("137","3","CAPITAL SOCIAL","31","PATRIMONIO","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("138","3","UTILIDADES ACUMULADAS","32","PATRIMONIO","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("139","3","UTLIDADES DEL EJERCICIO","33","PATRIMONIO","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("140","3","RESERVA DE LEGAL","34","PATRIMONIO","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("141","5","DONACIONES","51","INGRESO","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("143","5","COMISIONES","53","INGRESO","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("144","5","OTROS INGRESOS","54","INGRESO","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("145","6","COMPRAS","61","GASTOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("146","6","FLETES SOBRE COMPRA","62","GASTOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("147","6","DEVOLUCION SOBRE COMPRAS","63","GASTOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("148","6","DESCUENTO SOBRE COMPRA","64","GASTOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("149","6","SUELDOS Y SALARIOS","65","GASTOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("150","6","SERVICIOS  PUBLICOS","66","GASTOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("151","6","VIGILANCIA","67","GASTOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("152","6","SERVICIOS CONTABLES","68","GASTOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("153","6","GASTOS DE ASEO","69","GASTOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("154","5","INGRESOS FINANCIEROS","55","INGRESOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("155","5","INGRESOS DIVERSOS","56","GASTOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("156","6","GASTOS DE REPARACION","70","GASTOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("157","6","GASTOS DE MANTENIMIENTO","71","GASTOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("158","6","GASTOS LEGALES","72","GASTOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("159","6","OTROS GASTOS","73","GASTOS","AC","ADMIN","2020-04-21 11:37:46","","0000-00-00 00:00:00","0");
INSERT INTO tbl_catalogo_cuenta VALUES("164","121","SUMINISTRO","115","ACTIVO CORRIENTE","AC","","2020-05-11 12:21:18","","2020-05-13 10:34:26","0");



DROP TABLE IF EXISTS tbl_compra;

CREATE TABLE `tbl_compra` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `cantidad` int(15) NOT NULL,
  `precio` float NOT NULL,
  `ID_Proveedor` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `creado_por` varchar(30) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `id_producto` (`id_producto`),
  KEY `ID_Proveedor` (`ID_Proveedor`),
  CONSTRAINT `tbl_compra_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `tbl_producto` (`id_producto`) ON UPDATE CASCADE,
  CONSTRAINT `tbl_compra_ibfk_2` FOREIGN KEY (`ID_Proveedor`) REFERENCES `tbl_proveedor` (`ID_Proveedor`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tbl_compra VALUES("1","1","JERINGAS","80","1200","1","2020-12-20 03:09:20","PRUEBA","0000-00-00 00:00:00");
INSERT INTO tbl_compra VALUES("2","1","JERINGAS","30","450","1","2020-12-20 03:10:45","PRUEBA","0000-00-00 00:00:00");
INSERT INTO tbl_compra VALUES("3","2","MASCARILLAS","500","25000","1","2020-12-20 09:43:53","PRUEBA","0000-00-00 00:00:00");
INSERT INTO tbl_compra VALUES("4","2","MASCARILLAS","20","1000","1","2020-12-20 09:44:06","PRUEBA","0000-00-00 00:00:00");



DROP TABLE IF EXISTS tbl_departamento;

CREATE TABLE `tbl_departamento` (
  `id_departamento` int(11) NOT NULL AUTO_INCREMENT,
  `Departamento` varchar(50) NOT NULL,
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_departamento VALUES("1","LA CEIBA, ATLANTIDA");
INSERT INTO tbl_departamento VALUES("2","EL PARAISO, EL PARAISO");
INSERT INTO tbl_departamento VALUES("3","JUTIAPA ATLANTIDA");
INSERT INTO tbl_departamento VALUES("4","JUTICALPA, OLANCHO");
INSERT INTO tbl_departamento VALUES("5","LA PAZ, LA PAZ");
INSERT INTO tbl_departamento VALUES("6","TEGUCIGALPA, FRANCISCO MORAZAN");
INSERT INTO tbl_departamento VALUES("7","SAN PEDRO SULA, CORTES");
INSERT INTO tbl_departamento VALUES("8","LA LIMA, CORTES");
INSERT INTO tbl_departamento VALUES("9","VILLANUEVA, CORTES");
INSERT INTO tbl_departamento VALUES("10","SIGUATEPEQUE, COMAYAGUA");
INSERT INTO tbl_departamento VALUES("11","COMAYAGUA, COMAYAGUA");
INSERT INTO tbl_departamento VALUES("12","NACAOME, VALLE");
INSERT INTO tbl_departamento VALUES("13","CHOLUTECA, CHOLUTECA");
INSERT INTO tbl_departamento VALUES("14","EL PROGRESO, YORO");
INSERT INTO tbl_departamento VALUES("15","ISLAS DE LA BAHIA, ROATAN");
INSERT INTO tbl_departamento VALUES("16","YORO. YORO");
INSERT INTO tbl_departamento VALUES("17","AMAPALA, VALLE");
INSERT INTO tbl_departamento VALUES("18","CATACAMAS, OLANCHO");
INSERT INTO tbl_departamento VALUES("19","OCOTEPEQUE, OCOTEPEQUE");
INSERT INTO tbl_departamento VALUES("20","GRACIAS, LEMPIRA");
INSERT INTO tbl_departamento VALUES("21","UTILA, ISLAS DE LA BAHIA");
INSERT INTO tbl_departamento VALUES("22","LA ESPERANZA, INTIBUCA");
INSERT INTO tbl_departamento VALUES("23","CAMASCA, INTIBUCA");
INSERT INTO tbl_departamento VALUES("24","PUERTO LEMOIRA, GRACIAS A DIOS");
INSERT INTO tbl_departamento VALUES("25","VALLE DE ANGELES, FRANCISCO MORAZAN");



DROP TABLE IF EXISTS tbl_inventario;

CREATE TABLE `tbl_inventario` (
  `Id_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(15) NOT NULL,
  `precio` float NOT NULL,
  `nombre_equipo` varchar(30) NOT NULL,
  `creado_por` varchar(20) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `modificado_por` varchar(20) NOT NULL,
  `fecha_modificacion` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`Id_equipo`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `tbl_inventario_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `tbl_producto` (`id_producto`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO tbl_inventario VALUES("1","1","60","15","JERINGAS","PRUEBA","2020-12-20 03:08:50","","2020-12-20 09:28:27");
INSERT INTO tbl_inventario VALUES("2","2","520","50","MASCARILLAS","PRUEBA","2020-12-20 09:43:14","","2020-12-20 09:44:06");
INSERT INTO tbl_inventario VALUES("3","3","0","20","ALCOHOL","PRUEBA","2020-12-20 10:13:11","","2020-12-20 10:13:11");



DROP TABLE IF EXISTS tbl_libro_diario;

CREATE TABLE `tbl_libro_diario` (
  `id_libro_diario` int(11) NOT NULL AUTO_INCREMENT,
  `id_cuenta_cargada` int(11) NOT NULL,
  `fecha_operacion` date NOT NULL,
  `id_cuenta_debitada` int(11) NOT NULL,
  `monto_operacion` decimal(11,2) NOT NULL,
  `desglose_operacion` varchar(30) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT 'ACTI',
  `creado_por` varchar(25) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `modificado_por` varchar(25) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id_libro_diario`)
) ENGINE=InnoDB AUTO_INCREMENT=271 DEFAULT CHARSET=latin1;

INSERT INTO tbl_libro_diario VALUES("1","23","2020-03-01","65","2555.02","compre","ACTI","dandino","2020-03-01 04:59:56","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("2","23","2020-03-01","65","20500.02","pago","ACTI","dandino","2020-03-01 05:01:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("3","35","2020-03-02","65","2500.00","compra de sillas","ACTI","dandino","2020-03-21 06:11:03","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("4","35","2020-03-02","65","2566.00","comprar silla","ACTI","dandino","2020-03-21 06:12:44","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("5","35","2020-03-02","65","2566.00","compra de silla","ACTI","dandino","2020-03-21 06:13:54","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("6","4","2020-03-02","65","2566.00","compra de silla","ACTI","dandino","2020-03-21 06:16:05","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("7","6","2020-03-11","65","99999.99","gsjytf","ACTI","dandino","2020-03-21 06:20:34","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("8","24","2020-03-12","65","250.23","compra de comida","ACTI","dandino","2020-03-22 03:08:59","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("9","4","2020-01-01","65","2000.00","pago de cheques","ACTI","dandino","2020-03-23 22:28:16","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("10","43","2020-04-21","65","5000.00","pago","ACTI","orlando","2020-04-21 14:32:26","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("11","111","2020-04-21","65","5000.00","COMPRA","ELIM","orlando","2020-04-21 18:58:24","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("12","112","2020-04-21","65","1233.00","compra","ELIM","orlando","2020-04-21 19:04:51","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("13","113","2020-04-22","65","520.00","devolucion","ELIM","orlando","2020-04-21 19:05:33","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("14","114","2020-04-21","65","852.00","descuento","ELIM","orlando","2020-04-21 19:06:17","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("15","115","2020-04-01","65","10000.00","INVE","ELIM","orlando","2020-04-21 19:32:39","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("16","77","2020-04-15","65","12000.00","PAGO","ACTI","orlando","2020-04-21 19:33:33","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("17","87","2020-04-11","65","8400.00","PAGO","ACTI","orlando","2020-04-21 19:35:13","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("18","89","2020-04-25","65","2500.00","PAGADO","ACTI","orlando","2020-04-21 19:36:41","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("19","86","2020-04-24","65","800.00","PAGADP","ACTI","orlando","2020-04-21 19:37:26","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("20","88","2020-04-22","65","1863.00","PAGADA","ACTI","orlando","2020-04-21 19:38:25","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("21","65","2020-04-07","65","12000.00","prestamo","ACTI","orlando","2020-04-21 19:47:39","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("22","114","2020-04-21","65","2000.00","descuento","ACTI","orlando","2020-04-22 09:51:31","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("23","111","2020-04-22","65","14220.00","","ACTI","orlando","2020-04-22 09:51:44","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("24","112","2020-04-22","65","15000.00","","ACTI","orlando","2020-04-22 09:52:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("25","36","2020-05-21","65","10000.00","PUEBA","ACTI","","2020-05-01 16:12:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("26","77","2020-05-07","65","9999.00","PAGO EMPLEADOS","ACTI","","2020-05-02 15:57:08","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("27","57","2020-05-23","29","400.00","PAGO EMPLEADOS","ACTI","","2020-05-02 18:13:40","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("28","57","2020-05-04","29","15000.00","DEPOSITO","ACTI","","2020-05-02 20:39:41","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("29","29","2020-05-13","83","51200.00","PAGO EMPLEADOS","ACTI","","2020-05-02 23:09:27","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("31","29","2020-05-14","65","1000000.00","PAGO","ACTI","","2020-05-02 23:15:23","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("32","29","2020-05-03","48","50000.00","PAGO DE MOBILIARIO Y EQUIPO","ACTI","","2020-05-03 00:21:25","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("48","73","2020-05-14","112","200.00","PAGOS VARIOS","ACTI","","2020-05-14 03:22:48","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("49","54","2020-05-14","111","11000.00","INGRESOS A LA FUNADACION","ACTI","","2020-05-14 07:01:42","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("50","121","2020-05-15","119","2500.00","COMPRA DE IMPRESORA","ELIM","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("51","121","2020-05-15","119","400.00","COMPRA DE COMPUTADORA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("52","121","2020-05-15","119","1200.00","COMPRA DE MALLAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("53","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("54","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("55","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("56","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("57","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("58","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("59","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("60","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("61","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("62","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("63","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("64","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("65","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("66","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("67","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("68","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("69","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("70","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("71","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("72","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("73","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("74","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("75","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("76","141","2020-05-16","121","0.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("77","121","2020-05-17","119","250.00","COMPRA DE CUADERNOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("78","121","2020-05-17","119","250.00","COMPRA DE CUADERNOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("79","121","2020-05-17","119","2500.00","COMPRA DE ESCRITORIOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("80","121","2020-05-17","119","35000.00","COMPRA DE ESCRITORIOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("81","121","2020-05-17","119","350.00","COMPRA DE MALLAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("82","121","2020-05-17","119","25000.00","COMPRA DE MEDICAMENTOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("83","121","2020-05-17","119","12000.00","COMPRA DE COMPUTADORA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("84","141","2020-05-17","121","1000000.00","DONATIVO DE 1","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("85","141","2020-05-17","121","1000000.00","DONATIVO DE 1","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("86","141","2020-05-17","121","1000000.00","DONATIVO DE 1","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("87","141","2020-05-17","121","1000000.00","DONATIVO DE 1","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("88","141","2020-05-17","121","250000.00","DONATIVO DE 1","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("89","141","2020-05-17","121","250000.00","DONATIVO DE 1","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("90","141","2020-05-17","121","60000.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("91","141","2020-05-17","121","60000.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("92","141","2020-05-17","121","50000.00","DONATIVO DE 1","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("93","141","2020-05-17","121","50000.00","DONATIVO DE 1","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("94","121","2020-05-17","119","250.00","COMPRA DE LAPIZ","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("95","141","2020-05-17","121","12000.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("96","141","2020-05-17","121","12000.00","DONATIVO DE 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("97","121","2020-05-17","119","100.00","COMPRA DE MASCARILLAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("98","141","2020-05-17","121","200.00","DONATIVO DE 4","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("99","141","2020-05-17","121","200.00","DONATIVO DE 4","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("100","141","2020-05-17","121","750.00","DONATIVO DE 4","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("101","141","2020-05-17","121","750.00","DONATIVO DE 4","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("102","141","2020-05-17","121","500.00","DONATIVO DE 3","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("103","141","2020-05-17","121","500.00","DONATIVO DE 3","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("104","141","2020-05-17","121","300.00","DONATIVO DE 4","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("105","141","2020-05-17","121","300.00","DONATIVO DE 4","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("106","121","2020-05-17","141","300.00","CANCELACION DE MASCARILLAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("107","111","2020-05-17","122","300.00","PAGO EMPLEADOS","ACTI","","2020-05-17 18:36:15","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("108","112","2020-05-17","117","200.00","HOLA","ACTI","","2020-05-17 18:37:49","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("109","121","2020-05-18","119","60.00","COMPRA DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("110","141","2020-05-18","121","6000.00","DONATIVO DE 5","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("111","141","2020-05-18","121","6000.00","DONATIVO DE 5","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("112","121","2020-05-18","141","6000.00","CANCELACION DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("113","121","2020-05-18","119","10000.00","COMPRA DE BATAS QUIRURGICAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("114","141","2020-05-18","121","200000.00","DONATIVO DE 6","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("115","141","2020-05-18","121","200000.00","DONATIVO DE 6","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("116","121","2020-05-18","141","200000.00","CANCELACION DE BATAS QUIRURGIC","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("117","141","2020-05-18","121","450000.00","DONATIVO DE 6","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("118","141","2020-05-18","121","450000.00","DONATIVO DE 6","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("119","121","2020-05-18","141","450000.00","CANCELACION DE BATAS QUIRURGIC","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("120","121","2020-05-18","141","500.00","CANCELACION DE LAPIZ","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("121","141","2020-05-18","121","100000.00","DONATIVO DE 6","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("122","141","2020-05-18","121","100000.00","DONATIVO DE 6","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("123","121","2020-05-18","141","100000.00","CANCELACION DE BATAS QUIRURGIC","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("124","141","2020-05-18","121","100000.00","DONATIVO DE 6","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("125","141","2020-05-18","121","100000.00","DONATIVO DE 6","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("126","112","2020-05-18","111","5221.00","PRUEBA YA","ACTI","","2020-05-18 09:52:25","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("127","118","2020-05-06","119","9999.00","MOBILIARIO","ACTI","","2020-05-18 10:26:26","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("128","141","2020-05-18","121","1200.00","DONATIVO DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("129","141","2020-05-18","121","1200.00","DONATIVO DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("130","141","2020-05-18","121","1750.00","DONATIVO DE LAPIZ","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("131","141","2020-05-18","121","1750.00","DONATIVO DE LAPIZ","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("132","141","2020-05-18","121","175000.00","DONATIVO DE MEDICAMENTOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("133","141","2020-05-18","121","175000.00","DONATIVO DE MEDICAMENTOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("134","141","2020-05-18","121","25000.00","DONATIVO DE MEDICAMENTOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("135","141","2020-05-18","121","25000.00","DONATIVO DE MEDICAMENTOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("136","141","2020-05-18","121","250.00","DONATIVO DE LAPIZ","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("137","119","2020-05-18","145","400.00","MALLAS","ACTI","","2020-05-18 11:03:31","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("138","126","2020-05-18","125","500.00","PAGO EMPLEADOS","ACTI","","2020-05-18 11:05:53","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("139","149","2020-05-18","119","400.00","PAGO EMPLEADOS","ACTI","","2020-05-18 15:31:28","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("140","121","2020-05-18","119","500.00","COMPRA DE LAPIZ","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("141","135","2020-05-18","128","400.00","HOLA","ACTI","","2020-05-18 16:40:25","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("142","145","2020-05-18","119","500.00","COMPRA DE CUADERNOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("143","141","2020-05-18","121","600.00","DONATIVO DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("144","147","2020-05-18","119","600.00","CANCELACION DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("145","145","2020-05-18","119","100.00","COMPRA DE INFORMATICA ADMIN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("146","145","2020-05-18","119","100.00","COMPRA DE INFORMATICA ADMIN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("147","141","2020-05-18","121","200.00","DONATIVO DE INFORMATICA ADMIN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("148","145","2020-05-18","119","100.00","COMPRA DE INFORMATICA ADMIN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("149","145","2020-05-19","119","100.00","COMPRA DE CUADERNOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("150","145","2020-05-19","119","100.00","COMPRA DE AHORA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("151","145","2020-05-19","119","100.00","COMPRA DE AHORA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("152","145","2020-05-19","119","100.00","COMPRA DE COMPUTADORA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("153","145","2020-05-19","119","10000.00","COMPRA DE CUADERNOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("154","145","2020-05-19","119","10000.00","COMPRA DE CUADERNOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("155","145","2020-05-19","119","10000.00","COMPRA DE CUADERNOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("156","145","2020-05-19","119","10000.00","COMPRA DE CUADERNOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("157","145","2020-05-19","119","10000.00","COMPRA DE TECLADO","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("158","145","2020-05-19","119","200.00","COMPRA DE COMPUTADORA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("159","145","2020-05-19","119","200.00","COMPRA DE COMPUTADORA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("160","145","2020-05-19","119","200.00","COMPRA DE COMPUTADORA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("161","145","2020-05-19","119","200.00","COMPRA DE COMPUTADORA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("162","145","2020-05-19","119","10000.00","COMPRA DE COMPUTADORA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("163","145","2020-05-19","119","10000.00","COMPRA DE COMPUTADORA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("164","145","2020-05-19","119","2.00","COMPRA DE AGUA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("165","145","2020-05-19","119","500.00","COMPRA DE PAÃ±ALES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("166","145","2020-05-19","119","500.00","COMPRA DE PAÃ±ALES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("167","145","2020-05-20","119","100.00","COMPRA DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("168","145","2020-05-20","119","100.00","COMPRA DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("169","145","2020-05-20","119","100.00","COMPRA DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("170","141","2020-05-20","121","4000.00","DONATIVO DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("171","145","2020-05-20","119","100.00","COMPRA DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("172","145","2020-05-20","119","100.00","COMPRA DE AGUA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("173","145","2020-05-20","119","100.00","COMPRA DE AGUA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("174","145","2020-05-20","119","100.00","COMPRA DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("175","145","2020-05-20","119","100.00","COMPRA DE AGUA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("176","145","2020-05-20","119","100.00","COMPRA DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("177","145","2020-05-20","119","100.00","COMPRA DE AGUA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("178","145","2020-05-20","119","100.00","COMPRA DE AHORA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("179","145","2020-05-20","119","100.00","COMPRA DE LUEGO","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("180","145","2020-05-20","119","100.00","COMPRA DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("181","141","2020-05-20","121","1200.00","DONATIVO DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("182","145","2020-05-20","119","100.00","COMPRA DE AGUA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("183","145","2020-05-20","119","100.00","COMPRA DE INFO 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("184","145","2020-05-20","119","100.00","COMPRA DE INFO 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("185","141","2020-05-20","121","2500.00","DONATIVO DE INFO 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("186","145","2020-05-21","119","0.00","COMPRA DE INFO 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("187","145","2020-05-21","119","0.00","COMPRA DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("188","145","2020-05-21","119","0.00","COMPRA DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("189","145","2020-05-21","119","1500.00","COMPRA DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("190","147","2020-05-21","119","18750.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("191","147","2020-05-21","119","1000.00","DEVOLUCION DE AGUA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("192","147","2020-05-21","119","250.00","DEVOLUCION DE INFO 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("193","121","2020-05-21","119","750000.00","RETIRO DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("194","121","2020-05-21","119","2500.00","RETIRO DE INFO 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("195","147","2020-05-21","119","0.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("196","147","2020-05-21","119","0.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("197","147","2020-05-21","119","30.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("198","147","2020-05-21","119","0.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("199","147","2020-05-21","119","0.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("200","147","2020-05-21","119","150.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("201","147","2020-05-21","119","0.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("202","147","2020-05-21","119","360.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("203","147","2020-05-21","119","360.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("204","147","2020-05-21","119","30.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("205","147","2020-05-21","119","1800.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("206","147","2020-05-21","119","1800.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("207","147","2020-05-21","119","1080.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("208","147","2020-05-21","119","30.00","DEVOLUCION DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("209","141","2020-05-22","121","2500.00","DONATIVO DE INFO 2","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("210","141","2020-05-22","119","200.00","MEDICINAS","ACTI","","2020-05-22 07:26:05","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("211","145","2020-09-23","119","50000.00","COMPRA DE AGUA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("212","145","2020-09-23","119","15000.00","COMPRA DE IMPRESORAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("213","141","2020-09-23","121","3000.00","DONATIVO DE IMPRESORAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("214","141","2020-10-05","121","2000.00","DONATIVO DE AGUA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("215","121","2020-10-05","119","2000.00","RETIRO DE AGUA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("216","145","2020-10-06","119","450.00","COMPRA DE MASCARILLAS QUIRURGI","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("217","141","2020-10-06","121","75.00","DONATIVO DE MASCARILLAS QUIRUR","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("218","145","2020-10-06","119","0.00","COMPRA DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("219","141","2020-10-06","121","150.00","DONATIVO DE MASCARILLAS QUIRUR","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("220","145","2020-10-08","119","20000.00","COMPRA DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("221","141","2020-10-08","121","40000.00","DONATIVO DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("222","145","2020-10-09","119","300000.00","COMPRA DE ESCRITORIOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("223","141","2020-10-09","121","20000.00","DONATIVO DE ESCRITORIOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("224","121","2020-10-09","119","20000.00","RETIRO DE ESCRITORIOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("225","145","2020-10-09","119","4000.00","COMPRA DE ESCRITORIOS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("226","0","2020-10-09","119","852.00","PGO DE GAS","ACTI","","2020-10-09 15:17:22","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("227","123","2020-10-01","125","9666.00","UHSHSUS","ELIM","","2020-10-09 15:19:15","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("228","145","2020-10-22","119","15000.00","COMPRA DE PAN","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("229","145","2020-10-22","119","0.00","COMPRA DE AGUA MINERAL","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("230","145","2020-10-22","119","0.00","COMPRA DE AGUA MINERAL","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("231","145","2020-10-22","119","500000.00","COMPRA DE AGUA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("232","145","2020-10-22","119","0.00","COMPRA DE JIJID","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("233","145","2020-10-23","119","0.00","COMPRA DE NADA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("234","145","2020-10-23","119","300.00","COMPRA DE SAPO","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("235","141","2020-10-23","121","150.00","DONATIVO DE SAPO","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("236","145","2020-10-23","119","0.00","COMPRA DE CABLES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("237","145","2020-10-23","119","0.00","COMPRA DE CABLES","ELIM","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("238","145","2020-10-23","119","10000.00","COMPRA DE GATOS","ELIM","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("239","145","2020-10-24","119","10000.00","COMPRA DE ESCRITORIOS","ELIM","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("240","145","2020-10-24","119","600.00","COMPRA DE PAN","ELIM","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("241","145","2020-10-24","119","200.00","COMPRA DE GATOS","ELIM","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("242","145","2020-10-24","119","0.00","COMPRA DE GUANTES","ELIM","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("243","145","2020-10-24","119","100.00","COMPRA DE PERROS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("244","145","2020-10-24","119","750.00","COMPRA DE SAPO","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("245","145","2020-10-24","119","200.00","COMPRA DE AHORA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("246","145","2020-10-24","119","2000.00","COMPRA DE AGUA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("247","123","2020-11-07","119","500.00","PAGO DE EMPLEADOS","ACTI","","2020-11-07 22:14:40","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("248","135","2020-11-08","131","500.00","NADA","ACTI","","2020-11-08 02:05:01","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("249","119","2020-11-12","129","3000.00","PAGAR IMPUESTOS  ","ACTI","","2020-11-12 23:58:07","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("250","119","2020-11-13","137","50000.00","PRUEBA","ACTI","","2020-11-13 23:35:19","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("251","120","2020-11-13","119","500.00","UHSHSUS","ACTI","","2020-11-13 23:36:44","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("252","119","2020-11-14","120","852.00","PRUEBA","ACTI","","2020-11-14 00:12:50","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("253","145","2020-11-21","119","300.00","COMPRA DE GASAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("254","141","2020-11-22","121","225.00","DONATIVO DE GASAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("255","128","2020-11-23","118","852.00","JSJOSLJO","ACTI","15","2020-11-23 00:07:52","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("256","145","2020-11-23","119","2500.00","COMPRA DE PERROS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("257","145","2020-12-11","119","20000.00","COMPRA DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("258","145","2020-12-11","119","100.00","COMPRA DE GUANTES","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("259","145","2020-12-11","119","0.00","COMPRA DE AGUA MINERAL","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("260","145","2020-12-11","119","2500.00","COMPRA DE AGUA MINERAL","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("261","141","2020-12-11","121","250.00","DONATIVO DE AGUA MINERAL","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("262","145","2020-12-20","119","1000.00","COMPRA DE PRUEBA","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("263","145","2020-12-20","119","1200.00","COMPRA DE JERINGAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("264","141","2020-12-20","121","150.00","DONATIVO DE JERINGAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("265","145","2020-12-20","119","450.00","COMPRA DE JERINGAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("266","141","2020-12-20","121","150.00","DONATIVO DE JERINGAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("267","141","2020-12-20","121","300.00","DONATIVO DE JERINGAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("268","141","2020-12-20","121","150.00","DONATIVO DE JERINGAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("269","145","2020-12-20","119","25000.00","COMPRA DE MASCARILLAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");
INSERT INTO tbl_libro_diario VALUES("270","145","2020-12-20","119","1000.00","COMPRA DE MASCARILLAS","ACTI","","0000-00-00 00:00:00","","0000-00-00 00:00:00");



DROP TABLE IF EXISTS tbl_pantallas;

CREATE TABLE `tbl_pantallas` (
  `id_objeto` bigint(20) NOT NULL AUTO_INCREMENT,
  `objeto` varchar(60) NOT NULL,
  `tipo_objeto` varchar(15) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp(),
  `creado_por` varchar(15) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `modificado_por` varchar(15) NOT NULL,
  PRIMARY KEY (`id_objeto`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

INSERT INTO tbl_pantallas VALUES("41","PROVEEDORES","","MANTENIMIENTO DE PROVEEDORES","2020-12-11 17:49:49","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("42","PRODUCTO","","MANTENIMIENTO DE PRODUCTO","2020-12-11 17:50:05","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("43","COMPRA","","MANTENIMIENTO DE COMPRA","2020-12-11 17:50:18","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("44","INVENTARIO","","KARDEX DE INVENTARIO","2020-12-11 17:50:38","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("45","RETIRO KARDEX","","MANTENIMIENTO DE RETIRO KARDEX","2020-12-11 17:51:00","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("46","CATALOGO","","MANTENIMIENTO DE CATALOGO","2020-12-11 17:51:21","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("47","LIBRO DIARIO","","MANTENIMIENTO DE LIBRO DIARIO","2020-12-11 17:51:38","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("48","USUARIO","","MANTENIMIENTO DE USUARIO","2020-12-11 17:52:04","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("49","BITACORA","","MANTENIMIENTO DE BITACORA","2020-12-11 17:52:20","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("50","PERMISOS","","MANTENIMIENTO DE PERMISOS","2020-12-11 17:52:33","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("51","ROLES","","MANTENIMIENTO DE ROLES","2020-12-11 17:52:46","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("52","BALANCE GENERAL","","ACCESO A ESTADOS FINACIEROS","2020-12-11 22:15:49","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("53","ESTADO DE RESULTADO","","ACCESO A ESTADOS FINACIEROS","2020-12-11 22:16:00","","0000-00-00 00:00:00","");



DROP TABLE IF EXISTS tbl_parametros;

CREATE TABLE `tbl_parametros` (
  `id_parametro` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_parametro`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO tbl_parametros VALUES("1","VENCIMIENTO","30","2017-11-07 00:00:00");
INSERT INTO tbl_parametros VALUES("8","INTENTOS","3","2017-11-21 00:00:00");
INSERT INTO tbl_parametros VALUES("9","PREGUNTAS","3","2019-02-25 00:00:00");
INSERT INTO tbl_parametros VALUES("10","MAX_INVENTARIO","1000","2020-05-17 17:36:06");
INSERT INTO tbl_parametros VALUES("11","MIN_INVENTARIO","500","2020-05-17 17:36:06");



DROP TABLE IF EXISTS tbl_preguntas;

CREATE TABLE `tbl_preguntas` (
  `id_pregunta` bigint(20) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(70) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp(),
  `creado_por` varchar(15) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `modificado_por` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO tbl_preguntas VALUES("1","Fecha de Nacimiento?","2017-05-24 15:10:44","1","2017-06-06 14:38:11","1");
INSERT INTO tbl_preguntas VALUES("2","Color Favorito ?","2017-05-24 15:11:28","1","2017-06-06 14:38:21","1");
INSERT INTO tbl_preguntas VALUES("3","Cual es tu trabajo ideal ?","2017-05-24 15:16:11","1","2019-03-03 09:03:26","");
INSERT INTO tbl_preguntas VALUES("4","Lugar de nacimiento de la madre ?","2017-07-24 15:18:31","1","2017-06-06 14:40:14","");
INSERT INTO tbl_preguntas VALUES("5","Mejor amigo(a) de la infancia ?","2017-07-24 15:18:53","1","2017-06-06 14:40:06","1");
INSERT INTO tbl_preguntas VALUES("6","Nombre de la primera mascota ?","2017-07-24 15:19:13","1","2017-06-06 14:39:58","");
INSERT INTO tbl_preguntas VALUES("7","Ocupacion del abuelo ?","2017-07-24 15:19:27","1","2019-03-03 09:03:08","");
INSERT INTO tbl_preguntas VALUES("8","Personaje de pelicula favorito ?","2017-07-24 15:19:51","1","2019-03-03 09:02:48","");
INSERT INTO tbl_preguntas VALUES("9","Profesor Favorito ?","2017-07-24 15:20:16","1","2017-06-06 14:39:31","");
INSERT INTO tbl_preguntas VALUES("10","Nombre de su pelicula favorita ?","2017-07-24 15:20:36","1","2019-03-03 09:02:15","");
INSERT INTO tbl_preguntas VALUES("11","Modelo de su primer auto ?","2017-07-24 15:21:31","1","2017-06-06 14:39:17","");
INSERT INTO tbl_preguntas VALUES("12","Evento que marca su vida ?","2017-07-24 15:23:11","1","2019-03-03 09:01:56","");



DROP TABLE IF EXISTS tbl_producto;

CREATE TABLE `tbl_producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) NOT NULL,
  `precio` float NOT NULL,
  `minimo` int(25) NOT NULL,
  `maximo` int(25) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `Creado_por` varchar(30) NOT NULL,
  `modificado_por` varchar(50) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO tbl_producto VALUES("1","JERINGAS","15","500","1000","2020-12-20 03:08:50","PRUEBA","","0000-00-00 00:00:00");
INSERT INTO tbl_producto VALUES("2","MASCARILLAS","15","500","1000","2020-12-20 09:43:14","PRUEBA","15","2020-12-20 09:43:27");
INSERT INTO tbl_producto VALUES("3","ALCOHOL","25","500","1000","2020-12-20 10:13:10","PRUEBA","15","2020-12-20 10:13:23");



DROP TABLE IF EXISTS tbl_proveedor;

CREATE TABLE `tbl_proveedor` (
  `ID_Proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `id_departamento` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `Num_Iden` varchar(25) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `creado_por` varchar(60) NOT NULL,
  `Fecha_Creacion` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modificado_por` varchar(25) NOT NULL,
  `fecha_modificacion` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID_Proveedor`),
  KEY `id_departamento` (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tbl_proveedor VALUES("1","6","MARIA","LARIOS","1218199800458","89775232","PRUEBA","2020-12-20 03:08:16","","2020-12-20 03:08:16");



DROP TABLE IF EXISTS tbl_respuestas;

CREATE TABLE `tbl_respuestas` (
  `id_usuario` bigint(20) NOT NULL,
  `id_pregunta` bigint(20) NOT NULL,
  `respuesta` varchar(200) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_pregunta` (`id_pregunta`),
  CONSTRAINT `tbl_respuestas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_respuestas_ibfk_2` FOREIGN KEY (`id_pregunta`) REFERENCES `tbl_preguntas` (`id_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_respuestas VALUES("2","2","azul","2019-04-04 12:39:13");
INSERT INTO tbl_respuestas VALUES("2","4","ojojona","2019-04-04 12:39:38");
INSERT INTO tbl_respuestas VALUES("2","3","programador","2019-04-04 16:08:22");
INSERT INTO tbl_respuestas VALUES("16","5","ana","2019-04-09 17:15:18");
INSERT INTO tbl_respuestas VALUES("16","1","1990","2019-04-09 17:15:24");
INSERT INTO tbl_respuestas VALUES("16","2","rojo","2019-04-09 17:15:30");
INSERT INTO tbl_respuestas VALUES("2","2","azul","2019-04-04 12:39:13");
INSERT INTO tbl_respuestas VALUES("2","4","ojojona","2019-04-04 12:39:38");
INSERT INTO tbl_respuestas VALUES("2","3","programador","2019-04-04 16:08:22");
INSERT INTO tbl_respuestas VALUES("16","5","ana","2019-04-09 17:15:18");
INSERT INTO tbl_respuestas VALUES("16","1","1990","2019-04-09 17:15:24");
INSERT INTO tbl_respuestas VALUES("16","2","rojo","2019-04-09 17:15:30");
INSERT INTO tbl_respuestas VALUES("24","3","ninguno","2020-09-24 00:13:39");
INSERT INTO tbl_respuestas VALUES("24","1","12 de julio 1990","2020-09-24 00:14:48");
INSERT INTO tbl_respuestas VALUES("24","2","negro","2020-09-24 00:14:56");
INSERT INTO tbl_respuestas VALUES("2","2","azul","2019-04-04 12:39:13");
INSERT INTO tbl_respuestas VALUES("2","4","ojojona","2019-04-04 12:39:38");
INSERT INTO tbl_respuestas VALUES("2","3","programador","2019-04-04 16:08:22");
INSERT INTO tbl_respuestas VALUES("16","5","ana","2019-04-09 17:15:18");
INSERT INTO tbl_respuestas VALUES("16","1","1990","2019-04-09 17:15:24");
INSERT INTO tbl_respuestas VALUES("16","2","rojo","2019-04-09 17:15:30");
INSERT INTO tbl_respuestas VALUES("2","2","azul","2019-04-04 12:39:13");
INSERT INTO tbl_respuestas VALUES("2","4","ojojona","2019-04-04 12:39:38");
INSERT INTO tbl_respuestas VALUES("2","3","programador","2019-04-04 16:08:22");
INSERT INTO tbl_respuestas VALUES("16","5","ana","2019-04-09 17:15:18");
INSERT INTO tbl_respuestas VALUES("16","1","1990","2019-04-09 17:15:24");
INSERT INTO tbl_respuestas VALUES("16","2","rojo","2019-04-09 17:15:30");
INSERT INTO tbl_respuestas VALUES("24","3","ninguno","2020-09-24 00:13:39");
INSERT INTO tbl_respuestas VALUES("24","1","12 de julio 1990","2020-09-24 00:14:48");
INSERT INTO tbl_respuestas VALUES("24","2","negro","2020-09-24 00:14:56");
INSERT INTO tbl_respuestas VALUES("32","1","algun dia","2020-11-27 23:26:09");
INSERT INTO tbl_respuestas VALUES("32","2","ninguno","2020-11-27 23:26:18");
INSERT INTO tbl_respuestas VALUES("32","10","bajo las estrellas","2020-11-27 23:27:04");
INSERT INTO tbl_respuestas VALUES("29","11","ninguno","2020-11-27 23:48:18");
INSERT INTO tbl_respuestas VALUES("29","7","ninguno","2020-11-27 23:48:33");
INSERT INTO tbl_respuestas VALUES("29","6","ninguno","2020-11-27 23:48:45");
INSERT INTO tbl_respuestas VALUES("30","5","ninguno","2020-11-27 23:51:24");
INSERT INTO tbl_respuestas VALUES("30","1","ninguno","2020-11-27 23:51:28");
INSERT INTO tbl_respuestas VALUES("30","2","ninguno","2020-11-27 23:51:31");



DROP TABLE IF EXISTS tbl_roles;

CREATE TABLE `tbl_roles` (
  `id_rol` bigint(20) NOT NULL AUTO_INCREMENT,
  `rol` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp(),
  `creado_por` varchar(15) NOT NULL,
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `modificado_por` varchar(15) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

INSERT INTO tbl_roles VALUES("1","NUEVO","USUARIO NUEVO","2020-12-11 14:46:43","","0000-00-00 00:00:00","");
INSERT INTO tbl_roles VALUES("2","ADMINISTRADOR","ADMINISTRADOR DEL APLICATIVO","2020-12-11 14:50:01","","0000-00-00 00:00:00","");
INSERT INTO tbl_roles VALUES("14","CONTADOR","ACCESO A ESTADOS FINACIEROS","2020-12-11 14:50:45","","2020-12-11 14:59:37","");
INSERT INTO tbl_roles VALUES("15","OPERADOR","ACCESOS A LA PANTALLA DE INVENTARIOS","2020-12-11 14:51:31","","2020-12-18 15:06:59","");
INSERT INTO tbl_roles VALUES("16","ESTADOS FINANCIEROS","ACCESO A ESTADOS FINACIEROS","2020-12-11 22:20:11","","0000-00-00 00:00:00","");
INSERT INTO tbl_roles VALUES("20","JAJAJAJJAJ","ACCESO A PROVEEDORES","2020-12-17 19:19:34","ADMINISTRADOR","0000-00-00 00:00:00","");
INSERT INTO tbl_roles VALUES("21","GERENTE ","NINGUNA","2020-12-17 19:21:13","ADMINISTRADOR","0000-00-00 00:00:00","");
INSERT INTO tbl_roles VALUES("22","PRUEBA","ACCESO A PROVEEDORES","2020-12-19 17:44:26","ADMINISTRADOR","0000-00-00 00:00:00","");



DROP TABLE IF EXISTS tbl_roles_objeto;

CREATE TABLE `tbl_roles_objeto` (
  `id_permiso` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_rol` bigint(20) NOT NULL,
  `id_objeto` bigint(20) NOT NULL,
  `permiso_consulta` char(1) NOT NULL,
  `permiso_insercion` varchar(2) DEFAULT NULL,
  `permiso_eliminacion` varchar(2) NOT NULL,
  `permiso_actualizacion` varchar(2) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp(),
  `creado_por` varchar(15) DEFAULT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `modificado_por` varchar(15) DEFAULT NULL,
  `contador` bigint(20) NOT NULL,
  PRIMARY KEY (`id_permiso`),
  KEY `id_rol` (`id_rol`),
  KEY `id_objeto` (`id_objeto`),
  CONSTRAINT `tbl_roles_objeto_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `tbl_roles` (`id_rol`) ON UPDATE CASCADE,
  CONSTRAINT `tbl_roles_objeto_ibfk_2` FOREIGN KEY (`id_objeto`) REFERENCES `tbl_pantallas` (`id_objeto`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO tbl_roles_objeto VALUES("1","14","46","1","1","1","1","2020-12-11 17:55:21","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("2","14","47","1","1","1","1","2020-12-11 17:55:33","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("3","15","44","1","1","1","1","2020-12-11 17:55:48","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("6","15","43","1","1","1","1","2020-12-11 17:56:42","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("7","15","45","1","1","1","1","2020-12-11 17:56:55","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("8","22","41","1","1","0","0","2020-12-19 17:45:46","luisa","0000-00-00 00:00:00","","0");



DROP TABLE IF EXISTS tbl_tipo_cuenta;

CREATE TABLE `tbl_tipo_cuenta` (
  `id_cuenta` int(11) NOT NULL AUTO_INCREMENT,
  `cuenta` varchar(30) NOT NULL,
  `codigo_cuenta` varchar(8) NOT NULL,
  PRIMARY KEY (`id_cuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

INSERT INTO tbl_tipo_cuenta VALUES("1","BANCO","111");
INSERT INTO tbl_tipo_cuenta VALUES("2","CAJA CHICA","112");
INSERT INTO tbl_tipo_cuenta VALUES("3","CUENTAS POR PAGAR","211");
INSERT INTO tbl_tipo_cuenta VALUES("4","INTERESES POR PAGAR","212");
INSERT INTO tbl_tipo_cuenta VALUES("5","DOCUMENTOS POR PAGAR","213");
INSERT INTO tbl_tipo_cuenta VALUES("6","CAPITAL SOCIAL","3110101");
INSERT INTO tbl_tipo_cuenta VALUES("7","SUELDOS","6210101");
INSERT INTO tbl_tipo_cuenta VALUES("8","IMPUESTOS POR PAGAR","214");
INSERT INTO tbl_tipo_cuenta VALUES("9","ELECTRICIDAD","6220106");
INSERT INTO tbl_tipo_cuenta VALUES("10","SEGUROS POR PAGAR","215");
INSERT INTO tbl_tipo_cuenta VALUES("11","UTILIDAD NETA","71");
INSERT INTO tbl_tipo_cuenta VALUES("12","RESERVA LEGAL","3130101");
INSERT INTO tbl_tipo_cuenta VALUES("13","CUENTAS COBRAR","113");
INSERT INTO tbl_tipo_cuenta VALUES("14","INVENTARIO","114");
INSERT INTO tbl_tipo_cuenta VALUES("15","TERRENOS","121");
INSERT INTO tbl_tipo_cuenta VALUES("16","EDIFICIOS","122");
INSERT INTO tbl_tipo_cuenta VALUES("17","PUBLICIDAD","115");
INSERT INTO tbl_tipo_cuenta VALUES("18","GASTOS DE INTERNET","6220104");
INSERT INTO tbl_tipo_cuenta VALUES("19","MOBILIARIO Y EQUIPO","123");
INSERT INTO tbl_tipo_cuenta VALUES("20","VENTA DE MERCADERIA","72");
INSERT INTO tbl_tipo_cuenta VALUES("21","OTROS GASTOS","220");
INSERT INTO tbl_tipo_cuenta VALUES("22","COMPRAS","7");
INSERT INTO tbl_tipo_cuenta VALUES("23","PROVEEDORES","217");
INSERT INTO tbl_tipo_cuenta VALUES("24","SUELDOS Y SALARIOS","74");
INSERT INTO tbl_tipo_cuenta VALUES("25","PRESTACIONES","218");
INSERT INTO tbl_tipo_cuenta VALUES("26","DONACIONES","5110102");
INSERT INTO tbl_tipo_cuenta VALUES("27","COMPENSACIONES ","76");
INSERT INTO tbl_tipo_cuenta VALUES("28","SERVICIOS PUBLI","76");
INSERT INTO tbl_tipo_cuenta VALUES("29","VIGILANCIA PRIVADA","6220105");
INSERT INTO tbl_tipo_cuenta VALUES("30","GASTOS VARIOS","219");
INSERT INTO tbl_tipo_cuenta VALUES("31","ASEOS DE OFICINA","6210103");
INSERT INTO tbl_tipo_cuenta VALUES("32","GASTOS LEGALES","222");
INSERT INTO tbl_tipo_cuenta VALUES("33","SERVICIOS CONTABLES","223");
INSERT INTO tbl_tipo_cuenta VALUES("34","COMISIONES BANCARIAS","6230102");
INSERT INTO tbl_tipo_cuenta VALUES("35","RETENCIONES BANCARIAS","3120101");
INSERT INTO tbl_tipo_cuenta VALUES("36","LEY DE SEGURIDA","6230104");
INSERT INTO tbl_tipo_cuenta VALUES("37","PRESTAMOS","225");
INSERT INTO tbl_tipo_cuenta VALUES("38","GASTO CAPACITACIONES","6220110");
INSERT INTO tbl_tipo_cuenta VALUES("39","ATENCIONES CLIENTE","6210108");
INSERT INTO tbl_tipo_cuenta VALUES("40","AGUINALDOS","6220126");
INSERT INTO tbl_tipo_cuenta VALUES("41","REPARACIONES Y MANTENIMIENTO","6220111");
INSERT INTO tbl_tipo_cuenta VALUES("43","CLIENTES","117");
INSERT INTO tbl_tipo_cuenta VALUES("44","DEVOLUCIONES SOBRE COMPRA","71");
INSERT INTO tbl_tipo_cuenta VALUES("45","DESCUENTOS SOBRE COMPRAS","72");
INSERT INTO tbl_tipo_cuenta VALUES("46","GASTOS SOBRE COMPRAS","73");
INSERT INTO tbl_tipo_cuenta VALUES("47","OTROS INGRESOS","5110103");



DROP TABLE IF EXISTS tbl_tipo_kardex;

CREATE TABLE `tbl_tipo_kardex` (
  `Id_Kardex` int(11) NOT NULL AUTO_INCREMENT,
  `Id_equipo` int(11) NOT NULL,
  `tipo_movimiento` varchar(15) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'AC',
  `fecha_operacion` datetime NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creado_por` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Kardex`),
  KEY `Id_equipo` (`Id_equipo`),
  CONSTRAINT `tbl_tipo_kardex_ibfk_1` FOREIGN KEY (`Id_equipo`) REFERENCES `tbl_inventario` (`Id_equipo`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tbl_tipo_kardex VALUES("1","1","SALIDA","5","AC","2020-12-11 21:38:36","2020-12-11 21:38:36","");
INSERT INTO tbl_tipo_kardex VALUES("2","1","SALIDA","10","AC","2020-12-20 03:09:41","2020-12-20 03:09:41","");
INSERT INTO tbl_tipo_kardex VALUES("3","1","SALIDA","10","AC","2020-12-20 03:11:41","2020-12-20 03:11:41","");
INSERT INTO tbl_tipo_kardex VALUES("4","1","SALIDA","10","AC","2020-12-20 09:28:27","2020-12-20 09:28:27","");



DROP TABLE IF EXISTS tbl_usuario;

CREATE TABLE `tbl_usuario` (
  `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_rol` bigint(20) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `nombre_usuario` varchar(70) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `estado_usuario` varchar(100) NOT NULL,
  `activacion` int(11) DEFAULT NULL,
  `contrasena` varchar(200) NOT NULL,
  `intentos` varchar(60) DEFAULT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT NULL,
  `cod_reset` int(11) NOT NULL,
  `ultima_conexion` datetime DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT current_timestamp(),
  `correo_electronico` varchar(80) DEFAULT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `modificado_por` varchar(15) DEFAULT NULL,
  `dias_expirado` int(3) DEFAULT NULL,
  `fecha_expira` date DEFAULT NULL,
  `fecha_cambio_contrasena` date DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

INSERT INTO tbl_usuario VALUES("2","2","ADMINISTRADOR","ADMINISTRADOR","ADMINISTRADOR","ACTIVO","1","$2y$10$Xrt2efTHbgVH.ZA1A2oXr.i1t/XrjlTqDDt90ok1lIr4QxD2CmBC2","0","","0","0","0000-00-00 00:00:00","2019-04-04 00:00:00","heribertocruz59@outlook.com","2020-04-26 16:41:13","","0","0000-00-00","2019-04-04");
INSERT INTO tbl_usuario VALUES("16","8","HCRUZ","HERIBERTO","","ACTIVO","1","$2y$10$KqRxFoZMfNTEo2dpl1DFk.jWHMe4.LI8czGx3qjm5McSK5tyi4QLi","1","","0","0","0000-00-00 00:00:00","2019-04-08 13:45:50","hgarcia5962@yahoo.com","2020-03-01 15:18:00","","0","0000-00-00","2019-04-08");
INSERT INTO tbl_usuario VALUES("24","23","NADA","SOFIA","PAZ","BLOQUEADO","0","$2y$10$3lhhPc/2..OO7EElQroURuMStsXxnmwGgbbUANgoNs1Gflc4WgCi6","3","","","0","","2020-09-24 00:00:00","joha94._@hotmail.com","0000-00-00 00:00:00","","","","2020-09-24");
INSERT INTO tbl_usuario VALUES("29","16","GERENTE","LOURDES","SANCHEZ","ACTIVO","1","$2y$10$Ug9xuiUW0kVuB.MCteCvp.Y2KvKlTEQoliycW1sR3/JhVADDTYUo6","0","","","0","","2020-11-27 00:00:00","lsanchez@hotmail.com","0000-00-00 00:00:00","","","","2020-11-26");
INSERT INTO tbl_usuario VALUES("30","15","OPERADOR","PATRICK","CALDERON","ACTIVO","1","$2y$10$aVKITGiLChue0gtlbEBTUe8Yd9RO7bqfjyylcvyQVKu2xm1srjG7S","0","","","0","","2020-11-28 00:00:00","calderon.55@hotmail.com","0000-00-00 00:00:00","","","","2020-11-27");
INSERT INTO tbl_usuario VALUES("32","14","CONTADOR","ALEXANDRA","VALLADARES","ACTIVO","1","$2y$10$Y85MWPVVNfOlfufDTtEfR.8aYaMSg2/.1AT1lYMnQtjtmGZXhPGkC","0","","","0","","2020-11-28 00:00:00","avalladares@gmail.com","0000-00-00 00:00:00","","","","2020-11-27");
INSERT INTO tbl_usuario VALUES("35","1","KARLA","KARLA","","NUEVO","1","$2y$10$pMd.SvGXIB9d6WB/9iB1jOfK0K6XgRV2pGeVn2brvDI7tWmKWVM.O","","","","0","","2020-12-11 18:33:23","karla.m.garcia@davivienda.com.hn","0000-00-00 00:00:00","","","","2020-12-11");



SET FOREIGN_KEY_CHECKS=1;