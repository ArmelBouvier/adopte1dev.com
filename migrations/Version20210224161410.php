<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210224161410 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE social_media DROP FOREIGN KEY FK_20BC159E38B53C32');
        $this->addSql('DROP INDEX IDX_20BC159E38B53C32 ON social_media');
        $this->addSql('ALTER TABLE social_media CHANGE company_id_id company_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE social_media ADD CONSTRAINT FK_20BC159E979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
        $this->addSql('CREATE INDEX IDX_20BC159E979B1AD6 ON social_media (company_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE social_media DROP FOREIGN KEY FK_20BC159E979B1AD6');
        $this->addSql('DROP INDEX IDX_20BC159E979B1AD6 ON social_media');
        $this->addSql('ALTER TABLE social_media CHANGE company_id company_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE social_media ADD CONSTRAINT FK_20BC159E38B53C32 FOREIGN KEY (company_id_id) REFERENCES company (id)');
        $this->addSql('CREATE INDEX IDX_20BC159E38B53C32 ON social_media (company_id_id)');
    }
}
