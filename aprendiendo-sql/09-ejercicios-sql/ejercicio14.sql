/*
VISUALIZAR LAS UNIDADES TOTALES VENDIDAS DE CADA COCHE A CADA CLIENTE MOSTRANDO 
EL NOMBRE DEL PRODUCTO, EL NOMBRE DEL CLIENTE Y LA SUMA DE UNIDADES
*/

SELECT co.modelo AS 'Coche', cl.nombre AS 'Cliente', SUM(e.cantidad) AS 'Unidades'
FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes cl ON cl.id = e.cliente_id
GROUP BY e.coche_id, e.cliente_id;