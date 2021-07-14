


        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Forum - Responsive HTML5 Template</title>
            <meta name="keywords" content="HTML5 Template">
            <meta name="description" content="Forum - Responsive HTML5 Template">
            <meta name="author" content="Forum">
            <link rel="shortcut icon" href="favicon/favicon.ico">
            <meta name="format-detection" content="telephone=no">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="{{url('css/style.css')}}">
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73 63" id="icon-menu_icon"><path d="M68.5 9h-64a4.5 4.5 0 0 1 0-9h64a4.5 4.5 0 0 1 0 9zm0 27h-64a4.5 4.5 0 0 1 0-9h64c2.49 0 4.5 2.01 4.5 4.5S70.99 36 68.5 36zm0 27h-64a4.5 4.5 0 0 1 0-9h64c2.49 0 4.5 2.01 4.5 4.5S70.99 63 68.5 63z"></path></svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117 117" id="icon-search"><path d="M54 108C24.22 108 0 83.78 0 54S24.22 0 54 0s54 24.22 54 54-24.22 54-54 54zm0-99C29.19 9 9 29.19 9 54s20.19 45 45 45 45-20.19 45-45S78.81 9 54 9z"></path><path d="M112.5 117c-1.15 0-2.3-.44-3.18-1.32l-23.5-23.5a4.49 4.49 0 0 1 0-6.36 4.49 4.49 0 0 1 6.36 0l23.5 23.5a4.49 4.49 0 0 1 0 6.36c-.88.88-2.03 1.32-3.18 1.32z"></path></svg>
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
        <main id="tt-pageContent">
            <div class="container">
                <div class="tt-single-topic-list">
                    <div class="tt-item">
                         <div class="tt-single-topic">
                            <div class="tt-item-header">
                                <div class="tt-item-info info-top">
                                    <div class="tt-avatar-icon">
                                        <i class="tt-icon"><svg><use xlink:href="#icon-ava-d"></use></svg></i>
                                    </div>
                                    <div class="tt-avatar-title">
                                       <a href="{{url('user/'.$thread[0]->userId)}}">{{$thread[0]->name}}</a>
                                    </div>
                                    <a href="#" class="tt-info-time">
                                        <i class="tt-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126 126" id="icon-time"><path d="M63 0C28.21 0 0 28.21 0 63s28.21 63 63 63 63-28.21 63-63S97.79 0 63 0zm31.6 94.6a6.471 6.471 0 0 1-4.6 1.9c-1.66 0-3.33-.63-4.6-1.9l-27-27a6.507 6.507 0 0 1-1.55-6.72l10-29a6.499 6.499 0 1 1 12.29 4.23l-8.67 25.16L94.6 85.4a6.525 6.525 0 0 1 0 9.2z" fill="#666f75"></path></svg></i>{{$thread[0]->created_at}}
                                    </a>
                                </div>
                                <h3 class="tt-item-title">
                                    <a href="{{url('thread?id='.$thread[0]->id)}}">{{$thread[0]->title}}</a>
                                </h3>
                                <div class="tt-item-tag">
                                    @php
                                    $tagsForThread = App\Http\Controllers\TagController::TagsForThread($thread[0]->id);
                                    $i=1;
                                    $zero=0;
                                    @endphp
                                    @if (count($tagsForThread) > 0)
                                    <ul class="tt-list-badge">
                                    @foreach ($tagsForThread as $tag)
                                    @php
                                        if($i > 9){ $zero = null; }
                                    @endphp
                                    <li><a href="{{url('tag/'.$tag->name)}}"><span class="tt-color{{$zero.$i++}} tt-badge">{{$tag->name}}</span></a></li>
                                    @endforeach
                                    </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="tt-item-description">
                                {!!$thread[0]->content!!}
                            </div>
                            <div class="tt-item-info info-bottom">
                                <div class="col-separator"></div>
                                {{-- @php
                                    if(Auth()->user()->is_admin == 1)
                                @endphp --}}
                                @if (count($privilege['thread']) > 0)
                                <a href="{{url('thread/delete?id='.$thread[0]->id)}}" class="tt-icon-btn">
                                    <i class="tt-icon"><svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 64" width="64px" height="64px"><path d="M 28 6 C 25.791 6 24 7.791 24 10 L 24 12 L 23.599609 12 L 10 14 L 10 17 L 54 17 L 54 14 L 40.400391 12 L 40 12 L 40 10 C 40 7.791 38.209 6 36 6 L 28 6 z M 28 10 L 36 10 L 36 12 L 28 12 L 28 10 z M 12 19 L 14.701172 52.322266 C 14.869172 54.399266 16.605453 56 18.689453 56 L 45.3125 56 C 47.3965 56 49.129828 54.401219 49.298828 52.324219 L 51.923828 20 L 12 19 z M 20 26 C 21.105 26 22 26.895 22 28 L 22 51 L 19 51 L 18 28 C 18 26.895 18.895 26 20 26 z M 32 26 C 33.657 26 35 27.343 35 29 L 35 51 L 29 51 L 29 29 C 29 27.343 30.343 26 32 26 z M 44 26 C 45.105 26 46 26.895 46 28 L 45 51 L 42 51 L 42 28 C 42 26.895 42.895 26 44 26 z"/></svg></i>
                               </a>
                               <a href="{{url('thread/edit?id='.$thread[0]->id)}}" class="tt-icon-btn">
                                <i class="tt-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" xmlns:v="https://vecta.io/nano"><path d="M0 14.46v3.04c0 .28.22.5.5.5h3.04a.47.47 0 0 0 .35-.15L14.81 6.94l-3.75-3.75L.15 14.1a.49.49 0 0 0-.15.36zM17.71 4.04c.39-.39.39-1.02 0-1.41L15.37.29c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg></i>
                           </a>              
                                @endif

                              
                            </div>
                        </div>
                    </div>
                    @if (count($answers) > 0)
                    @foreach ($answers as $answer)
                    <div class="tt-item">
                        <div class="tt-single-topic">
                           <div class="tt-item-header pt-noborder">
                               <div class="tt-item-info info-top">
                                   <div class="tt-avatar-icon">
                                       <i class="tt-icon"><svg><use xlink:href="#icon-ava-t"></use></svg></i>
                                   </div>
                                   <div class="tt-avatar-title">
                                      <a href="{{url('user/'.$answer->userId)}}">{{$answer->name}}</a>
                                   </div>
                                   <a class="tt-info-time">
                                       <i class="tt-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126 126" id="icon-time"><path d="M63 0C28.21 0 0 28.21 0 63s28.21 63 63 63 63-28.21 63-63S97.79 0 63 0zm31.6 94.6a6.471 6.471 0 0 1-4.6 1.9c-1.66 0-3.33-.63-4.6-1.9l-27-27a6.507 6.507 0 0 1-1.55-6.72l10-29a6.499 6.499 0 1 1 12.29 4.23l-8.67 25.16L94.6 85.4a6.525 6.525 0 0 1 0 9.2z" fill="#666f75"></path></svg></i>{{$answer->created_at}}
                                   </a>
                               </div>
                           </div>
                           <div class="tt-item-description">
                            {!!$answer->content!!}
                           </div>
                           <div class="tt-item-info info-bottom">
                               <div class="col-separator"></div>
                               @php
                                $answerPrivilege = App\Http\Controllers\AnswerController::checkAnswerPrivilege($thread[0]->id, $answer->answerId)
                               @endphp
                               @if (count($answerPrivilege) > 0)
                               <a href="{{url('answer/delete?id='.$answer->answerId.'&thread='.$thread[0]->id)}}" class="tt-icon-btn">
                                <i class="tt-icon"><svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64px" height="64px"><path d="M 28 6 C 25.791 6 24 7.791 24 10 L 24 12 L 23.599609 12 L 10 14 L 10 17 L 54 17 L 54 14 L 40.400391 12 L 40 12 L 40 10 C 40 7.791 38.209 6 36 6 L 28 6 z M 28 10 L 36 10 L 36 12 L 28 12 L 28 10 z M 12 19 L 14.701172 52.322266 C 14.869172 54.399266 16.605453 56 18.689453 56 L 45.3125 56 C 47.3965 56 49.129828 54.401219 49.298828 52.324219 L 51.923828 20 L 12 19 z M 20 26 C 21.105 26 22 26.895 22 28 L 22 51 L 19 51 L 18 28 C 18 26.895 18.895 26 20 26 z M 32 26 C 33.657 26 35 27.343 35 29 L 35 51 L 29 51 L 29 29 C 29 27.343 30.343 26 32 26 z M 44 26 C 45.105 26 46 26.895 46 28 L 45 51 L 42 51 L 42 28 C 42 26.895 42.895 26 44 26 z"></path></svg></i>
                                </a>
                                <a href="{{url('answer/delete?id='.$answer->answerId.'&thread='.$thread[0]->id)}}" class="tt-icon-btn">
                                    <i class="tt-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" xmlns:v="https://vecta.io/nano"><path d="M0 14.46v3.04c0 .28.22.5.5.5h3.04a.47.47 0 0 0 .35-.15L14.81 6.94l-3.75-3.75L.15 14.1a.49.49 0 0 0-.15.36zM17.71 4.04c.39-.39.39-1.02 0-1.41L15.37.29c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg></i>
                                    </a>
                                @endif
                           </div>
                       </div>
                   </div>
                   @endforeach
                    @endif
                    

                    {{-- <h5>{{$answer->content}}</h3>    
                    <h6>posted by <a href="{{url('user/'.$answer->user_id)}}">{{$answer->name}}</a></h3>    
                    <h6>on {{$answer->created_at}}</h3>
                    <form action="{{url('answer/delete?id='.$answer->answer_id.'&thread='.$thread[0]->id)}}" method="post">
                        {{ csrf_field() }}
                        <button type="submit">Delete</button>
                        </form> --}}
                    



                </div>
                <div class="tt-wrapper-inner">
                    <h4 class="tt-title-separator"><span>You’ve reached the end of replies</span></h4>
                </div>
                @auth
                <div class="tt-wrapper-inner">
                    <div class="pt-editor form-default">
                        <h6 class="pt-title">Post Your Reply</h6>
                        <form id="reply" class="form-group" action="{{url('answer/new?id=').$thread[0]->id}}" method="POST">
                            {{csrf_field()}}
                            <textarea name="content" class="form-control" rows="5" placeholder="Lets get started"></textarea>
                        </form>
                        <div class="pt-row">

                            <div class="col-auto" style="right: 0;
                            position: absolute;">
                                <button type="submit" form="reply" class="btn btn-secondary btn-width-lg">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endauth
                <div class="tt-topic-list tt-ofset-30">
                    <div class="tt-row-btn">
                        <button type="button" class="btn-icon js-topiclist-showmore">
                            <svg class="tt-icon">
                              <use xlink:href="#icon-load_lore_icon"></use>
                            </svg>
                        </button>
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
                                        <span class="tt-text">I’ve read</span>
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
        <script src="{{url('js/bundle.js')}}"></script>
        </body>
        </html>