<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190527121328 extends AbstractMigration
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
        $this->addSql('ALTER TABLE project ADD remaining INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bill ADD quantity5 INT DEFAULT NULL, ADD unit_price5 INT DEFAULT NULL, ADD quantity6 INT DEFAULT NULL, ADD description6 VARCHAR(255) DEFAULT NULL, ADD unit_price6 VARCHAR(255) DEFAULT NULL, ADD quantity7 INT DEFAULT NULL, ADD description7 VARCHAR(255) DEFAULT NULL, ADD unit_price7 INT DEFAULT NULL, ADD quantity8 INT DEFAULT NULL, ADD description8 VARCHAR(255) DEFAULT NULL, ADD unit_price8 INT DEFAULT NULL, ADD quantity9 INT DEFAULT NULL, ADD description9 VARCHAR(255) DEFAULT NULL, ADD unit_price9 INT DEFAULT NULL, ADD quantity10 INT DEFAULT NULL, ADD description10 VARCHAR(255) DEFAULT NULL, ADD unit_price10 INT DEFAULT NULL, ADD quantity11 INT DEFAULT NULL, ADD description11 VARCHAR(255) DEFAULT NULL, ADD unit_price11 INT DEFAULT NULL, ADD quantity12 INT DEFAULT NULL, ADD description12 VARCHAR(255) DEFAULT NULL, ADD unit_price12 INT DEFAULT NULL, ADD quantity13 INT DEFAULT NULL, ADD description13 VARCHAR(255) DEFAULT NULL, ADD unit_price13 INT DEFAULT NULL, ADD quantity14 INT DEFAULT NULL, ADD description14 VARCHAR(255) DEFAULT NULL, ADD unit_price14 INT DEFAULT NULL, ADD quantity15 INT DEFAULT NULL, ADD description15 VARCHAR(255) DEFAULT NULL, ADD unit_price15 INT DEFAULT NULL, ADD total_price INT NOT NULL, ADD created_at DATETIME NOT NULL, ADD email_reminder DATETIME DEFAULT NULL, ADD call_reminder DATETIME DEFAULT NULL, ADD bill_description VARCHAR(255) NOT NULL, ADD payment_period INT NOT NULL, ADD downpayment INT DEFAULT NULL, ADD status VARCHAR(255) DEFAULT NULL, ADD remaining INT DEFAULT NULL, ADD limit_date DATE DEFAULT NULL, ADD client VARCHAR(255) DEFAULT NULL, CHANGE date description5 VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE quotation');
        $this->addSql('ALTER TABLE bill ADD date VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, DROP quantity5, DROP description5, DROP unit_price5, DROP quantity6, DROP description6, DROP unit_price6, DROP quantity7, DROP description7, DROP unit_price7, DROP quantity8, DROP description8, DROP unit_price8, DROP quantity9, DROP description9, DROP unit_price9, DROP quantity10, DROP description10, DROP unit_price10, DROP quantity11, DROP description11, DROP unit_price11, DROP quantity12, DROP description12, DROP unit_price12, DROP quantity13, DROP description13, DROP unit_price13, DROP quantity14, DROP description14, DROP unit_price14, DROP quantity15, DROP description15, DROP unit_price15, DROP total_price, DROP created_at, DROP email_reminder, DROP call_reminder, DROP bill_description, DROP payment_period, DROP downpayment, DROP status, DROP remaining, DROP limit_date, DROP client');
        $this->addSql('ALTER TABLE project DROP remaining');
    }
}
