<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210223161357 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE skill_level (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill_level_job (skill_level_id INT NOT NULL, job_id INT NOT NULL, INDEX IDX_8B1034361D192655 (skill_level_id), INDEX IDX_8B103436BE04EA9 (job_id), PRIMARY KEY(skill_level_id, job_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE skill_level_job ADD CONSTRAINT FK_8B1034361D192655 FOREIGN KEY (skill_level_id) REFERENCES skill_level (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE skill_level_job ADD CONSTRAINT FK_8B103436BE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE skill_level_job DROP FOREIGN KEY FK_8B1034361D192655');
        $this->addSql('DROP TABLE skill_level');
        $this->addSql('DROP TABLE skill_level_job');
    }
}
