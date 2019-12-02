create table if not exists team (
  name VARCHAR(20),
  position int,
  games_played int,
  goals_for int,
  goals_against int,
  goal_differential int,
  wins int,
  ties int,
  losses int,
  constraint standings_pk primary key (name)
);

CREATE TABLE IF NOT EXISTS game (
  game_time datetime,
  home_team varchar(20),
  away_team varchar(20),
  home_score int,
  away_score int,
  game_type varchar(20),
  constraint gt_pk primary key (game_time),
  constraint ht_fk foreign key (home_team) references team(name),
  constraint at_fk foreign key (away_team) references team(name)
);


insert into team (name, position, games_played, goals_for, goals_against, goal_differential, wins, ties, losses)
  values('Joga Bonito', 1, 0, 0, 0, 0, 0, 0, 0);
insert into team (name, position, games_played, goals_for, goals_against, goal_differential, wins, ties, losses)
  values('Manchester Disunited', 8, 0, 0, 0, 0, 0, 0, 0);
insert into team (name, position, games_played, goals_for, goals_against, goal_differential, wins, ties, losses)
  values('Inter Galactico', 2, 0, 0, 0, 0, 0, 0, 0);
insert into team (name, position, games_played, goals_for, goals_against, goal_differential, wins, ties, losses)
  values('Milan', 4, 0, 0, 0, 0, 0, 0, 0);
insert into team (name, position, games_played, goals_for, goals_against, goal_differential, wins, ties, losses)
  values('Atleti', 3, 0, 0, 0, 0, 0, 0, 0);
insert into team (name, position, games_played, goals_for, goals_against, goal_differential, wins, ties, losses)
  values('Benchwarmers', 5, 0, 0, 0, 0, 0, 0, 0);
insert into team (name, position, games_played, goals_for, goals_against, goal_differential, wins, ties, losses)
  values('Saracens', 6, 0, 0, 0, 0, 0, 0, 0);
insert into team (name, position, games_played, goals_for, goals_against, goal_differential, wins, ties, losses)
  values('HeardThereWasPizza', 7, 0, 0, 0, 0, 0, 0, 0);

select * from team order by position;




--Triggers

--    Adjust the table based on points:
--    1) When a match has been completed, then the score has been updates.
--        Note: there are 8*4 + 1 = 33 matches in total
--    2) Based on the score from the most recently updated match
--      i) update the


delimiter $$
CREATE TRIGGER update_teams AFTER UPDATE ON match
        BEGIN
        if new.home_score > new.away_score
          update team t set  goals_for = goals_for + NEW.home_score, goals_against = goals_against + NEW.away_score,
            goal_differential = goals_for - goals_against, wins = wins + 1, games_played = games_played + 1
            where t.name = match.home_team;
          update team t set  goals_for = goals_for + NEW.home_score, goals_against = goals_against + NEW.away_score,
            goal_differential = goals_for - goals_against, losses = losses + 1, games_played = games_played + 1
            where t.name = match.away_team;
        else if new.home_score < new.away_score
          update team t set  goals_for = goals_for + NEW.home_score, goals_against = goals_against + NEW.away_score,
            goal_differential = goals_for - goals_against, losses = losses + 1, games_played = games_played + 1
            where t.name = match.home_team;
          update team t set  goals_for = goals_for + NEW.home_score, goals_against = goals_against + NEW.away_score,
            goal_differential = goals_for - goals_against, wins = wins + 1, games_played = games_played + 1
            where t.name = match.away_team;
        else
          update team t set  goals_for = goals_for + NEW.home_score, goals_against = goals_against + NEW.away_score,
            goal_differential = goals_for - goals_against, ties = ties + 1, games_played = games_played + 1
            where t.name = match.home_team;
          update team t set  goals_for = goals_for + NEW.home_score, goals_against = goals_against + NEW.away_score,
            goal_differential = goals_for - goals_against, ties = ties + 1, games_played = games_played + 1
            where t.name = match.away_team;
        END$$
delimiter ;


INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-04 18:00','Joga Bonito','0','0','Benchwarmers','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-04 19:00' ,'Inter Galactico','0','0','Saracens','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-04 20:00','Atleti','0','0','HeardThereWasPizza','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-04 21:00','Milan','0','0','Manchester Disunited','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-11 18:00','Joga Bonito','0','0','Saracens','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-11 19:00' ,'Inter Galactico','0','0','HeardThereWasPizza','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-11 20:00','Atleti','0','0','Manchester Disunited','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-11 21:00','Milan','0','0','Benchwarmers','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-18 18:00','Joga Bonito','0','0','HeardThereWasPizza','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-18 19:00' ,'Inter Galactico','0','0','Manchester Disunited','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-18 20:00','Atleti','0','0','Benchwarmers','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-18 21:00','Milan','0','0','Saracens','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-25 18:00','Joga Bonito','0','0','Manchester Disunited','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-25 19:00' ,'Inter Galactico','0','0','Benchwarmers','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-25 20:00','Atleti','0','0','Saracens','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-01-25 21:00','Milan','0','0','HeardThereWasPizza','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-01 18:00','Joga Bonito','0','0','Inter Galactico','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-01 19:00' ,'Atleti','0','0','Milan','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-01 20:00','Benchwarmers','0','0','Saracens','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-01 21:00','HeardThereWasPizza','0','0','Manchester Disunited','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-08 18:00','Joga Bonito','0','0','Atleti','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-08 19:00' ,'Inter Galactico','0','0','Milan','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-08 20:00','Benchwarmers','0','0','HeardThereWasPizza','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-08 21:00','Saracens','0','0','Manchester Disunited','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-15 18:00','Joga Bonito','0','0','Milan','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-15 19:00' ,'Inter Galactico','0','0','Atleti','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-15 20:00','Benchwarmers','0','0','Manchester Disunited','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-15 21:00','Saracens','0','0','HeardThereWasPizza','Regular');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-22 18:00', Null,'0','0', Null, 'Postseason-QF 1');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-22 19:00' , Null,'0','0', Null, 'Postseason-QF 2');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-22 20:00', Null,'0','0', Null, 'Postseason-SF 1');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-22 21:00', Null,'0','0', Null, 'Postseason-SF 2');
INSERT INTO game (game_time, home_team, home_score, away_score, away_team, game_type) VALUES ('2020-02-22 22:00', Null,'0','0', Null, 'Postseason-Final');
