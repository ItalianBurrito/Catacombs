const staticCCSheet = "catacombs-char-sheet-v0.1"
const assets = [
  "/",
  "/css/style.css",
  "/js/app.js",
  "/images/shiv.png",
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
      return res || fetch(fetchEvent.request)
    })
  )
})
