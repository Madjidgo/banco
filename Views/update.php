<body ng-controller="RegisterCtrl" ng-app="myApp">
  <div class="container">
    <div id="signup">
       <div class="signup-screen">

          <div class="space-bot text-center">
             <h1>CHANGE</h1>
            <div class="divider"></div>
          </div>


<!-- **
 * [class description]
 * @type {String}
 */ -->
            <form class="form-register" method="post" action="index.php" >


<!-- Name -->
               <div class="form-group row">
                   <label for="example-text-input" class="col-2 col-form-label">Name</label>
                    <div class="col-10">
                      <input class="form-control" type="text" name="name" value= '<?php echo htmlspecialchars($account1->getName()); ?>' required>
                   </div>
               </div>


               <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Debit</label >
                      <div class="col-10">
                        <input class="form-control" type="number" name="ss" >
                    </div>
              </div>



                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Credit</label>
                        <div class="col-10">
                            <input class="form-control" type="number" name="add" >
                       </div>
                </div>




               <input type="hidden" name="id" value='<?php echo $account1->getId(); ?>'>
                 <input class="btn btn-primary env" type="submit" name="submit" value="Envoyer" >

               </div>
              </form>
            </div>
         </div>
 </body>
