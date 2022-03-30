<?php

namespace coding\app\controllers;

use coding\app\models\Payement;

class PayementController extends Controller{

    function listAll(){
        $Payement=new Payement();
        $allPayement=$categories->getAll();
        //print_r($allPayement);

        $this->view('list_Payement',$allPayement);

    }
    function create(){
        $this->view('add_Payement');

    }

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $Payement=new Payement();
        
        $Payement->name=$_POST['Payement_name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $Payement->image=$imageName!=null?$imageName:"default.png";
        $Payement->created_by=1;
        $Payement->is_active=$_POST['is_active'];

      
        if($Payement->save())
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