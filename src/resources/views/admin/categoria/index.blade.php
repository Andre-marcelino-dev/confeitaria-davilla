<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>AdminLTE 4 | Simple Tables</title>

  <!--begin::Accessibility Meta Tags-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
  <meta name="color-scheme" content="light dark" />
  <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
  <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
  <!--end::Accessibility Meta Tags-->

  <!--begin::Primary Meta Tags-->
  <meta name="title" content="AdminLTE 4 | Simple Tables" />
  <meta name="author" content="ColorlibHQ" />
  <meta
    name="description"
    content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS. Fully accessible with WCAG 2.1 AA compliance." />
  <meta
    name="keywords"
    content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel, WCAG compliant" />
  <!--end::Primary Meta Tags-->

  <!--begin::Accessibility Features-->
  <!-- Skip links will be dynamically added by accessibility.js -->
  <meta name="supported-color-schemes" content="light dark" />
  <link rel="preload" href="{{ asset('dash/css/adminlte.css') }}" as="style" />
  <!--end::Accessibility Features-->

  <!--begin::Fonts-->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
    integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
    crossorigin="anonymous"
    media="print"
    onload="this.media = 'all'" />
  <!--end::Fonts-->

  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
    crossorigin="anonymous" />
  <!--end::Third Party Plugin(OverlayScrollbars)-->

  <!--begin::Third Party Plugin(Bootstrap Icons)-->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    crossorigin="anonymous" />
  <!--end::Third Party Plugin(Bootstrap Icons)-->

  <!--begin::Required Plugin(AdminLTE)-->
  <link rel="stylesheet" href="{{ asset('dash/css/adminlte.css') }}" />
  <!--end::Required Plugin(AdminLTE)-->
</head>






<div class="card shadow border-0 rounded-4 mb-4" style="width: 90%; margin:auto;">

  <!-- Header -->
  <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center py-3 rounded-top-4">

    <h3 class="card-title m-0">
      <i class="bi bi-table me-2"></i>
      Tabela de Categorias
    </h3>

    <a href="#" class="btn btn-success btn-sm rounded-pill px-3">
      <i class="bi bi-plus-circle"></i>
      Nova Categoria
    </a>

  </div>

  <!-- Body -->
  <div class="card-body p-0">

    <div class="table-responsive">

      <table class="table table-hover align-middle mb-0">

        <thead class="table-light">

          <tr>

            <th class="ps-4"></th>

            <th>Nome da Categoria</th>

            <th>Descrição</th>

            <th>Status</th>

            <th class="text-center">Ações</th>

          </tr>

        </thead>

        <tbody>

          @foreach ($categorias as $linha)

          <tr>

            <!-- ID -->
            <td class="ps-4 fw-bold text-secondary">
              {{ $linha->id_categoria }}
            </td>

            <!-- Nome -->
            <td>

              <div class="fw-semibold text-dark">
                {{ $linha->nome_categoria }}
              </div>

            </td>

            <!-- Descrição -->
            <td class="text-muted">
              {{ $linha->descricao_categoria }}
            </td>

            <!-- Status -->
            @if ($linha->status_categoria == 'ATIVO')
            <td><span class="badge text-bg-success">Disponível</span></td>
            @else
            <td><span class="badge text-bg-danger">Indisponível</span></td>
            @endif

            <!-- Ações -->
            <td class="text-center">

              <!-- Editar -->
              <a href="#"
                class="btn btn-outline-primary btn-sm rounded-pill me-1">

                <i class="bi bi-pencil-square"></i>

              </a>

              <!-- Atualizar -->
              <a href="#"
                class="btn btn-outline-warning btn-sm rounded-pill me-1">

                <i class="bi bi-arrow-repeat"></i>

              </a>

              <!-- Excluir -->
              <a href="#"
                class="btn btn-outline-danger btn-sm rounded-pill">

                <i class="bi bi-trash"></i>

              </a>

            </td>

          </tr>

          @endforeach

        </tbody>

      </table>

    </div>

  </div>

  <!-- Footer -->
  <div class="card-footer bg-white border-0 py-3">

    <ul class="pagination pagination-sm justify-content-end m-0">

      <li class="page-item">
        <a class="page-link rounded-start-pill" href="#">
          &laquo;
        </a>
      </li>

      <li class="page-item active">
        <a class="page-link" href="#">1</a>
      </li>

      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>

      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>

      <li class="page-item">
        <a class="page-link rounded-end-pill" href="#">
          &raquo;
        </a>
      </li>

    </ul>

  </div>

</div>