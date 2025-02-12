@extends('layouts.base')
@section('title','掲示板画面')
@section('main')

<p Align="right">
 <a href="/bulletinboard/register"><button type="submit" class="btn btn-info">新規投稿</button></a>
 <input id="word" type="text" placeholder="キーワードを入力" />
 <button class="btn btn-info"  >検索</button>
</p>

@foreach($threads as $item)
　<div class="col-sm-12">
　　<div class="card border-info">
　　　<li>{{$item->thread_id}}
　　　   <a href="/bulletinboard/contents/?thread_id={{$item->thread_id}}">{{$item->title}}</a>
        <p Align="right">{{$item->s_id}} {{$item->created_at}}<br>
          <span class="badge badge-success">コメント件</span>
        </p>
    </div>
  </div>
 @endforeach
<br/>

<p Align="right">
 <a href="/home"><button type="submit" class="btn btn-info">戻る</button></a>
</p>

@endsection
