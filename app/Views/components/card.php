<?php
/**
 * Usage:
 * echo view('components/card', [
 *   'title' => 'User Statistics',
 *   'content' => '<p>Total users: <strong>120</strong></p>',
 *   'footer' => '<a href="#" class="text-indigo-600 text-sm">View details</a>'
 * ]);
 */
?>

<div class="bg-white rounded-xl shadow p-4 space-y-2">
  <?php if (!empty($title)): ?>
    <h3 class="text-lg font-semibold text-gray-700"><?= esc($title) ?></h3>
  <?php endif; ?>

  <div class="text-gray-600">
    <?= $content ?? '' ?>
  </div>

  <?php if (!empty($footer)): ?>
    <div class="border-t pt-2 text-sm text-gray-500">
      <?= $footer ?>
    </div>
  <?php endif; ?>
</div>
