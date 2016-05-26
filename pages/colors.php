<?php require('partials/head.php'); ?>

<main>
    <?php require('partials/nav.php'); ?>
    <article>
        
        <h1>Colors</h1>
        
        <section id="palette">
            <h2>Colors</h2>
            <p>Nullam quis risus eget urna mollis ornare vel eu leo.Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </p>
            <ul class="swatches">
                <li class="copyable">
                    <div class="swatch wnyc-red background"></div>
                    <ul>
                        <li>.wnyc-red</li>
                        <li id="wnyc_red_copy">#DE1E3D</li>
                        <li>rgba(222,30,61,1)</li>
                    </ul>
                    <button class="btn_copy" data-clipboard-target="#wnyc_red_copy">📋</button>
                </li>
                <li class="copyable">
                    <div class="swatch grey-blue background"></div>
                    <ul>
                        <li>.grey-blue</li>
                        <li id="grey_blue_copy">#201F27</li>
                        <li>rgba(32,31,39,1)</li>
                    </ul>
                    <button class="btn_copy" data-clipboard-target="#grey_blue_copy">📋</button>
                </li>
                <li class="copyable">
                    <div class="swatch light-blue background"></div>
                    <ul>
                        <li>.light-blue</li>
                        <li id="light_blue_copy">#627FDD</li>
                        <li>rgba(98,127,221,1)</li>
                    </ul>
                    <button class="btn_copy" data-clipboard-target="#light_blue_copy">📋</button>
                </li>
                <li class="copyable">
                    <div class="swatch light background"></div>
                    <ul>
                        <li>.light</li>
                        <li id="light_copy">#F1F1F1</li>
                        <li>rgba(241,241,241,1)</li>
                    </ul>
                    <button class="btn_copy" data-clipboard-target="#light_copy">📋</button>
                </li>
            </ul>
        </section>
        
        <section id="hover">
            <h2>Hover States</h2>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. </p>
        </section>
        
    </article>
</main>

<?php require('partials/foot.php'); ?>