<?php
/**
 * Emblema da JA Conveniência. O mesmo arquivo é usado em todos os tamanhos; o parâmetro
 * $variant só controla a classe CSS aplicada (dimensão de exibição).
 *
 * @param string $variant 'full' (hero/destaque) ou 'compact' (header/footer)
 */
function render_ja_logo(string $variant = 'full'): void
{
    $class = 'ja-emblem ja-emblem--' . ($variant === 'compact' ? 'compact' : 'full');
    ?>
    <picture class="<?= $class ?>">
        <source srcset="assets/img/logo.webp" type="image/webp">
        <img
            src="assets/img/logo.png"
            alt="JA Conveniência"
            width="835"
            height="745"
            <?= $variant === 'compact' ? 'loading="eager"' : 'loading="eager" fetchpriority="high"' ?>
        >
    </picture>
    <?php
}
