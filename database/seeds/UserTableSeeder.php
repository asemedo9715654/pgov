<?php
 /**
 * 
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

use Illuminate\Support\Facades\DB;

 class UserTableSeeder extends Seeder{
 	


 	public function run(){

 		# code...
 		$login=new User;
 		$login->name='Root';
 		$login->email='root@laravel.com' ;
 		$login->password=Hash::make('12345');
 		$login->save();
 	}

 }

?>