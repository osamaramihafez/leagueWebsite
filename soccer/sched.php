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
<!--            <h4 id='welcome'>Welcome to the MAA Soccer League Website</h4>-->
            </center>
            <ul class = 'a'>
              <li class = 'b'><a href='index.html'>Home</a></li>
    <!--          <li class = 'b'><a href='about.html'>About</a></li>-->
              <li class = 'b sched'><a class='active' href='sched.php'>Schedules and Standings</a></li>
            <li class='b'><a id='more'>More to come soon!</a></li>
                
    <!--
              <li class = 'b'><a href='Sign-up.html'> Register</a></li>
              <li class = 'b'><a href='contact.html'>Contact</a></li>
              <li class = 'b'><a href='about.html'>Initiatives</a></li>
    -->

            </ul>
        </div>

<!--        <td class='away_score'>-->
         <td class='teams'>4</td>
        
<!--        <tr></tr>-->
        
<div id="schedandstand">
<?php

//    Week 2 Incorrect
    
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

//    Correct
    
    $team1 = 'AS Roma';
    $team2 = 'Liverpool FC';
    $team3 = 'Tolba FC';
    $team4 = 'Eagles FC';
    $team5 = 'Ricks FC';
    $team6 = 'Regala FC';
    $team7 = 'Dream FC';
    $team8 = 'Babylon';
    $team9 = 'Brothers FC';
    $team10 = 'Black Horse FC';
    $team11 = 'Joga Bonito';
    $team12 = 'ISNA SC';
    $team13 = 'North Africa FC';
    $team14 = 'Saga FC';
    $team15 = 'Syrian Eagles';
    $team16 = 'Team 16';
    
echo "
    <center>
    <table id='standings'>
     <th class='table_head' colspan='11'>
     Standings
     </th>
     <tr id='standings'>
         <th class='position'></th>
         <th class='Team'> </th>
