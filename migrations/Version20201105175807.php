<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201105175807 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE herds_data ADD misshapen_eggs INT DEFAULT NULL, ADD small_eggs_fall_of INT DEFAULT NULL, ADD broken_eggs_fall_of INT DEFAULT NULL, ADD spider_eggs INT DEFAULT NULL, CHANGE eggs_weight eggs_weight NUMERIC(10, 2) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE herds_data DROP misshapen_eggs, DROP small_eggs_fall_of, DROP broken_eggs_fall_of, DROP spider_eggs, CHANGE eggs_weight eggs_weight INT DEFAULT NULL');
    }
}
