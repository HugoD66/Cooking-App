<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221113145705 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ingredient (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, quantity INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pate_ingredient (pate_id INT NOT NULL, ingredient_id INT NOT NULL, INDEX IDX_698283FA2B068EB6 (pate_id), INDEX IDX_698283FA933FE08C (ingredient_id), PRIMARY KEY(pate_id, ingredient_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pate_ingredient ADD CONSTRAINT FK_698283FA2B068EB6 FOREIGN KEY (pate_id) REFERENCES pate (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pate_ingredient ADD CONSTRAINT FK_698283FA933FE08C FOREIGN KEY (ingredient_id) REFERENCES ingredient (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pate_ingredient DROP FOREIGN KEY FK_698283FA2B068EB6');
        $this->addSql('ALTER TABLE pate_ingredient DROP FOREIGN KEY FK_698283FA933FE08C');
        $this->addSql('DROP TABLE ingredient');
        $this->addSql('DROP TABLE pate_ingredient');
    }
}
