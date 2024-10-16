<?php
 
require_once(__DIR__ . '/../config.php');
 
/**
 * todo db object
 *
 * global variable containing our connection
 */
$todoDB = new TodoDB();
 
/**
 * db handling for todos
 * db functionality is handled here
 *
 * @author ring-code
 * @property object $connection PDO connection to mariadb
 * @property object $stmt database statement handler object
 *
 */
 
 class TodoDB {
    private $connection;
    private $stmt;
 
    /**
     * constructor for todoDB class
     */
    public function __construct() {
        global $host, $db, $user, $pass;
        try{
            $this->connection = new PDO(
                "mysql:host=$host;dbname=$db;",
                $user,
                $pass
            );
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
 
    /**
     *  prepare and execute the given sql statement
     *
     * @param string $sql the sql statement
     * @param array $params an array of the needed parameters
     * @return object $stmt the executed statement
     */
    private function prepareExecuteStatement($sql, $params = []) {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch(Exception $e) {
            error_log($e->getMessage());
            return $e->getMessage();
        }
    }
 
    public function getTodos() {
 
        $sql = "SELECT id, text, completed from todos";
 
        $todo_items = $this->prepareExecuteStatement($sql)->fetchAll();
   
        return $todo_items;
    }
   
    /**
     * creates new todo from created text
     *
     * @param string $text content of todo
     * @return boolean success of the insert
     */
    public function createTodo($text) {
 
        $sql = "INSERT INTO todos (text, completed) VALUES (:text, :completed)";
       
        $result = $this->prepareExecuteStatement($sql, ['text' => $text, 'completed' => 0]);
           
        return $result;
    }
   
    /**
     *  switches todo item completed bool value
     * @param int $id id of the todo item to update
     * @return boolean $result success of the update
     */
    public function updateTodo($id) {
 
        $sql = "UPDATE todos SET completed=NOT completed WHERE id= :myid";
       
        $result = $this->prepareExecuteStatement($sql, ["myid" => $id]);
           
        return $result;
    }
 
    /**
     * deletes todo item from the db based on the id
     * @param int $id id of the todo item to delete
     * @return boolean $result success of the deletion
     */
    public function deleteTodo($id) {
 
        $sql = "DELETE FROM todos WHERE id= :myid";
       
        $result = $this->prepareExecuteStatement($sql, ["myid" => $id]);
                   
        return $result;
    }
     
 }
 
 
?>