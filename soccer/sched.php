<!DOCTYPE html>
<html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>MAA - Schedule and Standings</title>
        <link rel='stylesheet' href='../soccer/mainLeague.css'>

    </head>
    <body>

<!--        <img id=logo src='images/Logo.jpg'>-->
        <div id='header'>
            <center>
            <img src='images/MAAlogo.png' id='Logo'>
            <h4 id='welcome'>Welcome to the MAA Soccer League Website</h4>
            </center>
            <ul class = 'a'>
              <li class = 'b'><a href='index.html'>Home</a></li>
    <!--          <li class = 'b'><a href='about.html'>About</a></li>-->
              <li class = 'b sched'><a class='active' href='ScheduleStandings.php'>Schedules and Standings</a></li>
            <li class='b'><a id='more'>More to come soon!</a></li>
                
    <!--
              <li class = 'b'><a href='Sign-up.html'> Register</a></li>
              <li class = 'b'><a href='contact.html'>Contact</a></li>
              <li class = 'b'><a href='about.html'>Initiatives</a></li>
    -->

            </ul>
        </div>

<!--        <tr></tr>-->
        
<div id="schedandstand">
<?php

//mysql_connect();

    $team1 = 'AS Roma';
    $team2 = 'Liverpool FC';
    $team3 = 'Tolba FC';
    $team4 = 'Eagles FC';
    $team5 = 'Ricks FC';
    $team6 = 'Regala FC';
    $team7 = 'Dream FC';
    $team8 = 'Brothers FC';
    $team9 = 'Black Horse FC';
    $team10 = 'Joga Bonito';
    $team11 = 'Babylon';
    $team12 = 'ISNA SC';
    $team13 = 'North Africa FC';
    $team14 = 'Syrian Eagles';
    $team15 = 'Saga FC';
    $team16 = 'Team 16';

echo "
    <center>
    <table id='standings'>
     <th class='table_head' colspan='10'>
     Standings
     </th>
     <tr id='standings'>
         <th class='Team'>Team</th>
         <th class='gp'>GP</th>
         <th>PTS</th>
         <th >W</th>
         <th>L</th>
         <th>T</th>
         <th class='gf'>GF</th>
         <th class='ga'>GA</th>
         <th class='gd'>GD</th>
         <th class='wp'>WP</th>
     </tr>
     <tr>
         <td class='teams team'>  $team1  </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team2  </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team3   </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team4   </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team5   </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team6   </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team7   </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team8   </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team9   </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team10   </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team11   </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team12   </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team13   </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team14   </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team15   </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
     <tr>
         <td class='teams team'>   $team16   </td>
         <td class='gp'>0</td>
         <td class='pts'>0</td>
         <td class='w'>0</td>
         <td class='l'>0</td>
         <td class='t'>0</td>
         <td class='gf'>0</td>
         <td class='ga'>0</td>
         <td class='gd'>0</td>
         <td class='wp'>0.00</td>
     </tr>
 </table>
";
    
    
 echo "
