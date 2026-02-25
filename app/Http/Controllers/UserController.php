<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Illuminate\Support\days;

class UserController extends Controller
{
    public function prim($name)
    {
        return 'Привет ' . $name;
    }
    public function showsurname($surname, $name)
    {
        return 'Здравствуй ' . $surname . $name;
    }

    public function all()
    {
        return 'shalom friend';
    }
    //Практика 3
    public function namecity($name)
    {
        $users = [
            'Александр' => 'Омск',
            'Яромир' => 'Новокузнецк',
            'Дмитрий' => 'Токио',
            'Актан' => 'Ереван',
            'Евгений' => 'Киев',
        ];

        return $users[$name] ?? 'Такого имени нет в данных';
    }



    //Практика 4. Задание 1
    public function view()
    {
        return view('user/view', ['var1' => '1', 'var2' => '2']);
    }
    //Задание 2
    public function viewer()
    {
        return view('user/user Aleks/viewer', ['name' => 'Александр', 'surname' => 'Савлучинский']);
    }
    //Задание 4
    public function maket()
    {
        return view('user/view');
    }
    //Задание 5
    public function show()
    {
        return view('show');
    }
    //Задание 7,8,9(10,11)
    public function method1()
    {
        return view('method.method1', ['content' => 'какое то представление контента'], ['title' => 'genius']);
    }
    public function method2()
    {
        return view('method.method2', ['content2' => 'какое то представление контента2'], ['title2' => 'genius2']);
    }
    public function method3()
    {
        return view('method.method3', ['content3' => 'какое то представление контента3'], ['title3' => 'genius3']);
    }



    //Практика 5. Задание 1
    public function control()
    {
        return view(
            'controller.control',
            [
                'name' => ['Дмитрий', 'Актан', 'Аркадий', 'Александра', 'Антон'],
                'age' => ['20', '19', '19', '21', '19'],
                'salary' => ['1000$', '950$', '1050$', '750$', '800$']
            ]
        );
    }
    //Задание 2
    public function practic5z2()
    {
        $perem = 'color:Red';
        return view('pr5.practic5z2', ['perem'=>$perem]);
    }
    //Задание 3
    public function practic5z3()
    {
        $perem1 = 'color:Red';
        $perem2 = 'color:Yellow';
        $perem3 = 'color:Green';
        return view('pr5.practic5z3',['perem1'=>$perem1,'perem2'=>$perem2,'perem3'=>$perem3]);
    }
    //Задание 4
    public function practic5z4()
    {
        $style = 'color:Red';
        return view('pr5.practic5z4',['style'=>$style]);
    }
    //Задание 5,6
    public function practic5z5()
    {
        $text = 'Za Warudo!';
        $href = 'http://google.com';
        return view('pr5.practic5z5',['text'=>$text,'href'=>$href]);
    }
    public function practic5z7()
    {
        return view(
            'pr5.practic5z7',
            ['users' => [
                                    [
                                        "name"=>"Дмитрий",
                                        'age'=>'20',
                                        'salary'=>'1000$'
                                    ],
                                    [
                                        "name"=>"Актан",
                                        'age'=>'19',
                                        'salary'=>'950$'
                                    ],
                                    [
                                        "name"=>"Алекс",
                                        'age'=>'21',
                                        'salary'=>'1050$'
                                    ]
                                    
            ]
            ]
        );
    }

}