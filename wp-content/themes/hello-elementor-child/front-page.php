<?php
/* Template for Home Page */
get_header();
?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/home.css">

<main class="home">

    <!-- HERO -->
    <section class="hero">
        <div class="hero-content">
            <h1>Protégez-vous contre les arnaques photovoltaïques</h1>
            <p>Nous aidons gratuitement les victimes de sociétés frauduleuses dans le domaine du solaire.</p>
            <a href="/contact/" class="cta">Signaler un problème</a>
        </div>
        <div class="hero-bg"></div>
    </section>

    <!-- STATS -->
    <section class="stats">
        <div class="stat-card">
            <h2>+500</h2>
            <p>Dossiers traités</p>
        </div>

        <div class="stat-card">
            <h2>95%</h2>
            <p>Cas résolus</p>
        </div>

        <div class="stat-card">
            <h2>100%</h2>
            <p>Accompagnement gratuit</p>
        </div>
    </section>

    <!-- A PROPOS -->
    <section class="about">
        <div class="about-text">
            <h2>Qui sommes-nous ?</h2>
            <p>
                Nous accompagnons les victimes du photovoltaïque grâce à une équipe engagée et un réseau 
                de partenaires fiables. Notre rôle : vous informer, vous défendre et faire respecter vos droits.
            </p>
            <a href="/qui-sommes-nous/" class="btn">En savoir plus</a>
        </div>
        <div class="about-img"></div>
    </section>

    <!-- SERVICES -->
    <section class="services">
        <h2>Nos accompagnements</h2>

        <div class="service-grid">

            <div class="service-card">
                <h3>Analyse de votre dossier</h3>
                <p>Nous étudions vos documents pour détecter les irrégularités.</p>
            </div>

            <div class="service-card">
                <h3>Aide juridique</h3>
                <p>Nous collaborons avec des experts pour vous orienter.</p>
            </div>

            <div class="service-card">
                <h3>Suivi personnalisé</h3>
                <p>Nous restons à vos côtés jusqu'à la résolution du problème.</p>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
