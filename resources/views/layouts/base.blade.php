<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Forum - Responsive HTML5 Template">
    <meta name="author" content="Forum">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- tt-mobile menu -->
    <nav class="panel-menu" id="mobile-menu">
        <ul>
    
        </ul>
        <div class="mm-navbtn-names">
            <div class="mm-closebtn">
                Close
                <div class="tt-icon">
                    <svg>
                      <use xlink:href="#icon-cancel"></use>
                    </svg>
                </div>
            </div>
            <div class="mm-backbtn">Back</div>
        </div>
    </nav>
    <header id="tt-header">
        <div class="container">
            <div class="row tt-row no-gutters">
                <div class="col-auto">
                    <!-- toggle mobile menu -->
                    <a class="toggle-mobile-menu" href="#">
                        <svg class="tt-icon">
                          <use xlink:href="#icon-menu_icon"></use>
                        </svg>
                    </a>
                    <!-- /toggle mobile menu -->
                    <!-- desctop menu -->
                     <div class="tt-desktop-menu">
                        <nav>
                            <ul>
                                <li><a href="{{url('/')}}"><span>Home</span></a></li>
                                <li><a href="{{url('categories')}}"><span>Categories</span></a></li>
                                <li><a href="page-create-topic.html"><span>New</span></a></li>
                                <li>
                                    <a href="page-single-user.html"><span>Pages</span></a>
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="page-single-topic.html">Single Topic</a></li>
                                        <li><a href="page-create-topic.html">Create Topic</a></li>
                                        <li><a href="page-single-user.html">Single User Activity</a></li>
                                        <li><a href="page-single_threads.html">Single User Threads</a></li>
                                        <li><a href="page-single_replies.html">Single User Replies</a></li>
                                        <li><a href="page-single_followers.html">Single User Followers</a></li>
                                        <li><a href="page-single_categories.html">Single User Categories</a></li>
                                        <li><a href="page-single_settings.html">Single User Settings</a></li>
                                        <li><a href="page-signup.html">Sign up</a></li>
                                        <li><a href="page-login.html">Log in</a></li>
                                        <li><a href="page-categories.html">Categories</a></li>
                                        <li><a href="page-categories-single.html">Single Category</a></li>
                                        <li><a href="page-tabs.html">About</a></li>
                                        <li><a href="page-tabs_guidelines.html">Guidelines</a></li>
                                        <li><a href="_demo_modal-advancedSearch.html">Advanced Search</a></li>
                                        <li><a href="error404.html">Error 404</a></li>
                                        <li><a href="_demo_modal-age-confirmation.html">Age Verification</a></li>
                                        <li><a href="_demo_modal-level-up.html">Level up Notification</a></li>
                                        <li><a href="messages-page.html">Message</a></li>
                                        <li><a href="messages-compose.html">Message Compose</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /desctop menu -->
                    <!-- tt-search -->
                    <div class="tt-search">
                        <!-- toggle -->
                        <button class="tt-search-toggle" data-toggle="modal" data-target="#modalAdvancedSearch">
                           <svg class="tt-icon">
                              <use xlink:href="#icon-search"></use>
                            </svg>
                        </button>
                        <!-- /toggle -->
                        <form class="search-wrapper" action="{{url('search')}}" method="GET">
                            <div class="search-form">
                                {{ csrf_field() }}
                                <input type="text" name="q" class="tt-search__input" placeholder="Search">
                                <button class="tt-search__btn" type="submit">
                                   <svg class="tt-icon">
                                      <use xlink:href="#icon-search"></use>
                                    </svg>
                                </button>
                                 <button class="tt-search__close">
                                   <svg class="tt-icon">
                                      <use xlink:href="#cancel"></use>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /tt-search -->
                </div>
                <div class="col-auto ml-auto">

@if (Auth::check())
<div class="tt-user-info d-flex justify-content-center">
    <div class="custom-select-01">
        <select>
            <option value="Default Sorting">{{Auth::user()->name}}</option>
            <option value="value 01">Profile</option>
            <option value="value 02"><a href="{{route('logout')}}">Logout</a></option>
        </select>
    </div>
</div>
@else
<div class="tt-account-btn">
    <a href="{{route('login')}}" class="btn btn-primary">Log in</a>
    <a href="{{route('register')}}" class="btn btn-secondary">Sign up</a>
