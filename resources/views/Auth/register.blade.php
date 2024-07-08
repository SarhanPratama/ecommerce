<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>GreenCart - Tailwind CSS Grocery Landing Page Template</title>
    <!-- Theme favicon -->
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="coderthemes" name="author" />

    @include('layouts.shared/head-css')
</head>

<body>

    <section
        class="sm:p-10 p-6 flex items-center lg:justify-start justify-center relative bg-no-repeat bg-cover min-h-screen bg-[url(/images/banner/banner-11.jpg)]">
        <div
            class="max-w-lg w-full xl:me-auto rounded-xl bg-white/80 backdrop-blur-2xl sm:p-10 p-6 h-full flex flex-col dark:bg-default-50/60 border-t-4 border-primary">
            <a href="" class="block mb-10">
                <img class="h-10 block dark:hidden" src="/images/logo-dark.png" alt="">
                <img class="h-10 hidden dark:block" src="/images/logo.png" alt="">
            </a>
            <div class="my-auto">
                <div class="max-w-xl mx-auto">
                    <h4 class="text-default-900 text-2xl font-semibold mb-2">Register</h4>
                    {{-- <p class="text-default-600">Welcome! Get started by creating an account by filling the following
                        details</p> --}}
                </div>
                <form action="{{ url('prosesregister') }}" method="POST" class="shrink mt-10">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-base/normal font-semibold text-default-800 mb-2">Full
                            Name</label>
                        <input name="name"
                            class="block w-full rounded-md py-2.5 px-4 bg-transparent border-default-400/40 text-default-900 focus:outline-0 focus:ring-0"
                            type="text" id="name" placeholder="Enter your Full Name">
                        <span class="text-red-500 mt-1 block"></span>
                        @error('name')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-base/normal font-semibold text-default-800 mb-2">Email
                            address</label>
                        <input name="email"
                            class="block w-full rounded-md py-2.5 px-4 bg-transparent border-default-400/40 text-default-900 focus:outline-0 focus:ring-0"
                            type="email" id="email" placeholder="Enter your email">
                        @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- end email input -->
                    <div class="mb-4">
                        <label for="password"
                            class="block text-base/normal font-semibold text-default-800 mb-2">Password</label>
                        <div class="flex" data-x-password="">
                            <input name="password" type="password" id="password"
                                class="form-password text-default-900 block w-full rounded-s-md py-2.5 px-4 bg-transparent border border-default-400/40 focus:ring-transparent"
                                placeholder="Enter your password">
                            <button type="button" id="password-addon"
                                class="password-toggle inline-flex items-center justify-center py-2.5 px-4 border rounded-e-md bg-transparent -ms-px border-default-400/40">
                                <i class="ti ti-eye password-eye-on text-xl text-default-900"></i>
                                <i class="ti ti-eye-off password-eye-off text-xl text-default-900 hidden"></i>
                            </button>
                        </div>
                        @error('password')
                        <div class="text-red-500 mb-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- end password input -->
                    <div class="mb-4">
                        <label for="password"
                            class="block text-base/normal font-semibold text-default-800 mb-2">Confirmation Password</label>
                        <div class="flex" data-x-password="">
                            <input name="password_confirmation" type="password" id="form-password"
                                class="form-password text-default-900 block w-full rounded-s-md py-2.5 px-4 bg-transparent border border-default-400/40 focus:ring-transparent"
                                placeholder="Enter your password">
                            <button type="button" id="password-addon"
                                class="password-toggle inline-flex items-center justify-center py-2.5 px-4 border rounded-e-md bg-transparent -ms-px border-default-400/40">
                                <i class="ti ti-eye password-eye-on text-xl text-default-900"></i>
                                <i class="ti ti-eye-off password-eye-off text-xl text-default-900 hidden"></i>
                            </button>
                        </div>
                    </div>
                    <!-- end password input -->
                    <div class="flex justify-between items-center flex-wrap gap-x-1 gap-y-2 mb-6">
                        <div class="inline-flex items-center">
                            <input type="checkbox"
                                class="h-4 w-4 rounded border-default-400/80 bg-transparent text-primary focus:border-primary focus:ring focus:ring-primary/60 focus:ring-offset-0"
                                id="checkbox-signin">
                            <label class="text-base/none ms-2 text-default-800 align-middle select-none"
                                for="checkbox-signin">Remember me</label>
                        </div>
                    </div>
                    <!-- end checkbox input -->
                    <div class="mb-6 text-center">
                        <button
                            class="w-full relative inline-flex items-center justify-center px-6 py-2.5 rounded-md text-base bg-primary text-white capitalize transition-all duration-200 hover:bg-primary-600 font-medium"
                            type="submit">Register </button>
                    </div>
                </form>
                <div class="flex items-center my-4">
                    <div class="flex-auto mt-px border-t border-dashed border-default-400/80"></div>
                    <div class="mx-4 text-default-600">Or</div>
                    <div class="flex-auto mt-px border-t border-dashed border-default-400/80"></div>
                </div>
                <h2 class="text-xl text-center font-semibold text-default-950 my-6">Continue with</h2>
                <div class="flex items-center justify-center gap-2">
                    <a href="javascript:void(0);" target="_blank"
                        class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-default-900 hover:bg-primary/30 hover:text-primary"><i
                            class="ti ti-brand-facebook text-xl"></i></a>
                    <a href="javascript:void(0);" target="_blank"
                        class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-default-900 hover:bg-primary/30 hover:text-primary"><i
                            class="ti ti-brand-x text-xl"></i></a>
                    <a href="javascript:void(0);" target="_blank"
                        class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-default-900 hover:bg-primary/30 hover:text-primary"><i
                            class="ti ti-brand-instagram text-xl"></i></a>
                    <a href="javascript:void(0);" target="_blank"
                        class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-default-900 hover:bg-primary/30 hover:text-primary"><i
                            class="ti ti-brand-github text-xl"></i></a>
                </div>
            </div>
            <p class="shrink text-default-600 font-medium text-center mt-5">Already have an account ?<a
                    href="{{ url('login') }}" class="text-primary ms-1"><b>Login</a></p>
        </div>
    </section>

    @include('layouts.shared/footer-scripts')

    @include('layouts.shared/theme-mode')

    <!-- Auth Js -->
    @vite(['resources/js/auth.js'])
</body>

</html>
