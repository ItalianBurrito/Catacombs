<!--This is the player view-->

<!DOCTYPE html>

<html lang ="en">
  <head>
    <link rel="manifest" href="manifest.json" />

    <meta name="apple-mobile-web-app-status-bar" content="#db4938" />
    <meta name="theme-color" content="#db4938" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Add Content</title>
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

       <div id="databaseForm">
         <input type ="" id="" name="" class="databaseInput"><br>
         <select id="itemType" name="itemType">
           <option value=""></option>
           <option value="adventuringItem">Adventuring Equipment</option>
           <option value="alchemical">Alchemical</option>
           <option value="clothing">Clothing</option>
           <option value="weapon">Weapon</option>
           <option value="magicWeapon">Magic Weapon</option>
           <option value="armour">Armour</option>
           <option value="magicArmour">Magic Armour</option>
           <option value="wonderous">Wonderous Item</option>
           <option value="tradeGoods">Trade Goods</option>
           <option value="other">Other</option>
         <input type="text" id="itemName" name="itemName" class="databaseInput"><br>
         <input type="text" id="itemCost" name="itemCost" class="databaseInput"><br>
         <textarea id="itemDescription" name="itemDescription" rows="4" cols="50"></textarea>
       </div>

        <a href='home.php'>Back to campaign select</a>
    </main>
    <script src="js/app.js"></script>
  </body>
</html>
