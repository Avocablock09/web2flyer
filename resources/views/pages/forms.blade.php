<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/css/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
</head>

<body style="font-family: 'Arial'">
    <div class="container list-group mt-4">
        <p class="text-center m-0"><strong>FORM FLYER KEBAKTIAN</strong></p>
        @php
            $NextSunday = date('Y-m-d', strtotime('next Sunday'));
        @endphp
        <form action="/flyer" method="POST">
            @csrf
            {{-- TANGGAL KEBAKTIAN --}}
            <div class="form-group">
                <label for="">Tanggal Kebaktian: </label>
                <input value="{{ $NextSunday }}" name="tanggal" type="date" class="date-picker">
            </div>
            {{-- JIANG DAO --}}
            <div class="form-group">
                <label for="">Jiang Dao</label><br>
                <select class="js-example-basic-single form-select" name="jiangdao">
                    @foreach ($data as $key => $jiangdao)
                        <option class="px-2" value='{{ $key }}'>{{ $jiangdao[0] }}</option>
                    @endforeach
                </select>
            </div>
            {{-- PIMPINAN DOA --}}
            <div class="form-group">
                <label for="">Pimpinan Doa</label>
                <div class="row mx-0">
                    @include('pages.select', ['name' => 'doa1'])
                    <input class="col-9 col-sm-10 col-md-11 my-0 pl-3" type="text" placeholder="Pimpinan Doa"
                        name="PD">
                </div>
            </div>
            {{-- PENDAMPING 1 --}}
            <div class="form-group">
                <label for="">Pendamping 1</label>
                <div class="row mx-0">
                    @include('pages.select', ['name' => 'pd-1'])
                    <input class="col-9 col-sm-10 col-md-11 my-0 pl-3" type="text" placeholder="Pendamping 1"
                        name="PD1">
                </div>
            </div>
            {{-- PENDAMPING 2 --}}
            <div class="form-group">
                <label for="">Pendamping 2</label>
                <div class="row mx-0">
                    @include('pages.select', ['name' => 'pd-2'])
                    <input class="col-9 col-sm-10 col-md-11 my-0 pl-3" type="text" placeholder="Pendamping 2"
                        name="PD2">
                </div>
            </div>
            {{-- RENUNGAN --}}
            <div class="form-group">

                <label for="">Renungan</label>
                <div class="row mx-0">
                    @include('pages.select', ['name' => 'rn'])
                    <input class="col-9 col-sm-10 col-md-11 my-0 pl-3" type="text" placeholder="Renungan"
                        name="renungan">
                </div>
            </div>
            {{-- MC --}}
            <div class="form-group">
                <label for="">MC </label>
                <div class="row mx-0">
                    @include('pages.select', ['name' => 'mc-1'])
                    <input class="col-9 col-sm-10 col-md-11 my-0 pl-3" type="text" placeholder="MC" name="MC"
                        id="MC">
                </div>
            </div>
            <button type="submit" class="btn btn-danger px-4">
                Kirim
            </button>
        </form>
    </div>
</body>




</html>

<style>
    label {
        font-weight: 300;
    }

    input[type=text] {
        border: none;
        border-bottom: 1px solid #ccc;
        padding: 12px 0;
    }

    .select2-container .select2-selection--single {
        height: 50px !important;
        width: 100%;
    }

    .select2-selection__rendered {
        margin: 10px;
        align-items: center;
    }
</style>

<script>

    $('#js-example-basic-single').select2({
        theme: 'bootstrap-5'
    });

    $(document).ready(function() {
        $(".js-example-basic-single").select2();
    });
</script>
