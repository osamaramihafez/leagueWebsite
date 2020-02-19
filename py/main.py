#main.py
#the excel to html script

from game import game
from schedule import schedule
from team import team
from table import standings
from division import division
from os import walk

REV_WEEKS = {1:'11-Jan', 2:'18-Jan', 3:'25-Jan', 4:'1-Feb', 5:'8-Feb', 6:'15-Feb', 7:'22-Feb', 8:'29-Feb'}
WEEKS = {'11-Jan':1, '18-Jan':2, '25-Jan':3, '1-Feb':4, '8-Feb':5, '15-Feb':6, '22-Feb':7, '29-Feb':8}
TIMES = {'10:45 PM':1, '11:35 PM':2, '12:20 AM':3, '1:05 AM':4}

# Sched/Standing things
#-----------------------------------------------------------------------------------------------------

HTML_START = "<!DOCTYPE html> \r\n\
<html> \r\n\
    <head> \r\n\
        <meta charset='utf-8'> \r\n\
        <meta http-equiv='X-UA-Compatible' content='IE=edge'> \r\n\
        <title>MAA - Schedule and Standings</title> \r\n\
        <link rel='stylesheet' href='../soccer/mainLeague.css'> \r\n\
    </head> \r\n\
    <body> \r\n\
        <div id='header'> \r\n\
            <center> \r\n\
            <img src='../soccer/images/MAAlogo.png' id='Logo'> \r\n\
            </center> \r\n\
            <ul class = 'a'> \r\n\
              <li class = 'b'><a href='index.html'>Home</a></li> \r\n\
              <li class = 'b sched'><a class='active' href='sched.php'>Schedules and Standings</a></li> \r\n\
            <li class='b'><a id='more'>More to come soon!</a></li> \r\n\
            </ul> \r\n\
        </div> \r\n\
<div id='schedandstand'> \r\n\
<center>\r\n"

HTML_END = "</table> \r\n\
    </center>\r\n\
        </div> \r\n\
    </body> \r\n\
</html>\r\n"

HTML_SCHED = "<table id='schedule'> \r\n\
<tbody> \r\n\
 <th class='table_head' colspan='8'>Schedule</th> \r\n\
 <tr><th colspan='5'>Match</th><th colspan='2'>Time</th><th>Field</th></tr>\r\n"

#Roster things
#-----------------------------------------------------------------------------------------------------
TPG_START_1="<!DOCTYPE html> \r\n\
<html> \r\n\
    <head> \r\n\
        <meta charset='utf-8'> \r\n\
        <meta http-equiv='X-UA-Compatible' content='IE=edge'> \r\n\
        <title>MAA - "
TPG_START_2 = " </title> \r\n\
        <link rel='stylesheet' href='css/rosters.css'> \r\n\
        <link rel='stylesheet' href='../soccer/mainLeague.css'> \r\n\
    </head> \r\n\
    <body> \r\n\
        <div id='header'> \r\n\
            <center> \r\n\
            <img src='../soccer/images/MAAlogo.png' id='Logo'> \r\n\
            </center> \r\n\
            <ul class = 'a'> \r\n\
              <li class = 'b'><a href='../soccer/index.html'>Home</a></li> \r\n\
              <li class = 'b'><a href='../soccer/updated_sched.html'>Schedules and Standings</a></li> \r\n\
              <li class = 'b'><a class='active' href=''>Rosters</a></li> \r\n\
            <li class='b'><a id='more'>More to come soon!</a></li>\r\n\
            </ul> \r\n\
        </div> \r\n\
<center>\r\n"

ROSTER_START="<div class='container'> \r\n <table>\r\n"
ROSTER_END = "</table> \r\n\
        </div> \r\n\
      </center> \r\n\
    </body> \r\n\
</html>\r\n"

SCORE_SHEET = 'week6.csv'
PLAYERS = 'players.csv'
GOALS = 'goals.csv'
OUT_FILE = '../soccer/updated_sched.html'

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
        home_team = game_info[3].strip()
        away_team = game_info[4].strip()
        
        try:
            home_score = int(game_info[5])
            away_score = int(game_info[7])
        except ValueError:
            home_score = game_info[5]
            away_score = game_info[7]
            
        field = game_info[2]
        
        div.create_teams(home_team, away_team)
        
        new_game = game(home_team,away_team, home_score, away_score, time, field, week)
        
        div.update(new_game)
    
    f.close()
    return div

def write_sched(div):
    """
    WRITE TO THE OUTPUT FILE AT THE CORRECT LOCATION
    """
    s = div.sched

    x = True
    f = open(OUT_FILE, 'w+') #is this the correct way to open the file?
    f.write(HTML_START)
    div.st.sort_teams()
    f.write(str(div.st))
    f.write(HTML_SCHED)
    
    while x == True:
        if s.game_i == 2 and s.week_i < 8:
            f.write("<th class='week_head' colspan='7'> \
            Week " +  str(s.week_i + 1) + " Regular Season</th> \
            <th class='week_head'> \
            " + str(REV_WEEKS[s.week_i + 1]) + "</th> \r\n")
        if s.currgame != None:
            f.write(str(s.currgame))
        if s.next_game() == False:
            x = False
    
    f.write(HTML_END)
    f.close()
    s.reset_i()

def read_players(file, div):
    f = open(file)
    players = f.readlines()
    for line in players:
        player = line.split(',')
        div.add_to_team(player)
    f.close()
    g = open(GOALS)
    players = g.readlines()
    for row in players[1:]:
        player = row.split(',')
        div.update_goals(player)

    pics = []
    for (dirpath, dirnames, filenames) in walk("../Rosters/images/playerpics"):
        pics.extend(filenames)
        break
    for pic in pics:
        div.update_pics(pic)

def create_team_page(team_name, div):
    
    pg = prepare_team_name(team_name) #Ensure that the team name is in the correct format (i.e. no spaces)

    team_page = open('../Rosters/' + pg + '.html', 'w+')
    start = TPG_START_1 + team_name.upper() + TPG_START_2 + ROSTER_START #begin the HTML file
    team_page.write(start)
    
    generate_roster(team_name, team_page, div) #Create a roster.html file for the team
    
    team_page.write(HTML_SCHED)
    team = div.teams[team_name]
    
    team_page.write(ROSTER_END)
    team_page.close()  
          
def generate_roster(team_name, file, div):
    bgn = "<h1>" + team_name + "</h1> <tr> <th>Player</th> <th>Goals</th> <th>Reds</th> </tr>\r\n"
    file.write(bgn)
    file.write(div.teams[team_name].roster_repr())
    file.write("</table>")
    
def prepare_team_name(team_name):
    tn = team_name.split() #splits by spaces in team name
    pg = ''
    for i in tn:
        i.strip('')
        x = i.split('.') #splits by . in team name i.e. A.S. Roma
        for n in x:
            n.strip('')
            pg = pg + n
    return pg

def execute():
    div = read_excel(SCORE_SHEET)
    write_sched(div)
    read_players(PLAYERS, div)
    for team in div.teams.keys():
        create_team_page(team, div)
        
execute()   