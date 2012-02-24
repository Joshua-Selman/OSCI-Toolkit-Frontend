<?php echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n"; ?>
<package version="3.0" unique-identifier="publication-id" xmlns="http://www.idpf.org/2007/opf" xml:lang="en">
  <metadata xmlns:dc="http://purl.org/dc/elements/1.1/">
	<?php foreach ($metadata as $key => $value): ?>
		<?= $value ?>
    <?php endforeach ?>
    <dc:language><?= $language ?></dc:language>
  </metadata>
  <manifest>
    <?php foreach ($manifest as $item): ?>
      <?php $properties = isset($item['properties']) ? "properties='{$item['properties']}'" : ''; ?>
	  <item id="<?= $item['id'] ?>" href="<?= $item['href'] ?>" 
	        media-type="<?= $item['media-type'] ?>" <?= $properties ?> ></item>
    <?php endforeach ?>
  </manifest>
  <spine>
    <?php foreach ($spine as $itemref): ?>
      <itemref idref='<?= $itemref['idref'] ?>'></itemref>
    <?php endforeach ?>
  </spine>
</package>