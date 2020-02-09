#player.py

class player: #this class represents the player object which contains info on each individual player

    def __init__(self, player_name):
        self.team = ''
        self.ranking = 0
        self.goals = 0
        self.yellows = 0
        self.reds = 0

    def set_team(self, team_name):
        self.team = team_name

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
        self.pr = [] #pr: player reankings. Ranking will be based on index, first to last
        self.players = {} #actual player objects connected to the players name

    def add_player(self, player_name):
        self.players[player_name] = player(player_name)
        self.pr.append(self.players[player_name])


def bubble_sort(lst): #bubble sort
    for p1 in range(len(lst)):
        for p2 in range(len(lst)):
            if lst[p2] > lst[p1]:
                lst[p1], lst[p2] = lst[p2], lst[p1]
