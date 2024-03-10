<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        nav {
            background: #FCEFB5;
        }

        @media screen and (max-width: 821px) {
            nav {
                background: #F3E5AB;
            }

            .navbar-toggler {
                margin-left: auto;
            }

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top" id="navbar">
        <div class="container">
            <img src="./assets/img/Logo2.png" alt="" style="width: 7%;">
            <button class="navbar-toggler order-lg-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">หน้าแรก</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            การละเล่น
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./components/Khwang raw.php">ขว้างราว</a></li>
                            <li><a class="dropdown-item" href="./components/Busu.php">บูสุ</a></li>
                            <li><a class="dropdown-item" href="./components/Muay Chaiya.php">มวยไชยา</a></li>
                            <li><a class="dropdown-item" href="./components/Mak Khum.php">หมากขุม</a></li>
                            <li><a class="dropdown-item" href="./components/Makkeb.php">หมากเก็บ</a></li>
                            <li><a class="dropdown-item" href="./components/Nora Khaek.php">โนราแขก</a></li>
                            <li><a class="dropdown-item" href="./components/Pao gob.php">เปากบ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php">ติดต่อ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset >= 10) {
                navbar.style.boxShadow = 'rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px';
            } else {
                navbar.style.boxShadow = 'none';
            }
        });
    </script>

</body>

</html>