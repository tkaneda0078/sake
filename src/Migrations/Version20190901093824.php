<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190901093824 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F242C7AD2');
        $this->addSql('DROP INDEX IDX_C53D045F242C7AD2 ON image');
        $this->addSql('ALTER TABLE image CHANGE collections_id collection_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F514956FD FOREIGN KEY (collection_id) REFERENCES collection (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F514956FD ON image (collection_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F514956FD');
        $this->addSql('DROP INDEX IDX_C53D045F514956FD ON image');
        $this->addSql('ALTER TABLE image CHANGE collection_id collections_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F242C7AD2 FOREIGN KEY (collections_id) REFERENCES collection (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F242C7AD2 ON image (collections_id)');
    }
}
