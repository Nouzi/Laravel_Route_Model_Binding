<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewList;

class ViewLists extends Controller
{

    public function showList(ViewList $id) {

        return view('list', ['DataList' => $id]);

    }

}
