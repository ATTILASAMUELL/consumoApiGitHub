<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Bootstrap Styles --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">



    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #1C1C1C;
        }

        .cardP {
            position: relative;
            width: 350px;
            height: 190px;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 35px 80px rgba(0, 0, 0, 0.15);
            transition: 0.5s;
        }

        .cardP:hover {
            height: 450px;
        }


        .imgBx {
            position: absolute;
            left: 50%;
            width: 150px;
            height: 150px;
            transform: translateX(-50%);
            top: -35px;
            background: #B0C4DE;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.35);
            overflow: hidden;
            transition: 0.5s;
        }

        .btnn {
            position: relative;
            width: 350px;
            height: 40px;
            background: none;
            border-radius: 20px;
            box-shadow: 0 35px 80px rgba(0, 0, 0, 0.15);
            transition: 0.5s;
        }

        #fora {
            position: absolute;
            left: 50%;
            width: 150px;
            height: 40px;
            transform: translateX(-50%);
            top: -15px;
            background: rgb(54, 54, 209);
            border-radius: 5x;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.35);
            overflow: hidden;
            transition: 0.5s;
        }

        .cardP:hover .imgBx {
            width: 250px;
            height: 250px;
        }


        .imgBx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cardP .content {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            overflow: hidden;
        }

        .cardP .content .details {
            padding: 40px;
            text-align: center;
            width: 100%;
            transition: 0.5s;
            transform: translateY(150px)
        }

        .cardP:hover .content .details {

            transform: translateY(0px)
        }

        .cardP .content .details h2 {
            font-size: 1.25em;
            font-weight: 600;
            color: #1C1C1C;
            line-height: 1.2em;
        }

        .cardP .content .details h2 span {
            font-size: 0.75em;
            font-weight: 500;
            opacity: 0.5;

        }

        .cardP .content .details .data {
            display: flex;
            justify-content: space-between;

            margin: 20px 0;
        }

        .cardP .content .details .data h3 {
            font-size: 1em;
            color: #555;
            line-height: 1.2em;
            font-weight: 600
        }

        .cardP .content .details .data span {
            font-size: 0.85em;
            font-weight: 400;
            opacity: 0.5;
        }

        .cardP .content .details .actionBtn {
            display: flex;
            justify-content: space-between;
            gap: 20px;

        }


        .cardP .content .details .actionBtn button {
            padding: 10px 10px;
            border-radius: 5px;
            border: none;
            outline: none;
            font-size: 1em;
            font-weight: 500;
            background: #555;
            color: #fff;
            cursor: pointer;

        }

        .cardP .content .details .actionBtn button:nth-child(2) {
            border: 1px solid #ffffff;
            color: rgb(255, 255, 255);
            background: red;
        }

        .cardP .content .details .actionBtn button:nth-child(3) {
            border: 1px solid #ffffff;
            color: none;
            background: none;
        }

        /* Search */

        .search-box {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #353b48;
            height: 40px;
            border-radius: 40px;
            padding: 10px;

        }

        a:link {
            text-decoration: none;

        }

        a:hover {
            text-decoration: none;
            cursor: pointer;

        }

        .search-btn {
            color: #f30000;
            float: right;
            width: 40px;
            border-radius: 50%;
            display: flex;
            background: #353b48;
            justify-content: center;
            align-content: center;
            transition: 2s;

        }


        .search-txt {
            top: 16%;
            padding: 10px;
            border: none;
            background: none;
            outline: none;
            float: left;
            color: white;
            font-size: 16px;
            transition: 0.4s;

            width: 0px;
        }

        .search-box:hover>.search-txt {
            width: 240px;
            padding: 0 6px;


        }

        .search-box:hover>.search-btn {
            background: rgb(255, 255, 255):
        }

        .modal-content {
            background: #DCDCDC
        }


        /* Modal */
    </style>
    @livewireStyles
</head>

<body>

    @livewire('user-git')

    {{-- Bootstrap Scripts --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    @livewireScripts

</body>



</html>
