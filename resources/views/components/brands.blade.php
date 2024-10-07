@extends('layouts.master')
@section('page-title')
VR1 – Brands
@endsection
@section('main-content')
<style>
    .hide {
        display: none;
    }
</style>

<main class="main-content">

    <div class="plr-30 ptb-20">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12">


                    <div class="card">
                        <div class="card-body pt-0">
                            <div class="ptb-10">
                            </div>
                            <ul class="nav nav-pills mb-3 nav-fill " id="pills-tab-1" role="tablist">
                                <li class="nav-item box newshead ">
                                    <a href="#pills-clothing-fill" class="nav-link active" id="pills-clothing-tab-fill"
                                        data-bs-toggle="pill" role="tab" aria-controls="pills-clothing-fill"
                                        aria-selected="true">
                                        <img class="default-image" src="assets/images/brands/shirt.png" alt="">
                                        <img class="hover-image" src="assets/images/brands/w1.png" alt="">
                                        <p class="text-center pt-15">Clothing</p>
                                    </a>
                                </li>
                                <li class="nav-item box newshead">
                                    <a href="#pills-profile-fill" class="nav-link" id="pills-profile-tab-fill"
                                        data-bs-toggle="pill" role="tab" aria-controls="pills-profile-fill"
                                        aria-selected="false">
                                        <img class="default-image" src="assets/images/brands/2.png" alt="">
                                        <img class="hover-image" src="assets/images/brands/w2.png" alt="">
                                        <p class="text-center pt-15">Profile</p>
                                    </a>
                                </li>

                                <li class="nav-item box newshead">
                                    <a href="#pills-jeans-fill" class="nav-link" id="pills-jeans-tab-fill"
                                        data-bs-toggle="pill" role="tab" aria-controls="pills-jeans-fill"
                                        aria-selected="false">
                                        <img class="default-image" src="assets/images/brands/3.png" alt="">
                                        <img class="hover-image" src="assets/images/brands/w3.png" alt="">
                                        <p class="text-center pt-15">Jeans & Denim</p>
                                    </a>
                                </li>

                                <li class="nav-item box newshead">
                                    <a href="#pills-beauty-fill" class="nav-link" id="pills-beauty-tab-fill"
                                        data-bs-toggle="pill" role="tab" aria-controls="pills-beauty-fill"
                                        aria-selected="false">
                                        <img class="default-image" src="assets/images/brands/beauty.png" alt="">
                                        <img class="hover-image" src="assets/images/brands/w4.png" alt="">
                                        <p class="text-center pt-15">Beauty & Personal Care</p>
                                    </a>
                                </li>

                                <li class="nav-item box newshead">
                                    <a href="#pills-furniture-fill" class="nav-link" id="pills-furniture-tab-fill"
                                        data-bs-toggle="pill" role="tab" aria-controls="pills-furniture-fill"
                                        aria-selected="false">
                                        <img class="default-image" src="assets/images/brands/elect.png" alt="">
                                        <img class="hover-image" src="assets/images/brands/w5.png" alt="">
                                        <p class="text-center pt-15">Furniture</p>
                                    </a>
                                </li>

                                <li class="nav-item box newshead">
                                    <a href="#pills-electronics-fill" class="nav-link" id="pills-electronics-tab-fill"
                                        data-bs-toggle="pill" role="tab" aria-controls="pills-electronics-fill"
                                        aria-selected="false">
                                        <img class="default-image" src="assets/images/brands/shirt.png" alt="">
                                        <img class="hover-image" src="assets/images/brands/w6.png" alt="">
                                        <p class="text-center pt-15">Electronics</p>
                                    </a>
                                </li>
                            </ul>


                            <div class="tab-content imgtab" id="pills-tabContent-1">
                                <div class="tab-pane fade show active" id="pills-clothing-fill" role="tabpanel"
                                    aria-labelledby="pills-clothing-tab-fill">



                                    <div class="container">
                                        <div class="row baseline">
                                            <div class="col-md-3">
                                                <div class="custom-box">
                                                    <img src="assets/images/brands/p1.png" alt="Image 1">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-box">
                                                    <img src="assets/images/brands/p2.png" alt="Image 2">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-box">
                                                    <img src="assets/images/brands/p3.png" alt="Image 3">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-box">
                                                    <img src="assets/images/brands/p4.png" alt="Image 4">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ptb-20">
                                            <div class="row baseline">
                                                <div class="col-md-3">
                                                    <div class="custom-box">
                                                        <img src="assets/images/brands/p5.png" alt="Image 5">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="custom-box">
                                                        <img src="assets/images/brands/p6.png" alt="Image 6">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="custom-box">
                                                        <img src="assets/images/brands/p7.png" alt="Image 7">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="custom-box">
                                                        <img src="assets/images/brands/p8.png" alt="Image 8">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row baseline">
                                            <div class="col-md-3">
                                                <div class="custom-box">
                                                    <img src="assets/images/brands/p9.png" alt="Image 5">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-box">
                                                    <img src="assets/images/brands/p10.png" alt="Image 6">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-box">
                                                    <img src="assets/images/brands/p11.png" alt="Image 7">
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>


                            </div>
                            <div class="tab-pane fade" id="pills-profile-fill" role="tabpanel"
                                aria-labelledby="pills-profile-tab-fill">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-jeans-fill" role="tabpanel"
                                aria-labelledby="pills-jeans-tab-fill">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-beauty-fill" role="tabpanel"
                                aria-labelledby="pills-beauty-tab-fill">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-furniture-fill" role="tabpanel"
                                aria-labelledby="pills-furniture-tab-fill">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-electronics-fill" role="tabpanel"
                                aria-labelledby="pills-electronics-tab-fill">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    </div>

</main>
@endsection
<script>
    $(document).ready(function () {
        // When a tab is clicked
        $('a[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
            // Remove 'active' from all tabs
            $('.nav-item .nav-link').removeClass('active');

            // Add 'active' to the clicked tab
            $(this).addClass('active');
        });

        // For focusing the tab and keeping it highlighted
        $('.nav-item .nav-link').on('click', function () {
            // Remove 'active' from all tabs
            $('.nav-item .nav-link').removeClass('active');

            // Add 'active' to the clicked tab
            $(this).addClass('active');
        });
    });
</script>