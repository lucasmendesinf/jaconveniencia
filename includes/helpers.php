<?php
/**
 * Funções auxiliares compartilhadas pelos componentes.
 * Centralizar aqui evita repetir o número de WhatsApp ou lógica de link
 * em múltiplos arquivos.
 */

if (!function_exists('whatsapp_link')) {
    /**
     * Monta o link wa.me a partir do config central.
     * Se o número ainda não foi cadastrado, retorna '#' para evitar um
     * link quebrado em produção — os botões recebem a classe
     * "is-placeholder" para sinalizar isso visualmente em desenvolvimento.
     */
    function whatsapp_link(array $config, string $messageKey = 'default'): string
    {
        $number = trim($config['whatsapp_number'] ?? '');
        if ($number === '') {
            return '#';
        }

        $message = $config['whatsapp_messages'][$messageKey]
            ?? $config['whatsapp_messages']['default']
            ?? '';

        return 'https://wa.me/' . $number . '?text=' . rawurlencode($message);
    }
}

if (!function_exists('is_whatsapp_configured')) {
    function is_whatsapp_configured(array $config): bool
    {
        return trim($config['whatsapp_number'] ?? '') !== '';
    }
}

if (!function_exists('e')) {
    function e(?string $value): string
    {
        return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
    }
}
