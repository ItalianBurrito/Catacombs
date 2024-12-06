<!--Campaign selection. Ones you play in and ones you DM in. Snapshot of character: Name, level, hp.-->

<!DOCTYPE html>

<html lang ="en">
  <head>
    <link rel="manifest" href="manifest.json" />

    <meta name="apple-mobile-web-app-status-bar" content="#db4938" />
    <meta name="theme-color" content="#db4938" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Campaign Select</title>
  </head>
  <body>
    <main>
      <nav>
      </nav>

      <div id="refresh-bar" className="refresh_bar" display="">
               <Button id="refresh_btn" key="install" aria-label="close" color="inherit"
                       className="refresh_bar_class" onClick="refreshPWA()" border='0'>
                   New Content available. Press here to refresh!
               </Button>
       </div>

      <h1>This is the campaign selection page.</h1>
      <h2> <a href="gameMasterView.php">Goto MY campaign</a></h2>
      <h2> <a href="playerView.php">Goto my CHARACTER</a></h2>
    </main>
    <script src="js/app.js"></script>
  </body>
</html>
