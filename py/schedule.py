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
        else:
            self.currgame = self.sched[self.week_i][self.game_i-1]
            self.game_i += 1
        return True

    def add_game(self, game):
        if self.game == 16:
            self.game = 0
            self.week += 1
        self.sched[self.week][self.game] = game
        self.game += 1

    def reset_i(self):
        self.currgame = self.sched[0][0]
        self.week = 0
        self.game = 0
