<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127716083-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-127716083-2');
    </script> --}}


        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-KKNLFCP');
        </script>
        <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKNLFCP"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <h1>Doneer</h1>
   <a href="http://google.com">google</a>
    <!-- <form id="testform" method="POST" action="{{url('submit')}}"> -->
    <form id="testform" method="POST" action="{{url('/')}}">
        @csrf
        Naam: <input type="text" name="naam" id=""><br>
        <input type="radio" name="bedrag" value="25"> 25 euro<br>
        <input type="radio" name="bedrag" value="50"> 50 euro<br>
        <input type="radio" name="bedrag" value="100"> 100 euro <br>
        <input type="submit" name="button" value="Verstuur">
    </form>


</body>
</html>