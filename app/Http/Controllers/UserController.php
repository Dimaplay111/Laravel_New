<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $perem = 'black';
        return view('pr5.practic5z2', 'perem');
    }
}