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
  game_type varchar(15), -- do we need this?
  constraint gt_pk primary key (game_time),
  constraint ht_fk foreign key (home_team) references team(team_name),
  constraint at_fk foreign key (away_team) references team(team_name)
);

-- Add triggers to update the tables.

-- delimiter $$
--
-- CREATE TRIGGER autoEnroll AFTER UPDATE ON schedule
--     FOR EACH ROW
--         BEGIN
--         	DECLARE allCourses int;
--
--    			-- Find each course where the student isn't enrolled.
--    			SELECT cid FROM Course INTO allCourses;
--
--             INSERT INTO Enrolled(sid, cid, gpa) VALUES(NEW.sid, allCourses, 0.0);
--         END;
--
-- $$
-- delimiter ;

-- I want to create a few triggers:
--  1.
