<?php

namespace APP\Widgets;

use App\Models\Article;
use TCG\Voyager\Widgets\BaseDimmer;

class ArticleDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Article::count();
        $string = "文章數量" . $count;

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-news',
            // 可以從指南針裡面找樣式
            'title' => "{$string}",
            'text' => "目前文章為" . $count . "篇",
            'button' => [
                'text' => "顯示文章",
                'link' => route('voyager.users.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return true;
    }
}