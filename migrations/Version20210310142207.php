<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210310142207 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE training (id INT AUTO_INCREMENT NOT NULL, site_name VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, sponsored VARCHAR(255) NOT NULL, category LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', specifications LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE training_technology (training_id INT NOT NULL, technology_id INT NOT NULL, INDEX IDX_4EDDE82BBEFD98D1 (training_id), INDEX IDX_4EDDE82B4235D463 (technology_id), PRIMARY KEY(training_id, technology_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE training_technology ADD CONSTRAINT FK_4EDDE82BBEFD98D1 FOREIGN KEY (training_id) REFERENCES training (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE training_technology ADD CONSTRAINT FK_4EDDE82B4235D463 FOREIGN KEY (technology_id) REFERENCES technology (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE training_technology DROP FOREIGN KEY FK_4EDDE82BBEFD98D1');
        $this->addSql('DROP TABLE training');
        $this->addSql('DROP TABLE training_technology');
    }
}