<table id='schedule'>
<tbody>
 <th class='table_head' colspan='8'>Schedule</th>
 <tr><th>Date</th><th colspan='5'>Match</th><th>Time/Status</th><th>Field</th></tr>
 <th class='week_head' colspan='8'>Week 1 Regular Season</th>
 <tr class='week1'><td>11-Jan</td><td>$team1</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team5</td><td>10:45</td><td>Field A</td></tr>
 <tr class='week1'><td>11-Jan</td><td>$team2</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team6</td><td>10:45</td><td>Field B</td></tr>
 <tr class='week1'><td>11-Jan</td><td>$team3</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team7</td><td>10:45</td><td>Field C</td></tr>
 <tr class='week1'><td>11-Jan</td><td>$team4</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>10:45</td><td>Field D</td></tr>
 <tr class='week1'><td>11-Jan</td><td>$team1</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team7</td><td>11:35</td><td>Field A</td></tr>
 <tr class='week1'><td>11-Jan</td><td>$team2</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>11:35</td><td>Field B</td></tr>
 <tr class='week1'><td>11-Jan</td><td>$team3</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team5</td><td>11:35</td><td>Field C</td></tr>
 <tr class='week1'><td>11-Jan</td><td>$team4</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team6</td><td>11:35</td><td>Field D</td></tr>
 <tr class='week1'><td>11-Jan</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team10</td><td>12:20</td><td>Field A</td></tr>
 <tr class='week1'><td>11-Jan</td><td>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team14</td><td>12:20</td><td>Field B</td></tr>
 <tr class='week1'><td>11-Jan</td><td>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team15</td><td>12:20</td><td>Field C</td></tr>
 <tr class='week1'><td>11-Jan</td><td>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team16</td><td>12:20</td><td>Field D</td></tr>
 <tr class='week1'><td>11-Jan</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team15</td><td>1:05</td><td>Field A</td></tr>
 <tr class='week1'><td>11-Jan</td><td>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team16</td><td>1:05</td><td>Field B</td></tr>
 <tr class='week1'><td>11-Jan</td><td>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team10</td><td>1:05</td><td>Field C</td></tr>
 <tr><td>11-Jan</td><td>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team14</td><td>1:05</td><td>Field D</td></tr>
 <th class='week_head' colspan='8'>Week 2 Regular Season</th>
 <tr class='week2'><td>18-Jan</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team12</td><td>10:45</td><td>Field A</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team13</td><td>10:45</td><td>Field B</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team15</td><td>10:45</td><td>Field C</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team16</td><td>10:45</td><td>Field D</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team11</td><td>11:35</td><td>Field A</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team13</td><td>11:35</td><td>Field B</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team14</td><td>11:35</td><td>Field C</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team16</td><td>11:35</td><td>Field D</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team1</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team3</td><td>12:20</td><td>Field A</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team2</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team4</td><td>12:20</td><td>Field B</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team5</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team7</td><td>12:20</td><td>Field C</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team6</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>12:20</td><td>Field D</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team1</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team2</td><td>1:05</td><td>Field A</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team3</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team4</td><td>1:05</td><td>Field B</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team5</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team6</td><td>1:05</td><td>Field C</td></tr>
 <tr class='week2'><td>18-Jan</td><td>$team7</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>1:05</td><td>Field D</td></tr>
 <th class='week_head' colspan='8'>Week 3 Regular Season</th>
 <tr class='week3'><td>25-Jan</td><td>$team1</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team6</td><td>10:45</td><td>Field A</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team2</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team5</td><td>10:45</td><td>Field B</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team3</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>10:45</td><td>Field C</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team4</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team7</td><td>10:45</td><td>Field D</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team1</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>11:35</td><td>Field A</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team2</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team7</td><td>11:35</td><td>Field B</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team3</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team6</td><td>11:35</td><td>Field C</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team4</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team5</td><td>11:35</td><td>Field D</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team13</td><td>12:20</td><td>Field A</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team12</td><td>12:20</td><td>Field B</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team15</td><td>12:20</td><td>Field C</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team16</td><td>12:20</td><td>Field D</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team16</td><td>1:05</td><td>Field A</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team15</td><td>1:05</td><td>Field B</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team14</td><td>1:05</td><td>Field C</td></tr>
 <tr class='week3'><td>25-Jan</td><td>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team10</td><td>1:05</td><td>Field D</td></tr>
 <th class='week_head' colspan='8'>Week 4 Regular Season</th>
 <tr class='week 4'><td>1-Feb</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team14</td><td>10:45</td><td>Field A</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team10</td><td>10:45</td><td>Field B</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team16</td><td>10:45</td><td>Field C</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team15</td><td>10:45</td><td>Field D</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team1</td><td>11:35</td><td>Field A</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team2</td><td>11:35</td><td>Field B</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team5</td><td>11:35</td><td>Field C</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team6</td><td>11:35</td><td>Field D</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team4</td><td>12:20</td><td>Field A</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team3</td><td>12:20</td><td>Field B</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>12:20</td><td>Field C</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team7</td><td>12:20</td><td>Field D</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team1</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team4</td><td>1:05</td><td>Field A</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team2</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team3</td><td>1:05</td><td>Field B</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team5</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>1:05</td><td>Field C</td></tr>
 <tr class='week 4'><td>1-Feb</td><td>$team6</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team7</td><td>1:05</td><td>Field D</td></tr>
 <th class='week_head' colspan='8'>Week 5 Regular Season</th>
 <tr class='week5'><td>8-Feb</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team2</td><td>10:45</td><td>Field A</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team1</td><td>10:45</td><td>Field B</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team6</td><td>10:45</td><td>Field C</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team5</td><td>10:45</td><td>Field D</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team6</td><td>11:35</td><td>Field A</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team5</td><td>11:35</td><td>Field B</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team2</td><td>11:35</td><td>Field C</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team1</td><td>11:35</td><td>Field D</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>12:20</td><td>Field A</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team7</td><td>12:20</td><td>Field B</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team4</td><td>12:20</td><td>Field C</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team3</td><td>12:20</td><td>Field D</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team7</td><td>1:05</td><td>Field A</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>1:05</td><td>Field B</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team3</td><td>1:05</td><td>Field C</td></tr>
 <tr class='week5'><td>8-Feb</td><td>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team4</td><td>1:05</td><td>Field D</td></tr>
 <th class='week_head' colspan='8'>Week 6 Regular Season</th>
 <tr class='week6'><td>15-Feb</td><td>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team3</td><td>10:45</td><td>Field A</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team4</td><td>10:45</td><td>Field B</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team7</td><td>10:45</td><td>Field C</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>10:45</td><td>Field D</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team5</td><td>11:35</td><td>Field A</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team6</td><td>11:35</td><td>Field B</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team1</td><td>11:35</td><td>Field C</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team2</td><td>11:35</td><td>Field D</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team5</td><td>12:20</td><td>Field A</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team6</td><td>12:20</td><td>Field B</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team1</td><td>12:20</td><td>Field C</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team2</td><td>12:20</td><td>Field D</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team3</td><td>1:05</td><td>Field A</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team4</td><td>1:05</td><td>Field B</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team7</td><td>1:05</td><td>Field C</td></tr>
 <tr class='week6'><td>15-Feb</td><td>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>1:05</td><td>Field D</td></tr>
 <th class='week_head' colspan='8'>Week 7 Regular Season</th>
 <tr class='week7'><td>22-Feb</td><td>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team1</td><td>10:45</td><td>Field A</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team2</td><td>10:45</td><td>Field B</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team5</td><td>10:45</td><td>Field C</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team6</td><td>10:45</td><td>Field D</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team2</td><td>11:35</td><td>Field A</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team1</td><td>11:35</td><td>Field B</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team6</td><td>11:35</td><td>Field C</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team5</td><td>11:35</td><td>Field D</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team7</td><td>12:20</td><td>Field A</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>12:20</td><td>Field B</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team3</td><td>12:20</td><td>Field C</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team4</td><td>12:20</td><td>Field D</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>1:05</td><td>Field A</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team7</td><td>1:05</td><td>Field B</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team4</td><td>1:05</td><td>Field C</td></tr>
 <tr class='week7'><td>22-Feb</td><td>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team3</td><td>1:05</td><td>Field D</td></tr>
 <th class='week_head' colspan='8'>Week 8 Regular Season</th>
 <tr class='week8'><td>29-Feb</td><td>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team4</td><td>10:45</td><td>Field A</td></tr>
 <tr class='week8'><td>29-Feb</td><td>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team3</td><td>10:45</td><td>Field B</td></tr>
 <tr class='week8'><td>29-Feb</td><td>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team8</td><td>10:45</td><td>Field C</td></tr>
 <tr class='week8'><td>29-Feb</td><td>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team7</td><td>10:45</td><td>Field D</td></tr>
 <tr class='week8'><td>29-Feb</td><td>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team6</td><td>11:35</td><td>Field A</td></tr>
 <tr class='week8'><td>29-Feb</td><td>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team5</td><td>11:35</td><td>Field B</td></tr>
 <tr class='week8'><td>29-Feb</td><td>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team2</td><td>11:35</td><td>Field C</td></tr>
 <tr class='week8'><td>29-Feb</td><td>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td>$team1</td><td>11:35</td><td>Field D</td></tr>
</tbody></table>
"
?>
        </div>
    </body>
</html>