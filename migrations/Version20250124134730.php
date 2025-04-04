<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250124134730 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restaurent DROP FOREIGN KEY FK_EC9CBAE358FE5733');
        $this->addSql('DROP TABLE reservation_restaurants');
        $this->addSql('DROP INDEX IDX_EC9CBAE358FE5733 ON restaurent');
        $this->addSql('ALTER TABLE restaurent DROP reservation_restaurants_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation_restaurants (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, guest_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE restaurent ADD reservation_restaurants_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE restaurent ADD CONSTRAINT FK_EC9CBAE358FE5733 FOREIGN KEY (reservation_restaurants_id) REFERENCES reservation_restaurants (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_EC9CBAE358FE5733 ON restaurent (reservation_restaurants_id)');
    }
}
