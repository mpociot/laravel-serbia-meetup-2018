<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Serbia</title>

        <link rel="stylesheet" href="/css/app.css" />
    </head>
    <body>
        <div class="reveal">
            <div class="slides">
                <section class="center" data-markdown>
                    <script type="text/template">
                        # VisualDiff
                        ### Visual Regression Testing For Laravel
                    </script>
                </section>
                <section class="center">
                    <h1>About me</h1>

                    <strong>Marcel Pociot</strong><br><br>

                    Managing Partner & Developer<br>
                    <img src="/img/bc_logo_weiss.png" class="plain" style="background:none; width: 400px"><br>
                    @marcelpociot
                </section>
                <section class="center" data-markdown>
                    # Open Source
                    ### 😍
                </section>
                <section class="center" data-markdown>
                    # Open Source

                    30+ open source PHP packages / 1.2m+ downloads

                    Laravel TestTools Chrome extension / ~15k weekly users

                    Codeception TestTools Chrome extension
                </section>
                <section class="center">
                    <h1>BotMan</h1>
                    <img src="/img/botman-logo.png" class="plain" style="background: none; height: 200px" />
                </section>
                <section class="center">
                    <h2>Why Visual Testing?</h2>
                    <img src="/img/magnify.gif" class="fragment plain"/>
                </section>
                <section class="center" data-transition="none">
                    <img src="/img/diff/1.png" class="plain"/>
                </section>
                <section class="center" data-transition="none">
                    <img src="/img/diff/2.png" class="plain"/>
                </section>
                <section class="center">
                    <h2>Did you see it?</h2>
                    <img src="/img/difference.gif" class="plain"/>
                </section>
                <section class="center">
                    <h2>Diff Result</h2>
                    <img src="/img/diff/diff.png" class="plain"/>
                </section>
<section data-transition="fade">
<h2>How to use it</h2>
<pre><code data-trim data-noescape>class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->get('/')
             ->visualDiff();
    }
}</code></pre></section>
<section data-transition="fade">
<h2>How to use it</h2>
<pre><code data-trim data-noescape>class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->get('/')
             -><mark>visualDiff()</mark>;
    }
}</code></pre></section>
<section class="center">
    <h2>Laravel Dusk Support</h2>
</section>
<section data-transition="fade">
<h2>How to use it</h2>
<pre><code data-trim data-noescape>class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->visualDiff();
        });
    }
}</code></pre></section>
<section data-transition="fade">
<h2>How to use it</h2>
<pre><code data-trim data-noescape>class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    <mark>->visualDiff()</mark>;
        });
    }
}</code></pre></section>
<section class="center">
    <h2>Demo</h2>
</section>
<section class="center">
    <h2>Thank you!</h2>
    <h5>https://github.com/beyondcode</h2>
</section>
        </div>
        <script src="/js/app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/languages/php.min.js" />
        <style>
            .reveal.slide .slides > section, .reveal.slide .slides > section > section {
                min-height: 100% !important;
                display: flex !important;
                flex-direction: column !important;
                justify-content: center !important;
                position: absolute !important;
                top: 0 !important;
                align-items: center !important;
            }
            section.content-center > h1, section.content-center > h2 {
                position: absolute !important;
                top: 50px !important;
                margin-left: auto !important;
                margin-right: auto !important;
                left: 0 !important;
                right: 0 !important;
                text-align: center !important;
            }
            .print-pdf .reveal.slide .slides > section, .print-pdf .reveal.slide .slides > section > section {
                min-height: 770px !important;
                position: relative !important;
            }
            </style>
    </body>
</html>
