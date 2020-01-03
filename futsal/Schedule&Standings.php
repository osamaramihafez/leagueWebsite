<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MAA - Schedule and Standings</title>
        <link rel="stylesheet" href="../futsal/mainLeague.css">
    </head>
    <body>

<!--        <img id=logo src="images/Logo.jpg">-->
        <center>
         <ul class = "a">
<!--          <li class = "b"><a href="index.html">Home</a></li>-->
<!--          <li class = "b"><a href="about.html">About</a></li>-->
          <li class = "b sched"><a class="active" href="Schedule&Standings.php">Schedule/Standings</a></li>
<!--      
          <li class = "b"><a href="Sign-up.html"> Register</a></li>
          <li class = "b"><a href="contact.html">Contact</a></li>
          <li class = "b"><a href="about.html">Initiatives</a></li>
-->

        </ul>
        </center>

<script>
    
//    var disp;    
    
    function hide(){
        var schedule = document.getElementById("schedule");
        disp = schedule.style.display;
        console.log(disp);
        schedule.style.display = "none";
    }
    
    function resetSched(){
        var schedule = document.getElementById("schedule");
        var i = 0;
//        console.log(disp);
        schedule.style.display = "";
        for (;i<schedule.rows.length; i++){
            schedule.rows[i].style.display = "";
        }
        console.log("showing table");   
    }

    function selectTeam(team){

//        var team = document.getElementsByClassName("team_button");
        var schedule = document.getElementById("schedule");
        resetSched();
        var i = 0;
        var x = 0;
        var left;
        var right;
//        console.log(schedule);

        for (;i<schedule.rows.length; i++){
//            console.log("inside");
//            console.log(team);
//            console.log(schedule.rows[i].cells[1]);
            try{
                left = schedule.rows[i].cells[1].innerHTML.trim().replace(/&nbsp;/g, '');
                right = schedule.rows[i].cells[5].innerHTML.trim().replace(/&nbsp;/g, '');
              }
              catch(SyntaxError){
                  console.log("Info " + x);
              }
              // if (!containString(team, left) && !containString(team, right)){
              if (team != left && team!=right){
                      schedule.rows[i].style.display = "none";
//                      schedule.style.display = "none";
                       console.log(team);
                      // console.log(left);
                      // console.log(right);
                    // console.log(schedule.rows[i].cells[5]);
                  }
                else{
                    x++;
//                      console.log(team);
//                      console.log(left);
//                      console.log(right);
//                    console.log("game " + x + " for " + team);
                }
        }
    }
//    document.getElementById("team_button").onclick = selectTeam();

</script>

<!--        <input class="team_button" onClick="selectTeam(this.value)" type="button" value="ahgsdvahgsvdhasvg"/>-->
<!--    <div id="everything">-->
<!--    <table id="schedule">-->
        
<?php

    $team1 = "Joga Bonito";
    $team2 = "adasasdasd";
    $team3 = "qwertyuiop";
    $team4 = "hghghghghg";
    $team5 = "Asdasdasdasdasdasdasdas";
    $team6 = "Team 6";
    $team7 = "Team 7";
    $team8 = "Team 8";

 echo '
 <center>
    <div id="everything">
    <table id="standings">
     <th class="table_head" colspan="10">
     Standings
     </th>
     <tr id="standings">
         <th class="team">Team</th>
         <th class="gp">GP</th>
         <th>PTS</th>
         <th >W</th>
         <th>L</th>
         <th>T</th>
         <th class="gf">GF</th>
         <th class="ga">GA</th>
         <th class="gd">GD</th>
         <th class="wp">WP</th>
     </tr>
     <tr>
         <td class="teams auto_semi"> <input class="team_button" onClick="selectTeam(this.value)" type="button" value="'; echo $team1 ; echo '"/> </td>
         <td class="gp">0</td>
         <td class="pts">0</td>
         <td class="w">0</td>
         <td class="l">0</td>
         <td class="t">0</td>
         <td class="gf">0</td>
         <td class="ga">0</td>
         <td class="gd">0</td>
         <td class="wp">0.00</td>
     </tr>
     <tr>
         <td class="teams auto_semi">  <input class="team_button" onClick="selectTeam(this.value)" type="button" value=" '; echo $team2 ; echo '"/> </td>
         <td class="gp">0</td>
         <td class="pts">0</td>
         <td class="w">0</td>
         <td class="l">0</td>
         <td class="t">0</td>
         <td class="gf">0</td>
         <td class="ga">0</td>
         <td class="gd">0</td>
         <td class="wp">0.00</td>
     </tr>
     <tr>
         <td class="teams team">  <input class="team_button" onClick="selectTeam(this.value)" type="button" value="'; echo $team3 ; echo '"/>  </td>
         <td class="gp">0</td>
         <td class="pts">0</td>
         <td class="w">0</td>
         <td class="l">0</td>
         <td class="t">0</td>
         <td class="gf">0</td>
         <td class="ga">0</td>
         <td class="gd">0</td>
         <td class="wp">0.00</td>
     </tr>
     <tr>
         <td class="teams team">  <input class="team_button" onClick="selectTeam(this.value)" type="button" value="'; echo $team4 ; echo '"/>  </td>
         <td class="gp">0</td>
         <td class="pts">0</td>
         <td class="w">0</td>
         <td class="l">0</td>
         <td class="t">0</td>
         <td class="gf">0</td>
         <td class="ga">0</td>
         <td class="gd">0</td>
         <td class="wp">0.00</td>
     </tr>
     <tr>
         <td class="teams team">  <input class="team_button" onClick="selectTeam(this.value)" type="button" value="'; echo $team5 ; echo '"/>  </td>
         <td class="gp">0</td>
         <td class="pts">0</td>
         <td class="w">0</td>
         <td class="l">0</td>
         <td class="t">0</td>
         <td class="gf">0</td>
         <td class="ga">0</td>
         <td class="gd">0</td>
         <td class="wp">0.00</td>
     </tr>
     <tr>
         <td class="teams team">  <input class="team_button" onClick="selectTeam(this.value)" type="button" value="'; echo $team6 ; echo '"/>  </td>
         <td class="gp">0</td>
         <td class="pts">0</td>
         <td class="w">0</td>
         <td class="l">0</td>
         <td class="t">0</td>
         <td class="gf">0</td>
         <td class="ga">0</td>
         <td class="gd">0</td>
         <td class="wp">0.00</td>
     </tr>
     <tr>
         <td class="teams knocked_out">  <input class="team_button" onClick="selectTeam(this.value)" type="button" value="'; echo $team7 ; echo '"/>  </td>
         <td class="gp">0</td>
         <td class="pts">0</td>
         <td class="w">0</td>
         <td class="l">0</td>
         <td class="t">0</td>
         <td class="gf">0</td>
         <td class="ga">0</td>
         <td class="gd">0</td>
         <td class="wp">0.00</td>
     </tr>
     <tr>
         <td class="teams knocked_out">  <input class="team_button" onClick="selectTeam(this.value)" type="button" value="'; echo $team8 ; echo '"/>  </td>
         <td class="gp">0</td>
         <td class="pts">0</td>
         <td class="w">0</td>
         <td class="l">0</td>
         <td class="t">0</td>
         <td class="gf">0</td>
         <td class="ga">0</td>
         <td class="gd">0</td>
         <td class="wp">0.00</td>
     </tr>
 </table>

    <input type="button" id="hidesched" value="See full schedule" onClick="resetSched()" />
