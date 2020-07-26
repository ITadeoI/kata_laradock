<?php

namespace App\Http\Controllers;


use App\Http\Requests\AuthorRequest;
use App\Http\Resources\Author\AuthorCollection;
use App\Http\Resources\Author\AuthorResource;
use App\Model\Author;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AuthorCollection::collection(Author::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AuthorRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $request)
    {
        $author = new Author();

        $author ->name = $request->name;
        $author ->surname = $request->surname;
        $author->save();

        return response([
                'data' => new AuthorResource($author)
            ],Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        return new AuthorResource($author);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $author->update($request->all());

        return response([
            'data' => new AuthorResource($author)
        ],Response::HTTP_CREATED
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
    }
}
