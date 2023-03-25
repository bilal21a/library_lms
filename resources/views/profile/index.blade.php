@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">Profile</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="Pages.html">Pages</a></li>
                            <li class="breadcrumb-item"><a href="Pages.Profile.html">Profile</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                        <i data-acorn-icon="edit-square"></i>
                        <span>Edit</span>
                    </button>
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <!-- Left Side Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <!-- Biography Start -->
                <h2 class="small-title">Profile</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-column mb-4">
                            <div class="d-flex align-items-center flex-column">
                                <div class="sw-13 position-relative mb-3 d-flex justify-content-center">
                                    <img src="https://ui-avatars.com/api/?background=ECF5FF&color=1ea8e7&name={{ auth()->user()->name }}"
                                        class="img-fluid rounded-xl" alt="thumb" />
                                </div>
                                <div class="h5 mb-0">{{ auth()->user()->name }}</div>
                                <div class="text-muted">{{ auth()->user()->role }}</div>
                                <div class="text-muted">
                                    <i data-acorn-icon="email" class="me-1"></i>
                                    <span class="align-middle">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="nav flex-column" role="tablist">
                            <a class="nav-link active px-0 border-bottom border-separator-light" data-bs-toggle="tab"
                                href="#overviewTab" role="tab">
                                <i data-acorn-icon="activity" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Overview</span>
                            </a>
                            <a class="nav-link px-0 border-bottom border-separator-light" data-bs-toggle="tab"
                                href="#projectsTab" role="tab">
                                <i data-acorn-icon="book" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Issued Books</span>
                            </a>
                            <a class="nav-link px-0 border-bottom border-separator-light" data-bs-toggle="tab"
                                href="#permissionsTab" role="tab">
                                <i data-acorn-icon="book" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Returned Books</span>
                            </a>
                            <a class="nav-link px-0 border-bottom border-separator-light" data-bs-toggle="tab"
                                href="#friendsTab" role="tab">
                                <i data-acorn-icon="book" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Requested Books</span>
                            </a>
                            <a class="nav-link px-0" data-bs-toggle="tab" href="#aboutTab" role="tab">
                                <i data-acorn-icon="book" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Reserved Books</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Biography End -->
            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div class="col-12 col-xl-8 col-xxl-9 mb-5 tab-content">
                <!-- Overview Tab Start -->
                <div class="tab-pane fade show active" id="overviewTab" role="tabpanel">
                    <!-- Stats Start -->
                    <h2 class="small-title">Stats</h2>
                    <div class="mb-5">
                        <div class="row g-2">
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card hover-border-primary">
                                    <div class="card-body">
                                        <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Issued Books</span>
                                            <i data-acorn-icon="book" class="text-primary"></i>
                                        </div>
                                        <div class="cta-1 text-primary">14</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card hover-border-primary">
                                    <div class="card-body">
                                        <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Returned Books</span>
                                            <i data-acorn-icon="book" class="text-primary"></i>
                                        </div>
                                        <div class="cta-1 text-primary">14</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card hover-border-primary">
                                    <div class="card-body">
                                        <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Requested Books</span>
                                            <i data-acorn-icon="book" class="text-primary"></i>
                                        </div>
                                        <div class="cta-1 text-primary">14</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card hover-border-primary">
                                    <div class="card-body">
                                        <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Reserved Books</span>
                                            <i data-acorn-icon="book" class="text-primary"></i>
                                        </div>
                                        <div class="cta-1 text-primary">14</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Stats End -->
                </div>
                <!-- Overview Tab End -->

                <!-- Projects Tab Start -->
                <div class="tab-pane fade" id="projectsTab" role="tabpanel">

                    {{-- Issued Books Data will Render here --}}

                </div>
                <!-- Projects Tab End -->

                <!-- Permissions Tab Start -->
                <div class="tab-pane fade" id="permissionsTab" role="tabpanel">
                   {{-- Returned Books Data will Render Here --}}
                </div>
                <!-- Permissions Tab End -->

                <!-- Friends Tab Start -->
                <div class="tab-pane fade" id="friendsTab" role="tabpanel">
                    <h2 class="small-title">Friends</h2>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-3 g-2 mb-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-1.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Blaine Cottrell</div>
                                                    <div class="text-small text-muted">Project Manager</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-4.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Cherish Kerr</div>
                                                    <div class="text-small text-muted">Development Lead</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-8.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Kirby Peters</div>
                                                    <div class="text-small text-muted">Accounting</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-5.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Olli Hawkins</div>
                                                    <div class="text-small text-muted">Client Relations Lead</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-2.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Zayn Hartley</div>
                                                    <div class="text-small text-muted">Customer Engagement</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-3.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Esperanza Lodge</div>
                                                    <div class="text-small text-muted">UX Designer</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-4.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Kerr Jackson</div>
                                                    <div class="text-small text-muted">Frontend Developer</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-6.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Kathryn Mengel</div>
                                                    <div class="text-small text-muted">Team Leader</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-6.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Joisse Kaycee</div>
                                                    <div class="text-small text-muted">Copywriter</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-7.webp" class="card-img rounded-xl sh-6 sw-6"
                                                alt="thumb" />
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Zayn Hartley</div>
                                                    <div class="text-small text-muted">Visual Effect Designer</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm ms-1">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Friends Tab End -->

                <!-- About Tab Start -->
                <div class="tab-pane fade" id="aboutTab" role="tabpanel">
                    <h2 class="small-title">About</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-5">
                                <p class="text-small text-muted mb-2">ME</p>
                                <p>
                                    Jujubes brownie marshmallow apple pie donut ice cream jelly-o jelly-o gummi bears.
                                    Tootsie roll chocolate bar dragée bonbon cheesecake icing. Danish wafer donut cookie
                                    caramels gummies topping.
                                </p>
                            </div>
                            <div class="mb-5">
                                <p class="text-small text-muted mb-2">INTERESTS</p>
                                <p>
                                    Chocolate cake biscuit donut cotton candy soufflé cake macaroon. Halvah chocolate cotton
                                    candy sweet roll jelly-o candy danish dragée. Apple pie cotton candy tiramisu biscuit
                                    cake muffin tootsie roll bear claw cake. Cupcake cake fruitcake.
                                </p>
                            </div>
                            <div>
                                <p class="text-small text-muted mb-2">CONTACT</p>
                                <a href="#" class="d-block body-link mb-1">
                                    <i data-acorn-icon="screen" class="me-2" data-acorn-size="17"></i>
                                    <span class="align-middle">blainecottrell.com</span>
                                </a>
                                <a href="#" class="d-block body-link">
                                    <i data-acorn-icon="email" class="me-2" data-acorn-size="17"></i>
                                    <span class="align-middle">contact@blainecottrell.com</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Tab End -->
            </div>
            <!-- Right Side End -->
        </div>
    </div>
@endsection


@section('js_after')
    <script>
        console.log('yaba daba doooo');
        $.ajax({
            url: '{{ route('profile.get_issued_books') }}',
            success: function(html) {
                console.log('html: ', html);
                $('#projectsTab').html(html);
            }
        });
        $.ajax({
            url: '{{ route('profile.get_returned_books') }}',
            success: function(html) {
                console.log('html: ', html);
                $('#permissionsTab').html(html);
            }
        });
    </script>
@endsection
