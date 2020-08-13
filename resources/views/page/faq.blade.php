<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>FAQ | UD. Tumbuh Jati</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="{{ asset('faq/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('faq/font-awesome/css/font-awesome.min.css') }}" />

    <script type="text/javascript" src="{{ asset('faq/js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('faq/bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>
        <div class="logo">
            <a href="{{ Route('/') }}">
                <img src="{{asset('icons/logo.png')}}" alt="UD. Tumbuh Jati" >
            </a>
        </div> 
        <small>Pertanyaan yang mungkin akan membantu anda</small>
    </h1>
</div>

<!-- Bootstrap FAQ - START -->
<div class="container">
    <br />
    <br />
    <br />

    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        Ini adalah jenis pertanyaan yang berhubungan tentang cara memesan di <strong>UD. Tumbuh Jati</strong>. Jika pertanyaan anda tidak tercantum disini pastikan untuk menghubungi kita. 
    </div>

    <br />

    <div class="panel-group" id="accordion">
        <div class="faqHeader">Pertanyaan</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Berapa Ongkos pengirimannya</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    Untuk ongkos pengiriman di <strong>UD. Tumbuh Jati</strong> Untuk pengiriman didalam kota jepara ongkos kirim sekitar 200 ribu, sedangkan untuk luar kota bisa 300 ribu rupiah. 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Apakah produk asli dari UD. Tumbuh Jati sendiri</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                    Iya. UD. Tumbuh Jati memproduksi produk sendiri mulai dari meja, kursi semua produk dari UD. Tumbuh Jati adalah buatan pengrajin UD. Tumbuh Jati yang sudah berpengalaman. 
                </div>
            </div>
        </div>
        {{-- <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven"></a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="panel-body">
                    All prices for themes, templates and other items, including each seller's or buyer's account balance are in <strong>USD</strong>
                </div>
            </div>
        </div> --}}
    </div>
</div>

<style>
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "\e072"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>

<!-- Bootstrap FAQ - END -->

</div>

</body>
</html>