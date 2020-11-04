<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201104201310 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE herds_data ADD hens_falls INT DEFAULT NULL, ADD cocks_falls INT DEFAULT NULL, ADD hens_missing INT DEFAULT NULL, ADD cocks_missing INT DEFAULT NULL, ADD hens_sexing_mistake INT DEFAULT NULL, ADD hens_tendons INT DEFAULT NULL, ADD cocks_tendons INT DEFAULT NULL, ADD hens_spiking INT DEFAULT NULL, ADD cocks_spiking INT DEFAULT NULL, ADD hens_weight INT DEFAULT NULL, ADD cocks_weight INT DEFAULT NULL, ADD hens_hand_weight INT DEFAULT NULL, ADD cocks_hand_weight INT DEFAULT NULL, ADD eggs_weight INT DEFAULT NULL, ADD heater_working_time NUMERIC(10, 2) DEFAULT NULL, ADD eggs_exported INT DEFAULT NULL, ADD fertilization NUMERIC(10, 2) DEFAULT NULL, ADD hens_exported INT DEFAULT NULL, ADD cocks_exported INT DEFAULT NULL, ADD hatching_eggs_quantity INT DEFAULT NULL, ADD small_eggs_quantity INT DEFAULT NULL, ADD broken_eggs_quantity INT DEFAULT NULL, ADD two_yolks_eggs_quantity INT DEFAULT NULL, ADD export TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE herds_data DROP hens_falls, DROP cocks_falls, DROP hens_missing, DROP cocks_missing, DROP hens_sexing_mistake, DROP hens_tendons, DROP cocks_tendons, DROP hens_spiking, DROP cocks_spiking, DROP hens_weight, DROP cocks_weight, DROP hens_hand_weight, DROP cocks_hand_weight, DROP eggs_weight, DROP heater_working_time, DROP eggs_exported, DROP fertilization, DROP hens_exported, DROP cocks_exported, DROP hatching_eggs_quantity, DROP small_eggs_quantity, DROP broken_eggs_quantity, DROP two_yolks_eggs_quantity, DROP export');
    }
}
