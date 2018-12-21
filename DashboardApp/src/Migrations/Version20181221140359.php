<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181221140359 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE marks');
        $this->addSql('DROP TABLE students');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74');
        $this->addSql('DROP INDEX UNIQ_8D93D649F85E0677');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user AS SELECT id, username, password, email, user_type FROM user');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username VARCHAR(255) NOT NULL COLLATE BINARY, password VARCHAR(255) NOT NULL COLLATE BINARY, email VARCHAR(255) NOT NULL COLLATE BINARY, user_type BOOLEAN NOT NULL, lastname VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, mark_dev DOUBLE PRECISION NOT NULL, mark_network DOUBLE PRECISION NOT NULL, mark_bdd DOUBLE PRECISION NOT NULL, mark_punctuality DOUBLE PRECISION NOT NULL)');
        $this->addSql('INSERT INTO user (id, username, password, email, user_type) SELECT id, username, password, email, user_type FROM __temp__user');
        $this->addSql('DROP TABLE __temp__user');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE marks (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_student_id INTEGER NOT NULL, mark_dev DOUBLE PRECISION NOT NULL, mark_network DOUBLE PRECISION NOT NULL, mark_bdd DOUBLE PRECISION NOT NULL, mark_punctuality DOUBLE PRECISION NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3C6AFA536E1ECFCD ON marks (id_student_id)');
        $this->addSql('CREATE TABLE students (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_user_id INTEGER NOT NULL, lastname VARCHAR(255) NOT NULL COLLATE BINARY, firstname VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A4698DB279F37AE5 ON students (id_user_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user AS SELECT id, username, password, email, user_type FROM user');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, user_type BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO user (id, username, password, email, user_type) SELECT id, username, password, email, user_type FROM __temp__user');
        $this->addSql('DROP TABLE __temp__user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON user (username)');
    }
}
