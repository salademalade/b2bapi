<?php 

    class BytesToBits {
        public $token;

        function __construct($token) {
            $this->base_url = "https://api.bytestobits.dev/";
            $this->headers = array(
                "Authorization: ".$token
            );
        }
        function word() {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $this->base_url."word");
            curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
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
        function text() {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $this->base_url."text");
            curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
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
        function madlibs() {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $this->base_url."madlibs");
            curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $result = curl_exec($curl);
            if (curl_error($curl)) {
                $err = curl_error($curl);
                curl_close($curl);
                return $err;
            }
            else {
                curl_close($curl);
                return json_decode($result, true);
            }
        }
        function meme() {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $this->base_url."meme");
            curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $result = curl_exec($curl);
            if (curl_error($curl)) {
                $err = curl_error($curl);
                curl_close($curl);
                return $err;
            }
            else {
                curl_close($curl);
                return json_decode($result, true);
            }
        }
        function reddit() {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $this->base_url."reddit");
            curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $result = curl_exec($curl);
            if (curl_error($curl)) {
                $err = curl_error($curl);
                curl_close($curl);
                return $err;
            }
            else {
                curl_close($curl);
                return json_decode($result, true);
            }
        }
        function lyrics() {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $this->base_url."lyrics");
            curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $result = curl_exec($curl);
            if (curl_error($curl)) {
                $err = curl_error($curl);
                curl_close($curl);
                return $err;
            }
            else {
                curl_close($curl);
                return json_decode($result, true);
            }
        }
        function info() {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $this->base_url."info");
            curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $result = curl_exec($curl);
            if (curl_error($curl)) {
                $err = curl_error($curl);
                curl_close($curl);
                return $err;
            }
            else {
                curl_close($curl);
                return json_decode($result, true);
            }
        }
    }

?>
