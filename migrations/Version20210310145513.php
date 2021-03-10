<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210310145513 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE package_feature (package_id INT NOT NULL, feature_id INT NOT NULL, INDEX IDX_908C10EAF44CABFF (package_id), INDEX IDX_908C10EA60E4B879 (feature_id), PRIMARY KEY(package_id, feature_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE package_feature ADD CONSTRAINT FK_908C10EAF44CABFF FOREIGN KEY (package_id) REFERENCES package (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE package_feature ADD CONSTRAINT FK_908C10EA60E4B879 FOREIGN KEY (feature_id) REFERENCES feature (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE package_feature');
    }
}
