<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Data\Models\Rol;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RolController extends Controller
{
    /**
      * @var Rol
      */
     protected $rol;
  
     /**
      * @param Rol $rol
      */
     public function __construct(Rol $rol)
     {
         $this->rol = $rol;
     }

     /**
     * 記事の一覧
     *
     * @return \Illuminate\View\View
     */
     public function getIndex()
     {
  		$rols = $this->rol->all();
 
        return view('rol.index')->with(compact('rols'));
     }
  	
  	/**
     * 記事の一覧
     *
     * @return \Illuminate\View\View
     */
     public function getShow($id)
     {
  		$rol = $this->rol->find($id);
 
        return view('rol.show', compact('rol'));
     }
  
  	/**
     * 記事の投稿
     *
     * @return \Illuminate\View\View
     */
     public function getCreate()
     {
  		return view('rol.create');
     }
  
  	/**
     * 記事の投稿
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
     public function postCreate(Request $request)
     {
  		$data = $request->all();
        $this->rol->fill($data);
        $this->rol->save();
 
        return redirect()->to('rols/index');
     }
  
  	/**
     * 記事の編集
     *
     * @param $id
     * @return \Illuminate\View\View
     */
     public function getEdit($id)
     {
  		$rol = $this->rol->find($id);
 
        return view('rol.edit')->withRol($rol); 
        //上記の withArticle($article) は with('article' => $article) と同じです。
     }
  
  	/**
     * 記事の編集
     *
     * @param Request $request
     * @param         $id
     * @return \Illuminate\Http\RedirectResponse
     */
     public function postEdit(Request $request, $id)
     {
  		$rol = $this->rol->find($id);
        $data = $request->all();
        $rol->fill($data);
        $rol->save();
 
        return redirect()->to('rols/index');
     }
  
  	/**
     * 記事の削除
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
     public function postDelete($id)
     {
  		$rol = $this->rol->find($id);
        $rol->delete();
 
        return redirect()->to('rols/index');
     }
}
