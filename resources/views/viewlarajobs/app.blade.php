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
            <div class="flex justify-between items-center px-6 py-4 bg-clifford">
                <h1 class="text-3xl font-bold text-white">My Website</h1>
                <nav>
                    <ul class="flex gap-x-4">
                        <li><a href="#" class="text-white hover:text-gray-300">Home</a></li>
                        <li><a href="#" class="text-white hover:text-gray-300">About</a></li>
                        <li><a href="#" class="text-white hover:text-gray-300">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </main>
</body>
</html>
