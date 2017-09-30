<?php get_template_part('templates/html','head'); ?>
  <div class="barra">
    <div class="container">     
      <div class="barra__contatos">
        <div class="barra__phone">
          <span class="icon-border icon-border--notMargin">
            <i class="fa fa-phone" aria-hidden="true"></i>
          </span>
          <div class="barra__number"><span>(85)</span> 3231-9689</div>
        </div>
        <div class="barra__phone barra__phone--azul">
          <a href="javascript:call2action('ligar');">
          <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
          <div class="barra__call">Nós <strong>ligamos</strong> para você</div>
        </a>
        </div>
      </div>
      <div class="barra__title-center">
        <div class="barra__texto">
          <i class=""></i>
          <span>Consórcio Nacional Chevrolet</span>
        </div>
      </div>
      <div class="barra__servicos">
        <div class="barra__servico-cliente barra__servico-cliente--hover">
          <a href="#" title="Serviço ao cliente">             
            <i class="fa fa-comments" aria-hidden="true"></i>
            <span>Serviço ao Cliente</span>
          </a>
        </div>
        <div class="barra__servico-midias"> 
          <a href="https://www.facebook.com/globoconsorcio" title="Facebook" class="icon-border">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="https://www.instagram.com/sigagloboconsorcio/" title="Instagram" class="icon-border">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="#" title="Youtube" class="icon-border">
            <i class="fa fa-youtube-play" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <header class="header">  
    <div class="header__menu-desktop">
      <div class="container">
        <a href="#home" class="header__brand">
          <h1 class="header__logo">
              logo
          </h1>
        </a>
        <a href="#menu" class="header__toggle"><span></span></a>

        <?php  wp_nav_menu( array(
          'theme_location'  => 'menu_1', 
          'menu_class'      => 'menu__nav ',
          'container_class' => 'header__menu'.$css.'')); ?>

        <div class="header__campo-busca">
          <div class="header__busca">
            <i class="fa fa-search" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main class="main">