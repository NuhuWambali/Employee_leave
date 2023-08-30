@extends('Layouts.auth.authmain')
@section('title','Login')
@section('content')
<section style="background-color: #eee;height:100vh">
        <div class="container pt-3 " >
            <div class="row d-flex justify-content-center align-items-center" style="margin-top:78px">
            <div class="col-md-12">
                <div class="card text-black" style="border-radius: 25px; margin-bottom:20px">
                <div class="card-body p-md-1 ">
                    <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" aria-hidden="true" data-dismiss="alert">x</button>
                            {{session()->get('message')}}
                        </div>
                     @endif
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
                        <form class="mx-1 mx-md-4" action="{{route('postLogin')}}" method="post">  
                            @csrf                      
                        <div class="d-flex flex-row align-items-center mb-2">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Your Email</label>
                            <input type="email" id="form3Example3c" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{old('email')}}"/>
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-2">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">Password</label>
                            <input type="password" id="form3Example4c" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password')}}"/>
                            @error('password')
                            <div class="invalid-feedback">
                                 {{$message}}
                            </div>
                            @enderror
                            </div>
                        </div>
                        
                       
                        <div class="d-flex justify-content-center mx-4 mb-5 ">
                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>
                        <p><a style="text-decoration:none;color:orange" href="{{route('register')}}">I have an account! <span  style="font-size:larger;color:blue;margin-left:5px">Register</span></a></p>
                        </form>
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 pt-5">
                        <h3 style="position:absolute;top:6%; left:55%">Employee Leave System</h3>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection