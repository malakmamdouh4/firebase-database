<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Kreait\Firebase\Database ;
use Kreait\Firebase\Contract\Database;

class ContactController extends Controller
{

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'posts' ;
    }


    public function index()
    {
        return view('firebase.contact.index');
    }


    public function addpost()
    {
        $ref_tablename = 'posts' ;
        $postData = [
            'name' => 'name1' ,
            'description' => 'description2' ,
            'phone' => '388444' ,
            'price' => '300$'
        ] ;
        $postRef = $this->database->getReference($this->tablename)->push($postData);
    
    }



}
