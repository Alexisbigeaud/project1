<?php
namespace App\Http\Controllers;
use App\Models\Model1;
class ControllerModel1 extends Controller
{
  public function readData()
  {
    echo Model1::readFromFile();
  }
  public function writeData()
  {
    Model1::writeToFile();
  }
}
