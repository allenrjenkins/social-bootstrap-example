<?php

class User {

    var $userUrl = 'https://randomuser.me/api/';

    public function recently_active_members() {
        $results = $this->make_request(9);
        $data = $this->format_request($results);
        return $data;
    }

    public function latest_activity() {
        $results = $this->make_request(4);
        $data = $this->format_request($results); 
        return $data;
    }
    
    private function format_request($data) {
        $dataResults = json_decode($data, true);
        return $dataResults['results'];
    }

    private function make_request($limit = 5) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->userUrl . '?results=' . $limit
        ));
        $resp = curl_exec($curl);
        curl_close($curl);

        return $resp;
    }

}
