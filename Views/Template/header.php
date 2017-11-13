<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bank</title>
        <meta name="description" content="Location cars">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" type="png" href="bank.jpeg" />

        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="Assets/css/normalize.css">
        <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="Assets/css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>


    <body>
        <header>
        <section class="container">

          <div class="jumbotron">
              <div class="row">

              <img class="img-fluid" src="bank.jpeg" alt="logo"></img>
              <h3 class="display-3 ">Bank</h3>

          </div>
            <p class="lead">M.G</p>


            <hr class="my-4">

      /**
       * button create 
       * 
       */
      <button type="button" class="btn btn-danger env" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Create</button>


      /**
       * Modal
       * 
       */
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="exampleModalLabel">New Account</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <form action="index.php" method="post">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Name:</label>
                  <input type="text" name="name"  class="form-control" id="recipient-name"  required placeholder="Name">
                </div>

                <div class="form-group">
                  <label for="message-text1"  class="col-form-label">Solde:</label>
                    <input type="number" name="solde" class="form-control" id="message-text1" required placeholder="Solde">
                </div>





                <div class="modal-footer">
                  <button type="button " class=" btn close " data-dismiss="modal">Close</button>

                  <input type="submit" name="submitAdd" class="btn btn-danger env"  value="Envoyer">
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  </header>
