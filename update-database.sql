-- SQL update medya-olshop

ALTER TABLE `ci-medyaolshop`.`customer` DROP COLUMN `pendapatan`;
DROP TABLE `ci-medyaolshop`.`agama`;
ALTER TABLE `ci-medyaolshop`.`customer` DROP FOREIGN KEY `customer_ibfk_4`;
ALTER TABLE `ci-medyaolshop`.`customer` DROP INDEX `id_pendidikan`;
ALTER TABLE `ci-medyaolshop`.`customer` DROP COLUMN `id_pendidikan`;
DROP TABLE `ci-medyaolshop`.`pendidikan`;
ALTER TABLE `ci-medyaolshop`.`produk` ADD COLUMN `stock` INT DEFAULT '0' NOT NULL COMMENT '' AFTER `harga_produk`;
ALTER TABLE `ci-medyaolshop`.`provinsi` DROP FOREIGN KEY `provinsi_ibfk_1`;
ALTER TABLE `ci-medyaolshop`.`provinsi` DROP COLUMN `id_pulau`;
DROP TABLE `ci-medyaolshop`.`pulau`;
ALTER TABLE `ci-medyaolshop`.`orders` ADD COLUMN `resi` VARCHAR(255) COMMENT '' AFTER `total_harga`;