<?php
// Example usage: echo view('components/link-button', [
//     'label' => 'View Details',
//     'href' => '/details/123',
//     'variant' => 'primary',
//     'icon' => 'eye'
// ]);

$variant = $variant ?? 'primary'; // fallback if not passed
$href = $href ?? '#'; // fallback if no href provided

$classes = match ($variant) {
    'primary' => 'inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-indigo-600 text-white hover:bg-indigo-700 shadow',
    'outline' => 'inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-indigo-600 text-indigo-600 hover:bg-indigo-50',
    'small'   => 'inline-flex items-center gap-2 px-3 py-1 text-sm rounded-lg bg-gray-200 hover:bg-gray-300',
    default   => 'inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-gray-500 text-white',
};
?>

<a href="<?= esc($href) ?>" class="<?= $classes ?>">
    <?php if (isset($icon)): ?>
        <i data-lucide="<?= esc($icon) ?>" class="w-5 h-5"></i>
    <?php endif; ?>
    <?= esc($label ?? 'Button') ?>
</a>
