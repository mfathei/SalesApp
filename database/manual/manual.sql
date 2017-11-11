CREATE 
    
VIEW `vwCustomers` AS
    SELECT 
        `customers`.`id` AS `id`,
        `customers`.`name` AS `name`,
        `customers`.`address` AS `address`,
        `customers`.`email` AS `email`,
        `customers`.`phone` AS `phone`,
        `customers`.`fax` AS `fax`,
        `customers`.`first_balance` AS `first_balance`,
        `customers`.`balance` AS `balance`,
        `customers`.`limit` AS `limit`,
        SUBSTR(`customers`.`notes`, 1, 20) AS `notes`,
        `customers`.`active` AS `active`,
        `customers`.`created_at` AS `created_at`,
        `customers`.`updated_at` AS `updated_at`
    FROM
        `customers`;





