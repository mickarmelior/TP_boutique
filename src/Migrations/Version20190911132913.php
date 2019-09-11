<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190911132913 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D99DED506');
        $this->addSql('DROP INDEX IDX_6EEAA67D99DED506 ON commande');
        $this->addSql('ALTER TABLE commande CHANGE id_client_id client_id INT NOT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D19EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D19EB6921 ON commande (client_id)');
        $this->addSql('ALTER TABLE lignesde_commande DROP FOREIGN KEY FK_64B93A9FD71E064B');
        $this->addSql('DROP INDEX IDX_64B93A9FD71E064B ON lignesde_commande');
        $this->addSql('ALTER TABLE lignesde_commande CHANGE id_article_id article_id INT NOT NULL');
        $this->addSql('ALTER TABLE lignesde_commande ADD CONSTRAINT FK_64B93A9F7294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('CREATE INDEX IDX_64B93A9F7294869C ON lignesde_commande (article_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D19EB6921');
        $this->addSql('DROP INDEX IDX_6EEAA67D19EB6921 ON commande');
        $this->addSql('ALTER TABLE commande CHANGE client_id id_client_id INT NOT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D99DED506 FOREIGN KEY (id_client_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D99DED506 ON commande (id_client_id)');
        $this->addSql('ALTER TABLE lignesde_commande DROP FOREIGN KEY FK_64B93A9F7294869C');
        $this->addSql('DROP INDEX IDX_64B93A9F7294869C ON lignesde_commande');
        $this->addSql('ALTER TABLE lignesde_commande CHANGE article_id id_article_id INT NOT NULL');
        $this->addSql('ALTER TABLE lignesde_commande ADD CONSTRAINT FK_64B93A9FD71E064B FOREIGN KEY (id_article_id) REFERENCES article (id)');
        $this->addSql('CREATE INDEX IDX_64B93A9FD71E064B ON lignesde_commande (id_article_id)');
    }
}