<!--         <th class='Team'>Team</th>
-->         <th class='gp'>GP</th>
         <th>PTS</th>
         <th >W</th>
         <th>L</th>
         <th>T</th>
         <th class='gf'>GF</th>
         <th class='ga'>GA</th>
         <th class='gd'>GD</th>
         <th class='wp'>Win %</th>
     </tr>
     <tr>
         <td class='position'>1.</td>
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
         <td class='position'>2.</td>
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
         <td class='position'>3.</td>
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
         <td class='position'>4.</td>
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
         <td class='position'>5.</td>
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
         <td class='position'>6.</td>
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
         <td class='position'>7.</td>
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
         <td class='position'>8.</td>
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
         <td class='position'>9.</td>
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
         <td class='position'>10.</td>
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
         <td class='position'>11.</td> <td class='teams team'>   $team11   </td>
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
         <td class='position'>12.</td> <td class='teams team'>   $team12   </td>
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
         <td class='position'>13.</td> <td class='teams team'>   $team13   </td>
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
         <td class='position'>14.</td> <td class='teams team'>   $team14   </td>
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
         <td class='position'>15.</td> <td class='teams team'>   $team15   </td>
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
         <td class='position'>16.</td> <td class='teams team'>   $team16   </td>
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
 <tr><th colspan='5'>Match</th><th colspan='2'>Time</th><th>Field</th></tr>
 
 <th class='week_head' colspan='7'>Week 1 Regular Season</th> <th class='week_head'>January 11th</th>
 <tr class='week1'><td class='team'>A.S. Roma</td><td class='home_score'>2</td><td>-</td><td class='away_score'>0</td><td class='team'>Ricks FC</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week1'><td class='team'>Liverpool</td><td class='home_score'>0</td><td>-</td><td class='away_score'>2</td><td class='team'>Regala FC</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week1'><td class='team'>Tolba FC</td><td class='home_score'>0</td><td>-</td><td class='away_score'>0</td><td class='team'>Dream FC</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week1'><td class='team'>Eagles FC</td><td class='home_score'>2</td><td>-</td><td class='away_score'>0</td><td class='team'>Babylon FC</td><td>10:45 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 
 <tr class='week1'><td class='team'>A.S. Roma</td><td class='home_score'>3</td><td>-</td><td class='away_score'>2</td><td class='team'>Ricks FC</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week1'><td class='team'>Liverpool</td><td class='home_score'>1</td><td>-</td><td class='away_score'>6</td><td class='team'>Regala FC</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week1'><td class='team'>Tolba FC</td><td class='home_score'>6</td><td>-</td><td class='away_score'>0</td><td class='team'>Dream FC</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week1'><td class='team'>Eagles FC</td><td class='home_score'>1</td><td>-</td><td class='away_score'>4</td><td class='team'>Babylon FC</td><td>11:35 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 
 <tr class='week1'><td class='team'>Brothers FC</td><td class='home_score'>3</td><td>-</td><td class='away_score'>1</td><td class='team'>North Africa FC</td><td>12:20 am</td><td>(Sunday)</td><td>Field 1</td></tr>
 <tr class='week1'><td class='team'>Black Horse FC</td><td class='home_score'>1</td><td>-</td><td class='away_score'>0</td><td class='team'>Saga FC</td><td>12:20 am</td><td>(Sunday)</td><td>Field 2</td></tr>
 <tr class='week1'><td class='team'>Joga Bonito</td><td class='home_score'>2</td><td>-</td><td class='away_score'>1</td><td class='team'>Syrian Eagles</td><td>12:20 am</td><td>(Sunday)</td><td>Field 3</td></tr>
 <tr class='week1'><td class='team'>ISNA SC</td><td class='home_score'>1</td><td>-</td><td class='away_score'>1</td><td class='team'>Team 16</td><td>12:20 am</td><td>(Sunday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 
 <tr class='week1'><td class='team'>Brothers FC</td><td class='home_score'>4</td><td>-</td><td class='away_score'>0</td><td class='team'>Syrian Eagles</td><td>1:05 am</td><td>(Sunday)</td><td>Field 1</td></tr>
 <tr class='week1'><td class='team'>Black Horse FC</td><td class='home_score'>4</td><td>-</td><td class='away_score'>1</td><td class='team'>Team 16</td><td>1:05 am</td><td>(Sunday)</td><td>Field 2</td></tr>
 <tr class='week1'><td class='team'>Joga Bonito</td><td class='home_score'>0</td><td>-</td><td class='away_score'>3</td><td class='team'>North Africa FC</td><td>1:05 am</td><td>(Sunday)</td><td>Field 3</td></tr>
 <tr><td class='team'>ISNA SC</td><td class='home_score'>3</td><td>-</td><td class='away_score'>3</td><td class='team'>Saga FC</td><td>1:05 am</td><td>(Sunday)</td> <td>Field 4</td></tr>
 
 ";
     
    $team1 = 'AS Roma';
    $team2 = 'Liverpool FC';
    $team3 = 'Tolba FC';
    $team4 = 'Eagles FC';
    $team5 = 'Ricks FC';
    $team6 = 'Regala FC';
    $team7 = 'Dream FC';
    $team8 = 'Babylon';
    $team9 = 'Brothers FC';
    $team10 = 'Black Horse FC';
    $team11 = 'Joga Bonito';
    $team12 = 'ISNA SC';
    $team13 = 'North Africa FC';
    $team14 = 'Saga FC';
    $team15 = 'Syrian Eagles';
    $team16 = 'Team 16';
     
 echo "
 
 <th class='week_head' colspan='7'>Week 2 Regular Season</th><th class='week_head'>January 18th</th>
 
 <tr class='week2'><td class='team'>Brothers</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>Joga Bonito</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week2'><td class='team'>Black Horse FC</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>ISNA SC</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week2'><td class='team'>North Africa FC</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>Syrian Eagles</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week2'><td class='team'>Saga FC</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>Team 16</td><td>10:45 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 
 <tr class='week2'><td class='team'>Brothers FC</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>Black Horse FC</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week2'><td class='team'>Joga Bonito FC</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>ISNA SC</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week2'><td class='team'>North Africa FC</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>Saga FC</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week2'><td class='team'>Syrian Eagles</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>Team 16</td><td>11:35 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 
 <tr class='week2'><td class='team'>A.S. Roma</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>Tolba FC</td><td>12:20 am</td><td>(Sunday)</td><td>Field 1</td></tr>
 <tr class='week2'><td class='team'>Liverpool</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>Eagles FC</td><td>12:20 am</td><td>(Sunday)</td><td>Field 2</td></tr>
 <tr class='week2'><td class='team'>Ricks FC</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>Dream FC</td><td>12:20 am</td><td>(Sunday)</td><td>Field 3</td></tr>
 <tr class='week2'><td class='team'>Regala FC</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>Babylon FC</td><td>12:20 am</td><td>(Sunday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 
 <tr class='week2'><td class='team'>A.S. Roma</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>Liverpool</td><td>1:05 am</td><td>(Sunday)</td><td>Field 1</td></tr>
 <tr class='week2'><td class='team'>Tolba FC</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>Eagles FC</td><td>1:05 am</td><td>(Sunday)</td><td>Field 2</td></tr>
 <tr class='week2'><td class='team'>Ricks FC</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>Regala FC</td><td>1:05 am</td><td>(Sunday)</td><td>Field 3</td></tr>
 <tr class='week2'><td class='team'>Dream FC</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>Babylon FC</td><td>1:05 am</td><td>(Sunday)</td> <td>Field 4</td></tr>
 
 <th class='week_head' colspan='7'>Week 3 Regular Season</th><th class='week_head'>January 25th</th>
 <tr class='week3'><td class='team'>$team1</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team6</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week3'><td class='team'>$team2</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team5</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week3'><td class='team'>$team3</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team8</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week3'><td class='team'>$team4</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team7</td><td>10:45 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 <tr class='week3'><td class='team'>$team1</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team8</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week3'><td class='team'>$team2</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team7</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week3'><td class='team'>$team3</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team6</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week3'><td class='team'>$team4</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team5</td><td>11:35 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 <tr class='week3'><td class='team'>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team13</td><td>12:20 am</td><td>(Sunday)</td><td>Field 1</td></tr>
 <tr class='week3'><td class='team'>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team12</td><td>12:20 am</td><td>(Sunday)</td><td>Field 2</td></tr>
 <tr class='week3'><td class='team'>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team15</td><td>12:20 am</td><td>(Sunday)</td><td>Field 3</td></tr>
 <tr class='week3'><td class='team'>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team16</td><td>12:20 am</td><td>(Sunday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 <tr class='week3'><td class='team'>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team16</td><td>1:05 am</td><td>(Sunday)</td><td>Field 1</td></tr>
 <tr class='week3'><td class='team'>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team15</td><td>1:05 am</td><td>(Sunday)</td><td>Field 2</td></tr>
 <tr class='week3'><td class='team'>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team14</td><td>1:05 am</td><td>(Sunday)</td><td>Field 3</td></tr>
 <tr class='week3'><td class='team'>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team10</td><td>1:05 am</td><td>(Sunday)</td> <td>Field 4</td></tr>
 
 <th class='week_head' colspan='7'>Week 4 Regular Season</th><th class='week_head'>February 1st</th>
 <tr class='week 4'><td class='team'>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team14</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week 4'><td class='team'>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team10</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week 4'><td class='team'>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team16</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week 4'><td class='team'>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team15</td><td>10:45 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 <tr class='week 4'><td class='team'>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team1</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week 4'><td class='team'>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team2</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week 4'><td class='team'>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team5</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week 4'><td class='team'>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team6</td><td>11:35 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 <tr class='week 4'><td class='team'>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team4</td><td>12:20 am</td><td>(Sunday)</td><td>Field 1</td></tr>
 <tr class='week 4'><td class='team'>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team3</td><td>12:20 am</td><td>(Sunday)</td><td>Field 2</td></tr>
 <tr class='week 4'><td class='team'>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team8</td><td>12:20 am</td><td>(Sunday)</td><td>Field 3</td></tr>
 <tr class='week 4'><td class='team'>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team7</td><td>12:20 am</td><td>(Sunday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 <tr class='week 4'><td class='team'>$team1</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team4</td><td>1:05 am</td><td>(Sunday)</td><td>Field 1</td></tr>
 <tr class='week 4'><td class='team'>$team2</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team3</td><td>1:05 am</td><td>(Sunday)</td><td>Field 2</td></tr>
 <tr class='week 4'><td class='team'>$team5</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team8</td><td>1:05 am</td><td>(Sunday)</td><td>Field 3</td></tr>
 <tr class='week 4'><td class='team'>$team6</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team7</td><td>1:05 am</td><td>(Sunday)</td> <td>Field 4</td></tr>
 
 <th class='week_head' colspan='7'>Week 5 Regular Season</th> <th class='week_head'>February 8th</th>
 <tr class='week5'><td class='team'>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team2</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week5'><td class='team'>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team1</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week5'><td class='team'>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team6</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week5'><td class='team'>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team5</td><td>10:45 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 <tr class='week5'><td class='team'>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team6</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week5'><td class='team'>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team5</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week5'><td class='team'>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team2</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week5'><td class='team'>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team1</td><td>11:35 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 <tr class='week5'><td class='team'>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team8</td><td>12:20 am</td><td>(Sunday)</td><td>Field 1</td></tr>
 <tr class='week5'><td class='team'>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team7</td><td>12:20 am</td><td>(Sunday)</td><td>Field 2</td></tr>
 <tr class='week5'><td class='team'>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team4</td><td>12:20 am</td><td>(Sunday)</td><td>Field 3</td></tr>
 <tr class='week5'><td class='team'>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team3</td><td>12:20 am</td><td>(Sunday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 <tr class='week5'><td class='team'>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team7</td><td>1:05 am</td><td>(Sunday)</td><td>Field 1</td></tr>
 <tr class='week5'><td class='team'>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team8</td><td>1:05 am</td><td>(Sunday)</td><td>Field 2</td></tr>
 <tr class='week5'><td class='team'>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team3</td><td>1:05 am</td><td>(Sunday)</td><td>Field 3</td></tr>
 <tr class='week5'><td class='team'>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team4</td><td>1:05 am</td><td>(Sunday)</td> <td>Field 4</td></tr>
 
 <th class='week_head' colspan='7'>Week 6 Regular Season</th> <th class='week_head'>February 15th</th>
 <tr class='week6'><td class='team'>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team3</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week6'><td class='team'>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team4</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week6'><td class='team'>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team7</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week6'><td class='team'>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team8</td><td>10:45 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 
 <tr class='week6'><td class='team'>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team5</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week6'><td class='team'>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team6</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week6'><td class='team'>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team1</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week6'><td class='team'>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team2</td><td>11:35 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 
 <tr class='week6'><td class='team'>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team5</td><td>12:20 am</td><td>(Sunday)</td><td>Field 1</td></tr>
 <tr class='week6'><td class='team'>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team6</td><td>12:20 am</td><td>(Sunday)</td><td>Field 2</td></tr>
 <tr class='week6'><td class='team'>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team1</td><td>12:20 am</td><td>(Sunday)</td><td>Field 3</td></tr>
 <tr class='week6'><td class='team'>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team2</td><td>12:20 am</td><td>(Sunday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 
 <tr class='week6'><td class='team'>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team3</td><td>1:05 am</td><td>(Sunday)</td><td>Field 1</td></tr>
 <tr class='week6'><td class='team'>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team4</td><td>1:05 am</td><td>(Sunday)</td><td>Field 2</td></tr>
 <tr class='week6'><td class='team'>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team7</td><td>1:05 am</td><td>(Sunday)</td><td>Field 3</td></tr>
 <tr class='week6'><td class='team'>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team8</td><td>1:05 am</td><td>(Sunday)</td> <td>Field 4</td></tr>
 
 <th class='week_head' colspan='7'>Week 7 Regular Season</th> <th class='week_head'>February 22nd</th>
 <tr class='week7'><td class='team'>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team1</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week7'><td class='team'>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team2</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week7'><td class='team'>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team5</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week7'><td class='team'>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team6</td><td>10:45 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 <tr class='week7'><td class='team'>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team2</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week7'><td class='team'>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team1</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week7'><td class='team'>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team6</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week7'><td class='team'>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team5</td><td>11:35 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 <tr class='week7'><td class='team'>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team7</td><td>12:20 am</td><td>(Sunday)</td><td>Field 1</td></tr>
 <tr class='week7'><td class='team'>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team8</td><td>12:20 am</td><td>(Sunday)</td><td>Field 2</td></tr>
 <tr class='week7'><td class='team'>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team3</td><td>12:20 am</td><td>(Sunday)</td><td>Field 3</td></tr>
 <tr class='week7'><td class='team'>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team4</td><td>12:20 am</td><td>(Sunday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 <tr class='week7'><td class='team'>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team8</td><td>1:05 am</td><td>(Sunday)</td><td>Field 1</td></tr>
 <tr class='week7'><td class='team'>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team7</td><td>1:05 am</td><td>(Sunday)</td><td>Field 2</td></tr>
 <tr class='week7'><td class='team'>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team4</td><td>1:05 am</td><td>(Sunday)</td><td>Field 3</td></tr>
 <tr class='week7'><td class='team'>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team3</td><td>1:05 am</td><td>(Sunday)</td> <td>Field 4</td></tr>
 
 <th class='week_head' colspan='7'>Week 1 Regular Season</th> <th class='week_head'>February 29th</th>
 <tr class='week8'><td class='team'>$team9</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team4</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week8'><td class='team'>$team11</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team3</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week8'><td class='team'>$team14</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team8</td><td>10:45 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week8'><td class='team'>$team10</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team7</td><td>10:45 pm</td><td>(Saturday)</td> <td>Field 4</td></tr> <th class='time_split' colspan='8'></th>
 <tr class='week8'><td class='team'>$team12</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team6</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 1</td></tr>
 <tr class='week8'><td class='team'>$team13</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team5</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 2</td></tr>
 <tr class='week8'><td class='team'>$team16</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team2</td><td>11:35 pm</td><td>(Saturday)</td><td>Field 3</td></tr>
 <tr class='week8'><td class='team'>$team15</td><td class='home_score'></td><td>-</td><td class='away_score'></td><td class='team'>$team1</td><td>11:35 pm</td><td>(Saturday)</td> <td>Field 4</td></tr>
</tbody></table>
"
?>
        </div>
    </body>
</html>