<?php
namespace App\Http\Controllers;

use App\Library;

class LibraryController extends Controller
{
  public function index()
  {
    return Library::all();
  }

  public function show($isbn)
  {
    return Library::find($isbn);

  }

  public function store(Request $request)
  {
    $library= Library::create($request->all());
    return response()->json($library,201);
    // $add = $request->all();
    // $add['ISBN']= $ISBN;
    // $add['title']= $title;
    // $add['subtitle']= $author;
    // $add['publicationDate']= $publicationDate;
    // $add['publisher']= $publisher;
    // $add['pages']= $pages;
    // $add['description']= $description;
    // $add['website']= $website;
    // return Library::create($add);


  }

  public function update(Request $request, $isbn){
    $library = Library::findOrFail($isbn);
    $library->update($request->all());
    return $library;

  }

  public function delete(Request $request, $isbn)
  {
    $library = Library::findOrFail($isbn);
    $library->delete();

    return 204;
  }

}
