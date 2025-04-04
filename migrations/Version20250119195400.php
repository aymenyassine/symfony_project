<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250119195400 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE menu_restaurent (menu_id INT NOT NULL, restaurent_id INT NOT NULL, INDEX IDX_CD310E31CCD7E912 (menu_id), INDEX IDX_CD310E312A763278 (restaurent_id), PRIMARY KEY(menu_id, restaurent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE menu_restaurent ADD CONSTRAINT FK_CD310E31CCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE menu_restaurent ADD CONSTRAINT FK_CD310E312A763278 FOREIGN KEY (restaurent_id) REFERENCES restaurent (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE menu_restaurent DROP FOREIGN KEY FK_CD310E31CCD7E912');
        $this->addSql('ALTER TABLE menu_restaurent DROP FOREIGN KEY FK_CD310E312A763278');
        $this->addSql('DROP TABLE menu_restaurent');
    }
}
