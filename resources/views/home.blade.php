@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">پروفایل شما</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 <span class="text-success">  {{ Auth::user()->name }}  </span>    عزیز
                   به حساب کاربری خود خوش آمدید!
                    <div class="pt-20" style="padding-top:6vh;"> <a style="color:black" href="{{route('cart')}}">مشاهده سبد خرید</a> </div>
                    <div class="pt-20" style="padding-top:3vh;"> <a style="color:black" href="{{route('home')}}">برگشت به صفحه اصلی</a> </div>
                <div class="pt-20" style="padding-top:3vh;">تغییر مشخصات کاربری</div>
            </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
