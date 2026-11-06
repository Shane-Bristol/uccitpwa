<?php

namespace App\Http\Controllers;

class DirectoryController extends Controller
{
    public function index()
    {

        $staff = [
            ['name' => 'Mr. Otis Osbourne', 'title' => 'Head of Department',         'phone' => '+18765550102', 'email' => 'ithod@ucc.edu.jm', 'photo' => 'images/staff/otis.svg'],
            ['name' => 'Dr. Jane Smith',  'title' => 'Lecturer', 'phone' => '+18765550101', 'email' => 'jane.smith@ucc.edu.jm',  'photo' => 'images/staff/jane.svg'],
            ['name' => 'Ms. Shalieka Burris', 'title' => 'Lecturer',           'phone' => '+18765550103', 'email' => 'shalieka.burris@ucc.edu.jm',  'photo' => 'images/staff/karen.svg'],
            ['name' => 'Mr. David Tulloch', 'title' => 'Lecturer', 'phone' => '+18765550104', 'email' => 'david.tulloch@ucc.edu.jm', 'photo' => 'images/staff/david.svg'],
        ];

        return view('directory', compact('staff'));
    }
}
