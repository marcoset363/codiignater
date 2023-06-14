<?php

namespace App\Controllers;
    use App\Models\modelosprod;
    use App\Models\productos;
    use App\Models\modelosinicio;
    use App\Models\login;

    class Home extends BaseController
{
    public function index()
    {
        $product = new productos();
        $data['products'] = $product->findAll();
        return view('index', $data);

    }
    public function inicio()
    {
        return view('inicio');
    }
    
    public function agregarproductos()
    {
        return view('agregarproductos');
    }
    public function formproduct(){
        $product =new productos();
        $file = $this->request->getFile('imagen');
        if($file->isValid() && ! $file->hasMoved()){
            $imageName = $file->getRandomName();
            $file->move('public/uploads/',$imageName);
        }
        $data =[
            'nombrepro' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'link' => $imageName,
            'precio' => $this->request->getPost('precio'),
            'Stock' => $this->request->getPost('precio')

        ];
        $product->save($data);
        return redirect()->to('/mainstore')->with('status',"product data and image saved");
        return redirect()->to('/store')->with('status',"product data and image saved");
    }
}
