<?php
/**
 * Usage:
 * echo view('components/modal', [
 *   'id' => 'exampleModal',
 *   'title' => 'Confirm Delete',
 *   'body' => 'Are you sure you want to delete this item?',
 *   'footer' => '<button onclick="closeModal(\'exampleModal\')" class="px-4 py-2 rounded bg-gray-200">Cancel</button>
 *                <button class="px-4 py-2 rounded bg-red-600 text-white hover:bg-red-700">Delete</button>'
 * ]);
 */
?>

<!-- Modal wrapper -->
<div id="<?= esc($id) ?>" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
  <div class="bg-white rounded-xl shadow-lg max-w-lg w-full">
    <!-- Header -->
    <div class="flex justify-between items-center border-b px-4 py-2">
      <h3 class="text-lg font-semibold"><?= esc($title) ?></h3>
      <button onclick="closeModal('<?= esc($id) ?>')" class="text-gray-500 hover:text-gray-700">&times;</button>
    </div>

    <!-- Body -->
    <div class="p-4">
      <?= $body ?>
    </div>

    <!-- Footer -->
    <div class="flex justify-end gap-2 border-t px-4 py-2">
      <?= $footer ?? '' ?>
    </div>
  </div>
</div>

<!-- Modal JS -->
<script>
function openModal(id) {
  document.getElementById(id).classList.remove("hidden");
}
function closeModal(id) {
  document.getElementById(id).classList.add("hidden");
}
</script>
