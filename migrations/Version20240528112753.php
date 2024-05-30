<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240528112753 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE coupon (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, percent INT DEFAULT NULL, discount INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql("INSERT INTO coupon (name, percent) VALUES ('P10', '10')");
        $this->addSql("INSERT INTO coupon (name, percent) VALUES ('P50', '50')");
        $this->addSql("INSERT INTO coupon (name, discount) VALUES ('D10', '10')");
        $this->addSql("INSERT INTO coupon (name, discount) VALUES ('D50', '50')");
        $this->addSql("INSERT INTO coupon (name, discount) VALUES ('D70', '70')");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE coupon');
    }
}
