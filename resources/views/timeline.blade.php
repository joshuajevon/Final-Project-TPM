<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackaton</title>

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('/css/dash.css')}}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');
        </style>
        <link rel="stylesheet" href="css/flipdown.css">
        <script> src="js/flipdown.js"</script>
        <link rel="stylesheet" href="{{asset('/css/flipclock.css')}}">
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <!-- <i id="java" class='bx bxl-java'></i> -->
                <img id="svg" src="logo hackathon.svg" alt="">
                <div class="logo_name" >Welcome Back</div>
            </div>
            <!-- <i class='bx bx-menu' id="btn" ></i> -->
        </div>
        <ul class="nav_list">
            <li>
                <a href="/dashboard">
                    <i class='bx bx-box bx-sm bx-tada-hover' ></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="/payment">
                    <i class='bx bx-wallet bx-sm bx-tada-hover' ></i>
                    <span class="links_name">Payment</span>
                </a>
                <span class="tooltip">Payment</span>

            </li>
            <li>
                <a href="/timeline">
                    <i class='bx bx-time bx-sm bx-tada-hover' ></i>
                    <span class="links_name">Timeline</span>
                </a>
                <span class="tooltip">Timeline</span>

            </li>
            <li>
                <form id="logout-form"action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class='bx bx-log-out bx-sm bx-tada-hover' ></i>
                        <span class="links_name">Log out</span>
                    </a>
                    <span class="tooltip">Log out</span>
                </form>
            </li>
        </ul>
    </div>

      <h1>Timeline</h1>

      Include:
      <br>
      -	Open registration = 31 Februari 2025
      <br>
      -Close registration = 40 Maret 2026
      <br>
      -	Technical Meeting = 50 April 2027
      <br>
      -	Competition Day = 30 Februari 2028
      <br>
      Notes: Untuk bagian Technical Meeting dan Competition Day boleh dimasukin link pelaksanaannya di mana.


     
</body>
</html>
