<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class UserController extends Controller
{
    //create function
    function getUser(){
        return "Emon Bakhtiar";
    }
    function aboutuser(){
        return "age :26,height :5.7";   
     }
    //  pass string using $name 
     function getusername($name){
        return "pass my name :".$name;
        }
    // SHOW VIEW VIA CONTROLLER
    function showview(){
        return view("showviewWithController");
    }
     // show data to view 
    function userhome(){
        $name="emon";
        return view("passvaribledata",["user"=>$name]);

}
}
