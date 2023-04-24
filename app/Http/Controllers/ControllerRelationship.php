<?php
namespace App\Http\Controllers;
use App\Models\Worker;
use App\Models\Address;
class ControllerRelationship extends Controller
{
  public function print1(){
    echo Worker::find(1)->addresses."<p>";
    echo Worker::find(1)->addresses->first()."<br>";
    echo Worker::find(1)->addresses->first()->city."<p>";
    foreach (Worker::find(1)->addresses  as $address)
      echo $address->city." ".$address->street." ".$address->number."<br>";
  }

  public function print2(){
    echo Address::find(1)->worker."<p>";
    $worker = Address::find(1)->worker;
    echo $worker->first_name." ".$worker->last_name." ".$worker->login." ".$worker->age."<p>";
  }
}
