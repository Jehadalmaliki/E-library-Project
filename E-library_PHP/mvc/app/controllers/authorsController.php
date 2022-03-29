<?php
namespace coding\app\controllers;

use coding\app\models\AUthor;

class AuthorsController extends Controller{
    function newAuthor(){
        $this->view('new_author');
    }
    function listAll(){
        $AUthor=new AUthor();
        $allAUthors=$AUthor->getAll();
        //print_r($allAUthors);

        $this->view('list_AUthors',$allAUthors);

    }
    public function createAuthor(){
        $author=new AUthor();
        $author->name=$_POST['name'];
        $author->phone=$_POST['phone'];
        $author->bio=$_POST['bio'];
        $author->email=$_POST['email'];
        $author->created_by=1;
        $author->is_active=isset($_POST['is_active'])?1:0;
      
        if( $author->save())
        
        $this->view('feedback',['success'=>'تم ادخال البيانات بنجاح']);
        else 
        $this->view('feedback',['danger'=>'للاسف ! اعد المحاوله']);
    }

}
?>