<?php

namespace App\Http\Controllers\Api;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
// use App\Models\News;

class NewsController extends Controller
{

    /**
     * お知らせの一覧を取得します。
     * ※ 新着お知らせとしても利用
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        // サンプル実装です。Modelとテーブルを作成し、ニュース一覧を取得します
        // $news = News::orderBy('id', 'desc')->pagenate($request->limit ?? null);
        $news = $this->mockNewsList($request);
        return response()->json($news);
    }

    /**
     * Mockとしてニュースデータを作成しています。
     *
     * @param Request $request
     * @return LengthAwarePaginator
     */
    private function mockNewsList(Request $request): LengthAwarePaginator
    {
        //limitを指定しない場合は15記事表示
        $perPage = $request->limit ?? 15;
        $collection = News::latest()->get();
        //ページネーション。各種設定を記述してある
        return new LengthAwarePaginator(
            $collection->forPage($request->page, $perPage),
            count($collection),
            $perPage,
            $request->page,
            ['path' => $request->url()]
        );
    }
}
