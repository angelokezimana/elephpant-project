<?php

class m0001_initial
{
    public function up()
    {
        $db = \app\core\Application::$app->db;

        $SQL = "CREATE TABLE users (
            `id` INT AUTO_INCREMENT,
            `full_name` VARCHAR(255) NOT NULL,
            `email` VARCHAR(100) UNIQUE NOT NULL,
            `status` TINYINT NOT NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY(`id`)
        )ENGINE=INNODB;";

        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;

        $SQL = "DROP TABLE users;";

        $db->pdo->exec($SQL);
    }
}
