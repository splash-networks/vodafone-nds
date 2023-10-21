<?php

$survey_response = "";
foreach($_POST as $key => $value) {
    if (str_contains($key, "surveyquestion")) {
        $survey_response = $survey_response . $value . ",";
    }
}
$survey_response = substr($survey_response, 0, -1);
$survey_response = $survey_response . "\n";
$append_response = fopen('database.txt','a');
fwrite($append_response, $survey_response);
fclose($append_response);