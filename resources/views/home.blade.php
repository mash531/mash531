@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">アップロード履歴</div>
                <!----アップロード履歴表示-->
    <div class="panel panel-default">               @foreach ($name as $files ['image']){
                    <!--<img class="img" src="{{ asset('$name => $files ') }}">-->
                   <img class="img" src="{{ secure_asset('/icon_1r_96.png')}}" alt="logo" width=96px height="96px">
                }
               @endforeach
              </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--ダウンロードボタン-->

                </div>
            </div>
        </div>
    </div>
</div>
<span class="btn-toolbar offset-md-7">
  <div class="btn-group">
    
                         <form method="GET" action="{{ route('upload-index') }}">

                         <!--<div class="col-md-2 offset-md-8">-->
                                     <button type="submit" class="btn btn-outline-primary">
                                    {{ __('アップロードする') }}
                                </button>
                            </div>
                            </form>
                            
                            <form method="download" action="{{ route('download') }}">
                            <div class="btn-outline-primary">
                            <!--<button type='download' class="btn btn-outline-primary">-->
                             @foreach ($name as $files)
               @endforeach
               <a class="btn btn-outline-primary" href="{{('$name.pdf')}}" download>ダウンロードする</a>
                                     <!--{{ __('ダウンロードする') }}     -->
                            <!--</button>-->
                            
                           </div>
                           </form>
                        </span>

@endsection
