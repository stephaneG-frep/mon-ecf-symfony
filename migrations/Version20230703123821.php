<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230703123821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, marque_id INT NOT NULL, moteur_id INT NOT NULL, categorie_id INT NOT NULL, arrive_id INT NOT NULL, vente_id INT NOT NULL, acheteur_id INT NOT NULL, annee VARCHAR(255) NOT NULL, kilometre VARCHAR(255) NOT NULL, prix VARCHAR(255) NOT NULL, INDEX IDX_292FFF1D4827B9B2 (marque_id), INDEX IDX_292FFF1D6BF4B111 (moteur_id), INDEX IDX_292FFF1DBCF5E72D (categorie_id), INDEX IDX_292FFF1DF4028648 (arrive_id), INDEX IDX_292FFF1D7DC7170A (vente_id), INDEX IDX_292FFF1D96A7BB5F (acheteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D4827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D6BF4B111 FOREIGN KEY (moteur_id) REFERENCES moteur (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DF4028648 FOREIGN KEY (arrive_id) REFERENCES arrive (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D7DC7170A FOREIGN KEY (vente_id) REFERENCES vente (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D96A7BB5F FOREIGN KEY (acheteur_id) REFERENCES acheteur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D4827B9B2');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D6BF4B111');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DBCF5E72D');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DF4028648');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D7DC7170A');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D96A7BB5F');
        $this->addSql('DROP TABLE vehicule');
    }
}
