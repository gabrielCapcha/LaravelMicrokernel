<?php

namespace App\Http\Controllers\Home;

use App\Entity\SaleDocument\Logic\SaleDocumentLogic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $saleDocumentList = new SaleDocumentLogic();
        $jsonResponse = $saleDocumentList->getSaleDocumentList();
        return view('pages.home', compact('jsonResponse', $jsonResponse));
    }
}
