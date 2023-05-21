<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $customers = BD::table('customers')->get();
        var_dump($customers); // php ta aita 
        dd($customers); // laravel a aita
    }
    
}
// Inserts:
// DB::table('customers')->insert(
//     ['email' => 'john@example.com', 'votes' => 0]
// );
// DB::table('customers')->insert([
//     ['email' => 'taylor@example.com', 'votes' => 0],
//     ['email' => 'dayle@example.com', 'votes' => 0]
// ]);
 

// Updates:
// DB::table('customers')
//   ->where('id', 1)
//   ->update(['votes' => 1]);
// Update Or Insert:

// DB::table('customers')
//     ->updateOrInsert(
//         ['email' => 'john@example.com', 'name' => 'John'],
//         ['votes' => '2']
//     );
 

// Increment & Decrement:

// DB::table('customers')->increment('votes');
// DB::table('customers')->increment('votes', 5);
// DB::table('customers')->decrement('votes');
// DB::table('customers')->decrement('votes', 5);
 

// Deletes:
// DB::table('customers')->delete();
// DB::table('customers')->where('votes', '>', 100)->delete();
// DB::table('customers')->truncate();
 

// Debugging:

// DB::table('customers')->where('votes', '>', 100)->dd();
// DB::table('customers')->where('votes', '>', 100)->dump();
