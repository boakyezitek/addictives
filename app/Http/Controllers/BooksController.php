<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $first_books = [
            ["books" => "book-1"],
            ["books" => "book-2"],
            ["books" => "book-3"],
            ["books" => "book-4"],
            ["books" => "book-5"],
            ["books" => "book-6"],
            ["books" => "book-7"],
            ["books" => "book-8"],
        ];

        $second_books = [
            ["books" => "book-9"],
            ["books" => "book-10"],
            ["books" => "book-11"],
            ["books" => "book-12"],
            ["books" => "book-13"],
            ["books" => "book-14"],
            ["books" => "book-15"],
            ["books" => "book-16"],
        ];

        $third_books = [
            ["books" => "book-17"],
            ["books" => "book-18"],
            ["books" => "book-19"],
            ["books" => "book-20"],
            ["books" => "book-21"],
            ["books" => "book-22"],
            ["books" => "book-23"],
            ["books" => "book-24"],
        ];

        $instagram = [
            ["insta_img" => "img-insta-1"],
            ["insta_img" => "img-insta-2"],
            ["insta_img" => "img-insta-3"],
            ["insta_img" => "img-insta-4"],
            ["insta_img" => "img-insta-5"],
            ["insta_img" => "img-insta-6"],
        ];

        $books = collect($first_books);
        $books2 = collect($second_books);
        $books3 = collect($third_books);
        $insta = collect($instagram);

        return view('pages.home',  ["books" => $books->all(), "books2" => $books2->all(),"books3" => $books3->all(),"insta" => $insta->all()]);
    }

}
