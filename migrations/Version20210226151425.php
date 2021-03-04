<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210226151425 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE duration_job DROP FOREIGN KEY FK_18336B0A37B987D8');
        $this->addSql('ALTER TABLE duration_job DROP FOREIGN KEY FK_18336B0ABE04EA9');
        $this->addSql('ALTER TABLE remote_job DROP FOREIGN KEY FK_6744E1AABE04EA9');
        $this->addSql('ALTER TABLE salary DROP FOREIGN KEY FK_9413BB717E182327');
        $this->addSql('ALTER TABLE skill_level_job DROP FOREIGN KEY FK_8B103436BE04EA9');
        $this->addSql('ALTER TABLE technology_job DROP FOREIGN KEY FK_44F58D5DBE04EA9');
        $this->addSql('ALTER TABLE remote_job DROP FOREIGN KEY FK_6744E1AA2A3E9C94');
        $this->addSql('ALTER TABLE skill_level_job DROP FOREIGN KEY FK_8B1034361D192655');
        $this->addSql('ALTER TABLE technology_job DROP FOREIGN KEY FK_44F58D5D4235D463');
        $this->addSql('DROP TABLE duration');
        $this->addSql('DROP TABLE duration_job');
        $this->addSql('DROP TABLE job');
        $this->addSql('DROP TABLE remote');
        $this->addSql('DROP TABLE remote_job');
        $this->addSql('DROP TABLE salary');
        $this->addSql('DROP TABLE skill_level');
        $this->addSql('DROP TABLE skill_level_job');
        $this->addSql('DROP TABLE social_media');
        $this->addSql('DROP TABLE technology');
        $this->addSql('DROP TABLE technology_job');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE duration (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, duration VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE duration_job (duration_id INT NOT NULL, job_id INT NOT NULL, INDEX IDX_18336B0A37B987D8 (duration_id), INDEX IDX_18336B0ABE04EA9 (job_id), PRIMARY KEY(duration_id, job_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE job (id INT AUTO_INCREMENT NOT NULL, company_id_id INT DEFAULT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, methodology VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, job_description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, job_missions LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, candidate_profile LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, miscellaneous LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, location VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, slug VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_FBD8E0F838B53C32 (company_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE remote (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE remote_job (remote_id INT NOT NULL, job_id INT NOT NULL, INDEX IDX_6744E1AA2A3E9C94 (remote_id), INDEX IDX_6744E1AABE04EA9 (job_id), PRIMARY KEY(remote_id, job_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE salary (id INT AUTO_INCREMENT NOT NULL, job_id_id INT DEFAULT NULL, frequency VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, amount INT NOT NULL, INDEX IDX_9413BB717E182327 (job_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE skill_level (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE skill_level_job (skill_level_id INT NOT NULL, job_id INT NOT NULL, INDEX IDX_8B1034361D192655 (skill_level_id), INDEX IDX_8B103436BE04EA9 (job_id), PRIMARY KEY(skill_level_id, job_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE social_media (id INT AUTO_INCREMENT NOT NULL, company_id INT DEFAULT NULL, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, url VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL, INDEX IDX_20BC159E979B1AD6 (company_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE technology (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, logo VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE technology_job (technology_id INT NOT NULL, job_id INT NOT NULL, INDEX IDX_44F58D5D4235D463 (technology_id), INDEX IDX_44F58D5DBE04EA9 (job_id), PRIMARY KEY(technology_id, job_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE duration_job ADD CONSTRAINT FK_18336B0A37B987D8 FOREIGN KEY (duration_id) REFERENCES duration (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE duration_job ADD CONSTRAINT FK_18336B0ABE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F838B53C32 FOREIGN KEY (company_id_id) REFERENCES company (id)');
        $this->addSql('ALTER TABLE remote_job ADD CONSTRAINT FK_6744E1AA2A3E9C94 FOREIGN KEY (remote_id) REFERENCES remote (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE remote_job ADD CONSTRAINT FK_6744E1AABE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE salary ADD CONSTRAINT FK_9413BB717E182327 FOREIGN KEY (job_id_id) REFERENCES job (id)');
        $this->addSql('ALTER TABLE skill_level_job ADD CONSTRAINT FK_8B1034361D192655 FOREIGN KEY (skill_level_id) REFERENCES skill_level (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE skill_level_job ADD CONSTRAINT FK_8B103436BE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE social_media ADD CONSTRAINT FK_20BC159E979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
        $this->addSql('ALTER TABLE technology_job ADD CONSTRAINT FK_44F58D5D4235D463 FOREIGN KEY (technology_id) REFERENCES technology (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE technology_job ADD CONSTRAINT FK_44F58D5DBE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) ON DELETE CASCADE');
    }
}
