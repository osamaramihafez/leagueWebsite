#player.py

class player: #this class represents the player object which contains info on each individual player

    def __init__(self, fn, ln, team):
        self.team = team
        self.first_name = fn
        self.last_name = ln
        self.name = fn + " " + ln
        self.ranking = 0
        self.goals = 0
        self.yellows = 0
        self.reds = 0
        self.pic = "images/player.jpg"

    def get_name(self):
        return self.first_name + " " + self.last_name

    def set_team(self, team_name):
        self.team = team_name

    def set_goals(self, goals):
        self.goals = goals

    def get_goals(self):
        return self.goals

    def set_reds(self, reds):
        self.reds = reds

    def set_pic(self, pic):
        self.pic = "images/playerpics/" + pic

    def get_reds(self):
        return self.reds

    def set_yellows(self, yellows):
        self.yellows = yellows

    def get_yellows(self):
        return self.yellows   

    def __gt__(self, other):
        if self.goals == other.goals:
            if self.reds < other.reds:
                return True
            if self.yellows < other.yellows:
                return True
        if self.goals > other.goals:
            return True
        return False

    def __eq__(self, other):
        if self.goals == other.goals:
            return True
        return False



class players: #notice the s at the end, this class stores all of the players in the league

    def __init__(self):
        self.players = {} #actual player objects connected to the players name
        self.top_goalscorers = []

    def add(self, player):
        if player != None:
            self.players[player.name] = player

    def get_top(self):
        bubble_sort(self.players)
        return self.players[:10]
    
    def find_player(self, first_name, last_name):
        for name in self.players.keys():
            if first_name.lower() + " " + last_name.lower() in name.lower():
                return self.players[name]
        #print(first_name + " " + last_name)
            #elif last_name in name and name[0] == first_name[0]:
                #return self.players[name]
            #elif last_name in name:
                #return self.players[name]
            #elif first_name in name:
                #return self.players[name]
        return False
            
    def keys(self):
        return self.players.keys()
        
def bubble_sort(lst): #bubble sort
    for p1 in range(len(lst)):
        for p2 in range(len(lst)):
            if lst[p2] > lst[p1]:
                lst[p1], lst[p2] = lst[p2], lst[p1]
