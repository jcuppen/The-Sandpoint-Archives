<div class="table-responsive">
  <table class="table">
    <tr>
      <th>Name</th>
    </tr>
    <?php foreach ($items as $component) { ?>
      <tr>
        <td>
          <a href=<?php echo site_url($component['class_uri'].'/'.$component['id']); ?>>
            <?php echo $component['name']; ?>
          </a>
        </td>
      </tr>
    <?php } ?>
  </table>
</div>