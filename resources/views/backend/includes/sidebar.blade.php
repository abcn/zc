<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! access()->user()->picture !!}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{!! access()->user()->name !!}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('strings.backend.general.status.online') }}</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('strings.backend.general.search_placeholder') }}"/>
                  <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('menus.backend.sidebar.general') }}</li>

            <!-- Optionally, you can add icons to the links -->
            <li class="{{ Active::pattern('admin/dashboard') }}">
                <a href="{!! route('admin.dashboard') !!}"><span>{{ trans('menus.backend.sidebar.dashboard') }}</span></a>
            </li>

            @permission('view-access-management')
                <li class="{{ Active::pattern('admin/access/*') }}">
                    <a href="{!!url('admin/access/users')!!}"><span>{{ trans('menus.backend.access.title') }}</span></a>
                </li>
            @endauth
            {{--文章管理--}}
            @permission('view-article-management')
                <li class="{{ Active::pattern('admin/article*') }} treeview">
                    <a href="#">
                        <span>{{ trans('menus.backend.article.main') }}</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu {{ Active::pattern('admin/article*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/article*', 'display: block;') }}">
                        <li class="{{ Active::pattern('admin/article') }}">
                            <a href="{!!url('admin/article')!!}"><span>资讯管理</span></a>
                        </li>
                        <li class="{{ Active::pattern('admin/article/type') }}">
                            <a href="{!!url('admin/article/type')!!}"><span>资讯类型管理</span></a>
                        </li>
                    </ul>
                </li>
            @endauth
            {{--end 文章管理--}}
            {{--业务管理--}}
            @permission('view-order-management')
            <li class="{{ Active::pattern('admin/order*') }} treeview">
                <a href="#">
                    <span>业务管理</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/order*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/order*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/order') }}">
                        <a href="{!!url('admin/order')!!}"><span>主订单管理</span></a>
                    </li>

                </ul>
            </li>
            @endauth
            {{--end 业务管理--}}

            <li class="{{ Active::pattern('admin/log-viewer*') }} treeview">
                <a href="#">
                    <span>{{ trans('menus.backend.log-viewer.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/log-viewer*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/log-viewer*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/log-viewer') }}">
                        <a href="{!! url('admin/log-viewer') !!}">{{ trans('menus.backend.log-viewer.dashboard') }}</a>
                    </li>
                    <li class="{{ Active::pattern('admin/log-viewer/logs') }}">
                        <a href="{!! url('admin/log-viewer/logs') !!}">{{ trans('menus.backend.log-viewer.logs') }}</a>
                    </li>
                </ul>
            </li>

            <li class="{{ Active::pattern('admin/carousel/*') }}">
                <a href="{!!url('admin/carousel')!!}"><span>轮播管理</span></a>
            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>