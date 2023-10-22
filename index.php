<?php

session_start();

if (isset($_POST['verify'])) {
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

    header("location: thanks.php");
} else {
//    $_SESSION['authaction'] = $_POST['authaction'];
//    $_SESSION['tok'] = $_POST['tok'];
//    $_SESSION['redir'] = $_POST['redir'];
    print_r($_POST);
}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>Survey</title>
</head>
<body>
  <div class="text-center">
    <img src="logo-black.svg" alt="">
  </div>
    <section class="p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" name="survey" action="index.php">
                                <div class="mb-3">
                                    <label for="surveyquestion1" class="form-label">Question 1</label>
                                    <select class="form-control" name="surveyquestion1" id="surveyquestion1">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="surveyquestion2" class="form-label">Question 2</label>
                                    <select class="form-control" name="surveyquestion2" id="surveyquestion2">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="surveyquestion3" class="form-label">Question 3</label>
                                    <select class="form-control" name="surveyquestion3" id="surveyquestion3">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="surveyquestion4" class="form-label">Question 4</label>
                                    <select class="form-control" name="surveyquestion4" id="surveyquestion4">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="surveyquestion5" class="form-label">Question 5</label>
                                    <select class="form-control" name="surveyquestion5" id="surveyquestion5">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="surveyquestion6" class="form-label">Question 6</label>
                                    <select class="form-control" name="surveyquestion6" id="surveyquestion6">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="surveyquestion7" class="form-label">Question 7</label>
                                    <select class="form-control" name="surveyquestion7" id="surveyquestion7">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="surveyquestion8" class="form-label">Question 8</label>
                                    <select class="form-control" name="surveyquestion8" id="surveyquestion8">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="surveyquestion9" class="form-label">Question 9</label>
                                    <select class="form-control" name="surveyquestion9" id="surveyquestion9">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="surveyquestion10" class="form-label">Question 10</label>
                                    <select class="form-control" name="surveyquestion10" id="surveyquestion10">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="surveyquestion11" class="form-label">Question 11</label>
                                    <select class="form-control" name="surveyquestion11" id="surveyquestion11">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="surveyquestion12" class="form-label">Question 12</label>
                                    <select class="form-control" name="surveyquestion12" id="surveyquestion12">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="surveyquestion13" class="form-label">Question 13</label>
                                    <select class="form-control" name="surveyquestion13" id="surveyquestion13">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="surveyquestion14" class="form-label">Question 14</label>
                                    <select class="form-control" name="surveyquestion14" id="surveyquestion14">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="surveyquestion15" class="form-label">Question 15</label>
                                    <select class="form-control" name="surveyquestion15" id="surveyquestion15">
                                        <option value="1">Item 1</option>
                                        <option value="2">Item 2</option>
                                        <option value="3">Item 3</option>
                                        <option value="4">Item 4</option>
                                        <option value="5">Item 5</option>
                                        <option value="6">Item 6</option>
                                        <option value="7">Item 7</option>
                                        <option value="8">Item 8</option>
                                        <option value="9">Item 9</option>
                                        <option value="10">Item 10</option>
                                    </select>
                                </div>
                                <div>
                                    <input class="btn btn-primary" type="submit" name="verify" value="Verify">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>