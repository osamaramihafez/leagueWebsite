#excel_to_php_script
from game import game
from schedule import schedule
from team import team
from table import standings

REV_WEEKS = {1:'11-Jan', 2:'18-Jan', 3:'25-Jan', 4:'1-Feb', 5:'8-Feb', 6:'15-Feb', 7:'22-Feb', 8:'29-Feb'}
WEEKS = {'11-Jan':1, '18-Jan':2, '25-Jan':3, '1-Feb':4, '8-Feb':5, '15-Feb':6, '22-Feb':7, '29-Feb':8}
TIMES = {'10:45 PM':1, '11:35 PM':2, '12:20 AM':3, '1:05 AM':4}
HTML_START = "<!DOCTYPE html> \
<html> \
    <head> \
        <meta charset='utf-8'> \
        <meta http-equiv='X-UA-Compatible' content='IE=edge'> \
        <title>MAA - Schedule and Standings</title> \
        <link rel='stylesheet' href='mainLeague.css'> \
    </head> \
    <body> \
        <div id='header'> \
            <center> \
            <img src='images/MAAlogo.png' id='Logo'> \
            </center> \
            <ul class = 'a'> \
              <li class = 'b'><a href='index.html'>Home</a></li> \
              <li class = 'b sched'><a class='active' href='sched.php'>Schedules and Standings</a></li> \
            <li class='b'><a id='more'>More to come soon!</a></li> \
            </ul> \
        </div> \
<div id='schedandstand'> \
<center>"

HTML_END = "    </tr> \
    </table> \
    </center>\
        </div> \
    </body> \
</html>"

HTML_SCHED = "<table id='schedule'> \
<tbody> \
 <th class='table_head' colspan='8'>Schedule</th> \
 <tr><th colspan='5'>Match</th><th colspan='2'>Time</th><th>Field</th></tr>"

R_FILE = 'week4ugly.csv'

def create_teams(home, away):
    x, y = team(home), team(away)
    return x, y


def read_excel(file):
    f = open(file)
    rows = f.readlines()
    excel_schedule = rows[22:]

    s = schedule()
    st = standings()

    #populate schedule based on comma sperated values
    for row in excel_schedule:
        game_info = row.split(',')
        #excel sheet format:
        #Date, Time, Field, Home, Away, hs, -, as
        week = WEEKS[game_info[0]]
        time = TIMES[game_info[1]]
        #print(game_info)
        team_1, team_2 = create_teams(game_info[3], game_info[4])
        st.add_team(team_1)
        st.add_team(team_2)
        try:
            new_game = game(game_info[3],game_info[4], int(game_info[5]), int(game_info[7]), time, game_info[2], week)
        except ValueError:
            new_game = game(game_info[3],game_info[4], game_info[5], game_info[7], time, game_info[2], week)
        # print(new_game)
        st.update_teams(new_game)
        s.add(new_game)
    f.close()
    return (s, st)

W_FILE = 'new.html'

# def print_table():
#     f = read_excel(R_FILE)
#     s = f[0]
#     st = f[1]
#     x = True
#     print(st)
#     while x == True:
#         if s.currgame != None:
#             print(s.currgame)
#         if s.next_game() == False:
#             x = False
#     s.reset_i()

def write_sched():
    """
    INDEX TO THE RIGHT PART OF THE FILE (I should have a symbol for the python stuff)
    WRITE TO THE FILE AT THE CORRECT LOCATION
    WRITE HTML CODE
    """
    f = read_excel(R_FILE)
    s = f[0]
    st = f[1]
    x = True
    f = open(W_FILE, 'w+') #is this the correct way to open the file?
    f.write(HTML_START)
    f.write(str(st))
    f.write(HTML_SCHED)
    while x == True:
        if s.game_i == 2 and s.week_i < 8:
            f.write("<th class='week_head' colspan='7'> \
            Week " +  str(s.week_i + 1) + " Regular Season</th> \
            <th class='week_head'> \
            " + str(REV_WEEKS[s.week_i + 1]) + "</th> \n")
        if s.currgame != None:
            f.write(str(s.currgame))
        if s.next_game() == False:
            x = False
    f.write(HTML_END)
    f.close()
    s.reset_i()

# print_table()
write_sched()
