<!-- 
    OOP - Object Oriented Programming
    A blueprint for an object

    1) Reused again.
    2) Make the program big.

    
-->

<!-- Create a Class: Instantiate an object. -->

<?php
    class User{
        //Property and attribute of object.
        public $name; //public, private, protected
        public $email;
        protected $status = 'active'; //default

        public function __construct($name, $email){
            echo "Running the constructor..";
            $this->name = $name;
            $this->email = $email;
        }

        //Method
        public function login(){
            //echo 'The user logged in.';
            //challenge. How to make 'Faris Logged in'.
            //challenge. How to make 'Syamimi Logged in'.

            echo $this->name . ' logged in.<br>';
        }

        //How to grab the private status. Status is currently private.
        public function getStatus(){ //active
            echo $this->status;
            return $this->status;
        }

        public function setStatus($status){ //from active to inactive
            $this->status = $status;
        
        }
}

class Admin extends User{ // inheriting
public $level; //different privilage level

public function __construct($name, $email, $level){
    $this->level = $level;
    parent:: __construct($name, $email);
}

//Challenge: Make it as Admin Paitou logged in. Faris logged in. Syamimi logged in.
public function login(){
    echo 'Admin ' .$this->name . ' logged in. <br>';
}

public function getStatus(){
    echo $this-> status;
}
}

$admin1 = new Admin('Paitou','Paitou@gmail.com', 5);
// echo $admin1->name;
// echo $admin1->email;
$admin1->login();
$admin1->getStatus();


$user1 = new User('Faris','faris@gmail.com');
$user1->login();

// Outputs: Paitou logged in as admin.


// $user1->$name = 'Faris';
// $user1->$email = 'faris@gmail.com';


$user2 = new User('Syamimi','Syamimi@gmail.com');
// $user2->$name = 'Syamimi';
// $user2->$email = 'Syamimi@gmail.com';
$user2->login();

// echo $user1->status; //error because it is private.

$user2->setStatus('inactive');
$user2->getStatus();
?>