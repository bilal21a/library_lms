@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">Dashboard</h1>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row g-2">
            <div class="col-12 col-xl-4 mb-5">
                <div class="card bg-gradient-light">
                    <div class="h-100 row g-0 card-body align-items-center">
                        <div class="col-auto">
                            <div
                                class="border border-white sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                                <i data-acorn-icon="book" class="text-white"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="heading mb-0 sh-8 d-flex align-items-center lh-1-25 ps-3 text-white">Total Books
                            </div>
                        </div>
                        <div class="col-auto ps-3">
                            <div class="display-5 text-white">16</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 mb-5">
                <div class="card bg-gradient-light">
                    <div class="h-100 row g-0 card-body align-items-center">
                        <div class="col-auto">
                            <div
                                class="border border-white sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                                <i data-acorn-icon="book" class="text-white"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="heading mb-0 sh-8 d-flex align-items-center lh-1-25 ps-3 text-white">Issued Books
                            </div>
                        </div>
                        <div class="col-auto ps-3">
                            <div class="display-5 text-white">16</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 mb-5">
                <div class="card bg-gradient-light">
                    <div class="h-100 row g-0 card-body align-items-center">
                        <div class="col-auto">
                            <div
                                class="border border-white sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                                <i data-acorn-icon="book" class="text-white"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="heading mb-0 sh-8 d-flex align-items-center lh-1-25 ps-3 text-white">Returned Books
                            </div>
                        </div>
                        <div class="col-auto ps-3">
                            <div class="display-5 text-white">16</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-2">
            <div class="col-12 col-xl-4 mb-5">
                <div class="card active">
                    <div class="h-100 row g-0 card-body align-items-center">
                        <div class="col-auto">
                            <div
                                class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                <i data-acorn-icon="book" class="text-primary"></i>

                            </div>
                        </div>
                        <div class="col">
                            <div class="heading mb-0 sh-8 d-flex align-items-center lh-1-25 ps-3">Requested Books</div>
                        </div>
                        <div class="col-auto ps-3">
                            <div class="display-5 text-primary">235</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 mb-5">
                <div class="card active">
                    <div class="h-100 row g-0 card-body align-items-center">
                        <div class="col-auto">
                            <div
                                class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                <i data-acorn-icon="book" class="text-primary"></i>

                            </div>
                        </div>
                        <div class="col">
                            <div class="heading mb-0 sh-8 d-flex align-items-center lh-1-25 ps-3">Reserved Books</div>
                        </div>
                        <div class="col-auto ps-3">
                            <div class="display-5 text-primary">235</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 mb-5">
                <div class="card active">
                    <div class="h-100 row g-0 card-body align-items-center">
                        <div class="col-auto">
                            <div
                                class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                <i data-acorn-icon="book" class="text-primary"></i>

                            </div>
                        </div>
                        <div class="col">
                            <div class="heading mb-0 sh-8 d-flex align-items-center lh-1-25 ps-3">Renewed Books</div>
                        </div>
                        <div class="col-auto ps-3">
                            <div class="display-5 text-primary">235</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row g-2">
            <div class="col-12 col-xl-4 mb-5">
                <div class="card hover-border-primary">
                    <div class="h-100 row g-0 card-body align-items-center">
                        <div class="col-auto">
                            <div
                                class="bg-gradient-light sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                                <i data-acorn-icon="user" class="text-white"></i>

                            </div>
                        </div>
                        <div class="col">
                            <div class="heading mb-0 sh-8 d-flex align-items-center lh-1-25 ps-3">Total Users</div>
                        </div>
                        <div class="col-auto ps-3">
                            <div class="display-5 text-primary">34</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 mb-5">
                <div class="card hover-border-primary">
                    <div class="h-100 row g-0 card-body align-items-center">
                        <div class="col-auto">
                            <div
                                class="bg-gradient-light sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                                <i data-acorn-icon="user" class="text-white"></i>

                            </div>
                        </div>
                        <div class="col">
                            <div class="heading mb-0 sh-8 d-flex align-items-center lh-1-25 ps-3">Total Students</div>
                        </div>
                        <div class="col-auto ps-3">
                            <div class="display-5 text-primary">34</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 mb-5">
                <div class="card hover-border-primary">
                    <div class="h-100 row g-0 card-body align-items-center">
                        <div class="col-auto">
                            <div
                                class="bg-gradient-light sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                                <i data-acorn-icon="user" class="text-white"></i>

                            </div>
                        </div>
                        <div class="col">
                            <div class="heading mb-0 sh-8 d-flex align-items-center lh-1-25 ps-3">Total Faculty</div>
                        </div>
                        <div class="col-auto ps-3">
                            <div class="display-5 text-primary">34</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
