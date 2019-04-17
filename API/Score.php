<?php
    function curl($url) {

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            $data = curl_exec($ch);
            curl_close($ch);

            return $data;
        }
        $urlContent = curl('http://localhost/swe2/API/scors.php');
        $Array= json_decode($urlContent, true);
        echo ' the score is '.$Array->"Score";
?>
