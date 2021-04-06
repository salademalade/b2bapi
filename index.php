<?php 

    class BytesToBits {
        protected $token;

        function __construct($token) {
            $this->curl = curl_init();
            $this->token = $token;
            $this->base_url = "https://api.bytestobits.dev/";
            $this->headers = array(
                "Authorization: ".$token
            );
        }
        function __destruct() {
            curl_close($this->curl);
        }
        function text() {
            curl_setopt($this->curl, CURLOPT_URL, "https://api.bytestobits.dev/text");
            curl_setopt($this->curl, CURLOPT_HTTPHEADER, $this->headers);
            curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($this->curl);
            return $result;
        }
    }

?>
