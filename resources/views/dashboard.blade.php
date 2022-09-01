<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conversion S.A</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="col-12 d-flex flex-wrap">
          <section class="col-3 d-flex flex-column bg-dark border rounded-4 shadow-lg h-auto">
                <div class="w-100 d-flex justify-content-center aligin-items-center text-white p-2">
                    <i class="bi bi-currency-exchange m-auto" style="font-size:5vw;"></i>
                </div>
                <div class="w-100 d-flex justify-content-center aligin-items-center text-white">
                     <a href="" class="btn text-white w-100 fs-5 gap-3 bi bi-folder-plus"> pais</a>
                </div>

                <div class="w-100 d-flex justify-content-start aligin-items-start text-white">
                    <a href="" class="btn text-white w-100 fs-5 gap-3  bi bi-cash-coin justify-content-start text-white"> Moneda</a>
               </div>

               <div class="w-100 d-flex justify-content-start aligin-items-start text-white">
                 <a href="" class="btn text-white w-100 fs-5 gap-3   justify-content-start text-white bi bi-arrow-clockwise">Conversion</a>
               </div>

          </section>
          <div class="col-9 p-3">
            <section class="w-100 border rounded-5 shadow-lg d-flex justify-content-center" style="height:100vh;">
                @yield('content')
            </section>
          </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>