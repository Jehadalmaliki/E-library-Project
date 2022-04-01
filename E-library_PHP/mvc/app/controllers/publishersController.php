<?php

namespace coding\app\controllers;

use coding\app\models\Publisher;

class publishersController extends Controller{

    function listAll(){
        $Publisher=new Publisher();
        $allPublisher=$Publisher->getAll();
        //print_r($allPublisher);

        $this->view('list_Publisher',$allPublisher);

    }
    function newPublisher(){
        $this->view('new_Publisher');
    }

    function createPublisher(){
       
        print_r($_POST);
        print_r($_FILES);
        $Publisher=new Publisher();
        $Publisher->name=$_POST['name'];
        $Publisher->phone=$_POST['phone'];
        $Publisher->alt_phone=$_POST['alt_phone'];
        $Publisher->fax=$_POST['fax'];
        $Publisher->address=$_POST['address'];
        $Publisher->country=$_POST['country'];
     
        $Publisher->email=$_POST['email'];
        $imageName=$this->uploadFile($_FILES['image']);

        $Publisher->image=$imageName!=null?$imageName:"default.png";
        $Publisher->created_by=1;
        $Publisher->is_active=isset($_POST['is_active'])?1:0;

      
        if($Publisher->save())
        $this->view('feedback',['success'=>'تم ادخال البيانات بنجاح']);
        else 
        $this->view('feedback',['danger'=>'للاسف ! اعد المحاوله']);

    }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }


    public static function uploadFile(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return null;
    }

    




}

?>