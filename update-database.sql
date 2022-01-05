-- SQL update -olshop

ALTER TABLE `olshop`.`customer` DROP COLUMN `pendapatan`;
DROP TABLE `olshop`.`agama`;
ALTER TABLE `olshop`.`customer` DROP FOREIGN KEY `customer_ibfk_4`;
ALTER TABLE `olshop`.`customer` DROP INDEX `id_pendidikan`;
ALTER TABLE `olshop`.`customer` DROP COLUMN `id_pendidikan`;
DROP TABLE `olshop`.`pendidikan`;
ALTER TABLE `olshop`.`produk` ADD COLUMN `stock` INT DEFAULT '0' NOT NULL COMMENT '' AFTER `harga_produk`;
ALTER TABLE `olshop`.`provinsi` DROP FOREIGN KEY `provinsi_ibfk_1`;
ALTER TABLE `olshop`.`provinsi` DROP COLUMN `id_pulau`;
DROP TABLE `olshop`.`pulau`;
ALTER TABLE `olshop`.`orders` ADD COLUMN `resi` VARCHAR(255) COMMENT '' AFTER `total_harga`;