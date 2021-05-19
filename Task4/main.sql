SELECT
    u.*,
    COUNT(m.user_id) as messages_number
 FROM `user` u
 LEFT JOIN message m ON m.user_id = u.id
GROUP BY u.id
