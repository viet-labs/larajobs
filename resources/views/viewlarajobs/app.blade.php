<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>
<body>
    <main>
        <header>
            <nav class="flex items-center justify-between h-16 px-4 sm:px-6 bg-white shadow">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold leading-none text-clifford hover:text-white">
                        My Website
                    </a>
                </div>
                <div class="flex items-center">
                    <button class="ml-auto bg-white py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-clifford">
                        Sign in
                    </button>
                </div>
            </nav>
        </header>
        </header>
    </main>
</body>
</html>
