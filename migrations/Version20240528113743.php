<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240528113743 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE tax (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, percent INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql("INSERT INTO tax (name, percent) VALUES ('DE123456789', '19')");
        $this->addSql("INSERT INTO tax (name, percent) VALUES ('IT123456789', '22')");
        $this->addSql("INSERT INTO tax (name, percent) VALUES ('GR123456789', '24')");
        $this->addSql("INSERT INTO tax (name, percent) VALUES ('FRAB123456789', '20')");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE tax');
    }
}
