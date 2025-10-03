@include('admin.includes.head')

<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">

        @include('admin.includes.header')

        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">

            @include('admin.includes.sidebar')

            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">


                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content  flex-column-fluid ">


                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container  container-fluid ">
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10">

                                <div class="col-xl-4 mb-xl-10">
                                    <!--begin::Engage widget 3-->
                                    <div class="card bg-primary" data-bs-theme="dark">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column pt-13 pb-14">
                                            <!--begin::Heading-->
                                            <div class="m-0">
                                                <!--begin::Title-->
                                                <h1 class="fw-semibold text-white text-center lh-lg mb-9">
                                                    Bem vindo(a) ao <strong>PetPro</strong><br>
                                                    <span class="">Seu <strong>Gerenciador
                                                            Inteligente</strong></span>
                                                </h1>
                                                <!--end::Title-->

                                                <!--begin::Illustration-->
                                                <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 mb-lg-12"
                                                    style="background-image:url('../assets/media/svg/illustrations/easy/5.svg')">
                                                </div>
                                                <!--end::Illustration-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Links-->
                                            <div class="text-center">
                                                <!--begin::Link-->
                                                <a class="btn btn-sm bg-white btn-color-white bg-opacity-20"
                                                    href="../pages/user-profile/projects.html">
                                                    Agendamentos </a>
                                                <!--end::Link-->

                                                <!--begin::Link-->
                                                <a class="btn btn-sm bg-white btn-color-white bg-opacity-20"
                                                    href="../pages/user-profile/projects.html">
                                                    Financeiro </a>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Links-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Engage widget 3-->

                                </div>

                                <div class="col-xl-8 g-mb-10">
                                    <div class="row g-5 g-xl-10">
                                        <div class="col-md-3 mb-xl-10">

                                            <!--begin::Card widget 2-->
                                            <div class="card">
                                                <!--begin::Body-->
                                                <div
                                                    class="card-body d-flex justify-content-between align-items-start flex-column">
                                                    <!--begin::Icon-->
                                                    <div class="m-0">
                                                        <i class="ki-outline ki-calendar fs-2hx text-gray-600"></i>

                                                    </div>
                                                    <!--end::Icon-->

                                                    <!--begin::Section-->
                                                    <div class="d-flex flex-column my-5">
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">327</span>
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Badge-->
                                                    <span class="badge badge-light-primary fs-base">
                                                        Atendimentos Hoje
                                                    </span>
                                                    <!--end::Badge-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card widget 2-->
                                        </div>

                                        <div class="col-md-3 mb-xl-10">

                                            <!--begin::Card widget 2-->
                                            <div class="card">
                                                <!--begin::Body-->
                                                <div
                                                    class="card-body d-flex justify-content-between align-items-start flex-column">
                                                    <!--begin::Icon-->
                                                    <div class="m-0">
                                                        <i class="ki-outline ki-profile-user fs-2hx text-gray-600"></i>

                                                    </div>
                                                    <!--end::Icon-->

                                                    <!--begin::Section-->
                                                    <div class="d-flex flex-column my-5">
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">4</span>
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Badge-->
                                                    <span class="badge badge-light-primary fs-base">
                                                        Profissionais Ativos
                                                    </span>
                                                    <!--end::Badge-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card widget 2-->
                                        </div>

                                        <div class="col-md-3 mb-xl-10">

                                            <!--begin::Card widget 2-->
                                            <div class="card">
                                                <!--begin::Body-->
                                                <div
                                                    class="card-body d-flex justify-content-between align-items-start flex-column">
                                                    <!--begin::Icon-->
                                                    <div class="m-0">
                                                        <i class="ki-outline ki-star fs-2hx text-gray-600"></i>

                                                    </div>
                                                    <!--end::Icon-->

                                                    <!--begin::Section-->
                                                    <div class="d-flex flex-column my-5">
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">22</span>
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Badge-->
                                                    <span class="badge badge-light-primary fs-base">
                                                        Clientes Cadastrados
                                                    </span>
                                                    <!--end::Badge-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card widget 2-->
                                        </div>

                                        <div class="col-md-3 mb-xl-10">

                                            <!--begin::Card widget 2-->
                                            <div class="card">
                                                <!--begin::Body-->
                                                <div
                                                    class="card-body d-flex justify-content-between align-items-start flex-column">
                                                    <!--begin::Icon-->
                                                    <div class="m-0">
                                                        <i class="ki-outline ki-dollar fs-2hx text-gray-600"></i>

                                                    </div>
                                                    <!--end::Icon-->

                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center my-5">
                                                        <!--begin::Currency-->
                                                        <span
                                                            class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">R$</span>
                                                        <!--end::Currency-->

                                                        <!--begin::Amount-->
                                                        <span
                                                            class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69.700,00</span>

                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Badge-->
                                                    <span class="badge badge-light-primary fs-base">
                                                        Faturamento Mensal
                                                    </span>
                                                    <!--end::Badge-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card widget 2-->
                                        </div>
                                    </div>
                                    <div class="row g-5 g-xl-10">
                                        <div class="col-mb-12 mb-xl-10">

                                            <div class="card card-xl-stretch mb-5 mb-xl-8">
                                                <!--begin::Header-->
                                                <div class="card-header border-0">
                                                    <h3 class="card-title fw-bold text-dark">Últimos Agendamentos</h3>

                                                    <div class="card-toolbar">
                                                    </div>
                                                </div>
                                                <!--end::Header-->

                                                <!--begin::Body-->
                                                <div class="card-body pt-2">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-8">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                                        <!--end::Bullet-->

                                                        <!--begin::Checkbox-->
                                                        <div class="mx-5">
                                                            
                                                        </div>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Description-->
                                                        <div class="flex-grow-1">
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-bold fs-6">Banho + Tosa</a>

                                                            <span class="text-muted fw-semibold d-block">Há 45 minutos</span>
                                                        </div>
                                                        <!--end::Description-->

                                                        <span class="badge badge-light-primary fs-base fw-bold">R$ 120,00</span>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-8">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                                        <!--end::Bullet-->

                                                        <!--begin::Checkbox-->
                                                        <div class="mx-5">
                                                            
                                                        </div>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Description-->
                                                        <div class="flex-grow-1">
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-bold fs-6">Banho + Tosa</a>

                                                            <span class="text-muted fw-semibold d-block">Há 45 minutos</span>
                                                        </div>
                                                        <!--end::Description-->

                                                        <span class="badge badge-light-primary fs-base fw-bold">R$ 120,00</span>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-8">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                                        <!--end::Bullet-->

                                                        <!--begin::Checkbox-->
                                                        <div class="mx-5">
                                                            
                                                        </div>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Description-->
                                                        <div class="flex-grow-1">
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-bold fs-6">Banho + Tosa</a>

                                                            <span class="text-muted fw-semibold d-block">Há 45 minutos</span>
                                                        </div>
                                                        <!--end::Description-->

                                                        <span class="badge badge-light-primary fs-base fw-bold">R$ 120,00</span>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-8">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                                        <!--end::Bullet-->

                                                        <!--begin::Checkbox-->
                                                        <div class="mx-5">
                                                            
                                                        </div>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Description-->
                                                        <div class="flex-grow-1">
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-bold fs-6">Banho + Tosa</a>

                                                            <span class="text-muted fw-semibold d-block">Há 45 minutos</span>
                                                        </div>
                                                        <!--end::Description-->

                                                        <span class="badge badge-light-primary fs-base fw-bold">R$ 120,00</span>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-8">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                                        <!--end::Bullet-->

                                                        <!--begin::Checkbox-->
                                                        <div class="mx-5">
                                                            
                                                        </div>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Description-->
                                                        <div class="flex-grow-1">
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-bold fs-6">Banho + Tosa</a>

                                                            <span class="text-muted fw-semibold d-block">Há 45 minutos</span>
                                                        </div>
                                                        <!--end::Description-->

                                                        <span class="badge badge-light-primary fs-base fw-bold">R$ 120,00</span>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end:List Widget 3-->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>



                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer ">
                    <!--begin::Footer container-->
                    <div
                        class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">

                        <!--end::Menu-->
                    </div>
                    <!--end::Footer container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end:::Main-->


        </div>
        <!--end::Wrapper-->


    </div>
    <!--end::Page-->
</div>
<!--end::App-->


@include('admin.includes.footer')
