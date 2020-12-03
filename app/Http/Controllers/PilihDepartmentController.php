<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PilihDepartmentController extends Controller
{
    //
    public function index(){

        return view('PilihDepartment.menu');
    }

    public function supplay(){

        return view('FolderDataSupplay.form');
    }

    public function hr_gal(){

        return view('FolderDataHrGal.form');
    }

    public function quality_assurance(){

        return view('FolderDataQualityAssurance.form');
    }
}
