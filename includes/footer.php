<footer class="site-footer">
    <div class="container site-footer__inner">
        <div class="site-footer__brand">
            <?php render_ja_logo('compact'); ?>
            <div>
                <p class="site-footer__name"><?= e($config['business_name']) ?></p>
                <p class="site-footer__tagline"><?= e($config['tagline']) ?></p>
            </div>
        </div>

        <nav class="site-footer__links" aria-label="Links rápidos">
            <a href="#inicio">Início</a>
            <a href="#sobre">Sobre</a>
            <a href="#servicos">Serviços</a>
            <a href="#eventos">Eventos</a>
            <a href="#contato">Contato</a>
        </nav>

        <div class="site-footer__contact">
            <?php if (is_whatsapp_configured($config)): ?>
                <a href="<?= e(whatsapp_link($config)) ?>" target="_blank" rel="noopener noreferrer">WhatsApp</a>
            <?php else: ?>
                <span class="contact__placeholder">WhatsApp a definir</span>
            <?php endif; ?>

            <?php if (trim($config['instagram_handle'] ?? '') !== ''): ?>
                <a href="<?= e($config['instagram_url']) ?>" target="_blank" rel="noopener noreferrer">
                    Instagram
                </a>
            <?php else: ?>
                <span class="contact__placeholder">Instagram a definir</span>
            <?php endif; ?>

            <?php if (trim($config['address']['street'] ?? '') !== ''): ?>
                <span>
                    <?= e($config['address']['street']) ?>,
                    <?= e($config['address']['city']) ?> - <?= e($config['address']['state']) ?>
                </span>
            <?php else: ?>
                <span class="contact__placeholder">Endereço a definir</span>
            <?php endif; ?>
        </div>

        <p class="site-footer__rights">
            &copy; <?= date('Y') ?> <?= e($config['business_name']) ?>. Todos os direitos reservados.
            <br>
            Desenvolvido por <a href="https://calutec.com.br" target="_blank" rel="noopener noreferrer">Calutec Soluções</a>.
        </p>
    </div>
</footer>
