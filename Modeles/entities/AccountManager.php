<?php


class AccountManager

{

  private $_db;


/**
 * { function_description }
 *
 * @param      <type>  $db     The database
 */
    public function __construct($db)

  {

    $this->setDb($db);

  }

  public function setDb($db)
  {

    $this->_db = $db;

  }

/**
 * { function_description }
 *
 * @return     <type>  ( description_of_the_return_value )
 */
  public function getlist()
  {

  $req = $this->_db->prepare('SELECT * FROM Account');
  $req->execute();

  $accounts = $req->fetchall(PDO::FETCH_ASSOC);
  foreach ($accounts as $key => $value) {
    # code...
    $accounts[$key] = new Account($value);
  }
  return $accounts;
  }

/**
 * { function_description }
 *
 * @param      <type>   $id     The identifier
 *
 * @return     Account  ( description_of_the_return_value )
 */
  public function get($id){
    $req= $this->_db->prepare('SELECT * FROM Account WHERE id = :id');
    $req->execute(array (
      'id' => $id
    ));
    $accounts = $req->fetch(PDO::FETCH_ASSOC);

    return new Account($accounts);
  }

/**
 * { function_description }
 *
 * @param      <type>  $accounts  The accounts
 */
  public function add( $accounts){


    $req = $this->_db->prepare('INSERT INTO Account(name,solde) VALUES( :name,:solde)');


    $req->bindValue(':name', $accounts->getName());
    $req->bindValue(':solde', $accounts->getSolde(), PDO::PARAM_INT);

  $req->execute();
}


/**
 * { function_description }
 *
 * @param      <type>  $accounts  The accounts
 */
  public function update($accounts){
    $req = $this->_db->prepare('UPDATE Account SET name = :name, solde = :solde WHERE id = :id');



    $req->bindValue(':name', $accounts->getName());
    $req->bindValue(':solde', $accounts->getSolde(), PDO::PARAM_INT);
    $req->bindValue(':id', $accounts->getId(),PDO::PARAM_INT);




    $req->execute();

}
/**
 * { function_description }
 *
 * @param      <type>  $accounts  The accounts
 */
  public function delete($accounts)
  {
    $req = $this->_db->prepare('DELETE FROM Account WHERE id = :id');
    $req->bindValue(':id',$accounts,PDO::PARAM_INT);

       $req->execute();
     }
  }
