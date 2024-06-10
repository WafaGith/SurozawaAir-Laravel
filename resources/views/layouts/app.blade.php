<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        .widgets {
            display: flex;
            gap: 20px;
            margin: 20px;
        }

        .widget {
            flex: 1;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .widget h3 {
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        .widget-content {
            font-size: 1em;
        }

        .widget-icon {
            font-size: 2em;
            margin-bottom: 10px;
        }
        /* dashboard.css */
        /* Add button styles */
        .add-btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-right: 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        /* Styling untuk tombol Edit */
        .edit-btn {
            background-color: #007bff;
            /* Warna biru */
            color: #fff;
            /* Warna teks putih */
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }

        .edit-btn:hover {
            background-color: #0056b3;
            /* Warna latar belakang saat dihover */
        }

        /* Styling untuk tombol Delete */
        .delete-btn {
            background-color: #f44336;
            /* Warna merah */
            color: #fff;
            /* Warna teks putih */
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }

        .delete-btn:hover {
            background-color: #d32f2f;
            /* Warna latar belakang saat dihover */
        }
    </style>
</head>

<body>
        @include('partials.sidebar')
        @yield('content')
<script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });
        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the icons class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the icons class
            }
        }
    </script>
</body>

</html>