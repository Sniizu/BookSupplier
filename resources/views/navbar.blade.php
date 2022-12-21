<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-warning d-flex justify-content-center p-4 text-white" style="font-size: 50px">
        Giant Book Supplier
    </div>
    <nav class="navbar navbar-expand-lg">
          <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="/category/{{$category->id}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary" href="/publisher">Publisher</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary" href="/contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <div class="container mt-4">
            @yield('content')
            <div class="bg-primary p-1 text-white d-flex justify-content-center" style="font-size: 13px">
                © Happy Book Store 2022
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
