<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210226150640 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company ADD slogan VARCHAR(255) DEFAULT NULL, ADD french_office VARCHAR(255) DEFAULT NULL, ADD remote_hiring VARCHAR(255) DEFAULT NULL, ADD work_force VARCHAR(255) DEFAULT NULL, ADD key_words LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD perks LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD logo VARCHAR(255) DEFAULT NULL, ADD banner VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company DROP slogan, DROP french_office, DROP remote_hiring, DROP work_force, DROP key_words, DROP perks, DROP logo, DROP banner');
    }
}
