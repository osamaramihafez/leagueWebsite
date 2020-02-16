#division.py

from table import standings
from game import game
from team import team
from player import player
from schedule import schedule

class division:
    
    
    def __init__(self):
        self.teams = {}
        self.st = standings(self.teams)
        self.sched = schedule()
        
    def create_teams(self, home, away):
        if home not in self.teams.keys():
            x = team(home)
            self.teams[home] = x
        else:
            x = self.teams[home]
        if away not in self.teams.keys():
            y = team(away)
            self.teams[away] = y
        else:
            y = self.teams[away]        
        return x, y
        
    def update(self, game):
        #standings.add_game(game);
        self.st.update_teams(game)
        self.sched.add_game(game)