<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testAction()
    {
        $allposts=[
            ['id'=>1,'title'=>'PHP','posted_by'=>'John','created_at'=>'2021-01-01'],
            ['id'=>2,'title'=>'Laravel','posted_by'=>'Jane','created_at'=>'2021-01-01'],
            ['id'=>3,'title'=>'JavaScript','posted_by'=>'James','created_at'=>'2021-01-01']
        ];
        return view('test',['posts'=>$allposts]);
    }
}
