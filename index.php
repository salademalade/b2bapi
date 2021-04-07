<?php 

    class BytesToBits {
        public $token;

        function __construct($token) {
            $this->base_url = "https://api.bytestobits.dev/";
            $this->headers = array(
                "Authorization: ".$token
            );
        }
        function text() {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $this->base_url."text");
            curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
            curl_setopt($curl, CURLOPT_HEADER, 1);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $result = curl_exec($curl);
            if (curl_error($curl)) {
                $err = curl_error($curl);
                curl_close($curl);
                return $err;
            }
            else {
                curl_close($curl);
                return $result;
            }
        }
    }

?>
