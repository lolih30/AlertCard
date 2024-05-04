<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="flex flex-col p-6">
        <p class="mb-4 font-bold text-[#787E8F]">{{ $name }}</p>

        <div class=" flex flex-row items-center pl-6">
            <div style="max-width:100px; max-height:100px; min-width:50px; min-height:50px; overflow:hidden">
                <img src="{{ url('storage/' . $image) }}" alt="">
            </div>
            <div style="margin-left: 1rem;">

                <a href={{ $link }} class=" text-3xl  min-text-2xl font-light text-[#6B7A8E]"
                    style="margin-bottom: 5px">{{ $title }}</a>
                <p class="text-[#787B80]">{{ $subtitle }}</p>
            </div>
        </div>

    </div>
</body>

</html>
