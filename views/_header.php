<header>
    <nav class="navbar">
            <a class="navbar-brand" href="https://thevirtualassistants.co/" target="blank"><img src=
            <?php 
                if (isset($index)) {
                   echo '"resources/logofullnegro.png"';
                } elseif ((isset($view) ? $view : 'null') == 'choose') {
                    echo '"../resources/logofullblanco.png"';
                }else {
                    echo '"../resources/logofullnegro.png"';
                }
             ?>   
             id="logo" class="d-none d-sm-block" alt="tvac logo" /></a>
            <a class="navbar-brand" href="https://thevirtualassistants.co/" target="blank"><img src=
            <?php 
                if (isset($index)) {
                   echo '"resources/logonegro.png"';
                } elseif ((isset($view) ? $view : 'null') == 'choose') {
                    echo '"../resources/logoblanco.png"';
                }else {
                    echo '"../resources/logonegro.png"';
                }
             ?> 
            id="logo" class="d-sm-none img-responsive" alt="tvac logo" /></a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php echo ( isset($index) ) ? '<a class="nav-link" href="'.BASE_URL.'pages/choose.php">Apply</a>' : '<a class="nav-link" href="'. BASE_URL.'/index.php">Back</a>'?>
                </li>
            </ul>
        </nav>
</header>