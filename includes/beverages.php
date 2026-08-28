<section class="beverages" id="bebidas-conveniencia">
    <div class="container beverages__grid">
        <div class="beverages__media reveal">
            <img src="assets/img/bebidas-conveniencia.jpg" alt="Bebidas geladas e produtos de conveniência em balcão moderno" loading="lazy" decoding="async">
        </div>

        <div class="beverages__content reveal">
            <p class="eyebrow">Bebidas e conveniência</p>
            <h2>Bebidas geladas, itens rápidos e praticidade para qualquer hora.</h2>
            <p>
                Da compra de última hora ao encontro com os amigos, a JA reúne opções para
                consumo imediato, retirada e atendimento pelo WhatsApp.
            </p>

            <ul class="feature-list">
                <li><?= ja_icon('drinks') ?><span>Cervejas, refrigerantes, drinks e destilados.</span></li>
                <li><?= ja_icon('cart') ?><span>Produtos de conveniência para resolver o dia.</span></li>
                <li><?= ja_icon('chat') ?><span>Contato rápido para consultar disponibilidade.</span></li>
            </ul>

            <a
                href="<?= e(whatsapp_link($config, 'pedido')) ?>"
                class="btn btn--gold<?= is_whatsapp_configured($config) ? '' : ' is-placeholder' ?>"
                target="_blank"
                rel="noopener noreferrer"
            >
                Consultar pelo WhatsApp
            </a>
        </div>
    </div>
</section>
