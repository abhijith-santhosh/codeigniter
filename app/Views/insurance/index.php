
<h1>List of Insurance Companies</h1>
<ul>
  <?php foreach ($companies as $company): ?>
    <li>
      <a href="<?= site_url('insurance/carModels/' . $company['id']) ?>"><?= $company['name'] ?></a>
    </li>
  <?php endforeach; ?>
</ul>

