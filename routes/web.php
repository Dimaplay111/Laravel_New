<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Прим.
Route::get('/Vasia',function () {
    return 'Petya';
});

//Задание 1
Route::get('/test',function () {
    return 'Здравствуйте!';
});
//Задание 2
Route::get('/dir/test',function () {
    return 'Привет!';
});
//Задание 3
Route::get('/user/{id1}',function ($id) {
    return 'пост'. $id;
});
//Задание 4
Route::get('/user/{surname1}/{name1}',function ($surname,$name) {
    return 'пользователь '. $surname . $name;
});
//Задание 5
Route::get('/city/{city?}',function ($city = 'Omsk') {
    return 'Город '. $city;
});
//Задание 6
Route::get('/user/{id}',function ($id){
    return 'Число(цифра) ' . $id;
})->where('id','[0-9]+');
//Задание 7
Route::get('/user/{id}/{name}',function ($id,$name){
    return 'Вам письмо: ' . $id . $name;
})->where('id','[0-9]+')->where('name','[a-z0-9_-]{2,}');
//Задание 8
Route::get('/posts/{date}',function ($date){
    return 'Ваша дата: ' . $date;
})->where('date','[0-9]{4}-[0-9]{2}-[0-9]{2}');
//Задание 9
Route::get('/posts/{year}/{month}/{day}',function ($year,$month,$day){
    return 'Ваша дата: ' . $year. '-'.$month .'-'.$day;
})->where('year','[0-9]{4}')->where('month','[0-9]{2}')->where('day','[0-9]{2}');
//Задание 10
Route::get('/user/{order}',function ($order){
    return $order;
})->where('order','name|surname|age');
//Задание 11
Route::get('/city11/{name}',function ($name){
    return $name;
})->where('name','[a-z,A-Z_-]+');
//Задание 12
Route::get('/city12/{name}',function ($name){
    return $name;
})->where('name','[a-z,A-Z,0-9_-]+');
//Задание 13
Route::get('/user13/all', function () {
	return 'all';
});
Route::get('/user13/{id}', function ($id) {
	return 'id';
});
//Задание 14
Route::get('/user14', function () {
	return 'user';
});
Route::get('/user14/all', function () {
	return 'all';
});
Route::get('/user14/{id?}', function ($id = null) {
	return 'id';
});
//Задание 15
Route::get('/user15/{id}', function ($id) {
	return 'id';
})->where('id', '[0-9]+');
Route::get('/user15/{id}', function ($id) {
	return 'slug';
})->where('slug', '[a-z0-9_-]+');
//Задание 16
Route::get('/admin/user16/{id}', function ($id) {
	return $id;
});

Route::get('/admin/users16/{id}', function ($id) {
	return 'all';
});
//Задание 17

Route::get('/user17/{profile}', function ($profile) {
	return 'profile';
});




//Практика 3. Задание 2
Route::get('/user18',[UserController::class,'prim']);
//Задание 3
Route::get('/user19/all',[UserController::class,'all']);
//Задание 6
Route::get('/user20/{name}', [UserController::class, 'prim']);
//Задание 7
Route::get('/user20/{surname}/{name}', [UserController::class, 'showsurname']);
//Задание 8
Route::get('/user21/{name}', [UserController::class, 'namecity']);






//Практика 4. Задание 1
Route::get('/user22', [UserController::class, 'view']);
//Задание 2
Route::get('/user23', [UserController::class, 'viewer']);
//Задание 4
Route::get('/user24', [UserController::class, 'maket']);
//Задание 5
Route::get('/user25', [UserController::class, 'show']);
//Задание 7,8,9(10,11)
Route::get('/user26', [UserController::class, 'method3']);



