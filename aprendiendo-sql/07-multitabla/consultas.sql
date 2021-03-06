/*
CONSULTA MULTITABLA: consultas que sirven para consultar varias tablas en una sola tabla
*/

/*MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL AUTOR Y EL NOMBRE DE LA CATEGORIA*/
    
    /*CONSULTA SIN INNER JOIN*/

SELECT e.id, e.titulo, u.nombre AS 'Author', c.nombre AS 'Categoria'
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;
    
    /*CONSULTA CON INNER JOIN*/
    
/*----- INNER JOIN (MEZCLAME LA TABLA, HAZME UNA COMBINACIÓN INTERNA) -----*/
SELECT e.id, e.titulo, u.nombre AS 'Author',  c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.usuario_id = c.id;

/*MOSTRAR EL NOMBRE DE LAS CATEGORIAS Y AL LADO CUANTAS ENTRADAS TIENEN*/
SELECT c.nombre, COUNT(e.id) FROM categorias c, entradas e
WHERE e.categoria_id = c.id 
GROUP BY e.categoria_id;

 /*como que no grupo, me ajunta todos
    SELECT c.nombre, COUNT(e.id) FROM categorias c, entradas e
    WHERE e.categoria_id = c.id ;
*/

SELECT c.nombre, COUNT(e.id) FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;

SELECT c.nombre, COUNT(e.id) FROM entradas e
RIGHT JOIN categorias c ON e.categoria_id = c.id
GROUP BY e.categoria_id;


/*MOSTRAR EL EMAIL DE LOS USUARIOS Y AL LADO CUANTAS ENTRADAS TIENEN*/
SELECT u.email, COUNT(titulo) FROM usuarios u, entradas e
WHERE e.usuario_id = u.id
GROUP BY e.usuario_id;


