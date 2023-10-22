<?php

session_start();

$authaction = $_SESSION['authaction'];
$tok = $_SESSION['tok'];
$redir = $_SESSION['redir'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.css" rel="stylesheet">
    <title>Thanks</title>
</head>
<body>
  <div class="text-center">
    <img src="logo-black.svg" alt="">
  </div>
    <section class="p-5 text-center">
        <br>
        <h6>
            Thanks! Your response has been submitted!
            You'll be automatically connected to the internet shortly!
        </h6>
    </section>

  <form name="auth" action="<?php echo htmlspecialchars($authaction); ?>" method="get">
      <input type="hidden" name="tok" value="<?php echo htmlspecialchars($tok); ?>">
      <input type="hidden" name="redir" value="<?php echo htmlspecialchars($redir); ?>">
  </form>

<script>
  window.onload = function () {
      window.setTimeout(function () {
          document.auth.submit();
      }, 2000);
  };
</script>
</body>
</html>