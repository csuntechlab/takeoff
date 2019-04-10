<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\StudentInfoContract;
use Validator;

class ProfileController extends Controller
{
    private $studentinfoRetriever;

    public function __construct(StudentInfoContract $studentinfoContract)
    {
        $this->studentinfoRetriever = $studentinfoContract;
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
            'bio'=> 'required',
            'research' => 'required',
            'fun_facts'=>'required',
            'academic_interest' => 'required'
        ]);

        if($validatedData->fails()){
            return $validatedData->errors()->all();
        }

        $data = $request;

        $studentinfo = $this->studentinfoRetriever->store($data);

        if($studentinfo){
            return response()->json([ 'studentinfo' => $studentinfo ], 201);
        } else {
            return response()->json([
                'errors' => [
                    'invalid' => 'Unable to create Student Profile.'
                ]
            ], 406);
        }
    }
}
