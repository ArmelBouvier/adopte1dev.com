<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210304144129 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE company_company_keywords (company_id INT NOT NULL, company_keywords_id INT NOT NULL, INDEX IDX_9C335C88979B1AD6 (company_id), INDEX IDX_9C335C887BD46820 (company_keywords_id), PRIMARY KEY(company_id, company_keywords_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE company_company_keywords ADD CONSTRAINT FK_9C335C88979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE company_company_keywords ADD CONSTRAINT FK_9C335C887BD46820 FOREIGN KEY (company_keywords_id) REFERENCES company_keywords (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE company_company_keywords');
    }
}
