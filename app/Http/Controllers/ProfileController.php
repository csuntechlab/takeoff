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
        $validatedData = Validator::make($request->all(), [
            'major'=>'required',
            'units'=> 'required|integer',
            'grad_date' => 'required',
            'college'=>'required',
        ]);

        if($validatedData->fails()){
            return $validatedData->errors()->all();
        }

        $data = $request;

        $studentinfo = $this->userinfoRetriever->store($data);

        if($studentinfo){
            return response()->json([ $studentinfo ], 201);
        } else {
            return response()->json([
                'errors' => [
                    'invalid' => 'Unable to create Student Profile.'
                ]
            ], 406);
        }
    }
}
