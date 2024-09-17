<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#060606] text-white font-hanken-grotesk">

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="website logo">
                </a>
            </div>
            <div>
                <ul class="flex gap-5 font-semibold">
                    <li><a href="/jobs">Jobs</a></li>
                    <li><a href="/careers">Careers</a></li>
                    <li><a href="/salaries">Salaries</a></li>
                    <li><a href="/companies">Companies</a></li>
                </ul>
            </div>
            <div>
                <a href="/post-job">Post a Job</a>
            </div>
        </nav>
        <main class="mt-10 max-w-[1100px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>
