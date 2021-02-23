<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210223163530 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE remote (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE remote_job (remote_id INT NOT NULL, job_id INT NOT NULL, INDEX IDX_6744E1AA2A3E9C94 (remote_id), INDEX IDX_6744E1AABE04EA9 (job_id), PRIMARY KEY(remote_id, job_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE remote_job ADD CONSTRAINT FK_6744E1AA2A3E9C94 FOREIGN KEY (remote_id) REFERENCES remote (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE remote_job ADD CONSTRAINT FK_6744E1AABE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE remote_job DROP FOREIGN KEY FK_6744E1AA2A3E9C94');
        $this->addSql('DROP TABLE remote');
        $this->addSql('DROP TABLE remote_job');
    }
}
