use aoi_remote;

create table Registro(
Id mediumint not null auto_increment primary key,
Fecha_Registro varchar(50),
Correo varchar(100),
Nombre_Usuario varchar(20),
Contraseña varchar(20),
Rol varchar(20)
);
