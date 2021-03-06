var staticCacheName = "techub-v" + new Date().getTime();
var filesToCache = [
  '/offline',
  '/css/app.css',
  '/js/app.js',
  '/assets/images/icons/icon-72x72.png',
  '/assets/images/icons/icon-96x96.png',
  '/assets/images/icons/icon-128x128.png',
  '/assets/images/icons/icon-144x144.png',
  '/assets/images/icons/icon-152x152.png',
  '/assets/images/icons/icon-192x192.png',
  '/assets/images/icons/icon-384x384.png',
  '/assets/images/icons/icon-512x512.png',
  '/assets/images/icons/splash-640x1136.png',
  '/assets/images/icons/splash-750x1334.png',
  '/assets/images/icons/splash-828x1792.png',
  '/assets/images/icons/splash-1125x2436.png',
  '/assets/images/icons/splash-1242x2208.png',
  '/assets/images/icons/splash-1242x2688.png',
  '/assets/images/icons/splash-1536x2048.png',
  '/assets/images/icons/splash-1668x2224.png',
  '/assets/images/icons/splash-1668x2388.png',
  '/assets/images/icons/splash-2048x2732.png',
  'https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css',
  'https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js',
];

// Cache on install
self.addEventListener("install", event => {
  this.skipWaiting();
  event.waitUntil(
    caches
    .open(staticCacheName)
    .then(cache => {
      return cache.addAll(filesToCache);
    })
  )
});

// Clear cache on activate
self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys()
    .then(cacheNames => {
      return Promise.all(
        cacheNames
        .filter(cacheName => (cacheName.startsWith("techhub-")))
        .filter(cacheName => (cacheName !== staticCacheName))
        .map(cacheName => caches.delete(cacheName))
      );
    })
  );
});

// Serve from Cache
self.addEventListener("fetch", event => {
  event.respondWith(
    caches.match(event.request)
    .then(response => {
      return response || fetch(event.request);
    })
    .catch(() => {
      return caches.match('offline');
    })
  )
});