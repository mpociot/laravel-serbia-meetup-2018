
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import "reveal.js/lib/js/head.min";

window.Reveal = require('reveal.js');

window.Reveal.initialize({
    controls: false,
    progress: false,

    history: true,
    margin: 0,

    center: false,

    width: 960,
    height: 700,

    // More info https://github.com/hakimel/reveal.js#dependencies
    dependencies: [
        { src: 'plugin/markdown/marked.js' },
        { src: 'plugin/markdown/markdown.js' },
        { src: 'plugin/notes/notes.js', async: true },
        { src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } }
    ]
});