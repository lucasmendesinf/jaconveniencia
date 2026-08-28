<?php
/**
 * Cards de Produtos e Serviços.
 *
 * Fase 1: apresentação institucional, sem links de catálogo/e-commerce.
 * Fase futura (loja virtual): os slugs abaixo podem virar rotas reais como
 * /loja?categoria=bebidas sem reestruturar o componente.
 */
$services = [
    [
        'slug'  => 'bebidas',
        'icon'  => 'drinks',
        'title' => 'Bebidas',
        'desc'  => 'Cervejas, refrigerantes, drinks e destilados para diferentes momentos.',
    ],
    [
        'slug'  => 'conveniencia',
        'icon'  => 'cart',
        'title' => 'Conveniência',
        'desc'  => 'Itens rápidos para resolver a rotina com praticidade.',
    ],
    [
        'slug'  => 'lanchonete',
        'icon'  => 'burger',
        'title' => 'Lanchonete',
        'desc'  => 'Lanches e porções para consumir no local, retirar ou pedir.',
    ],
    [
        'slug'  => 'delivery',
        'icon'  => 'scooter',
        'title' => 'Delivery',
        'desc'  => 'Atendimento pelo WhatsApp preparado para evoluir para delivery integrado.',
    ],
    [
        'slug'  => 'eventos',
        'icon'  => 'party',
        'title' => 'Casa de Eventos',
        'desc'  => 'Espaço para encontros, comemorações e próximas experiências da JA.',
    ],
    [
        'slug'  => 'loja-futura',
        'icon'  => 'map',
        'title' => 'Loja futura',
        'desc'  => 'Arquitetura preparada para catálogo, pedidos online e gestão.',
    ],
];
?>
<section class="services" id="servicos" data-future-route="loja">
    <div class="container">
        <div class="section-heading section-heading--split reveal">
            <p class="eyebrow">Produtos e serviços</p>
            <h2>Tudo o que a JA oferece em uma experiência direta e moderna.</h2>
            <p class="section-heading__lead">
                Um ecossistema comercial pronto para crescer: vitrine institucional hoje,
                catálogo, loja, delivery e gestão nas próximas etapas.
            </p>
        </div>

        <ul class="services__grid">
            <?php foreach ($services as $service): ?>
                <li class="service-card reveal" data-service="<?= e($service['slug']) ?>">
                    <span class="service-card__icon"><?= ja_icon($service['icon']) ?></span>
                    <h3 class="service-card__title"><?= e($service['title']) ?></h3>
                    <p class="service-card__desc"><?= e($service['desc']) ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
