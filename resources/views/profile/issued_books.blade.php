<h2 class="small-title">Issued Books</h2>
@if ($books->count() == 0)
    No Books
@endif
<div class="row row-cols-1 row-cols-sm-2 g-2">
    <div class="col-12 col-xl-8 col-xxl-9 mb-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-3 g-2 mb-5">
            @foreach ($books as $data)
            @php
                $book=$data->book;
            @endphp
                <div class="col">
                    <div class="card h-100" onclick="book_detail({{ $book->id }})">
                        <img src="{{ $book->image_url }}" class="card-img-top sh-19" alt="card image">
                        <div class="card-body pb-3 ">
                            <h5 class="heading mb-3">
                                <div class="text-black"><span class="dot"
                                        style="background: {{ $book->category->background }}"></span>{{ $book->category->name }}
                                </div>
                                <div class=" cta-3 text-primary">{{ $book->name }}</div>
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
                            <a href="{{ route('renew_request.add_renew_request', $data->id) }}" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="acorn-icons acorn-icons-refresh-horizontal d-inline-block text-primary">
                                    <path d="M8 14 10 16 8 18M12 6 10 4 12 2"></path>
                                    <path
                                        d="M6 4 5 4C3.34315 4 2 5.34315 2 7L2 13C2 14.6569 3.34315 16 5 16L9.5 16M14 16 15 16C16.6569 16 18 14.6569 18 13L18 7C18 5.34315 16.6569 4 15 4L11 4">
                                    </path>
                                </svg>
                                Renew</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
