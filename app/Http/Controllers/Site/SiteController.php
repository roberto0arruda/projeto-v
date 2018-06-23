<?php
namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function __construct()        
    {
        $this->middleware('auth')->except(['index']);               
    }
    
    public function index()
    {
        return view('welcome');
    }
    
    public function contato()
    {
        return 'Pagina de Contatos, Telefones e formularios';
    }
    
    public function categoria($id)
    {
        return 'Listagem dos carros por categoria';
    }
}
