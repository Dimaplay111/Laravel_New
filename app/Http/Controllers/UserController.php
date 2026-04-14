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
    //Задание 7
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
    //Задание 8
    public function practic5z8()
    {
        return view('pr5.practic5z8',['array'=>[0,1,2,3,4,5]]);
    }
    //Задание 9
    public function practic5z9($city='Москва')
    {
        return view('pr5.practic5z9', ['city'=>$city]);
    }
    //Задание 10 
    public function practic5z10($city = 'Москва', $country = 'Россия')
    {
    $location = [
        'country' => $country??'Россия',
        'city'    => $city??'Москва'
    ];
    return view('pr5.practic5z10', ['location' => $location]);
    }
    //Задание 11
    public function practic5z11($year = null, $month = null, $day = null)
    {
        $day = $day ?? date('d');
        $year = $year ?? date('Y');
        $month = $month ?? date('m');

    return view('pr5.practic5z11', ['year' => $year, 'month' => $month, 'day' => $day]);
    }
    //Задание 12,13
    public function practic5z12()
    {
        $str = '<b>Peremennaya 123456</b>';
        return view('pr5.practic5z12',['str' => $str] );
    }
    //Задание 14,15,16
    public function practic5z14($age)
    {
        return view('pr5.practic5z14',['age' => $age] );
    }
    //Задание 17
    public function practic5z17($age)
    {
        return view('pr5.practic5z17',['age' => $age] );
    }
    //Задание 18
    public function practic5z18()
    {
        return view('pr5.practic5z18',['array'=>[1,1,2]]);
    }
    //Задание 19,20,21
    public function practic5z19()
    {
        return view('pr5.practic5z19',['array'=>[9]]);
    }
    //Задание 22,23
    public function practic5z22()
    {
        $array = [
            '1'=>'shard',
            '2'=>'aganim',
            '3'=>'ma'
        ];
        return view('pr5.practic5z22',['array'=>$array]);
    }
    //Задание 24
    public function practic5z24()
    {
        return view('pr5.practic5z24',['array'=>[1,2,4,5,8,11,42]]);
    }
    //Задание 25
    public function practic5z25()
    {
        $data = 18;

        return view('pr5.practic5z25',['data'=>$data]);
    }
    //Задание 26
    public function practic5z26()
    {
        $array = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
        return view('pr5.practic5z26',['array'=>$array]);
    }
    //Задание 27,28
    public function practic5z27()
    {
        $employees = [
		[
			'name' => 'user1',
			'surname' => 'surname1',
			'salary' => 1000,
		],
		[
			'name' => 'user2',
			'surname' => 'surname2',
			'salary' => 2000,
		],
		[
			'name' => 'user3',
			'surname' => 'surname3',
			'salary' => 3000,
		],
	];
        return view('pr5.practic5z27',['employees'=>$employees]);
    }
    //Задание 29
    public function practic5z29()
    {
        $array = [
            'name' => 'Дмитрий',
            'name1' => 'Александр',
            'name2' => 'Актан',
            'name3' => 'Полина'
        ];
        return view('pr5.practic5z29',['array'=>$array]);
    }
    //Задание 30,31,32
    public function practic5z30()
    {
        $array = ['Дмитрий','Александр','Актан','Полина'];
        return view('pr5.practic5z30',['array'=>$array]);
    }
    //Задание 33
    public function practic5z33()
    {
        $array = [1,2,3,4,5,6,7,8,9];
        return view('pr5.practic5z33',['array'=>$array]);
    }
    //Задание 34
    public function practic5z34()
    {
        $array = [1,15,10,7,0,14,22,45];
        return view('pr5.practic5z34',['array'=>$array]);
    }
    //Задание 35
    public function practic5z35()
    {
        $array = [1,15,0,10,7,0,14,22,0,45];
        return view('pr5.practic5z35',['array'=>$array]);
    }
    //Задание 36
    public function practic5z36()
    {
        return view('pr5.practic5z36',[]);
    }
}
