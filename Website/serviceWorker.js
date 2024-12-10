const staticCCSheet = ['catacombs-char-sheet-v0.1.7'];
const assets = [
  "/",
  "index.php",
  "login.php",
  "logout.php",
  "campaigns.php",
  "gameMasterView.php",
  "playerView.php",
  "/css/style.css",
  "/js/app.js"
];

self.addEventListener("install", installEvent => {
  installEvent.waitUntil(
    caches.open(staticCCSheet).then(cache => {
      return fetch('/')
      .then(response=>cache.put('/', new Response(response.body)));
    })
  )
})

// self.addEventListener("install", installEvent => {
//   installEvent.waitUntil(
//     caches.open(staticCCSheet).then(cache => {
//       cache.addAll(assets)
//     })
//   )
// })

self.addEventListener('activate', event =>{
  event.waitUntil(
    caches.keys().then(keys => Promise.all(
      keys.map(key => {
        if (!staticCCSheet.includes(key)){
          return caches.delete(key);
        }
      })
    )).then(() =>{
      console.log('New worker ready');
    })
  );
});

self.addEventListener("fetch", fetchEvent => {
  fetchEvent.respondWith(
    caches.match(fetchEvent.request).then(res => {
      return res ||
      fetch(fetchEvent.request)
      .catch(error =>{console.error(error);})
    })
  )
})