<!--    <input type="button" id="fullsched" value="hide sched" onClick="hide()" /> -->

 <table id="schedule"><tbody>
     <th class="table_head" colspan="8">Schedule</th>
     <tr><td>Date</td><td>Home</td><td></td><td></td><td><td>Away</td><td>Time/Status</td><td>Game Type</td></tr>
     <th class="week_head" colspan="8">Week 1 Regular Season</th>
     <tr><td>TBD</td><td>  '; echo $team1 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team5 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team2 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team6 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team3 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team7 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team4 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team8 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <th class="week_head" colspan="8">Week 2 Regular Season</th>
     <tr><td>TBD</td><td>  '; echo $team6 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team1 ; echo ' </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team7 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team2 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team8 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team3 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team5 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team4 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     
     <th class="week_head" colspan="8">Week 3 Regular Season</th>
     <tr><td>TBD</td><td>  '; echo $team1 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team7 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team2 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team8 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team3 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team5 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team4 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team6 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <th class="week_head" colspan="8">Week 4 Regular Season</th>
     <tr><td>TBD</td><td>  '; echo $team8 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team1 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team5 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team2 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team6 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team3 ; echo ' </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team7 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team4 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <th class="week_head" colspan="8">Week 5 Regular Season</th>
     <tr><td>TBD</td><td>  '; echo $team1 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team2 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team3 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team4 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team5 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team6 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team7 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team8 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <th class="week_head" colspan="8">Week 6 Regular Season</th>
     <tr><td>TBD</td><td>  '; echo $team1 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team3 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team2 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team4 ; echo ' </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team5 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team7 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team6 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team8 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <th class="week_head" colspan="8">Week 7 Regular Season</th>
     <tr><td>TBD</td><td>  '; echo $team1 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team4 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team2 ; echo ' </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team3 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team5 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team8 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <tr><td>TBD</td><td>  '; echo $team6 ; echo '  </td><td class="home_score"></td><td>-</td><td class="away_score"></td><td>  '; echo $team7 ; echo '  </td><td>TBD</td><td>Regular</td></tr>
     <th class="week_head" colspan="8">Week 8 Playoffs</th>
     <tr><td>TBD</td><td>3rd</td><td class="home_score"></td><td>-</td><td class="away_score"><td>6th</td><td>TBD</td><td>Postseason-QF 1</td></tr>
     <tr><td>TBD</td><td>4th</td><td class="home_score"></td><td>-</td><td class="away_score"><td>5th</td><td>TBD</td><td>Postseason-QF 2</td></tr>
     <tr><td>TBD</td><td>2nd</td><td class="home_score"></td><td>-</td><td class="away_score"><td>Winner of QF2</td><td>TBD</td><td>Postseason-SF 1</td></tr>
     <tr><td>TBD</td><td>1st</td><td class="home_score"></td><td>-</td><td class="away_score"><td>Winner of QF1</td><td>TBD</td><td>Postseason-SF 2</td></tr>
     <tr><td>TBD</td><td>Winner of SF1</td><td class="home_score"></td><td>-</td><td class="away_score"><td>Winner of SF2</td><td>TBD</td><td>Postseason-Final</td></tr>
 </tbody></table>
</div>
</center>
'
?>

    </body>
</html>
