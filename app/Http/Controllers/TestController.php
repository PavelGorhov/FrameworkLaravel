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
    public function lessonTemplateOne($detach) {
        $detachment = 'Нет отряда';
        switch($detach) {
            case 1: $detachment = 'Отряд 287'; break;
            case 2: $detachment = 'Отряд 54'; break;
            case 3: $detachment = 'Отряд 925'; break;
            case 4: $detachment = 'Отряд 9'; break;
            default: $detachment = '-';
        }


        $user = [];
        $user[] = 'Иванов Иван Иванович';
        $user[] = 'Петров Аркадий Иванович';
        $user[] = 'Люлькин Акакий Романович';


        return view('template', compact('detachment', 'user'));
    }
    public function politcaKonf()
    {
        return view('politica');
    }
    public function polit()
    {
        $organization = "ЧРТ";
        return view('pol', compact('organization'));
    }
    public function FavoriteBook()
    {
        $text = 'Поистине чудовищем должен быть человек, если не найдется женщины, которая оплачет его смерть!';
        return view('FavBook', compact('text'));
    }
    public function li()
    {
        $var_li = ['django', 'flask', 'laravel'];
        return view('li')->with('var_li', $var_li);
    }
    public function div()
    {
        $var_div = ['c++', 'rust', 'c#',];
        return view('div')->with('var_div', $var_div);
    }
    public function span()
    {
        $var_span = ['1', '2', '3', '4','5','6','7','8','9','10'];
        return view('span')->with('var_span', $var_span);
    }
}
