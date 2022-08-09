<?php
class dovizKur{

public function __construct(){
  $data=file_get_contents("https://api.genelpara.com/embed/doviz.json");
  $this->data=json_decode($data);
  return $this->data;
}
}
$deneme=new dovizKur();
$d=$deneme->data;
$birim=$_GET['birim'];
?>

<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kur Goruntuleme</title>
  </head>
  <body>
  <ul>
    <a href="index.php?birim=USD"><li>USD</li><a/>
      <a href="index.php?birim=EUR"><li>EUR</li><a/>
        <a href="index.php?birim=GBP"><li>GBP</li><a/>
          <a href="index.php?birim=BTC"><li>BTC</li><a/>
            <a href="index.php?birim=ETH"><li>ETH</li><a/>
              <a href="index.php?birim=GA"><li>GA</li><a/>
                <a href="index.php?birim=GAG"><li>GAG</li><a/>
                  <a href="index.php?birim=XU100"><li>XU100</li><a/>

  </ul>
  <hr>
  <?php if (isset($_GET)):
    ?>
    <table>
      <thead>
    <th>Birim</th>
    <th>Satış</th>
    <th>Alış</th>
    <th>Değişim</th>
      </thead>
  <tbody>
    <td><?php echo $birim ?></td>
    <td><?php print_r($d->$birim->satis)?></td>
    <td><?php print_r($d->$birim->alis)?></td>
    <td><?php print_r($d->$birim->degisim)?></td>
  </tbody>
    </table>

  <?php endif; ?>
  </body>
</html>
