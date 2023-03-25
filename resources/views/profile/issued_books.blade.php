<h2 class="small-title">Projects</h2>
<div class="row mb-3 g-2">
    <div class="col mb-1">
        <div
            class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
            <input class="form-control" placeholder="Search" />
            <span class="search-magnifier-icon">
                <i data-acorn-icon="search"></i>
            </span>
            <span class="search-delete-icon d-none">
                <i data-acorn-icon="close"></i>
            </span>
        </div>
    </div>
    <div class="col-auto text-end mb-1">
        <div class="dropdown-as-select d-inline-block" data-childselector="span">
            <button class="btn p-0 shadow" type="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="btn btn-foreground-alternate dropdown-toggle sw-13">All</span>
            </button>
            <div class="dropdown-menu shadow dropdown-menu-end">
                <a class="dropdown-item active" href="#">All</a>
                <a class="dropdown-item" href="#">Active</a>
                <a class="dropdown-item" href="#">Inactive</a>
            </div>
        </div>
    </div>
</div>

<div class="row row-cols-1 row-cols-sm-2 g-2">
    {{-- <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h6 class="heading mb-3">
                    <a href="#" class="stretched-link">
                        <span class="clamp-line sh-5" data-line="2">Basic Introduction to Bread
                            Making</span>
                    </a>
                </h6>
                <div>
                    <div class="mb-2">
                        <i data-acorn-icon="category" class="text-muted me-2"
                            data-acorn-size="17"></i>
                        <span class="align-middle text-alternate">Contributors: 4</span>
                    </div>
                    <div class="mb-2">
                        <i data-acorn-icon="trend-up" class="text-muted me-2"
                            data-acorn-size="17"></i>
                        <span class="align-middle text-alternate">Active</span>
                    </div>
                    <div>
                        <i data-acorn-icon="check-square" class="text-muted me-2"
                            data-acorn-size="17"></i>
                        <span class="align-middle text-alternate">Completed</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="col-12 col-xl-8 col-xxl-9 mb-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-2 mb-5">
            @foreach ($books as $book)
                <div class="col">
                    <div class="card h-100" onclick="book_detail({{ $book->id }})">
                        <img src="{{ $book->image_url }}" class="card-img-top sh-19" alt="card image">
                        <div class="card-body pb-0">
                            <h5 class="heading mb-3">
                                <a href="#" class="body-link stretched-link">

                                    <div class="text-black"><span class="dot"
                                            style="background: {{ $book->category->background }}"></span>{{ $book->category->name }}
                                    </div>
                                    <div class=" cta-3 text-primary">{{ $book->name }}</div>
                                </a>
                                <div class="col-auto">
                                    <span class="align-middle text-muted">
                                        @if (strlen($book->desc) > 50)
                                            {{ substr($book->desc, 0, 50) . '...' }}
                                        @else
                                            {{ $book->desc }}
                                        @endif
                                    </span>
                                </div>
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
