<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250124135225 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reserva_restaurants (id INT AUTO_INCREMENT NOT NULL, restaurants_id_id INT NOT NULL, date DATETIME NOT NULL, guest_name VARCHAR(255) NOT NULL, number_of_guests INT NOT NULL, INDEX IDX_468C91D9CFFDED2 (restaurants_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reserva_restaurants ADD CONSTRAINT FK_468C91D9CFFDED2 FOREIGN KEY (restaurants_id_id) REFERENCES restaurent (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reserva_restaurants DROP FOREIGN KEY FK_468C91D9CFFDED2');
        $this->addSql('DROP TABLE reserva_restaurants');
    }
}
