<?php

namespace App\Http\Controllers;

use App\Http\Requests\Article\StoreRequest;
use App\Http\Requests\Article\UpdateRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        try {
//            DB::beginTransaction();

            if (isset($data['preview_admin'])) {
                $data['preview_admin'] = Storage::disk('public')->put('/images', $data['preview_admin']);
                $data['preview'] = url('/storage/' . $data['preview_admin']);
            } else {
                $data['preview'] = null;
                $data['preview_admin'] = null;
            }
            if (isset($data['img_first_admin'])) {
                $data['img_first_admin'] = Storage::disk('public')->put('/images', $data['img_first_admin']);
                $data['img_first'] = url('/storage/' . $data['img_first_admin']);
            } else {
                $data['img_first'] = null;
                $data['img_first_admin'] = null;
            }
            if (isset($data['img_second_admin'])) {
                $data['img_second_admin'] = Storage::disk('public')->put('/images', $data['img_second_admin']);
                $data['img_second'] = url('/storage/' . $data['img_second_admin']);
            } else {
                $data['img_second'] = null;
                $data['img_second_admin'] = null;
            }
            if (isset($data['img_third_admin'])) {
                $data['img_third_admin'] = Storage::disk('public')->put('/images', $data['img_third_admin']);
                $data['img_third'] = url('/storage/' . $data['img_third_admin']);
            } else {
                $data['img_third'] = null;
                $data['img_third_admin'] = null;
            }
            if (isset($data['img_fourth_admin'])) {
                $data['img_fourth_admin'] = Storage::disk('public')->put('/images', $data['img_fourth_admin']);
                $data['img_fourth'] = url('/storage/' . $data['img_fourth_admin']);
            } else {
                $data['img_fourth'] = null;
                $data['img_fourth_admin'] = null;
            }
            if (isset($data['img_fifth_admin'])) {
                $data['img_fifth_admin'] = Storage::disk('public')->put('/images', $data['img_fifth_admin']);
                $data['img_fifth'] = url('/storage/' . $data['img_fifth_admin']);
            } else {
                $data['img_fifth'] = null;
                $data['img_fifth_admin'] = null;
            }

            Article::create($data);

//        DB::commit();
        } catch (\Exception $exception) {
//            DB::rollBack();
            abort(500);
        }
        return redirect(route('article.index'));

    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function update(UpdateRequest $request, Article $article)
    {
        $data = $request->validated();
        try {
//            DB::beginTransaction();
            if (isset($data['preview_admin'])) {
                $data['preview_admin'] = Storage::disk('public')->put('/images', $data['preview_admin']);
                $data['preview'] = url('/storage/' . $data['preview_admin']);
            }
            if (isset($data['img_first_admin'])) {
                $data['img_first_admin'] = Storage::disk('public')->put('/images', $data['img_first_admin']);
                $data['img_first'] = url('/storage/' . $data['img_first_admin']);
            }
            if (isset($data['img_second_admin'])) {
                $data['img_second_admin'] = Storage::disk('public')->put('/images', $data['img_second_admin']);
                $data['img_second'] = url('/storage/' . $data['img_second_admin']);
            }
            if (isset($data['img_third_admin'])) {
                $data['img_third_admin'] = Storage::disk('public')->put('/images', $data['img_third_admin']);
                $data['img_third'] = url('/storage/' . $data['img_third_admin']);
            }
            if (isset($data['img_fourth_admin'])) {
                $data['img_fourth_admin'] = Storage::disk('public')->put('/images', $data['img_fourth_admin']);
                $data['img_fourth'] = url('/storage/' . $data['img_fourth_admin']);
            }
            if (isset($data['img_fifth_admin'])) {
                $data['img_fifth_admin'] = Storage::disk('public')->put('/images', $data['img_fifth_admin']);
                $data['img_fifth'] = url('/storage/' . $data['img_fifth_admin']);
            }

            Article::find($article->id)->update($data);

//        DB::commit();
        } catch (\Exception $exception) {
//            DB::rollBack();
            abort(500);
        }
        return redirect(route('article.index'));
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index');
    }
}
