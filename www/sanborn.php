<?php 


$xmlstr = file_get_contents('sanRealTime.xml');

$weather = new SimpleXMLElement($xmlstr);

echo '<h2>Current Weather Conditions @ <a href="http://aes.missouri.edu/sanborn/weather/sanreal.stm">Sanborn Field</a> '.$weather->stationData[0]->reportTime.' </h2>';
echo '<table width="75%" cellpadding="25px">';

echo '<tr><td>Temperature</td><td>'.$weather->stationData[0]->currentTemperatureF.'&deg;F/'.$weather->stationData[0]->currentTemperatureC.'&deg;C</td></tr>';
if (!empty($weather->stationData[0]->windChillF) ){
echo '<tr><td>Wind Chill</td><td>'.$weather->stationData[0]->windChillF.'&deg;F/'.$weather->stationData[0]->windChillC.'&deg;C</td></tr>';

}
if (!empty($weather->stationData[0]->heatIndexF) ){
echo '<tr><td>Heat Index</td><td>'.$weather->stationData[0]->heatIndexF.'&deg;F/'.$weather->stationData[0]->heatIndexC.'&deg;C</td></tr>';
}
echo '<tr><td>Dew Point</td><td>'.$weather->stationData[0]->dewPointF.'&deg;F/'.$weather->stationData[0]->dewPointC.'&deg;C</td></tr>';
echo '<tr><td>Humidity</td><td>'.$weather->stationData[0]->relativeHumidity.'&#37;'.'</td></tr>';
echo '<tr><td>Wind Speed</td><td>'.$weather->stationData[0]->windSpeedMPH.'MPH '.$weather->stationData[0]->windDirection.'</td></tr>';
echo '<tr><td>Peak Wind Speed</td><td>'.$weather->stationData[0]->peakWindMPH.'MPH at '.$weather->stationData[0]->prevPeakWindTime.'</td></tr>';

echo '<tr><td>Soil Temp (2 inches)</td><td>'.$weather->stationData[0]->soil2TempF.'&deg;F/'.$weather->stationData[0]->soil2TempC.'&deg;C</td></tr>';
echo '<tr><td>Soil Temp (4 inches)</td><td>'.$weather->stationData[0]->soil4TempF.'&deg;F/'.$weather->stationData[0]->soil4TempC.'&deg;C</td></tr>';

if(($weather->stationData[0]->barometricTrend) == 1){
	$pressureTrend = "Rising";
} else {
	$pressureTrend = "Falling";
}
echo '<tr><td>Barometric Pressure</td><td>'.$weather->stationData[0]->barometricPressureIN.' IN - '.$pressureTrend.'</td></tr>';

if (($weather->stationData[0]->accumulatedPrecipitationIN)  > 0){
echo '<tr><td>Accumulated Precip. </td><td>'.$weather->stationData[0]->accumulatedPrecipitationIN.' IN</td></tr>';
}

echo '<tr><td>Sunrise </td><td>'.$weather->stationData[0]->sunriseTime.'</td></tr>';
echo '<tr><td>Sunset </td><td>'.$weather->stationData[0]->sunsetTime.'</td></tr>';


echo '</table>';
	

?>