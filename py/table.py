#table.py
import team
import game

class standings:

    def __init__(self, teams):
        self.order = []
        self.teams = teams

    def result(self, game):
        if game.home_score > game.away_score:
            self.teams[game.home].add_win()
            self.teams[game.away].add_loss()
        elif game.home_score < game.away_score:
            self.teams[game.home].add_loss()
            self.teams[game.away].add_win()
        elif game.home_score == game.away_score:
            self.teams[game.home].add_tie()
            self.teams[game.away].add_tie()


    def update_teams(self, game):
        if game.home_score != '':
            self.teams[game.away].add_gf(int(game.away_score))
            self.teams[game.home].add_gf(int(game.home_score))
            self.teams[game.home].add_ga(int(game.away_score))
            self.teams[game.away].add_ga(int(game.home_score))
            self.result(game)

    def sort_teams(self):
        for team in self.teams.keys():
            self.order.append(self.teams[team])
        games = self.order
        for i in range(len(games)):
            for j in range(len(games)):
                if games[i] > games[j]:
                    games[i], games[j] = games[j], games[i]
                    games[j].position = j + 1
                    games[i].position = i + 1

    def __repr__(self):
        
        table = "<table id='standings'> \n\
    <th class='table_head' colspan='11'> Standings </th> \n\
    <tr id='standings'> \n\
    <th class='position'></th> \n\
    <th class='Team'> </th> \n\
    <th class='gp'>GP</th> \n\
    <th>PTS</th> \n\
    <th >W</th> \n\
    <th>L</th> \n\
    <th>T</th> \n\
    <th class='gf'>GF</th> \n\
    <th class='ga'>GA</th> \n\
    <th class='gd'>GD</th> \n\
    </tr>\n"
        
        for i in self.order:
            table = table + str(i) + '\n'
        return table
