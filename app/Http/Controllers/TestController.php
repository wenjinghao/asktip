<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Authentication;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Exchange;
use App\Models\FriendshipLink;
use App\Models\Goods;
use App\Models\Notice;
use App\Models\Question;
use App\Models\Recommendation;
use App\Models\Setting;
use App\Models\Tag;
use App\Models\Taggable;
use App\Models\User;
use App\Models\UserData;
use App\Models\UserTag;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('theme::home.test');

    }
}
