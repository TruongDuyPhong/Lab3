<!DOCTYPE html>
<html lang="vi">

<head>
    <title><?= $title ?? 2004 ?> ASM PHP1</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,init-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" type="text/css" href="Public/Layout/Css/Main.css?ver=<?= Rand() ?>">
    <script>
        function logout() {
            alert("Bạn đã đăng xuất.");
            // Redirect to login page
            window.location.href = "?url=login";
        }
    </script>
</head>

<body onload="time()" class="app sidebar-mini rtl">
    <header class="app-header">
        <ul class="app-nav">
            <li><a class="app-nav__item" href="#" onclick="logout()"><i class='bx bx-log-out bx-rotate-180'></i>Logout</a></li>
        </ul>
    </header>
</body>

</html>
