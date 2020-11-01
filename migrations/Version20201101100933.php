<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201101100933 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE counter (id INT AUTO_INCREMENT NOT NULL, counter_type_id INT NOT NULL, name VARCHAR(255) NOT NULL, iu VARCHAR(5) NOT NULL, active TINYINT(1) NOT NULL, INDEX IDX_C12294784B27D0B2 (counter_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE counter_state (id INT AUTO_INCREMENT NOT NULL, counter_id INT NOT NULL, date DATE NOT NULL, state NUMERIC(10, 3) NOT NULL, INDEX IDX_700AABD9FCEEF2E3 (counter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE counter_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE silo (id INT AUTO_INCREMENT NOT NULL, silo_type_id INT NOT NULL, building_id INT NOT NULL, name VARCHAR(255) NOT NULL, capacity INT NOT NULL, iu VARCHAR(5) NOT NULL, INDEX IDX_B8D78A39FBF25DA (silo_type_id), INDEX IDX_B8D78A34D2A7E12 (building_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE silo_refueling (id INT AUTO_INCREMENT NOT NULL, silo_id INT NOT NULL, date DATE NOT NULL, quantity INT NOT NULL, INDEX IDX_D2E3F387C9902A61 (silo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE silo_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tank (id INT AUTO_INCREMENT NOT NULL, tank_type_id INT NOT NULL, name VARCHAR(255) NOT NULL, capacity INT NOT NULL, iu VARCHAR(5) NOT NULL, INDEX IDX_AD12B7398FDAC21 (tank_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tank_buildings (tank_id INT NOT NULL, buildings_id INT NOT NULL, INDEX IDX_77CC97E415C652B5 (tank_id), INDEX IDX_77CC97E41485E613 (buildings_id), PRIMARY KEY(tank_id, buildings_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tank_state (id INT AUTO_INCREMENT NOT NULL, tank_id INT NOT NULL, date DATE NOT NULL, state INT NOT NULL, state_percent NUMERIC(5, 2) NOT NULL, INDEX IDX_8389ED2115C652B5 (tank_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tank_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE counter ADD CONSTRAINT FK_C12294784B27D0B2 FOREIGN KEY (counter_type_id) REFERENCES counter_type (id)');
        $this->addSql('ALTER TABLE counter_state ADD CONSTRAINT FK_700AABD9FCEEF2E3 FOREIGN KEY (counter_id) REFERENCES counter (id)');
        $this->addSql('ALTER TABLE silo ADD CONSTRAINT FK_B8D78A39FBF25DA FOREIGN KEY (silo_type_id) REFERENCES silo_type (id)');
        $this->addSql('ALTER TABLE silo ADD CONSTRAINT FK_B8D78A34D2A7E12 FOREIGN KEY (building_id) REFERENCES buildings (id)');
        $this->addSql('ALTER TABLE silo_refueling ADD CONSTRAINT FK_D2E3F387C9902A61 FOREIGN KEY (silo_id) REFERENCES silo (id)');
        $this->addSql('ALTER TABLE tank ADD CONSTRAINT FK_AD12B7398FDAC21 FOREIGN KEY (tank_type_id) REFERENCES tank_type (id)');
        $this->addSql('ALTER TABLE tank_buildings ADD CONSTRAINT FK_77CC97E415C652B5 FOREIGN KEY (tank_id) REFERENCES tank (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tank_buildings ADD CONSTRAINT FK_77CC97E41485E613 FOREIGN KEY (buildings_id) REFERENCES buildings (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tank_state ADD CONSTRAINT FK_8389ED2115C652B5 FOREIGN KEY (tank_id) REFERENCES tank (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE counter_state DROP FOREIGN KEY FK_700AABD9FCEEF2E3');
        $this->addSql('ALTER TABLE counter DROP FOREIGN KEY FK_C12294784B27D0B2');
        $this->addSql('ALTER TABLE silo_refueling DROP FOREIGN KEY FK_D2E3F387C9902A61');
        $this->addSql('ALTER TABLE silo DROP FOREIGN KEY FK_B8D78A39FBF25DA');
        $this->addSql('ALTER TABLE tank_buildings DROP FOREIGN KEY FK_77CC97E415C652B5');
        $this->addSql('ALTER TABLE tank_state DROP FOREIGN KEY FK_8389ED2115C652B5');
        $this->addSql('ALTER TABLE tank DROP FOREIGN KEY FK_AD12B7398FDAC21');
        $this->addSql('DROP TABLE counter');
        $this->addSql('DROP TABLE counter_state');
        $this->addSql('DROP TABLE counter_type');
        $this->addSql('DROP TABLE silo');
        $this->addSql('DROP TABLE silo_refueling');
        $this->addSql('DROP TABLE silo_type');
        $this->addSql('DROP TABLE tank');
        $this->addSql('DROP TABLE tank_buildings');
        $this->addSql('DROP TABLE tank_state');
        $this->addSql('DROP TABLE tank_type');
    }
}
