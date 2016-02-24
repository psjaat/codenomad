<?php $result = file_get_contents('https://api.edmunds.com/api/vehicle/v2/makes?state=new&fmt=json&api_key=dpvnky8urkuc95prg983sgb9');
$results[] = json_decode($result);

foreach($results->makes as $pankaj)
{
		echo $pankaj->name;
		echo "<br/>";
}
echo "<pre>";
  print_r($results);
echo "</pre>";
?>