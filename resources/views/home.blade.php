@if (Auth::check())

    @if(auth()->user()->isAdmin())

        <script>window.location = "/admin" </script>

    @else

    @extends('layouts.user')

    @section('css')

    <link rel="stylesheet" href="{{asset('css/Rimouski.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylex.css')}}">
    <link rel="stylesheet" href="{{asset('css/stt.css')}}">
    <link rel="stylesheet" href="{{asset('css/calender.css')}}">

    @endsection

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Welcome, {{ Auth::user()->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container3">
    <div id="time"></div><br>
    <div id="clock">
        <div class="num num1"><div>1</div></div>
        <div class="num num2"><div>2</div></div>
        <div class="num num3"><div>3</div></div>
        <div class="num num4"><div>4</div></div>
        <div class="num num5"><div>5</div></div>
        <div class="num num6"><div>6</div></div>
        <div class="num num7"><div>7</div></div>
        <div class="num num8"><div>8</div></div>
        <div class="num num9"><div>9</div></div>
        <div class="num num10"><div>10</div></div>
        <div class="num num11"><div>11</div></div>
        <div class="num num12"><div>12</div></div>
        <div id="hr-hand"></div>
        <div id="min-hand"></div>
        <div id="sec-hand"></div>
    </div>
    </div>
    
    <div id="calender" style="float:left ">
        <div id="calenderTop">
        <span class="month">February</span>
        </div>
        <div id="otherPages" class="one"></div>
        <div id="otherPages" class="two"></div>
        <div id="otherPages" class="three"></div>
        <span class="day">15</span>
    </div>

    @endsection

    @section('scripts')

    <script src="{{asset('js/apps.js')}}"></script>
    <script src="{{asset('js/time.js')}}"></script>
    <script src="{{asset('js/calender.js')}}"></script>

    @endsection

    
    @endif

@else

<script>window.location = "/login" </script>

@endif

