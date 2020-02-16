#game.py

WEEKS = {1:'11-Jan', 2:'18-Jan', 3:'25-Jan', 4:'1-Feb', 5:'8-Feb', 6:'15-Feb', 7:'22-Feb', 8:'29-Feb'}
# TIMES = {'10:45 PM':1, '11:35 PM':2, '12:20 AM':3, '1:05 AM':4}
TIMES = {1:'10:45 PM', 2:'11:35 PM', 3:'12:20 AM', 4:'1:05 AM'}

class game:

    def __init__(self, hn, an, hs, aws, t, f, wk):
        self.home = hn #home team name
        self.away = an #away team name
        self.home_score = hs
        self.away_score = aws
        self.time = t #time will be 1, 2, 3, 4 please look at TIMES
        self.field = f
        self.week = wk #week1, 2, 3... please look at WEEKS

    def __repr__(self):
        row = '<tr class=week' + str(self.week) + '>\n'
        ht = '\t<td class=\'team\'>' + str(self.home) + '</td> '
        hs = '<td class=\'home_score\'>' + str(self.home_score) + '</td> '
        sep = '<td>-</td>'
        aws = '<td class=\'away_score\'>' + str(self.away_score) + '</td> '
        at = '<td class=\'team\'>'+ str(self.away) + '</td> '
        if self.time < 3:
            t = '<td>' + str(TIMES[self.time]) + '</td> <td>(Saturday)</td> '
        else:
            t = '<td>' + str(TIMES[self.time]) + '</td> <td>(Sunday)</td> '

        f = '<td>Field ' + str(self.field) + '</td></tr>\n'
        return row + ht + hs + sep + aws + at + t + f

