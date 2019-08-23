<?php


namespace App\Http\Controllers;

use App\persons;
use Illuminate\Http\Request;
use Redirect;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producer= persons::select('id','name')->where('role', '1')->get();
        $actor= persons::select('id','name')->where('role', '2')->get();
        return view('welcome',compact('producer','actor'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->input('person_role') == 1){
        $this->validate($request, [
            'producer_name' => 'required',
            'producer_sex' => 'required',
            'producer_dob' => 'required',
            'producer_bio' => 'required'
        ]
    );
        $persons = new persons();

    $persons->name = $request->input('producer_name');
    $persons->sex = $request->input('producer_sex');
    $persons->dob = $request->input('producer_dob');
    $persons->bio = $request->input('producer_bio'); 
    $persons->role = "1";
    $persons->save();
    return Redirect::back()->with('message','Producers Information Successfully Added !');
    } elseif ($request->input('person_role') == 2){
        $this->validate($request, [
            'actor_name' => 'required',
            'actor_sex' => 'required',
            'actor_dob' => 'required',
            'actor_bio' => 'required'
        ]);
        $persons = new persons();

    $persons->name = $request->input('actor_name');
    $persons->sex = $request->input('actor_sex');
    $persons->dob = $request->input('actor_dob');
    $persons->bio = $request->input('actor_bio'); 
    $persons->role = "2";
    $persons->save();
    return Redirect::back()->with('message','Actors Information Successfully Added !');
    }

    /*return Redirect::to('/');*/
    
    /* return back()->withInput();*/
    /*return redirect('dashboard')->with('status', 'Profile updated!');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
