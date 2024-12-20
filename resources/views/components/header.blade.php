        <!-- Header -->
        <header class="bg-blue-900 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-semibold">
                    <a href="{{url('/')}}">Workopia</a>
                </h1>
                <nav class="hidden md:flex items-center space-x-4">
                    <x-nav-link href="{{url('/')}}" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="{{url('/jobs')}}" :active="request()->is('jobs')">All Jobs</x-nav-link>
                    <x-nav-link href="{{url('/jobs/saved')}}" :active="request()->is('jobs/saved')">Saved Jobs</x-nav-link >
                    <x-nav-link href="{{url('/login')}}" :active="request()->is('login')" icon='user'>Login</x-nav-link>
                    <x-nav-link href="{{url('/register')}}" :active="request()->is('register')" >Register</x-nav-link>
                    <x-nav-link href="{{url('/dashboard')}}" :active="request()->is('dashboard')" icon='gauge'> Dashboard</x-nav-link>
                    <x-button-Link url='/jobs/create' icon='edit'>Create Job</x-button-Link>
                </nav>

                <button
                    id="hamburger"
                    class="text-white md:hidden flex items-center"
                >
                    <i class="fa fa-bars text-2xl"></i>
                </button>
            </div>
            <!-- Mobile Menu -->
            <nav
                id="mobile-menu"
                class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">
                <x-nav-link mobile=true href="{{url('/jobs')}}">All Jobs</x-nav-link>
                <x-nav-link mobile=true href="{{url('jobs/saved')}}">Saved Jobs</x-nav-link>
                <x-nav-link mobile=true href="{{url('/login')}}">Login</x-nav-link>
                <x-nav-link mobile=true href="{{url('/register')}}">Register</x-nav-link>
                <x-nav-link mobile=true href="{{url('/dashboard')}}" icon='gauge'> Dashboard</x-nav-link>
                <a
                    href="{{url('jobs/create')}}"
                    class="block px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-black"
                >Create Job
                    <i class="fa fa-edit"></i> Create Job
                </a>

                    <x-button-Link mobile=true url='/jobs/create' icon='edit'>Create Job</x-button-Link>

            </nav>
        </header>
