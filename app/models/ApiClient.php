<?php
class ApiClient {
    private $url;

    public function __construct($url) {
        $this->url = $url;
    }

    public function fetchData() {
        $response = file_get_contents($this->url);
        if ($response === FALSE) {
            throw new Exception("Failed to fetch data from API");
        }
        $data = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception('Failed to decode JSON: ' . json_last_error_msg());
        }
        return $data;
    }

    public function setUrl ($url) {
        $this->url = $url;
    }
}
