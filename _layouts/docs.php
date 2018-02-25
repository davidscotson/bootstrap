    {% include header.html %}

    <div class="container-fluid">
      <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
          {% include docs-sidebar.html %}
        </div>

        {% if page.toc %}
          <div class="d-none d-xl-block col-xl-2 bd-toc">
            {{ content | toc_only }}
          </div>
        {% endif %}

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">{{ page.title | smartify }}</h1>
          <p class="bd-lead">{{ page.description | smartify }}</p>
          {{ content }}
        </main>
      </div>
    </div>

    {% include scripts.html %}
  </body>
</html>
