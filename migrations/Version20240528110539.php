<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use App\Entity\Product;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240528110539 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql("INSERT INTO product (name, price) VALUES ('Iphone', '100')");
        $this->addSql("INSERT INTO product (name, price) VALUES ('Наушники', '20')");
        $this->addSql("INSERT INTO product (name, price) VALUES ('Чехол', '10')");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE product');
    }
}
