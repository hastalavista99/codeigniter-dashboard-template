<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $title ?? 'Dashboard' ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Configure Tailwind -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ["Inter", "ui-sans-serif", "system-ui"]
          }
        }
      }
    }
  </script>

  <!-- Inter font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50 font-sans">

  <div class="flex h-screen">

    <!-- Sidebar -->
    <aside class="fixed inset-y-0 left-0 w-64 bg-white border-r shadow-sm flex flex-col">
      <div class="p-4 text-xl font-bold text-indigo-600 border-b">My System</div>
      <nav class="flex-1 p-4 space-y-2">
        <a href="<?= site_url('dashboard') ?>" class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
          <i data-lucide="home" class="w-5 h-5"></i> Dashboard
        </a>
        <a href="<?= site_url('members') ?>" class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
          <i data-lucide="users" class="w-5 h-5"></i> Members
        </a>
        <a href="<?= site_url('reports') ?>" class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
          <i data-lucide="bar-chart-3" class="w-5 h-5"></i> Reports
        </a>
        <a href="<?= site_url('components') ?>" class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
          <i data-lucide="layers" class="w-5 h-5"></i> Components
        </a>

      </nav>
      <!-- <div class="p-4 border-t">
        <a href="<?= site_url('login') ?>" class="w-full px-4 py-2 text-sm rounded-lg bg-red-500 text-white hover:bg-red-600">Logout</a>
      </div> -->
    </aside>

    <!-- Main Content -->
    <main class="ml-64 pt-16 p-6 flex-1 flex flex-col">

      <!-- Navbar -->
      <!-- Navbar -->
      <header class="fixed top-0 left-64 right-0 h-14 bg-white border-b shadow-sm flex items-center justify-between px-6 z-50">
        <h1 class="text-lg font-semibold">Dashboard</h1>

        <!-- User dropdown -->
        <div x-data="{ open: false }" class="relative">
          <!-- Trigger -->
          <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">Online</span>
            <img src="https://i.pravatar.cc/40" class="w-8 h-8 rounded-full border" alt="User">
            <i data-lucide="chevron-down" class="w-5 h-5"></i>
          </button>

          <!-- Dropdown menu -->
          <div
            x-show="open"
            @click.away="open = false"
            x-transition
            class="absolute right-0 mt-2 w-48 bg-white border rounded-lg shadow-lg py-2 z-50">
            <a href="<?= site_url('profile') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center gap-2">
              <i data-lucide="user" class="w-4 h-4"></i> Profile
            </a>
            <a href="<?= site_url('settings') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center gap-2">
              <i data-lucide="settings" class="w-4 h-4"></i> Settings
            </a>
            <hr class="my-1">
            <a href="<?= site_url('logout') ?>" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-100 flex items-center gap-2">
              <i data-lucide="log-out" class="w-4 h-4"></i> Logout
            </a>
          </div>
        </div>
      </header>


      <!-- Content Area -->
      <div class="p-6 space-y-6 overflow-y-auto">
        <?= $content ?? '' ?>
      </div>
    </main>
  </div>

  <script src="<?= base_url('assets/js/table.js') ?>"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <script>
    lucide.createIcons();
  </script>



</body>

</html>