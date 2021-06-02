<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210602170958 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE course_detail (id INT AUTO_INCREMENT NOT NULL, quantite INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE course_detail_service (course_detail_id INT NOT NULL, service_id INT NOT NULL, INDEX IDX_799EFD335A714317 (course_detail_id), INDEX IDX_799EFD33ED5CA9E6 (service_id), PRIMARY KEY(course_detail_id, service_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE course_detail_service ADD CONSTRAINT FK_799EFD335A714317 FOREIGN KEY (course_detail_id) REFERENCES course_detail (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE course_detail_service ADD CONSTRAINT FK_799EFD33ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE course ADD course_detail_id INT NOT NULL');
        $this->addSql('ALTER TABLE course ADD CONSTRAINT FK_169E6FB95A714317 FOREIGN KEY (course_detail_id) REFERENCES course_detail (id)');
        $this->addSql('CREATE INDEX IDX_169E6FB95A714317 ON course (course_detail_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE course DROP FOREIGN KEY FK_169E6FB95A714317');
        $this->addSql('ALTER TABLE course_detail_service DROP FOREIGN KEY FK_799EFD335A714317');
        $this->addSql('DROP TABLE course_detail');
        $this->addSql('DROP TABLE course_detail_service');
        $this->addSql('DROP INDEX IDX_169E6FB95A714317 ON course');
        $this->addSql('ALTER TABLE course DROP course_detail_id');
    }
}
