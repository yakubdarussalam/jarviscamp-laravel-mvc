<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class Task extends Model
{
    use HasFactory;

    private static $tasks = [
        [
            'id' => 1,
            'name'=> 'Pemrograman Web',
            'description'=> 'Membuat Routes, View, Model dan Controller',
            'deadline' => '2023-09-09',
            'status' => 'Selesai',
        ],
        [
            'id' => 2,
            'name'=> 'Kelas Memasak',
            'description'=> 'Membuat Telur Dadar Mata Sapi',
            'deadline' => '2023-09-10',
            'status' => 'Belum Selesai',
        ],
        [
            'id' => 3,
            'name'=> 'Kelas Olahraga',
            'description'=> 'Bermain Catur dengan Otak Senku',
            'deadline' => '2023-09-11',
            'status' => 'Belum Selesai',
        ],
    ];
    public static function getData(){
        return self::$tasks;
    }

    public static function getById($id){
        $AllTask =  self::$tasks;
        $taskById = [];
        foreach ($AllTask as $task) {
            if ($task ['id']==$id) {
                $taskById = $task;
            }
        }

        return $taskById;
    }
}

