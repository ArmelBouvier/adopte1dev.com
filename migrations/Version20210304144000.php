<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210304144000 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE company_keywords_company');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE company_keywords_company (company_keywords_id INT NOT NULL, company_id INT NOT NULL, INDEX IDX_E0A2A86F7BD46820 (company_keywords_id), INDEX IDX_E0A2A86F979B1AD6 (company_id), PRIMARY KEY(company_keywords_id, company_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE company_keywords_company ADD CONSTRAINT FK_E0A2A86F7BD46820 FOREIGN KEY (company_keywords_id) REFERENCES company_keywords (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE company_keywords_company ADD CONSTRAINT FK_E0A2A86F979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id) ON DELETE CASCADE');
    }
}
