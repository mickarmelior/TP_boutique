<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190911132537 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, date_commande DATETIME DEFAULT NULL, montant DOUBLE PRECISION DEFAULT NULL, INDEX IDX_6EEAA67D99DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lignesde_commande (id INT AUTO_INCREMENT NOT NULL, commande_id INT NOT NULL, id_article_id INT NOT NULL, quantite INT DEFAULT NULL, INDEX IDX_64B93A9F82EA2E54 (commande_id), INDEX IDX_64B93A9FD71E064B (id_article_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D99DED506 FOREIGN KEY (id_client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE lignesde_commande ADD CONSTRAINT FK_64B93A9F82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE lignesde_commande ADD CONSTRAINT FK_64B93A9FD71E064B FOREIGN KEY (id_article_id) REFERENCES article (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE lignesde_commande DROP FOREIGN KEY FK_64B93A9F82EA2E54');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE lignesde_commande');
    }
}
