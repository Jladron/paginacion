# paginacion
paginación con PHP y una base de datos

Es un ejercicio en el que primero he creado una paginación con html y css.

Para que puedas ejecutarlo es necesario que crees una base de datos llamada paginacion
en esa base de datos hay que crear una tabla llamada artículos con un id de tipo int autoincrementable y luego un texto en el que he introducido texto aleatorio lorem ipsum 
a modo de títulos.

detalle del código para la base de datos, es muy sencilla:

CREATE DATABASE paginacion;
USE paginacion;
CREATE TABLE articulos ( id INT PRIMARY KEY, articulo TEXT );
INSERT INTO articulos VALUES ( NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' );

Una vez creada la base de datos, yo la hice con xampp y phpmyadmin, es necesario realizar la conexión con PHP yo he usado POD

try{
        $conexion = new PDO('mysql:host=localhost; dbname=paginacion', 'root', '');
    }catch(PDOException $e){
        echo 'ERROR: '. $e->getMessage();
        die();
    }
