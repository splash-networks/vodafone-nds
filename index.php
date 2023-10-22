<?php

$authaction = $_POST['authaction'];
$tok = $_POST['tok'];
$redir = $_POST['redir'];

$survey_response = "";
foreach($_POST as $key => $value) {
    if (str_contains($key, "surveyquestion")) {
        $survey_response = $survey_response . $value . ",";
    }
}
$survey_response = substr($survey_response, 0, -1);
$survey_response = $survey_response;
$append_response = fopen('database.txt','a');
fwrite($append_response, $survey_response);
fclose($append_response);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>

<form name="auth" action="<?php echo htmlspecialchars($authaction); ?>" method="get">
    <input type="hidden" name="tok" value="<?php echo htmlspecialchars($tok); ?>">
    <input type="hidden" name="redir" value="<?php echo htmlspecialchars($redir); ?>">
</form>

<script>
    document.auth.submit();
</script>
</body>