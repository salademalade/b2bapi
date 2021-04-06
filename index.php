<?php 

    class BytesToBits {
        protected $token;

        function __construct($token) {
            $this->curl = curl_init();
            $this->token = $token;
            $this->base_url = "https://api.bytestobits.dev/";
            $header_obj->Authorization = $token;
            $this->header = json_encode($header_obj);
        }
        function __destruct() {
            curl_close($this->curl);
        }
    }

?>
