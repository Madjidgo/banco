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
  <!-- <div class="form-group row">
     <label for="example-text-input" class="col-2 col-form-label">id</label>
     <div class="col-10">
       <input class="form-control" type="number" name="id" value= '<?php echo $account->getId() ?>' required>
     </div>
 </div> -->

<!-- Name -->
 <div class="form-group row">
     <label for="example-text-input" class="col-2 col-form-label">Name</label>
     <div class="col-10">
     <input class="form-control" type="text" name="name" value= '<?php echo $account->getName() ?>' required>
     </div>
 </div>

<!-- Solde -->
 <div class="form-group row">
     <label for="example-text-input" class="col-2 col-form-label">Solde</label>
     <div class="col-10">
     <input class="form-control" type="number" name="solde" value= '<?php echo $account->getsolde() ?>' required>
     </div>
 </div>


               <input type="hidden" name="type" value='<?php echo $account->getId() ?>'>
                 <input class="btn btn-primary env" type="submit" name="submit" value="Envoyer" >

               </div>
              </form>
            </div>
         </div>
 </body>
