<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150308012038 extends AbstractMigration {

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema) {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql',
                       'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE skills (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, attribute INT NOT NULL, difficulty INT NOT NULL, byDefault INT NOT NULL, TL INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE characters (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, height INT NOT NULL, weight INT NOT NULL, size INT NOT NULL, age INT NOT NULL, description LONGTEXT NOT NULL, ST INT NOT NULL, DX INT NOT NULL, IQ INT NOT NULL, HT INT NOT NULL, HP INT NOT NULL, WILL INT NOT NULL, PER INT NOT NULL, FP INT NOT NULL, lift INT NOT NULL, speed DOUBLE PRECISION NOT NULL, move INT NOT NULL, encumbrance INT NOT NULL, dodge INT NOT NULL, parry INT NOT NULL, block INT NOT NULL, TL INT NOT NULL, reaction INT NOT NULL, status INT NOT NULL, CP INT NOT NULL, money INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema) {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql',
                       'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE skills');
        $this->addSql('DROP TABLE characters');
    }
}
