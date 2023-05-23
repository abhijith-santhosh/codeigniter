<h1>List of Car Models</h1>
<ul>
  <?php foreach ($carModels as $carModel): ?>
    <li>
      <a href="<?= site_url('insurance/insuranceAmount/' . $carModel['id']) ?>"><?= $carModel['name'] ?></a>
    </li>
  <?php endforeach; ?>
</ul>
