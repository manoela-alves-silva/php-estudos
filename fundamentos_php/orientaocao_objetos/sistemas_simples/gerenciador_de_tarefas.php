<!-- 
    Crie uma classe chamada Task que represente uma tarefa.
    A classe Task deve ter os seguintes atributos:
        title: título da tarefa.
        description: descrição da tarefa.
        completed: indica se a tarefa está concluída ou não.
    A classe Task deve ter os seguintes métodos:
        markAsCompleted(): marca a tarefa como concluída.
        markAsIncomplete(): marca a tarefa como não concluída.
        getTitle(): retorna o título da tarefa.
        getDescription(): retorna a descrição da tarefa.
        isCompleted(): retorna um booleano indicando se a tarefa está concluída ou não.
-->

<?php

class Task {

    public $title;
    public $description;
    public $completed;

    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
        $this->completed = false;
    }

    public function markAsCompleted() {
        $this->completed = true;
    }

    public function markAsIncomplete() {
        $this->completed = false;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function isCompleted() {
        return $this->completed;
    }
}


$task = new Task("Estudar", "Estudar PHP");

echo $task->getTitle() . "<br>";

echo $task->getDescription() . "<br>";

var_dump($task->isCompleted());

echo "<br>";

$task->markAsCompleted();

var_dump($task->isCompleted());

echo "<br>";

$task->markAsIncomplete();

var_dump($task->isCompleted());

?>
