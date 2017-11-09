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
  <!-- cads -->
  <div class="col-sm-4 my-2 ">
    <div class="card">
      <div class="card-block">

        <p class="card-text">name:<?php echo $value->getName(); ?></p>
        <p class="card-text">solde:<?php echo $value['solde'] ?></p>


        <div class="row offset-1 ">

          <!-- input hidden -->
        <form action="index.php" method="post">
			     <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
			     <button  class="btn btn-primary sup" type="submit" name="delete" value="delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
         </form>


        <a class="btn btn-danger env" href="Account.php?id=<?php echo $value['id']?> "role="button"><i class="fa fa-plus" aria-hidden="true"></i></a>
      </div>
    </div>
    </div>
  </div>




<?php }
 ?>
</div>
</div>

<!-- footer -->
 <?php
   include("Views/Template/footer.php");
  ?>
