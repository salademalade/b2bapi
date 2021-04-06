<?php 

    class BytesToBits {
        protected $token;

        function __constructor($token) {
            $this->token = $token;
            $this->base_url = "https://api.bytestobits.dev/";
            $header_obj->Authorization = $token;
            $this->header = json_encode($header_obj);
        }
    }

?>
