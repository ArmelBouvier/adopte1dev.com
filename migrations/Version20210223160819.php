<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210223160819 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE duration (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, duration VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE duration_job (duration_id INT NOT NULL, job_id INT NOT NULL, INDEX IDX_18336B0A37B987D8 (duration_id), INDEX IDX_18336B0ABE04EA9 (job_id), PRIMARY KEY(duration_id, job_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE duration_job ADD CONSTRAINT FK_18336B0A37B987D8 FOREIGN KEY (duration_id) REFERENCES duration (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE duration_job ADD CONSTRAINT FK_18336B0ABE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE duration_job DROP FOREIGN KEY FK_18336B0A37B987D8');
        $this->addSql('DROP TABLE duration');
        $this->addSql('DROP TABLE duration_job');
    }
}
