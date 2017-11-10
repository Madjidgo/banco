<body ng-controller="RegisterCtrl" ng-app="myApp">
  <div class="container">
    <div id="signup">
       <div class="signup-screen">

          <div class="space-bot text-center">
             <h1>CHANGE</h1>
            <div class="divider"></div>
          </div>

            <form class="form-register" method="post" name="" action="index.php" >
<!-- id -->

<!-- Name -->
 <div class="form-group row">
     <label for="example-text-input" class="col-2 col-form-label">Name</label>
     <div class="col-10">
     <input class="form-control" type="text" name="name" value= '<?php echo $account->getName(); ?>' required>
     </div>
 </div>

<!-- Solde -->
 <div class="form-group row">
     <label for="example-text-input" class="col-2 col-form-label">Solde</label>
     <div class="col-10">
     <input class="form-control" type="number" name="solde" value= '<?php echo $account->getSolde(); ?>' required>
     </div>
 </div>

 <?php if (method_exists($account, 'addMoney')) {
                  ?>
                              <div class="form-group row">
                   <label for="example-text-input" class="col-2 col-form-label">Credit</label>
                   <div class="col-10">
                     <input class="form-control" type="number" name="add" value= '<?php echo $account->addMoney($money) ?>'>
                   </div>
                 </div>
            <?php } ?>

               <input type="hidden" name="id" value='<?php echo $account->getId(); ?>'>
                 <input class="btn btn-primary env" type="submit" name="submit" value="Envoyer" >

               </div>
              </form>
            </div>
         </div>
 </body>
