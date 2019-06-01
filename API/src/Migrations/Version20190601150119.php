<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190601150119 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE agency ADD bank_code VARCHAR(255) DEFAULT NULL, ADD counter_code VARCHAR(255) DEFAULT NULL, ADD account_number VARCHAR(255) DEFAULT NULL, ADD rib_key VARCHAR(255) DEFAULT NULL, ADD zone_agency VARCHAR(255) DEFAULT NULL, ADD iban VARCHAR(255) DEFAULT NULL, ADD bic VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE project ADD company VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE agency DROP bank_code, DROP counter_code, DROP account_number, DROP rib_key, DROP zone_agency, DROP iban, DROP bic');
        $this->addSql('ALTER TABLE project DROP company');
    }
}
