<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201103043249 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE breed_line ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE breed_line ADD CONSTRAINT FK_703EE4497E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_703EE4497E3C61F9 ON breed_line (owner_id)');
        $this->addSql('ALTER TABLE breed_line_standard ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE breed_line_standard ADD CONSTRAINT FK_B8E2DFEE7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B8E2DFEE7E3C61F9 ON breed_line_standard (owner_id)');
        $this->addSql('ALTER TABLE breeds ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE breeds ADD CONSTRAINT FK_FD953C827E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_FD953C827E3C61F9 ON breeds (owner_id)');
        $this->addSql('ALTER TABLE buildings ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE buildings ADD CONSTRAINT FK_9A51B6A77E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_9A51B6A77E3C61F9 ON buildings (owner_id)');
        $this->addSql('ALTER TABLE certificate ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE certificate ADD CONSTRAINT FK_219CDA4A7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_219CDA4A7E3C61F9 ON certificate (owner_id)');
        $this->addSql('ALTER TABLE certificate_type ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE certificate_type ADD CONSTRAINT FK_F2C76A507E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_F2C76A507E3C61F9 ON certificate_type (owner_id)');
        $this->addSql('ALTER TABLE counter ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE counter ADD CONSTRAINT FK_C12294787E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_C12294787E3C61F9 ON counter (owner_id)');
        $this->addSql('ALTER TABLE counter_state ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE counter_state ADD CONSTRAINT FK_700AABD97E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_700AABD97E3C61F9 ON counter_state (owner_id)');
        $this->addSql('ALTER TABLE counter_type ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE counter_type ADD CONSTRAINT FK_C3538E4E7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_C3538E4E7E3C61F9 ON counter_type (owner_id)');
        $this->addSql('ALTER TABLE farm ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE farm ADD CONSTRAINT FK_5816D0457E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_5816D0457E3C61F9 ON farm (owner_id)');
        $this->addSql('ALTER TABLE firm_type ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE firm_type ADD CONSTRAINT FK_DE905AB97E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_DE905AB97E3C61F9 ON firm_type (owner_id)');
        $this->addSql('ALTER TABLE firms ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE firms ADD CONSTRAINT FK_D854442B7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D854442B7E3C61F9 ON firms (owner_id)');
        $this->addSql('ALTER TABLE herds ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE herds ADD CONSTRAINT FK_FC70FEBB7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_FC70FEBB7E3C61F9 ON herds (owner_id)');
        $this->addSql('ALTER TABLE herds_data ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE herds_data ADD CONSTRAINT FK_1D801D087E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1D801D087E3C61F9 ON herds_data (owner_id)');
        $this->addSql('ALTER TABLE lights ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE lights ADD CONSTRAINT FK_38BCB2E87E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_38BCB2E87E3C61F9 ON lights (owner_id)');
        $this->addSql('ALTER TABLE paddings ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE paddings ADD CONSTRAINT FK_FCB3162C7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_FCB3162C7E3C61F9 ON paddings (owner_id)');
        $this->addSql('ALTER TABLE provide_supplement ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE provide_supplement ADD CONSTRAINT FK_D85008B67E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D85008B67E3C61F9 ON provide_supplement (owner_id)');
        $this->addSql('ALTER TABLE silo ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE silo ADD CONSTRAINT FK_B8D78A37E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B8D78A37E3C61F9 ON silo (owner_id)');
        $this->addSql('ALTER TABLE silo_refueling ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE silo_refueling ADD CONSTRAINT FK_D2E3F3877E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D2E3F3877E3C61F9 ON silo_refueling (owner_id)');
        $this->addSql('ALTER TABLE silo_type ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE silo_type ADD CONSTRAINT FK_42EE1B1F7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_42EE1B1F7E3C61F9 ON silo_type (owner_id)');
        $this->addSql('ALTER TABLE supplement ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE supplement ADD CONSTRAINT FK_15A73C97E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_15A73C97E3C61F9 ON supplement (owner_id)');
        $this->addSql('ALTER TABLE tank ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE tank ADD CONSTRAINT FK_AD12B7397E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_AD12B7397E3C61F9 ON tank (owner_id)');
        $this->addSql('ALTER TABLE tank_state ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE tank_state ADD CONSTRAINT FK_8389ED217E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_8389ED217E3C61F9 ON tank_state (owner_id)');
        $this->addSql('ALTER TABLE tank_type ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE tank_type ADD CONSTRAINT FK_F9643E5C7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_F9643E5C7E3C61F9 ON tank_type (owner_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE breed_line DROP FOREIGN KEY FK_703EE4497E3C61F9');
        $this->addSql('DROP INDEX IDX_703EE4497E3C61F9 ON breed_line');
        $this->addSql('ALTER TABLE breed_line DROP owner_id');
        $this->addSql('ALTER TABLE breed_line_standard DROP FOREIGN KEY FK_B8E2DFEE7E3C61F9');
        $this->addSql('DROP INDEX IDX_B8E2DFEE7E3C61F9 ON breed_line_standard');
        $this->addSql('ALTER TABLE breed_line_standard DROP owner_id');
        $this->addSql('ALTER TABLE breeds DROP FOREIGN KEY FK_FD953C827E3C61F9');
        $this->addSql('DROP INDEX IDX_FD953C827E3C61F9 ON breeds');
        $this->addSql('ALTER TABLE breeds DROP owner_id');
        $this->addSql('ALTER TABLE buildings DROP FOREIGN KEY FK_9A51B6A77E3C61F9');
        $this->addSql('DROP INDEX IDX_9A51B6A77E3C61F9 ON buildings');
        $this->addSql('ALTER TABLE buildings DROP owner_id');
        $this->addSql('ALTER TABLE certificate DROP FOREIGN KEY FK_219CDA4A7E3C61F9');
        $this->addSql('DROP INDEX IDX_219CDA4A7E3C61F9 ON certificate');
        $this->addSql('ALTER TABLE certificate DROP owner_id');
        $this->addSql('ALTER TABLE certificate_type DROP FOREIGN KEY FK_F2C76A507E3C61F9');
        $this->addSql('DROP INDEX IDX_F2C76A507E3C61F9 ON certificate_type');
        $this->addSql('ALTER TABLE certificate_type DROP owner_id');
        $this->addSql('ALTER TABLE counter DROP FOREIGN KEY FK_C12294787E3C61F9');
        $this->addSql('DROP INDEX IDX_C12294787E3C61F9 ON counter');
        $this->addSql('ALTER TABLE counter DROP owner_id');
        $this->addSql('ALTER TABLE counter_state DROP FOREIGN KEY FK_700AABD97E3C61F9');
        $this->addSql('DROP INDEX IDX_700AABD97E3C61F9 ON counter_state');
        $this->addSql('ALTER TABLE counter_state DROP owner_id');
        $this->addSql('ALTER TABLE counter_type DROP FOREIGN KEY FK_C3538E4E7E3C61F9');
        $this->addSql('DROP INDEX IDX_C3538E4E7E3C61F9 ON counter_type');
        $this->addSql('ALTER TABLE counter_type DROP owner_id');
        $this->addSql('ALTER TABLE farm DROP FOREIGN KEY FK_5816D0457E3C61F9');
        $this->addSql('DROP INDEX IDX_5816D0457E3C61F9 ON farm');
        $this->addSql('ALTER TABLE farm DROP owner_id');
        $this->addSql('ALTER TABLE firm_type DROP FOREIGN KEY FK_DE905AB97E3C61F9');
        $this->addSql('DROP INDEX IDX_DE905AB97E3C61F9 ON firm_type');
        $this->addSql('ALTER TABLE firm_type DROP owner_id');
        $this->addSql('ALTER TABLE firms DROP FOREIGN KEY FK_D854442B7E3C61F9');
        $this->addSql('DROP INDEX IDX_D854442B7E3C61F9 ON firms');
        $this->addSql('ALTER TABLE firms DROP owner_id');
        $this->addSql('ALTER TABLE herds DROP FOREIGN KEY FK_FC70FEBB7E3C61F9');
        $this->addSql('DROP INDEX IDX_FC70FEBB7E3C61F9 ON herds');
        $this->addSql('ALTER TABLE herds DROP owner_id');
        $this->addSql('ALTER TABLE herds_data DROP FOREIGN KEY FK_1D801D087E3C61F9');
        $this->addSql('DROP INDEX IDX_1D801D087E3C61F9 ON herds_data');
        $this->addSql('ALTER TABLE herds_data DROP owner_id');
        $this->addSql('ALTER TABLE lights DROP FOREIGN KEY FK_38BCB2E87E3C61F9');
        $this->addSql('DROP INDEX IDX_38BCB2E87E3C61F9 ON lights');
        $this->addSql('ALTER TABLE lights DROP owner_id');
        $this->addSql('ALTER TABLE paddings DROP FOREIGN KEY FK_FCB3162C7E3C61F9');
        $this->addSql('DROP INDEX IDX_FCB3162C7E3C61F9 ON paddings');
        $this->addSql('ALTER TABLE paddings DROP owner_id');
        $this->addSql('ALTER TABLE provide_supplement DROP FOREIGN KEY FK_D85008B67E3C61F9');
        $this->addSql('DROP INDEX IDX_D85008B67E3C61F9 ON provide_supplement');
        $this->addSql('ALTER TABLE provide_supplement DROP owner_id');
        $this->addSql('ALTER TABLE silo DROP FOREIGN KEY FK_B8D78A37E3C61F9');
        $this->addSql('DROP INDEX IDX_B8D78A37E3C61F9 ON silo');
        $this->addSql('ALTER TABLE silo DROP owner_id');
        $this->addSql('ALTER TABLE silo_refueling DROP FOREIGN KEY FK_D2E3F3877E3C61F9');
        $this->addSql('DROP INDEX IDX_D2E3F3877E3C61F9 ON silo_refueling');
        $this->addSql('ALTER TABLE silo_refueling DROP owner_id');
        $this->addSql('ALTER TABLE silo_type DROP FOREIGN KEY FK_42EE1B1F7E3C61F9');
        $this->addSql('DROP INDEX IDX_42EE1B1F7E3C61F9 ON silo_type');
        $this->addSql('ALTER TABLE silo_type DROP owner_id');
        $this->addSql('ALTER TABLE supplement DROP FOREIGN KEY FK_15A73C97E3C61F9');
        $this->addSql('DROP INDEX IDX_15A73C97E3C61F9 ON supplement');
        $this->addSql('ALTER TABLE supplement DROP owner_id');
        $this->addSql('ALTER TABLE tank DROP FOREIGN KEY FK_AD12B7397E3C61F9');
        $this->addSql('DROP INDEX IDX_AD12B7397E3C61F9 ON tank');
        $this->addSql('ALTER TABLE tank DROP owner_id');
        $this->addSql('ALTER TABLE tank_state DROP FOREIGN KEY FK_8389ED217E3C61F9');
        $this->addSql('DROP INDEX IDX_8389ED217E3C61F9 ON tank_state');
        $this->addSql('ALTER TABLE tank_state DROP owner_id');
        $this->addSql('ALTER TABLE tank_type DROP FOREIGN KEY FK_F9643E5C7E3C61F9');
        $this->addSql('DROP INDEX IDX_F9643E5C7E3C61F9 ON tank_type');
        $this->addSql('ALTER TABLE tank_type DROP owner_id');
    }
}
