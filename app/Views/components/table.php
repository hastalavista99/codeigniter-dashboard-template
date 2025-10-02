<?php
/**
 * Usage:
 * echo view('components/table', [
 *   'headers' => ['Name', 'Status', 'Action'],
 *   'rows' => [
 *       ['John Doe', 'Active', '<button class="px-2 py-1 text-xs bg-indigo-600 text-white rounded">Edit</button>'],
 *       ['Jane Smith', 'Pending', '<span class="px-2 py-1 text-xs rounded bg-yellow-100 text-yellow-700">Pending</span>']
 *   ]
 * ]);
 */
?>

<div class="overflow-x-auto rounded-lg shadow">
  <table class="min-w-full text-sm text-left border border-gray-200">
    <thead class="bg-gray-100 text-gray-700">
      <tr>
        <?php foreach ($headers as $header): ?>
          <th class="px-4 py-2"><?= esc($header) ?></th>
        <?php endforeach; ?>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($rows as $row): ?>
        <tr class="border-b hover:bg-gray-50">
          <?php foreach ($row as $cell): ?>
            <td class="px-4 py-2"><?= $cell ?></td>
          <?php endforeach; ?>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
