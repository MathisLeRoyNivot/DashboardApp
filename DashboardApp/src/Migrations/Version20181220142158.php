<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181220142158 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP INDEX UNIQ_3C6AFA536E1ECFCD');
        $this->addSql('CREATE TEMPORARY TABLE __temp__marks AS SELECT id, id_student_id, mark_dev, mark_network, mark_bdd FROM marks');
        $this->addSql('DROP TABLE marks');
        $this->addSql('CREATE TABLE marks (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_student_id INTEGER NOT NULL, mark_dev DOUBLE PRECISION NOT NULL, mark_network DOUBLE PRECISION NOT NULL, mark_bdd DOUBLE PRECISION NOT NULL, mark_punctuality DOUBLE PRECISION NOT NULL, CONSTRAINT FK_3C6AFA536E1ECFCD FOREIGN KEY (id_student_id) REFERENCES students (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO marks (id, id_student_id, mark_dev, mark_network, mark_bdd) SELECT id, id_student_id, mark_dev, mark_network, mark_bdd FROM __temp__marks');
        $this->addSql('DROP TABLE __temp__marks');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3C6AFA536E1ECFCD ON marks (id_student_id)');
        $this->addSql('DROP INDEX UNIQ_A4698DB279F37AE5');
        $this->addSql('CREATE TEMPORARY TABLE __temp__students AS SELECT id, id_user_id, lastname, firstname FROM students');
        $this->addSql('DROP TABLE students');
        $this->addSql('CREATE TABLE students (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_user_id INTEGER NOT NULL, lastname VARCHAR(255) NOT NULL COLLATE BINARY, firstname VARCHAR(255) NOT NULL COLLATE BINARY, CONSTRAINT FK_A4698DB279F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO students (id, id_user_id, lastname, firstname) SELECT id, id_user_id, lastname, firstname FROM __temp__students');
        $this->addSql('DROP TABLE __temp__students');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A4698DB279F37AE5 ON students (id_user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP INDEX UNIQ_3C6AFA536E1ECFCD');
        $this->addSql('CREATE TEMPORARY TABLE __temp__marks AS SELECT id, id_student_id, mark_dev, mark_network, mark_bdd FROM marks');
        $this->addSql('DROP TABLE marks');
        $this->addSql('CREATE TABLE marks (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_student_id INTEGER NOT NULL, mark_dev DOUBLE PRECISION NOT NULL, mark_network DOUBLE PRECISION NOT NULL, mark_bdd DOUBLE PRECISION NOT NULL)');
        $this->addSql('INSERT INTO marks (id, id_student_id, mark_dev, mark_network, mark_bdd) SELECT id, id_student_id, mark_dev, mark_network, mark_bdd FROM __temp__marks');
        $this->addSql('DROP TABLE __temp__marks');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3C6AFA536E1ECFCD ON marks (id_student_id)');
        $this->addSql('DROP INDEX UNIQ_A4698DB279F37AE5');
        $this->addSql('CREATE TEMPORARY TABLE __temp__students AS SELECT id, id_user_id, lastname, firstname FROM students');
        $this->addSql('DROP TABLE students');
        $this->addSql('CREATE TABLE students (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_user_id INTEGER NOT NULL, lastname VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO students (id, id_user_id, lastname, firstname) SELECT id, id_user_id, lastname, firstname FROM __temp__students');
        $this->addSql('DROP TABLE __temp__students');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A4698DB279F37AE5 ON students (id_user_id)');
    }
}
