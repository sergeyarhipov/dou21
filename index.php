<?php //Проверка не обращаются ли напрямую
defined('_JEXEC') or die;
JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
?>

<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html>

<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >

<head>
<jdoc:include type="head" />


<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="../<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="../<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/normalize.css" type="text/css" />

<link href="https://fonts.googleapis.com/css?family=Cuprum:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic" rel="stylesheet">

<link rel="icon" href="/templates/likom25/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/templates/likom25/favicon.ico" type="image/x-icon" />
</head>

<body>

  <header>
    <div class="container clearfix">
      <?php if($this->countModules('menu-information')): ?>
        <nav class="menu-information">
          <jdoc:include type="modules" name="menu-information" />
        </nav>
      <?php endif; ?>

      <div class="site-logo">
        <a class="organization-name" href ="#">Муниципальное автономное дошкольное образовательное учреждение "Детский сад №21"</a>
        <a class="logo-link" href ="#"><img src="templates/dou-21/images/logo.png" alt='МБДОУ "Детский сад № 21"' width="418px" height="364px" /></a>
      </div>

      <div class="site-version">
        <a class="version-limited" href="/?template=accessibility">Версия сайта<br>для слабовидящих</a>
      </div>
    </div>
  </header>

  <div class="main-navigation">
    <div class="container clearfix">
      <?php if($this->countModules('horizontal-menu1')): ?>
        <nav class="horizontal-menu1">
          <jdoc:include type="modules" name="horizontal-menu1" />
        </nav>
      <?php endif; ?>

      <?php if($this->countModules('horizontal-menu2')): ?>
        <nav class="horizontal-menu2">
          <jdoc:include type="modules" name="horizontal-menu2" />
        </nav>
      <?php endif; ?>
    </div>
  </div>

  <div class="container">
    <?php if($this->countModules('news-string')): ?>
      <div class="news-string">
        <jdoc:include type="modules" name="news-string" />
      </div>
    <?php endif; ?>
  </div>

  <main class="page clearfix">
    <div class="left-bar">
      <?php if($this->countModules('vertical-menu')): ?>
        <nav class="vertical-menu">
          <h3>Главное меню</h3>
          <jdoc:include type="modules" name="vertical-menu" />
        </nav>
      <?php endif; ?>

      <?php if($this->countModules('find-mod')): ?>
        <div class="find-mod">
          <h3>Поиск по сайту</h3>
          <jdoc:include type="modules" name="find-mod" />
        </div>
      <?php endif; ?>

      <?php if($this->countModules('left-bar-mod1')): ?>
        <div class="left-bar-mod1">
          <jdoc:include type="modules" name="left-bar-mod1" />
        </div>
      <?php endif; ?>

      <?php if($this->countModules('left-bar-mod2')): ?>
        <div class="left-bar-mod2">
          <jdoc:include type="modules" name="left-bar-mod2" />
        </div>
      <?php endif; ?>

      <?php if($this->countModules('left-bar-mod3')): ?>
        <div class="left-bar-mod3">
          <jdoc:include type="modules" name="left-bar-mod3" />
        </div>
      <?php endif; ?>
    </div>

    <div class="content" <?php $contentwidth; ?>>
      <jdoc:include type="message" />
      <jdoc:include type="component" style="xhtml" />
    </div>
  </main>

  <footer class="main-footer">
    <div class="container clearfix">
      <?php if($this->countModules('organization-contacts')): ?>
        <div class="organization-contacts">
          <jdoc:include type="modules" name="organization-contacts" />
        </div>
      <?php endif; ?>

      <?php if($this->countModules('copyright')): ?>
        <div class="copyright">
          <jdoc:include type="modules" name="copyright" />
        </div>
      <?php endif; ?>
    </div>
  </footer>
</body>
</html>
