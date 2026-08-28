<?php
/**
 * Configuração central do site JA Conveniência.
 *
 * Todos os componentes (header, hero, lanchonete, contato, footer, botão
 * flutuante de WhatsApp) leem os dados a partir daqui. Para atualizar um
 * número de telefone, endereço ou horário, altere apenas este arquivo.
 *
 * Campos marcados como PLACEHOLDER ainda não foram informados pelo cliente
 * e precisam ser preenchidos antes do site ir para produção.
 */

return [
    'business_name'   => 'JA Conveniência',
    'business_short'  => 'JA',
    'tagline'         => 'Bebidas, conveniência, lanchonete e eventos',
    'slogan'          => 'Tudo para o seu momento, do pedido rápido ao evento especial.',

    // Encontrado via Instagram/Facebook do negócio (@ja_conveniencia) — confirmar antes de publicar.
    'whatsapp_number' => '5541999934378',

    // Mensagens padrão enviadas ao clicar em cada CTA de WhatsApp.
    'whatsapp_messages' => [
        'default' => 'Olá! Vim pelo site da JA Conveniência e gostaria de saber mais.',
        'pedido'  => 'Olá! Vim pelo site e quero falar sobre bebidas, conveniência ou lanchonete.',
        'eventos' => 'Olá! Vim pelo site e gostaria de saber mais sobre a casa de eventos da JA.',
    ],

    // Encontrado via Instagram/Facebook do negócio — confirmar antes de publicar.
    'phone_display' => '(41) 99993-4378',

    'address' => [
        'street'  => 'Av. Luciana, 357',
        'city'    => 'Curitiba',
        'state'   => 'PR',
        'zip'     => '', // PLACEHOLDER: CEP não localizado nas fontes públicas consultadas
        'maps_embed_url' => 'https://www.google.com/maps?q=Av.+Luciana,+357+-+Jardim+Luciana,+Curitiba+-+PR&output=embed',
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
        'title'       => 'JA Conveniência | Bebidas, Conveniência, Lanchonete e Eventos',
        'description' => 'JA Conveniência: bebidas, conveniência, lanchonete, delivery e casa de eventos em Curitiba. Fale pelo WhatsApp.',
        // PLACEHOLDER: substituir por uma foto real do espaço/produtos quando disponível.
        'og_image'    => '/JaConveniencia/assets/img/hero-ja-conveniencia.jpg',
    ],
];
