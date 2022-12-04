 <?php

    class Task
    {
        // properties
        protected $description;
        protected $completed = false;

        // constructor
        public function __construct($description)
        {
            $this->description = $description;
        }

        public function getDescription()
        {
            // notice no $ before property
            return $this->description;
        }

        public function isCompleted()
        {
            return $this->completed;
        }

        public function setCompleted($completed)
        {
            $this->completed = $completed;
        }
    }

    $tasks = [
        new Task('Learn PHP'),
        new Task('Listen to Martijn'),
        new Task('Make coffee')
    ];

    $tasks[1]->setCompleted(true);


    require 'index.view.php';
