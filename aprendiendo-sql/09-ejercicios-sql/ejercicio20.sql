/*
SELECCIONAR EL GRUPO EN EL QUE TRABAJA EL VENDEDOR CON EL MAYOR SALARIO Y MOSTRAR EL
NOMBRE DEL GRUPO
*/
SELECT * FROM grupos 
WHERE id IN 
    (SELECT grupo_id FROM vendedores WHERE sueldo = (
        SELECT MAX(sueldo) FROM vendedores
    ));