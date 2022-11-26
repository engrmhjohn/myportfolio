@extends('frontEnd.master')
@section('title')
    Mehedi Hasan John's Portfolio
@endsection
@section('content')
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Mehedi Hasan John</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="mailto:johnsubcse@gmail.com">Hire me</a>
                <a href="https://www.linkedin.com/in/engmhjohn/" target="_blank">Linkedin</a>
                <a href="https://github.com/engrmhjohn" target="_blank">Github</a>
            </div>
        </div>
    </section>

    <!-- section tabbar-->
    <div class="section tabbar_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab_menu">
                        <ul>
                            <li><a href="https://www.facebook.com/engrmhjohn" target="_blank"><span class="icon"><img src="{{ asset('frontEndAsset') }}/images/fb.png" alt="#" /></span><span>Facebook</span></a></li>
                            <li><a href="https://www.instagram.com/m_h_j_o_h_n/" target="_blank"><span class="icon"><img src="{{ asset('frontEndAsset') }}/images/instagram.png" alt="#" /></span><span>Instagram</span></a></li>
                            <li><a href="https://twitter.com/engrmhjohn" target="_blank"><span class="icon"><img src="{{ asset('frontEndAsset') }}/images/twitter.png" alt="#" /></span><span>Twitter</span></a></li>
                            <li><a href="https://mhjohn.com/" target="_blank"><span class="icon"><img src="{{ asset('frontEndAsset') }}/images/i4.png" alt="#" /></span><span>Portfolio</span></a></li>
                            <li><a href="https://www.linkedin.com/in/engmhjohn/" target="_blank"><span class="icon"><img src="{{ asset('frontEndAsset') }}/images/linkedin.png" alt="#" /></span><span>Linkedin</span></a></li>
                            <li><a href="https://github.com/engrmhjohn" target="_blank"><span class="icon"><img src="{{ asset('frontEndAsset') }}/images/github.png" alt="#" /></span><span>Github</span></a></li>
                            <li><a href="mailto:johnsubcse@gmail.com" ><span class="icon"><img src="{{ asset('frontEndAsset') }}/images/i6.png" alt="#" /></span><span>Email</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section -->

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="{{ asset('frontEndAsset') }}/images/mhjohn.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Mehedi and I'm a <span class="typing-2"></span></div>
                    <p>I am a noob programming geek, a lover of freedom, and an enthusiast of technology. I studied Computer Science and Engineering (CSE) at Stamford University Bangladesh. I love to do research works on Networking too. Besides web desiging & developing, I write articles. At the time of my study break, I try to create different projects which are academic and non-academic. I've also participated in different Project Shows, Programming Contests, and International Conferences. At my leisure, love to play games and read story books. I love music. I am very keen to do social work.</p>
                    <a href="https://drive.google.com/u/0/uc?id=1n27ywyHWw678I_NrGNlxXeY3z941Hdja&export=download">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Microsoft Office</div>
                        <p>I am Expert in Microsoft Office Program. I know most of the tools and techniques.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>Though there is no limitations about learning but I know how to design a website.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Web Development
                        </div>
                        <p>Although I am a noob programmer but I always try to give my best to develop a site.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Career Objectives.</div>
                    <p>To build career in a growing organization, where I
                        can get the opportunities to prove my abilities by
                        accepting challenges, fulfilling the organizational
                        goal and clamp the career ladder through and
                        commitment.</p> <br>
                    <div class="text">Projects</div>
                    <p>Though I am still beginner but I have some live projects. Explore..</p>

                    <a href="https://engrmhjohn.github.io/eduford" target="_blank">Eduford</a>
                    <a href="https://engrmhjohn.github.io/central" target="_blank">Central</a>
                    <a href="https://engrmhjohn.github.io/topperr" target="_blank">Topperr</a>
                    <a href="https://engrmhjohn.github.io/apical" target="_blank">Apical</a>
                    <a href="https://blog.mhjohn.com/" target="_blank">Blog</a>
                    <a href="https://tour.mhjohn.com/" target="_blank">Tour</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>90%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>60%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>80%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="{{ asset('frontEndAsset') }}/images/profile-1.jpg" alt="">
                        <div class="text">Md Nahid Hasan</div>
                        <p>Junior Software Engineer at Brotecs Technologies Limited </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="{{ asset('frontEndAsset') }}/images/profile-2.jpg" alt="">
                        <div class="text">Rakib Hassan</div>
                        <p>Marketing Lead at CureTech Bangladesh</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="{{ asset('frontEndAsset') }}/images/profile-3.jpeg" alt="">
                        <div class="text">Shafkat Uddin</div>
                        <p>Web Design & Developer also a Founder of digitalarchitectbd.com</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="{{ asset('frontEndAsset') }}/images/profile-4.jpeg" alt="">
                        <div class="text">Md Tutul Hossain</div>
                        <p>Wordpress Developer & Founder of priceintobd.com</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="{{ asset('frontEndAsset') }}/images/profile-5.jpeg" alt="">
                        <div class="text">Shaiful Islam</div>
                        <p>Junior Software Engineer at Qtec Solution Limited</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="{{ asset('frontEndAsset') }}/images/profile-6.jpg" alt="">
                        <div class="text">Tamim Wasif</div>
                        <p>Software Engineer at Teton Private Ltd</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<!-- contact section start -->--}}
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>As I am a fresher, so mistakes should be overlooked. If you have any suggestion regarding this for improvement, please send us your opinion directly through email or leave a meessage.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Mehedi Hasan John</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Dhaka, Bangladesh</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">johnsubcse@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="text">Feedback Me</h3>
                        </div>
                        <div class="card-body">

                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                                {{ csrf_field() }}
                                <div class="fields">
                                    <div class="field name">
                                        <input class="name" type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="field phone">
                                        <input class="phone" type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="field email">
                                    <input class="email" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="field">
                                    <input class="subject" type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}">
                                    @if ($errors->has('subject'))
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                                <div class="field textarea">
                                    <textarea class="message" cols="30" rows="5" name="message" placeholder="Message..">{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                                <div class="button-area">
                                    <button class="btn btn-success btn-submit">Give Feedback</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
