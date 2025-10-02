<?php
// Example usage: echo view('components/button', ['label' => 'Save', 'variant' => 'primary']);

$variant = $variant ?? 'primary'; // fallback if not passed

$classes = match ($variant) {
    'primary' => 'px-4 py-2 rounded-xl bg-indigo-600 text-white hover:bg-indigo-700 shadow',
    'outline' => 'px-4 py-2 rounded-xl border border-indigo-600 text-indigo-600 hover:bg-indigo-50',
    'small'   => 'px-3 py-1 text-sm rounded-lg bg-gray-200 hover:bg-gray-300',
    default   => 'px-4 py-2 rounded-lg bg-gray-500 text-white',
};
?>

<button class="<?= $classes ?>">
    <?= esc($label ?? 'Button') ?>
</button>
