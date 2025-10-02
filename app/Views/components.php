<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Tailwind via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ["Inter", "ui-sans-serif", "system-ui"],
                    }
                }
            }
        }
    </script>
</head>

<body class="font-sans bg-gray-50">

    <!-- Wrapper -->
    <div class="flex h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r shadow-sm flex flex-col">
            <div class="p-4 text-xl font-bold text-indigo-600 border-b">My System</div>
            <nav class="flex-1 p-4 space-y-2">
                <a href="#" class="block px-3 py-2 rounded-lg hover:bg-indigo-100 text-gray-700">Dashboard</a>
                <a href="#" class="block px-3 py-2 rounded-lg hover:bg-indigo-100 text-gray-700">Users</a>
                <a href="#" class="block px-3 py-2 rounded-lg hover:bg-indigo-100 text-gray-700">Reports</a>
                <a href="#" class="block px-3 py-2 rounded-lg hover:bg-indigo-100 text-gray-700">Settings</a>
            </nav>
            <div class="p-4 border-t">
                <button class="w-full px-4 py-2 text-sm rounded-lg bg-red-500 text-white hover:bg-red-600">Logout</button>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col">

            <!-- Navbar -->
            <header class="flex items-center justify-between bg-white shadow px-6 py-4">
                <h1 class="text-lg font-semibold">Dashboard</h1>
                <div class="flex items-center space-x-3">
                    <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">Online</span>
                    <img src="https://i.pravatar.cc/40" class="w-8 h-8 rounded-full border" alt="User">
                </div>
            </header>

            <!-- Content Area -->
            <div class="p-6 space-y-6 overflow-y-auto">

                <!-- Buttons -->
                <section>
                    <h2 class="text-sm font-semibold mb-3 text-gray-600">Buttons</h2>
                    <div class="flex gap-3 flex-wrap">
                        <button class="px-4 py-2 rounded-xl bg-indigo-600 text-white hover:bg-indigo-700 shadow">Primary</button>
                        <button class="px-4 py-2 rounded-xl border border-indigo-600 text-indigo-600 hover:bg-indigo-50">Outline</button>
                        <button class="px-3 py-1 text-sm rounded-lg bg-gray-200 hover:bg-gray-300">Small</button>
                    </div>
                </section>

                <!-- Badges -->
                <section>
                    <h2 class="text-sm font-semibold mb-3 text-gray-600">Badges</h2>
                    <div class="flex gap-2">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700">Active</span>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-700">Pending</span>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-700">Inactive</span>
                    </div>
                </section>

                <!-- Alerts -->
                <section>
                    <h2 class="text-sm font-semibold mb-3 text-gray-600">Alerts</h2>
                    <div class="space-y-2">
                        <div class="flex items-center gap-2 p-3 rounded-lg bg-blue-100 text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Information alert here</span>
                        </div>
                        <div class="flex items-center gap-2 p-3 rounded-lg bg-red-100 text-red-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18.364 5.636l-12.728 12.728m0-12.728l12.728 12.728" />
                            </svg>
                            <span>Error message here</span>
                        </div>
                    </div>
                </section>

                <section class="space-y-6">

                    <!-- Card -->
                    <?= view('components/card', [
                        'title' => 'User Stats',
                        'content' => '<p>Total Users: <strong>152</strong></p>',
                        'footer' => '<a href="#" class="text-indigo-600 text-sm">See more</a>'
                    ]) ?>

                    <!-- Table -->
                    <?= view('components/table', [
                        'headers' => ['Name', 'Status', 'Action'],
                        'rows' => [
                            ['John Doe', '<span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">Active</span>', '<button class="px-2 py-1 bg-indigo-600 text-white rounded">Edit</button>'],
                            ['Jane Smith', '<span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700 rounded">Pending</span>', '<button class="px-2 py-1 bg-indigo-600 text-white rounded">Edit</button>']
                        ]
                    ]) ?>

                    <!-- Modal Trigger -->
                    <button onclick="openModal('exampleModal')" class="px-4 py-2 bg-indigo-600 text-white rounded">
                        Open Modal
                    </button>

                    <!-- Modal Component -->
                    <?= view('components/modal', [
                        'id' => 'exampleModal',
                        'title' => 'Confirm Delete',
                        'body' => 'Are you sure you want to delete this record?',
                        'footer' => '<button onclick="closeModal(\'exampleModal\')" class="px-4 py-2 rounded bg-gray-200">Cancel</button>
                   <button class="px-4 py-2 rounded bg-red-600 text-white hover:bg-red-700">Delete</button>'
                    ]) ?>

                </section>


                <!-- Table -->
                <section>
                    <h2 class="text-sm font-semibold mb-3 text-gray-600">Table</h2>
                    <div class="overflow-x-auto rounded-lg shadow">
                        <table class="min-w-full text-sm text-left border border-gray-200">
                            <thead class="bg-gray-100 text-gray-700">
                                <tr>
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">Status</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-4 py-2">John Doe</td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-700">Active</span>
                                    </td>
                                    <td class="px-4 py-2">
                                        <button class="px-3 py-1 text-xs rounded bg-indigo-600 text-white hover:bg-indigo-700">Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

            </div>
        </main>
    </div>

</body>

</html>