<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190415142221 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE employeur_auxiliairedevie (employeur_id INT NOT NULL, auxiliairedevie_id INT NOT NULL, INDEX IDX_C0C770535D7C53EC (employeur_id), INDEX IDX_C0C770536547170F (auxiliairedevie_id), PRIMARY KEY(employeur_id, auxiliairedevie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE employeur_auxiliairedevie ADD CONSTRAINT FK_C0C770535D7C53EC FOREIGN KEY (employeur_id) REFERENCES employeur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE employeur_auxiliairedevie ADD CONSTRAINT FK_C0C770536547170F FOREIGN KEY (auxiliairedevie_id) REFERENCES auxiliairedevie (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE employeur_auxiliairedevie');
    }
}
