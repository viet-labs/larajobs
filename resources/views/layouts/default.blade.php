<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>@yield('title') - Larajobs</title>
    <style>
        @font-face {
            font-family: 'Scandia';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/fonts/scandia-web-regular.woff2) format('woff2');
        }

        @font-face {
            font-family: 'Scandia';
            font-style: bold;
            font-weight: 700;
            font-display: swap;
            src: url(/fonts/scandia-web-thin.woff2) format('woff2');
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                },
                fontFamily: {
                    sans: ['Scandia', 'Helvetica', 'Arial', 'sans-serif'],
                }
            }
        }
    </script>
</head>

<body>
    @yield('content')
</body>

</html>
