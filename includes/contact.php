<?php
$hasAddress = trim($config['address']['street'] ?? '') !== '';
$hasMap     = trim($config['address']['maps_embed_url'] ?? '') !== '';
$hasPhone   = trim($config['phone_display'] ?? '') !== '';
$hasInsta   = trim($config['instagram_handle'] ?? '') !== '';
?>
<section class="contact" id="contato">
    <div class="container contact__inner">
        <div class="section-heading reveal">
            <p class="eyebrow">Fale com a gente</p>
            <h2>Contato, localização e horários</h2>
            <p class="section-heading__lead">
                Chame no WhatsApp, veja onde estamos e acompanhe os horários de atendimento.
            </p>
        </div>

        <div class="contact__grid reveal">
            <ul class="contact__list">
                <li class="contact__item">
                    <span class="contact__icon"><?= ja_icon('chat') ?></span>
                    <div>
                        <h3>WhatsApp</h3>
                        <?php if (is_whatsapp_configured($config)): ?>
                            <a href="<?= e(whatsapp_link($config)) ?>" target="_blank" rel="noopener noreferrer">
                                Chamar no WhatsApp
                            </a>
                        <?php else: ?>
                            <p class="contact__placeholder">Número a definir</p>
                        <?php endif; ?>
                    </div>
                </li>

                <li class="contact__item">
                    <span class="contact__icon"><?= ja_icon('phone') ?></span>
                    <div>
                        <h3>Telefone</h3>
                        <p class="<?= $hasPhone ? '' : 'contact__placeholder' ?>">
                            <?= $hasPhone ? e($config['phone_display']) : 'A definir' ?>
                        </p>
                    </div>
                </li>

                <li class="contact__item">
                    <span class="contact__icon"><?= ja_icon('pin') ?></span>
                    <div>
                        <h3>Endereço</h3>
                        <?php if ($hasAddress): ?>
                            <p>
                                <?= e($config['address']['street']) ?><br>
                                <?= e($config['address']['city']) ?> - <?= e($config['address']['state']) ?>
                                <?= trim($config['address']['zip']) !== '' ? ', ' . e($config['address']['zip']) : '' ?>
                            </p>
                        <?php else: ?>
                            <p class="contact__placeholder">Endereço a definir</p>
                        <?php endif; ?>
                    </div>
                </li>

                <li class="contact__item">
                    <span class="contact__icon"><?= ja_icon('clock') ?></span>
                    <div>
                        <h3>Horário de funcionamento</h3>
                        <ul class="contact__hours">
                            <?php foreach ($config['hours'] as $hour): ?>
                                <li>
                                    <span><?= e($hour['label']) ?></span>
                                    <span class="<?= trim($hour['value']) === '' ? 'contact__placeholder' : '' ?>">
                                        <?= trim($hour['value']) !== '' ? e($hour['value']) : 'A definir' ?>
                                    </span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </li>

                <li class="contact__item">
                    <span class="contact__icon"><?= ja_icon('camera') ?></span>
                    <div>
                        <h3>Instagram</h3>
                        <?php if ($hasInsta): ?>
                            <a href="<?= e($config['instagram_url']) ?>" target="_blank" rel="noopener noreferrer">
                                @<?= e($config['instagram_handle']) ?>
                            </a>
                        <?php else: ?>
                            <p class="contact__placeholder">Perfil a definir</p>
                        <?php endif; ?>
                    </div>
                </li>
            </ul>

            <div class="contact__map">
                <?php if ($hasMap): ?>
                    <iframe
                        src="<?= e($config['address']['maps_embed_url']) ?>"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Localização da <?= e($config['business_name']) ?>"
                    ></iframe>
                <?php else: ?>
                    <div class="contact__map-placeholder">
                        <span><?= ja_icon('map') ?></span>
                        <p>Mapa a definir</p>
                        <small>Adicione a URL de incorporação do Google Maps em <code>config.php</code>.</small>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
