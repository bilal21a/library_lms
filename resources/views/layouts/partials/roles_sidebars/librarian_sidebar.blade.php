<li>
    <a class="{{ request()->is('book*') ? 'active' : '' }}" href="{{ route('book.index') }}">
        <i data-acorn-icon="books" class="d-inline-block"></i>
        <span class="label">Books</span>
    </a>
</li>
<li>
    <a class="{{ request()->is('issuedBooks*') ? 'active' : '' }}" href="{{ route('issuedBooks.index') }}">
        <i data-acorn-icon="book" class="d-inline-block"></i>
        <span class="label">Issue Books</span>
    </a>
</li>
<li>
    <a class="{{ request()->is('renew_request*') ? 'active' : '' }}" href="{{ route('renew_request.index') }}">
        <i data-acorn-icon="book" class="d-inline-block"></i>
        <span class="label">Renew Book Requests</span>
    </a>
</li>
<li>
    <a class="{{ request()->is('reserve_request*') ? 'active' : '' }}" href="{{ route('reserve_request.index') }}">
        <i data-acorn-icon="book" class="d-inline-block"></i>
        <span class="label">Reserved Books</span>
    </a>
</li>
<li>
    <a class="{{ request()->is('categories*') ? 'active' : '' }}" href="{{ route('categories.index') }}">
        <i data-acorn-icon="category" class="d-inline-block"></i>
        <span class="label">Categories</span>
    </a>
</li>
<li>
    <a class="{{ request()->is('author*') ? 'active' : '' }}" href="{{ route('author.index') }}">
        <i data-acorn-icon="pen" class="d-inline-block"></i>
        <span class="label">Authors</span>
    </a>
</li>
