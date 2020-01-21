#team.py

class team:

    def __init__(self, name):
        self.name = name
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

    def exists(self, name):
        if self.name == name:
            return True
        return False

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
