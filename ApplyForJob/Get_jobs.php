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
     $urlContents = curl("http://localhost/test/swe/API/jobs.php")
      $arrayjobs=json_decode($urlContent,true);
     foreach ($arrayjobs as $character) {
	      echo $character->"job Title" . '<br>';
        echo $character->"city" . '<br>';
        echo $character->"CName" . '<br>';
        echo $character->"Vacancies" . '<br>';
}
?>