//Практика 5. Задание 1
Route::get('/user27', [UserController::class, 'control']);
//Задание 2
Route::get('/user28', [UserController::class, 'practic5z2']);
//Задание 3
Route::get('/user29', [UserController::class, 'practic5z3']);
//Задание 4
Route::get('/user30', [UserController::class, 'practic5z4']);
//Задание 5,6
Route::get('/user31', [UserController::class, 'practic5z5']);
//Задание 7
Route::get('/user32', [UserController::class, 'practic5z7']);
//Задание 8
Route::get('/user33', [UserController::class, 'practic5z8']);
//Задание 9
Route::get('/user34/{city?}', [UserController::class, 'practic5z9']);
//Задание 10
Route::get('/user35/{city}/{country}', [UserController::class, 'practic5z10']);
//Задание 11
Route::get('/user36/{day?}/{month?}/{year?}', [UserController::class, 'practic5z11']);
//Задание 12,13
Route::get('/user37', [UserController::class, 'practic5z12']);
//Задание 14,15,16
Route::get('/user38/{age}', [UserController::class, 'practic5z14']);
//Задание 17
Route::get('/user39/{age}', [UserController::class, 'practic5z17']);
//Задание 18
Route::get('/user40', [UserController::class, 'practic5z18']);
//Задание 19,20,21
Route::get('/user41', [UserController::class, 'practic5z19']);
//Задание 22,23
Route::get('/user42', [UserController::class, 'practic5z22']);
//Задание 24
Route::get('/user43', [UserController::class, 'practic5z24']);
//Задание 25
Route::get('/user44', [UserController::class, 'practic5z25']);
//Задание 26
Route::get('/user45', [UserController::class, 'practic5z26']);
//Задание 27,28
Route::get('/user46', [UserController::class, 'practic5z27']);
//Задание 29
Route::get('/user47', [UserController::class, 'practic5z29']);
//Задание 30,31,32
Route::get('/user48', [UserController::class, 'practic5z30']);
//Задание 33
Route::get('/user49', [UserController::class, 'practic5z33']);
//Задание 34
Route::get('/user50', [UserController::class, 'practic5z34']);
//Задание 35
Route::get('/user51', [UserController::class, 'practic5z35']);
//Задание 36
Route::get('/user52', [UserController::class, 'practic5z36']);

//Практика 6. Коллекции
//Sum. Суммирует числа в arr
Route::get('/user53', action: [CollectionController::class, 'collect']);
//Avg. Среднее число между указанными в arr.
Route::get('/user54', action: [CollectionController::class, 'avg']);
//Chunk. Разбивает коллекцию на несколько меньших коллекций указанного размера
Route::get('/user55', action: [CollectionController::class, 'chunk']);
//ChunkWhile. Разбивает коллекцию на несколько меньших по размеру коллекций на основе результата переданного замыкания
Route::get('/user56', action: [CollectionController::class, 'chunkwhile']);
//Collapse. Сворачивает коллекцию массивов в единую плоскую коллекцию
Route::get('/user57', action: [CollectionController::class, 'collapse']);
//Combine. Объединяет значения коллекции в качестве ключей со значениями другого массива или коллекции
Route::get('/user58', action: [CollectionController::class, 'combine']);
//Concat. Добавляет значения переданного массива или коллекции в конец другой коллекции
Route::get('/user59', action: [CollectionController::class, 'concat']);
//CrossJoin. Перекрестно соединяет значения коллекции среди переданных массивов или коллекций, возвращая декартово произведение со всеми возможными перестановками
Route::get('/user60', action: [CollectionController::class, 'crossjoin']);
//Diff. Сравнивает коллекцию с другой коллекцией или простым массивом PHP на основе его значений
Route::get('/user61', action: [CollectionController::class, 'diff']);
//Dump. Выводит элементы коллекции
Route::get('/user62', action: [CollectionController::class, 'dump']);
//Duplicates. Извлекает и возвращает повторяющиеся значения из коллекции
Route::get('/user63', action: [CollectionController::class, 'duplicates']);
//Except. Возвращает все элементы из коллекции, кроме тех, которые имеют указанные ключи
Route::get('/user64', action: [CollectionController::class, 'except']);
//Filter. Фильтрует коллекцию, используя переданное замыкание, сохраняя только те элементы, которые проходят указанный тест истинности
Route::get('/user65', action: [CollectionController::class, 'filter']);
//Flatten. Объединяет многомерную коллекцию в одноуровневую
Route::get('/user66', action: [CollectionController::class, 'flatten']);
//Flip. Меняет местами ключи коллекции на их соответстующие значения
Route::get('/user67', action: [CollectionController::class, 'flip']);
