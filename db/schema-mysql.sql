CREATE TABLE `sandbox`.`hoge` (
  `hoge_id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NULL,
  `body` TEXT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NOT NULL,
  PRIMARY KEY (`hoge_id`));
