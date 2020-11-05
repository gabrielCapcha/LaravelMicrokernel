<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModulesController extends Controller
{
    public function install(Request $request)
    {
        $request = $request->all();
        $gitBranch = $request['branch'];
        $output = shell_exec('cd ..\\Modules && git clone -b ' . $gitBranch . ' https://github.com/gabrielzz740/microkernelModules.git .');
        return redirect('/home');
    }
}
