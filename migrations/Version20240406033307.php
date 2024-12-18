<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240406033307 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE draw_euromillions (id INT AUTO_INCREMENT NOT NULL, draw_day VARCHAR(8) NOT NULL, draw_date DATE NOT NULL, ball1 INT NOT NULL, ball2 INT NOT NULL, ball3 INT NOT NULL, ball4 INT NOT NULL, ball5 INT NOT NULL, star1 INT NOT NULL, star2 INT NOT NULL, winning_balls_in_ascending_order VARCHAR(16) NOT NULL, winning_stars_in_ascending_order VARCHAR(5) NOT NULL, number_of_winners_at_rank1_in_france SMALLINT NOT NULL, number_of_winners_at_rank1_in_europe SMALLINT NOT NULL, rank_report1 INT NOT NULL, number_of_winners_at_rank2_in_france INT NOT NULL, number_of_winners_at_rank2_in_europe INT NOT NULL, rank_report2 INT NOT NULL, number_of_winners_at_rank3_in_france INT NOT NULL, number_of_winners_at_rank3_in_europe INT NOT NULL, rank_report3 INT NOT NULL, number_of_winners_at_rank4_in_france INT NOT NULL, number_of_winners_at_rank4_in_europe INT NOT NULL, rank_report4 INT NOT NULL, number_of_winners_at_rank5_in_france INT NOT NULL, number_of_winners_at_rank5_in_europe INT NOT NULL, rank_report5 INT NOT NULL, number_of_winners_at_rank6_in_france INT NOT NULL, number_of_winners_at_rank6_in_europe INT NOT NULL, rank_report6 INT NOT NULL, number_of_winners_at_rank7_in_france INT NOT NULL, number_of_winners_at_rank7_in_europe INT NOT NULL, rank_report7 INT NOT NULL, number_of_winners_at_rank8_in_france INT NOT NULL, number_of_winners_at_rank8_in_europe INT NOT NULL, rank_report8 INT NOT NULL, number_of_winners_at_rank9_in_france INT NOT NULL, number_of_winners_at_rank9_in_europe INT NOT NULL, rank_report9 INT NOT NULL, number_of_winners_at_rank10_in_france INT NOT NULL, number_of_winners_at_rank10_in_europe INT NOT NULL, rank_report10 INT NOT NULL, number_of_winners_at_rank11_in_france INT NOT NULL, number_of_winners_at_rank11_in_europe INT NOT NULL, rank_report11 INT NOT NULL, number_of_winners_at_rank12_in_france INT NOT NULL, number_of_winners_at_rank12_in_europe INT NOT NULL, rank_report12 INT NOT NULL, number_of_winners_at_rank13_in_france INT NOT NULL, number_of_winners_at_rank13_in_europe INT NOT NULL, rank_report13 INT NOT NULL, number_of_winners_at_rank1_star_plus INT NOT NULL, rank_report1_star_plus INT NOT NULL, number_of_winners_at_rank2_star_plus INT NOT NULL, rank_report2_star_plus INT NOT NULL, number_of_winners_at_rank3_star_plus INT NOT NULL, rank_report3_star_plus INT NOT NULL, number_of_winners_at_rank4_star_plus INT NOT NULL, rank_report4_star_plus INT NOT NULL, number_of_winners_at_rank5_star_plus INT NOT NULL, rank_report5_star_plus INT NOT NULL, number_of_winners_at_rank6_star_plus INT NOT NULL, rank_report6_star_plus INT NOT NULL, number_of_winners_at_rank7_star_plus INT NOT NULL, rank_report7_star_plus INT NOT NULL, number_of_winners_at_rank8_star_plus INT NOT NULL, rank_report8_star_plus INT NOT NULL, number_of_winners_at_rank9_star_plus INT NOT NULL, rank_report9_star_plus INT NOT NULL, number_of_winners_at_rank10_star_plus INT NOT NULL, rank_report10_star_plus INT NOT NULL, slug VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE draw_euromillions');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
