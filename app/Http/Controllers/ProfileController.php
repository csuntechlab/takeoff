<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\UserInfoContract;
use Validator;

class ProfileController extends Controller
{
    private $userinfoRetriever;

    public function __construct(UserInfoContract $userinfoContract)
    {
        $this->userinfoRetriever = $userinfoContract;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->userinfoRetriever->store($request);
    }

}
