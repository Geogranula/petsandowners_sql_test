<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Owner;

class PetsController extends Controller
{
    public function index()
    {
        $owners = DB::select('
        SELECT *
        FROM `animals`
        LEFT JOIN `owners`
            ON `animals`.`owner_id` = `owners`.`id`
        LEFT JOIN `images`
            ON `animals`.`image_id` = `images`.`id`
        WHERE `owners`.`surname` LIKE "a%"
        ORDER BY `owners`.`first_name` ASC
        ');


    return view ('structure.list',
        [
            'owners' => $owners
        ]
        );
    }

    // public function images()
    // {
    //     $images = DB::select('
    //     SELECT *
    //     FROM `images`
    //     LEFT JOIN `animals`
    //         ON `images`.`id` = `animals`.`image_id`
    //     WHERE `owners`.`surname` LIKE "a%"
    //     ORDER BY `owners`.`first_name` ASC
    //     ');

    // return view ('structure.list',
    //     [
    //         'images' => $images
    //     ]
    //     );
    // }

}