<!DOCTYPE html>
<html lang="en">
@include('landing.partials.head', ['title' => 'Privacy'])

<body>
    <div class="">
        <header>
            @include('landing.partials.nav')
        </header>
        <section class="hero-4 pb-5 pt-8 pt-lg-6 pb-sm-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Privacy</li>
                            </ol>
                        </nav>

                        <div class="mt-4">
                            <a href="#">
                                <span class="badge badge-soft-orange mb-1">Pages</span>
                            </a>
                        </div>
                        <h1 class="hero-title mt-0">Privacy</h1>
                    </div>
                </div>

                <!-- author and sharing info start -->
                <div class="row mt-4 align-items-center">
                    <div class="col-auto">
                        <div class="d-flex align-items-center">
                            <img class="me-2 avatar avatar-sm rounded-circle avatar-border"
                                src="./assets/images/avatars/img-4.jpg" alt="" />

                            <div>
                                <h5 class="m-0"><a href="">Hiskia Pratama</a></h5>
                                <p class="text-muted mb-0 fs-13">16 May, 2023 · 3 min read</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- author and sharing info end -->
            </div>
        </section>
    </div>
    <!-- post content start -->
    <section class="position-relative pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p><strong>Privacy Policy</strong></p>
                    <p>This Privacy Policy governs the manner in which the KuToko app collects, uses, maintains, and
                        discloses information collected from users of the app. This Privacy Policy applies to the app
                        and all products and services offered by KuToko.</p>
                    <p><strong>Information Collection and Use:</strong>
                        KuToko may collect personal identification information from users in various ways, including but
                        not limited to when users register on the app, place an order, subscribe to the newsletter, or
                        fill out a form. KuToko may collect non-personal identification information about users whenever
                        they interact with the app.</p>
                    <p><strong>How We Use Collected Information:</strong>
                        KuToko collects and uses personal information for the following purposes:</p>
                    <ul>
                        <li>To personalize the user experience</li>
                        <li>To improve customer service</li>
                        <li>To process transactions</li>
                        <li>To send periodic emails</li>
                    </ul>
                    <p><strong>Protection of User Information:</strong>
                        KuToko adopts appropriate data collection, storage, and processing practices and security
                        measures to protect against unauthorized access, alteration, disclosure, or destruction of
                        personal information.</p>
                    <p><strong>Sharing Personal Information:</strong>
                        KuToko does not sell, trade, or rent users&#39; personal identification information to others.
                        We may share generic aggregated demographic information not linked to any personal
                        identification information regarding visitors and users with our business partners and trusted
                        affiliates.</p>
                    <p><strong>Changes to this Privacy Policy:</strong>
                        KuToko has the discretion to update this Privacy Policy at any time. Users are encouraged to
                        check this page frequently for any changes. You acknowledge and agree that it is your
                        responsibility to review this Privacy Policy periodically and become aware of modifications.</p>
                    <p>By using the KuToko app, you signify your acceptance of this Privacy Policy. If you do not agree
                        to this Privacy Policy, please do not use the app. Your continued use of the app following the
                        posting of changes to this Privacy Policy will be deemed your acceptance of those changes.</p>
                    <p>If you have any questions about this Privacy Policy, the practices of this app, or your dealings
                        with this app, please contact us at <a href="mailto:support@kutoko.id">support@kutoko.id</a>.

                </div>
            </div>
        </div>
    </section>
    <!-- post content end -->

    <!-- footer starts -->
    @include('landing.partials.footer')
    <!-- footer ends -->

    <!-- back to top -->
    <a class="btn btn-soft-primary shadow-none btn-icon btn-back-to-top" href="#"><i class="icon-xxs"
            data-feather="arrow-up"></i></a>

    <!-- javascript -->
    @include('landing.partials.script')
</body>

</html>
