<?php
     
    namespace App\Http\Controllers;

	class UserController extends Controller
	{
		public function show()
		{
		    return view('show');
		}

        // public function all()
		// {
		// 	return view('user.all');
		// }

        // public function show_name($name)
		// {
		// 	return 'пользователь: ' . $name;
		// }

        // public function show_surname_name($surname, $name)
		// {
		// 	return 'пользователь: ' . $surname . ' ' . $name;
		// }

        // public function show_names($name)
		// {
		// 	$users = [
        //         'Никита' => 'Екатеринбурге',
        //         'Аня' => 'Москве',
        //         'Максим' => 'Омске',
        //         'Захар' => 'Томске',
        //         'Николай' => 'Санкт-Петербурге',
        //     ];

		// 	if (array_key_exists($name, $users) == true) {
		// 	    return $name . ' ' . 'обитает в ' . $users[$name];
        //     } else {
        //         return 'Ошибка. Такой пользователь не найден.';
        //     }
		// }

		// public function user() {
		// 	return view('user.user', ['name' => 'Максим', 'surname' => 'Калинин']); //да, тавтология, но класс называется user и функция называется user, тут уж ничего не поделать.
		// }

		public function name() {
			return view('user.name', [
				'title' => 'name',
				'name' => 'Максим',
			]);
		}

		public function surname() {
			return view('user.surname', [
				'title' => 'surname',
				'surname' => 'Калинин',
			]);
		}

		public function salary() {
			return view('user.salary', [
				'title' => 'salary',
				'salary' => 'кусок хлеба',
			]);
		}
	}
	//только после всей работы я понял, что все это время создавал фунции в одном контроллере... убейте...
?>
