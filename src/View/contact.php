<?php
namespace View;
include_once 'View/html.php';
use View\Html;

class Contact {
    public function contact(){
    Html::startHTML();
    echo '<div class="col-5 mx-auto">';
    echo '<div class="card">';
    echo '<div class="card-body">';
        echo '<form action="phpmailer.php" method="POST">
        <h2 class="card-title text-center">Contact Us</h2>
        <div class="form-group text-center">
          <label for="exampleInputName1">Name</label><br>
          <input type="text" name="nume" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter name">
        </div>
        <div class="form-group text-center">
          <label for="exampleInputSubject1">Subject</label><br>
          <input type="text" name="subject" class="form-control" id="exampleInputSubject1" aria-describedby="subjectHelp" placeholder="Enter Subject">
        </div>
        <div class="form-group text-center">
          <label for="exampleInputEmail1">Email address</label><br>
          <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group text-center" >
            <label for="message" >Comments</label>
            <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here" rows="7"></textarea>
    </div><br>
    <div class="text-center">
    <input type="submit" name="send" value="Submit" class="btn btn-primary ">
    </div>
      </form>';
    echo '</div>';
    echo '</div>';  
    echo '</div>';  
    Html::endHTML();
    }
}