<header class="site-header" id="site-header">
    <div class="container site-header__inner">
        <a href="#inicio" class="brand" aria-label="<?= e($config['business_name']) ?> - início">
            <?php render_ja_logo('compact'); ?>
            <span class="brand__text">
                <span class="brand__name"><?= e($config['business_name']) ?></span>
                <span class="brand__tagline"><?= e($config['tagline']) ?></span>
            </span>
        </a>

        <nav class="main-nav" id="main-nav" aria-label="Navegação principal" data-future-menu-option="loja">
            <ul class="main-nav__list">
                <li><a href="#inicio" class="main-nav__link">Início</a></li>
                <li><a href="#sobre" class="main-nav__link">Sobre</a></li>
                <li><a href="#servicos" class="main-nav__link">Serviços</a></li>
                <li><a href="#eventos" class="main-nav__link">Eventos</a></li>
                <li><a href="#contato" class="main-nav__link">Contato</a></li>
            </ul>
            <a
                href="<?= e(whatsapp_link($config, 'pedido')) ?>"
                class="btn btn--gold main-nav__cta<?= is_whatsapp_configured($config) ? '' : ' is-placeholder' ?>"
                target="_blank"
                rel="noopener noreferrer"
                <?= is_whatsapp_configured($config) ? '' : 'title="Número de WhatsApp ainda não configurado em config.php"' ?>
            >
                WhatsApp
            </a>
        </nav>

        <button
            type="button"
            class="nav-toggle"
            id="nav-toggle"
            aria-expanded="false"
            aria-controls="main-nav"
            aria-label="Abrir menu"
        >
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
        </button>
    </div>
</header>
