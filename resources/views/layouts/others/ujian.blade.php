<html>
<head>
    <title>Sahabat Karir</title>

    <livewire:styles>
    <script>
        const startingMinutes = 1;
        let time = startingMinutes * 6000;
        setInterval(updateCountdown,1000);
        function updateCountdown(){
            const minutes = Math.floor(time/60);
            let seconds = time % 60;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            document.getElementById("demo").innerHTML = minutes+":"+seconds;
            if(time == 0) {
                // // in minute
                // // var id_subtes=document.getElementById("id_subtes").innerHTML;
                // saveStorage('#formSoal');
                document.location.href="{!! route('lihat.petunjuk',2) !!}";
            }else{
                time--;
            }
        }
    </script>
</head>

<body>
    @include('templates/header')
    @yield('content')
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <div class="container-fluid">
        <section class="content" >     
            <script type="text/javascript">
                var limit = 2;
                $('input.single-checkbox').on('change', function(evt) {
                    if($(this).siblings(':checked').length >= limit) {
                        this.checked = false;
                    }
                });
            </script>
            @include("templates/footer")    
            @stack('script-after')
        </section>
    </div>

    <livewire:scripts>
</body>
        