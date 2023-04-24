<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Model1 extends Model
{
    public static function readFromFile()
    {
        return file_get_contents("dataFile.txt");
    }
    public static function writeToFile()
    {
        file_put_contents("dataFile.txt","<H1>Hello World!</H1>\r\n<H2>Testing.</H2>");
        echo "Data is written to file";
    }
}
