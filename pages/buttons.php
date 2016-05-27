<?php require('partials/head.php'); ?>

<main>
    <?php require('partials/nav.php'); ?>
    <article>
        
        <h1>Buttons &amp; Inputs</h1>
        
        <section id="buttons">
            <h2>Buttons</h2>
            <p>Here’s a button.</p>
            <button>Yup, I’m a button</button>
            <div class="copyable">
                <pre><code class="copy_content" id="button_code">box-sizing:border-box;
padding:10px 12px;
-webkit-appearance:none;
border-radius:6px;
box-shadow:0px 2px 4px rgba(0,0,0,0.2);
border:1px solid #e9e9e9;
background-color:#F4F4F4;
font-size:0.9em;</code></pre>
                <button class="btn_copy" data-clipboard-target="#button_code">📋</button>
            </div>

        </section>
        
        <section id="another_section_slug">
            <h2>Second Section Here</h2>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        </section>
        
    </article>
</main>

<?php require('partials/foot.php'); ?>