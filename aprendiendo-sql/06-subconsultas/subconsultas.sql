/*
- CONSULTAS QUE SE EJECUTAN DENTRO DE OTRAS 
- CONSISTE EN UTILIZAR LOS RESULTADOS DE LA SUBCONSULTA PARA OPERAR EN LA CONSULTA PRINCIPAL
- JUGAR CON CLAVES FORANEAS
*/

-- IN (SE UTILIZA CUANDO LAS SUBCONSULTAS NOS DEVUELVE MULTIPLES RESULTADOS)
SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas);
SELECT * FROM usuarios WHERE id NOT IN(SELECT usuario_id FROM entradas);