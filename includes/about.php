<section class="about" id="sobre">
    <div class="container about__inner">
        <div class="section-heading reveal">
            <p class="eyebrow">Sobre a JA</p>
            <h2>Uma conveniência pensada para o dia, a noite e a comemoração.</h2>
            <p class="section-heading__lead">
                A JA Conveniência une atendimento rápido, mix comercial completo e um ambiente
                preparado para receber clientes que querem praticidade sem abrir mão de uma
                experiência moderna.
            </p>
        </div>

        <div class="about__grid">
            <div class="about__media reveal">
                <img src="assets/img/logo.webp" alt="Logotipo da JA Conveniência" loading="lazy" decoding="async">
            </div>
            <div class="about__content reveal">
                <p>
                    Nesta primeira fase, o site apresenta a empresa de forma institucional e
                    comercial. A estrutura já nasce preparada para evoluir com agenda de eventos,
                    loja virtual, delivery e gestão, mantendo componentes separados por área.
                </p>
                <a
                    href="<?= e(whatsapp_link($config)) ?>"
                    class="btn btn--dark<?= is_whatsapp_configured($config) ? '' : ' is-placeholder' ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Falar com a JA
                </a>
            </div>
        </div>

        <ul class="about__features">
            <li class="about__item reveal">
                <span class="about__icon"><?= ja_icon('variety') ?></span>
                <h3>Mix completo</h3>
                <p>Bebidas, conveniência, lanches e serviços reunidos no mesmo lugar.</p>
            </li>
            <li class="about__item reveal">
                <span class="about__icon"><?= ja_icon('ease') ?></span>
                <h3>Atendimento rápido</h3>
                <p>Caminho curto entre escolher, pedir, retirar ou receber.</p>
            </li>
            <li class="about__item reveal">
                <span class="about__icon"><?= ja_icon('party') ?></span>
                <h3>Ambiente versátil</h3>
                <p>Base pronta para divulgar experiências, eventos e novidades da casa.</p>
            </li>
        </ul>
    </div>
</section>
