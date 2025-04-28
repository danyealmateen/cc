-- ****************
-- ****NOT DONE****
-- ****************

-- ****************
-- ******DONE******
-- ****************
CREATE TABLE `kid` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NULL DEFAULT NULL,
	`current_belt` VARCHAR(50) NULL DEFAULT NULL,
	`next_belt` VARCHAR(50) NULL DEFAULT NULL,
	`updated_date` DATE NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_general_ci'
;