<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190531184047 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE quotation ADD price_total INT DEFAULT NULL, ADD pdf_path VARCHAR(255) DEFAULT NULL, ADD project_client VARCHAR(255) DEFAULT NULL, ADD project_contact VARCHAR(255) DEFAULT NULL, ADD project_address VARCHAR(255) DEFAULT NULL, ADD project_city VARCHAR(255) DEFAULT NULL, ADD project_postcode VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE bill ADD pdf_path VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bill DROP pdf_path');
        $this->addSql('ALTER TABLE quotation DROP price_total, DROP pdf_path, DROP project_client, DROP project_contact, DROP project_address, DROP project_city, DROP project_postcode');
    }
}
