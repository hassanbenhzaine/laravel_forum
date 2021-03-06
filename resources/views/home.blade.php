
 
    {{-- @auth
    <form action="{{url('thread/new')}}" method="post">
        <input type="text" name="title" placeholder="Title">
        <textarea name="content" cols="30" rows="10" placeholder="Content"></textarea>
        <button type="submit">Publish</button>
        {{csrf_field()}}
    </form>
    @endauth

    


        @foreach ($threads as $thread)
        <h1><a href="{{url('thread').'?id='.$thread->threadId}}">{{$thread->title}}</a></h1>
        <h2>{{$thread->content}}</h2>
        @php
        $tagsForThread = App\Http\Controllers\TagController::TagsForThread($thread->threadId)
        @endphp
        @foreach ($tagsForThread as $tag)
            <h3 style="display: inline">{{$tag->name}}</h3>
        @endforeach
        <h4>{{$thread->created_at}}</h4>
        <h4>by <a href="{{url('user/'.$thread->userId)}}">{{$thread->name}}</a></h4>
        <form action="{{url('thread/delete').'?id='.$thread->threadId}}" method="post">
            {{ csrf_field() }}
            <button type="submit">Delete</button>
        </form>
    @endforeach




    
    
    @if (count($tags) > 0)
    <h1>Popular tags</h1>
        <ul>
            @foreach ($tags as $tag)
                <li><a href="{{url('/tag/'.$tag->name)}}">{{$tag->name}}</a></li>
            @endforeach
        </ul>
    @endif --}}

    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
 
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
                       
                        <a class="toggle-mobile-menu" href="#">
                            <svg class="tt-icon">
                              <use xlink:href="#icon-menu_icon"></use>
                            </svg>
                        </a>
                       
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
                        
                        <div class="tt-search">
                           
                            <button class="tt-search-toggle" data-toggle="modal" data-target="#modalAdvancedSearch">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117 117" id="icon-search"><path d="M54 108C24.22 108 0 83.78 0 54S24.22 0 54 0s54 24.22 54 54-24.22 54-54 54zm0-99C29.19 9 9 29.19 9 54s20.19 45 45 45 45-20.19 45-45S78.81 9 54 9z"></path><path d="M112.5 117c-1.15 0-2.3-.44-3.18-1.32l-23.5-23.5a4.49 4.49 0 0 1 0-6.36 4.49 4.49 0 0 1 6.36 0l23.5 23.5a4.49 4.49 0 0 1 0 6.36c-.88.88-2.03 1.32-3.18 1.32z"></path></svg>
                            </button>
                        
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
                        
                    </div>
                    <div class="col-auto ml-auto">
    
    @if (Auth::check())
    <div class="tt-user-info d-flex justify-content-center">
{{Auth::user()->name}}, &nbsp;&nbsp;<a href="{{route('logout')}}">Logout</a>

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
<main id="tt-pageContent" class="tt-offset-small">
    <div class="container">
        <div class="tt-topic-list">
            <div class="tt-list-header">
                <div class="tt-col-topic">Topic</div>
                <div class="tt-col-category">Category</div>
                <div class="tt-col-value hide-mobile">Likes</div>
                <div class="tt-col-value hide-mobile">Replies</div>
                <div class="tt-col-value hide-mobile">Views</div>
                <div class="tt-col-value">Activity</div>
            </div>
            @foreach ($threads as $thread)
            <div class="tt-item">
                <div class="tt-col-description">
                    <h6 class="tt-title"><a href="{{url('thread').'?id='.$thread->threadId}}">
                        {{$thread->title}}
                    </a></h6>

                    <div class="row align-items-center no-gutters">
                        @php
                        $tagsForThread = App\Http\Controllers\TagController::TagsForThread($thread->threadId)
                        @endphp
                        @if (count($tagsForThread) > 0)
                        <div class="col-11">
                            <ul class="tt-list-badge">
                                <li class="show-mobile"><a href="#"><span class="tt-color04 tt-badge">pets</span></a></li>
                                @foreach ($tagsForThread as $tag)
                                <li><a href="#"><span class="tt-badge">{{$tag->name}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="col-1 ml-auto show-mobile">
                            <div class="tt-value">5d</div>
                        </div>
                    </div>

                </div>
                @php
                $categoriesForThread = App\Http\Controllers\CategoryController::categoriesForThread($thread->threadId)
                @endphp
                @if (count($categoriesForThread) > 0)
                <div class="tt-col-category">
                    @foreach ($categoriesForThread as $category)
                    @php
                    $i = rand(1,21);
                    $z = 0;
                    if($i > 9) {$z = null; }
                @endphp
                        <span class="tt-color{{$z.$i}} tt-badge">{{$category->name}}</span>
                    @endforeach
                </div>
                @endif
                <div class="tt-col-value hide-mobile">{{$thread->likes}}</div>
                @php
                $answersCount = App\Http\Controllers\ThreadController::answersCountForThread($thread->threadId)
                @endphp
                <div class="tt-col-value tt-color-select hide-mobile">{{$answersCount->count}}</div>
                
                @php
    $value = $thread->views;
    if ($value > 999 && $value <= 999999) {
    $result  = floor($value / 1000) . 'k';
    } elseif ($value > 999999) {
    $result  = number_format((float)$value , 1, '.', '')/1000000 . 'm';
    } else {
    $result  = $value;
    }
                @endphp
                <div class="tt-col-value hide-mobile">{{$result}}</div>
                <div class="tt-col-value hide-mobile">5d</div>
            </div>
            @endforeach
      
        

            {{-- <h4>{{$thread->created_at}}</h4>
            <h4>by <a href="{{url('user/'.$thread->userId)}}">{{$thread->name}}</a></h4>
            <form action="{{url('thread/delete').'?id='.$thread->threadId}}" method="post">
                {{ csrf_field() }}
                <button type="submit">Delete</button>
            </form> --}}

            <div class="tt-row-btn">
                <div class="btn-icon js-topiclist-showmore">
                    {{$threads->links('pagination')}}
                </div>
            </div>
        </div>
    </div>
</main>

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
<a href="{{url('thread/new')}}" class="tt-btn-create-topic">
    <span class="tt-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 161.51 161.51" id="icon-create_new"><circle cx="80.76" cy="80.76" r="80.76" fill="#3571b8"></circle><path d="M80.76 121.26c-2.49 0-4.5-2.01-4.5-4.5v-72a4.5 4.5 0 0 1 9 0v72c0 2.48-2.02 4.5-4.5 4.5z"></path><path d="M116.76 85.26h-72a4.5 4.5 0 0 1 0-9h72a4.5 4.5 0 0 1 0 9z"></path></svg>
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