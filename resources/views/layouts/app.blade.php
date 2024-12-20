<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&family=Kanit:wght@200&family=Noto+Sans+Thai:wght@100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: "Kanit", serif;
            font-weight: 800;
            font-style: normal;
        }
    </style>
</head>

<body class="bg-[#f5f5f9]">
    @include('layouts.navuser')
    <div class="flex justify-center">
        <div>
            <h1 class="mb-[4rem] text-center mt-4 text-3xl text-black mt-[4rem]">เครื่องมือประเมินความพร้อมของครอบครัว
                (Family Readiness Assessment)/F.R.A</h1>
            <div class="bg-[#bde5ff] p-[2rem] rounded-xl shadow-2xl">
                @yield('content')
            </div>
        </div>


    </div>
    <div class="mt-[4rem]">

    </div>
</body>

</html>
