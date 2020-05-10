<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class FollowsController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function store(User $user)
    {
        return auth()->user()->following()->toggle($user->profile);
    }
    //    public function grind(){
//        $material = request()->validate([
//            'item' => food
//        ]);
//
//        switch($material['item']){
//            case 'ataObe':
//                $smoothness = 85;
//                $waterRatio = 0.2;
//            case 'ataRice':
//                $smoothness = 55;
//                $waterRatio = 0.08;
//            case 'ewaAkara':
//                $smoothness = 65;
//                $waterRatio = 0.02;
//            case 'ewaMoinmoin':
//                $smoothness = 75;
//                en
//
//        }
//    }
}
