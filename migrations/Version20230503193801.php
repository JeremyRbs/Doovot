<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230503193801 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project ADD subject_id INT NOT NULL, ADD project_created_by_user_id INT NOT NULL');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE23EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EECB4AD3F4 FOREIGN KEY (project_created_by_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_2FB3D0EE23EDC87 ON project (subject_id)');
        $this->addSql('CREATE INDEX IDX_2FB3D0EECB4AD3F4 ON project (project_created_by_user_id)');
        $this->addSql('ALTER TABLE subject ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT FK_FBCE3E7AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_FBCE3E7AA76ED395 ON subject (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EE23EDC87');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EECB4AD3F4');
        $this->addSql('DROP INDEX IDX_2FB3D0EE23EDC87 ON project');
        $this->addSql('DROP INDEX IDX_2FB3D0EECB4AD3F4 ON project');
        $this->addSql('ALTER TABLE project DROP subject_id, DROP project_created_by_user_id');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY FK_FBCE3E7AA76ED395');
        $this->addSql('DROP INDEX IDX_FBCE3E7AA76ED395 ON subject');
        $this->addSql('ALTER TABLE subject DROP user_id');
    }
}
