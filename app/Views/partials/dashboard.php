<!-- Summary Cards -->

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
  <!-- Card -->
  <div class="p-4 bg-white rounded-lg shadow">
    <h3 class="text-lg font-medium">Members</h3>
    <p class="text-2xl font-semibold mt-2">254</p>
  </div>

  <div class="p-4 bg-white rounded-lg shadow">
    <h3 class="text-lg font-medium">Loans</h3>
    <p class="text-2xl font-semibold mt-2">45</p>
  </div>

  <div class="p-4 bg-white rounded-lg shadow">
    <h3 class="text-lg font-medium">Savings</h3>
    <p class="text-2xl font-semibold mt-2">KES 1.2M</p>
  </div>
</div>

<!-- Table -->
<div class="p-4 bg-white rounded-lg shadow">
  <div class="flex items-center justify-between mb-4">
    <!-- Search -->
    <input 
      type="text" 
      id="tableSearch" 
      placeholder="Search..." 
      class="px-3 py-2 border rounded-md text-sm focus:ring-2 focus:ring-blue-500 w-64"
    />

    <!-- Rows per page -->
    <select id="rowsPerPage" class="border px-2 py-1 rounded text-sm">
      <option value="5">5 rows</option>
      <option value="10" selected>10 rows</option>
      <option value="25">25 rows</option>
    </select>
  </div>

  <!-- Table -->
  <div class="overflow-x-auto">
    <table class="min-w-full text-sm text-left border-collapse" id="dataTable">
      <thead class="bg-gray-100 text-gray-700 font-semibold">
        <tr>
          <th class="px-4 py-2 border-b">#</th>
          <th class="px-4 py-2 border-b">Name</th>
          <th class="px-4 py-2 border-b">Email</th>
          <th class="px-4 py-2 border-b">Status</th>
        </tr>
      </thead>
      <tbody class="divide-y">
        <tr>
          <td class="px-4 py-2">1</td>
          <td class="px-4 py-2">Jackson</td>
          <td class="px-4 py-2">jackson@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">Active</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">2</td>
          <td class="px-4 py-2">Leah</td>
          <td class="px-4 py-2">leah@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-red-100 text-red-700">Inactive</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">1</td>
          <td class="px-4 py-2">Jackson</td>
          <td class="px-4 py-2">jackson@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">Active</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">2</td>
          <td class="px-4 py-2">Leah</td>
          <td class="px-4 py-2">leah@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-red-100 text-red-700">Inactive</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">1</td>
          <td class="px-4 py-2">Jackson</td>
          <td class="px-4 py-2">jackson@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">Active</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">2</td>
          <td class="px-4 py-2">Leah</td>
          <td class="px-4 py-2">leah@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-red-100 text-red-700">Inactive</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">1</td>
          <td class="px-4 py-2">Jackson</td>
          <td class="px-4 py-2">jackson@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">Active</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">2</td>
          <td class="px-4 py-2">Leah</td>
          <td class="px-4 py-2">leah@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-red-100 text-red-700">Inactive</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">1</td>
          <td class="px-4 py-2">Jackson</td>
          <td class="px-4 py-2">jackson@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">Active</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">2</td>
          <td class="px-4 py-2">Leah</td>
          <td class="px-4 py-2">leah@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-red-100 text-red-700">Inactive</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">1</td>
          <td class="px-4 py-2">Jackson</td>
          <td class="px-4 py-2">jackson@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">Active</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">2</td>
          <td class="px-4 py-2">Leah</td>
          <td class="px-4 py-2">leah@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-red-100 text-red-700">Inactive</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">1</td>
          <td class="px-4 py-2">Jackson</td>
          <td class="px-4 py-2">jackson@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">Active</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">2</td>
          <td class="px-4 py-2">Leah</td>
          <td class="px-4 py-2">leah@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-red-100 text-red-700">Inactive</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">1</td>
          <td class="px-4 py-2">Jackson</td>
          <td class="px-4 py-2">jackson@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">Active</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">2</td>
          <td class="px-4 py-2">Leah</td>
          <td class="px-4 py-2">leah@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-red-100 text-red-700">Inactive</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">1</td>
          <td class="px-4 py-2">Jackson</td>
          <td class="px-4 py-2">jackson@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">Active</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">2</td>
          <td class="px-4 py-2">Leah</td>
          <td class="px-4 py-2">leah@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-red-100 text-red-700">Inactive</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">1</td>
          <td class="px-4 py-2">Jackson</td>
          <td class="px-4 py-2">jackson@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">Active</span>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2">2</td>
          <td class="px-4 py-2">Leah</td>
          <td class="px-4 py-2">leah@example.com</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 text-xs rounded bg-red-100 text-red-700">Inactive</span>
          </td>
        </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </div>

  <!-- Pagination -->
  <div class="flex justify-between items-center mt-4">
    <p class="text-sm text-gray-600" id="tableInfo"></p>
    <div class="flex space-x-2" id="pagination"></div>
  </div>
</div>

