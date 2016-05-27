<?php require('partials/head.php'); ?>

<main>
    <?php require('partials/nav.php'); ?>
    <article>
        
        <h1>Text</h1>
        
        <section id="fonts">
            <h2>Fonts</h2>
            <p>Open Sans is the primary font used throughout the WNYC.org website and apps. We’ve chosen this font because it was designed as a sophisticated yet neutral font, optimized specifically for high legibility, and quick load times, across print, web, and small mobile screens. It is also elegant and stylized to fit well with flat design, while still being open-source and easily-available to contractors and collaborators. We primarily use regular, semibold, and bold weights. Italic is also occasionally used.</p>
            <p>In the past we’ve used Gotham, bold and medium. We retired this font from the site but it is still sometimes used in images (ads, marquee images, logos, etc). </p>
        </section>
        
        <section id="paragraphs">
            <h2>Paragraphs</h2>
            <p>When used on a white or light background:</p>
            <div class="copyable">
                <pre><code id="paragraph">font-family:'Open Sans', sans-serif;
font-weight:300;
font-size:16px;
letter-spacing:0;
line-height:1.5em;</code></pre>
                <button class="btn_copy" data-clipboard-target="#paragraph">📋</button>
            </div>
            <div class="example light background">
                <p>Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
            
            <p>When used on a color background:</p>
            <div class="copyable">
                <pre><code id="paragraph_on_dark">font-family:'Open Sans', sans-serif;
font-weight:600;
font-size:16px;
letter-spacing:0;
line-height:1.5em;</code></pre>
                <button class="btn_copy" data-clipboard-target="#paragraph_on_dark">📋</button>
            </div>
            <div class="example wnyc-red background">
                <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>            
        </section>
        
        <section id="small_headers">
            <h2>Small Headers</h2>
            <p>Among other purposes, small headers are used for article sections, and names of shows in lists of audio content.
            <div class="copyable">
                <pre><code id="small_header">font-family:'Open Sans', sans-serif;
font-weight:600;
font-size:16px;
text-transform:uppercase;
letter-spacing:2px;
line-height:1.5em;</code></pre>
                <button class="btn_copy" data-clipboard-target="#small_header">📋</button>
            </div>
            <div class="example light background">
                <h2>Small header text</h2>
            </div>            
            <div class="example wnyc-red background">
                <h2>Small header text on dark background</h2>
            </div>            
        </section>
        
        <section id="dates_and_time">
            <h2>Dates and Times</h2>
            <p>How do we handle time:</p>
            <ul class="bullets">
                <li>Hour = “hr”</li>
                <li>Minute(s) = “min”</li>
                <li>Seconds = should be rounded up to 1 minute</li>
            </ul>
            <p>Dates should be written out in standard format, with the month shortened to the first three letters. For example: Jan 3, 2016.</p>
        </section>
        
    </article>
</main>

<?php require('partials/foot.php'); ?>

