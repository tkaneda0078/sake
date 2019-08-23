<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190819133751 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE collection (id INT AUTO_INCREMENT NOT NULL, prefecture_id INT NOT NULL, name VARCHAR(255) NOT NULL COMMENT \'名前\', ruby VARCHAR(255) DEFAULT NULL COMMENT \'ふりがな\', brand VARCHAR(255) DEFAULT NULL COMMENT \'銘柄\', brewing VARCHAR(255) DEFAULT NULL COMMENT \'酒造\', price VARCHAR(255) DEFAULT NULL COMMENT \'価格\', feature VARCHAR(255) DEFAULT NULL COMMENT \'特徴\', specific_name VARCHAR(20) DEFAULT NULL COMMENT \'日本酒の種類\', material_rice VARCHAR(20) DEFAULT NULL COMMENT \'原料米\', rice_polishing_ratio VARCHAR(20) DEFAULT NULL COMMENT \'精米歩合\', create_at DATETIME NOT NULL, update_at DATETIME NOT NULL, delete_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE collection');
    }
}
