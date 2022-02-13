<?php
use Propel\Generator\Manager\MigrationManager;

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1644428704.
 * Generated on 2022-02-09 17:45:04 by spryker 
 */
class PropelMigration_1644428704 
{
    public $comment = '';

    public function preUp(MigrationManager $manager)
    {
        // add the pre-migration code here
    }

    public function postUp(MigrationManager $manager)
    {
        // add the post-migration code here
    }

    public function preDown(MigrationManager $manager)
    {
        // add the pre-migration code here
    }

    public function postDown(MigrationManager $manager)
    {
        // add the post-migration code here
    }

    /**
     * Get the SQL statements for the Up migration
     *
     * @return array list of the SQL strings to execute for the Up migration
     *               the keys being the datasources
     */
    public function getUpSQL()
    {
        $connection_zed = <<< 'EOT'

# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `spy_locale`
(
    `id_locale` INTEGER NOT NULL AUTO_INCREMENT,
    `locale_name` VARCHAR(5) NOT NULL,
    `is_active` TINYINT(1) DEFAULT 1 NOT NULL,
    PRIMARY KEY (`id_locale`),
    UNIQUE INDEX `spy_locale-unique-locale_name` (`locale_name`),
    INDEX `spy_locale-index-locale_name` (`locale_name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_queue_process`
(
    `id_queue_process` INTEGER NOT NULL AUTO_INCREMENT,
    `server_id` VARCHAR(255) NOT NULL,
    `process_pid` INTEGER NOT NULL,
    `worker_pid` INTEGER NOT NULL,
    `queue_name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id_queue_process`),
    UNIQUE INDEX `spy_queue_process-unique-key` (`server_id`, `process_pid`, `queue_name`),
    INDEX `spy_queue_process-index-key` (`server_id`, `queue_name`)
) ENGINE=InnoDB;

CREATE TABLE `spy_store`
(
    `id_store` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255),
    PRIMARY KEY (`id_store`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
EOT;

        return array(
            'zed' => $connection_zed,
        );
    }

    /**
     * Get the SQL statements for the Down migration
     *
     * @return array list of the SQL strings to execute for the Down migration
     *               the keys being the datasources
     */
    public function getDownSQL()
    {
        $connection_zed = <<< 'EOT'

# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `spy_locale`;

DROP TABLE IF EXISTS `spy_queue_process`;

DROP TABLE IF EXISTS `spy_store`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
EOT;

        return array(
            'zed' => $connection_zed,
        );
    }

}