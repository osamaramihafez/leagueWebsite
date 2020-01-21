#table.py
import team
import game

class standings:

    def __init__(self):
        self.order = []
        self.teams = {}
        self.team_names = {}
        self.num_teams = 0

    def add_team(self, team):
        if team.name not in self.team_names:
            self.team_names[team.name] = team.name
            self.teams[team.name] = team
            self.order.append(team)
            self.num_teams += 1
            team.position = self.num_teams

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
        games = self.order
        for i in range(len(games)):
            for j in range(len(games)):
                if games[i] > games[j]:
                    games[i], games[j] = games[j], games[i]
                    games[j].position = j + 1
                    games[i].position = i + 1

    def __repr__(self):
        self.sort_teams()
        table = "<table id='standings'> \n\
     <th class='table_head' colspan='11'> \
     Standings \
     </th> \n\
     <tr id='standings'> \
         <th class='position'></th> \
         <th class='Team'> </th> \
         <th class='gp'>GP</th> \
         <th>PTS</th> \
         <th >W</th> \
         <th>L</th> \
         <th>T</th> \
         <th class='gf'>GF</th> \
         <th class='ga'>GA</th> \
         <th class='gd'>GD</th> \
     </tr>\n"

     # <th class='wp'>Win %</th>
        for i in self.order:
            table = table + str(i) + '\n'
        return table
