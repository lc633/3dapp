<?php
  class Model {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $name;

    public function __construct($id, $name) {
      $this->id      = $id;
      $this->name  = $name;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM demo');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $model) {
        $list[] = new Model($model['id'], $model['name']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM model WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $model = $req->fetch();

      return new Model($model['id'], $model['name']);
    }
  }
?>