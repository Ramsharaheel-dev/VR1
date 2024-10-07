@extends('layouts.master')
@section('page-title')
VR1
@endsection
@section('main-content')
<style>
    .iq-footer {

        display: none;
    }
</style>



<main class="main-content">

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card card1">
                    <div class="card-header d-flex justify-content-between" style="background-color: transparent;">

                    </div>
                    <div class="card-body pt-0">

                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-12 col-md-3">
                                            <a href="{{ route('news') }}"><img src="./assets/images/home/1.png" class="d-block w-100" loading="lazy" alt="image"></a>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <a href="{{ route('history') }}"><img src="./assets/images/home/2.png" class="d-block w-100" loading="lazy" alt="image"></a>

                                        </div>
                                        <div class="col-12 col-md-3">
                                            <a href="{{ route('brands') }}"><img src="./assets/images/home/3.png" class="d-block w-100" loading="lazy" alt="image"></a>

                                        </div>
                                        <div class="col-12 col-md-3">
                                            <a href="{{ route('geography') }}"><img src="./assets/images/home/4.png" class="d-block w-100" loading="lazy" alt="image"></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-12 col-md-3">
                                            <a href="{{ route('news') }}"><img src="./assets/images/home/1.png" class="d-block w-100" loading="lazy" alt="image"></a>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <a href="{{ route('history') }}"><img src="./assets/images/home/2.png" class="d-block w-100" loading="lazy" alt="image"></a>

                                        </div>
                                        <div class="col-12 col-md-3">
                                            <a href="{{ route('brands') }}"><img src="./assets/images/home/3.png" class="d-block w-100" loading="lazy" alt="image"></a>

                                        </div>
                                        <div class="col-12 col-md-3">
                                            <a href="{{ route('geography') }}"><img src="./assets/images/home/4.png" class="d-block w-100" loading="lazy" alt="image"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-inner " id="page_layout">

        <div class="container">
            <div class="row">
                @include('components.sidebar')




                <div class="col-lg-6">
                    <div class=" pr-20">

                        <div id="post-modal-data" class="card card-block card-stretch card-height create-post-modal">

                            <div class="b-color">
                                <div class="card-body card-body1">
                                    <div class="mb-5">

                                        <form class="post-text w-100" action="javascript:void();">
                                            <div class="row baseline">
                                                <div class="col-md-1">
                                                    <img class="img-fluid" src="assets/images/home/profile.png" alt="">
                                                </div>
                                                <div class="col-md-11">
                                                    <input type="text" class="form-control text2 rounded px-0" placeholder="Whats’s happening?"
                                                        style="border:none;">
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                        <div class="create-post-data">
                                            <ul class="list-inline m-0 p-40 d-flex align-items-center gap-4">

                                                <li>
                                                    <label for="fileInput" class="text-body" style="cursor: pointer;">
                                                        <img src="assets/images/home/v1.png" alt="">
                                                    </label>
                                                    <input type="file" id="fileInput" style="display: none;">
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="text-body">
                                                        <img src="assets/images/home/v2.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="text-body"></a>
                                                    <img src="assets/images/home/v3.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="text-body"></a>
                                                    <img src="assets/images/home/v4.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="list-inline m-0 p-0 d-flex align-items-center gap-4">

                                                <li>
                                                    <button type="button" class="btn btn-primary social-item1 px-4 w-10">Post</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="post-modalLabel" aria-hidden="true"
                                style="display: none;">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                            <a href="javascript:void(0);" class="lh-1" data-bs-dismiss="modal">
                                                <span class="material-symbols-outlined">close</span>
                                            </a>
                                        </div>
                                        <div class="modal-body">
                                            <div class="d-flex align-items-center">
                                                <div class="user-img">
                                                    <img src="./assets/images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid"
                                                        loading="lazy">
                                                </div>
                                                <form class="post-text ms-3 w-100" action="javascript:void();">
                                                    <input type="text" class="form-control rounded" placeholder="Write something here..."
                                                        style="border:none;">
                                                </form>
                                            </div>
                                            <hr>
                                            <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                                <li class="col-md-6 mb-3">
                                                    <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                        <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                            <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                                add_a_photo
                                                            </span>
                                                            Photo/Video
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                    <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                        <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                            <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                                group
                                                            </span>
                                                            Tag Friend
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                    <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                        <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                            <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                                sentiment_satisfied
                                                            </span>
                                                            Feeling/Activity
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                    <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                        <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                            <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                                location_on
                                                            </span>
                                                            Check in
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                    <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                        <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                            <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                                live_tv
                                                            </span>
                                                            Live Video
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                    <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                        <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                            <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                                gif_box
                                                            </span>
                                                            GIF
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                    <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                        <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                            <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                                celebration
                                                            </span>
                                                            Watch Party
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                    <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                        <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                            <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                                sports_esports
                                                            </span>
                                                            Play with Friends
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <hr>
                                            <div class="other-option">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="user-img me-3">
                                                            <img src="./assets/images/user/1.jpg" alt="userimg"
                                                                class="avatar-60 rounded-circle img-fluid">
                                                        </div>
                                                        <h6>Your Story</h6>
                                                    </div>
                                                    <div class="card-post-toolbar">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false" role="button">
                                                                <span class="btn btn-primary">Friend</span>
                                                            </span>
                                                            <div class="dropdown-menu m-0 p-0">
                                                                <a class="dropdown-item p-3" href="#">
                                                                    <div class="d-flex align-items-top">
                                                                        <span class="material-symbols-outlined">
                                                                            save
                                                                        </span>
                                                                        <div class="data ms-2">
                                                                            <h6>Public</h6>
                                                                            <p class="mb-0">Anyone on or off Facebook</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item p-3" href="#">
                                                                    <div class="d-flex align-items-top">
                                                                        <span class="material-symbols-outlined">
                                                                            cancel
                                                                        </span>
                                                                        <div class="data ms-2">
                                                                            <h6>Friends</h6>
                                                                            <p class="mb-0">Your Friend on facebook</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item p-3" href="#">
                                                                    <div class="d-flex align-items-top">
                                                                        <span class="material-symbols-outlined">
                                                                            person_remove
                                                                        </span>
                                                                        <div class="data ms-2">
                                                                            <h6>Friends except</h6>
                                                                            <p class="mb-0">Don't show to some friends</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item p-3" href="#">
                                                                    <div class="d-flex align-items-top">
                                                                        <span class="material-symbols-outlined">
                                                                            notifications
                                                                        </span>
                                                                        <div class="data ms-2">
                                                                            <h6>Only Me</h6>
                                                                            <p class="mb-0">Only me</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">

                            <div class="card-body p-0 mb-3">
                                <div class="borderbox border p-3 rounded">
                                    <div class="d-flex  borderbox1 justify-content-between baseline">
                                        <div class="me-3">
                                            <img src="assets/images/home/profile2.png" class="w-91 rounded" alt="Twitter">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="text-container">
                                                    <h5 class="mb-0 me-1 trends d-inline">Jhon</h5>
                                                    <p class="mb-0 profile d-inline">@Politics_War &nbsp; 3m</p>
                                                </div>
                                                <div class="image-container">
                                                    <img src="assets/images/home/bookmarks.png" alt="bookmark icon" class="bookmark-icon">
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11 offset-md-1">
                                            <span class="mt-1 profile1">Chasing freedom on a sunlit coast, where every breeze carries
                                                the
                                                spirit of liberty. <span class="span1">#PursuitOfHappiness #FreedomRide</span> </span>

                                            <div class="user-post mt-2">
                                                <a href="#"><img src="assets/images/home/timeline.png" alt="post-image" class="img-fluid w-100"
                                                        loading="lazy"></a>
                                            </div>
                                            <div class="d-flex flex-wrap justify-content-between mb-0 mt-2">

                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images//home/message.png" alt="">
                                                    <h6 class="ms-2">1</h6>
                                                </div>


                                                <hr class="d-flex align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images//home/share.png" alt="">

                                                </div>


                                                <hr class="d-flex align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images//home/heart.png" alt="">
                                                    <h6 class="ms-2">8</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>

                        </div>

                        <div class="card">

                            <div class="card-body p-0 mb-3">
                                <div class="borderbox border p-3 rounded">
                                    <div class="d-flex  borderbox1 justify-content-between baseline">
                                        <div class="me-3">
                                            <img src="assets/images/home/profile2.png" class="w-91  rounded" alt="Twitter">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="text-container">
                                                    <h5 class="mb-0 me-1 trends d-inline">Jhon</h5>
                                                    <p class="mb-0 profile d-inline">@Politics_War &nbsp; 3m</p>
                                                </div>
                                                <div class="image-container">
                                                    <img src="assets/images/home/bookmarks.png" alt="bookmark icon" class="bookmark-icon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11 offset-md-1">
                                            <span class="mt-1 profile1">Heartfelt unity In diversity we find strength & beauty <span
                                                    class="span1">#UnityInDiversity #politics</span> </span>

                                            <div class="user-post mt-3 mb-3">
                                                <a href="#"><img src="assets/images/home/red-hand.png" alt="post-image" class="img-fluid w-100"
                                                        loading="lazy"></a>
                                            </div>
                                            <div class="d-flex flex-wrap justify-content-between mb-0 mt-2 br-1">

                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images//home/message.png" alt="">
                                                    <h6 class="ms-2">1</h6>
                                                </div>


                                                <hr class="d-flex align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images//home/share.png" alt="">

                                                </div>


                                                <hr class="d-flex align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images//home/heart.png" alt="">
                                                    <h6 class="ms-2">8</h6>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="ptb-20">
                                            <div class="col-md-11 offset-md-1 d-flex  borderbox1 justify-content-between baseline">
                                                <div class="me-3">
                                                    <img src="assets/images/home/profile3.png" class="img-fluid rounded" alt="Twitter">
                                                </div>
                                                <div class="w-100">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="">
                                                            <h5 class="mb-0 d-inline-block me-1 trends">Sophie_Artist</h5>
                                                            <p class="mb-0 d-inline-block profile">2d</p>
                                                            <p class="mb-0"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 offset-md-2">
                                                <span class="mt-1 text3">This is so powerful! The red really pops against the black.
                                                    Unity through diversity is what we need more of. ❤️ 🙌 </span>

                                                <div class="ptb-20">
                                                    <div class="d-flex ">
                                                        <div class="left d-flex w-10">
                                                            <img src="assets/images//home/heart.png" alt="">
                                                            <h6 class="ms-2">3</h6>
                                                        </div>
                                                        <div class="right d-flex w-10">
                                                            <img src="assets/images//home/message.png" alt="">
                                                            <h6 class="ms-2">Replay</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ptb-20">
                                            <div class="col-md-11 offset-md-1 d-flex  borderbox1 justify-content-between baseline">
                                                <div class="me-3">
                                                    <img src="assets/images/home/profile4.png" class="img-fluid rounded" alt="Twitter">
                                                </div>
                                                <div class="w-100">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="">
                                                            <h5 class="mb-0 d-inline-block me-1 trends">Sophie_Artist</h5>
                                                            <p class="mb-0 d-inline-block profile">2d</p>
                                                            <p class="mb-0"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 offset-md-2">
                                                <span class="mt-1 text3">This is so powerful! The red really pops against the black.
                                                    Unity through diversity is what we need more of. ❤️ 🙌 </span>

                                                <div class="ptb-20">
                                                    <div class="d-flex ">
                                                        <div class="left d-flex w-10">
                                                            <img src="assets/images//home/heart.png" alt="">
                                                            <h6 class="ms-2">3</h6>
                                                        </div>
                                                        <div class="right d-flex w-10">
                                                            <img src="assets/images//home/message.png" alt="">
                                                            <h6 class="ms-2">Replay</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('components.left-sidebar')

            </div>
        </div>
    </div>
    </div>


    <div class="chat-popup-modal" id="chat-popup-modal">
        <div class="bg-primary p-3 d-flex align-items-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-3">
                <div class="image flex-shrink-0">
                    <img src="./assets/images/user/13.jpg" alt="img" class="img-fluid avatar-45 rounded-circle object-cover">
                </div>
                <div class="content">
                    <h6 class="mb-0 font-size-14 text-white">Bob Frapples</h6>
                    <span class="d-inline-block lh-1 font-size-12 text-white"><span
                            class="d-inline-block rounded-circle bg-success border-5 p-1 align-baseline me-1"></span>Avaliable</span>
                </div>
            </div>
            <div class="chat-popup-modal-close lh-1" type="button">
                <span class="material-symbols-outlined font-size-18 text-white">
                    close
                </span>
            </div>
        </div>
        <div class="chat-popup-body p-3 border-bottom">
            <ul class="list-inline p-0 mb-0 chat">
                <li>
                    <div class="text-center">
                        <span class="time font-size-12 text-primary">Today</span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="text-start">
                        <div class="d-inline-block py-2 px-3 bg-gray-subtle chat-popup-message font-size-12 fw-medium">
                            Hello, How Are you Doing Today?
                        </div>
                        <span class="mt-1 d-block time font-size-10 fst-italic">03:41 PM</span>
                    </div>
                </li>
                <li class="mt-3">
                    <div class="text-end">
                        <div
                            class="d-inline-block py-2 px-3 bg-primary-subtle chat-popup-message message-right font-size-12 fw-medium">
                            Hello, I'm Doing Well.
                        </div>
                        <span class="mt-1 d-block time font-size-10 fst-italic">03:42 PM</span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="chat-popup-footer p-3">
            <div class="chat-popup-form">
                <form>
                    <input type="text" class="form-control" placeholder="Start Typing...">
                    <button type="submit" class="chat-popup-form-button btn btn-primary">
                        <span class="material-symbols-outlined font-size-18 icon-rtl">
                            send
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    </div>
</main>

</script>
@endsection