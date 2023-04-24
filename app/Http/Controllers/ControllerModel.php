<?php
namespace App\Http\Controllers;
use App\Models\Worker;
use Illuminate\Http\Request;
class ControllerModel extends Controller
{
    public function read()
    {
      foreach (Worker::all() as $worker){
        echo $worker->first_name."<br>";
        echo $worker."<br>";
      }
    }

    public function create1()
    {
      Worker::create(['is_admin' => 1,'first_name' => 'John','last_name'  => 'Doe','age' => 21]);
      echo "Creation is done.";
    }

    public function create2()
    {
      Worker::create(['first_name' => 'Frank','last_name'  => 'Brown']);
      echo "Creation is done.";
    }

    public function create3()
    {
      $worker = new Worker();
      $worker->is_admin = 1;
      $worker->first_name = "Mark";
      $worker->last_name = "Taylor";
      $worker->age = 40;
      $worker->save();
      echo "Creation is done.";
    }

    public function update()
    {
      $worker = Worker::where('last_name', 'Hall')->first();
      $worker->first_name = "Mark";  
      $worker->age = 23;     
      $worker->save();
      echo "Update is done.";
    }

    public function delete()
    {
      $worker = Worker::where('last_name', 'Hall')->first();
      $worker->delete();
      echo "Deletion is done.";
    }

    public function databaseformprocess(Request $request)
    {
      Worker::create($request->all());
      echo "Creation is done.";
    }
}
