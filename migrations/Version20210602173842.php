<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210602173842 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE course_client (course_id INT NOT NULL, client_id INT NOT NULL, INDEX IDX_697CC518591CC992 (course_id), INDEX IDX_697CC51819EB6921 (client_id), PRIMARY KEY(course_id, client_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE course_client ADD CONSTRAINT FK_697CC518591CC992 FOREIGN KEY (course_id) REFERENCES course (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE course_client ADD CONSTRAINT FK_697CC51819EB6921 FOREIGN KEY (client_id) REFERENCES personne (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE course ADD client_id INT NOT NULL, ADD chauffeur_id INT NOT NULL');
        $this->addSql('ALTER TABLE course ADD CONSTRAINT FK_169E6FB919EB6921 FOREIGN KEY (client_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE course ADD CONSTRAINT FK_169E6FB985C0B3BE FOREIGN KEY (chauffeur_id) REFERENCES personne (id)');
        $this->addSql('CREATE INDEX IDX_169E6FB919EB6921 ON course (client_id)');
        $this->addSql('CREATE INDEX IDX_169E6FB985C0B3BE ON course (chauffeur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE course_client');
        $this->addSql('ALTER TABLE course DROP FOREIGN KEY FK_169E6FB919EB6921');
        $this->addSql('ALTER TABLE course DROP FOREIGN KEY FK_169E6FB985C0B3BE');
        $this->addSql('DROP INDEX IDX_169E6FB919EB6921 ON course');
        $this->addSql('DROP INDEX IDX_169E6FB985C0B3BE ON course');
        $this->addSql('ALTER TABLE course DROP client_id, DROP chauffeur_id');
    }
}
