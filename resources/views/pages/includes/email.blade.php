<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Email</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">

<!-- Begin page Content -->
<main class="flex-shrink-0">
    <div class="container">
        <ul>
            @if ($name)
                <li>
                    <strong>{{ $name }}</strong>
                </li>
            @endif

            @if ($email)
                <li>
                    <strong>{{ $email }}</strong>
                </li>
            @endif
            @if ($subject)
                <li>
                    <strong>{{ $subject }}</strong>
                </li>
            @endif
            <hr>
            @if($message)
                <h4> Message:</h4>
                <p>
                    @foreach ($messages as $message)
                        {{ $message }}<br>
                    @endforeach
                </p>
                <hr>
            @endif
        </ul>
    </div>
</main>


<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
    </div>
</footer>



</body>
</html>

