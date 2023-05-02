<?php

namespace App\Http\Controllers\Formateur;

use App\Models\Formateur;
use Illuminate\Http\Request;
use App\Services\RoleService;
use App\Mail\WelComeFormateurEmail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FormateurController extends Controller
{
    protected $roleService  ;
    public function __construct(RoleService $roleService)
    {
        $this->roleService  = $roleService ;
    }
    /**
     * créer un nouveau formateur
     */
    public function createNewFormateur()
    {
        return view('become.formateurs.becoming', [
            'roleAsFormteur' => $this->roleService->roleFormateur(),
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {




        // dd($request->all());


        $path = $request->file('avatar')->store('public');
        $formateur =  Formateur::create([
            'fullname' => $request->input('fullname'),
            'slug' =>$request->input('fullname'),
            'telephone' =>$request->input('telephone'),
            'whattsapp' =>$request->input('whattsapp'),
            'description' =>$request->input('description'),
            'genre' =>$request->input('genre'),
            'avatar' =>$path ,
            'perfomance' =>$request->input('perfomance'),
            'role_id' => $this->roleService->roleFormateur(),
            'user_id' =>Auth::user()->id ?? '1'
        ]);

        


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
