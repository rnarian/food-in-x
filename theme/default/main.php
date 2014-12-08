<!doctype html>
<html lang=en>
  <head>
    <?php include 'theme/' . $config['theme'] . '/_partials/head.php'; ?>
  </head>
  <body>
    <div id="fix">
      <span class="left">
        <?= sizeof(get_venues()); ?> places to pick up good food in Würzburg.
      </span>
      <span class="right">
        <span>By <?= $config['author_link']; ?>. Code available on <a target="_blank" href="https://github.com/janoelze/food-in-x">GitHub</a>.</span>
      </span>
    </div>
    <div id="head" class="dim">
      <h1><?= $config['site_title']; ?></h1>

      <form class="filter" methode="get" action="index.php">
        <label>Type:
        <select name="type">
          <option value="">-</option>
          <?php foreach(get_option('type') as $option): ?>
            <option <?php if($_GET['type'] == $option){echo 'selected ';} ?>value="<?php echo $option; ?>"><?php echo $option; ?></option>
          <?php endforeach; ?>
        </select></label>
        <label>Price:
        <select name="price">
          <option value="">-</option>
          <?php foreach(get_option('price') as $option): ?>
            <option <?php if($_GET['price'] == $option){echo 'selected ';} ?>value="<?php echo $option; ?>">
              <?php for($i = 0; $i < $option; $i++) {
                echo '$';
              } ?>
            </option>
          <?php endforeach; ?>
        </select></label>
        <label>Occasion:
        <select name="best_for">
          <option value="">-</option>
          <?php foreach(get_option('best_for') as $option): ?>
            <option <?php if($_GET['best_for'] == $option){echo 'selected ';} ?>value="<?php echo $option; ?>"><?php echo $option; ?></option>
          <?php endforeach; ?>
        </select></label>
        <input type="submit">
      </form>

    </div>
    <div id="venues">
      <?php foreach (get_venues() as $venue) { ?>
        <div id="<?= slugify($venue['name']); ?>" class="venue">
          <div class="inner">
            <h2>
              <?php if(!empty($venue['url'])){ ?>
                <a target="_blank" href="<?= $venue['url'] ?>">
                  <?= $venue['name'] ?>
                </a>
              <?php }else{ ?>
                <?= $venue['name'] ?>
              <?php } ?>
            </h2>
            <blockquote>
              <?php if(!empty($venue['url'])){ ?>
                <?= $venue['description'] ?>
              <?php }else{ ?>
                <span class="big">／</span>
              <?php } ?>
            </blockquote>
            <div class="meta">
              <div class="divide"><?php print $venue['best_for']; ?></div>
              <div class="divide"><?php print $venue['type']; ?></div>
              <div class="divide"><?php print str_repeat('$', $venue['price']); print str_repeat('<span class="dim_dollar">$</span>', $config['max_dollar_signs'] - $venue['price']); ?></div>
              <a class="divide" target="_blank" href="http://maps.google.com/?q=<?= urlencode($venue['address']); ?>"><?php print $venue['address']; ?></a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <?php include 'theme/' . $config['theme'] . '/_partials/footer.php'; ?>
  </body>
</html>
