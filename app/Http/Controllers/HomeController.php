<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data =[];
    public function  index(){
        $this->data['welcome']="Hoc lap trinh";
        $this->data['content']='<h3>Nhap mon Laravel</h3>
            <p> kien thuc 1 </p>
            <p> kien thuc 2 </p>
            <p> kien thuc 3 </p>';
        $this->data['index']=1;

       $this->data['dataArr']=['Item1','Item2','Item3'];
           return view('clients.home',$this->data);
    }

    public function products(){
        $this->data['title']='Danh sach san pham';
        return view('clients.products',$this->data);
    }
    public function getAdd(){
        $this->data['title']='Them san pham';
        return view('clients.add', $this->data);
    }
    public function postAdd(Request $request){
        dd($request);
    }
}
