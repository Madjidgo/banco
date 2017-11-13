<?php
// header
  include("Views/Template/header.php");
 ?>
 <div class="container">
<div class="row">
<?php
/**
 * [foreach description]
 * @var [type]
 */
foreach ($accounts as $key => $value) {


 ?>
  <!-- cards -->
  <div class="col-sm-4 my-2 ">
    <div class="card">
      <div class="card-block">
        <p class="card-text">name:<?php echo htmlentities($value->getName()); ?></p>
        <p class="card-text">solde:<?php echo htmlentities($value->getSolde()); ?></p>
      <div class="row offset-1 ">



         <form action="index.php" method="post">
            <input type="hidden" name="id" value="<?php echo $value->getId(); ?>">

           <div class=" col xs-12 col md-12 col-12 row">
               <label for="amount" ">Amount</label>
                   <div class="col-10">
                       <input class="form-control" type="number" name="amount" >
                  </div>
           </div>


           <select class="form-group class="idend" name="idend">
             <?php foreach ($accounts as $acct => $value1)
             {
               if($value1->getId() != $value->getId()){
              ?>(
                  <option value="<?php echo strip_tags($value1->getId()); ?>"><?php echo strip_tags($value1->getName()); ?></option>
                  <?php
                }
              }
                ?>
            </select>

           <button  class="btn btn-primary sup " type="submit" name="transfer">transfer</button>
          </form>

          <!-- input hidden -->
          <form action="index.php" method="post">
            <input type="hidden" name="id" value="<?php echo $value->getId(); ?>">
            <button  class="btn btn-primary sup" type="submit" name="delete" value="delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
         </form>

         <a class="btn btn-danger env" href="Account.php?id=<?php echo $value->getId();?> "role="button"><i class="fa fa-plus" aria-hidden="true"></i></a>
      </div>
    </div>
    </div>
  </div>
<?php
  }
 ?>
</div>
</div>

<!-- footer -->
 <?php
   include("Views/Template/footer.php");
  ?>
