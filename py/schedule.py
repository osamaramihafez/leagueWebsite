#schedule.py
import game

class schedule:

    def __init__(self):
        # self.sched = {'week1':[], 'week2':[], 'week3':[], 'week4':[], 'week5':[], 'week6':[], 'week7':[], 'week8':[]}
        self.sched = [[None, None, None, None, None, None, None, None, None, None, \
                       None, None, None, None, None, None],
                      [None, None, None, None, None, None, None, None, None, None, \
                                             None, None, None, None, None, None],
                      [None, None, None, None, None, None, None, None, None, None, \
                                             None, None, None, None, None, None],
                      [None, None, None, None, None, None, None, None, None, None, \
                                             None, None, None, None, None, None],
                      [None, None, None, None, None, None, None, None, None, None, \
                                             None, None, None, None, None, None],
                      [None, None, None, None, None, None, None, None, None, None, \
                                             None, None, None, None, None, None],
                      [None, None, None, None, None, None, None, None, None, None, \
                                             None, None, None, None, None, None],
                      [None, None, None, None, None, None, None, None, None, None, \
                                             None, None, None, None, None, None]]
        self.currgame = self.sched[0][0]
        self.week = 0
        self.game = 0
        self.week_i = 0
        self.game_i = 1

    def next_game(self):
        if self.game_i == 16 and self.week_i != 8:
            self.currgame = self.sched[self.week_i][self.game_i-1]
            self.game_i = 1
            self.week_i += 1
        elif self.week_i == 8:
            return False
            # self.game = 1
        else:
            self.currgame = self.sched[self.week_i][self.game_i-1]
            self.game_i += 1
        return True

    def pweek(self):
        print(self.sched)

    def current_game(self):
        return self.currgame

    def add(self, game):
        if self.game == 16:
            self.game = 0
            self.week += 1
            # self.game = 1
        # week = game.week
        #print(week)
        self.sched[self.week][self.game] = game
        self.game += 1

    def sort_week(self, week):
        games = self.sched[week-1]
        for i in range(len(games)):
            for j in range(len(games)):
                if i.time < j.time:
                    week[i], week[j] = week[j], week[i]

    def reset_i(self):
        self.currgame = self.sched[0][0]
        self.week = 0
        self.game = 0
