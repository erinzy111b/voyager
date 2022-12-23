<?php

namespace APP\Widgets;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class UserDimmer extends BaseDimmer
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
        $count = User::count();
        $string = "用戶數量" . $count;

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-person',
            'title' => "{$string}",
            'text' => "目前用戶為" . $count . "位",
            'button' => [
                'text' => "顯示使用者",
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
        return Auth::user()->can('browse', Voyager::model('User'));
    }
}
// 做完記得去 config\voyager.php 下的 'widgets' 宣告顯示