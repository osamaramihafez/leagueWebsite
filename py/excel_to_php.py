#excel_to_php_script
from game import game
from schedule import schedule
from team import team
from table import standings

REV_WEEKS = {1:'11-Jan', 2:'18-Jan', 3:'25-Jan', 4:'1-Feb', 5:'8-Feb', 6:'15-Feb', 7:'22-Feb', 8:'29-Feb'}
WEEKS = {'11-Jan':1, '18-Jan':2, '25-Jan':3, '1-Feb':4, '8-Feb':5, '15-Feb':6, '22-Feb':7, '29-Feb':8}
TIMES = {'10:45 PM':1, '11:35 PM':2, '12:20 AM':3, '1:05 AM':4}
HTML_START = "<!DOCTYPE html> \n\
<html> \n\
    <head> \n\
        <meta charset='utf-8'> \n\
        <meta http-equiv='X-UA-Compatible' content='IE=edge'> \n\
        <title>MAA - Schedule and Standings</title> \n\
        <link rel='stylesheet' href='mainLeague.css'> \n\
    </head> \n\
    <body> \n\
        <div id='header'> \n\
            <center> \n\
            <img src='images/MAAlogo.png' id='Logo'> \n\
            </center> \n\
            <ul class = 'a'> \n\
              <li class = 'b'><a href='index.html'>Home</a></li> \n\
              <li class = 'b sched'><a class='active' href='sched.php'>Schedules and Standings</a></li> \n\
            <li class='b'><a id='more'>More to come soon!</a></li> \n\
            </ul> \n\
        </div> \n\
<div id='schedandstand'> \n\
<center>\n"

HTML_END = "</table> \n\
    </center>\n\
        </div> \n\
    </body> \n\
</html>\n"

HTML_SCHED = "<table id='schedule'> \n\
<tbody> \n\
 <th class='table_head' colspan='8'>Schedule</th> \n\
 <tr><th colspan='5'>Match</th><th colspan='2'>Time</th><th>Field</th></tr>\n"

SCORE_SHEET = 'week3ugly.csv'
WAIVER = 'completed_waivers_jan_23.csv'

TEAMS = {} #I FORGOT IF YOU CAN EDIT GLOBAL VARIABLES IN PYTHON, NEED TO CHECK.

def create_teams(home, away):
    x, y = team(home), team(away)
    return x, y


def read_excel(file):
    """
    Returns a schedule 's' and standings 'st' based on the excel file that is given
    """
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
        new_game = game(game_info[3],game_info[4], game_info[5], game_info[7], time, game_info[2], week)
        st.teams[game_info[3]].add_game(new_game)
        st.teams[game_info[4]].add_game(new_game)
        st.update_teams(new_game)
        s.add(new_game)
    f.close()
    return (s, st)

W_FILE = 'new.html'

def print_table():
    f = read_excel(SCORE_SHEET)
    s = f[0]
    st = f[1]
    x = True
    print(st)
    while x == True:
        if s.currgame != None:
            print(s.currgame)
        if s.next_game() == False:
            x = False
    s.reset_i()

def write_sched():
    """
    INDEX TO THE RIGHT PART OF THE FILE (I should have a symbol for the python stuff)
    WRITE TO THE FILE AT THE CORRECT LOCATION
    WRITE HTML CODE
    """
    f = read_excel(SCORE_SHEET)
    s = f[0]
    st = f[1]

    for team in st.team_names:
        write_to_team(team, st)

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


def prepare_name(team_name):
    tn = team_name.split() #splits by spaces in team name
    pg = ''
    for i in tn:
        i.strip('')
        x = i.split('.') #splits by . in team name i.e. A.S. Roma
        for n in x:
            n.strip('')
            pg = pg + n
    return pg

ROSTER_PLAYER_1 = "<tr class='player'> <td><img id='player' src='images/player.jpg'><br/>"
ROSTER_PLAYER_2 = "</td> \n <td class='goals' >0</td> <td class='assists'>0</td> <td class='yellows'>0</td> <td class='reds'>0</td> </tr> \n"
TPG_START_1="<!DOCTYPE html>\
    <html lang='en' dir='ltr'>\
    <head>\
    <meta charset='utf-8'>\
    \n<title>MAA - "
TPG_START_2 = "</title>\n<link rel='stylesheet' href='css/styles.css'>\n</head>\n<body>\n"
ROSTER_START="<div class='container'> \n <table>"
ROSTER_END = "</table> \n\
        </div> \n\
    </body> \n\
</html>\n"

def create_roster(team_name, file):
    player_name = "Name"
    bgn = "<h1>" + team_name + "</h1> <tr> <th>Player</th> <th>Goals</th> <th>Assists</th> <th>Yellows<br>(2 mins)</th> <th>Reds</th> </tr>\n"
    file.write(bgn)
    for i in range(14): #Replace this for loop with a team roster repr found in the team object
        file.write(ROSTER_PLAYER_1 + player_name + ROSTER_PLAYER_2)
    file.write("</table>");

def write_to_team(team_name, st):
    pg = prepare_name(team_name)
    team_page = open('../Rosters/' + pg + '.html', 'w+')
    start = TPG_START_1 + team_name + TPG_START_2 + ROSTER_START #begin the HTML file
    team_page.write(start)
    create_roster(team_name, team_page)
    team_page.write(HTML_SCHED)
    team = st.teams[team_name] #grab the team instance from the standings
    team.print_sched(team_page) #print out the schedue for the team
    team_page.write(ROSTER_END)
    team_page.close();


def read_waiver(file):
    f = open(file)
    players = f.readlines()
    header = rows[0].split()
    info = {'Player Name': 0, 'Last': 0, 'Desired Team':''} #first name, last name, team,
    for column in range(len(header)):
        if header[column] in info.keys:
            info[header[column]] = column
    for p in range(1, len(players)):
        #print()
        add_to_team(players[p], info)


#print_table()
write_sched()
