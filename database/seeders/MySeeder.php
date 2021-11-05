<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('cars')->insert(
        //   [
        // 'VIN' => '48585858943',
        //      'Make' => 'Toyota',
        //     'Model' => 'Corolla',
        //     'Color' => 'Black'
               
        //     ], 

            // [
            // 'VIN' => '76483092384',
            // 'Make' => 'GMC',
            // 'Model' => 'Denali',
            // 'Color' => 'White'
               
            // ], 
            // [
            // 'VIN' => '43588790443',
            // 'Make' => 'Honda',
            // 'Model' => 'Accord',
            // 'Color' => 'Red'
            // ],
            //  [
            // 'VIN' => '23476512893',
            // 'Make' => 'Ford',
            // 'Model' => 'F-150',
            // 'Color' => 'White'
            //  ],
            //    [
            // 'VIN' => '88945092384',
            // 'Make' => 'Nissan',
            // 'Model' => 'Rouge',
            // 'Color' => 'Grey'
            //  ],
            //    [
            // 'VIN' => '10987654325',
            // 'Make' => 'BMW',
            // 'Model' => 'I8',
            // 'Color' => 'Blue'
            //  ],
            //    [
            // 'VIN' => '77773649823',
            //  'Make' => 'Dodge',
            //  'Model' => 'Hellcat',
            //  'Color' => 'Black'
            //   ],
            //      [
            // 'VIN' => '48665478390',
            //  'Make' => 'Nissan',
            //  'Model' => 'GTR',
            //  'Color' => 'Red'
            //   ],
            //      [
            // 'VIN' => '77493840933',
            //  'Make' => 'Ram',
            //  'Model' => 'Limited',
            //  'Color' => 'Grey'
            //   ],
                  [
            'VIN' => '37646522893',
             'Make' => 'Rolls Royce',
             'Model' => 'Wraith',
             'Color' => 'Black'
              ],
             
    );
    }
 }
    


  
