@extends('defAbout')
@section('script')
    <link href="{{asset('css/about.css')}}" rel="stylesheet" />
@stop
@section('content')
    <div class="header text-center">
        <h3>About Us</h3>
    </div>
    <div class="content">
        <div class="card div1">
            <div class="front">
                <header>
                    <img src="{{asset('images/ahmed.png')}}" alt="mohamed"/>
                </header>
                <h3>Ahmed Salem</h3>
                <p>My name's Ahmed Salem Study In Faculty of computer and information Sciences Mansoura University<br> ( IT Department )<br>
                    I 'm a back-end developer, PHP, Laravel Framework.</p>
                <span>Havor To See Details</span>
            </div>
            <div class="back">
                <ul>
                    <li><span>FaceBook</span>:<a href="https://www.facebook.com/ahmedsalem160"> Flow me on FaceBook</a></li>
                    <li><span>Gmail</span>:<a href="mailto: ahmedsalem012234@gmail.com"> Email me on Gmail</a></li>
                    <li><span>CV</span>:<a href="https://drive.google.com/file/d/1chBHCwDBR-czq0dQqxlC8Uz-ztBU7SA0/view?usp=sharing"> This IS MY CV</a></li>
                    <li><span>Github</span>:<a href="https://github.com/Ahmedsalem160"> Show my repository</a></li>
                    <li><span>LinkedIn</span>:<a href="https://www.linkedin.com/in/ahmed-salem-047b1a157"> Flow me on LinkedIn</a></li>
                </ul>
            </div>
        </div>
        <div class="card div2">
            <div class="front">
                <header>
                    <img src="{{asset('images/mohamed.png')}}" alt="mohamed"/>
                </header>
                <h3>Mohamed Hany</h3>
                <p>My name's Mohamed Hany Study In Faculty of computer and information Sciences Mansoura University<br> ( CS Department )<br>
                    I 'm a back-end developer, PHP, Laravel Framework.</p>
                <span>Havor To See Details</span>
            </div>
            <div class="back">
                <ul>
                    <li><span>FaceBook</span>:<a href="https://www.facebook.com/mohamed.hanyy996"> Flow me on FaceBook</a></li>
                    <li><span>Gmail</span>:<a href="mailto: m.hanyy996@gmail.com"> Email me on Gmail</a></li>
                    <li><span>Twitter</span>:<a href="https://twitter.com/Mohamed24815623?s=09"> Flow me on Twitter</a></li>
                    <li><span>Github</span>:<a href="https://github.com/mohamed9964"> Show my repository</a></li>
                    <li><span>LinkedIn</span>:<a href="https://www.linkedin.com/in/mohamed-hanyy-3014b21b5"> Flow me on LinkedIn</a></li>
                </ul>
            </div>
        </div>
    </div>
@stop
