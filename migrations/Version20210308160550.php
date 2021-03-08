<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210308160550 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE job_stack (job_id INT NOT NULL, stack_id INT NOT NULL, INDEX IDX_40F4C61ABE04EA9 (job_id), INDEX IDX_40F4C61A37C70060 (stack_id), PRIMARY KEY(job_id, stack_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job_position (job_id INT NOT NULL, position_id INT NOT NULL, INDEX IDX_216B418EBE04EA9 (job_id), INDEX IDX_216B418EDD842E46 (position_id), PRIMARY KEY(job_id, position_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE job_stack ADD CONSTRAINT FK_40F4C61ABE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE job_stack ADD CONSTRAINT FK_40F4C61A37C70060 FOREIGN KEY (stack_id) REFERENCES stack (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE job_position ADD CONSTRAINT FK_216B418EBE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE job_position ADD CONSTRAINT FK_216B418EDD842E46 FOREIGN KEY (position_id) REFERENCES position (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE job_stack');
        $this->addSql('DROP TABLE job_position');
    }
}
