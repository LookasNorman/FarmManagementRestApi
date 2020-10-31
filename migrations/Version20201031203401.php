<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201031203401 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE breed_line (id INT AUTO_INCREMENT NOT NULL, breed_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_703EE449A8B4A30F (breed_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE breed_line_standard (id INT AUTO_INCREMENT NOT NULL, breed_line_id INT NOT NULL, age INT NOT NULL, hen_weight INT NOT NULL, cock_weight INT NOT NULL, hens_cumulative_feed_dose INT NOT NULL, cocks_cumulative_feed_dose INT NOT NULL, eggs_laying_hens_housed NUMERIC(5, 2) NOT NULL, eggs_laying_hens_week NUMERIC(5, 2) NOT NULL, eggs_hens_housed NUMERIC(5, 2) NOT NULL, hatching_eggs_hens_housed NUMERIC(5, 2) NOT NULL, fertilization NUMERIC(5, 2) NOT NULL, hatching_laid_eggs NUMERIC(5, 2) NOT NULL, hatching_fertilized_eggs NUMERIC(5, 2) NOT NULL, number_chicks INT NOT NULL, egg_weight NUMERIC(5, 2) NOT NULL, INDEX IDX_B8E2DFEEE279584C (breed_line_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE breeds (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE firm_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE firms (id INT AUTO_INCREMENT NOT NULL, firm_type_id INT NOT NULL, name VARCHAR(255) NOT NULL, address VARCHAR(255) DEFAULT NULL, phone_number VARCHAR(255) DEFAULT NULL, INDEX IDX_D854442B1C9526EB (firm_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE breed_line ADD CONSTRAINT FK_703EE449A8B4A30F FOREIGN KEY (breed_id) REFERENCES breeds (id)');
        $this->addSql('ALTER TABLE breed_line_standard ADD CONSTRAINT FK_B8E2DFEEE279584C FOREIGN KEY (breed_line_id) REFERENCES breed_line (id)');
        $this->addSql('ALTER TABLE firms ADD CONSTRAINT FK_D854442B1C9526EB FOREIGN KEY (firm_type_id) REFERENCES firm_type (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE breed_line_standard DROP FOREIGN KEY FK_B8E2DFEEE279584C');
        $this->addSql('ALTER TABLE breed_line DROP FOREIGN KEY FK_703EE449A8B4A30F');
        $this->addSql('ALTER TABLE firms DROP FOREIGN KEY FK_D854442B1C9526EB');
        $this->addSql('DROP TABLE breed_line');
        $this->addSql('DROP TABLE breed_line_standard');
        $this->addSql('DROP TABLE breeds');
        $this->addSql('DROP TABLE firm_type');
        $this->addSql('DROP TABLE firms');
    }
}
