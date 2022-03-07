@props(['label','icon','link'])
    <?php 
    
    $path = trim(str_replace(url('/')'',$link)'/');
    $wildchar = route('dashboard') == url()->current() ?'' : '*';
    $is = request()->is($path.$wildchar);  
    ?>
     <li class="nav-item">
      <a href="<?= $link ?>" class="nav-link">
          <i class="nav-icon {{ $icon }}"></i>
          <p>{{ $label }}</p>
       </a>
    </li>