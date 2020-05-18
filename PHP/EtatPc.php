<?php

require 'index.php';

//require 'Graphics_Charts/index.php';
$obj = new testPerf();
$obj->WebCon();
//afficher le résultat

?>

<main role="main">
    <div class="titlebar-container">
      <div class="titlebar">

        <div class="a1-contain"></div>
        <ul>
          <div class="container">
            <div class="bouton">
              <form action="EtatPc.php" method="post"> Nom PC : <input type="text" id="NomPC" name="PC"><br />
                <form action="EtatPc.php" method="post"> Date : <input type="text" name="Date">
                  <?php if (isset($_POST['PC'])) {
                  } ?>
                  <p>
                    <button class="button" style="vertical-align:middle"><span>Execute </span></button>
                    <button class="button" style="vertical-align:middle"><span>Last Record </span></button>
                    <button class="button" style="vertical-align:middle"><span>Result </span></button>
                    <button class="button" style="vertical-align:middle"><span>Ok </span></button>
                  </p>
            
            </form>
            </form>




            <!-- _______________________________________________________________________________________________ -->
            <div class="itemInput"><br><br>
              <?php echo '<td bgcolor="#CCCCCC">' . $obj->NomPcSQL . '</td>' . '<br>';
              if (isset($_POST['PC'])) {
              } ?>
            </div>
            <!-- _______________________________________________________________________________________________ -->
            <div class="itemInput"><br><br>
              <?php echo '<td bgcolor="#CCCCCC">' . $obj->NomPcSQL . '</td>' . '<br>';
              if (isset($_POST['Date'])) {
              } ?>
            </div>
        

            <!-- _______________________________________________________________________________________________ -->
            <?php echo '<td bgcolor="#CCCCCC">' . $obj->NomPcSQL . '</td>' . '<br>';
            if (isset($_POST['PC'])) {
              echo 'NAME : ' . $_POST['PC'];
            } ?><br><br>
            <!-- _______________________________________________________________________________________________ -->
            <ul class="item_destruct">
              <div class="item">cpu usage :<br><br>
                <a><?php echo '<td bgcolor="#CCCCCC">' . $obj->cpu_usage . ' %' . '</td>' . '<br>'; ?></a>
              </div>
            </ul>
            <!-- _______________________________________________________________________________________________ -->
            <ul class="item_destruct">
              <div class="item">max ram :<br><br>
                <?php echo '<td bgcolor="#CCCCCC">' . $obj->max_ram . ' GB' . '</td>' . '<br>'; ?>
              </div>
            </ul>
            <!-- _______________________________________________________________________________________________ -->

            <ul class="item_destruct">
              <div class="item">free ram :<br><br>
                <?php echo '<td bgcolor="#CCCCCC">' . $obj->free_ram . ' GB' . '</td>' . '<br>'; ?>
              </div>
            </ul>
            <!-- _______________________________________________________________________________________________ -->
            <ul class="item_destruct">
              <div class="item">used ram :<br><br>
                <?php echo '<td bgcolor="#CCCCCC">' . $obj->used_ram . ' GB' . '</td>' . '<br>'; ?>
              </div>
            </ul>
            <!-- _______________________________________________________________________________________________ -->
            <ul class="item_destruct">
              <div class="item">free ram % :<br><br>
                <?php echo '<td bgcolor="#CCCCCC">' . $obj->free_ram_percent . ' %' . '</td>' . '<br>'; ?>
              </div>
            </ul>
            <!-- _______________________________________________________________________________________________ -->
            <ul class="item_destruct">
              <div class="item">used ram % :<br><br>
                <?php echo '<td bgcolor="#CCCCCC">' . $obj->used_ram_percent . ' %' . '</td>' . '<br>'; ?>
              </div>
            </ul>
            <!-- _______________________________________________________________________________________________ -->
            <ul class="item_destruct">
              <div class="item">cegid start :<br><br>
                <?php echo '<td bgcolor="#CCCCCC">' . $obj->cegid_start . '</td>' . '<br>'; ?>
              </div>
            </ul>
            <!-- _______________________________________________________________________________________________ -->
            <ul class="item_destruct">
              <div class="item">cegid stop :<br><br>
                <?php echo '<td bgcolor="#CCCCCC">' . $obj->cegid_stop . '</td>' . '<br>'; ?>
              </div>
            </ul>
            <!-- _______________________________________________________________________________________________ -->
            <ul class="item_destruct">
              <div class="item">date cegid : <br><br>
                <?php echo '<td bgcolor="#CCCCCC">' . $obj->date_cegid . '</td>' . '<br>'; ?></div>
          </div>
        </ul>
      </div>
    </div>   
  </main>
</head>
<body>
</body>
</html>
<!-- <?php include 'menu.phtml'; ?>  -->