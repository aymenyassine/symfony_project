<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250119222622 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE restaurent_menu (restaurent_id INT NOT NULL, menu_id INT NOT NULL, INDEX IDX_3B59A40D2A763278 (restaurent_id), INDEX IDX_3B59A40DCCD7E912 (menu_id), PRIMARY KEY(restaurent_id, menu_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE restaurent_menu ADD CONSTRAINT FK_3B59A40D2A763278 FOREIGN KEY (restaurent_id) REFERENCES restaurent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE restaurent_menu ADD CONSTRAINT FK_3B59A40DCCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE restaurent CHANGE menu_id menu_id INT NOT NULL, CHANGE photo photo VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restaurent_menu DROP FOREIGN KEY FK_3B59A40D2A763278');
        $this->addSql('ALTER TABLE restaurent_menu DROP FOREIGN KEY FK_3B59A40DCCD7E912');
        $this->addSql('DROP TABLE restaurent_menu');
        $this->addSql('ALTER TABLE restaurent CHANGE menu_id menu_id INT DEFAULT NULL, CHANGE photo photo VARCHAR(255) NOT NULL');
    }
}
