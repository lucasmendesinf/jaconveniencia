<?php
/**
 * Conjunto de ícones de linha (SVG inline) usado em todo o site, no lugar
 * de emojis, para um acabamento mais consistente com a identidade da logo.
 */
function ja_icon(string $name): string
{
    $paths = [
        'hookah' => '<circle cx="24" cy="14" r="6"/><path d="M24 20v6"/><ellipse cx="24" cy="30" rx="10" ry="4"/><path d="M14 30c-3 3-3 7 0 10"/><path d="M34 30v10"/>',
        'drinks' => '<path d="M14 8h10l-2 12a3 3 0 0 1-6 0Z"/><path d="M19 20v10"/><path d="M13 30h12"/><path d="M31 14l6 6-6 6"/><path d="M31 26h10"/>',
        'sofa' => '<path d="M10 26v6a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2v-6"/><path d="M8 22a4 4 0 0 1 4-4h2v8h-6Z"/><path d="M34 18h2a4 4 0 0 1 4 4v6h-6Z"/><rect x="14" y="14" width="20" height="12" rx="3"/>',
        'music' => '<circle cx="16" cy="34" r="4"/><circle cx="32" cy="30" r="4"/><path d="M20 34V12l16-4v22"/>',
        'wifi' => '<path d="M10 20a20 20 0 0 1 28 0"/><path d="M16 26a12 12 0 0 1 16 0"/><path d="M22 32a4 4 0 0 1 4 0"/><circle cx="24" cy="36" r="1.6" fill="currentColor" stroke="none"/>',
        'cart' => '<circle cx="18" cy="38" r="2.4"/><circle cx="32" cy="38" r="2.4"/><path d="M8 8h4l4 22h20l4-16H16"/>',
        'burger' => '<path d="M8 18c0-5 7-8 16-8s16 3 16 8"/><path d="M8 24h32"/><path d="M9 30h30"/><path d="M12 36c0 1.5 1.5 2 2.5 2h19c1 0 2.5-.5 2.5-2"/>',
        'scooter' => '<circle cx="12" cy="34" r="4"/><circle cx="34" cy="34" r="4"/><path d="M12 34h10l6-14h6"/><path d="M22 20h8"/><path d="M30 14h5"/>',
        'party' => '<path d="M10 38 26 10l4 4-24 24Z"/><path d="M30 10l2 4 4 2-4 2-2 4-2-4-4-2 4-2Z"/><circle cx="14" cy="16" r="1.6" fill="currentColor" stroke="none"/><circle cx="34" cy="24" r="1.6" fill="currentColor" stroke="none"/>',
        'chat' => '<path d="M8 12h32v20H20l-8 6v-6H8Z"/>',
        'phone' => '<path d="M14 8h6l3 8-4 3a18 18 0 0 0 10 10l3-4 8 3v6a3 3 0 0 1-3 3C22 37 11 26 11 11a3 3 0 0 1 3-3Z"/>',
        'pin' => '<path d="M24 4c-7 0-13 5.5-13 13 0 10 13 27 13 27s13-17 13-27c0-7.5-6-13-13-13Z"/><circle cx="24" cy="17" r="5"/>',
        'clock' => '<circle cx="24" cy="24" r="16"/><path d="M24 15v9l7 4"/>',
        'camera' => '<rect x="6" y="14" width="36" height="24" rx="4"/><path d="M17 14l3-5h8l3 5"/><circle cx="24" cy="26" r="7"/>',
        'map' => '<path d="M16 10 6 14v24l10-4 12 4 10-4V10l-10 4-12-4Z"/><path d="M16 10v24"/><path d="M28 14v24"/>',
        'variety' => '<path d="M24 6l5 12 13 2-10 9 3 13-11-7-11 7 3-13-10-9 13-2Z"/>',
        'ease' => '<path d="M24 4v6"/><path d="M24 38v6"/><path d="M9 12l4 4"/><path d="M35 32l4 4"/><path d="M4 24h6"/><path d="M38 24h6"/><path d="M9 36l4-4"/><path d="M35 16l4-4"/><circle cx="24" cy="24" r="8"/>',
        'handshake' => '<path d="M6 22l8-8 8 6 8-6 8 8"/><path d="M14 20l8 10 8-10"/><path d="M6 22v6l6 6"/><path d="M42 22v6l-6 6"/>',
    ];

    if (!isset($paths[$name])) {
        return '';
    }

    return '<svg class="icon icon--' . $name . '" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths[$name] . '</svg>';
}
