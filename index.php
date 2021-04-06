<?php 

    class BytesToBits {
        protected $token;

        function __constructor($token) {
            $this->curl = curl_init();
            $this->token = $token;
            $this->base_url = "https://api.bytestobits.dev/";
            $header_obj->Authorization = $token;
            $this->header = json_encode($header_obj);
        }
        function __destructor() {
            curl_close($this->curl);
        }
    }

?>
