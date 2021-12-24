@extends('layouts.app')

@section('title', 'Nicecaps')

@section('content')
        <!-- header -->
        <header>
        <div class="container">
            <div class="row">
            
                        <div class="about col-md-6 ml-auto justify-content-center">
                        <h1 style="color: #1C51E8">NICECAPS NFT</h1>
                        <h1>500+ COLLECTIONS</h1>
                        <p>
                        Nicecaps NFT is created and inspired by diecast. 
                        This piece of art is showing how we can no longer 
                        separated with digital space anymore. Any single word, 
                        art, tap, and idea comes from what we wrote by using 
                        keyboard. Every part in the keyboard have different 
                        meaning based on the user. Here we are, present our 
                        product in the form of KEYCAPS that built thorugh fusion 
                        between user interest and unique thematic concept. 
                        You can collect our NFT with the total of number around 
                        500+ piece. Find your caps here!
                            
                            
                        </p>

                        <div class="logo d-flex d-flex-row inline">
                        <a href="https://hen.teztools.io/nicecapsnft" target="_blank">
                            <img class="logo-1" src={{url("frontend/images/icon/logo-2.png")}} alt="">
                        </a>
                        <a href="">
                            <img class="logo-2" src={{url("frontend/images/icon/logo-1.png")}} alt="">
                        </a>
                                
                        </div>
                        </div>
                    
                    
                    <div class="example col-md-6 col-xs-6 d-flex justify-content-end" id="content">
                        @foreach ($thumbnail as $item)
                        
                        <img  src="{{Storage::url($item->thumbnail)}}"  alt="" />
                   
                       
                        @endforeach
                        
                        {{-- <img class="base" src={{url("frontend/images/Package 5 copy.jpg")}}  alt="" />
                        <img src={{url("frontend/images/Package 4 copy.jpg")}} alt="" />
                        <img src={{url("frontend/images/Package 3 copy.jpg")}} alt="" /> --}}
                    </div>
                   
                    

                    
            </div>
        </div>
        </header>
            

        <main>
        <!-- variant -->
        <section class="variant-item">
            <div class="container">
            <div class="variant text-center">
                <h5 class="mt-2">
                    Variant of
                </h5>
                <h3>
                    Nicecaps NFT
                </h3>

                <div class="slider autoplay mt-3">
                    @foreach ($gallery as $item)
                    <div class="multiple"><img src="{{Storage::url($item->image)}}" class="img-fluid" alt=""></div>
                    
                    @endforeach
                   
                    
                </div>

            </div>
        </div>
        </section>

        <!-- roadmaps -->
        <section class="roadmap-title">
            <div class="container">
            <h4>ROADMAPS+</h4>
            <h5>NICECAPS NFT</h5>
            </div>
        </section>

        <section class="roadmaps">
            @foreach ($roadmap as $item)    
            <ul>
                <li>
                    <div>
                        
                    <section class=" d-flex justify-content-start ">
                        
                            
                        
                        <h3 class="number">
                        {{$item->number}}
                        </h3>
                        <h3 class="title">
                        {{$item->title_roadmap}}
                    </h3>
                    </section>
                    <p>
                    {{$item->detail_roadmap}}
                    </p>
                    
                </div>
                </li>

                </ul>
                @endforeach
            </section>

        <!-- partners -->
            <section class="section section-partners-Content" 
                id="PartnersContent">
                    <div class="container">
                    <div class="partners-title row">
                        <h3 class="col-sm-4">WHO ARE WE ?</h3>
                        <P class="col-sm-7">
                        Hello!, We are a..
                        </P>
                    </div>

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                        <div class="card h-200">
                            <img src={{url("frontend/images/man-1.jpg")}} class="card-img-top" alt="...">
                            <div class="card-body d-flex justify-content-between">
                            <h4 class="card-title">ILHAM</h4>
                            <ul class="nav">
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fab fa-instagram fa-lg"></i>
                                </a>
                                
                                </li>
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fab fa-twitter fa-lg"></i>
                                </a>
                                </li>
                            </ul>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="card h-200">
                            <img src={{url("frontend/images/man-1.jpg")}} class="card-img-top" alt="...">
                            <div class="card-body d-flex justify-content-between">
                            <h4 class="card-title">ANUNG</h4>
                            <ul class="nav">
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fab fa-instagram fa-lg"></i>
                                </a>
                                
                                </li>
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fab fa-twitter fa-lg"></i>
                                </a>
                                </li>
                            </ul>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="card h-200">
                            <img src={{url("frontend/images/man-1.jpg")}} class="card-img-top" alt="...">
                            <div class="card-body d-flex justify-content-between">
                            <h4 class="card-title">KRITS</h4>
                            <ul class="nav">
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fab fa-instagram fa-lg"></i>
                                </a>
                                
                                </li>
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fab fa-twitter fa-lg"></i>
                                </a>
                                </li>
                            </ul>
                            </div>
                        </div>
                        </div>
                        
                    </div>
            </section>

        <!-- comunity -->
            <section class="section-comunity justify-content-center">
                <div class="container">
                <div class="title-comunity">
                    <h3>Join The Comunity?</h3>
                    <p>For more early update and announcement, let’s join our community.</p>
                </div>
                
                <div class="section-join-discord">
                    <a href="#">
                    <img src={{url("frontend/images/icon/logo-discord.png")}} alt="">
                    </a>
                </div>

                </div>
            </section>

        </main>
@endsection