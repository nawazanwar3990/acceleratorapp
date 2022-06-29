<?php

namespace App\Http\Controllers\FreelancerPortal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{

    public function index()
    {
        return view('dashboard.freelancer-portal.index');
    }

    public function create()
    {
        return view('dashboard.freelancer-portal.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
