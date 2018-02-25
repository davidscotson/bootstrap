---
layout: default
---

<div class="container my-5">
  <main class="bd-content" role="main">
    <h1 class="bd-title" id="content">{{ page.title | smartify }}</h1>
    <p class="bd-lead">{{ page.description | smartify }}</p>
    {{ content }}
  </main>
</div>
