<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackaton</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');
    </style>

    <link rel="stylesheet" href="{{asset('/css/edit.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bukti.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bg.css')}}">
</head>
<body>
    <div class="bukti" >
        <div class="sidebar">
            <div class="logo_content">
                <div class="logo">
                    <!-- <i id="java" class='bx bxl-java'></i> -->
                    <img id="svg" src="logo hackathon.svg" alt="">
                    <div class="logo_name">Welcome Back</div>
                </div>
                <!-- <i class='bx bx-menu' id="btn" ></i> -->
            </div>
            <ul class="nav_list">
                <li>
                    <a href="/admin">
                        <i class='bx bx-log-out  bx-sm bx-tada-hover' ></i>
                        <span class="links_name">Back</span>
                    </a>
                    <span class="tooltip">Back</span>

                </li>
            </ul>
        </div>



        @foreach ($admins as $admin )
          <img class="gambar" width="1000px" id="bukti" src="{{ url('/data_file/'.$admin->bukti) }}">
        @endforeach
    </div>





</body>
</html>
