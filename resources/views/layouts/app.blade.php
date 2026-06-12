<head>
    <meta charset="UTF-8">
    <title>Local Government Unit of Baliangao - Official</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome (ADDED FOR SERVICE ICONS) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- ICON LIBRARY -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!-- FAVICON / TAB LOGO -->
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}?v=3">
<link rel="shortcut icon" href="{{ asset('favicon.png') }}?v=3">

</head>
    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar{
            background:#ffc107;
        }

        .hero{
            padding:80px 0;
            background:#fff8db;
        }

        .service-card{
        border:1px solid #080808;
        height:180px;              /* makes it square */
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        text-align:center;
        padding:20px;
        background:white;
        transition:.3s;
}

        .service-card:hover{
        transform:translateY(-5px);
        box-shadow:0 10px 20px rgba(0, 0, 0, 0.1);
}

        .service-icon{
        font-size:30px;
        margin-bottom:10px;
}

        .service-card h5{
        font-size:14px;
        margin:0;
}

        .news{
            background:#f5f5f5;
            padding:80px 0;
        }

        footer{
            background:#1b1b1b;
            color:white;
            padding:60px 0;
        }

        footer a{
            color:#ffc107;
            text-decoration:none;
        }

    </style>

</head>
<body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('partials.footer')


<script>

function updateDateTime() {

    const now = new Date();

    const options = { 
        weekday: 'long', 
        year: 'numeric', 
        month: 'long', 
        day: 'numeric'
    };

    const date = now.toLocaleDateString('en-US', options);
    const time = now.toLocaleTimeString();

    document.getElementById("datetime").innerHTML = date + " | " + time;

}

setInterval(updateDateTime, 1000);
updateDateTime();

</script>

</body>
</html>