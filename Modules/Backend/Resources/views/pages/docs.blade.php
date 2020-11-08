@extends('backend::layouts.master')

@push('page-script')

@endpush

@section('content')

<div class="content-wrapper">
        <div class="col-12 col-md-10 offset-md-1">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">Lara8starter</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin" id="doc-intro">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4 mt-4">Readme</h3>
                        <p>Lara8starter is Laravel Admin Starter that made for make quick start laravel web application.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">Template RoyalUI Dashboard</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin" id="doc-intro">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4 mt-4">Introduction</h3>
                        <p>RoyalUI Admin is a responsive HTML template that is based on the CSS framework Bootstrap
                            4 and it is built with Sass. Sass compiler makes it easier to code and customize. If you
                            are unfamiliar with Bootstrap or Sass, visit their
                            website and read through the documentation. All of Bootstrap components have been
                            modified to fit the style of RoyalUI Admin and provide a consistent look throughout the
                            template.</p>
                        <p>Before you start working with the template, we suggest you go through the pages that are
                            bundled with the theme. Most of the template example pages contain quick tips on how to
                            create or use a component which can
                            be really helpful when you need to create something on the fly.</p>
                        <p class="d-inline"><strong>Note</strong>: We are trying our best to document how to use the
                            template. If you think that something is missing from the documentation, please do not
                            hesitate to tell us about it. If you have any questions or issues regarding this theme
                            please email us at <a class="d-inline text-info" href="mailto:info@bootstrapdash.com">info@bootstrapdash.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin" id="doc-started">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4">Getting started</h3>
                        <p>You can directly use the compiled and ready-to-use the version of the template. But in
                            case you plan to customize the template extensively the template allows you to do so.
                        </p>
                        <p>Within the download you'll find the following directories and files, logically grouping
                            common assets and providing both compiled and minified variations:</p>
                        <pre>
RoyalUI/
├── template/
├── css/
├── fonts/
├── images/
├── js/
├── pages/
├── partials/
├── index.html
├── scss/
├── vendors/
├── gulpfile.js
├── package.json
├── documentation/
├── CHANGELOG.md
                        </pre>
                        <p class="mt-1">Note: The root folder denoted further in this documentation refers to the
                            'template' folder inside the downloaded folder</p>
                        <div class="alert alert-success mt-4 d-flex align-items-center" role="alert">
                            <i class="ti-info-alt mr-4"></i>
                            <p>We have bundled up the vendor files needed for demo purpose into a folder 'vendors',
                                you may not need all those vendors or may need to add more vendors in your
                                application. If you want to make any change in the vendor package files, you can
                                either change the src path for related tasks in the file gulpfile.js and run the
                                task <code> bundleVendors </code> to rebuild the vendor files or manually edit the
                                vendor folder.</p>
                        </div>
                        <hr class="mt-5">
                        <h4 class="mt-4">Installation</h4>
                        <p class="mb-0">
                            You need to install package files/Dependencies for this project if you want to customize
                            it. To do this, you must have <span class="font-weight-bold">node and npm</span>
                            installed in your computer.
                        </p>
                        <p class="mb-0">Installation guide of the node can be found <a
                                href="https://nodejs.org/en/">here</a>. As npm comes bundled with a node, a separate
                            installation of npm is not needed.</p>
                        <p>
                            If you have installed them, just go to the root folder and run the following command in
                            your command prompt or terminal (for the mac users).
                        </p>
                        <pre class="shell-mode">npm install</pre>
                        <p class="mt-4">
                            This will install the dev dependencies in the local <span
                                class="font-weight-bold">node_modules</span> folder in your root directory.
                        </p>
                        <p class="mt-2">
                            Then you will need to install <span class="font-weight-bold">Gulp</span>. We use the
                            Gulp task manager for the development processes. Gulp will watch for changes to the SCSS
                            files and automatically compile the files to CSS.
                        </p>
                        <p>Getting started with Gulp is pretty simple. The <a href="https://gulpjs.com/"
                                target="_blank">Gulp</a> site is a great place to get information on installing Gulp
                            if you need more information. You need to first install Gulp-cli in your machine using
                            the below command.</p>
                        <pre class="shell-mode">npm install -g gulp-cli</pre>
                        <p class="mt-4">This installs Gulp-cli globally to your machine. The other thing that Gulp
                            requires, which, is really what does all the work, is the gulpfile.js. In this file, you
                            set up all of your tasks that you will run.</p>
                        <p>Don't worry. We have this file already created for you!</p>
                        <p>To run this project in development mode enter the following command below. This will
                            start the file watch by gulp and whenever a file is modified, the SCSS files will be
                            compiled to create the CSS file.</p>
                        <pre class="shell-mode">gulp serve</pre>
                        <div class="alert alert-warning mt-4" role="alert">
                            <i class="ti-info-alt-outline"></i>It is important to run <code>gulp serve</code>
                            command from the directory where the gulpfile.js is located.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection