#main.py
#the excel to html script

from game import game
from schedule import schedule
from team import team
from table import standings
from division import division

REV_WEEKS = {1:'11-Jan', 2:'18-Jan', 3:'25-Jan', 4:'1-Feb', 5:'8-Feb', 6:'15-Feb', 7:'22-Feb', 8:'29-Feb'}
WEEKS = {'11-Jan':1, '18-Jan':2, '25-Jan':3, '1-Feb':4, '8-Feb':5, '15-Feb':6, '22-Feb':7, '29-Feb':8}
TIMES = {'10:45 PM':1, '11:35 PM':2, '12:20 AM':3, '1:05 AM':4}

# Sched/Standing things
#-----------------------------------------------------------------------------------------------------

HTML_START = "<!DOCTYPE html> \n\
<html> \n\
    <head> \n\
        <meta charset='utf-8'> \n\
        <meta http-equiv='X-UA-Compatible' content='IE=edge'> \n\
        <title>MAA - Schedule and Standings</title> \n\
        <link rel='stylesheet' href='../soccer/mainLeague.css'> \n\
    </head> \n\
    <body> \n\
        <div id='header'> \n\
            <center> \n\
            <img src='../soccer/images/MAAlogo.png' id='Logo'> \n\
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

#Roster things
#-----------------------------------------------------------------------------------------------------

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

SCORE_SHEET = 'week5.csv'
WAIVER = 'completed_waivers_jan_23.csv'

OUT_FILE = 'updated_sched.html'

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
        
        try:
            home_score = int(game_info[5])
            away_score = int(game_info[7])
        except ValueError:
            home_score = game_info[5]
            away_score = game_info[7]
            
        field = game_info[2]
        
        team_1, team_2 = div.create_teams(home_team, away_team)
        
        #try:
        new_game = game(home_team,away_team, home_score, away_score, time, field, week)
        
        #new_game = game(home_team,away_team, home_score, away_score, time, field, week)
        
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

def create_team_page(team_name, div):
    
    pg = prepare_team_name(team_name) #Ensure that the team name is in the correct format (i.e. no spaces)
    
    team_page = open('../Rosters/' + pg + '.html', 'w+')
    start = TPG_START_1 + team_name + TPG_START_2 + ROSTER_START #begin the HTML file
    team_page.write(start)
    
    generate_roster(team_name, team_page) #Create a roster.html file for the team
    
    team_page.write(HTML_SCHED)
    team = div.teams[team_name]
    
    team.print_sched(team_page) #print out the schedue for the team
    
    team_page.write(ROSTER_END)
    team_page.close();   
          
def generate_roster(team_name, file):
    player_name = "Name"
    bgn = "<h1>" + team_name + "</h1> <tr> <th>Player</th> <th>Goals</th> <th>Assists</th> <th>Yellows<br>(2 mins)</th> <th>Reds</th> </tr>\n"
    file.write(bgn)
    for i in range(14): #Replace this for loop with a team roster repr found in the team object
        file.write(ROSTER_PLAYER_1 + player_name + ROSTER_PLAYER_2)
    file.write("</table>");
    
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
    for team in div.teams.keys():
        create_team_page(team, div)
        
execute()   