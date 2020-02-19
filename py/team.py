#team.py

from player import player

REV_WEEKS = {1:'11-Jan', 2:'18-Jan', 3:'25-Jan', 4:'1-Feb', 5:'8-Feb', 6:'15-Feb', 7:'22-Feb', 8:'29-Feb'}
ROSTER_PLAYER_1 = "<tr class='player'> <td><img id='player' src='"
#ROSTER_PLAYER_2 = "</td> \r\n <td class='goals' >0</td> <td class='reds'>0</td> </tr> \r\n"

#ROSTER_PAGE_TOP = ""


class team:

    def __init__(self, name):
        self.name = name.strip()
        self.position = 0
        self.gp = 0
        self.w = 0
        self.t = 0
        self.l = 0
        self.pts = 3*self.w + self.t
        self.gf = 0
        self.ga = 0
        self.gd = self.gf + self.ga
        self.wp = 0.00
        self.reg_sched = [[None, None], [None, None], [None, None], [None, None], [None, None], [None, None], [None, None], [None, None]]
        self.players = {}

    def add_game(self, game):
        week = game.week - 1
        if game.time % 2 == 0:
            self.reg_sched[week][1] = game
        else:
            self.reg_sched[week][0] = game

    def add_win(self):
        self.w += 1
        self.gp += 1
        self.pts += 3
        self.wp = round(self.w/self.gp, 2)

    def add_tie(self):
        self.t += 1
        self.gp += 1
        self.pts += 1
        self.wp = round(self.w/self.gp, 2)

    def add_loss(self):
        self.l += 1
        self.gp += 1
        self.wp = round(self.w/self.gp, 2)

    def add_gf(self, g):
        self.gf += g
        self.gd += g

    def add_ga(self, g):
        self.ga += g
        self.gd -= g
    
    def set_goals(self, first_name, last_name, goals):
        for name in self.players.keys():
            if first_name + " " + last_name in name:
                self.players[name].set_goals(goals)
                return
            elif last_name in name and name[0] == first_name[0]:
                self.players[name].set_goals(goals)
                return
            #elif last_name in name:
                #self.players[name].set_goals(goals)
                #return
            #elif first_name in name:
                #self.players[name].set_goals(goals)
                #return
            
    def set_pic(self, first_name, last_name, pic):
        for name in self.players.keys():
            if first_name + " " + last_name in name:
                self.players[name].set_pic(pic)
                return
            elif last_name in name and name[0] == first_name[0]:
                self.players[name].set_pic(pic)            
                return
            elif last_name in name:
                self.players[name].set_pic(pic)
                return
            elif first_name in name:
                self.players[name].set_pic(pic)
                return

    def exists(self, name):
        if self.name == name:
            return True
        return False

    def add_player(self, first_name, last_name):
        p = player(first_name, last_name, self.name)
        self.players[first_name + " " + last_name] = p
        return p

    def __gt__(self, other):
        if self.pts > other.pts:
            return True
        if self.pts < other.pts:
            return False
        if self.gd > other.gd:
            return True
        if self.gd < other.gd:
            return False
        if self.wp > other.wp:
            return True
        if self.wp < other.wp:
            return False
        if self.gf > other.gf:
            return True
        if self.gf < other.gf:
            return False
        return self.name > other.name

    def print_sched(self, f):
        for week in range(len(self.reg_sched)):
            f.write("<th class='week_head' colspan='7'> \
            Week " +  str(week + 1) + " Regular Season</th> \
            <th class='week_head'> \
            " + str(REV_WEEKS[week + 1]) + "</th> \r\n")
            f.write(str(self.reg_sched[week][0]))
            f.write(str(self.reg_sched[week][1]))

    def __repr__(self):
        start = "<tr>"
        p = "<td class=\'position\'>" + str(self.position) + ". </td> \r\n"
        n = "<td class=\'teams team\'>" + self.name + "</td> \r\n"
        gp = "<td class=\'gp\'>" + str(self.gp) + "</td> \r\n"
        pts = "<td class=\'pts\'>" + str(self.pts) + "</td> \r\n"
        w = "<td class=\'w\'>" + str(self.w) + "</td> \r\n"
        l = "<td class=\'l\'>" + str(self.l) + "</td> \r\n"
        t = "<td class=\'t\'>" + str(self.t) + "</td> \r\n"
        gf = "<td class=\'gf\'>" + str(self.gf) + "</td> \r\n"
        ga = "<td class=\'ga\'>" + str(self.ga) + "</td> \r\n"
        gd = "<td class=\'gd\'>" + str(self.gd) + "</td> \r\n"
        # wp = "<td class=\'wp\'>" + str(self.wp) + "</td> \r\n"
        end = "</tr>"
        row = start + p + n + gp + pts + w + l + t + gf + ga + gd + end
        return row

    def roster_repr(self):
        players = bubble_sort(self.players, self.players.values())
        row = ''
        for player in players:
            # print(player)
            if "player." in self.players[player].pic:
                row = row + ROSTER_PLAYER_1 + self.players[player].pic + "'><br/>" \
                + self.players[player].get_name()
            else:
                row = row + ROSTER_PLAYER_1 + self.players[player].pic +"' class='rotate90'><br/>" \
                + self.players[player].get_name()                
            row = row + "</td> \r\n <td class='goals' >" + str(self.players[player].get_goals()) \
            +"</td> <td class='reds'>0</td> </tr> \r\n"
        return row

def bubble_sort(d, values): #bubble sort
    for p1 in range(len(values)):
        for p2 in range(len(values)):
            if values[p2] > values[p1]:
                values[p1], values[p2] = values[p2], values[p1]
    keys_sorted = []
    #print((p.name, p.get_goals()) for p in values)
    for key in d.keys():
        for value in values:
            if d[key] == value:
                keys_sorted.append(key)
                break
    #print(keys_sorted)
    return keys_sorted