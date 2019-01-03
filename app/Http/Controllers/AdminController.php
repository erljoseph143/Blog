<?php

namespace App\Http\Controllers;

use App\Article;
use Dotenv\Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function adminList()
	{
		$articles = Article::all();
		return view('admin.admin-list',compact('articles'));
	}

	public function single($id)
	{
		$article = Article::find($id);
		return view('admin.single',compact('article'));
	}

	public function adminPost()
	{
		return view('admin.admin-post');
	}

	public function saveNewArticle(Request $request)
	{
		$validatedData = $request->validate([
			'image'     => 'required|image|mimes:jpeg,png,jpg,gif',
			'title'     => 'required',
			'contents'  => 'required',
		]);

		$file      = $request->file('image');
		$file_name = $file->getClientOriginalName();
		$file_path = 'uploads/';

		if($file->move($file_path, $file_name))
		{
			$data  = [
						'image'    => $file_path.$file_name,
						'title'    => $request->title,
						'contents' => $request->contents
					 ];
            Article::updateOrCreate($data);
            return redirect('/admin/admin-list');
		}
	}

	public function editArticle($id)
	{
		$article = Article::find($id);
		return view('admin.edit-post',compact('article'));
	}

	public function updateArticle(Request $request)
	{
		$validatedData  = $request->validate([
			'image'     => 'required|image|mimes:jpeg,png,jpg,gif',
			'title'     => 'required',
			'contents'  => 'required',
		]);

		$file      = $request->file('image');
		$file_name = $file->getClientOriginalName();
		$file_path = 'uploads/';

		if($file->move($file_path, $file_name))
		{
			$id    = $request->article_id;
			$data  = [
				'image'    => $file_path.$file_name,
				'title'    => $request->title,
				'contents' => $request->contents
			];
			Article::where('id',$id)->update($data);

			return redirect('/admin/admin-list');
		}
	}
}
