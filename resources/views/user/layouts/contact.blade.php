<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>GreenCart | Contact</title>
  <!-- Theme favicon -->
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="" name="description" />
  <meta content="coderthemes" name="author" />

    @include('layouts.shared/head-css')
</head>

<body>
    @include('layouts.shared/navbar')

    @include('layouts.shared/mobile-nav')

    @include('layouts.shared/page-title' ,['subtitle' => 'Pages', 'title' => 'Contact Us'])

    <section class="lg:py-10 py-3">
        <div class="container">
            <div class="grid grid-cols-12 gap-6">
                <div class="lg:col-span-4 lg:order-1 order-2 col-span-12">
                    <div class="flex items-center justify-center border border-default-200 rounded-lg w-full h-full">
                        <div class="divide-y divide-default-200 w-full">
                            <div class="p-6">
                                <div class="text-center space-y-4">
                                    <i class="ti ti-map-pin text-6xl text-default-900"></i>
                                    <h6 class="text-lg text-default-900">3042, Allentown Apartment, Parker Road, <br> New York, USA. 311434</h6>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="text-center space-y-4">
                                    <i class="ti ti-phone text-6xl text-default-900"></i>
                                    <h6 class="text-lg text-default-900"><a href="tel:(123) 6789-1234">(123) 6789-1234</a> <br> <a href="tel:(123) 2346-6754">(123) 2346-6754</a></h6>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="text-center space-y-4">
                                    <i class="ti ti-mail text-6xl text-default-900"></i>
                                    <a href="mailto:demoproxy@gmail.com" class="text-lg text-default-900 block cursor-pointer" rel="noopener noreferrer">demoproxy@gmail.com <br> demo.help@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end flex -->
                </div><!-- end grid-cols -->
                <div class="lg:col-span-8 order-1 lg:order-2 col-span-12">
                    <div class="border border-default-200 rounded-lg h-full">
                        <div class="p-6 lg:p-12">
                            <h1 class="text-3xl font-medium text-default-800 mb-3">Just Say Hello!</h1>
                            <p class="text-base text-default-500 mb-10">Don't worry! Your email address is safe with us.</p>

                            <form action="">
                                <div class="grid md:grid-cols-12 grid-cols-1 gap-6">
                                    <div class="md:col-span-6">
                                        <label for="username" class="mb-2.5 block text-sm font-medium text-default-700">Username</label>
                                        <input type="text" id="username" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Enter your username">
                                    </div>
                                    <div class="md:col-span-6">
                                        <label for="e_name" class="mb-2.5 block text-sm font-medium text-default-700">Email</label>
                                        <input type="email" id="e_name" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Enter your email">
                                    </div>
                                    <div class="md:col-span-6">
                                        <label for="phone" class="mb-2.5 block text-sm font-medium text-default-700">Phone</label>
                                        <input type="text" id="phone" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Phone No.">
                                    </div>
                                    <div class="md:col-span-6">
                                        <label for="password" class="mb-2.5 block text-sm font-medium text-default-700">Subject</label>
                                        <input type="text" id="password" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Enter your subject">
                                    </div>
                                    <div class="md:col-span-12">
                                        <label for="massage" class="mb-2.5 block text-sm font-medium text-default-700">Message</label>
                                        <textarea type="text" id="massage" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" rows="4" placeholder="Enter your message"></textarea>
                                    </div>
                                    <div class="md:col-span-12 col-span-1 flex justify-end">
                                        <a href="#" class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">Send Message</a>
                                    </div>
                                </div>
                            </form><!-- end form -->
                        </div>
                    </div><!-- end border -->
                </div><!-- end grid-cols -->
            </div><!-- end grid -->
        </div><!-- end container -->
    </section>

    @include('layouts.shared/footer')

    @include('layouts.shared/footer-scripts')

    @include('layouts.shared/theme-mode')

</body>

</html>