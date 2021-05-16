const cacheName = "v1";

const cacheAsset = [
    "assets/css/style.css",
    "assets/js/main.js",
    "assets/js/subscribe.js",
    "manifest.json",
    "index.html"
]

self.addEventListener('install', (e) => {
    console.log('Service worker installing...');
    e.waitUntil(
        caches
        .open(cacheName)
        .then((cache) => {
            console.log("service worker: caching files");
            cache.addAll(cacheAsset)
        })
        .then(() =>  self.skipWaiting())
    );
  });
  
self.addEventListener('activate', (e) => {
    console.log('Service worker activating...');

    e.waitUntil(
        caches.keys().then((cacheNames) =>{
            return Promise.all(
                cacheNames.map((cache) =>{
                if(cache !== cacheName){
                console.log("service worker: clearing old cache")
            }
            })
        );
        })
    );
  });
  
  // I'm a new service worker
  
self.addEventListener('fetch', (e) => {
    console.log('Fetching:', e.request.url);

    e.respondWith(fetch(e.request).catch(() => caches.match(e.request)));

    
  });