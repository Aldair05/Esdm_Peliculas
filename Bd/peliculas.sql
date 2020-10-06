-- Peliculas :Bases de datos de peliculas 

DROP DATABASE IF EXISTS peliculas;

CREATE DATABASE  IF NOT EXISTS peliculas;

USE peliculas;


-- Tabla de Datos
CREATE TABLE peliculas(
    pelicula_id VARCHAR(20),
    title VARCHAR(50) NOT NULL,
	plot TEXT,
	genres VARCHAR(50) NOT NULL
);


INSERT INTO peliculas(pelicula_id,title,plot,genres) VALUES
	(1,'Interstellar','El futuro de la Tierra ha estado plagado de desastres, hambrunas y sequias. Solo hay una forma de asegurar a la humanidad','Aventura, Drama'),
	(2,'Rocky Balboa','Treinta anios despues del toque de la primera campana, Rocky Balboa sale de su retiro y se pone los guantes para su pelea final.', 'Drama, Deportes'),
	(3,'Mr. Robot','Elliot Alderson, un joven ingeniero de ciberseguridad que vive en Nueva York y que asume el papel de un hacker vigilante por la noche.', 'Crimen, Drama'),
	(4,'The Dark Knight','Batman eleva las apuestas en su guerra contra el crimen. Con la ayuda del teniente Jim Gordon y el fiscal de distrito Harvey Dent, Batman se propone desmantelar.', 'Accion, Crimen'),
	(5,'Sense8','El individuo es de una cultura diferente y es parte del mundo. Tras una tragica muerte, todos experimentan.', 'Drama, Misterio'),
	(6,'Matando Cabos','En la Ciudad de Mexico, el poderoso y violento magnate del acero Oscar Cabos pilla a su hija Paulina teniendo sexo con su novio y su empleado Javier.','Accion, Aventura, Comedia'),
	(7,'The Strain', 'Un thriller que cuenta la historia del Dr. Ephraim Goodweather, director del equipo canario del Centro para el Control de Enfermedades en la ciudad de Nueva York.','Drama, Horror'),
	(8,'Creed','El ex campeon mundial de peso pesado Rocky Balboa se desempenia como entrenador y mentor de Adonis Johnson, el hijo de su difunto amigo y ex rival Apollo Creed.','Drama, Deportes')

	

