<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function questOne(){
        return 'Я люблю учиться в ЧРТ!!!!!!!';
    }
    public function questTwo(Request $request){
        $name=[];
        if($request->has('name'))
            $name['name']=$request->input('name');;
        $name['name']=$request->input('name',' no-name');
        return 'Меня зовут' .$name['name'];
    }
    public function questThree(Request $request){
        $name=[];
        $eat=[];
        if($request->has('name'))
            $name['name']=$request->input('name');
        if($request->has('eat'))
            $eat['eat']=$request->input('eat');
        $name['name']=$request->input('name',' no-name');
        $eat['eat']=$request->input('eat',' no-eat');
        return 'Меня зовут' .$name['name'] .'и я люблю' .$eat['eat'];
    }
    public function questFour(){
        $numbers=[1,5];
        $sum = $numbers[0]+$numbers[1];
        return $sum;
    }
    public function questFive(Request $request){
        $ch1 = $request->ch1;
        $ch2 = $request->ch2;
        $ch3 = $ch1 + $ch2;
        return $ch3;
    }
    public function questSix(Request $request){
        $shifr = $request->cipher;
        if($shifr == 'keyOneTest')
        {
            return 'Я взломал шифр';
        }
        else
        {
            return 'Нет доступа';
        }
}
}
