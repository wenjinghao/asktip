@extends('theme::layout.public')
@section('seo_title'){{ parse_seo_template('seo_index_title','default') }}@endsection
@section('jumbotron')
    @if(Auth()->guest())
    <div class="jumbotron text-center">
        <h4>{{ Setting()->get('website_welcome','现在加入Tipask问答网，一起记录站长的世界') }} <a class="btn btn-primary ml-10" href="{{ route('auth.user.register') }}" role="button">立即注册</a> <a class="btn btn-default ml-5" href="{{ route('auth.user.login') }}" role="button">用户登录</a></h4>
    </div>
    @endif
@endsection

@section('content')
    <div class="row mt-10">
            test
    </div>

@endsection