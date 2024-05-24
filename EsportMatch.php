<?php

class EsportMatch {
    private $teams = [
        'Bigetron Alpha' => ['name' => 'Bigetron Alpha', 'rank' => 1, 'last_match' => 'Win vs ONIC Esport', 'wins' => 5, 'losses' => 0],
        'ONIC Esport' => ['name' => 'ONIC Esport', 'rank' => 2, 'last_match' => 'Lose vs Bigetron Alpha', 'wins' => 4, 'losses' => 1],
        'Liquid Aura' => ['name' => 'Liquid Aura', 'rank' => 3, 'last_match' => 'Win vs EVOS Glory', 'wins' => 2, 'losses' => 3],
        'EVOS Glory' => ['name' => 'EVOS Glory', 'rank' => 4, 'last_match' => 'Lose vs Liquid Aura', 'wins' => 2, 'losses' => 3],
        'RRQ Hoshi' => ['name' => 'RRQ Hoshi', 'rank' => 5, 'last_match' => 'Win vs Geek Fam', 'wins' => 1, 'losses' => 4],
        'Geek Fam' => ['name' => 'Geek Fam', 'rank' => 6, 'last_match' => 'Lose vs RRQ Hoshi', 'wins' => 1, 'losses' => 4],
    ];

    private $matches = [
        ['team1' => 'Bigetron Alpha', 'team2' => 'Liquid Aura', 'result' => '2-1'],
        ['team1' => 'Geek Fam', 'team2' => 'EVOS Glory', 'result' => '0-2'],
        ['team1' => 'ONIC Esport', 'team2' => 'RRQ Hoshi', 'result' => '2-0'],
        ['team1' => 'Bigetron Alpha', 'team2' => 'Geek Fam', 'result' => '2-0'],
        ['team1' => 'EVOS Glory', 'team2' => 'RRQ Hoshi', 'result' => '2-1'],
        ['team1' => 'ONIC Esport', 'team2' => 'Liquid Aura', 'result' => '2-1'],
        ['team1' => 'EVOS Glory', 'team2' => 'Bigetron Alpha', 'result' => '1-2'],
        ['team1' => 'Geek Fam', 'team2' => 'ONIC Esport', 'result' => '1-2'],
        ['team1' => 'Liquid Aura', 'team2' => 'RRQ Hoshi', 'result' => '2-1'],
        ['team1' => 'RRQ Hoshi', 'team2' => 'Bigetron Alpha', 'result' => '0-2'],
        ['team1' => 'ONIC Esport', 'team2' => 'EVOS Glory', 'result' => '2-1'],
        ['team1' => 'Liquid Aura', 'team2' => 'Geek Fam', 'result' => '1-2'],
        ['team1' => 'RRQ Hoshi', 'team2' => 'Geek Fam', 'result' => '2-1'],
        ['team1' => 'Bigetron Alpha', 'team2' => 'ONIC Esport', 'result' => '2-1'],
        ['team1' => 'Liquid Aura', 'team2' => 'EVOS Glory', 'result' => '2-0'],
        
    ];

    public function getTeamInfo($teamName) {
        if (array_key_exists($teamName, $this->teams)) {
            return $this->teams[$teamName];
        } else {
            return null;
        }
    }

    public function getAllTeams() {
        return array_keys($this->teams);
    }

    public function getAllMatches() {
        return $this->matches;
    }
}

?>
