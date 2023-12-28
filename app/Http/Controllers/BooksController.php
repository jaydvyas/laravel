<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class BooksController extends Controller
{
    public function addBooks(Request $req){
        $bookName = $req->get("bookName");
        $author = $req->get("author");
        $amount = $req->get("amount");
        $date = $req->get("date");
        $file = $req->file;
        $fileName = time().".".$file->getClientOriginalExtension();
        $req->file->move("assets",$fileName);
        $table = DB::table("books")->insert(["Book Name"=>$bookName,"amount"=>$amount,"Published Date"=>$date,"Author Name"=>$author,"file"=>$fileName]);
        if($table){

            echo "Book Saved. $fileName";

        }else{
            echo "Some technical issue occurred";
        }
    }

    public function getBooks(){
        $table = DB::table("books")->get();
        return view("viewBooks",["data"=>$table]);
    }

    public function download($file){
        return response()->download(public_path("assets/".$file));
    }

}
