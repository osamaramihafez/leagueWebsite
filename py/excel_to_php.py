#excel_to_php_script
from game import game
from schedule import schedule
from team import team
from table import standings
from division import division

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

def read_excel(file):
    """
    Returns a schedule 's' and standings 'st' based on the excel file that is given
    """
    f = open(file)
    rows = f.readlines()
    excel_schedule = rows[22:]

    div = division()

    for row in excel_schedule:
        #Parse each row in the excel sheet
        #excel sheet format:
        #Date, Time, Field, Home, Away, hs, -, as
        game_info = row.split(',')
        week = WEEKS[game_info[0]]
        time = TIMES[game_info[1]]
        home_team = game_info[3]
        away_team = game_info[4]
        home_score = game_info[5]
        away_score = game_info[7]
        field = game_info[2]
        
        team_1, team_2 = div.create_teams(home_team, away_team)
        new_game = game(game_info[3],game_info[4], game_info[5], game_info[7], time, game_info[2], week)
        
        div.update(new_game)
    
    f.close()
    return div

W_FILE = 'new.html'

def write_sched():
    """
    INDEX TO THE RIGHT PART OF THE FILE (I should have a symbol for the python stuff)
    WRITE TO THE FILE AT THE CORRECT LOCATION
    WRITE HTML CODE
    """
    div = read_excel(SCORE_SHEET)

    for team in div.teams.keys:
        div.write_to_team(team)

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


write_sched()