</div>
@endif




                </div>
            </div>
        </div>
    </header>
    @yield('main')
    <div id="js-popup-settings" class="tt-popup-settings">
        <div class="tt-btn-col-close">
            <a href="#">
                <span class="tt-icon-title">
                    <svg>
                        <use xlink:href="#icon-settings_fill"></use>
                    </svg>
                </span>
                <span class="tt-icon-text">
                    Settings
                </span>
                <span class="tt-icon-close">
                    <svg>
                        <use xlink:href="#icon-cancel"></use>
                    </svg>
                </span>
            </a>
        </div>
        <form class="form-default">
            <div class="tt-form-upload">
                <div class="row no-gutter">
                    <div class="col-auto">
                        <div class="tt-avatar">
                            <svg>
                              <use xlink:href="#icon-ava-d"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="col-auto ml-auto">
                        <a href="#" class="btn btn-primary">Upload Picture</a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="settingsUserName">Username</label>
               <input type="text" name="name" class="form-control" id="settingsUserName" placeholder="azyrusmax">
            </div>
            <div class="form-group">
                <label for="settingsUserEmail">Email</label>
               <input type="text" name="name" class="form-control" id="settingsUserEmail" placeholder="Sample@sample.com">
            </div>
            <div class="form-group">
                <label for="settingsUserPassword">Password</label>
               <input type="password" name="name" class="form-control" id="settingsUserPassword" placeholder="************">
            </div>
            <div class="form-group">
                <label for="settingsUserLocation">Location</label>
               <input type="text" name="name" class="form-control" id="settingsUserLocation" placeholder="Slovakia">
            </div>
            <div class="form-group">
                <label for="settingsUserWebsite">Website</label>
               <input type="text" name="name" class="form-control" id="settingsUserWebsite" placeholder="Sample.com">
            </div>
            <div class="form-group">
                <label for="settingsUserAbout">About</label>
                <textarea name="" placeholder="Few words about you" class="form-control" id="settingsUserAbout"></textarea>
            </div>
            <div class="form-group">
                <label for="settingsUserAbout">Notify me via Email</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="settingsCheckBox01" name="checkbox">
                    <label for="settingsCheckBox01">
                        <span class="check"></span>
                        <span class="box"></span>
                        <span class="tt-text">When someone replies to my thread</span>
                    </label>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="settingsCheckBox02" name="checkbox">
                    <label for="settingsCheckBox02">
                        <span class="check"></span>
                        <span class="box"></span>
                        <span class="tt-text">When someone likes my thread or reply</span>
                    </label>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="settingsCheckBox03" name="checkbox">
                    <label for="settingsCheckBox03">
                        <span class="check"></span>
                        <span class="box"></span>
                        <span class="tt-text">When someone mentions me</span>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <a href="#" class="btn btn-secondary">Save</a>
            </div>
            </form>
    </div>
    <a href="page-create-topic.html" class="tt-btn-create-topic">
        <span class="tt-icon">
            <svg>
              <use xlink:href="#icon-create_new"></use>
            </svg>
        </span>
    </a>
    
    <div class="modal fade" id="modalAdvancedSearch" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="tt-modal-advancedSearch">
                    <div class="tt-modal-title">
                        <i class="pt-icon">
                            <svg>
                                <use xlink:href="#icon-advanced_search"></use>
                            </svg>
                        </i>
                        Advanced Search
                        <a class="pt-close-modal" href="#" data-dismiss="modal">
                            <svg class="icon">
                                <use xlink:href="#icon-cancel"></use>
                            </svg>
                        </a>
                    </div>
                    <form class="form-default">
                        <div class="form-group">
                            <i class="pt-customInputIcon">
                               <svg class="tt-icon">
                                  <use xlink:href="#icon-search"></use>
                                </svg>
                            </i>
                            <input type="text" name="name" class="form-control pt-customInputSearch" id="searchForum" placeholder="Search all forums">
                        </div>
                        <div class="form-group">
                            <label for="searchName">Posted by</label>
                            <input type="text" name="name" class="form-control" id="searchName" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="searchCategory">In Category</label>
                            <input type="text" name="name" class="form-control" id="searchCategory" placeholder="Add Category">
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="searcCheckBox01" name="checkbox">
                            <label for="searcCheckBox01">
                                <span class="check"></span>
                                <span class="box"></span>
                                <span class="tt-text">Include all tags</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Only return topics/posts that...</label>
                            <div class="checkbox-group">
                                <input type="checkbox" id="searcCheckBox02" name="checkbox">
                                <label for="searcCheckBox02">
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <span class="tt-text">I liked</span>
                                </label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="searcCheckBox03" name="checkbox">
                                <label for="searcCheckBox03">
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <span class="tt-text">are in my messages</span>
                                </label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="searcCheckBox04" name="checkbox">
                                <label for="searcCheckBox04">
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <span class="tt-text">I???ve read</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="searchTop">
                                <option>any</option>
                                <option>value 01</option>
                                <option>value 02</option>
                                <option>value 03</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="searchaTopics">Where topics</label>
                            <select class="form-control" id="searchaTopics">
                                <option>any</option>
                                <option>value 01</option>
                                <option>value 02</option>
                                <option>value 03</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="searchAdvTime">Posted</label>
                            <div class="row">
                                <div class="col-6">
                                    <select class="form-control">
                                        <option>any</option>
                                        <option>value 01</option>
                                        <option>value 02</option>
                                        <option>value 03</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <input type="text" name="name" class="form-control" id="searchAdvTime" placeholder="dd-mm-yyyy">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="minPostCount">Minimum Post Count</label>
                            <select class="form-control" id="minPostCount">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option selected>10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-secondary btn-block">Search</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bundle.js"></script>
   
    </body>
</html>