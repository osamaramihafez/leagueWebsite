<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MAA - Schedule and Standings</title>
        <link rel="stylesheet" href="mainLeague.css">
    </head>
    <body>
        
<!--        <img id='logo' src="images/Logo.jpg">-->
        
         <ul class = "a">
          <li class = "b"><a href="index.html">Home</a></li>
          <li class = "b"><a href="about.html">About</a></li>
          <li class = "b"><a class="active" href="Schedule&Standings.html">Schedule/Standings </a></li>
          <li class = "b"><a href="Sign-up.html"> Register</a></li>
          <li class = "b"><a href="contact.html">Contact</a></li>
          <li class = "b"><a href="about.html">Initiatives</a></li>

        </ul>      
        
<?php

    $team1 = 'Joga Bonito';
    $team2 = 'Team 2';
    $team3 = 'Team 3';
    $team4 = 'Team 4';
    $team5 = 'Team 5';
    $team6 = 'Team 6';
    $team7 = 'Team 7';
    $team8 = 'Team 8';
        
echo '<table>';
    echo '<th class="table_head" colspan="10">';
    echo 'Standings';
    echo '</th>';
    echo '<tr id="standings">';
        echo '<th class="team">Team</th>';
        echo '<th class="gp">GP</th>';
        echo '<th>PTS</th>';
        echo '<th >W</th>';
        echo '<th>L</th>';
        echo '<th>T</th>';
        echo '<th class="gf">GF</th>';
        echo '<th class="ga">GA</th>';
        echo '<th class="gd">GD</th>';
        echo '<th class="wp">WP</th>';
    echo '</tr>';
    echo '<tr>';
        echo '<td class="auto_semi"> '; echo $team1 ; echo ' </td>';
        echo '<td class="gp">0</td>';
        echo '<td class="pts">0</td>';
        echo '<td class="w">0</td>';
        echo '<td class="l">0</td>';
        echo '<td class="t">0</td>';
        echo '<td class="gf">0</td>';
        echo '<td class="ga">0</td>';
        echo '<td class="gd">0</td>';
        echo '<td class="wp">0.00</td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td class="auto_semi">'; echo $team2 ; echo ' </td>';
        echo '<td class="gp">0</td>';
        echo '<td class="pts">0</td>';
        echo '<td class="w">0</td>';
        echo '<td class="l">0</td>';
        echo '<td class="t">0</td>';
        echo '<td class="gf">0</td>';
        echo '<td class="ga">0</td>';
        echo '<td class="gd">0</td>';
        echo '<td class="wp">0.00</td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td class="team">'; echo $team3 ; echo ' </td>';
        echo '<td class="gp">0</td>';
        echo '<td class="pts">0</td>';
        echo '<td class="w">0</td>';
        echo '<td class="l">0</td>';
        echo '<td class="t">0</td>';
        echo '<td class="gf">0</td>';
        echo '<td class="ga">0</td>';
        echo '<td class="gd">0</td>';
        echo '<td class="wp">0.00</td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td class="team">'; echo $team4 ; echo ' </td>';
        echo '<td class="gp">0</td>';
        echo '<td class="pts">0</td>';
        echo '<td class="w">0</td>';
        echo '<td class="l">0</td>';
        echo '<td class="t">0</td>';
        echo '<td class="gf">0</td>';
        echo '<td class="ga">0</td>';
        echo '<td class="gd">0</td>';
        echo '<td class="wp">0.00</td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td class="team">'; echo $team5 ; echo ' </td>';
        echo '<td class="gp">0</td>';
        echo '<td class="pts">0</td>';
        echo '<td class="w">0</td>';
        echo '<td class="l">0</td>';
        echo '<td class="t">0</td>';
        echo '<td class="gf">0</td>';
        echo '<td class="ga">0</td>';
        echo '<td class="gd">0</td>';
        echo '<td class="wp">0.00</td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td class="team">'; echo $team6 ; echo ' </td>';
        echo '<td class="gp">0</td>';
        echo '<td class="pts">0</td>';
        echo '<td class="w">0</td>';
        echo '<td class="l">0</td>';
        echo '<td class="t">0</td>';
        echo '<td class="gf">0</td>';
        echo '<td class="ga">0</td>';
        echo '<td class="gd">0</td>';
        echo '<td class="wp">0.00</td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td class="knocked_out">'; echo $team7 ; echo ' </td>';
        echo '<td class="gp">0</td>';
        echo '<td class="pts">0</td>';
        echo '<td class="w">0</td>';
        echo '<td class="l">0</td>';
        echo '<td class="t">0</td>';
        echo '<td class="gf">0</td>';
        echo '<td class="ga">0</td>';
        echo '<td class="gd">0</td>';
        echo '<td class="wp">0.00</td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td class="knocked_out">'; echo $team8 ; echo ' </td>';
        echo '<td class="gp">0</td>';
        echo '<td class="pts">0</td>';
        echo '<td class="w">0</td>';
        echo '<td class="l">0</td>';
        echo '<td class="t">0</td>';
        echo '<td class="gf">0</td>';
        echo '<td class="ga">0</td>';
        echo '<td class="gd">0</td>';
        echo '<td class="wp">0.00</td>';
    echo '</tr>';
