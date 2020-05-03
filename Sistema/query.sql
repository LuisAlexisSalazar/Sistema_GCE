INSERT INTO persona(nombre,apellido) VALUES ("Gustavo","Delgado");

INSERT INTO credencial(id_persona,dni,contrasena) VALUES (1,"41510304","ccomp");

INSERT into roles (id_credencial,nombre) VALUES (1,"director");


--PRUEBA per no da con natural join
SELECT * FROM persona as p NATURAL JOIN credencial as c
	INNER JOIN roles as r ON (r.id_credencial=c.id_credencial);