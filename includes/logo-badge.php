<?php
/**
 * Emblema da JA Loungebar. O mesmo arquivo é usado em todos os tamanhos; o parâmetro
 * $variant só controla a classe CSS aplicada (dimensão de exibição).
 *
 * @param string $variant 'full' (hero/destaque) ou 'compact' (header/footer)
 */
function render_ja_logo(string $variant = 'full'): void
{
    $class = 'ja-emblem ja-emblem--' . ($variant === 'compact' ? 'compact' : 'full');
    ?>
    <picture class="<?= $class ?>">
        <img
            src="assets/img/logo-ja-loungebar.png"
            alt="JA Loungebar - Tabacaria &amp; Conveniência"
            width="1024"
            height="1024"
            <?= $variant === 'compact' ? 'loading="eager"' : 'loading="eager" fetchpriority="high"' ?>
        >
    </picture>
    <?php
}
