<?php
$title = 'results';

// postで受け取った値を配列にする
$owner = [
  'name' => $_POST['name'],
  'address' => $_POST['address']
];

// バリデーション処理を関数にする
function validate($owner)
{
  $errors = [];
  if (!strlen($owner['name'])) {
    $errors['name'] = 'オーナー名を入力してください';
  } elseif (strlen($owner['name']) > 30) {
    $errors['name'] = 'オーナー名は30文字以内で入力してください';
  }
  if (!strlen($owner['address'])) {
    $errors['address'] = '住所を入力してください';
  } elseif (strlen($owner['address']) > 30) {
    $errors['address'] = '住所は30文字以内で入力してください';
  }
  return $errors;
}

// バリデーション処理を実行
$errors = validate($owner);

?>

<?php if (count($errors)) : ?>
  <ul class="list-group">
    <?php foreach ($errors as $error) : ?>
      <li class="text-danger list-group-item-danger""><?php echo $error; ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>

<h1 class=" h2 mt-4 mb-4"><a class="text-body text-decoration-none" href="index.php">職場検索フォーム</a></h1>

        <?php if (isset($_POST['j-global_site'])) : ?>
          <!-- j-globalのサイト内検索 -->
          <form name="j_global" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　site:https://jglobal.jst.go.jp/" class="form-control">
            <SCRIPT language="JavaScript">
              document.j_global.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (isset($_POST['astamuse_site'])) : ?>
          <!-- astamuseのサイト内検索 -->
          <form name="astamuse" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　site:https://astamuse.com/" class="form-control">
            <SCRIPT language="JavaScript">
              document.astamuse.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (isset($_POST['jsdf_site'])) : ?>
          <!-- 防衛省のサイト内検索 -->
          <form name="jsdf_site" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　site:https://www.mod.go.jp/" class="form-control">
            <SCRIPT language="JavaScript">
              document.jsdf_site.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (isset($_POST['nikkei_site'])) : ?>
          <!-- 日経人事ウォッチのサイト内検索 -->
          <form name="nikkei" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　site:https://www.nikkei.com/" class="form-control">
            <SCRIPT language="JavaScript">
              document.nikkei.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (isset($_POST['teacher_site'])) : ?>
          <!-- 教職員人事異動サイト内検索 -->
          <form name="teacher_site" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　site:https://senseijinji.jp/" class="form-control">
            <SCRIPT language="JavaScript">
              document.teacher_site.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (isset($_POST['kazen_site'])) : ?>
          <!-- KAKEN（大学教授や研究者）のサイト内検索 -->
          <form name="kaken" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　site:https://nrid.nii.ac.jp/" class="form-control">
            <SCRIPT language="JavaScript">
              document.kaken.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (isset($_POST['eight'])) : ?>
          <!-- Eightのサイト内検索 -->
          <form name="eight" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　site:https://8card.net/" class="form-control">
            <SCRIPT language="JavaScript">
              document.eight.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (strlen($owner['address'])) : ?>
          <!-- 住所で検索 -->
          <form name="address" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　<?php echo $owner['address']; ?>" class="form-control">
            <SCRIPT language="JavaScript">
              document.address.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (isset($_POST['public_officer'])) : ?>
          <!-- 公務員で検索 -->
          <form name="public_officer" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　公務員" class="form-control">
            <SCRIPT language="JavaScript">
              document.public_officer.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (isset($_POST['pdf'])) : ?>
          <!-- PDFで検索 -->
          <form name="pdf" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　PDF" class="form-control">
            <SCRIPT language="JavaScript">
              document.pdf.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (isset($_POST['move'])) : ?>
          <!-- 異動で検索 -->
          <form name="move" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　異動" class="form-control">
            <SCRIPT language="JavaScript">
              document.move.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (isset($_POST['teacher'])) : ?>
          <!-- 教員で検索 -->
          <form name="teacher" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　教員" class="form-control">
            <SCRIPT language="JavaScript">
              document.teacher.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (isset($_POST['jsdf'])) : ?>
          <!-- 自衛隊で検索 -->
          <form name="jsdf" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　自衛隊" class="form-control">
            <SCRIPT language="JavaScript">
              document.jsdf.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (isset($_POST['medicine'])) : ?>
          <!-- 薬で検索 -->
          <form name="medicine" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　薬" class="form-control">
            <SCRIPT language="JavaScript">
              document.medicine.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (isset($_POST['insurance'])) : ?>
          <!-- 保険で検索 -->
          <form name="insurance" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　保険" class="form-control">
            <SCRIPT language="JavaScript">
              document.insurance.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>

        <?php if (isset($_POST['stock'])) : ?>
          <!-- 証券で検索 -->
          <form name="stock" method="get" action="https://www.google.co.jp/search" target="_blank" class="form-group">
            <input type="text" name="q" size="31" maxlength="255" value="<?php echo $owner['name']; ?>　証券" class="form-control">
            <SCRIPT language="JavaScript">
              document.stock.submit();
            </SCRIPT>
          </form>
        <?php endif; ?>


        <br>
        <form>
          <input type="button" onclick="history.back()" value="戻る" class="btn btn-primary">
        </form>


        <?php
        include('layout.php');
        ?>