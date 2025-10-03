<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

    <div id="kt_app_sidebar_wrapper" class="app-sidebar-wrapper hover-scroll-y my-5 my-lg-2" data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_sidebar_wrapper"
        data-kt-scroll-offset="5px" style="height: 971px;">

        <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
            class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary px-6 mb-5">

            <div class="menu-item menu-accordion hover">
                <a href="{{ route('admin.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-outline ki-home-2 fs-2"></i>
                    </span>
                    <span class="menu-title">Início</span>
                </a>
            </div>
            <div class="menu-item menu-accordion">
                <a href="{{ route('admin.servicos') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-outline ki-filter-tick fs-2"></i>
                    </span>
                    <span class="menu-title">Serviços</span>
                </a>
            </div>
            <div class="menu-item menu-accordion">
                <a href="{{ route('admin.atendimentos') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-outline ki-calendar fs-2"></i>
                    </span>
                    <span class="menu-title">Agendamentos</span>
                </a>
            </div>
            <div class="menu-item menu-accordion">
                <a href="{{ route('admin.profissionais') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-outline ki-profile-user fs-2"></i>
                    </span>
                    <span class="menu-title">Profissionais</span>
                </a>
            </div>
            <div class="menu-item menu-accordion">
                <a href="{{ route('admin.financeiro') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-outline ki-dollar fs-2"></i>
                    </span>
                    <span class="menu-title">Financeiro</span>
                </a>
            </div>
        </div>
    </div>
</div>
