<?php
// Example usage: echo view('components/badge', ['text' => 'Active', 'type' => 'success']);

$type = $type ?? 'info';

$classes = match ($type) {
    'success' => 'px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700',
    'warning' => 'px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-700',
    'danger'  => 'px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-700',
    default   => 'px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-700',
};
?>

<span class="<?= $classes ?>">
  <?= esc($text ?? '') ?>
</span>
