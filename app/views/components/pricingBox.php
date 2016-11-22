<div class="pricing-box">
  <div class="pricing-box__header"><?= $data['title'] ?></div>
  <div class="pricing-box__price">$<?= $data['price'] ?> p/m</div>
  <div class="pricing-box__details"><?= $data['details'] ?></div>
  <div class="pricing-box__list">
    <ul>
      <?php foreach ($data['list'] as $value) : ?>
        <li><?= $value ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="pricing-box__link">
    <a href="./<?= $data['link'] ?>" class="btn btn-primary btn-block">Learn More</a>
  </div>
</div>
