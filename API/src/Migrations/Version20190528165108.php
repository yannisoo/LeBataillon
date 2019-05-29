<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190528165108 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bill ADD price_total INT DEFAULT NULL, DROP total_price, DROP downpayment, DROP remaining, CHANGE created_at created_at VARCHAR(255) DEFAULT NULL, CHANGE email_reminder email_reminder VARCHAR(255) DEFAULT NULL, CHANGE call_reminder call_reminder VARCHAR(255) DEFAULT NULL, CHANGE status status INT DEFAULT NULL, CHANGE limit_date limit_date VARCHAR(255) DEFAULT NULL, CHANGE bill_description mainbill_description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE project ADD downpayment INT DEFAULT NULL, ADD total_price INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bill ADD downpayment INT DEFAULT NULL, ADD remaining INT DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE email_reminder email_reminder DATETIME DEFAULT NULL, CHANGE call_reminder call_reminder DATETIME DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE limit_date limit_date DATE DEFAULT NULL, CHANGE price_total total_price INT DEFAULT NULL, CHANGE mainbill_description bill_description VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE project DROP downpayment, DROP total_price');
    }
}
