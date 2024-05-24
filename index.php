<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPL Indonesia Season 13</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>MPL Indonesia Season 13</h1>
        <?php
        require_once 'EsportMatch.php';
        $esportMatch = new EsportMatch();
        $teams = $esportMatch->getAllTeams();

        if (isset($_GET['team'])) {
            $teamName = htmlspecialchars($_GET['team']);
            $info = $esportMatch->getTeamInfo($teamName);
            
            if ($info) {
                echo "<h2>Informasi Tim: " . $info['name'] . "</h2>";
                echo "<table>";
                echo "<tr><th>Rank</th><th>Nama Tim</th><th>Match Terakhir</th><th>Menang</th><th>Kalah</th></tr>";
                echo "<tr><td>" . $info['rank'] . "</td><td>" . $info['name'] . "</td><td>" . $info['last_match'] . "</td><td>" . $info['wins'] . "</td><td>" . $info['losses'] . "</td></tr>";
                echo "</table>";
                echo "<a href='index.php'>Kembali ke daftar tim</a>";
            } else {
                echo "<p>Informasi tidak ditemukan untuk tim: $teamName</p>";
                echo "<a href='index.php'>Kembali ke daftar tim</a>";
            }
        } elseif (isset($_GET['view']) && $_GET['view'] === 'rankings') {
            echo "<h2>Rangking Tim</h2>";
            echo "<table>";
            echo "<tr><th>Rank</th><th>Nama Tim</th><th>Menang</th><th>Kalah</th></tr>";
            foreach ($teams as $team) {
                $info = $esportMatch->getTeamInfo($team);
                echo "<tr><td>" . $info['rank'] . "</td><td>" . $info['name'] . "</td><td>" . $info['wins'] . "</td><td>" . $info['losses'] . "</td></tr>";
            }
            echo "</table>";
            echo "<a href='index.php'>Kembali ke daftar tim</a>";
        } elseif (isset($_GET['view']) && $_GET['view'] === 'matches') {
            echo "<h2>DRincian Hasil Pertandingan</h2>";
            echo "<table>";
            echo "<tr><th>Team 1</th><th>Team 2</th><th>Hasil</th></tr>";
            $matches = $esportMatch->getAllMatches();
            foreach ($matches as $match) {
                echo "<tr><td>" . $match['team1'] . "</td><td>" . $match['team2'] . "</td><td>" . $match['result'] . "</td></tr>";
            }
            echo "</table>";
            echo "<a href='index.php'>Kembali ke daftar tim</a>";
        } else {
            echo "<h2>Daftar Tim</h2>";
            echo "<ul>";
            foreach ($teams as $team) {
                echo "<li><a href='index.php?team=" . urlencode($team) . "'>" . htmlspecialchars($team) . "</a></li>";
            }
            echo "</ul>";
            echo "<a href='index.php?view=rankings'>Lihat Tabel Rangking</a><br>";
            echo "<a href='index.php?view=matches'>Rincian Hasil Pertandingan</a>";
        }
        ?>
    </div>
</body>
</html>
