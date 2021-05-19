-- #1
SELECT 
    u.*,
    COUNT(m.user_id) as messages_number,
    COUNT(case when m.message_date_time > '2020-01-01' then 1 end) as messages_number_after_2020_01_01
 FROM `user` u
 LEFT JOIN message m ON m.user_id = u.id
GROUP BY u.id 

-- #2
SELECT 
    u.*,
    COUNT(m.user_id) as messages_number,
    COUNT(IF(m.message_date_time > '2020-01-01' , 1, NULL)) as messages_number_after_2020_01_01
 FROM `user` u
 LEFT JOIN message m ON m.user_id = u.id
GROUP BY u.id