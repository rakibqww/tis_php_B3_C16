<?php


namespace App\classes;


class FileUpload{
    protected $image;
    protected $imageName;
    protected $directory;
    protected $result;

    public function __construct($post = null){
//        echo '<pre>';
//        print_r($post);
//        exit();
        $this->image = $post;
    }

    public function index(){
//        echo '<pre>';
//        print_r($this->image);
//        echo '<br/>';
//        print_r($_FILES);

        $this->imageName = $_FILES['image']['name'];
        $this->directory = './assets/img/upload/' .$this->imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $this->directory);
        echo 'File Upload Successfully';
       // return $result = 'File Upload Successfully';
    }

}