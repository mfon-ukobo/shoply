@extends('layouts.auth')

@section('content')

<div class="border-bottom shadow-sm">
    <nav class="navbar navbar-light py-2">
       <div class="container justify-content-center justify-content-lg-between">
          <a class="navbar-brand" href="/">
             <img src="../assets/images/logo/freshcart-logo.svg" alt="" class="d-inline-block align-text-top" />
          </a>
          <span class="navbar-text">
             Don't have an account?
             <a href="{{ route('register') }}">Sign up</a>
          </span>
       </div>
    </nav>
 </div>

 <main>
    <!-- section -->
    <section class="my-lg-14 my-8">
       <div class="container">
          <!-- row -->
          <div class="row justify-content-center align-items-center">
             <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                <!-- img -->
                <img src="../assets/images/svg-graphics/signin-g.svg" alt="" class="img-fluid" />
             </div>
             <!-- col -->
             <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                <div class="mb-lg-9 mb-5">
                   <h1 class="mb-1 h2 fw-bold">Sign in to FreshCart</h1>
                   <p>Welcome back to FreshCart! Enter your email to get started.</p>
                </div>

                <form class="needs-validation" method="post" novalidate>
                    @csrf
                   <div class="row g-3">
                      <!-- row -->

                      <div class="col-12">
                         <!-- input -->
                         <label for="formSigninEmail" class="form-label visually-hidden">Email address</label>
                         <input type="email" name="email" class="form-control" id="formSigninEmail" placeholder="Email" required />
                         <div class="invalid-feedback">Please enter name.</div>
                      </div>
                      <div class="col-12">
                         <!-- input -->
                         <div class="password-field position-relative">
                            <label for="formSigninPassword" class="form-label visually-hidden">Password</label>
                            <div class="password-field position-relative">
                               <input type="password" name="password" class="form-control fakePassword" id="formSigninPassword" placeholder="*****" required />
                               <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                               <div class="invalid-feedback">Please enter password.</div>
                            </div>
                         </div>
                      </div>
                      <div class="d-flex justify-content-between">
                         <!-- form check -->
                         <div class="form-check">
                            <input class="form-check-input" name="rememberMe" type="checkbox" value="" id="flexCheckDefault" />
                            <!-- label -->
                            <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                         </div>
                         <div>
                            Forgot password?
                            <a href="../pages/forgot-password.html">Reset It</a>
                         </div>
                      </div>
                      <!-- btn -->
                      <div class="col-12 d-grid"><button type="submit" class="btn btn-primary">Sign In</button></div>
                      <!-- link -->
                      <div>
                         Don’t have an account?
                         <a href="{{ route('register') }}">Sign Up</a>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </section>
 </main>

@stop
