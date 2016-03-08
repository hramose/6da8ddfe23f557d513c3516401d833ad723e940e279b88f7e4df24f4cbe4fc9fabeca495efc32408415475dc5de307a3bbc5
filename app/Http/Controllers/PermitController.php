<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Data\Models\Permit;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PermitController extends Controller
{
    /**
      * @var Permit
      */
     protected $permit;
  
     /**
      * @param Permit $permit
      */
     public function __construct(Permit $permit)
     {
         $this->permit = $permit;
     }

     /**
     * 記事の一覧
     *
     * @return \Illuminate\View\View
     */
     public function getIndex()
     {
  		$permits = $this->permit->all();
 
        return view('permit.index')->with(compact('permits'));
     }
  	
  	/**
     * 記事の一覧
     *
     * @return \Illuminate\View\View
     */
     public function getShow($id)
     {
  		$permit = $this->permit->find($id);
 
        return view('permit.show', compact('permit'));
     }
  
  	/**
     * 記事の投稿
     *
     * @return \Illuminate\View\View
     */
     public function getCreate()
     {
  		return view('permit.create');
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
        $this->permit->fill($data);
        $this->permit->save();
 
        return redirect()->to('permits/index');
     }
  
  	/**
     * 記事の編集
     *
     * @param $id
     * @return \Illuminate\View\View
     */
     public function getEdit($id)
     {
  		$permit = $this->permit->find($id);
 
        return view('permit.edit')->withPermit($permit); 
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
  		$permit = $this->permit->find($id);
        $data = $request->all();
        $permit->fill($data);
        $permit->save();
 
        return redirect()->to('permits/index');
     }
  
  	/**
     * 記事の削除
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
     public function postDelete($id)
     {
  		$permit = $this->permit->find($id);
        $permit->delete();
 
        return redirect()->to('permits/index');
     }
}
