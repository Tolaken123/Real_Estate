<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title','Home')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/slideshow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    @stack('css')
</head>

<body id="home">
@include('frontend.include.navbar')

@yield('content')


@include('frontend.include.footer')
<!-- /item -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
</script>

@stack('js')
</body>

</html>
