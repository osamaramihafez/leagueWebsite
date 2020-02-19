#Index.html

from divison import division

FILE = "../index.html"

"<!DOCTYPE html> \r\n\
<html> \r\n\
 \r\n\
    <head> <meta charset='utf-8'> <meta http-equiv='X-UA-Compatible' \r\n\
    content='IE=edge'> \r\n\
        <title>MAA - Soccer League Home</title> \r\n\
        <link rel='stylesheet' href='mainLeague.css'> \r\n\
 \r\n\
    </head> \r\n\
    <body> \r\n\
        <div id='infopg'> \r\n\
        <center> \r\n\
        <img id='Logo' src='images/MAAlogo.png'> \r\n\
        </center> \r\n\
        <ul class = 'a'> \r\n\
            <li class = 'b'><a class='active' href='index.html'>Home</a></li> \r\n\
            <li class = 'b'><a href='sched.html'> Schedules and Standings </a></li> \r\n\
            <li class='b'><a id='more'>More to come soon!</a></li> \r\n\
        </ul>  \r\n\
 \r\n\
            <div id='schedandstand'> \r\n\
 \r\n\
    <center><table id='standings'>  \r\n\
    <th class='table_head' colspan='4'>LEAGUE TOP GOALSCORERS</th>  \r\n\
    <tr id='standings'> \r\n\
        <th class='position'></th> \r\n\
        <th class='player'>Player</th> \r\n\
        <th class='teams team'>Team</th> \r\n\
        <th class='goals'>Goals</th> \r\n\
        </tr> \r\n\
 \r\n\
 \r\n\
 \r\n\
<tr id='first'><td class='position'>1. </td> \r\n\
<td class='player first'>M. Radi</td>  \r\n\
<td class='teams team'>Eagles FC</td>  \r\n\
<td class='goals'>16</td>  \r\n\
</tr> \r\n\
<tr><td class='position'>2. </td>  \r\n\
<td class='player'>M. Zarba</td>  \r\n\
<td class='teams team'>Brothers</td>  \r\n\
<td class='goals'>13</td>  \r\n\
</tr> \r\n\
<tr><td class='position'>3. </td>  \r\n\
<td class='player'>T. Alikhan</td>  \r\n\
<td class='teams team'>Liverpool</td>  \r\n\
<td class='goals'>10</td>  \r\n\
 \r\n\
</tr> \r\n\
<tr><td class='position'>4. </td>  \r\n\
<td class='player'>Mazen Elzamel</td>  \r\n\
<td class='teams team'>Joga Bonito</td>  \r\n\
<td class='goals'>10</td>  \r\n\
 \r\n\
</tr> \r\n\
<tr><td class='position'>5. </td>  \r\n\
<td class='player'>A. Magdy</td>  \r\n\
<td class='teams team'>Tolba F.C.</td>  \r\n\
<td class='goals'>9</td>  \r\n\
 \r\n\
</tr> \r\n\
<tr><td class='position'>6. </td>  \r\n\
<td class='player'>Usama Said</td>  \r\n\
<td class='teams team'>Liverpool</td>  \r\n\
<td class='goals'>7</td>  \r\n\
 \r\n\
</tr> \r\n\
<tr><td class='position'>7. </td>  \r\n\
<td class='player'>Faisal Hamdan</td>  \r\n\
<td class='teams team'>Team 16</td>  \r\n\
<td class='goals'>6</td>  \r\n\
 \r\n\
</tr> \r\n\
<tr><td class='position'>8. </td>  \r\n\
<td class='player'>Abdullah Ragab</td>  \r\n\
<td class='teams team'>Black Horse</td>  \r\n\
<td class='goals'>8</td>  \r\n\
 \r\n\
</tr> \r\n\
<tr><td class='position'>9. </td>  \r\n\
<td class='player'>Boody Metwaly</td>  \r\n\
<td class='teams team'>Joga Bonito</td>  \r\n\
<td class='goals'>6</td>  \r\n\
 \r\n\
</tr>\r\n\
<tr><td class='position'>10. </td> \r\n\
<td class='player'>M. Salah</td> \r\n\
<td class='teams team'>Dream F.C</td> \r\n\
<td class='goals'>5</td> \r\n\
\r\n\
</tr>\r\n\
\r\n\
    </table></center></div>\r\n\
\r\n\
    <center>\r\n\
    <br>  \r\n\
        <div id='sponsor'>\r\n\
        <h2 id='potw'>PLAYER OF THE WEEK</h2> <h4 id='week'><em>February 8th</em></h4>\r\n\
        <div class='container_2'>\r\n\
        <img id='BFMVPimg_2' src='images/BFMVP5.jpeg'>\r\n\
            <div class='right_2'>\r\n\
    <h3 id='mvpname'><em>Unknown</em></h3>\r\n\
    <h5 id='team_name'>Brothers FC</h5>\r\n\
    <hr>\r\n\
    </div>\r\n\
    </div>\r\n\
    <img id='bf' src='images/BugerFactory.png'>\r\n\ "

post_burger = "    </div>\r\n\
    </center>        \r\n\
        </div>        \r\n\
    </body>\r\n\
</html>\r\n\
"

f = open(FILE)