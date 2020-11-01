<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201101102352 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE certificate (id INT AUTO_INCREMENT NOT NULL, certificate_type_id INT NOT NULL, firm_id INT NOT NULL, certificate_number VARCHAR(255) NOT NULL, INDEX IDX_219CDA4A90EF3F4C (certificate_type_id), INDEX IDX_219CDA4A89AF7860 (firm_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE certificate_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lights (id INT AUTO_INCREMENT NOT NULL, herd_id INT NOT NULL, date DATE NOT NULL, light_on TIME NOT NULL, light_off TIME NOT NULL, intensity NUMERIC(5, 2) NOT NULL, INDEX IDX_38BCB2E8D35A8CCC (herd_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE login_logs (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, date DATE NOT NULL, ip_address VARCHAR(255) NOT NULL, INDEX IDX_36FD4D19A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE provide_supplement (id INT AUTO_INCREMENT NOT NULL, herd_id INT NOT NULL, supplement_id INT NOT NULL, date DATE NOT NULL, quantity INT NOT NULL, INDEX IDX_D85008B6D35A8CCC (herd_id), INDEX IDX_D85008B67793FA21 (supplement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE supplement (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE certificate ADD CONSTRAINT FK_219CDA4A90EF3F4C FOREIGN KEY (certificate_type_id) REFERENCES certificate_type (id)');
        $this->addSql('ALTER TABLE certificate ADD CONSTRAINT FK_219CDA4A89AF7860 FOREIGN KEY (firm_id) REFERENCES firms (id)');
        $this->addSql('ALTER TABLE lights ADD CONSTRAINT FK_38BCB2E8D35A8CCC FOREIGN KEY (herd_id) REFERENCES herds (id)');
        $this->addSql('ALTER TABLE login_logs ADD CONSTRAINT FK_36FD4D19A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE provide_supplement ADD CONSTRAINT FK_D85008B6D35A8CCC FOREIGN KEY (herd_id) REFERENCES herds (id)');
        $this->addSql('ALTER TABLE provide_supplement ADD CONSTRAINT FK_D85008B67793FA21 FOREIGN KEY (supplement_id) REFERENCES supplement (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificate DROP FOREIGN KEY FK_219CDA4A90EF3F4C');
        $this->addSql('ALTER TABLE provide_supplement DROP FOREIGN KEY FK_D85008B67793FA21');
        $this->addSql('DROP TABLE certificate');
        $this->addSql('DROP TABLE certificate_type');
        $this->addSql('DROP TABLE lights');
        $this->addSql('DROP TABLE login_logs');
        $this->addSql('DROP TABLE provide_supplement');
        $this->addSql('DROP TABLE supplement');
    }
}
