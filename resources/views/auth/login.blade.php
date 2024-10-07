@extends('layouts.master');
@section('page-title')
Login to VR1
@endsection
@section('main-content')
<style>
    .hide {
        display: none;
    }

    .iq-top-navbar {

        display: none;

    }

    .iq-footer {

        display: none;
    }
</style>

<div class="wrapper">
    <section class="sign-in-page">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="sign-in-from text-center">
                                <a href=""
                                    class="d-inline-flex align-items-center justify-content-center gap-2">
                                    <img src="assets/images/user/sign-in-logo.png" alt="">

                                </a>
                                <p class="mt-3 sign-in">Sign in To VR1US</p>
                                <form method="POST" action="{{ route('login') }}" class="mt-5">
                                    @csrf
                                    <div class=" text-start">

                                        <button type="button" class="btn6 btn-dark pb-15">
                                            <img class="w-20" src="assets/images/user/google.png" alt=""> Sign in with
                                            Google</button>
                                        <div class="ptb-20">
                                            <button type="button" class="btn6 btn-dark pb-15">
                                                <img class="w-20" src="assets/images/user/Apple Logo.svg" alt=""> Sign in with
                                                Apple</button>
                                        </div>
                                        <div class="ptb-20">
                                            <img class="w-100" src="assets/images/user/or.png" alt="">
                                        </div>
                                        <span id="email-error" class="text-danger"></span>
                                        <input type="email" name="email" id="email" class="form-control1 mb-0" placeholder="Email or username" required autofocus autocomplete="email">
                                        <div class="ptb-20">
                                            <span id="pass-error" class="text-danger"></span>

                                            <input type="password" name="password" id="password" class="form-control1 mb-0" placeholder="Enter Password">
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3 mb-3 fw-semibold text-uppercase w-100 social-item login-btn">Login</button>
                                    <div class="form-group text-start">
                                        <a href="{{ Route('password.request') }}" class="btn6 profile1 pb-15 d-grid text-center">
                                            Forgot password?
                                        </a>

                                    </div>


                                    <h6 class="mt-5 fs-23">Don't Have An Account ? <span style="color: #1D234E;"><a
                                                href="{{ route('register') }}">Sign up</a></h6></span>

                                    <div id="errorMessages" style="margin-top: 10px "></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('body').on('click', '.login-btn', function(e) {
            e.preventDefault();

            var self = $(this);
            var formData = self.closest('form');

            $('#email-error').text('');
            $('#pass-error').text('');

            $.ajax({
                url: formData.attr('action'),
                type: 'POST',
                data: formData.serialize(),
                success: function(response) {
                    if (response.status) {
                        window.location.href = '/index';
                    }
                },
                error: function(response) {
                    $("#errorMessages").empty();

                    if (response.status === 422) {
                        var errors = response.responseJSON.errors;

                        if (errors.email) {
                            $('#email-error').text(errors.email[0]);
                        }
                        if (errors.password) {
                            $('#pass-error').text(errors.password[0]);
                        }

                    } else if (response.status === 401) {
                        var errors = response.responseJSON.errors;
                        $('#errorMessages').append('<div class="alert alert-danger">' + response.responseJSON.message + '</div>');

                    } else {
                        $('#errorMessages').append('<div class="alert alert-danger mt-10">An unexpected error occurred. Please try again.</div>');
                    }
                },
                complete: function() {
                    console.log("Complete");

                }
            });
        });
    });
</script>