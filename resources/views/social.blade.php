@extends('layouts.app')

@section('title', 'Social Media')
@section('heading', 'Social Media')

@section('content')
    <div class="tabs" role="tablist">
        <button class="tab active" data-target="facebook" role="tab">Facebook</button>
        <button class="tab" data-target="twitter" role="tab">Twitter / X</button>
        <button class="tab" data-target="instagram" role="tab">Instagram</button>
    </div>

    //Facebook: official Page Plugin
    <section class="panel active" id="facebook">
        <iframe
            title="UCC on Facebook"
            data-src="https://www.facebook.com/plugins/page.php?href={{ urlencode(config('ucc.social.facebook')) }}&tabs=timeline&width=500&height=650&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false"
            loading="lazy" allow="encrypted-media"></iframe>
        <a href="{{ config('ucc.social.facebook') }}" target="_blank" rel="noopener noreferrer" class="btn btn-outline">Open in Facebook</a>
    </section>

    //Twitter / X: official timeline widget
    <section class="panel" id="twitter">
        <div class="embed-wrap" id="twitter-embed" data-loaded="false"></div>
        <a href="{{ config('ucc.social.twitter') }}" target="_blank" rel="noopener noreferrer" class="btn btn-outline">Open in X</a>
    </section>

    //Instagram: profile embed
    <section class="panel" id="instagram">
        <iframe
            title="UCC on Instagram"
            data-src="{{ config('ucc.social.instagram') }}/embed"
            loading="lazy"></iframe>
        <a href="{{ config('ucc.social.instagram') }}" target="_blank" rel="noopener noreferrer" class="btn btn-outline">Open in Instagram</a>
    </section>

    <script>
        const tabs = document.querySelectorAll('.tab');
        const panels = document.querySelectorAll('.panel');

        function loadPanel(id) {
            if (id === 'twitter') {
                const box = document.getElementById('twitter-embed');
                if (box.dataset.loaded === 'false') {
                    box.dataset.loaded = 'true';
                    box.innerHTML = '<a class="twitter-timeline" data-height="600" href="https://twitter.com/uccjamaica">Posts by @uccjamaica</a>';
                    const s = document.createElement('script');
                    s.src = 'https://platform.twitter.com/widgets.js';
                    s.async = true;
                    document.body.appendChild(s);
                }
                return;
            }
            const frame = document.querySelector('#' + id + ' iframe');
            if (frame && !frame.src) frame.src = frame.dataset.src;
        }

        tabs.forEach(tab => tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            panels.forEach(p => p.classList.remove('active'));
            tab.classList.add('active');
            document.getElementById(tab.dataset.target).classList.add('active');
            loadPanel(tab.dataset.target);
        }));

        loadPanel('facebook'); // first tab loads immediately
    </script>
@endsection
