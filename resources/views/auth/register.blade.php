@extends('layouts.master');
@section('page-title')
Sign up for VR1
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
                                <p class="mt-3 sign-in">Sign Up To VR1US</p>
                                <form method="POST" action="{{ route('register') }}" class="mt-5">
                                    @csrf
                                    <div class="text-start ptb-20">
                                        <span id="name-error" class="text-danger"></span>
                                        <input type="text" name="name" id="name" class="form-control1 mb-0" placeholder="Name">
                                    </div>
                                    <div class="text-start ptb-20">
                                        <span id="email-error" class="text-danger"></span>
                                        <input type="email" name="email" id="email" class="form-control1 mb-0" placeholder="Email">
                                    </div>
                                    <div class="text-start ptb-20">
                                        <span id="password-error" class="text-danger"></span>
                                        <input type="password" name="password" id="password" class="form-control1 mb-0" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3 mb-3 fw-semibold text-uppercase w-100 social-item signup-btn">
                                        Sign Up
                                    </button>
                                    <h6 class="mt-5 fs-23">Already Have An Account ?
                                        <span style="color: #1D234E;">
                                            <a href="{{ route('login')  }}">Sign In</a>
                                        </span>
                                    </h6>
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
        $('body').on('click', '.signup-btn', function(e) {
            e.preventDefault();

            var self = $(this);
            var formData = self.closest('form');

            $('#name-error').text('');
            $('#email-error').text('');
            $('#password-error').text('');

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
                    if (response.status === 422) {
                        var errors = response.responseJSON.errors;

                        if (errors.name) {
                            $('#name-error').text(errors.name[0]);
                        }
                        if (errors.email) {
                            $('#email-error').text(errors.email[0]);
                        }
                        if (errors.password) {
                            $('#password-error').text(errors.password[0]);
                        }
                    } else {
                        $('#errorMessages').append('<div class="alert alert-danger mt-10">An unexpected error occurred. Please try again.</div>');
                    }
                }
            });
        });
    });
</script>