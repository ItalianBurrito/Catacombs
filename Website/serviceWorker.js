const staticCCSheet = "catacombs-char-sheet-v0.1.1"
const assets = [
  "/",
  "index.html",
  "login.php",
  "campaigns.php",
  "gameMasterView.php",
  "playerView.php",
  "/css/style.css",
  "/js/app.js"
]

self.addEventListener("install", installEvent => {
  installEvent.waitUntil(
    caches.open(staticCCSheet).then(cache => {
      cache.addAll(assets)
    })
  )
})

self.addEventListener("fetch", fetchEvent => {
  fetchEvent.respondWith(
    caches.match(fetchEvent.request).then(res => {
      return res ||
      fetch(fetchEvent.request)
      .catch(error =>{console.error(error);})
    })
  )
})
