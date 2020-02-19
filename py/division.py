#division.py

from table import standings
from game import game
from team import team
from player import player, players
from schedule import schedule

class division:
    
    def __init__(self):
        self.teams = {}
        self.st = standings(self.teams)
        self.sched = schedule()
        self.players = players()
        
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
        
    def add_to_team(self, player):
        first_name = player[0]
        last_name = player[1]
        team = player[2].strip('\r\n').strip()
        #print(team)
        try:
            self.players.add(self.teams[team].add_player(first_name, last_name))
        except KeyError:
            #print(first_name, last_name, team + "kjansdkjansdkj")
            #print(self.teams.keys())
            return False

    def update(self, game):
        #standings.add_game(game);
        self.st.update_teams(game)
        self.sched.add_game(game)
        
    def update_goals(self, player):
        #print(player)
        team = player[1].strip('\r\n').strip()
        goals = int(player[2])
        name = player[0].split()
        first_name = name[0]
        if len(name) < 2: 
            self.teams[team].set_goals(first_name, "Not found", goals)
            self.teams[team].set_goals("Not found", first_name, goals)
        else:
            last_name = name[1]
            self.teams[team].set_goals(first_name, last_name, goals)
            
    def update_pics(self, pic):
        #set_pic(pic)
        name = pic.split()
        first_name = name[0]
        if len(name) < 2:
            self.players.find_player(first_name).set_pic(pic)
            if p:
                p.set_pic(pic)
                #print(pic)
        elif len(name) == 2:
            last_name = name[1].strip().strip('.jpeg')
            p = self.players.find_player(first_name, last_name)
            if p:
                p.set_pic(pic)
        else:
            last_name = name[1] + " " + name[2].strip().strip('.jpeg')
            #print(last_name)
            p = self.players.find_player(first_name, last_name)
            if p:
                p.set_pic(pic)