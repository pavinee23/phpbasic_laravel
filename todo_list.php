<?php

session_start();

class TodoList {
    private $tasks = [];

    public function __construct(){
        if(isset($_SESSION["tasks"])){
            $this->tasks = $_SESSION["tasks"] ??[];
        }
    }
        
    public function addTask($task){
        $this->tasks[] = $task;
        $this->saveTasks();
        }
        
    public function removeTask($index){
            if(isset($this->tasks[$index])){
                unset($this->tasks[$index]);
                $this->tasks = array_values($this->tasks);
                $this->saveTasks();
            }
        }

    public function getTasks(){
            return $this->tasks;
        }

    private function saveTasks(){
            $_SESSION["tasks"] = $this->tasks;
        }
    }

    $todoList = new TodoList();

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
         if (isset($_POST["add"])&&!empty($_POST["task"])){
            $todoList->addTask($_POST["task"]);
         }
         elseif (isset($_POST["delete"])){
            $todoList->removeTask($_POST["index"]);
         }

         header("Location: todo_list.php");
         exit();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Document</title>
   
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .task-item form {
            margin-left: 10px;
        }
        h1 {
        color: #333;
        text-align: center;
        font-family: Arial, sans-serif;
}
        li button:hover {
            background-color: #e63939;
        }
        li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
        }
        li button {
            background-color: #ff5252;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }
        button:hover {
            background-color: #45a049;
        }

        form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        h1 {
            position: fixed;
            top: 10px;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 2rem;
            font-weight: 600;
            color: #333;
            margin: 0;
            padding: 10px 0;
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            width: 400px;
            padding: 20px;
            margin-top: 80px; /* Space for fixed header */
        }
        form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 300;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
        }
        button:hover {
            background-color: #45a049;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
            font-weight: 400;
        }
        li button {
            background-color: #ff5252;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
        }
        li button:hover {
            background-color: #e63939;
        }
    </style>
</head>

<body>
<h1>Todo List</h1>
    <div class="container">
        <form method="post">
            <input type="text" name="task" placeholder="Add a new task" required>
            <button type="submit" name="add">Add Task</button>
        </form>
        <ul>
            <?php foreach ($todoList->getTasks() as $index => $task): ?>
                <li>
                    <span><?php echo htmlspecialchars($task); ?></span>
                    <form method="post" style="margin: 0;">
                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                        <button type="submit" name="delete">Delete</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>