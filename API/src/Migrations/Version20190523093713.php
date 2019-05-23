<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190523093713 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE agency (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, address VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, signature VARCHAR(255) DEFAULT NULL, sirep VARCHAR(255) DEFAULT NULL, phone_work VARCHAR(255) DEFAULT NULL, phone_mobile INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bill (id INT AUTO_INCREMENT NOT NULL, date VARCHAR(255) DEFAULT NULL, bill_number VARCHAR(255) DEFAULT NULL, quantity1 INT DEFAULT NULL, description1 VARCHAR(255) DEFAULT NULL, unit_price1 INT DEFAULT NULL, quantity2 INT DEFAULT NULL, description2 VARCHAR(255) DEFAULT NULL, unit_price2 INT DEFAULT NULL, quantity3 INT DEFAULT NULL, description3 VARCHAR(255) DEFAULT NULL, unit_price3 INT DEFAULT NULL, quantity4 INT DEFAULT NULL, description4 VARCHAR(255) DEFAULT NULL, unit_price4 INT DEFAULT NULL, project_id INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE agency');
        $this->addSql('DROP TABLE bill');
    }
}
