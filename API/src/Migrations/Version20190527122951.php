<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190527122951 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE quotation (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, contact VARCHAR(255) DEFAULT NULL, quotation_number VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, postcode VARCHAR(255) DEFAULT NULL, project_name VARCHAR(255) DEFAULT NULL, description1 VARCHAR(255) DEFAULT NULL, unit_price1 INT DEFAULT NULL, quantity1 INT DEFAULT NULL, description2 VARCHAR(255) DEFAULT NULL, unit_price2 INT DEFAULT NULL, quantity2 INT DEFAULT NULL, description3 VARCHAR(255) DEFAULT NULL, unit_price3 INT DEFAULT NULL, quantity3 INT DEFAULT NULL, description4 VARCHAR(255) DEFAULT NULL, unit_price4 INT DEFAULT NULL, quantity4 INT DEFAULT NULL, description5 VARCHAR(255) DEFAULT NULL, unit_price5 INT DEFAULT NULL, quantity5 INT DEFAULT NULL, description6 VARCHAR(255) DEFAULT NULL, unit_price6 INT DEFAULT NULL, quantity6 INT DEFAULT NULL, description7 VARCHAR(255) DEFAULT NULL, unit_price7 INT DEFAULT NULL, quantity7 INT DEFAULT NULL, description8 VARCHAR(255) DEFAULT NULL, unit_price8 INT DEFAULT NULL, quantity8 INT DEFAULT NULL, description9 VARCHAR(255) DEFAULT NULL, unit_price9 INT DEFAULT NULL, quantity9 INT DEFAULT NULL, description10 VARCHAR(255) DEFAULT NULL, unit_price10 INT DEFAULT NULL, quantity10 INT DEFAULT NULL, description11 VARCHAR(255) DEFAULT NULL, unit_price11 INT DEFAULT NULL, quantity11 INT DEFAULT NULL, description12 VARCHAR(255) DEFAULT NULL, unit_price12 INT DEFAULT NULL, quantity12 INT DEFAULT NULL, description13 VARCHAR(255) DEFAULT NULL, unit_price13 INT DEFAULT NULL, quantity13 INT DEFAULT NULL, description14 VARCHAR(255) DEFAULT NULL, unit_price14 INT DEFAULT NULL, quantity14 INT DEFAULT NULL, description15 VARCHAR(255) DEFAULT NULL, unit_price15 INT DEFAULT NULL, quantity15 INT DEFAULT NULL, project_id INT DEFAULT NULL, created_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, password VARCHAR(255) DEFAULT NULL, role VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agency (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, address VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, signature VARCHAR(255) DEFAULT NULL, sirep VARCHAR(255) DEFAULT NULL, phone_work VARCHAR(255) DEFAULT NULL, phone_mobile INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, userid VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, contact VARCHAR(1000) DEFAULT NULL, description VARCHAR(1000) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, postcode INT DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, status INT DEFAULT NULL, remaining INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bill (id INT AUTO_INCREMENT NOT NULL, bill_number VARCHAR(255) DEFAULT NULL, quantity1 INT DEFAULT NULL, description1 VARCHAR(255) DEFAULT NULL, unit_price1 INT DEFAULT NULL, quantity2 INT DEFAULT NULL, description2 VARCHAR(255) DEFAULT NULL, unit_price2 INT DEFAULT NULL, quantity3 INT DEFAULT NULL, description3 VARCHAR(255) DEFAULT NULL, unit_price3 INT DEFAULT NULL, quantity4 INT DEFAULT NULL, description4 VARCHAR(255) DEFAULT NULL, unit_price4 INT DEFAULT NULL, project_id INT DEFAULT NULL, quantity5 INT DEFAULT NULL, description5 VARCHAR(255) DEFAULT NULL, unit_price5 INT DEFAULT NULL, quantity6 INT DEFAULT NULL, description6 VARCHAR(255) DEFAULT NULL, unit_price6 VARCHAR(255) DEFAULT NULL, quantity7 INT DEFAULT NULL, description7 VARCHAR(255) DEFAULT NULL, unit_price7 INT DEFAULT NULL, quantity8 INT DEFAULT NULL, description8 VARCHAR(255) DEFAULT NULL, unit_price8 INT DEFAULT NULL, quantity9 INT DEFAULT NULL, description9 VARCHAR(255) DEFAULT NULL, unit_price9 INT DEFAULT NULL, quantity10 INT DEFAULT NULL, description10 VARCHAR(255) DEFAULT NULL, unit_price10 INT DEFAULT NULL, quantity11 INT DEFAULT NULL, description11 VARCHAR(255) DEFAULT NULL, unit_price11 INT DEFAULT NULL, quantity12 INT DEFAULT NULL, description12 VARCHAR(255) DEFAULT NULL, unit_price12 INT DEFAULT NULL, quantity13 INT DEFAULT NULL, description13 VARCHAR(255) DEFAULT NULL, unit_price13 INT DEFAULT NULL, quantity14 INT DEFAULT NULL, description14 VARCHAR(255) DEFAULT NULL, unit_price14 INT DEFAULT NULL, quantity15 INT DEFAULT NULL, description15 VARCHAR(255) DEFAULT NULL, unit_price15 INT DEFAULT NULL, total_price INT NOT NULL, created_at DATETIME NOT NULL, email_reminder DATETIME DEFAULT NULL, call_reminder DATETIME DEFAULT NULL, bill_description VARCHAR(255) NOT NULL, payment_period INT NOT NULL, downpayment INT DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, remaining INT DEFAULT NULL, limit_date DATE DEFAULT NULL, client VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE quotation');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE agency');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE bill');
    }
}
