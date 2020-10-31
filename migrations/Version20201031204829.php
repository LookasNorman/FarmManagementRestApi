<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201031204829 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE buildings (id INT AUTO_INCREMENT NOT NULL, farm_id INT NOT NULL, name VARCHAR(255) NOT NULL, area INT DEFAULT NULL, INDEX IDX_9A51B6A765FCFA0D (farm_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE farm (id INT AUTO_INCREMENT NOT NULL, firm_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_5816D04589AF7860 (firm_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE herds (id INT AUTO_INCREMENT NOT NULL, hatchery_id INT NOT NULL, rearing_farm_id INT DEFAULT NULL, farm_id INT NOT NULL, building_id INT NOT NULL, padding_id INT NOT NULL, breed_line_id INT NOT NULL, parent_herd_id INT DEFAULT NULL, herds_type VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, hatching_date DATE NOT NULL, inserting_date DATE NOT NULL, hens INT DEFAULT NULL, cocks INT DEFAULT NULL, slaughter_date DATE DEFAULT NULL, warehouse_code VARCHAR(255) DEFAULT NULL, egg_code VARCHAR(255) DEFAULT NULL, INDEX IDX_FC70FEBBA0DB40AE (hatchery_id), INDEX IDX_FC70FEBBC2402124 (rearing_farm_id), INDEX IDX_FC70FEBB65FCFA0D (farm_id), INDEX IDX_FC70FEBB4D2A7E12 (building_id), INDEX IDX_FC70FEBB438BFA98 (padding_id), INDEX IDX_FC70FEBBE279584C (breed_line_id), INDEX IDX_FC70FEBBA112F88A (parent_herd_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE herds_data (id INT AUTO_INCREMENT NOT NULL, herd_id INT NOT NULL, date DATE NOT NULL, day INT NOT NULL, week INT NOT NULL, water INT NOT NULL, hens_feed INT DEFAULT NULL, cocks_feed INT DEFAULT NULL, hatching_eggs INT DEFAULT NULL, small_eggs INT DEFAULT NULL, broken_eggs INT DEFAULT NULL, two_yolk_eggs INT DEFAULT NULL, weak_eggs INT DEFAULT NULL, floor_eggs INT DEFAULT NULL, INDEX IDX_1D801D08D35A8CCC (herd_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paddings (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE buildings ADD CONSTRAINT FK_9A51B6A765FCFA0D FOREIGN KEY (farm_id) REFERENCES farm (id)');
        $this->addSql('ALTER TABLE farm ADD CONSTRAINT FK_5816D04589AF7860 FOREIGN KEY (firm_id) REFERENCES firms (id)');
        $this->addSql('ALTER TABLE herds ADD CONSTRAINT FK_FC70FEBBA0DB40AE FOREIGN KEY (hatchery_id) REFERENCES firms (id)');
        $this->addSql('ALTER TABLE herds ADD CONSTRAINT FK_FC70FEBBC2402124 FOREIGN KEY (rearing_farm_id) REFERENCES farm (id)');
        $this->addSql('ALTER TABLE herds ADD CONSTRAINT FK_FC70FEBB65FCFA0D FOREIGN KEY (farm_id) REFERENCES farm (id)');
        $this->addSql('ALTER TABLE herds ADD CONSTRAINT FK_FC70FEBB4D2A7E12 FOREIGN KEY (building_id) REFERENCES buildings (id)');
        $this->addSql('ALTER TABLE herds ADD CONSTRAINT FK_FC70FEBB438BFA98 FOREIGN KEY (padding_id) REFERENCES paddings (id)');
        $this->addSql('ALTER TABLE herds ADD CONSTRAINT FK_FC70FEBBE279584C FOREIGN KEY (breed_line_id) REFERENCES breed_line (id)');
        $this->addSql('ALTER TABLE herds ADD CONSTRAINT FK_FC70FEBBA112F88A FOREIGN KEY (parent_herd_id) REFERENCES herds (id)');
        $this->addSql('ALTER TABLE herds_data ADD CONSTRAINT FK_1D801D08D35A8CCC FOREIGN KEY (herd_id) REFERENCES herds (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE herds DROP FOREIGN KEY FK_FC70FEBB4D2A7E12');
        $this->addSql('ALTER TABLE buildings DROP FOREIGN KEY FK_9A51B6A765FCFA0D');
        $this->addSql('ALTER TABLE herds DROP FOREIGN KEY FK_FC70FEBBC2402124');
        $this->addSql('ALTER TABLE herds DROP FOREIGN KEY FK_FC70FEBB65FCFA0D');
        $this->addSql('ALTER TABLE herds DROP FOREIGN KEY FK_FC70FEBBA112F88A');
        $this->addSql('ALTER TABLE herds_data DROP FOREIGN KEY FK_1D801D08D35A8CCC');
        $this->addSql('ALTER TABLE herds DROP FOREIGN KEY FK_FC70FEBB438BFA98');
        $this->addSql('DROP TABLE buildings');
        $this->addSql('DROP TABLE farm');
        $this->addSql('DROP TABLE herds');
        $this->addSql('DROP TABLE herds_data');
        $this->addSql('DROP TABLE paddings');
    }
}
