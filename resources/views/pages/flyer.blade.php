<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('styles/css/flyer.css') }}">
    <title>Flyer Kebaktian</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    {{-- RATIO 4:6 --}}
    
    <div class="col text-center">
        <button type="button" onclick="download('{{ $data->tanggal }}')" class="btn btn-danger text-center mx-5">Download Images <i class="fa-regular fa-circle-down" style="padding-left:5px"></i></button>
    </div>
    <div class="background-image containerr container-fluid p-0 mx-auto" id="flyer">
        <img class="background-img containerr" src={{ asset('materials/bg-1.png') }}>
        <div class="contents text-center ">
            <div>
                <img class="genta" src={{ asset('materials/genta.png') }}>
                <span class="kebaktian-umum">KEBAKTIAN UMUM</span>
                <span class="hari-tanggal">MINGGU, {{ $data->tanggal }}</span>
                <span class="jam-lokasi">PUKUL: 11.00 WITA KHONG CU BIO - DENPASAR</span>
            </div>
            <div>
                <img class="jiang-dao-image" style="margin-right: 0.5cm" src="{{ asset('materials/jiang.png') }}"
                    alt="">
                <img class="image-pengisi" src={{ asset('pengisi/' . $data->image . '.png') }} alt="">
                <img class="jiang-dao-image" style="margin-left: 0.5cm"src="{{ asset('materials/dao.png') }}"
                    alt="">
            </div>
            <div>
                <span class="jiang-dao">JIANG DAO</span>
                <span class="jiang-dao" style="font-size: 24pt">{{ $data->jiangdao }}</span>
                <span class="jiang-dao">
                    DOA:
                    <br>{{ $data->PD }}
                    <br>{{ $data->PD1 }} & {{ $data->PD2 }}
                    <br>RENUNGAN: {{ $data->renungan }}
                    <br>MC: {{ $data->MC }}
                </span>
                <img class="book" src="{{ asset('materials/books.png') }}" alt="">
            </div>
        </div>
    </div>
</body>

</html>

<script type="application/javascript">
    // ## PRODUCE WEB TO IMAGE ## //
    // html2canvas(document.querySelector("#flyer")).then(canvas => {
    // document.body.appendChild(canvas)
    html2canvas(document.querySelector("#flyer")).then(function(canvas){
            // document.getElementById("flyer").style.display = "none";
            // canvas.setAttribute('id','canvas');
            // document.body.appendChild(canvas);
        downloadImage(canvas.toDataURL(),`Kebaktian ${tanggal}.png`);
    });

    function download(tanggal){
        console.log(tanggal);
        html2canvas(document.querySelector("#flyer")).then(function(canvas){
            // document.getElementById("flyer").style.display = "none";
            // document.body.appendChild(canvas);   
        downloadImage(canvas.toDataURL(),`Kebaktian ${tanggal}.png`);
    });
    }
    

    function downloadImage(uri,filename){
        var link = document.createElement('a');
        if(typeof link.download !== 'string'){
            window.open(uri);
        }
        else{
            link.href = uri;
            link.download = filename;
            accountForFirefox(clickLink, link);
        }
    }

    function clickLink(link){
        link.click();
    }

    function accountForFirefox(click){
        var link = arguments[1];
        // document.body.appendChild(link);
        click(link);
        // document.body.removeChild(link);
    }
</script>

<style>
    body{
        /* min-width: 100%; */
    }

    #flyer{
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    canvas{
        justify-content: center;
    }

    .justify-content-center{
        display: flex;
        justify-content: center;
    }

    .btn{
        margin-top: 1rem;
        margin-bottom: 1rem;
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        cursor:pointer;
    }

    .btn-danger{
        color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
    }
</style>
