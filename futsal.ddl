create table if not exists team (
  team_name VARCHAR(20),
  team_captain VARCHAR(50),
  number_of_players int,
  position int,
  games_played int,
  goals_for int,
  goals_against int,
  goal_differential int,
  wins int,
  ties int,
  losses int,
  win_percentage NUMERIC(5, 2),
  constraint standings_pk primary key (team_name)
);

create table if not exists schedule (
  game_time Datetime,
  home_team varchar(20),
  away_team varchar(20),
  home_score int,
  away_score int,
  game_type varchar(15),
  constraint gt_pk primary key (game_time),
  constraint ht_fk foreign key (home_team) references team(team_name),
  constraint at_fk foreign key (away_team) references team(team_name)
);

Create table if not exists standings(
  team_one VARCHAR(20),
  team_two VARCHAR(20),
  team_three VARCHAR(20),
  team_four VARCHAR(20),
  team_five VARCHAR(20),
  team_six VARCHAR(20),
  team_seven VARCHAR(20),
  team_eight VARCHAR(20),
  constraint team1_fk foreign key (team_one) references team(team_name),
  constraint team2_fk foreign key (team_two) references team(team_name),
  constraint team3_fk foreign key (team_three) references team(team_name),
  constraint team4_fk foreign key (team_four) references team(team_name),
  constraint team5_fk foreign key (team_five) references team(team_name),
  constraint team6_fk foreign key (team_six) references team(team_name),
  constraint team7_fk foreign key (team_seven) references team(team_name),
  constraint team8_fk foreign key (team_eight) references team(team_name)
);

insert into team (team_name, team_captain, number_of_players, position, games_played, goals_for, goals_against, goal_differential, wins, ties, losses, win_percentage)
  values('JOGA BONITO', 'Osama Hafez', 11, 1, 0, 0, 0, 0, 0, 0, 0, 0);


--Triggers

--    Adjust the table based on points:
--    i) Must update points when a team has completed a game
--    ii) A game is complete when the score for that game is added, so add 1 to games played for home team and away team
--    iii) take the score and see who won
--    iv) Add 3 points to the winning team's points tally, if it's a tie add 1 point to home team and one point to away team.
--    v) add home_score to the home team's goals for and away team's goals against
--    vi) add away_score to the away team's goals for and home team's goals against
--    vii) Set goal differential equal to goals for minus goals against
--    vii) set win win_percentage equal to wins/games_played

insert into schedule values ('JOGA BONITO')

delimiter $$

CREATE TRIGGER update_teams AFTER UPDATE ON schedule
        BEGIN
        	DECLARE allCourses int;

   			-- Find each course where the student isn't enrolled.
   			SELECT goals_for, goals_against, wins, losses, ties, win_percentage;

            INSERT INTO Enrolled(sid, cid, gpa) VALUES(NEW.sid, allCourses, 0.0);
        END;

$$
delimiter ;
