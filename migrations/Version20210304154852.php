<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210304154852 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE job ADD methodology VARCHAR(255) DEFAULT NULL, ADD job_description LONGTEXT DEFAULT NULL, ADD job_missions LONGTEXT DEFAULT NULL, ADD candidate_profile LONGTEXT DEFAULT NULL, ADD miscellaneous LONGTEXT DEFAULT NULL, ADD location VARCHAR(255) NOT NULL, ADD remote VARCHAR(255) NOT NULL, ADD salary VARCHAR(255) DEFAULT NULL, ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE job DROP methodology, DROP job_description, DROP job_missions, DROP candidate_profile, DROP miscellaneous, DROP location, DROP remote, DROP salary, DROP created_at, DROP updated_at');
    }
}