echo '</table>';
        
echo '<table><tbody>';
    echo '<th class="table_head" colspan="8">Schedule</th>';
    echo '<tr><td>Date</td><td>Home</td><td></td><td></td><td><td>Away</td><td>Time/Status</td><td>Game Type</td></tr>';
    echo '<th class="week_head" colspan="8">Week 1 Regular Season</th>';
    echo '<tr><td>TBD</td><td>'; echo $team1 ; echo '</td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team5 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team2 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team6 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team3 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team7 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team4 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team8 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<th class="week_head" colspan="8">Week 2 Regular Season</th>';
    echo '<tr><td>TBD</td><td>'; echo $team5 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team2 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team6 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team3 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team7 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team4 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team8 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team1 ; echo '</td><td>TBD</td><td>Regular</td></tr>';
    echo '<th class="week_head" colspan="8">Week 3 Regular Season</th>';
    echo '<tr><td>TBD</td><td>'; echo $team2 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team6 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team3 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team7 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team4 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team8 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team1 ; echo '</td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team5 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<th class="week_head" colspan="8">Week 4 Regular Season</th>';
    echo '<tr><td>TBD</td><td>'; echo $team6 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team3 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team7 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team4 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team8 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team1 ; echo '</td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team5 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team2 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<th class="week_head" colspan="8">Week 5 Regular Season</th>';
    echo '<tr><td>TBD</td><td>'; echo $team3 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team7 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team4 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team8 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team1 ; echo '</td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team5 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team2 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team6 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<th class="week_head" colspan="8">Week 6 Regular Season</th>';
    echo '<tr><td>TBD</td><td>'; echo $team7 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team4 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team8 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team1 ; echo '</td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team5 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team2 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team6 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team3 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<th class="week_head" colspan="8">Week 7 Regular Season</th>';
    echo '<tr><td>TBD</td><td>'; echo $team4 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team8 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team1 ; echo '</td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team5 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team2 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team6 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<tr><td>TBD</td><td>'; echo $team3 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>'; echo $team7 ; echo ' </td><td>TBD</td><td>Regular</td></tr>';
    echo '<th class="week_head" colspan="8">Week 8 Playoffs</th>';
    echo '<tr><td>TBD</td><td>3rd</td><td class="home_score"></td><td>-</td><td class="away_score"><td>6th</td><td>TBD</td><td>Postseason-QF 1</td></tr>';
    echo '<tr><td>TBD</td><td>4th</td><td class="home_score"></td><td>-</td><td class="away_score"><td>5th</td><td>TBD</td><td>Postseason-QF 2</td></tr>';
    echo '<tr><td>TBD</td><td>2nd</td><td class="home_score"></td><td>-</td><td class="away_score"><td>Winner of QF2</td><td>TBD</td><td>Postseason-SF 1</td></tr>';
    echo '<tr><td>TBD</td><td>1st</td><td class="home_score"></td><td>-</td><td class="away_score"><td>Winner of QF1</td><td>TBD</td><td>Postseason-SF 2</td></tr>';
    echo '<tr><td>TBD</td><td>Winner of SF1</td><td class="home_score"></td><td>-</td><td class="away_score"><td>Winner of SF2</td><td>TBD</td><td>Postseason-Final</td></tr>';
echo '</tbody></table>';
?>
        
    </body>
</html>