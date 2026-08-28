<?php
/**
 * Prévia da Casa de Eventos.
 *
 * Fase 1: lista estática vazia exibida como "Em breve".
 * Fase futura: substituir $upcomingEvents por uma consulta ao sistema de
 * gestão mantendo o mesmo formato de item abaixo.
 */
$upcomingEvents = [
    // [
    //     'slug'  => 'noite-de-drinks',
    //     'title' => 'Noite de Drinks',
    //     'date'  => '2026-09-12',
    //     'desc'  => 'Uma noite especial com drinks autorais.',
    // ],
];
?>
<section class="events" id="eventos">
    <div class="container events__inner">
        <div class="events__intro reveal">
            <p class="eyebrow">Casa de eventos</p>
            <h2>Um espaço para encontros, comemorações e experiências da J&A.</h2>
            <p>
                A agenda ainda não está ativa, mas a estrutura da seção já está preparada
                para receber eventos, datas, páginas de detalhe e chamadas comerciais.
            </p>
            <a
                href="<?= e(whatsapp_link($config, 'eventos')) ?>"
                class="btn btn--gold<?= is_whatsapp_configured($config) ? '' : ' is-placeholder' ?>"
                target="_blank"
                rel="noopener noreferrer"
            >
                Falar sobre eventos
            </a>
        </div>

        <div class="events__panel reveal">
            <h3 class="events__panel-title">Próximos Eventos</h3>

            <?php if (empty($upcomingEvents)): ?>
                <div class="events__empty">
                    <span class="events__empty-icon"><?= ja_icon('party') ?></span>
                    <p>Em breve</p>
                    <small>Acompanhe a J&A para novidades da programação.</small>
                </div>
            <?php else: ?>
                <ul class="events__list">
                    <?php foreach ($upcomingEvents as $event): ?>
                        <li class="events__list-item">
                            <span class="events__list-date">
                                <?= e(date('d/m', strtotime($event['date']))) ?>
                            </span>
                            <div>
                                <h4><?= e($event['title']) ?></h4>
                                <p><?= e($event['desc']) ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>
