Left joins who data bhi show kardeta ha match na kr raha ho left wali table ka... 

query..............
SELECT * FROM `products`
Left purchase_order_items ON products.id = purchase_order_items.product_id
ORDER By products.id