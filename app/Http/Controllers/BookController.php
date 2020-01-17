<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\BookService;


class BookController extends Controller
{
   use ApiResponser;

   /**
     * The service to consume the bookss microservice
     * @var BookService
     */

    public $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * Return the list of books.
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Create one new book.
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Obtain & show details of one book.
     *
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {

    }

    /**
     * Update existing book
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {

    }
    /**
     * Remove existing book
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($book)
    {

    }
}
