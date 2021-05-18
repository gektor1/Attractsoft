SELECT user.*, (SELECT COUNT(*) FROM message WHERE message.user_id = user.id) as messages_number FROM `user` WHERE 1
