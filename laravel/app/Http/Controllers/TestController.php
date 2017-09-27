<?php
namespace App\Http\Controllers;

class TestController extends Controller{
    public function posts(){
        for ($i = 1; $i <= 1000; $i++){
            \DB::table('posts')->insert([
                'title' => 'title',
                'content' => 'content',
            ]);
        }
    
        for ($i = 1; $i <= 1000; $i++){
            \DB::table('posts')
            ->take(1)
            ->update([
                'title' => 'title1',
                'content' => 'content1',
            ]);
        }
    
        for ($i = 1; $i <= 1000; $i++){
            \DB::table('posts')
            ->take(1)
            ->delete();
        }
    }
}