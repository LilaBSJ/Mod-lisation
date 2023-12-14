<?php

//-> commande 1, N( 1 User pour N order)
user(id,email,password,firstname,lastname,birthdate,address,complements,postal_code,city,#id_order)

//-> contient, 1, N ( 1 order pour N order_line)
order(id, reference,date,#order_line_id)

//-> contient, 1, N ( 1 order_line pour N product)
order_line(id,quantity, price,#product)

//->contient, N, N ( N product pour N category)
//->contient, 1, N( 1 produit pour N picture)
product(id,name,description, price,#picture,#category)