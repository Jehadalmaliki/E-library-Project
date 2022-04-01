<?php
namespace coding\app\controllers;

use coding\app\models\Books;
use coding\app\models\AUthor;
use coding\app\models\Category;
use coding\app\models\Publisher;

class BooksController extends Controller{
    function newbooks(){
        $AUthor=new AUthor();
        $allAUthors=$AUthor->getAll();

        $categories=new Category();
        $allCategories=$categories->getAll();

        $Publisher=new Publisher();
        $allPublisher=$Publisher->getAll();

        $data=["authors" => $allAUthors,
        "categories" =>$allCategories,
        "publishers" =>$allPublisher
    ];
  
      $this->view('new_books',$data);

     
    }
    function listAll(){
        $books=new Books();
        $allbookss=$books->getAll();
        //print_r($allbookss);

        $this->view('list_books',$allbookss);

    }
    public function createbooks(){
        print_r($_POST);
        print_r($_FILES);
        $book=new  Books();

        $imageName=$this->uploadFile($_FILES['image']);
        $book->image=$imageName!=null?$imageName:"default.png";       
        $book->title=$_POST['title'];
        $book->price=$_POST['price'];
        $book->description=$_POST['description'];
        $book->pages_number=$_POST['pages_number'];
        $book->quantity=$_POST['quantity'];
        $book->format=$_POST['format'];
        $book->category_id=$_POST['categories'];
        $book->author_id=$_POST['authors'];
        $book->publisher_id=$_POST['publishers'];
        $book->created_by=1;
        $book->is_active=isset($_POST['is_active'])?1:0;


        if($book->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);
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