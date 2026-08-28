<section class="food-delivery" id="lanchonete">
    <div class="container food-delivery__grid-main">
        <div class="food-delivery__content reveal">
            <p class="eyebrow">Lanchonete e delivery</p>
            <h2>Fome bateu? A J&A resolve com lanche, porção e entrega.</h2>
            <p>
                Um bloco pronto para evoluir para cardápio digital e delivery integrado.
                Nesta fase, o contato principal continua sendo pelo WhatsApp.
            </p>

            <ul class="food-delivery__grid">
                <li class="food-delivery__item">
                    <span class="food-delivery__icon"><?= ja_icon('burger') ?></span>
                    <h3>Lanches</h3>
                    <p>Opções variadas para todos os gostos.</p>
                </li>
                <li class="food-delivery__item">
                    <span class="food-delivery__icon"><?= ja_icon('cart') ?></span>
                    <h3>Porções</h3>
                    <p>Perfeitas para compartilhar.</p>
                </li>
                <li class="food-delivery__item">
                    <span class="food-delivery__icon"><?= ja_icon('scooter') ?></span>
                    <h3>Delivery</h3>
                    <p>Pedido rápido pelo WhatsApp.</p>
                </li>
            </ul>

            <a
                href="<?= e(whatsapp_link($config, 'pedido')) ?>"
                class="btn btn--dark<?= is_whatsapp_configured($config) ? '' : ' is-placeholder' ?>"
                target="_blank"
                rel="noopener noreferrer"
            >
                Fazer pedido
            </a>
        </div>

        <div class="food-delivery__media reveal">
            <img src="assets/img/lanchonete-eventos.jpg" alt="Lanches, embalagens de delivery e ambiente de eventos da J&A Conveniência" loading="lazy" decoding="async">
        </div>
    </div>
</section>
