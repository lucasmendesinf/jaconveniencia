<section class="hero" id="inicio">
    <picture class="hero__media" aria-hidden="true">
        <img src="assets/img/hero-ja-conveniencia.jpg" alt="" loading="eager" decoding="async">
    </picture>
    <div class="hero__overlay" aria-hidden="true"></div>

    <div class="container hero__inner">
        <div class="hero__copy">
            <p class="eyebrow reveal">Bebidas · Conveniência · Lanchonete · Eventos</p>
            <h1 class="hero__title reveal">J&A Conveniência</h1>
            <p class="hero__subtitle reveal">
                O ponto certo para comprar bebidas, resolver a conveniência, pedir um lanche
                e acompanhar as próximas experiências da casa.
            </p>

            <div class="hero__actions reveal">
                <a
                    href="<?= e(whatsapp_link($config, 'pedido')) ?>"
                    class="btn btn--gold btn--lg<?= is_whatsapp_configured($config) ? '' : ' is-placeholder' ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Chamar no WhatsApp
                </a>
                <a href="#servicos" class="btn btn--ghost btn--lg">Ver serviços</a>
            </div>

            <ul class="hero__highlights reveal">
                <li><?= ja_icon('drinks') ?><span>Bebidas geladas</span></li>
                <li><?= ja_icon('cart') ?><span>Conveniência</span></li>
                <li><?= ja_icon('burger') ?><span>Lanches e delivery</span></li>
                <li><?= ja_icon('party') ?><span>Casa de eventos</span></li>
            </ul>
        </div>

        <div class="hero__quick-card reveal">
            <span>Aberto para você</span>
            <strong>Bebidas, comida e bons momentos em um só endereço.</strong>
            <a href="#contato">Ver localização</a>
        </div>
    </div>
</section>
