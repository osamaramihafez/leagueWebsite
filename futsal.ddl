create table if not exists teams(
  team_name VARCHAR(20);
  team_captain VARCHAR(20);
  number_of_players int;
  position int;
  games_played int;
  goals_for int;
  goals_against int;
  goal_differential int;
  wins int;
  ties int;
  losses int;
  win_percentage NUMERIC(10, 2);
  constraint standings_pk primary key (team_name);
);

create table if not exists schedule(

);

-- Add triggers to update the tables
