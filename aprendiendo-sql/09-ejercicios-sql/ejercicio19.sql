/*
OBTENER LOS VENDEDORES CON 2 O MAS CLIENTES
*/

SELECT * FROM vendedores WHERE id IN
    (SELECT vendedor_id FROM clientes GROUP BY vendedor_id HAVING COUNT(id)>=2);