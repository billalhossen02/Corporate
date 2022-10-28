<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{ url('/admin') }}">
                        <img class="img-fluid" src="{{ asset('assets/backend/images/logo.png') }}" width="100px" alt=""/></a></div>
                <li class="label">Main</li>
                <li><a href="{{ url('/admin') }}" ><i class="ti-home"></i> Dashboard </a>
                </li>

                <li><a class="sidebar-sub-toggle"><i class="ti-bookmark-alt"></i> Role Management <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ url('roles') }}">Manage Role</a></li>
                        <li><a href="{{ url('users') }}">Manage User</a></li>
                    </ul>
                </li>

                <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> Page Builder <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        {{-- <li><a href="{{ url('pagebuilder') }}">Create</a></li> --}}
                        <li><a href="{{ url('allpage') }}">All Page</a></li>

                    </ul>
                </li>


                <li><a class="sidebar-sub-toggle"><i class="ti-blackboard"></i>Back Office<span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('order.details') }}">View</a></li>
                    </ul>
                </li>

                <li class="label">Apps</li>

                <li><a class="sidebar-sub-toggle"><i class="ti-shopping-cart-full"></i> Product & Category <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        @can('product-list')
                        <li><a href="{{ route('products') }}">View all Product</a></li>
                        @endcan
                        @can('product-create')
                        <li><a href="{{ route('ProductT') }}">Create a Product</a></li>
                        @endcan
                        <li><a href="{{ route('categories') }}">View all Category</a></li>

                        <li><a href="{{ route('CategoriesT') }}">Create a Category</a></li>
                    </ul>
                </li>

                {{-- <li><a class="sidebar-sub-toggle"><i class="ti-light-bulb"></i> Solution <span --}}
                <li><a class="sidebar-sub-toggle"><i class="ti-book"></i> Blog & Brand <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('blogs_backend') }}">View all Blog</a></li>
                        <li><a href="{{ route('blogs_create_backend') }}">Create a Blog</a></li>
                        <li><a href="{{ route('brands') }}">View all Brand</a></li>
                        <li><a href="{{ route('BrandsT') }}">Create a Brand</a></li> 
                        {{-- <li><a href="/blogs/{blog}/edit">Edit</a></li>
                        <li><a href="{{ route('SolutionT') }}">Delete</a></li> --}}
                    </ul>
                </li>

                {{-- <li><a class="sidebar-sub-toggle"><i class="ti-agenda"></i> Catagory <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('categories') }}">View</a></li>
                        <li><a href="{{ route('CategoriesT') }}">Create</a></li>
                    </ul>
                </li> --}}

                {{-- <li><a class="sidebar-sub-toggle"><i class="ti-bookmark-alt"></i> Brand <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('brands') }}">View</a></li>
                        <li><a href="{{ route('BrandsT') }}">Create</a></li>
                    </ul>
                </li> --}}

                <li><a class="sidebar-sub-toggle"><i class="ti-briefcase"></i>Solution & Industry <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('view_solution') }}">View all Solution</a></li>
                        <li><a href="{{ route('create_solution') }}">Create a Solution</a></li>
                        <li><a href="{{ route('industries') }}">View all Industry</a></li>
                        <li><a href="{{ route('IndustryT') }}">Create an Industry</a></li>
                    </ul>
                </li>

                <li><a class="sidebar-sub-toggle"><i class="ti-link"></i> Client Experience<span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('ClientT') }}">Create</a></li>
                    </ul>
                </li>

                <li><a class="sidebar-sub-toggle"><i class="ti-unlink"></i> Client Widget <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        {{-- <li><a href="{{ route('widget')}}">View</a></li> --}}
                        <li><a href="{{ route('widgetT') }}">Show</a></li>
                    </ul>
                </li>





                    <li><a class="sidebar-sub-toggle"><i class="ti-light-bulb"></i> Success <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('view_success') }}">View</a></li>
                        {{-- <li><a href="/blogs/{blog}/edit">Edit</a></li>
                        <li><a href="{{ route('SolutionT') }}">Delete</a></li> --}}
                    </ul>
                </li>
                {{-- <li><a class="sidebar-sub-toggle"><i class="ti-light-bulb"></i> Solution <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('view_solution') }}">View</a></li>
                        <li><a href="{{ route('create_solution') }}">Create</a></li>
                        <li><a href="/blogs/{blog}/edit">Edit</a></li>
                        <li><a href="{{ route('SolutionT') }}">Delete</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
