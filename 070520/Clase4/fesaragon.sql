drop schema if exists `fes_aragon`; 

-- se crea la DB
create schema if not exists `fes_aragon` default character set utf8 collate utf8_spanish2_ci;
use `fes_aragon`;

-- se crea la tabla 
CREATE TABLE `ALUMNO`(
`nombre_usuario` text not null,
`carrera` text not null,
`no_cuenta` int(10) not null,
`direccion` text not null,
`telefono` varchar(8) not null,
`email` text not null,
`password` varchar(8) not null,
`fecha_registro` datetime not null default current_timestamp,
`permisos` int(11) not null default '2'
)engine  = InnoDB default charset = utf8;
-- define el sector de la db que se va ocupar

-- agregar los registro 
insert into `ALUMNO`(`nombre_usuario`,`carrera`, `no_cuenta`,`direccion`,`telefono`,
`email`,`password`,`fecha_registro`,`permisos`)
values ('Oswaldo Fragozo','ico','41700649','texcoco','598741358','oswaldo@aragon.unam',
'123456','2020-05-12 17:41:30','2');

-- define la llave primaria 
alter table `alumno`
	add primary key (`no_cuenta`);

-- commit confirma la trasaccion o proceso actual, haciendo que sus cambios  sean permanentes
commit;
