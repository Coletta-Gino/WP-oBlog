<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oBlog - Un simple blog</title>
  <link rel="stylesheet" href="content/themes/oblog/public/css/style.css" />

  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="header__content">
        <div class="logo">
          <a href="" class="logo__text">oBlog</a>
          <div class="logo__baseline">Un simple blog</div>
        </div>
        <nav class="main-nav">
          <ul>
            <li>
              <a href="">Catégories</a>
            </li>
            <li>
              <a href="">A propos</a>
            </li>
            <li>
              <a href="">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="header__tools">
        <div class="search">
          <form action="" class="search__form">
            <label for="search" class="search__form__label">
              <i class="fa fa-search" aria-hidden="true"></i>
            </label>
            <input type="search" name="search" class="search__form__field" placeholder="Rechercher">
          </form>
        </div>
        <a href="" class="action-button">
          S'abonner
        </a>
      </div>
    </header>
    <main class="main">