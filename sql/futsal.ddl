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
  values('Blueberries F.C.', 1, 0, 0, 0, 0, 0, 0, 0);
insert into team (name, position, games_played, goals_for, goals_against, goal_differential, wins, ties, losses)
  values('Benchwarmers', 5, 0, 0, 0, 0, 0, 0, 0);
insert into team (name, position, games_played, goals_for, goals_against, goal_differential, wins, ties, losses)
  values('Saracens', 6, 0, 0, 0, 0, 0, 0, 0);
insert into team (name, position, games_played, goals_for, goals_against, goal_differential, wins, ties, losses)
  values('Heard there was pizza', 7, 0, 0, 0, 0, 0, 0, 0);

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
