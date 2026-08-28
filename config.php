<?php
/**
 * Configuração central do site J&A Conveniência.
 *
 * Todos os componentes (header, hero, lanchonete, contato, footer, botão
 * flutuante de WhatsApp) leem os dados a partir daqui. Para atualizar um
 * número de telefone, endereço ou horário, altere apenas este arquivo.
 *
 * Campos marcados como PLACEHOLDER ainda não foram informados pelo cliente
 * e precisam ser preenchidos antes do site ir para produção.
 */

return [
    'business_name'   => 'J&A Conveniência',
    'business_short'  => 'J&A',
    'tagline'         => 'Bebidas, conveniência, lanchonete e eventos',
    'slogan'          => 'Tudo para o seu momento, do pedido rápido ao evento especial.',

    'whatsapp_number' => '5541995209684',

    // Mensagens padrão enviadas ao clicar em cada CTA de WhatsApp.
    'whatsapp_messages' => [
        'default' => 'Olá! Vim pelo site da J&A Conveniência e gostaria de saber mais.',
        'pedido'  => 'Olá! Vim pelo site e quero falar sobre bebidas, conveniência ou lanchonete.',
        'eventos' => 'Olá! Vim pelo site e gostaria de saber mais sobre a casa de eventos da J&A.',
    ],

    'phone_display' => '(41) 99520-9684',

    'address' => [
        'street'  => 'Rua Enette Dubard, 229 - Tatuquara',
        'city'    => 'Curitiba',
        'state'   => 'PR',
        'zip'     => '81470-075',
        'maps_embed_url' => 'https://www.google.com/maps?q=J%26a+conveni%C3%AAncia+e+bebidas,+Rua+Enette+Dubard,+229+-+Tatuquara,+Curitiba+-+PR,+81470-075&output=embed',
    ],

    // PLACEHOLDER: horário real de funcionamento.
    'hours' => [
        ['label' => 'Segunda a Quinta', 'value' => ''],
        ['label' => 'Sexta e Sábado',   'value' => ''],
        ['label' => 'Domingo',          'value' => ''],
    ],

    'instagram_handle' => 'ja_conveniencia',
    'instagram_url'    => 'https://www.instagram.com/ja_conveniencia/',

    'seo' => [
        'title'       => 'J&A Conveniência | Bebidas, Conveniência, Lanchonete e Eventos',
        'description' => 'J&A Conveniência: bebidas, conveniência, lanchonete, delivery e casa de eventos em Curitiba. Fale pelo WhatsApp.',
        // PLACEHOLDER: substituir por uma foto real do espaço/produtos quando disponível.
        'og_image'    => '/JaConveniencia/assets/img/hero-ja-conveniencia.jpg',
    ],
];
