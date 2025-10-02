<?php
// Example usage: echo view('components/alert', ['message' => 'Error occurred', 'type' => 'error']);

$type = $type ?? 'info';

$styles = [
    'info'  => 'bg-blue-100 text-blue-700',
    'error' => 'bg-red-100 text-red-700',
    'success' => 'bg-green-100 text-green-700',
];

$classes = $styles[$type] ?? $styles['info'];
?>

<div class="flex items-center gap-2 p-3 rounded-lg <?= $classes ?>">
  <?= esc($message ?? '') ?>
</div>
