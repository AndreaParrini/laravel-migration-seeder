<section id="section_header" class="bg-warning p-4 text-dark">
    <div class="container">
        <nav class="nav justify-content-between align-items-center">
            <div>
                <i class="fa-solid fa-train-subway fa-2xl" style="color: #000000;"></i>
            </div>
            <div class="d-flex ">
                <a class="nav-link text-dark" href="{{ Route('home') }}" aria-current="page">Home</a>
                <a class="nav-link text-dark" href="{{ Route('contact') }}">Contact us</a>
                <a class="nav-link text-dark" href="{{ Route('aboutus') }}">About us</a>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
        </nav>
    </div>
</section>
