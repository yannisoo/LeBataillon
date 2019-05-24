<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190524093704 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bill ADD quantity5 INT DEFAULT NULL, ADD description5 VARCHAR(255) DEFAULT NULL, ADD unit_price5 INT DEFAULT NULL, ADD quantity6 INT DEFAULT NULL, ADD description6 VARCHAR(255) DEFAULT NULL, ADD unit_price6 VARCHAR(255) DEFAULT NULL, ADD quantity7 INT DEFAULT NULL, ADD description7 VARCHAR(255) DEFAULT NULL, ADD unit_price7 INT DEFAULT NULL, ADD quantity8 INT DEFAULT NULL, ADD description8 VARCHAR(255) DEFAULT NULL, ADD unit_price8 INT DEFAULT NULL, ADD quantity9 INT DEFAULT NULL, ADD description9 VARCHAR(255) DEFAULT NULL, ADD unit_price9 INT DEFAULT NULL, ADD quantity10 INT DEFAULT NULL, ADD description10 VARCHAR(255) DEFAULT NULL, ADD unit_price10 INT DEFAULT NULL, ADD quantity11 INT DEFAULT NULL, ADD description11 VARCHAR(255) DEFAULT NULL, ADD unit_price11 INT DEFAULT NULL, ADD quantity12 INT DEFAULT NULL, ADD description12 VARCHAR(255) DEFAULT NULL, ADD unit_price12 INT DEFAULT NULL, ADD quantity13 INT DEFAULT NULL, ADD description13 VARCHAR(255) DEFAULT NULL, ADD unit_price13 INT DEFAULT NULL, ADD quantity14 INT DEFAULT NULL, ADD description14 VARCHAR(255) DEFAULT NULL, ADD unit_price14 INT DEFAULT NULL, ADD quantity15 INT DEFAULT NULL, ADD description15 VARCHAR(255) DEFAULT NULL, ADD unit_price15 INT DEFAULT NULL, ADD total_price INT NOT NULL');
        $this->addSql('ALTER TABLE project CHANGE userid userid VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bill DROP quantity5, DROP description5, DROP unit_price5, DROP quantity6, DROP description6, DROP unit_price6, DROP quantity7, DROP description7, DROP unit_price7, DROP quantity8, DROP description8, DROP unit_price8, DROP quantity9, DROP description9, DROP unit_price9, DROP quantity10, DROP description10, DROP unit_price10, DROP quantity11, DROP description11, DROP unit_price11, DROP quantity12, DROP description12, DROP unit_price12, DROP quantity13, DROP description13, DROP unit_price13, DROP quantity14, DROP description14, DROP unit_price14, DROP quantity15, DROP description15, DROP unit_price15, DROP total_price');
        $this->addSql('ALTER TABLE project CHANGE userid userid INT DEFAULT NULL');
    }
}
