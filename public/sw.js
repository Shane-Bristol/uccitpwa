// UCC IT PWA service worker
const VERSION = 'v4';
const CACHE = 'ucc-it-' + VERSION;
const OFFLINE_URL = '/offline.html';

const PRECACHE = [
  '/', '/directory', '/courses', '/admissions', '/social',
  '/css/app.css', '/offline.html', '/manifest.json',
  '/icons/icon-192.png', '/icons/icon-512.png', '/icons/apple-touch-icon.png',
  '/logo.png','/images/staff/jane.svg','/images/staff/david.svg','/images/staff/otis.svg','/images/staff/karen.svg',
  // Course detail pages (ids 1-10 from the seeder)
  ...Array.from({ length: 10 }, (_, i) => '/courses/' + (i + 1)),
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE).then(cache =>

      Promise.allSettled(PRECACHE.map(url => cache.add(new Request(url, { cache: 'reload' }))))
    ).then(() => self.skipWaiting())
  );
});

self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys()
      .then(keys => Promise.all(keys.filter(k => k !== CACHE).map(k => caches.delete(k))))
      .then(() => self.clients.claim())
  );
});

self.addEventListener('fetch', event => {
  const req = event.request;
  const url = new URL(req.url);

  // Only handle same-origin GET requests; leave Facebook/X/Instagram/UCC links alone
  if (req.method !== 'GET' || url.origin !== self.location.origin) return;

  // Pages: network first, fall back to cache, then the offline page
  if (req.mode === 'navigate') {
    event.respondWith(
      fetch(req)
        .then(res => {
          const copy = res.clone();
          caches.open(CACHE).then(c => c.put(req, copy));
          return res;
        })
        .catch(() =>
          caches.match(req).then(hit => hit || caches.match(OFFLINE_URL))
        )
    );
    return;
  }

  // Assets (CSS, images, icons): serve from cache, refresh in the background
  event.respondWith(
    caches.match(req).then(hit => {
      const refresh = fetch(req)
        .then(res => {
          if (res && res.status === 200) {
            const copy = res.clone();
            caches.open(CACHE).then(c => c.put(req, copy));
          }
          return res;
        })
        .catch(() => hit);
      return hit || refresh;
    })
  );
});
