<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flask Act 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://unpkg.com/htmx.org@1.9.12"></script>

</head>
<body>

    <div class="mx-auto">
        <section class="bg-blue-700 text-white flex justify-between">
            <div id="brand" class="text-xl">
                App
            </div>
            <nav id="main-nav" class="flex">
                <a href="/" class="p-3 hover:bg-blue-600">Home</a>
                <a href="/about" class="p-3 hover:bg-blue-600">About</a>
                <a href="/product" class="p-3 hover:bg-blue-600">Products</a>
                <a href="/contact" class="p-3 hover:bg-blue-600">Contacts</a>
            </nav>
        </section>

        <article id="content">
            @yield('content')
        </article>

        <footer class="text-center text-grey-500 py-3">
            Copyright &copy; 2024. All rights Deserved?
        </footer>
    </div>


</body>
</html>
