<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220813193421 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE time DROP FOREIGN KEY FK_6F9498458F93B6FC');
        $this->addSql('DROP INDEX IDX_6F9498458F93B6FC ON time');
        $this->addSql('ALTER TABLE time DROP movie_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE time ADD movie_id INT NOT NULL');
        $this->addSql('ALTER TABLE time ADD CONSTRAINT FK_6F9498458F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id)');
        $this->addSql('CREATE INDEX IDX_6F9498458F93B6FC ON time (movie_id)');
    }
}
