<?php Response::setMetaDescription(__('LBRY Welcomes WomenTechies 2019')) ?>
<?php Response::setMetaTitle(__('LBRY Welcomes WomenTechies Hackathon Participants')) ?>

<main class="ancillary">
  <section class="hero" style="background-image: url(/img/clement-vit.jpg)">
    <div class="inner-wrap inner-wrap--center-hero">
      <h1>LBRY Welcomes WomenTechies Hackathon Participants</h1>
      <h3>We're excited to meet the next generation of problem solvers!</h3>
    </div>
  </section>

  <section>
    <div class="inner-wrap">
      <h3>Enter your email address to receive LBRY updates, news, and information for India's LBRYians!</h3>

      <p>LBRY is proud to be a part of WomenTechies Hackathon, and we're excited to work with VIT's Developer Student Clubs. As an open source project, our development and future relies on our communities around the world, and we're delighted to see our community growing in India. Please enter your email below and we'll give you instructions to redeem the LBC as mentioned by our team.</p>

      <?php echo View::render('mail/_subscribeForm', [
        'tag' => 'vit',
        'submitLabel' => 'Sign me up',
        'hideDisclaimer' => true,
        'largeInput' => true,
        'btnClass' => 'btn-alt btn-large'
      ]) ?>
    </div>
  </section>
</main>
