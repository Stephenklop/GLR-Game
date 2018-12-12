<style type="text/css" media="screen">
	table, th, td{
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>

<?php
  require_once 'config.inc.php';

//-----------------------------------------------------------------

  $result = mysqli_query($mysqli, "SELECT * FROM GLR_teams WHERE team_behandeld = 0");

  echo "<h1>Teams die behandeld moeten worden</h1>";

  echo "<table>";

  echo "<tr>";

  echo "<th></th>";
  echo "<th></th>";
  echo "<th>teamID</th>";
  echo "<th>teamnaam</th>";
  echo "<th>teamlogo</th>";
  echo "<th>teamcaptain</th>";
  echo "<th>teamcaptainnummer</th>";
  echo "<th>teamlid1</th>";
  echo "<th>teamlid1nummer</th>";
  echo "<th>teamlid2</th>";
  echo "<th>teamlid2nummer</th>";
  echo "<th>teamlid3</th>";
  echo "<th>teamlid3nummer</th>";
  echo "<th>teamlid4</th>";
  echo "<th>teamlid4nummer</th>";
  echo "<th>teamlid5</th>";
  echo "<th>teamlid5nummer</th>";
  echo "<th>goedgekeurd?</th>";
  echo "<th>Behandeld?</th>";
  echo "<th>t-shirt?</th>";
  echo "</tr>";

  while ($row = mysqli_fetch_array($result)) {

    echo "<tr>";

    echo "<td><a href='teamgoedgekeurd.php?id=" . $row['team_id'] . "'><img src='../img/check.png' alt='goed' width='40'></a></td>";
    echo "<td><a href='teamafgekeurd.php?id=" . $row['team_id'] . "'><img src='../img/x.png' alt='fout' width='50'></a></td>";
    echo "<td>" . $row['team_id'] . "</td>";
    echo "<td>" . $row['team_naam'] . "</td>";
    echo "<td><center><img src='teamlogo/". $row['team_logo'] ."' alt='goed' width='40'></center></td>";
    echo "<td>" . $row['team_captain_naam'] . "</td>";
    echo "<td>" . $row['team_captain_nummer'] . "</td>";
    echo "<td>" . $row['team_lid1_naam'] . "</td>";
    echo "<td>" . $row['team_lid1_nummer'] . "</td>";
    echo "<td>" . $row['team_lid2_naam'] . "</td>";
    echo "<td>" . $row['team_lid2_nummer'] . "</td>";
    echo "<td>" . $row['team_lid3_naam'] . "</td>";
    echo "<td>" . $row['team_lid3_nummer'] . "</td>";
    echo "<td>" . $row['team_lid4_naam'] . "</td>";
    echo "<td>" . $row['team_lid4_nummer'] . "</td>";
    echo "<td>" . $row['team_lid5_naam'] . "</td>";
    echo "<td>" . $row['team_lid5_nummer'] . "</td>";
    echo "<td>" . $row['team_goedkeuring'] . "</td>";
    echo "<td>" . $row['team_behandeld'] . "</td>";
    echo "<td>" . $row['team_donate'] . "</td>";

    echo "</tr>";

  }

  echo "</table>";

//-----------------------------------------------------------------

  echo "<h1>Teams die zijn behandeld</h1>";

  $result2 = mysqli_query($mysqli, "SELECT * FROM GLR_teams WHERE team_behandeld = 1");

  echo "<table>";

  echo "<tr>";

  echo "<th></th>";
  echo "<th>teamID</th>";
  echo "<th>teamnaam</th>";
  echo "<th>teamlogo</th>";
  echo "<th>teamcaptain</th>";
  echo "<th>teamcaptainnummer</th>";
  echo "<th>teamlid1</th>";
  echo "<th>teamlid1nummer</th>";
  echo "<th>teamlid2</th>";
  echo "<th>teamlid2nummer</th>";
  echo "<th>teamlid3</th>";
  echo "<th>teamlid3nummer</th>";
  echo "<th>teamlid4</th>";
  echo "<th>teamlid4nummer</th>";
  echo "<th>teamlid5</th>";
  echo "<th>teamlid5nummer</th>";
  echo "<th>goedgekeurd?</th>";
  echo "<th>Behandeld?</th>";
  echo "<th>t-shirt?</th>";
  echo "</tr>";

  while ($row2 = mysqli_fetch_array($result2)) {

    echo "<tr>";

	echo "<td><a href='teamsettings.php?id=" . $row2['team_id'] . "'><img src='../img/setting.png' alt='goed' width='40'></a></td>";
    echo "<td>" . $row2['team_id'] . "</td>";
    echo "<td>" . $row2['team_naam'] . "</td>";
    echo "<td><center><img src='teamlogo/". $row2['team_logo'] ."' alt='goed' width='40'></center></td>";
    echo "<td>" . $row2['team_captain_naam'] . "</td>";
    echo "<td>" . $row2['team_captain_nummer'] . "</td>";
    echo "<td>" . $row2['team_lid1_naam'] . "</td>";
    echo "<td>" . $row2['team_lid1_nummer'] . "</td>";
    echo "<td>" . $row2['team_lid2_naam'] . "</td>";
    echo "<td>" . $row2['team_lid2_nummer'] . "</td>";
    echo "<td>" . $row2['team_lid3_naam'] . "</td>";
    echo "<td>" . $row2['team_lid3_nummer'] . "</td>";
    echo "<td>" . $row2['team_lid4_naam'] . "</td>";
    echo "<td>" . $row2['team_lid4_nummer'] . "</td>";
    echo "<td>" . $row2['team_lid5_naam'] . "</td>";
    echo "<td>" . $row2['team_lid5_nummer'] . "</td>";
    echo "<td>" . $row2['team_goedkeuring'] . "</td>";
    echo "<td>" . $row2['team_behandeld'] . "</td>";
    echo "<td>" . $row2['team_donate'] . "</td>";

    echo "</tr>";

  }

  echo "</table>";

//-----------------------------------------------------------------

  echo "<h1>Teams die zijn goedgekeurd</h1>";

  $result3 = mysqli_query($mysqli, "SELECT * FROM GLR_teams WHERE team_goedkeuring = 1");

  echo "<table>";

  echo "<tr>";

  echo "<th></th>";
  echo "<th>teamID</th>";
  echo "<th>teamnaam</th>";
  echo "<th>teamlogo</th>";
  echo "<th>teamcaptain</th>";
  echo "<th>teamcaptainnummer</th>";
  echo "<th>teamlid1</th>";
  echo "<th>teamlid1nummer</th>";
  echo "<th>teamlid2</th>";
  echo "<th>teamlid2nummer</th>";
  echo "<th>teamlid3</th>";
  echo "<th>teamlid3nummer</th>";
  echo "<th>teamlid4</th>";
  echo "<th>teamlid4nummer</th>";
  echo "<th>teamlid5</th>";
  echo "<th>teamlid5nummer</th>";
  echo "<th>goedgekeurd?</th>";
  echo "<th>Behandeld?</th>";
  echo "<th>t-shirt?</th>";
  echo "</tr>";

  while ($row3 = mysqli_fetch_array($result3)) {

    echo "<tr>";

    echo "<td><a href='teamsettings.php?id=" . $row3['team_id'] . "'><img src='../img/setting.png' alt='goed' width='40'></a></td>";
    echo "<td>" . $row3['team_id'] . "</td>";
    echo "<td>" . $row3['team_naam'] . "</td>";
    echo "<td><center><img src='teamlogo/". $row3['team_logo'] ."' alt='goed' width='40'></center></td>";
    echo "<td>" . $row3['team_captain_naam'] . "</td>";
    echo "<td>" . $row3['team_captain_nummer'] . "</td>";
    echo "<td>" . $row3['team_lid1_naam'] . "</td>";
    echo "<td>" . $row3['team_lid1_nummer'] . "</td>";
    echo "<td>" . $row3['team_lid2_naam'] . "</td>";
    echo "<td>" . $row3['team_lid2_nummer'] . "</td>";
    echo "<td>" . $row3['team_lid3_naam'] . "</td>";
    echo "<td>" . $row3['team_lid3_nummer'] . "</td>";
    echo "<td>" . $row3['team_lid4_naam'] . "</td>";
    echo "<td>" . $row3['team_lid4_nummer'] . "</td>";
    echo "<td>" . $row3['team_lid5_naam'] . "</td>";
    echo "<td>" . $row3['team_lid5_nummer'] . "</td>";
    echo "<td>" . $row3['team_goedkeuring'] . "</td>";
    echo "<td>" . $row3['team_behandeld'] . "</td>";
    echo "<td>" . $row3['team_donate'] . "</td>";

    echo "</tr>";

  }

    echo "</table>";

//-----------------------------------------------------------------

  echo "<h1>Teams die zijn afgekeurd</h1>";

  $result4 = mysqli_query($mysqli, "SELECT * FROM GLR_teams WHERE team_goedkeuring = 0 AND team_behandeld = 1");

  echo "<table>";

  echo "<tr>";

  echo "<th></th>";
  echo "<th>teamID</th>";
  echo "<th>teamnaam</th>";
  echo "<th>teamlogo</th>";
  echo "<th>teamcaptain</th>";
  echo "<th>teamcaptainnummer</th>";
  echo "<th>teamlid1</th>";
  echo "<th>teamlid1nummer</th>";
  echo "<th>teamlid2</th>";
  echo "<th>teamlid2nummer</th>";
  echo "<th>teamlid3</th>";
  echo "<th>teamlid3nummer</th>";
  echo "<th>teamlid4</th>";
  echo "<th>teamlid4nummer</th>";
  echo "<th>teamlid5</th>";
  echo "<th>teamlid5nummer</th>";
  echo "<th>goedgekeurd?</th>";
  echo "<th>Behandeld?</th>";
  echo "<th>t-shirt?</th>";
  echo "</tr>";

  while ($row4 = mysqli_fetch_array($result4)) {

    echo "<tr>";

    echo "<td><a href='teamsettings.php?id=" . $row4['team_id'] . "'><img src='../img/setting.png' alt='goed' width='40'></a></td>";
    echo "<td>" . $row4['team_id'] . "</td>";
    echo "<td>" . $row4['team_naam'] . "</td>";
    echo "<td><center><img src='teamlogo/". $row4['team_logo'] ."' alt='goed' width='40'></center></td>";
    echo "<td>" . $row4['team_captain_naam'] . "</td>";
    echo "<td>" . $row4['team_captain_nummer'] . "</td>";
    echo "<td>" . $row4['team_lid1_naam'] . "</td>";
    echo "<td>" . $row4['team_lid1_nummer'] . "</td>";
    echo "<td>" . $row4['team_lid2_naam'] . "</td>";
    echo "<td>" . $row4['team_lid2_nummer'] . "</td>";
    echo "<td>" . $row4['team_lid3_naam'] . "</td>";
    echo "<td>" . $row4['team_lid3_nummer'] . "</td>";
    echo "<td>" . $row4['team_lid4_naam'] . "</td>";
    echo "<td>" . $row4['team_lid4_nummer'] . "</td>";
    echo "<td>" . $row4['team_lid5_naam'] . "</td>";
    echo "<td>" . $row4['team_lid5_nummer'] . "</td>";
    echo "<td>" . $row4['team_goedkeuring'] . "</td>";
    echo "<td>" . $row4['team_behandeld'] . "</td>";
    echo "<td>" . $row4['team_donate'] . "</td>";

    echo "</tr>";

  }

    echo "</table>";

//-----------------------------------------------------------------
?>
